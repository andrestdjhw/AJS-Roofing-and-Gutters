<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

/**
 * Thank-you pages shown after a form submits successfully.
 * Each form redirects to its own URL so conversions can be tracked per form:
 *   /thank-you/1, /thank-you/2      -> home hero / home closing form
 *   /{page}/thank-you               -> forms on other pages
 * Rendered by thank-you.php; no WordPress pages need to exist for these URLs.
 */
function ajs_thank_you_pages() {
  $inspection = array(
    'heading' => 'Your inspection request is in.',
    'copy'    => 'Thanks for reaching out. A member of the AJS team will review your request and contact you within 24 hours to schedule your free inspection.',
  );

  return array(
    '1'               => $inspection,
    '2'               => $inspection,
    'estimate'        => $inspection,
    'locations'       => $inspection,
    'about'           => $inspection,
    'contacts'        => array(
      'heading' => 'Your message is on its way.',
      'copy'    => 'Thanks for contacting AJS Roofing & Gutters. Our team will get back to you within 24 hours with clear answers and next steps.',
    ),
    'schedule-a-call' => array(
      'heading' => 'Your call is requested.',
      'copy'    => 'Thanks for reaching out. A roofing expert from AJS will call you within 24 hours to talk through your project.',
    ),
  );
}

// Bump when the rules below change so they get flushed once.
define('AJS_THANK_YOU_RULES_VERSION', '1');

function ajs_thank_you_rewrite_rules() {
  add_rewrite_rule('^thank-you/(\d+)/?$', 'index.php?ajs_thank_you=$matches[1]', 'top');
  add_rewrite_rule('^(contacts|about|estimate|schedule-a-call|locations)/thank-you/?$', 'index.php?ajs_thank_you=$matches[1]', 'top');

  if (get_option('ajs_thank_you_rules_version') !== AJS_THANK_YOU_RULES_VERSION) {
    flush_rewrite_rules(false);
    update_option('ajs_thank_you_rules_version', AJS_THANK_YOU_RULES_VERSION);
  }
}

add_action('init', 'ajs_thank_you_rewrite_rules');

function ajs_thank_you_query_vars($vars) {
  $vars[] = 'ajs_thank_you';
  return $vars;
}

add_filter('query_vars', 'ajs_thank_you_query_vars');

// Returns the current thank-you page config, or null when not on one.
function ajs_current_thank_you() {
  $key = get_query_var('ajs_thank_you');
  if ($key === '') return null;

  $pages = ajs_thank_you_pages();
  return $pages[$key] ?? null;
}

function ajs_thank_you_template($template) {
  if (get_query_var('ajs_thank_you') === '') return $template;

  if (!ajs_current_thank_you()) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    return get_404_template() ?: $template;
  }

  status_header(200);
  return get_theme_file_path('thank-you.php');
}

add_filter('template_include', 'ajs_thank_you_template');

function ajs_thank_you_title($parts) {
  if (ajs_current_thank_you()) {
    $parts['title'] = 'Thank You';
  }
  return $parts;
}

add_filter('document_title_parts', 'ajs_thank_you_title');

// Keep confirmation pages out of search results.
function ajs_thank_you_robots($robots) {
  if (ajs_current_thank_you()) {
    $robots['noindex'] = true;
    $robots['nofollow'] = true;
  }
  return $robots;
}

add_filter('wp_robots', 'ajs_thank_you_robots');

function ajs_thank_you_no_canonical_redirect($redirect_url) {
  return get_query_var('ajs_thank_you') === '' ? $redirect_url : false;
}

add_filter('redirect_canonical', 'ajs_thank_you_no_canonical_redirect');

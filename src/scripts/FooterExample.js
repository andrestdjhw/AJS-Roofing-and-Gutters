import React from "react"

const PHONE_DISPLAY = "(505) 453-5626"
const PHONE_LINK = "tel:+15054535626"
const EMAIL = "info@ajsroofing.com"
const BBB_LINK = "https://www.bbb.org/us/nm/veguita/profile/roofing-contractors/ajs-professional-contracting-llc-0806-99137264/customer-reviews"
const YELP_LINK = "https://www.yelp.com/biz/ajs-professional-contracting-veguita?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)"
const FACEBOOK_LINK = "https://www.facebook.com/profile.php?id=61591119726818"
const INSTAGRAM_LINK = "https://www.instagram.com/ajsroofinggutters/?hl=en"
const LINKEDIN_LINK = "https://www.linkedin.com/company/ajs-roofing-gutters/"

const QUICK_LINKS = [
	{ label: "Home", href: "/" },
	{ label: "About", href: "/about" },
	{ label: "Projects", href: "/projects" },
	{ label: "Contact", href: "/contact" },
	{ label: "Get Your Free Inspection", href: "/estimate", highlight: true }
]

const SERVICES = [
	{ label: "Roof Replacement", href: "/service/roof-replacement" },
	{ label: "Commercial & Residential Roofing", href: "/service/commercial-residential-roofing" },
	{ label: "Seamless Gutters", href: "/service/gutters" },
	{ label: "Roof Repair", href: "/service/roof-repair" },
	{ label: "Storm Damage & Insurance", href: "/service/storm-damage-insurance" },
	{ label: "Roof Inspection & Maintenance", href: "/service/roof-inspection" }
]

const LOCATIONS = [
	{ label: "Albuquerque NE / High Desert", href: "/locations/albuquerque-ne-high-desert-87122" },
	{ label: "Far NE Heights", href: "/locations/far-ne-heights-87111" },
	{ label: "Albuquerque West", href: "/locations/albuquerque-west-87120" },
	{ label: "NW ABQ / Rio Rancho Border", href: "/locations/nw-abq-87114" },
	{ label: "Santa Fe Historic Core", href: "/locations/santa-fe-historic-core-87501" },
	{ label: "Northern Santa Fe", href: "/locations/northern-santa-fe-87506" },
	{ label: "Rio Rancho", href: "/locations/rio-rancho-87124" }
]

function PhoneIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function MailIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M4 6H20V18H4V6Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M4 8L12 13L20 8"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function ArrowUpRightIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M7 17L17 7"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M9 7H17V15"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function FacebookIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M14 8H16V4H13C10.8 4 9 5.8 9 8V10H7V14H9V20H13V14H16L17 10H13V8C13 7.45 13.45 7 14 7V8Z"
				stroke="currentColor"
				strokeWidth="1.6"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function InstagramIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<rect
				x="3"
				y="3"
				width="18"
				height="18"
				rx="5"
				stroke="currentColor"
				strokeWidth="1.6"
			/>
			<circle cx="12" cy="12" r="4" stroke="currentColor" strokeWidth="1.6" />
			<circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
		</svg>
	)
}

function LinkedinIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" strokeWidth="1.6" />
			<circle cx="7.7" cy="7.8" r="1.15" fill="currentColor" />
			<path d="M7.7 10.6V16.6" stroke="currentColor" strokeWidth="1.6" strokeLinecap="round" />
			<path
				d="M11 16.6V13.4C11 12.1 11.7 11.2 13 11.2C14.3 11.2 14.8 12 14.8 13.4V16.6"
				stroke="currentColor"
				strokeWidth="1.6"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path d="M11 16.6V10.9" stroke="currentColor" strokeWidth="1.6" strokeLinecap="round" />
		</svg>
	)
}

function YelpIcon({ className = "" }) {
	return (
		<svg viewBox="0 0 24 24" className={className} aria-hidden="true">
			<g fill="#E00707">
				<path d="M12.1 2.2c.5 0 .9.4.9.9l.3 5.2c0 .5-.4.9-.9.9h-1.8c-.5 0-.9-.4-.9-.9l.3-5.2c0-.5.4-.9.9-.9h1.2z"/>
				<path d="M6.6 6.5c.4-.4 1-.4 1.4 0l3.6 3.6c.4.4.4 1 0 1.4l-1.3 1.3c-.4.4-1 .4-1.4 0L5.3 9.2c-.4-.4-.4-1 0-1.4l1.3-1.3z"/>
				<path d="M17.4 6.5l1.3 1.3c.4.4.4 1 0 1.4l-3.6 3.6c-.4.4-1 .4-1.4 0l-1.3-1.3c-.4-.4-.4-1 0-1.4l3.6-3.6c.4-.4 1-.4 1.4 0z"/>
				<path d="M4.2 13.3c.2-.5.8-.7 1.3-.5l4.8 2c.5.2.7.8.5 1.3l-.7 1.6c-.2.5-.8.7-1.3.5l-4.8-2c-.5-.2-.7-.8-.5-1.3l.7-1.6z"/>
				<path d="M19.8 13.3l.7 1.6c.2.5 0 1.1-.5 1.3l-4.8 2c-.5.2-1.1 0-1.3-.5l-.7-1.6c-.2-.5 0-1.1.5-1.3l4.8-2c.5-.2 1.1 0 1.3.5z"/>
			</g>
		</svg>
	)
}

function FooterExample() {
	const currentYear = new Date().getFullYear()

	return (
		<footer className="ajs-footer" aria-label="Site footer">
			<div className="ajs-footer-top">
				<div className="ajs-footer-grid">
					<div className="ajs-footer-brand-col">
<a className="ajs-footer-brand" href="/" aria-label="AJS Roofing and Gutters Home">
	<img
		src="/wp-content/uploads/2026/04/AJS_Imagotipo-2.png"
		alt="AJS Roofing & Gutters"
		className="ajs-footer-brand-logo"
	/>
</a>


						<div className="ajs-footer-contact-list">
							<a href={PHONE_LINK} className="ajs-footer-contact-item">
								<PhoneIcon className="ajs-footer-icon" />
								<span>{PHONE_DISPLAY}</span>
							</a>

							<a href={`mailto:${EMAIL}`} className="ajs-footer-contact-item">
								<MailIcon className="ajs-footer-icon" />
								<span>{EMAIL}</span>
							</a>
						</div>

						<div className="ajs-footer-socials">
							<a
								href={FACEBOOK_LINK}
								className="ajs-footer-social-item"
								aria-label="Facebook"
								target="_blank"
								rel="noopener noreferrer"
							>
								<FacebookIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={INSTAGRAM_LINK}
								className="ajs-footer-social-item"
								aria-label="Instagram"
								target="_blank"
								rel="noopener noreferrer"
							>
								<InstagramIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={LINKEDIN_LINK}
								className="ajs-footer-social-item"
								aria-label="LinkedIn"
								target="_blank"
								rel="noopener noreferrer"
							>
								<LinkedinIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={YELP_LINK}
								className="ajs-footer-social-item"
								aria-label="Yelp Reviews"
								target="_blank"
								rel="noopener noreferrer"
							>
								<YelpIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={BBB_LINK}
								className="ajs-footer-bbb"
								aria-label="Better Business Bureau Reviews"
								target="_blank"
								rel="noopener noreferrer"
							>
								BBB
							</a>
						</div>

					</div>

					<div className="ajs-footer-col">
						<h3>Quick Links</h3>
						<ul>
							{QUICK_LINKS.map(link => (
								<li key={link.label}>
									<a
										href={link.href}
										className={link.highlight ? "is-highlight-link" : ""}
									>
										<span>{link.label}</span>
										{link.highlight && (
											<ArrowUpRightIcon className="ajs-footer-link-icon" />
										)}
									</a>
								</li>
							))}
						</ul>
					</div>

					<div className="ajs-footer-col">
						<h3>Services</h3>
						<ul>
							{SERVICES.map(link => (
								<li key={link.label}>
									<a href={link.href}>{link.label}</a>
								</li>
							))}
						</ul>
					</div>

					<div className="ajs-footer-col">
						<h3>Locations</h3>
						<ul>
							{LOCATIONS.map(link => (
								<li key={link.label}>
									<a href={link.href}>{link.label}</a>
								</li>
							))}
						</ul>
					</div>
				</div>
			</div>

			<div className="ajs-footer-bottom">
				<div className="ajs-footer-bottom-inner">
					<p>© {currentYear} AJS Roofing & Gutters. All rights reserved.</p>

					<div className="ajs-footer-legal">
	<a href="/privacy-policy">Privacy Policy</a>
	<a href="/terms-conditions">Terms &amp; Conditions</a>
</div>
				</div>
			</div>
		</footer>
	)
}

export default FooterExample
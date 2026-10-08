import React from "react"
import { BbbIcon, FacebookIcon, InstagramIcon, LinkedinIcon, YelpIcon } from "./SocialIcons"

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
								className="ajs-footer-social-link"
								aria-label="Facebook"
								target="_blank"
								rel="noopener noreferrer"
							>
								<FacebookIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={INSTAGRAM_LINK}
								className="ajs-footer-social-link"
								aria-label="Instagram"
								target="_blank"
								rel="noopener noreferrer"
							>
								<InstagramIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={LINKEDIN_LINK}
								className="ajs-footer-social-link"
								aria-label="LinkedIn"
								target="_blank"
								rel="noopener noreferrer"
							>
								<LinkedinIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={YELP_LINK}
								className="ajs-footer-social-link"
								aria-label="Yelp Reviews"
								target="_blank"
								rel="noopener noreferrer"
							>
								<YelpIcon className="ajs-footer-social-icon" />
							</a>

							<a
								href={BBB_LINK}
								className="ajs-footer-social-link"
								aria-label="Better Business Bureau Reviews"
								target="_blank"
								rel="noopener noreferrer"
							>
								<BbbIcon className="ajs-footer-social-icon" />
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
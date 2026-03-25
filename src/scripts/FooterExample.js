import React from "react"

const PHONE_DISPLAY = "(505) 000-0000"
const PHONE_LINK = "tel:+15050000000"
const EMAIL = "hello@ajsroofing.com"

const QUICK_LINKS = [
	{ label: "Home", href: "/" },
	{ label: "About", href: "/about" },
	{ label: "Projects", href: "/projects" },
	{ label: "Contact", href: "/contact" },
	{ label: "Get Your Free Inspection", href: "/estimate", highlight: true }
]

const SERVICES = [
	{ label: "Roof Replacement", href: "/service/roof-replacement" },
	{ label: "Metal Roofing", href: "/service/metal-roofing" },
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

function FooterExample() {
	const currentYear = new Date().getFullYear()

	return (
		<footer className="ajs-footer" aria-label="Site footer">
			<div className="ajs-footer-top">
				<div className="ajs-footer-grid">
					<div className="ajs-footer-brand-col">
<a className="ajs-footer-brand" href="/" aria-label="AJS Roofing and Gutters Home">
	<img
		src="http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/03/image-2-scaled.png"
		alt="AJS Roofing & Gutters"
		className="ajs-footer-brand-logo"
	/>
</a>
						<p className="ajs-footer-description">
							AJS Roofing & Gutters brings order, clarity, and professional execution
							to roofing and gutter projects across Albuquerque, Santa Fe, Rio Rancho,
							and surrounding New Mexico communities.
						</p>

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

						<div className="ajs-footer-socials" aria-label="Social media">
							<a href="#" aria-label="Facebook" className="ajs-footer-social-link">
								<FacebookIcon className="ajs-footer-social-icon" />
							</a>
							<a href="#" aria-label="Instagram" className="ajs-footer-social-link">
								<InstagramIcon className="ajs-footer-social-icon" />
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
						<a href="/terms">Terms</a>
					</div>
				</div>
			</div>
		</footer>
	)
}

export default FooterExample
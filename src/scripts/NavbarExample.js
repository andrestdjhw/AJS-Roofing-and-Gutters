import React, { useEffect, useRef, useState } from "react"

const PHONE_DISPLAY = "(505) 000-0000"
const PHONE_LINK = "tel:+15050000000"

const SERVICES_MENU = [
	{
		title: "Core Services",
		links: [
			{ label: "Roof Replacement", href: "/service/service-roof-replacement/" },
			{ label: "Metal Roofing", href: "/service/metal-roofing" },
			{ label: "Seamless Gutters", href: "/service/gutters" }
		]
	},
	{
		title: "Repairs & Protection",
		links: [
			{ label: "Roof Repair", href: "/service/roof-repair" },
			{ label: "Storm Damage & Insurance", href: "/service/storm-damage-insurance" },
			{ label: "Roof Inspection & Maintenance", href: "/service/roof-inspection" }
		]
	},
	{
		title: "Why AJS",
		links: [
			{ label: "Our 5-Step Process", href: "/#process" },
			{ label: "Projects Gallery", href: "/projects" },
			{ label: "Talk to an Expert", href: "/schedule-a-call" },
			{ label: "Get Your Free Inspection", href: "/estimate", isHighlight: true }
		]
	}
]

const LOCATIONS_MENU = [
	{
		tier: "Albuquerque",
		links: [
			{ label: "Albuquerque NE / High Desert", href: "/locations/albuquerque-ne-high-desert-87122" },
			{ label: "Far NE Heights", href: "/locations/far-ne-heights-87111" },
			{ label: "Albuquerque West", href: "/locations/albuquerque-west-87120" },
			{ label: "NW ABQ / Rio Rancho", href: "/locations/nw-abq-87114" },
		]
	},
	{
		tier: "Santa Fe",
		links: [
			{ label: "Santa Fe Historic Core", href: "/locations/santa-fe-historic-core-87501" },
			{ label: "Northern Santa Fe", href: "/locations/northern-santa-fe-87506" },
		]
	},
	{
		tier: "Rio Rancho",
		links: [
			{ label: "Rio Rancho", href: "/locations/rio-rancho-87124" },
		]
	}
]

const MAIN_NAV = [
	{ label: "Home", href: "/" },
	{ label: "About", href: "/about" },
	{ label: "Services", type: "mega" },
	{ label: "Projects", href: "/projects" },
	{ label: "Locations", type: "dropdown" },
	{ label: "Contact", href: "/contact" }
]

function ChevronDownIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 20 20" fill="none" aria-hidden="true">
			<path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
		</svg>
	)
}

function PhoneIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
		</svg>
	)
}

function MenuIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M4 7H20" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
			<path d="M4 12H20" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
			<path d="M4 17H20" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
		</svg>
	)
}

function CloseIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M6 6L18 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
			<path d="M18 6L6 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
		</svg>
	)
}

function NavbarExample() {
	const [activeMenu, setActiveMenu] = useState(null)
	const [mobileOpen, setMobileOpen] = useState(false)
	const [mobileServicesOpen, setMobileServicesOpen] = useState(false)
	const [mobileLocationsOpen, setMobileLocationsOpen] = useState(false)
	const closeTimeoutRef = useRef(null)

	useEffect(() => {
		return () => {
			if (closeTimeoutRef.current) clearTimeout(closeTimeoutRef.current)
		}
	}, [])

	function openMenu(menuName) {
		if (closeTimeoutRef.current) clearTimeout(closeTimeoutRef.current)
		setActiveMenu(menuName)
	}

	function closeMenuNow() {
		if (closeTimeoutRef.current) clearTimeout(closeTimeoutRef.current)
		setActiveMenu(null)
	}

	function closeMenuWithDelay() {
		if (closeTimeoutRef.current) clearTimeout(closeTimeoutRef.current)
		closeTimeoutRef.current = setTimeout(() => {
			setActiveMenu(null)
		}, 120)
	}

	function closeEverything() {
		closeMenuNow()
		setMobileOpen(false)
		setMobileServicesOpen(false)
		setMobileLocationsOpen(false)
	}

	return (
		<header className="ajs-nav-wrap">
			<div className="ajs-nav-shell">
				<div className="ajs-nav-top">
					<a className="ajs-nav-brand" href="/" aria-label="AJS Roofing and Gutters Home">
						<img
							src="/wp-content/uploads/2026/03/AJS_Imagotipo_horizontal-scaled.png"
							alt="AJS Roofing & Gutters"
							className="ajs-nav-brand-logo"
						/>
					</a>

					<nav
						className="ajs-nav-desktop"
						aria-label="Main navigation"
						onMouseLeave={closeMenuWithDelay}
					>
						{MAIN_NAV.map(item => {
							if (item.type === "mega") {
								return (
									<div key={item.label} className="ajs-nav-item" onMouseEnter={() => openMenu("services")}>
										<button
											type="button"
											className={`ajs-nav-trigger ${activeMenu === "services" ? "is-active" : ""}`}
											onFocus={() => openMenu("services")}
											aria-expanded={activeMenu === "services"}
										>
											{item.label}
											<ChevronDownIcon className="ajs-nav-caret" />
										</button>
									</div>
								)
							}

							if (item.type === "dropdown") {
								return (
									<div key={item.label} className="ajs-nav-item" onMouseEnter={() => openMenu("locations")}>
										<button
											type="button"
											className={`ajs-nav-trigger ${activeMenu === "locations" ? "is-active" : ""}`}
											onFocus={() => openMenu("locations")}
											aria-expanded={activeMenu === "locations"}
										>
											{item.label}
											<ChevronDownIcon className="ajs-nav-caret" />
										</button>
									</div>
								)
							}

							return (
								<a key={item.label} className="ajs-nav-link" href={item.href}>
									{item.label}
								</a>
							)
						})}
					</nav>

					<div className="ajs-nav-actions">
						<a className="ajs-nav-phone desktop-only" href={PHONE_LINK} aria-label={`Call ${PHONE_DISPLAY}`}>
							<PhoneIcon className="ajs-nav-phone-svg" />
							<span>{PHONE_DISPLAY}</span>
						</a>

						<a className="ajs-nav-quote desktop-only" href="/estimate">
							Get Your Free Inspection
						</a>

						<a className="ajs-nav-icon-button mobile-only" href={PHONE_LINK} aria-label="Call AJS Roofing and Gutters">
							<PhoneIcon className="ajs-nav-icon-svg" />
						</a>

						<button
							type="button"
							className="ajs-nav-mobile-toggle mobile-only"
							aria-expanded={mobileOpen}
							aria-controls="ajs-mobile-menu"
							onClick={() => setMobileOpen(prev => !prev)}
						>
							{mobileOpen ? <CloseIcon className="ajs-nav-icon-svg" /> : <MenuIcon className="ajs-nav-icon-svg" />}
							<span>{mobileOpen ? "Close" : "Menu"}</span>
						</button>
					</div>
				</div>

				{/* Services mega menu — sin cambios */}
				<div
					className={`ajs-nav-dropdown ajs-nav-mega ${activeMenu === "services" ? "is-open" : ""}`}
					onMouseEnter={() => openMenu("services")}
					onMouseLeave={closeMenuWithDelay}
				>
					<div className="ajs-nav-dropdown-inner">
						<div className="ajs-nav-mega-header">
							<p className="ajs-nav-eyebrow">Roofing Without Uncertainty</p>
							<h2>Services built on order, clarity, and lasting protection.</h2>
						</div>
						<div className="ajs-nav-mega-grid">
							{SERVICES_MENU.map(section => (
								<div key={section.title} className="ajs-nav-section">
									<h3>{section.title}</h3>
									<ul>
										{section.links.map(link => (
											<li key={link.label}>
												<a href={link.href} className={link.isHighlight ? "is-highlight-link" : ""}>
													{link.label}
												</a>
											</li>
										))}
									</ul>
								</div>
							))}
						</div>
					</div>
				</div>

{/* Locations — ahora usa exactamente el mismo estilo que services */}
<div
    className={`ajs-nav-dropdown ajs-nav-mega ${activeMenu === "locations" ? "is-open" : ""}`}
    onMouseEnter={() => openMenu("locations")}
    onMouseLeave={closeMenuWithDelay}
>
    <div className="ajs-nav-dropdown-inner">
        <div className="ajs-nav-mega-header">
            <p className="ajs-nav-eyebrow">Proudly Serving New Mexico</p>
            <h2>Roofing and gutters across Albuquerque, Santa Fe & Rio Rancho.</h2>
        </div>
        <div className="ajs-nav-mega-grid">
            {LOCATIONS_MENU.map(group => (
                <div key={group.tier} className="ajs-nav-section">
                    <h3>{group.tier}</h3>
                    <ul>
                        {group.links.map(link => (
                            <li key={link.label}>
                                <a href={link.href}>{link.label}</a>
                            </li>
                        ))}
                    </ul>
                </div>
            ))}
        </div>
    </div>
</div>

				{/* Mobile menu — sin cambios */}
				<div id="ajs-mobile-menu" className={`ajs-mobile-panel ${mobileOpen ? "is-open" : ""}`}>
					<a href="/" className="ajs-mobile-link" onClick={closeEverything}>Home</a>
					<a href="/about" className="ajs-mobile-link" onClick={closeEverything}>About</a>

					<div className="ajs-mobile-group">
						<button
							type="button"
							className="ajs-mobile-group-trigger"
							onClick={() => setMobileServicesOpen(prev => !prev)}
							aria-expanded={mobileServicesOpen}
						>
							<span>Services</span>
							<ChevronDownIcon className={`ajs-mobile-caret ${mobileServicesOpen ? "is-open" : ""}`} />
						</button>
						{mobileServicesOpen && (
							<div className="ajs-mobile-group-panel">
								{SERVICES_MENU.map(section => (
									<div key={section.title} className="ajs-mobile-section">
										<h3>{section.title}</h3>
										{section.links.map(link => (
											<a key={link.label} href={link.href} onClick={closeEverything}>
												{link.label}
											</a>
										))}
									</div>
								))}
							</div>
						)}
					</div>

					<a href="/projects" className="ajs-mobile-link" onClick={closeEverything}>Projects</a>

					<div className="ajs-mobile-group">
						<button
							type="button"
							className="ajs-mobile-group-trigger"
							onClick={() => setMobileLocationsOpen(prev => !prev)}
							aria-expanded={mobileLocationsOpen}
						>
							<span>Locations</span>
							<ChevronDownIcon className={`ajs-mobile-caret ${mobileLocationsOpen ? "is-open" : ""}`} />
						</button>
						{mobileLocationsOpen && (
							<div className="ajs-mobile-group-panel">
								{LOCATIONS_MENU.map(group => (
									<div key={group.tier} className="ajs-mobile-section">
										<h3>{group.tier}</h3>
										{group.links.map(link => (
											<a key={link.label} href={link.href} onClick={closeEverything}>
												{link.label}
											</a>
										))}
									</div>
								))}
							</div>
						)}
					</div>

					<a href="/contact" className="ajs-mobile-link" onClick={closeEverything}>Contact</a>

					<div className="ajs-mobile-cta-wrap">
						<a href="/estimate" className="ajs-mobile-cta" onClick={closeEverything}>
							Get Your Free Inspection
						</a>
						<a href={PHONE_LINK} className="ajs-mobile-call" onClick={closeEverything}>
							<PhoneIcon className="ajs-mobile-call-icon" />
							<span>Call {PHONE_DISPLAY}</span>
						</a>
					</div>
				</div>
			</div>
		</header>
	)
}

export default NavbarExample
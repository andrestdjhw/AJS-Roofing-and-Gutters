import React from "react"

const PHONE_LINK = "tel:+15054535626"
const PHONE_DISPLAY = "(505) 453-5626"

function PhoneIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
		</svg>
	)
}

function CallUsFlotante() {
	return (
		<a
			href={PHONE_LINK}
			className="ajs-fab"
			aria-label={`Call AJS Roofing at ${PHONE_DISPLAY}`}
		>
			<span className="ajs-fab-ring" aria-hidden="true" />
			<span className="ajs-fab-inner">
				<PhoneIcon className="ajs-fab-icon" />
				<span className="ajs-fab-text">
					<span className="ajs-fab-eyebrow">Call Us</span>
					<span className="ajs-fab-number">{PHONE_DISPLAY}</span>
				</span>
			</span>
		</a>
	)
}

export default CallUsFlotante

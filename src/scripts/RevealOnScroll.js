// Site-wide scroll reveal: replays .ajs-reveal / -left / -right every time a section
// comes back into view, instead of animating only on the first scroll.
const REVEAL_SELECTOR = ".ajs-reveal, .ajs-reveal-left, .ajs-reveal-right"

// Reset only once an element is this far outside the viewport. It must exceed the
// largest reveal offset (40px) so the element's own transform can't pull it back into
// view and make it flicker between states.
const RESET_MARGIN = "120px 0px 120px 0px"

export default function initRevealOnScroll() {
	const items = document.querySelectorAll(REVEAL_SELECTOR)
	if (!items.length) return

	if (!("IntersectionObserver" in window)) {
		items.forEach((item) => item.classList.add("is-visible"))
		return
	}

	const showObserver = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) entry.target.classList.add("is-visible")
			})
		},
		{ threshold: 0.12 }
	)

	items.forEach((item) => showObserver.observe(item))

	// With reduced motion, reveal once and never replay.
	if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return

	const resetObserver = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) entry.target.classList.remove("is-visible")
			})
		},
		{ rootMargin: RESET_MARGIN, threshold: 0 }
	)

	items.forEach((item) => resetObserver.observe(item))
}

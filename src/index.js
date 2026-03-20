import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import NavbarExample from "./scripts/NavbarExample"
import FooterExample from "./scripts/FooterExample"
import React from "react"
import ReactDOM from "react-dom/client"
import "./index.css"

const person1 = new Person("Brad")

if (document.querySelector("#render-react-example-here")) {
	const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
	root.render(<ExampleReactComponent />)
}

if (document.querySelector("#render-react-navbar-here")) {
	const navbarRoot = ReactDOM.createRoot(document.querySelector("#render-react-navbar-here"))
	navbarRoot.render(<NavbarExample />)
}

if (document.querySelector("#footer-react")) {
	const footerRoot = ReactDOM.createRoot(document.querySelector("#footer-react"))
	footerRoot.render(<FooterExample />)
}
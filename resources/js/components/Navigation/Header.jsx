import React from "react";
import { MDBIcon } from "mdbreact";
import { InertiaLink } from "@inertiajs/inertia-react";

export default function Header() {
    return (
        <>
            <header className="header-section">
                <div className="header-top">
                    <InertiaLink href="#">
                        <img
                            src="images/logo/logo.png"
                            height="50px"
                            width="75px"
                            alt="image"
                            className="logo"
                        />
                    </InertiaLink>
                    <div className="container">
                        <div className="ht-left">
                            <div className="mail-service">
                                <i className=" fa fa-envelope"></i>
                                boxshopping@gmail.com
                            </div>
                            <div className="phone-service">
                                <i className="fa fa-phone"></i>
                                +256759189296
                            </div>
                        </div>
                        <div className="ht-right">
                            <div className="register">
                                <InertiaLink href="#" className="login-panel">
                                    Login
                                </InertiaLink>
                                <a href="#" className="signup-panel">
                                    SignUp
                                </a>
                            </div>
                            <div className="top-social">
                                <InertiaLink href="#">
                                    <MDBIcon fab icon="facebook" />
                                </InertiaLink>
                                <InertiaLink href="#">
                                    <MDBIcon fab icon="whatsapp" />
                                </InertiaLink>
                                <InertiaLink href="#">
                                    <MDBIcon fab icon="twitter" />
                                </InertiaLink>
                                <InertiaLink href="#">
                                    <MDBIcon fab icon="instagram" />
                                </InertiaLink>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="container">
                    <div className="inner-header">
                        <div className="row">
                            <div className="col-lg-7 col-md-7 ">
                                <div className="input-group">
                                    <input
                                        type="text"
                                        className="form-control"
                                        placeholder="What do you need?"
                                    />
                                    <div className="input-group-append mb-5">
                                        <button
                                            className="btn btn-secondary btn-search"
                                            type="button"
                                        >
                                            <i className="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-5 col-md-5 text-right">
                                <ul className="nav-right">
                                    <li className="heart-icon">
                                        <InertiaLink href="#">
                                            <MDBIcon far icon="heart" />
                                            WishList
                                        </InertiaLink>
                                    </li>
                                    <li className="cart-icon">
                                        <InertiaLink href="#">
                                            <MDBIcon icon="shopping-cart" />
                                            Cart
                                        </InertiaLink>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="nav-item">
                    <nav className="navbar navbar-expand-lg navbar-light bg-dark">
                        <div
                            className="collapse navbar-collapse"
                            id="navbarNavDropdown"
                        >
                            <div className="container">
                                <ul className="navbar-nav">
                                    <li className="nav-item dropdown">
                                        <InertiaLink
                                            className="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownMenuLink"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Box Shop
                                        </InertiaLink>
                                        <div
                                            className="menu-container"
                                            aria-labelledby="navbarDropdownMenuLink"
                                        >
                                            <ul className="menu dropdown-menu">
                                                <li>
                                                    <InertiaLink
                                                        href="#"
                                                        className="dropdown-item"
                                                    >
                                                        <MDBIcon icon="tshirt" />
                                                        fashion
                                                    </InertiaLink>

                                                    <div className="megadrop">
                                                        <h2>Mens Collection</h2>
                                                        <div className="col">
                                                            <h3>T-shirts </h3>
                                                            <ul>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        Polo
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        office
                                                                        shirts
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        button
                                                                        shirts
                                                                    </InertiaLink>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div className="col">
                                                            <h3>Sweaters</h3>
                                                            <ul>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        v-neck
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        crew
                                                                        neck
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        turtle
                                                                        neck
                                                                    </InertiaLink>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div className="col">
                                                            <h3>Pants</h3>
                                                            <ul>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        Kaki
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        Suit
                                                                        pants
                                                                    </InertiaLink>
                                                                </li>
                                                                <li>
                                                                    <InertiaLink href="#">
                                                                        sweat
                                                                        pants
                                                                    </InertiaLink>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <InertiaLink
                                                        href="#"
                                                        className="dropdown-item"
                                                    >
                                                        <MDBIcon icon="car-alt" />
                                                        Cars
                                                    </InertiaLink>
                                                    <div className="megadrop"></div>
                                                </li>

                                                <li>
                                                    <InertiaLink
                                                        href="#"
                                                        className="dropdown-item"
                                                    >
                                                        <MDBIcon icon="hamburger" />
                                                        food
                                                    </InertiaLink>
                                                    <div className="megadrop"></div>
                                                </li>
                                                <li>
                                                    <InertiaLink
                                                        href="#"
                                                        className="dropdown-item"
                                                    >
                                                        <MDBIcon icon="paw" />
                                                        livestock
                                                    </InertiaLink>
                                                    <div className="megadrop"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li className="nav-item">
                                        <InertiaLink
                                            className="nav-link"
                                            href="#"
                                        >
                                            Home
                                        </InertiaLink>
                                    </li>
                                    <li className="nav-item">
                                        <InertiaLink
                                            className="nav-link"
                                            href="#"
                                        >
                                            About Us
                                        </InertiaLink>
                                    </li>
                                    <li className="nav-item">
                                        <InertiaLink
                                            className="nav-link"
                                            href="#"
                                        >
                                            Contacts
                                        </InertiaLink>
                                    </li>
                                    <li className="nav-item">
                                        <InertiaLink
                                            className="nav-link"
                                            href="#"
                                        >
                                            Testimonials
                                        </InertiaLink>
                                    </li>
                                    <li className="nav-item">
                                        <InertiaLink
                                            className="nav-link"
                                            href="#"
                                        >
                                            FAQs
                                        </InertiaLink>
                                    </li>
                                    <li className="nav-item dropdown">
                                        <InertiaLink
                                            className="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownMenuLink"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Pages
                                        </InertiaLink>
                                        <div
                                            className="dropdown-menu"
                                            aria-labelledby="navbarDropdownMenuLink"
                                        >
                                            <InertiaLink
                                                className="dropdown-item"
                                                href="#"
                                            >
                                                Register
                                            </InertiaLink>
                                            <InertiaLink
                                                className="dropdown-item"
                                                href="#"
                                            >
                                                Login
                                            </InertiaLink>
                                            <InertiaLink
                                                className="dropdown-item"
                                                href="#"
                                            >
                                                Shopping Cart
                                            </InertiaLink>
                                            <InertiaLink
                                                className="dropdown-item"
                                                href="#"
                                            >
                                                Chat Room
                                            </InertiaLink>
                                            <InertiaLink
                                                className="dropdown-item"
                                                href="#"
                                            >
                                                Wishlist
                                            </InertiaLink>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </>
    );
}

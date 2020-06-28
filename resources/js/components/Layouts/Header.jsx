import React from "react";
import { MDBIcon, MDBCol } from "mdbreact";

export default function Header() {
    return (
        <>
            <header className="header-section">
                <div className="header-top">
                    <a href="#">
                        <img
                            src="images/logo/logo.png"
                            height="55px"
                            width="85px"
                            alt="image"
                            className="logo"
                        />
                    </a>
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
                                <a href="#" className="login-panel">
                                    Login
                                </a>
                                <a href="#" className="signup-panel">
                                    SignUp
                                </a>
                            </div>
                            <div className="top-social">
                                <a href="#">
                                    <MDBIcon fab icon="facebook" />
                                </a>
                                <a href="#">
                                    <MDBIcon fab icon="whatsapp" />
                                </a>
                                <a href="#">
                                    <MDBIcon fab icon="twitter" />
                                </a>
                                <a href="#">
                                    <MDBIcon fab icon="instagram" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="container">
                    <div className="inner-header">
                        <div className="row">
                            <div className="col-lg-7 col-md-7">
                                <div className="advanced-search">
                                    <div className="dropdown">
                                        <button
                                            href="#"
                                            className="category-btn"
                                        >
                                            BOX SEARCH
                                        </button>
                                    </div>
                                    <div className="input-group">
                                        <input
                                            type="text"
                                            placeholder="What do you need?"
                                        />
                                        <button type="button">
                                            <i className="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-5 col-md-5 text-right">
                                <ul className="nav-right">
                                    <li className="heart-icon">
                                        <a href="#">
                                            <MDBIcon far icon="heart" />
                                            WishList
                                        </a>
                                    </li>
                                    <li className="cart-icon">
                                        <a href="#">
                                            <MDBIcon icon="shopping-cart" />{" "}
                                            Cart
                                        </a>
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
                            <div className='container'>
                            <ul className="navbar-nav">
                                <li className="nav-item">
                                    <a className="nav-link" href="#">
                                        Home
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#">
                                        About Us
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#">
                                        Contacts
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#">
                                        FAQs
                                    </a>
                                </li>
                                <li className="nav-item dropdown">
                                    <a
                                        className="nav-link dropdown-toggle"
                                        href="#"
                                        id="navbarDropdownMenuLink"
                                        role="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Pages
                                    </a>
                                    <div
                                        className="dropdown-menu"
                                        aria-labelledby="navbarDropdownMenuLink"
                                    >
                                        <a className="dropdown-item" href="#">
                                            Register
                                        </a>
                                        <a className="dropdown-item" href="#">
                                            Login
                                        </a>
                                        <a className="dropdown-item" href="#">
                                            FAQS
                                        </a>
                                        <a className="dropdown-item" href="#">
                                            Shopping Cart
                                        </a>
                                        <a className="dropdown-item" href="#">
                                            Wishlist
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div className='products'>
                    Hello world
                </div>
            </header>
        </>
    );
}

import React from "react";
import { MDBIcon } from "mdbreact";

export default function Footer() {
    return (
        <footer className="footer-section">
            <div className="container">
                <div className="row">
                    <div className="col-lg-3">
                        <div className="footer-left">
                            <div className="footer-logo">
                                <a href="#">
                                    <img
                                        src="images/logo/logo.png"
                                        height="50px"
                                        width="60px"
                                        alt="logo"
                                    />
                                </a>
                                <span>Box Online shopping</span>
                            </div>

                            <ul>
                                <li>Address: Kampala, Uganda</li>
                                <li>Phone: +256759189296</li>
                                <li>Email: austinstan24@gmail.com</li>
                            </ul>
                            <div className="footer-social">
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
                    <div className="col-lg-2 offset-lg-1">
                        <div className="footer-widget">
                            <h5>Information</h5>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Blog details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-2">
                        <div className="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li>
                                    <a href="#">My Account</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="#">Shop</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-4">
                        <div className="newslatter-item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>
                                Get E-mail updates about our latest shop and
                                special offers.
                            </p>
                            <form action="#" class="subscribe-form">
                                <input
                                    type="text"
                                    placeholder="Enter Your Mail"
                                />
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    );
}

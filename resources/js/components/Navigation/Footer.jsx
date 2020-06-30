import React from "react";
import { MDBIcon } from "mdbreact";
import { InertiaLink } from "@inertiajs/inertia-react";

export default function Footer() {
    return (
        <footer className="footer-section">
            <div className="container">
                <div className="row">
                    <div className="col-lg-3">
                        <div className="footer-left">
                            <div className="footer-logo">
                                <InertiaLink href="#">
                                    <img
                                        src="images/logo/logo.png"
                                        height="50px"
                                        width="60px"
                                        alt="logo"
                                    />
                                </InertiaLink>
                                <span>Box Online shopping</span>
                            </div>

                            <ul>
                                <li>Address: Kampala, Uganda</li>
                                <li>Phone: +256759189296</li>
                                <li>Email: austinstan24@gmail.com</li>
                            </ul>
                            <div className="footer-social">
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
                    <div className="col-lg-2 offset-lg-1">
                        <div className="footer-widget">
                            <h5>Information</h5>
                            <ul>
                                <li>
                                    <InertiaLink href="#">About Us</InertiaLink>
                                </li>
                                <li>
                                    <InertiaLink href="#">Contact Us</InertiaLink>
                                </li>
                                <li>
                                    <InertiaLink href="#">Blog details</InertiaLink>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-2">
                        <div className="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li>
                                    <InertiaLink href="#">My Account</InertiaLink>
                                </li>
                                <li>
                                    <InertiaLink href="#">Contact</InertiaLink>
                                </li>
                                <li>
                                    <InertiaLink  href="#">Shopping Cart</InertiaLink>
                                </li>
                                <li>
                                    <InertiaLink href="#">Shop</InertiaLink>
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
                            <form action="#" className="subscribe-form">
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

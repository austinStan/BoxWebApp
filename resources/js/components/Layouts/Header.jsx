import React from "react";
import {MDBIcon} from 'mdbreact';

export default function Header() {
    return (
        <>
            <header className="header-section bg-dark">
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
            </header>
        </>
    );
}

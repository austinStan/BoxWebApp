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
                                    <button
                                        type="button"
                                        className="category-btn"
                                    >
                                        All Categories
                                    </button>
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
                                    <li className='heart-icon'>
                                        <a href="#">
                                            <MDBIcon far icon="heart" />
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li className='cart-icon'>
                                        <a href="#">
                                        <MDBIcon icon="shopping-cart" />
                                        <span>3</span>
                                        </a>
                                        <div className="cart-hover">
                                    <div className="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td className="si-pic"><img src="img/select-product-1.jpg" alt=""/></td>
                                                    <td className="si-text">
                                                        <div className="product-selected">
                                                            <p>shs100,000.00</p>
                                                            <h6>Shoes</h6>
                                                        </div>
                                                    </td>
                                                    <td className="si-close">
                                                    <MDBIcon far icon="times-circle" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td className="si-pic"><img src="img/select-product-2.jpg" alt=""/></td>
                                                    <td className="si-text">
                                                        <div className="product-selected">
                                                            <p>shs50,000.00</p>
                                                            <h6>T-shirt</h6>
                                                        </div>
                                                    </td>
                                                    <td className="si-close">
                                                    <MDBIcon far icon="times-circle" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div className="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div className="select-button">
                                        <a href="#" className="primary-btn view-card">BOX CARD</a>
                                        <a href="#" className="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="nav-item"></div>
            </header>
        </>
    );
}

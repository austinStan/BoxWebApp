import React from "react";

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
                </div>
            </header>
        </>
    );
}

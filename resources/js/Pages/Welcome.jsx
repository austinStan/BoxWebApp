import React from "react";
import Layout from "./Layout";
import Carousel from "../components/Carousel";

const Welcome = () => {
    return (
        <div className='bg-white'>
            <Carousel />
            <section className="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
            <div className="container">
                <div className="col-lg-6 text-center">
                    <div className="section-title">
                        <h2>Deal Of The Week</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            <br /> do ipsum dolor sit amet, consectetur
                            adipisicing elit{" "}
                        </p>
                        <div className="product-price">
                            $35.00
                            <span>/ HanBag</span>
                        </div>
                    </div>
                    <div className="countdown-timer" id="countdown">
                        <div className="cd-item">
                            <span>29</span> <p>Days</p>{" "}
                        </div>
                        <div className="cd-item">
                            <span>05</span> <p>Hrs</p>{" "}
                        </div>
                        <div className="cd-item">
                            <span>01</span> <p>Mins</p>{" "}
                        </div>
                        <div className="cd-item">
                            <span>18</span> <p>Secs</p>{" "}
                        </div>
                    </div>
                    <a href="#" className="primary-btn">
                        Shop Now
                    </a>
                </div>
            </div>
            </section>
        </div>
    );
};
Welcome.layout = page => (
    <Layout children={page} title="welcome | Box Online Shopping" />
);

export default Welcome;

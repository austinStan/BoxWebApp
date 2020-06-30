import React from "react";
import Layout from "./Layout";
import Carousel from "../components/Carousel";
import Item2 from '../components/Item2';

const Welcome = () => {
    return (
        <div className='bg-white'>
            <Carousel />
            <section className="deal-of-week set-bg spad">
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
                            55,000 shs
                            <span>/ HanBag</span>
                        </div>
                    </div>
                    <a href="#" className="primary-btn">
                        Shop Now
                    </a>
                </div>
            </div>
            </section>
            <div>
            <Item2/>
            </div>
           
        </div>
    );
};
Welcome.layout = page => (
    <Layout children={page} title="welcome | Box Online Shopping" />
);

export default Welcome;

import React from "react";
import Layout from "./Layout";
import Carousel from "../components/Advertisement";
import NewProducts from "../components/NewProducts";
import Food from "../components/Food";

const Welcome = () => {
    return (
        <div className='bg-white'> 
            <section className='carousel-order'>
            <Carousel />
            </section>
            <section className="set-bg">
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
            <section className='products'>
                <NewProducts/>
            </section>
            <section className='food'>
                <Food/>
            </section>
            
           
           
        </div>
    );
};
Welcome.layout = page => (
    <Layout children={page} title="welcome | Box Online Shopping" />
);

export default Welcome;

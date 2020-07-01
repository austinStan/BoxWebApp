import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

function Food() {
    return (
        <div className="card allfoods">
            <div className="food-item overlay">
                <h2> FOOD ITEMS</h2>
                <div className='cfs'>
                    <InertiaLink href='#' className='view-food'>VIEW ALL<i className="fas fa-angle-right"></i></InertiaLink>
                </div>
            </div>
            <div className="card-body fd">
                <div className="row fd-item">
                    <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                <InertiaLink href="#">
                        <img src='images/imagescarousel/cookie.jpg' alt='food-item1'/>
                         
                      <div className="name">Cookie</div>
                      <div className="prc">UGX 5,000</div>
                </InertiaLink>
                </div>
            </div>
        </div>
    );
}

export default Food;

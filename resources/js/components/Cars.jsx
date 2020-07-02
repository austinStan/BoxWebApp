import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

function Fashion() {
    return (
        <div className="card keq">
            <div className="kkl overlay">
                <h2>Cars</h2>
                <div className="cfs">
                    <InertiaLink href="#" className="view-cars">
                        VIEW ALL<i className="fas fa-angle-right"></i>
                    </InertiaLink>
                </div>
            </div>
            <div className="card-body fd">
                <div className="row fd-item">
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 5</div>
                        <div className="prc">UGX 4,555,555,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 5</div>
                        <div className="prc">UGX 4,555,555,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 5</div>
                        <div className="prc">UGX 4,555,555,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 5</div>
                        <div className="prc">UGX 4,555,555,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 5</div>
                        <div className="prc">UGX 4,555,555,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/cars/car5.jpg" alt="" />

                        <div className="name">Car 6</div>
                        <div className="prc">UGX 5,766,745,000</div>
                    </InertiaLink>
                </div>
            </div>
        </div>
    );
}

export default Fashion;

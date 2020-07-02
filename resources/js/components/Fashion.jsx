import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

function Fashion() {
    return (
        <div className="card tty">
            <div className="fsw overlay">
                <h2>Fashion</h2>
                <div className="cfs">
                    <InertiaLink href="#" className="view-fashion">
                        VIEW ALL<i className="fas fa-angle-right"></i>
                    </InertiaLink>
                </div>
            </div>
            <div className="card-body fd">
                <div className="row fd-item">
                    <InertiaLink href="#">
                        <img src="images/imagescarousel/man-1.jpg" alt="" />

                        <div className="name">Bag</div>
                        <div className="prc">UGX 15,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/imagescarousel/man-2.jpg" alt="" />

                        <div className="name">Shoe</div>
                        <div className="prc">UGX 35,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/imagescarousel/man-3.jpg" alt="" />

                        <div className="name">Jacket</div>
                        <div className="prc">UGX 45,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/imagescarousel/man-4.jpg" alt="" />

                        <div className="name">Jean Jacket</div>
                        <div className="prc">UGX 45,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img src="images/imagescarousel/women-1.jpg" alt="" />

                        <div className="name">Top</div>
                        <div className="prc">UGX 25,000</div>
                    </InertiaLink>
                    <InertiaLink href="#">
                        <img
                            src="images/imagescarousel/women-2.jpg"
                            alt="food-item1"
                        />

                        <div className="name">Top</div>
                        <div className="prc">UGX 45,000</div>
                    </InertiaLink>
                </div>
            </div>
        </div>
    );
}

export default Fashion;

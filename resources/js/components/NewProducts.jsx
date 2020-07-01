import React from "react";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import {
    MDBCard,
    MDBCardBody,
    MDBCardImage,
    MDBCol
} from "mdbreact";

export default function NewProducts() {
    const responsive = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 3,
            slidesToSlide: 3, // optional, default to 1.
            partialVisibilityGutter: 40
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            slidesToSlide: 2 // optional, default to 1.
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            slidesToSlide: 1 // optional, default to 1.
        }
    };
    return (
        <div className="card new-products">
            <div className="row brand-new overlay">
                <h2>Brand New Products</h2>
            </div>
            <div className="card-body">
                <Carousel
                    partialVisible={true}
                    swipeable={false}
                    draggable={true}
                    showDots={true}
                    responsive={responsive}
                    ssr={true}
                    infinite={false}
                    //autoPlay={this.props.deviceType !== "mobile" ? true : false}
                    autoPlaySpeed={100}
                    keyBoardControl={true}
                    transitionDuration={300}
                    containerClass="carousel-container"
                    removeArrowOnDeviceType={["tablet", "mobile"]}
                    dotListClass="custom-dot-list-style"
                    itemClass="carousel-item-padding-40-px"
                >
                   
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/product-4.jpg"
                                        waves
                                    />
                                    <div className="sale">Sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name"> Scurf</div>
                                        <a href="#">
                                            <h5>SGS scuffs</h5>
                                        </a>
                                        <div className="product-price">UGX 22.000</div>
                                        <div className="tag_dsct">23%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/product-6.jpg"
                                        waves
                                    />
                                    <div className="sale">Sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name">Sweater</div>
                                        <a href="#">
                                            <h5>Knit Sweaters</h5>
                                        </a>
                                        <div className="product-price">UGX 60.000</div>
                                        <div className="tag_dsct">15%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-1.jpg"
                                        waves
                                    />
                                    <div className="sale">Sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name"> Bag</div>
                                        <a href="#">
                                            <h5>Guangzhou Bag</h5>
                                        </a>
                                        <div className="product-price">UGX 49.000</div>
                                        <div className="tag_dsct">13%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-2.jpg"
                                        waves
                                    />
                                    <div className="sale">sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name">shoes</div>
                                        <a href="#">
                                            <h5>global footwear</h5>
                                        </a>
                                        <div className="product-price">UGX 85.000</div>
                                        <div className="tag_dsct">30%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-3.jpg"
                                        waves
                                    />
                                    <div className="sale">Sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name">Jacket</div>
                                        <a href="#">
                                            <h5>Guangzhou Jacket</h5>
                                        </a>
                                        <div className="product-price">UGX 90.000</div>
                                        <div className="tag_dsct">12%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">Sale</div>
                                    <div className="pi-text">
                                        <div className="catagory-name">Jacket</div>
                                        <a href="#">
                                            <h5>Jean Jacket</h5>
                                        </a>
                                        <div className="product-price">UGX 56.000</div>
                                        <div className="tag_dsct">10%</div>
                                    </div>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                </Carousel>
            </div>
        </div>
    );
}

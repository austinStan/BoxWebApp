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
            <div className="brand-new overlay">
                <h2>Brand New Products</h2>
            </div>
            <div className="card-body">
                <Carousel
                    partialVisible={true}
                    swipeable={false}
                    draggable={true}
                    showDots={false}
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
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/product-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">23%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/product-6.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">15%</div>
                                
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-1.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">13%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-2.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">30%</div>
                                    
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-3.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">12%</div>
                                    
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                        <div>
                        <MDBCol style={{ maxWidth: "14rem" }}>
                            <MDBCard className="product-item">
                                <MDBCardBody className="product-body">
                                    <MDBCardImage
                                        className="img-fluid"
                                        src="images/imagescarousel/man-4.jpg"
                                        waves
                                    />
                                    <div className="sale">On Sale</div>
                                    <div className="tag_dsct">10%</div>
                                </MDBCardBody>
                                <div className="name">Saraya Toilet Seat Sanitizer - 60ml</div>
                                <div className="product-price">UGX 22.000</div>
                            </MDBCard>
                        </MDBCol>
                    </div>
                </Carousel>
            </div>
        </div>
    );
}

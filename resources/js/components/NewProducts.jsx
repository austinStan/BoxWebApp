import React from "react";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import {
    MDBBtn,
    MDBCard,
    MDBCardBody,
    MDBCardImage,
    MDBCardTitle,
    MDBCardText,
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
        <div className="card">
            <div className="view overlay">
                <h3>New Products</h3>
            </div>
            <div className="card-body">
                <Carousel
                    partialVisible={true}
                    swipeable={true}
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
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                    <div>
                    <MDBCol style={{ maxWidth: "22rem" }}>
                            <MDBCard>
                                <MDBCardImage
                                    className="img-fluid"
                                    src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                    waves
                                />
                                <MDBCardBody>
                                    <MDBCardTitle>Card title</MDBCardTitle>
                                    <MDBCardText>
                                        Some quick example text to build on the
                                        card title and make up the bulk of the
                                        card's content.
                                    </MDBCardText>
                                    <MDBBtn href="#">Click</MDBBtn>
                                </MDBCardBody>
                            </MDBCard>
                        </MDBCol>
                    </div>
                </Carousel>
            </div>
        </div>
    );
}

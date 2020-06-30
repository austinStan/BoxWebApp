import React, { Component } from "react";

export class Item2 extends Component {
    render() {
        return (
            <section className="text-center my-5">
                <h2 className="h1-responsive font-weight-bold text-center my-5">
                    Our bestsellers
                </h2>
                <p className="grey-text text-center w-responsive mx-auto mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Fugit, error amet numquam iure provident voluptate esse
                    quasi, veritatis totam voluptas nostrum quisquam eum porro a
                    pariatur veniam.
                </p>

                <div
                    id="multi-item-example"
                    className="carousel slide carousel-multi-item"
                    data-ride="carousel"
                >
                    <div className="controls-top">
                        <a
                            className="btn-floating primary-color waves-effect waves-light"
                            href="#multi-item-example"
                            data-slide="prev"
                        >
                            <i className="fas fa-chevron-left"></i>
                        </a>
                        <a
                            className="btn-floating primary-color waves-effect waves-light"
                            href="#multi-item-example"
                            data-slide="next"
                        >
                            <i className="fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <ol className="carousel-indicators">
                        <li
                            className="primary-color active"
                            data-target="#multi-item-example"
                            data-slide-to="0"
                        ></li>
                        <li
                            className="primary-color"
                            data-target="#multi-item-example"
                            data-slide-to="1"
                        ></li>
                        <li
                            className="primary-color"
                            data-target="#multi-item-example"
                            data-slide-to="2"
                        ></li>
                    </ol>

                    <div className="carousel-inner" role="listbox">
                        <div className="carousel-item active">
                            <div className="col-md-4 mb-2">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Leather boots</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                69$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Jeans</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Slim jeans</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                99$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Shorts</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Denim shorts</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                49$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <div className="col-md-4 mb-2">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Summer hat</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                39$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Black heels</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                79$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Outerwear</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Black jacket</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                149$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <div className="col-md-4 mb-2">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Leather bag</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                29$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Leather belt</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                89$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-2 clearfix d-none d-md-block">
                                <div className="card card-cascade narrower card-ecommerce">
                                    <div className="view view-cascade overlay">
                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg"
                                            className="card-img-top"
                                            alt="sample photo"
                                        />
                                        <a>
                                            <div className="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div className="card-body card-body-cascade text-center">
                                        <a href="" className="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 className="card-title my-4">
                                            <strong>
                                                <a href="">Sneakers</a>
                                            </strong>
                                        </h4>
                                        <p className="card-text">
                                            Neque porro quisquam est, qui
                                            dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci.
                                        </p>
                                        <div className="card-footer px-1">
                                            <span className="float-left">
                                                129$
                                            </span>
                                            <span className="float-right">
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Quick Look"
                                                >
                                                    <i className="fas fa-eye ml-3"></i>
                                                </a>
                                                <a
                                                    className=""
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title=""
                                                    data-original-title="Add to Wishlist"
                                                >
                                                    <i className="fas fa-heart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}

export default Item2;

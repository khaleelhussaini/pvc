@extends('layouts.app')
@section('content')

<section class="dm-section p-30">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.company-sidebar')
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <div class="product-cart-intrested">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-5">
                                    <h4 class="product-title">Mild Steel Vertical Drilling Machine</h4>
                                    <h6 class="package-dm">Premium</h6>
                                    <p class="location-dm">Andheri,Mumbai</p>
                                    <p class="vendor-name"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd</p>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="product-price">₹ 12,23,023</h5>
                                    <button class="btn btn-contact-vendor">Contact Vendor</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-intrested">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-5">
                                    <h4 class="product-title">Mild Steel Vertical Drilling Machine</h4>
                                    <h6 class="package-dm">Premium</h6>
                                    <p class="location-dm">Andheri,Mumbai</p>
                                    <p class="vendor-name"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd</p>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="product-price">₹ 12,23,023</h5>
                                    <button class="btn btn-contact-vendor">Contact Vendor</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-intrested">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-5">
                                    <h4 class="product-title">Mild Steel Vertical Drilling Machine</h4>
                                    <h6 class="package-dm">Premium</h6>
                                    <p class="location-dm">Andheri,Mumbai</p>
                                    <p class="vendor-name"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd</p>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="product-price">₹ 12,23,023</h5>
                                    <button class="btn btn-contact-vendor">Contact Vendor</button>
                                </div>
                            </div>

                            <div class="product-cart-intrested">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="product-title">Mild Steel Vertical Drilling Machine</h4>
                                        <h6 class="package-dm">Premium</h6>
                                        <p class="location-dm">Andheri,Mumbai</p>
                                        <p class="vendor-name"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <h5 class="product-price">₹ 12,23,023</h5>
                                        <button class="btn btn-contact-vendor">Contact Vendor</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
</section>

@endsection

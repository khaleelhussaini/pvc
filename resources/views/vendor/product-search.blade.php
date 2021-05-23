@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <ul id="filterOptions">
                <li>
                    <form action="" class="">
                        <div class="form-group">
                            <i class="fas fa-map-marker-alt search-location-icon"></i>
                            <input type="text" placeholder="Enter Location"
                                class="form-control pl-4 search-box-right-border" id="myInput">
                        </div>
                    </form>
                </li>
                <li class="active"><a href="#" class="all">All cities</a></li>
                <li><a href="#" class="hyderabad">Hyderabad</a></li>
                <li><a href="#" class="delhi">New Delhi</a></li>
                <li><a href="#" class="mumbai">Mumbai</a></li>
                <li><a href="#" class="">Chennai</a></li>
                <li><a href="#" class="">Bangalore</a></li>
                <li><a href="#" class="">Ahmedabad</a></li>
                <li><a href="#" class="">Pune</a></li>
                <li><a href="#" class="">Kolkata</a></li>
            </ul>


            <!-- side filter -->
            <div class="col-sm-2 side-filter-vertical-border">
                <div class="side-filters">
                    <h4>Filters</h4>
                    <h5>category</h5>
                    <form action="/action_page.php">
                        <input type="checkbox" id="" name="" value="">
                        <label>Drill Rigs</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>Drill Rigs Parts</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>Drill Pipe</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>DTH Hammer</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>DTH Hammer Parts</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>Drill bits</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>Sub Adaptors</label><br>
                        <input type="checkbox" id="" name="" value="">
                        <label>Casing</label><br>
                    </form>
                </div>
            </div>
            <!-- end side filter -->
            <div class="col-sm-7">
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-sm-6">
                        <h4 class="line-height-0">Drill Rigs</h4>
                    </div>
                    <div class="col-sm-6 search-menus-option text-right">
                        <span>324 results found</span>
                        <span><i class="fas fa-bars"></i></span>
                        <span><i class="fas fa-th-large"></i></span>

                    </div>
                </div>
                <div id="ourHolder">
                    <!-- <div class="item hyderabad">
                        <h3>Hyderabad</h3>
                    </div>
                    <div class="item delhi">
                        <h3>Webinars</h3>
                    </div>
                    <div class="item mumbai">
                        <h3>Partner Engagement</h3>
                    </div>
                    <div class="item hyderabad">
                        <h3>Hyderabad</h3>
                    </div>
                    <div class="item delhi">
                        <h3>Webinars</h3>
                    </div>
                    <div class="item New delhi">
                        <h3>Webinars</h3>
                    </div>
                    <div class="item mumbai">
                        <h3>Partner Engagement</h3>
                    </div>
                    <div class="item category-partner-engagement">
                        <h3>Partner Engagement</h3>
                    </div> -->
                    <div class="product-cart-intrested hyderabad">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h4 class="product-title-search">Mild Steel Vertical Drilling Machine</h4>
                                <p class="location-dm"><i class="fas fa-map-marker-alt"></i> hi-tech,hyderabad</p>
                                <p class="vendor-name-search"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd
                                </p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="product-price">₹ 12,23,023</h5>
                                <button class="btn btn-contact-vendor">Contact Vendor</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-cart-intrested delhi">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h4 class="product-title-search">Mild Steel Vertical Drilling Machine</h4>
                                <p class="location-dm"><i class="fas fa-map-marker-alt"></i> Andheri,delhi</p>
                                <p class="vendor-name-search"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd
                                </p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="product-price">₹ 12,23,023</h5>
                                <button class="btn btn-contact-vendor">Contact Vendor</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-cart-intrested hyderabad">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h4 class="product-title-search">Mild Steel Vertical Drilling Machine</h4>
                                <p class="location-dm"><i class="fas fa-map-marker-alt"></i> hyderabad</p>
                                <p class="vendor-name-search"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd
                                </p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="product-price">₹ 12,23,023</h5>
                                <button class="btn btn-contact-vendor">Contact Vendor</button>
                            </div>
                        </div>
                    </div>
                    <div class="advertisment mt-2  p-4 ads-color">
                        <h4 class="text-center">Ad Space</h4>
                    </div>

                    <div class="product-cart-intrested mumbai">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h4 class="product-title-search">Mild Steel Vertical Drilling Machine</h4>
                                <p class="location-dm"><i class="fas fa-map-marker-alt"></i> Andheri,Mumbai</p>
                                <p class="vendor-name-search"><small>Product by</small> <br>ABC Manufacturer Pvt. Ltd
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

            <div class="col-sm-3 mt-5">
                <div class="ads-color" style="padding: 30%;">
                    <h4>Ad Space</h4>
                </div>
                <div class="ads-color mt-2" style="padding: 30%;">
                    <h4>Ad Space</h4>
                </div>
                <div class="ads-color mt-2" style="padding: 30%;height: 450px;">
                    <h4>Ad Space</h4>
                </div>
            </div>


        </div>
    </div>

</section>







@endsection

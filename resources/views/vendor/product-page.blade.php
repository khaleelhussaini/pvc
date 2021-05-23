@extends('layouts.app')
@section('content')

<section class="p-30 product-img">
    <div class="container">
        <div class="pb-4">
            <h5> <a href="\">
                    <Home>Home > Drill Rigs > Product Name
                </a> </h5>
        </div>
        <div class="row">
            <div class="col-sm-5 p-0">
                <div id="custCarousel" class="carousel slide" data-ride="carousel">
                    <!-- slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src="{{asset('/images/products/2.png')}}"
                                alt="Drilling Mart" class="img-fluid">
                        </div>
                        <div class="carousel-item"> <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart"
                                class="img-fluid">
                        </div>
                        <div class="carousel-item"> <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart"
                                class="img-fluid">
                        </div>
                        <div class="carousel-item"> <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart"
                                class="img-fluid">
                        </div>
                    </div> <!-- Left right -->
                    <!-- <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next"
                        href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> -->
                    <!-- Thumbnails -->
                    <ol class="carousel-indicators list-inline" style="    margin-left: -2%;">
                        <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected"
                                data-slide-to="0" data-target="#custCarousel">
                                <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart" class="img-fluid">
                            </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1"
                                data-target="#custCarousel">
                                <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart" class="img-fluid">
                            </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2"
                                data-target="#custCarousel">
                                <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart" class="img-fluid">
                            </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3"
                                data-target="#custCarousel">
                                <img src="{{asset('/images/products/2.png')}}" alt="Drilling Mart" class="img-fluid">
                            </a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-page-details">
                    <h2>Mild Steel Vertical Drilling Machine</h2>
                    <div>
                        <table style="width:100%">
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                        </table>
                        <p class="show-compilite-details">Show complete details</p>
                    </div>
                    <div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" style="font-size: 15px;">Quantity </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control quantitiy">
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-buttons">
                        <button>Get Quote</button>
                        <button>Add to Favourites</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-card">
                    <div class="product-card-user">
                        <button>Premium</button>
                        <img
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDIwMS4xODUgMjAxLjE4NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8cGF0aCBzdHlsZT0iIiBkPSJNMTAwLjU5NCwwLjAwMkM0NS4xMTksMC4wMDIsMCw0NS4xMiwwLDEwMC41OTNjMCw1NS40NjksNDUuMTIyLDEwMC41OTEsMTAwLjU5OCwxMDAuNTkxICAgYzU1LjQ2NSwwLDEwMC41ODctNDUuMTIyLDEwMC41ODctMTAwLjU5MUMyMDEuMTgyLDQ1LjEyLDE1Ni4wNTksMC4wMDIsMTAwLjU5NCwwLjAwMnogTTczLjA5NCw4MS40NzFsMC4yMDQtMC4yMjUgICBjMC44Mi0wLjU5OCwxLjIyLTEuNTI4LDEuMDctMi41MDVjLTIuMDI5LTEyLjE5LTAuNjk4LTE3LjI3Mi0wLjI1MS0xOC41NDZjMy41NDMtMTAuODY1LDE0LjY1Mi0xNS44OTQsMTYuODM1LTE2Ljc4MSAgIGMwLjQ2NS0wLjE4MywxLjMyMS0wLjQ0NCwyLjE5LTAuNTc2bDAuMjU4LTAuMDU3bDEuNzg5LTAuMDk3bDAuMDE0LDAuMTExbDAuNDEyLTAuMDM5YzAuMzcyLTAuMDM5LDAuNzIzLTAuMDkzLDEuMTYzLTAuMTgzICAgbDAuMzk0LTAuMDg2YzAuMzUxLDAuMDA0LDQuNjc4LDAuNTUxLDExLjEwMiwyLjUyM2w0LjQ2NiwxLjUzOWM4LjE2NywyLjQxMiwxMS45MjgsNi45MDQsMTIuNjIzLDcuODA1ICAgYzYuNTM5LDcuNDEyLDQuNzkyLDE4LjU5OSwzLjE2NywyNC42MDhjLTAuMTgzLDAuNzA5LTAuMDc1LDEuNDM5LDAuMzI5LDIuMDQ0bDAuMzcyLDAuNDU4YzAuNDc2LDAuNjQ0LDAuODk4LDMuMTI4LTAuNTIzLDguNDA3ICAgYy0wLjI2OCwxLjYtMC44NTksMi45MDItMS43MzksMy43ODNjLTAuMzI5LDAuMzU4LTAuNTUxLDAuODEyLTAuNjM3LDEuMzIxYy0yLjIwOCwxMi45NjMtMTMuODI1LDI3LjQ2MS0yNi4wNjUsMjcuNDYxICAgYy0xMC4zODYsMC0yMi4yNDMtMTMuMzQyLTI0LjM3Ni0yNy40NWMtMC4wODItMC41My0wLjMwMS0wLjk5MS0wLjY2OS0xLjM4OWMtMC44OTEtMC45MTYtMS40NTMtMi4yNDQtMS43OTctNC4yMDkgICBDNzIuNCw4NS42ODMsNzIuMjkzLDgyLjcwOSw3My4wOTQsODEuNDcxeiBNNDkuNzc4LDEzNy42OGMwLjQ1MS0wLjU3MywyLjk2LTMuNTE0LDguMDQyLTUuNDUxICAgYzQuNDY2LTEuMzc0LDE1LjUwNC01LjAzOSwyMS41NDEtOS40MTZjMC4yODMtMC4xNTQsMC41NjItMC40NDQsMC43OTEtMC42ODRjMC41NTgtMC42MDEsMS40MTQtMS41MTQsMi40MjMtMi40NTlsMC41NjItMC41MzMgICBsMC41NzMsMC41MzdjNS4zMTUsNS4wMTQsMTEuMTk4LDcuNzYzLDE2LjU1OSw3Ljc2M2M1LjYzNywwLDExLjQ1Mi0yLjQ0MSwxNi44MjEtNy4wNjFsMC40MjItMC4zNjVsMS4xMzgsMC41NTUgICBjMS4wMTYsMC45MzQsMi43ODEsMi4yMTUsMy42LDIuNjA5bDEuMDQ1LDAuNTA4bC0wLjEwNywwLjExNWwwLjQ2NSwwLjI4M2MwLjk4OCwwLjU5OCwyLjA2NSwxLjE3NywzLjMzNSwxLjgwNCAgIGMxLjI3OCwwLjU2MiwyLjM0NCwwLjk4MSwzLjQ1NCwxLjM0MmMwLjkzLDAuMzAxLDUuODk4LDEuOTcyLDExLjU0OSw0LjU4NWwxLjA3NywwLjMyMmM1LjUyMiwyLjExNSw3Ljk3Nyw1LjA1Myw4LjIyNCw1LjM2MSAgIGM2LjU1Myw5LjcyLDkuMDcyLDI3Ljg1NCwxMC4wMDYsMzcuOTYxYy0xNy4xMjgsMTMuOTExLTM4LjY3NywyMS41Ny02MC42OTcsMjEuNTdjLTIyLjAzNSwwLTQzLjU4Ny03LjY2Mi02MC43MDgtMjEuNTczICAgQzQwLjgxLDE2NS4zNzcsNDMuMzA0LDE0Ny4yOTcsNDkuNzc4LDEzNy42OHogTTE1NS40ODMsMTM0LjY5NWwtMC4zNDctMC40MDRjLTEuNjMyLTIuMDMzLTUuMjIyLTQuODk5LTEwLjQ0My02LjlsLTAuODIzLTAuMjQ3ICAgYy01LjIyNS0yLjQwOS05Ljk2LTQuMDUxLTExLjc1Ny00LjY0NWwtMC4xNCwwLjQxMmwwLDBsMC4wMzYtMC40NDRjLTEuMTI3LTAuMzc2LTIuMDU4LTAuNzY5LTIuODc0LTEuMTI3ICAgYy01Ljk1Mi0yLjkyNC02LjcxLTQuNjI3LTYuODM5LTUuMDIxbC0wLjI5Ny0wLjY3NmwwLjI2MS0wLjYxNmM0LjQ3NC01LjU4Myw3LjYxMi0xMi4wODYsOC44MTUtMTguMjEzbDAuMTUtMC4zNzIgICBjMS4yNi0xLjU3NSwyLjA1NC0zLjQzNiwyLjM2OS01LjQ3NmMxLjQxNy01LjEyOCwxLjQ4NS04LjkwNCwwLjItMTEuNTM1bC0wLjEyMi0wLjI2OGwwLjA2OC0wLjI5MyAgIGMxLjU4OS02LjY0MiwzLjExNC0xOS4wOTctNC41MTMtMjcuNzU0Yy0xLjIwNi0xLjUyNS01LjgyNi02LjY4NS0xNC45NTYtOS4zNTlsLTQuNDM4LTEuNTI1Yy03LjM4My0yLjI3My0xMi0yLjc2Ni0xMi42MDEtMi43NyAgIGwwLDBjLTAuNDk3LDAtMC45MTMsMC4wNDctMS41MzksMC4xOTNsLTAuNTg3LDAuMWMtMC4zMDgtMC4wNDctMC42NDQtMC4wNzItMC45OTgtMC4wNzJjLTIuMzU4LDAtNC45MTQsMS4wMi01LjAzNSwxLjA2MyAgIGMtMi41NTUsMS4wNy0xNS41NDMsNy4wNjUtMTkuNjU1LDE5Ljc5MWMtMC42NzYsMS44LTIuMDc2LDcuMzAxLTAuMjc5LDE5LjM0NGwwLjA1NywwLjM0bC0wLjIxMSwwLjI4MyAgIGMtMS44NDcsMi40NzctMS45OSw2LjUwNi0wLjQ0NCwxMS45MjFjMC4zOSwyLjM5OCwxLjE3NCw0LjMxMywyLjMzNyw1Ljc2NmwwLjIsMC40MjljMS4xMjQsNi4yOTIsMy45MjYsMTIuNTE1LDguMDk5LDE3Ljk5MSAgIGwwLjM2MSwwLjQ4N2wtMC4zMjksMC40OWMtMC4xNzksMC4yNTEtMC4zMDgsMC41My0wLjM1MSwwLjczYy0xLjAzMSwyLjkzMS0xMi41NDQsOC4wNy0yMi42NDcsMTEuMTU5ICAgYy03LjM4MywyLjc5MS0xMC41MDgsNy4yNTgtMTAuNTA4LDcuMjU4Yy02LjI1OSw5LjI5MS05LjEyNiwyNC45MjMtMTAuNDQsMzYuNzIzYy0xOS43ODctMTguMjQ1LTMxLjEwNC00NC4wMjMtMzEuMTA0LTcwLjg2NSAgIGMwLTUzLjE3MSw0My4yNTgtOTYuNDI5LDk2LjQzNi05Ni40MjljNTMuMTcxLDAsOTYuNDM2LDQzLjI1OCw5Ni40MzYsOTYuNDI5YzAsMjYuODQ1LTExLjMzNCw1Mi42MzQtMzEuMTIyLDcwLjg5ICAgQzE2NC41NjMsMTU5LjU5MywxNjEuNjY0LDE0My44OTcsMTU1LjQ4MywxMzQuNjk1eiIgZmlsbD0iIzEzMGJkNyIgZGF0YS1vcmlnaW5hbD0iIzAxMDAwMiIgY2xhc3M9IiI+PC9wYXRoPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
                    </div>
                    <div class="star text-center mt-5">
                        <h4><i class="fas fa-star" style="    color: #E6B03C;"></i>4/5</h4>
                        <p class="" style="line-height:0px">123 Ratings</p>
                        <h5 class="p-2" style="color:#1B6ABC;">ABC Manufacturer Pvt. Ltd</h5>
                        <h6><i class="fas fa-map-marker-alt"></i>Andheri,Mumbai</h6>
                        <button class="coll-product"><i class="fas fa-phone-alt"></i> Call 943 934 9244</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container py-4 product-details-tabs">
    <div class="row">
        <div class="col-md-12">
            <ul id="tabs" class="nav nav-tabs">
                <li class="nav-item"><a href="" data-target="#product" data-toggle="tab"
                        class="nav-link small  active">Product Details</a></li>
                <li class="nav-item"><a href="" data-target="#company" data-toggle="tab" class="nav-link small">Company
                        Profile</a></li>
            </ul>
            <br>
            <div id="tabsContent" class="tab-content">
                <!-- tab 1 -->
                <div id="product" class="tab-pane fade active show">
                    <div class="product-page-details">
                        <table>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>Detail 1</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-4 product-summery">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna</p>
                    </div>

                </div>
                <!-- tab 2 -->
                <div id="company" class="tab-pane fade">
                    <div class="mt-4 product-summery">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-20 ">
    <div class="container bg-gray">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-tital">Featured Products</h3>
                <div class="home-product-slick">
                    <div class="product-cart">
                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                        <h6>Mild Steel Vertical Drilling Machine</h6>
                        <h5>₹ 12,023</h5>
                        <p>ABC Manufacturer Pvt. Ltd</p>
                    </div>
                    <div class="product-cart">
                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                        <h6>Mild Steel Vertical Drilling Machine</h6>
                        <h5>₹ 12,023</h5>
                        <p>ABC Manufacturer Pvt. Ltd</p>
                    </div>
                    <div class="product-cart">
                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                        <h6>Mild Steel Vertical Drilling Machine</h6>
                        <h5>₹ 12,023</h5>
                        <p>ABC Manufacturer Pvt. Ltd</p>
                    </div>
                    <div class="product-cart">
                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                        <h6>Mild Steel Vertical Drilling Machine</h6>
                        <h5>₹ 12,023</h5>
                        <p>ABC Manufacturer Pvt. Ltd</p>
                    </div>
                    <div class="product-cart">
                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart" class="img-fluid">
                        <h6>Mild Steel Vertical Drilling Machine</h6>
                        <h5>₹ 12,023</h5>
                        <p>ABC Manufacturer Pvt. Ltd</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

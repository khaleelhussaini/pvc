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
                    <div class="col-md-12">
                        <div class="p-30 pb-1">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <button class="btn btn-addproduct-vender">
                                            <i class="fas fa-plus pr-2"></i>Add Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manage-product-card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-border">
                                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                            class="img-fluid">
                                        <div class="add-items d-flex">
                                            <div class="add"><span>Add more images </span> </div>
                                            <div class="add"><span>Add video</span></div>
                                            <div class="add"><span>Add PDF</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 product-manage-details">
                                    <div>
                                        <i class="fas fa-ellipsis-h dots-menu"></i>
                                    </div>
                                    <h4 class="manage-product-title">Product Name <i class="fas fa-pencil-alt"></i></h4>
                                    <div class="d-flex">
                                        <h6 class="package-md"><a href="">Add Description</a></h6>
                                        <h6 class="package-md ml-5"><a href="">Add Price</a></h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5  detals-add">
                                            <p>Category</p>
                                            <button class="add-btns">+ Add Category</button>
                                        </div>
                                        <div class="col-sm-7  detals-add">
                                            <p>Specification/Additional Details</p>
                                            <!-- <a href="">+ Add Category</a> -->
                                            <button class="add-btns">+ Add Detalis</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="manage-product-card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-border">
                                        <img src="{{asset('/images/products/1.png')}}" alt="Drilling Mart"
                                            class="img-fluid">
                                        <div class="add-items d-flex">
                                            <div class="add"><span>Add more images

                                                </span> </div>
                                            <div class="add"><span>Add video</span></div>
                                            <div class="add"><span>Add PDF</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 product-manage-details">
                                    <div>
                                        <i class="fas fa-ellipsis-h dots-menu"></i>
                                    </div>
                                    <h4 class="manage-product-title">Mild Steel Vertical Drilling Machine <i
                                            class="fas fa-pencil-alt"></i></h4>
                                    <div class="d-flex">
                                        <h6 class="package-md"><a href="">Edit Description</a></h6>
                                        <h6 class="package-md ml-5"><a href="">$234/unit</a></h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5  detals-add">
                                            <p>Category</p>
                                            <button class="add-btns-level mt-3">+ Add sub-Category</button><i
                                                class="fas fa-times closeicon"></i>
                                            <button class="add-btns ml-4 mt-1">+ Add sub-Category</button>
                                            <button class="add-btns mt-3">+ Add Category</button>
                                        </div>
                                        <div class="col-sm-7  detals-add">
                                            <p>Specification/Additional Details</p>                                            <table>
                                                <tr>
                                                    <td><b>Detail 1</b></td>
                                                    <td>Lorem Ipsum….</td>
                                                    <td style="color: #02669B;">Edit</td>
                                                   <td style="background:none;"> <i class="fas fa-times closeicon"></i></td>
                                                </tr>
                                            </table>
                                            <button class="add-btns mt-3">+ Add Category</button>
                                        </div>
                                    </div>
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

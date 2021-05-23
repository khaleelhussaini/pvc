<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    public function index(){
        return view('vendor.company-profile');
    }
    // Leads page
    public function leads(){
        return view('vendor.company-leads');
    }
    //product-interested

    public function ProductInterested(){
        return view('vendor.product-interested');
    }

   //manage product
   
   public function ManageProduct(){
    return view('vendor.manage-product');
} 
//product page
public function ProductPage(){
    return view('vendor.product-page');
} 
public function ContactUs(){
    return view('vendor.contact');
} 
public function ProductSearch(){
    return view('vendor.product-search');
} 


}

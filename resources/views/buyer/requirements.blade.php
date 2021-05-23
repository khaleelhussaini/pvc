@extends('layouts.app')
@section('content')

<section class="dm-section p-30">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h5>My requirements</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Requirement</th>
                                <th>Date</th>
                                <th>Qty</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mild Steel Vertical Drilling Machine</td>
                                <td>22/01/22</td>
                                <td>2</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View Vendors</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="viewVendors">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Best vendors for your requirements</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body requirment-model">
                            <h4><span>ABC Manufacturer Pvt. Ltd</span> <button class="btn btn-dm float-right">Contact Vendor</button></h4>
                            <h4><span>ABC Manufacturer Pvt. Ltd</span> <button class="btn btn-dm float-right">Contact Vendor</button></h4>
                            <h4><span>ABC Manufacturer Pvt. Ltd</span> <button class="btn btn-dm float-right">Contact Vendor</button></h4>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

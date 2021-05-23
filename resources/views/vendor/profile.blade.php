@extends('layouts.app')
@section('content')

<section class="profile p-30">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h5>My Profile</h5>
            </div>
            <div class="col-md-2">
                <div class="btn edit-profile-btn btn-block">Edit profile</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="profile-form dm-form">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="form-heading">Company Information</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Company Name">Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Company Phone Number">Company Phone Number</label>
                                <input type="text" class="form-control" placeholder="Company Phone Number" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Company Email ID">Company Email ID</label>
                                <input type="text" class="form-control" placeholder="Company Email ID" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Company Name">Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Alternate Company Phone Number">Alternate Company Phone Number</label>
                                <input type="text" class="form-control" placeholder="Alternate Company Phone Number" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Alternate Company Email ID">Alternate Company Email ID</label>
                                <input type="text" class="form-control" placeholder="Alternate Company Email ID" disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <h4 class="form-heading">Company Address Information</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Building Number">Building Number</label>
                                <input type="text" class="form-control" placeholder="Building Number" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="text" class="form-control" placeholder="Street" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Landmark">Landmark</label>
                                <input type="text" class="form-control" placeholder="Landmark" disabled>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Locality">Locality</label>
                                <input type="text" class="form-control" placeholder="Locality" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" class="form-control" placeholder="City" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="State">State</label>
                                <input type="text" class="form-control" placeholder="State" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Zip Code">Zip Code</label>
                                <input type="text" class="form-control" placeholder="Zip Code" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Country">Country</label>
                                <input type="text" class="form-control" placeholder="Country" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <h4 class="form-heading">Contact Information</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Designation">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Phone Number">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Mobile Number">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Company Email ID">Company Email ID</label>
                                <input type="text" class="form-control" placeholder="Company Email ID" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Alternate Email ID">Alternate Email ID</label>
                                <input type="text" class="form-control" placeholder="Alternate Email ID" disabled>
                            </div>
                            <input type="submit" class="btn btn-dm" value="Save Changes">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

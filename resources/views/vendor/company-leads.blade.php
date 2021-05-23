@extends('layouts.app')
@section('content')

<section class="dm-section p-30">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.company-sidebar')
            </div>
            <div class="col-md-9">
                <form class="profile-form dm-form">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name</th>
                                <th>Phone No.</th>
                                <th>Email ID</th>
                                <th>Location</th>
                                <th>Requirement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>+91 9343334343</td>
                                <td>abc@gmail.com</td>
                                <td>India</td>
                                <td><span data-toggle="modal" data-target="#viewVendors">View </span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection

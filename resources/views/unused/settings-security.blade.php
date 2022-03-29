@extends('layout.app-dashboard')

@section('title', 'settings Security')

@section('content')

    @include('layout.partials.page-title')


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="./settings.html" class="nav-link">
                                        <i class="mdi mdi-account-settings-variant"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-preferences.html" class="nav-link">
                                        <i class="mdi mdi-settings"></i>
                                        <span>Preferences</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-security.html" class="nav-link">
                                        <i class="mdi mdi-lock"></i>
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-account.html" class="nav-link">
                                        <i class="mdi mdi-bank"></i>
                                        <span>Linked Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Security</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-4">
                                    <div class="id_card">
                                        <img src="{{ asset('assets/images/id.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="id_info">
                                        <h4>Saiful Islam </h4>
                                        <p class="mb-1 mt-3">ID: 0024 5687 2254 3698 </p>
                                        <p class="mb-1">Status: <span class="font-weight-bold">Verified</span></p>
                                        <a href="verify-step-2.html" class="btn btn-success mt-3">New ID</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="phone_verify">
                                        <h4 class="card-title mb-3">Email Address</h4>
                                        <form action="otp-2.html">
                                            <div class="form-row align-items-center">
                                                <div class="form-group col-xl-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="hello@example.com ">
                                                        <div class="input-group-append">
                                                            <button
                                                                class=" btn input-group-text bg-primary text-white">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="phone_verified">
                                        <h5> <span><i class="fa fa-envelope"></i></span> hello@example.com</h5>
                                        <div class="verify">
                                            <div class="verified">
                                                <span><i class="la la-check"></i></span>
                                                <a href="#">Verified</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="phone_verify">
                                        <h4 class="card-title mb-3">Add Phone Number</h4>
                                        <form action="otp-2.html">
                                            <div class="form-row align-items-center">
                                                <div class="form-group col-xl-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="+1 2335 2458 ">
                                                        <div class="input-group-append">
                                                            <button
                                                                class=" btn input-group-text bg-primary text-white">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="phone_verified">
                                        <h5> <span><i class="fa fa-phone"></i></span> +1 23584 2659</h5>
                                        <div class="verify">
                                            <div class="verified">
                                                <span><i class="la la-check"></i></span>
                                                <a href="#">Verified</a>
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
    </div>



@endsection()




@push('styles')
@endpush

@push('scripts')
@endpush

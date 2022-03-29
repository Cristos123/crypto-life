@extends('layout.app-dashboard')

@section('title', 'Account Api')

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
                                    <a href="./account-overview.html" class="nav-link">
                                        <i class="mdi mdi-bullseye"></i>
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-deposit.html" class="nav-link">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Deposit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-withdraw.html" class="nav-link">
                                        <i class="mdi mdi-pentagon"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-api.html" class="nav-link">
                                        <i class="mdi mdi-database"></i>
                                        <span>API</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-affiliate.html" class="nav-link">
                                        <i class="mdi mdi-diamond"></i>
                                        <span>Affiliate</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create API Key</h4>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <label class="mr-sm-2">Generate New Key</label>
                                            <input type="text" name="usd_amount" class="form-control"
                                                placeholder="Enter Passphrase">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <label class="mr-sm-2">Confirm Passphrase</label>
                                            <input type="text" name="usd_amount" class="form-control"
                                                placeholder="Re-enter passphrase">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary">Create API Keys</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your API Keys</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                            <td>
                                                <label class="toggle">
                                                    <input class="toggle-checkbox" type="checkbox" checked>
                                                    <span class="toggle-switch"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <i class="mdi mdi-delete fs-20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                            <td>
                                                <label class="toggle">
                                                    <input class="toggle-checkbox" type="checkbox">
                                                    <span class="toggle-switch"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <i class="mdi mdi-delete fs-20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                            <td>
                                                <label class="toggle">
                                                    <input class="toggle-checkbox" type="checkbox">
                                                    <span class="toggle-switch"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <i class="mdi mdi-delete fs-20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                            <td>
                                                <label class="toggle">
                                                    <input class="toggle-checkbox" type="checkbox" checked>
                                                    <span class="toggle-switch"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <i class="mdi mdi-delete fs-20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                            <td>
                                                <label class="toggle">
                                                    <input class="toggle-checkbox" type="checkbox">
                                                    <span class="toggle-switch"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <i class="mdi mdi-delete fs-20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

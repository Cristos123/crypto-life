@extends('layout.app-dashboard')

@section('title', 'Account Deposite')

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
                            <h4 class="card-title">Cold Wallet Deposit Address</h4>
                        </div>
                        <div class="card-body" id="deposits">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">TUSD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">USDC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab3">FIAT</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="qrcode">
                                        <img src="{{ asset('assets/images/qr.svg') }}" alt="" width="150">
                                    </div>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            TUSD network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            TUSD deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="qrcode">
                                        <img src="{{ asset('assets/images/qr.svg') }}" alt="" width="150">
                                    </div>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="qrcode">
                                        <img src="{{ asset('assets/images/qr.svg') }}" alt="" width="150">
                                    </div>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
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

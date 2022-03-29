@extends('layout.app-dashboard')

@section('title', 'Account Deposit')

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
                                    <a href="{{ route('deposits.create') }}" class="nav-link">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Deposit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('withdrawals.create') }}" class="nav-link">
                                        <i class="mdi mdi-pentagon"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Wallet Deposit Address</h4>
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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fill this if you have made a payment.</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    @include('layout.partials.errors')

                                    <form action="{{ route('withdrawals.store') }}" method="POST"
                                        class="py-5">
                                        @csrf
                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="asset_id" class="mr-sm-2">Currency</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control @error('asset_id') is-invalid @enderror"
                                                    id="asset_id" name="asset_id">
                                                    <option value="">Select</option>
                                                    @forelse ($assets as $asset)
                                                        <option value="{{ $asset->id }}"> {{ $asset->name }} </option>
                                                    @empty
                                                    @endforelse


                                                </select>
                                                @error('asset_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Amount
                                                    <br />
                                                    <small>Enter the amount to deposit here</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i
                                                                class="cc DOLLAR-alt text-white">$</i></label>
                                                    </div>
                                                    <input type="text" value="{{ old('amount') }}"
                                                        class="form-control text-black @error('amount') is-invalid @enderror text-right"
                                                        name="amount" placeholder="5000 USD" min="0">
                                                    @error('amount')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button class="btn btn-primary">I have made the transfer</button>
                                        </div>
                                    </form>
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

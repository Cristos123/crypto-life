@extends('layout.app-dashboard')

@section('title', 'Account Withdraw')

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
                            <h4 class="card-title">Withdraw</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @elseif (session()->has('info'))
                                        <div class="alert alert-info">
                                            {{ session()->get('success') }}
                                        </div>
                                    @elseif (session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('admin.withdrawal.store') }}" method="POST"
                                        class="py-5">
                                        @csrf
                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Wallet Address
                                                    <br />
                                                    <small>Please double check this withdrawal_address</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text  bg-primary"><i
                                                                class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                    </div>
                                                    <input value="{{ old('withdrawal_address') }}"
                                                        name="withdrawal_address" type="text"
                                                        class="form-control @error('withdrawal_address') is-invalid @enderror text-right"
                                                        placeholder="5000 USD">
                                                    @error('withdrawal_address')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label class="mr-sm-2">Assets</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control @error('assetId') is-invalid @enderror"
                                                    id="selected_type" required name="asset_id">
                                                    <option value="select">Select</option>
                                                    @forelse ($assets as $asset)
                                                        <option value="{{ $asset->id }}"> {{ $asset->name }} </option>
                                                    @empty
                                                    @endforelse


                                                </select>
                                                @error('assetId')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Amount
                                                    <br />
                                                    <small>Maximum amount withdrawable: 0 </small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i
                                                                class="cc BTC-alt text-white"></i></label>
                                                    </div>
                                                    <input type="text" value="{{ old('amount') }}"
                                                        class="form-control text-black @error('amount') is-invalid @enderror text-right"
                                                        name="amount" placeholder="5000 USD">
                                                    @error('amount')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label"> Available Balance
                                                    <br />
                                                    {{-- <small>Maximum amount withdrawable: 0 BTC</small> --}}
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i
                                                                class="cc BTC-alt text-white"></i></label>
                                                    </div>
                                                    <input type="text" name="balance"
                                                        value=" {{ toMoney(auth()->user()->balance()) }}" readonly
                                                        class="form-control text-right" placeholder="5000 USD">
                                                    @error('balance')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-6">
                                                <label for="inputEmail3" class="col-form-label">Bitcoin Network Fee
                                                    (BTC)
                                                    <br />
                                                    <small>Transactions on the Bitcoin network are priorirized by
                                                        fees</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4 class="text-right">0.005</h4>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button class="btn btn-primary">Withdraw Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Important Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="important-info">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-checkbox-blank-circle"></i>
                                        For security reasons, Tradio process withdrawals by review once a day. For
                                        more information in this policy. Please see our wallet security page.
                                    </li>
                                    <li>
                                        <i class="mdi mdi-checkbox-blank-circle"></i>
                                        Submit your withdrawals by 07:00 UTC +00 (about 11 hour) to be included in
                                        the days batch
                                    </li>
                                </ul>
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

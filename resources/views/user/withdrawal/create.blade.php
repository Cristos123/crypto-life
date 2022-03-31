@extends('layout.app-dashboard')

@section('title', 'Account Withdraw')

@section('content')


    @include('layout.partials.page-title')

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @include('layout.partials.dashboard.header')
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Withdraw</h4>
                            <a href="{{ route('withdrawals.index') }}">View Withdrawal History</a>
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
                                                <label for="withdrawal_address" class="col-form-label">Wallet Address
                                                    <br />
                                                    <small>Please double check this Wallet Address</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text  bg-primary"><i
                                                                class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                    </div>
                                                    <input value="{{ old('withdrawal_address') }}"
                                                        name="withdrawal_address" type="text" id="withdrawal_address"
                                                        class="form-control @error('withdrawal_address') is-invalid @enderror text-right"
                                                        placeholder="Wallet Address">
                                                    @error('withdrawal_address')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
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

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Amount
                                                    <br />
                                                    <small>Minimum amount withdrawable: 0 </small>
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
                                            <button class="btn btn-primary">Withdraw Now</button>
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

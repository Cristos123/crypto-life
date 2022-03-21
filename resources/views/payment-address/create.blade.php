@extends('layout.app-dashboard')

@section('title', 'Create Payment Address')

@section('content')

    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-5">
                        <a href="index.html"><img src="./images/logo.png" alt=""></a>
                    </div>
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Create Payment Address</h4>
                        </div>
                        <div class="card-body">
                            @include('layout.partials.errors')
                            <form action="{{ route('admin.payment-address.store') }}" method="POST">
                                @csrf



                                <div class="form-group ">
                                    <label class="mr-sm-2">Assets</label>
                                    <select class="form-control @error('asset_id') is-invalid @enderror" id="selected_type"
                                        required name="asset_id">
                                        <option value="select">Select</option>
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
                                </div><br>


                                <div class="form-group">
                                    <label>payment Address</label>
                                    <input type="text" value="{{ old('payment_address') }}"
                                        placeholder="Type your payment address"
                                        class="form-control @error('payment_address') is-invalid @enderror"
                                        name="payment_address">
                                    @error('payment_address')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Create</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                {{-- <p class="mb-1">Don't Received? </p> --}}
                                <a class="text-primary" href="{{ route('admin.payment-address.index') }}">Go back </a>
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

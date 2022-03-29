@extends('layout.app-dashboard')

@section('title', 'Edit Asset')

@section('content')

    <div class="content-body">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Edit asset</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.update-asset', $asset) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('layout.partials.errors')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{ $asset->name }}" placeholder="Asset Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Currency</label>
                                    <input type="text" value="{{ $asset->currency }}" placeholder="Type your currency"
                                        class="form-control @error('currency') is-invalid @enderror" name="currency">
                                    @error('currency')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Save</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                {{-- <p class="mb-1">Don't Received? </p> --}}
                                <a class="text-primary" href="{{ route('admin.asset.index') }}">Go back </a>
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

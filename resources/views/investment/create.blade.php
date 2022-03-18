@extends('layout.app-dashboard')

@section('title', 'Create Investment')

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
                            <h4 class="card-title">Create Investment</h4>
                        </div>
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.store-investment') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{ old('name') }}" placeholder="Investment Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="mr-sm-2">Assets</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="assetId">
                                        <option value="select">Select</option>
                                        @forelse ($assets as $asset)
                                            <option value="{{ $asset->id }}"> {{ $asset->name }} </option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="mr-sm-2">Category</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="categoryId">
                                        <option value="select">Select</option>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="mr-sm-2">Duration</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="durationId">
                                        <option value="select">Select</option>
                                        @forelse ($durations as $duration)
                                            <option value="{{ $duration->id }}"> {{ $duration->name }} </option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input type="text" value="{{ old('rate') }}" placeholder="Type your rate"
                                        class="form-control @error('rate') is-invalid @enderror" name="rate">
                                    @error('rate')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" value="{{ old('amount') }}" placeholder="Type your amount"
                                        class="form-control @error('amount') is-invalid @enderror" name="amount">
                                    @error('amount')
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
                                <a class="text-primary" href="{{ route('admin.investment.index') }}">Go back </a>
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

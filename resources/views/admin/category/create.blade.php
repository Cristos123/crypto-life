@extends('layout.app-dashboard')

@section('title', 'Create Category')

@section('content')

    <div class="content-body">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Create category</h4>
                        </div>
                        <div class="card-body">
                            @include('layout.partials.errors')
                            <form action="{{ route('admin.store-category') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{ old('name') }}" placeholder="Category Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" value="{{ old('description') }}"
                                        placeholder="Type your description"
                                        class="form-control @error('description') is-invalid @enderror" name="description">
                                    @error('description')
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
                                <a class="text-primary" href="{{ route('admin.category.index') }}">Go back </a>
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

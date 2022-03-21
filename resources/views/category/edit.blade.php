@extends('layout.app-dashboard')

@section('title', 'Edit Category')

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
                            <h4 class="card-title">Edit category</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.update-category', $category) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('layout.partials.errors')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{ $category->name }}" placeholder="Category Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" value="{{ $category->description }}"
                                        placeholder="Type your description"
                                        class="form-control @error('description') is-invalid @enderror" name="description">
                                    @error('description')
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

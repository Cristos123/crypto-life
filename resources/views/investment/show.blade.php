@extends('layout.app-dashboard')

@section('title', 'show KYC')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <h1>Show Investment</h1>
                            <a class="btn  mt-2 mb-3 btn-primary" href="{{ route('admin.investment.index') }}">Go back </a>
                            <div class="media">

                                <div class="media-body">

                                    <p class="mb-1"> <span class="mr-3 ">Asset name:</span>
                                        <span class="">
                                            {{ $investment->asset->name }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">Asset Currency</i></span>
                                        {{ $investment->asset->currency }}
                                    </p>
                                </div>
                            </div>

                            <ul class=" card-profile__info">
                                <li>
                                    <h5 class="mr-4"></h5>
                                    <span class="text-muted"> </span>

                                </li>
                                <li class="mb-1 mt-2">
                                    <h5 class="mr-4">Category Name</h5>
                                    <span class="">{{ $investment->category->name }}</span>
                                </li>
                                <li>
                                    <h5 class=" mr-4">Category Description</h5>
                                    <span class="">{{ $investment->category->description }}</span>
                                </li>
                                <hr />
                                <li class="mb-1 mt-2">
                                    <h5 class="mr-4">Duration Name</h5>
                                    <span class="">{{ $investment->duration->name }}</span>
                                </li>
                                <li>
                                    <h5 class=" mr-4">Duration</h5>
                                    <span class="">{{ $investment->duration->duration }}</span>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <div class="media">

                                <div class="media-body">

                                    <h4 class="mb-2">{{ $investment->fullname }}</h4>
                                    <p class="mb-1"> <span class="mr-3 ">Status:</span>
                                        <span
                                            class="{{ $investment->status == 'succeed' ? 'text-success' : 'text-warning' }}">
                                            {{ $investment->status }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-3 ">Investment Name:</span>
                                        <span class="">
                                            {{ $investment->name }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">Investment Amount</i></span>
                                        {{ $investment->amount }}
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">Created date</i></span>
                                        <span class="text-danger">{{ $investment->created_at }}</span>
                                    </p>
                                </div>
                            </div>


                            @if ($investment->status !== 'completd')
                                <form method="post" action="{{ route('admin.update-investment', $investment) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="approved" name="approved">
                                    <button type="submit" class="btn btn-warning">Approved</button>

                                </form>

                                <form method="post" action="{{ route('admin.update-investment', $investment) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="cancel" name="cancel">
                                    <button type="submit" class="btn  btn-danger">Cancel</button>
                                </form>
                            @else
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection();

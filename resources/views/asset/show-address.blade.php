@extends('layout.app-dashboard')

@section('title', 'show Investment')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <h1>Show Asset with payment address</h1>
                            <a class="btn  mt-2 mb-3 btn-primary" href="{{ route('admin.asset.index') }}">Go back
                            </a>


                            <ul class=" text-secondary card-profile__info">

                                @forelse ($assetWithAdress as $paymentAddress)
                                    <li>
                                        <h5 class="mr-4">Asset name:</h5>

                                        <span class="">
                                            {{ $paymentAddress->asset->name }}</span>

                                    </li>
                                    <li>
                                        <h5 class="mr-4">Asset Currency:</h5>


                                        <span class="">
                                            {{ $paymentAddress->asset->currency }}</span>

                                    </li>
                                    <li class="mb-1 mt-2">
                                        <h5 class="mr-4">Payment Name</h5>
                                        <span class="">{{ $paymentAddress->address }}</span>
                                    </li>
                                    <li>
                                        <h5 class=" mr-4">Default Address</h5>
                                        <span
                                            class="">{{ $paymentAddress->default == true ? 'True' : 'False' }}</span>
                                    </li>
                                    <hr />
                                @empty

                                    <p class="mb-1"> No Payment address associate with this asset
                                    </p>
                                @endforelse
                            </ul>



                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <div class="media">

                                <div class="media-body">

                                    <h4 class="mb-2">{{ $assetWithAdress->fullname }}</h4>
                                    <p class="mb-1"> <span class="mr-3 ">Status:</span>
                                        <span class="{{ statusColor($assetWithAdress->status) }}  ">
                                            {{ status($assetWithAdress->status) }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-3 ">Investment Name:</span>
                                        <span class="">
                                            {{ $assetWithAdress->name }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">Investment Amount</i></span>
                                        {{ $assetWithAdress->amount }}
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">Created date</i></span>
                                        <span class="text-primary">{{ $assetWithAdress->created_at }}</span>
                                    </p>
                                </div>
                            </div>


                            @if ($assetWithAdress->status !== 'completd')
                                <form method="post" action="{{ route('admin.update-assetWithAdress', $assetWithAdress) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="approved" name="approved">
                                    <button type="submit" class="btn btn-warning">Approved</button>

                                </form>

                                <form method="post" action="{{ route('admin.update-assetWithAdress', $assetWithAdress) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="cancel" name="cancel">
                                    <button type="submit" class="btn  btn-danger">Cancel</button>
                                </form>
                            @else
                            @endif

                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>




@endsection();

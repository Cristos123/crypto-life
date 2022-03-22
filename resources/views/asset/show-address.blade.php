@extends('layout.app-dashboard')

@section('title', 'show Address')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Show Asset with payment address</h4>

                            <a class="btn  mt-2 mb-3 btn-primary" href="{{ route('admin.asset.index') }}">Go back
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>

                                                <th>Asset Name </th>
                                                <th>Asset Currency </th>
                                                <th>Payment address </th>
                                                <th>Default Address </th>
                                                <th>Created Date </th>
                                                <th colspan="2">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($assetWithAdress as $paymentAddress)
                                                <tr>



                                                    <td> {{ $paymentAddress->asset->name }}</td>
                                                    <td> {{ $paymentAddress->asset->currency }}</td>
                                                    <td> {{ $paymentAddress->address }}</td>
                                                    <td> {{ $paymentAddress->default == true ? 'True' : 'False' }}</td>
                                                    <td> {{ $paymentAddress->created_at }}</td>
                                                    {{ $paymentAddress->asset->id }}
                                                    <td>
                                                        <a href="{{ route('admin.payment-address.edit', $paymentAddress) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        @if ($paymentAddress->default == false)
                                                            <form method="post"
                                                                action="{{ route('admin.asset.changeDefaultAddress', $paymentAddress) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" value="default" name="default">
                                                                <input type="hidden"
                                                                    value="{{ $paymentAddress->asset_id }}"
                                                                    name="asset_id">
                                                                <button type="submit" class="btn btn-info">Change to
                                                                    Default</button>
                                                            </form>
                                                        @else
                                                        @endif



                                                    </td>

                                                    <td>
                                                        <form method="post"
                                                            action="{{ route('admin.payment-address.show', $paymentAddress) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>

                                                    </td>


                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">NO payment address created yet
                                                    </td>
                                                </tr>
                                            @endforelse




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection();

@extends('layout.app-dashboard')

@section('title', ' Asset')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Assets History</h4>
                            <a href="{{ route('admin.create-asset') }}" class="btn btn-primary">Create New Asset</a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th>Currency </th>
                                                <th>Created Date </th>
                                                <th class="colSpan2">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($assets as $asset)
                                                <tr>


                                                    <td> {{ $asset->name }} </td>
                                                    <td> {{ $asset->currency }}</td>
                                                    <td> {{ $asset->created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('admin.edit-asset', $asset) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.asset.show', $asset) }}"
                                                            class="btn btn-primary">View Address</a>
                                                    </td>
                                                    <td>
                                                        <form method="post"
                                                            action="{{ route('admin.delete-asset', $asset) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>


                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">NO Assets created yet</td>
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
    <!-- content-wrapper ends -->
@endsection

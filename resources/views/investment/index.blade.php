@extends('layout.app-dashboard')

@section('title', ' Duration')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Durations</h4>
                            <a href="{{ route('admin.create') }}" class="btn btn-primary">Create New Investment</a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th>Rate </th>
                                                <th>Amount </th>
                                                <th>AssetID </th>
                                                <th>CategoryID </th>
                                                <th>DurationID </th>
                                                <th>Created Date </th>
                                                <th class="colSpan3">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($investments as $investment)
                                                <tr>


                                                    <td> {{ $investment->name }} </td>
                                                    <td> {{ $investment->rate }}</td>
                                                    <td> {{ $investment->amount }}</td>
                                                    <td> {{ $investment->asset_id }}</td>
                                                    <td> {{ $investment->category_id }}</td>
                                                    <td> {{ $investment->duration_id }}</td>
                                                    <td> {{ $investment->created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('admin.edit-investment', $investment) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.show-investment', $investment) }}"
                                                            class="btn btn-info">Show</a>
                                                    </td>
                                                    <td>
                                                        {{-- <form method="post"
                                                            action="{{ route('admin.delete', $investment) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form> --}}


                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="colspan5">NO durations created yet</td>
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

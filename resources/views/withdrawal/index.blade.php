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
                            <h4 class="card-title"> Withdrawal History</h4>
                            <a href="{{ route('admin.withdrawal.create') }}" class="btn btn-primary">
                                Withdrawal </a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Status </th>
                                                <th> Amount </th>
                                                <th>Balance </th>
                                                <th>Amount </th>
                                                <th>AssetID </th>
                                                <th>refernce </th>
                                                <th> User Name </th>
                                                <th>Created Date </th>
                                                <th class="colSpan3">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($withdrawals as $withdrawal)
                                                <tr>


                                                    <td class="{{ statusColor($withdrawal->status) }}">
                                                        {{ status($withdrawal->status) }} </td>
                                                    <td> {{ toMoney($withdrawal->amount) }} </td>
                                                    <td> {{ toMoney($withdrawal->balance) }}</td>
                                                    <td> {{ $withdrawal->amount }}</td>
                                                    <td> {{ $withdrawal->asset_id }}</td>
                                                    <td> {{ $withdrawal->reference }}</td>
                                                    <td> {{ $withdrawal->user->fullname }}</td>
                                                    <td> {{ $withdrawal->created_at }}</td>

                                                    {{-- <td>
                                                        <a href="{{ route('admin.edit-withdrawal', $withdrawal) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.show-withdrawal', $withdrawal) }}"
                                                            class="btn btn-info">Show</a>
                                                    </td> --}}
                                                    <td>
                                                        {{-- <form method="post"
                                                            action="{{ route('admin.delete', $withdrawal) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form> --}}


                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="colspan8">NO durations created yet</td>
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

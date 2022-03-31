@extends('layout.app-dashboard')

@section('title', ' Users Deposit List')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Deposits</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Full Name</th>
                                                <th>Amount (USD)</th>
                                                <th>Wallet Type</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($deposits as $deposit)
                                                <tr>
                                                    <td> #{{ $deposit->reference }}
                                                        <small class="d-block">{{ $deposit->created_at() }}</small>
                                                    </td>
                                                    <td> {{ $deposit->user->fullname }}</td>
                                                    <td> {{ toMoney($deposit->amount) }}</td>
                                                    <td> {{ $deposit->currency }}</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-{{ state($deposit->status) }} text-uppercase">{{ $deposit->status }}</span>
                                                    </td>

                                                    <td class="d-flex">
                                                        @if ($deposit->status == 'pending')
                                                            <form action="{{ route('admin.deposits.update', $deposit) }}"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" value="approved" name="approved">
                                                                <button class="btn btn-sm btn-warning mr-2"
                                                                    onclick="return confirm('User will be automatically credited on approval.')">Approve</button>
                                                            </form>

                                                            <form action="{{ route('admin.deposits.update', $deposit) }}"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" value="cancel" name="cancel">
                                                                <button class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Are you sure you want to reject the deposit?')">Reject</button>
                                                            </form>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No Deposits yet</td>
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

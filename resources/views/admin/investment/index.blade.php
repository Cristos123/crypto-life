@extends('layout.app-dashboard')

@section('title', ' Investment')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Investment History</h4>
                            {{-- <a href="{{ route('admin.create-investment') }}" class="btn btn-primary">Create New
                                Investment</a> --}}
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Reference </th>
                                                <th>User </th>
                                                <th>Amount (USD)</th>
                                                <th>Rate </th>
                                                <th>Asset </th>
                                                <th>Duration (Days) </th>
                                                <th>Date</th>
                                                <th>Status </th>
                                                {{-- <th></th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($investments as $investment)
                                                <tr>


                                                    <td> #{{ $investment->reference }}</td>
                                                    <td> {{ $investment->user->fullname }}</td>
                                                    <td> {{ toMoney($investment->amount) }}</td>
                                                    <td> {{ $investment->rate }}%</td>
                                                    <td> {{ $investment->asset->currency }}</td>
                                                    <td> {{ $investment->duration->duration }}
                                                        @if($investment->status == 'pending')
                                                        <small class="text-primary">({{ $investment->duration->duration - $investment->accrueDays() }} days left)</small>
                                                        @endif
                                                    </td>
                                                    <td> {{ $investment->created_at() }}</td>
                                                    <td>
                                                        <span class="badge badge-{{ state($investment->status) }} text-uppercase">{{ $investment->status }}</span>
                                                    </td>
                                                    {{-- <td>
                                                        <a href="{{ route('admin.show-investment', $investment) }}"
                                                            class="btn btn-info">Show</a>
                                                    </td> --}}


                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10" class="text-center">NO investment created yet</td>
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

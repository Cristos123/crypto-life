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
                            <a href="{{ route('admin.create-duration') }}" class="btn btn-primary">Create New duration</a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th>Duration </th>
                                                <th>Created Date </th>
                                                <th class="colSpan2">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($durations as $duration)
                                                <tr>


                                                    <td> {{ $duration->name }} </td>
                                                    <td> {{ $duration->duration }}</td>
                                                    <td> {{ $duration->created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('admin.edit-duration', $duration) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form method="post"
                                                            action="{{ route('admin.delete-duration', $duration) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>


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

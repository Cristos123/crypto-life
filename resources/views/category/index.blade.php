@extends('layout.app-dashboard')

@section('title', ' Categories')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transactions History</h4>
                            <a href="{{ route('admin.create-category') }}" class="btn btn-primary">Create New Category</a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th>Description </th>
                                                <th>Created Date </th>
                                                <th class="colSpan2">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($categories as $category)
                                                <tr>


                                                    <td> {{ $category->name }} </td>
                                                    <td> {{ $category->description }}</td>
                                                    <td> {{ $category->created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('admin.edit-category', $category) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form method="post"
                                                            action="{{ route('admin.delete-category', $category) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>


                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="colspan6">NO Categories</td>
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

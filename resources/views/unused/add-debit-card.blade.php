@extends('layout.app-dashboard')

@section('title', 'Add Debit Card')

@section('content')



    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header">
                            <h4 class="card-title">Link a debit card</h4>
                        </div>
                        <div class="card-body">
                            <form action="verify-step-6.html" class="identity-upload">
                                <div class="form-row">
                                    <div class="form-group col-xl-12">
                                        <label class="mr-sm-2">Name on card </label>
                                        <input type="text" class="form-control" placeholder="Saiful Islam">
                                    </div>
                                    <div class="form-group col-xl-12">
                                        <label class="mr-sm-2">Card number </label>
                                        <input type="text" class="form-control" placeholder="5658 4258 6358 4756">
                                    </div>
                                    <div class="form-group col-xl-4">
                                        <label class="mr-sm-2">Expiration </label>
                                        <input type="text" class="form-control" placeholder="10/22">
                                    </div>
                                    <div class="form-group col-xl-4">
                                        <label class="mr-sm-2">CVC </label>
                                        <input type="text" class="form-control" placeholder="125">
                                    </div>
                                    <div class="form-group col-xl-4">
                                        <label class="mr-sm-2">Postal code </label>
                                        <input type="text" class="form-control" placeholder="2368">
                                    </div>

                                    <div class="text-center col-12">
                                        <button type="submit" class="btn btn-success pl-5 pr-5">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()



@push('styles')
@endpush

@push('scripts')
@endpush

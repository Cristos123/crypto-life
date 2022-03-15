@extends('layout.basic')

@section('title', 'settings')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="./settings.html" class="nav-link">
                                        <i class="mdi mdi-account-settings-variant"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-preferences.html" class="nav-link">
                                        <i class="mdi mdi-settings"></i>
                                        <span>Preferences</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-security.html" class="nav-link">
                                        <i class="mdi mdi-lock"></i>
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('settings-account') }}" class="nav-link">
                                        <i class="mdi mdi-bank"></i>
                                        <span>Linked Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('kyc-verification') }}"
                                        enctype="multipart/form-data" name="myform" class="personal_validate">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Fullname</label>
                                                <input type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror"
                                                    placeholder="Saiful Islam" required name="fullname">
                                                @error('fullname')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">SSN</label>
                                                <input type="text" class="form-control @error('ssn') is-invalid @enderror"
                                                    placeholder="Enter your SSN" required name="ssn">
                                                @error('ssn')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Date of birth</label>
                                                {{-- <input type="text" class="form-control @error('dob') is-invalid @enderror"
                                                    placeholder="10-10-2020" required id="datepicker" autocomplete="off"
                                                    name="dob"> --}}
                                                <input type="text" class="form-control @error('ssn') is-invalid @enderror"
                                                    placeholder="Enter your SSN" name="date_of_birth">
                                                @error('date_of_birth')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Type of Identification</label>
                                                <select class="form-control @error('type') is-invalid @enderror"
                                                    id="selected_type" required name="identificationType">
                                                    <option value="select">Select</option>
                                                    <option value="driver_license"> Driver's License </option>
                                                    <option value="nationalId">National ID </option>
                                                    <option value="passport"> Passport</option>

                                                </select>
                                                @error('type')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group  col-xl-6 col-md-6">

                                                <label class="mr-sm-2">Upload Passport </label>
                                                <div class="file-upload-wrapper" data-text="Change Photo">
                                                    <input required name="photo" type="file"
                                                        class="file-upload-field @error('photo') is-invalid @enderror">
                                                    @error('photo')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div id="upload" class="form-group  d-none col-xl-6 col-md-6">

                                                <label class="mr-sm-2">Upload Identification </label>
                                                <div class="file-upload-wrapper" data-text="Change Photo">
                                                    <input required name="identification" type="file"
                                                        class="file-upload-field @error('identification') is-invalid @enderror">
                                                    @error('identification')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group col-12">
                                                <button class="btn btn-success px-4">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui-init.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/validator-init.js') }}"></script>
    <script>
        $(document).ready(function() {
                $("#selected_type").change(function() {

                    let selected_type = $("#selected_type")
                    selected_type.val();
                    // $("#myDiv").css("display", "none");
                    console.log({
                        selected_type
                    });
                    if (selected_type != 'select') {
                        $('#upload').removeClass('d-none').addClass('d-block');
                    } else {
                        $('#upload').removeClass('d-block').addClass('d-none');

                    }
                })
            }


        );
    </script>
@endpush

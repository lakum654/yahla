@extends('layouts/layoutMaster')

@section('title', 'App Info')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/app-ecommerce-product-list.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
@endsection

@section('content')
<style>
    @media (min-width: 992px)
.profile-cover {
    height: 10rem;
}
.profile-cover {
    position: relative;
    height: 7.5rem;
    padding: 1.75rem 2rem;
    border-radius: 0.75rem;
}
.profile-cover-img-wrapper {
    height: 10rem;
}

.profile-cover-img-wrapper {
    position: absolute;
    top: 0;
    inset-inline-end: 0;
    inset-inline-start: 0;
    height: 7.5rem;
    background-color: #e7eaf3;
    border-radius: 0.75rem;
}
.avatar:not(img) {
    background-color: #fff;
}
.profile-cover-avatar {
    display: -ms-flexbox;
    display: flex;
    margin: -6.3rem auto 0.5rem;
}
.avatar-uploader {
    cursor: pointer;
    display: inline-block;
    transition: .2s;
    margin-bottom: 0;
}
.avatar-xxl {
    width: 7.875rem;
    height: 7.875rem;
}
.avatar-border-lg {
    border: 0.1875rem solid #fff;
}
.avatar-circle {
    border-radius: 50% !important;
}

.avatar {
    position: relative;
    display: inline-block;
    /*width: 7.625rem;*/
    /*height: 7.625rem;*/
    border-radius: 0.3125rem;
}
label {
    color: #334257;
    text-transform: capitalize;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
.avatar-circle .avatar-img, .avatar-circle .avatar-initials {
    border-radius: 50%;
}
.avatar-img {
    display: block;
    max-width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    pointer-events: none;
    border-radius: 0.3125rem;
}
.avatar-uploader-input {
    position: absolute;
    top: 0;
    inset-inline-end: 0;
    inset-inline-start: 0;
    z-index: -1;
    opacity: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(19,33,68,.25);
    border-radius: 50%;
    transition: .2s;
}
.avatar-uploader-trigger {
    position: absolute;
    bottom: 0;
    inset-inline-end: 0;
    cursor: pointer;
    border-radius: 50%;
}
.avatar-xxl .avatar-uploader-icon {
    width: 2.1875rem;
    height: 2.1875rem;
}
.shadow-soft {
    box-shadow: 0 3px 6px 0 rgba(140,152,164,.25)!important;
}
.avatar-uploader-icon {
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    color: #677788;
    background-color: #fff;
    border-radius: 50%;
    transition: .2s;
}
    .avatar-upload {
    position: relative;
    max-width: 150px;
    margin: auto;
}

.avatar-preview {
    width: 150px;
    height: 150px;
    position: relative;
    overflow: hidden;
    border-radius: 50%;
    background-color: #f8f9fa;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.avatar-upload input {
    display: none;
}

#imagePreview {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

/* Additional styling for file input */
.custom-file-input {
    color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
    visibility: hidden;
}
.custom-file-input::before {
    content: 'Select Image';
    color: #fff;
    display: inline-block;
    background: #007bff;
    border: 1px solid #007bff;
    border-radius: 5px;
    padding: 8px 20px;
    outline: none;
    white-space: nowrap;
    cursor: pointer;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
}
.custom-file-input:hover::before {
    background: #0056b3;
}
.custom-file-input:active::before {
    background: #0056b3;
}

</style>

@php
$appinfo=App\Models\AppInfo::latest()->first();

@endphp

<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">App Settings /</span> App Info
        </h4>

        <div class="row g-4">
            <!-- Options -->
            <div class="col-12 col-lg-12 pt-4 pt-lg-0">
                <div class="tab-content p-0">
                    <!-- Locations Tab -->
                    <div class="tab-pane fade show active" id="locations" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title m-0">Address</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('app-info.store') }} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12 text-center">
                                            <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                                                <img id="viewer" onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/160x160/img1.jpg'" class="avatar-img" src="{{ asset($appinfo->image ?? "") }}" alt="Image">


                                                <input type="file" name="image" class="js-file-attach avatar-uploader-input" id="customFileEg1" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                                <label class="avatar-uploader-trigger" for="customFileEg1">
                                                <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                                </label>
                                                </label>

                                           </div>
                                        <div class="col-12">
                                            <label class="form-label mb-0" for="country_region">Country/region</label>
                                            <select id="country_region" name="country_region" class="select2 form-select" data-placeholder="United States">
                                                <option value="United States">United States</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Korea">Korea, Republic of</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Russia">Russian Federation</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_address">Address</label>
                                            <input type="text" id="address" name="address" class="form-control"  value="{{ $appinfo->address ?? '' }}" placeholder="Address">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_apa_suite">Apartment, suite, etc.</label>
                                            <input type="text" id="apartment" name="apartment" class="form-control" placeholder="Apartment, suite, etc."  value="{{ $appinfo->apartment ?? '' }}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_phone">Phone</label>
                                            <input type="tel" class="form-control phone-mask" id="phone" name="phone" placeholder="Phone" value="{{ $appinfo->phone ?? '' }}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_city">City</label>
                                            <input type="text" id="city" name="city" class="form-control" placeholder="City"  value="{{ $appinfo->city?? '' }}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_state">State</label>
                                            <input type="text" id="state" name="state" class="form-control" placeholder="State"  value="{{ $appinfo->state ?? '' }}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="loc_pincode">PIN Code</label>
                                            <input type="number" id="pincode" name="pincode" class="form-control" placeholder="PIN Code" min="0" max="999999"  value="{{ $appinfo->pincode ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-3 mt-3">
                                        <button type="reset" class="btn btn-label-secondary">Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Options-->
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>

@endsection

@section('page-script')
<script>
    $(document).ready(function() {
        // Initialize Select2 for country dropdown
        $('#country_region').select2();
    });

    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@section('page-script')
<script>
    $(document).ready(function() {
        // Initialize Select2 for country dropdown
        $('#country_region').select2();

        // Handle file input change event
        $('#customFileEg1').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewer').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });

    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
<!-- Inside the script tag in your Blade file -->
<script>
    $(document).ready(function() {
        // Handle file input change event
        $('#customFileEg1').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewer').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endsection

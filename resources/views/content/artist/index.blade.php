@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Artist /</span> All Artist
            </h4>
        </div>
        <div class="">
            @can('artist.create')
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createartistModal">Add Artist</button>
            @endcan
            @can('music.create')
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">Add Songs</button>
            @endcan

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createalbumModal">Add Album</button>

            @can('videos.create')
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoModal">Add Video</button>
            @endcan
        </div>
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Artist List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Artist</th>
                        <th>Total Songs</th>
                        <th>Total Albums</th>
                        <th>Total Video Clips</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($artist as $key => $value)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('storage/' . $value->image) }}" alt="Avatar" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="javascript:void(0)" class="text-body text-truncate">
                                        <span class="fw-semibold">{{$value->first_name}} {{$value->last_name}}</span>
                                    </a>
                                    <!-- <small class="text-muted">Perwer</small> -->
                                </div>
                            </div>
                        </td>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <td>{{$value->gender}}</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <span data-bs-toggle="modal" data-bs-target="#editartistModal5">
                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                        data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i
                                            class="bx bx-edit"></i></button></span>
                                            <form action="{{ route('artist.destroy', $value['_id']) }}" method="post" onsubmit="confirmAction(event, () => event.target.submit())" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                                    <i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>


                                {{-- <div class="modal fade modal-659be5a078db0" id="editartistModal5" aria-modal="true"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class=" w-100">
                                                    <h4 class="modal-title" id="modalCenterTitle">Edit Artist</h4>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <style>
                                                    .edit-form .dropzone {
                                                        display: flex;
                                                        flex-wrap: wrap;
                                                    }

                                                    .edit-form .dropzone .dz-message {
                                                        width: 100%;
                                                    }
                                                </style>

                                                <form id="editForm5" class="edit-form" method="POST"
                                                    action="{{ route('artist.update',$value['_id']) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="PUT">
                                                        <div class="hidden-inputs">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">

                                                            <div class="row g-3">

                                                                <div class="col-md-12">
                                                                    <label class="form-label"
                                                                        for="fullname">Gender</label>
                                                                    <select name="gender" class="form-select">
                                                                        <option>Select Gender</option>
                                                                        <option value="male" selected="">Male
                                                                        </option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <label class="form-label" for="fullname">First
                                                                        Name</label>
                                                                    <input type="text" id="fullname"
                                                                        class="form-control" placeholder="lorem"
                                                                        name="first_name" value="Şivan">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label" for="fullname">Last
                                                                        Name</label>
                                                                    <input type="text" id="fullname"
                                                                        class="form-control" placeholder="lorem"
                                                                        name="last_name" value="Perwer">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label"
                                                                        for="fullname">Province</label>
                                                                    <select name="province"
                                                                        class="form-control province_id" id="province_id"
                                                                        data-url="https://dash.yekbun.net/get/city"
                                                                        value="" data-selected="72">
                                                                        <option value="">Select province</option>
                                                                        <option value="1">Bakur</option>
                                                                        <option value="2">Başûr</option>
                                                                        <option value="3" selected="">Rojava
                                                                        </option>
                                                                        <option value="4">Rojhilat</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label class="form-label" for="fullname">City</label>
                                                                    <select name="city" class="form-control city_id"
                                                                        id="city_id">
                                                                        <option value="69">Amûd</option>
                                                                        <option value="70">Heseke (Hesîçe)</option>
                                                                        <option value="71">Kobanî</option>
                                                                        <option value="72" selected="">Qamîşlo
                                                                        </option>
                                                                        <option value="73">Reqa</option>
                                                                        <option value="74">Rimêlan</option>
                                                                        <option value="75">Serê Kanîyê</option>
                                                                        <option value="76">Efrîn</option>
                                                                        <option value="77">Girê Spî</option>
                                                                        <option value="78">Hecîn</option>
                                                                        <option value="79">Şehba</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="card">
                                                                        <h5 class="card-header">Image</h5>
                                                                        <div class="card-body">
                                                                            <div class="dropzone needsclick dz-clickable dz-started"
                                                                                action="/" id="dropzone-img5">
                                                                                <div class="dz-message needsclick">
                                                                                    Drop files here or click to upload
                                                                                </div>

                                                                                <div class="row dz-image-preview"
                                                                                    data-path="#">
                                                                                    <div
                                                                                        class="col-md-12 col-12 d-flex justify-content-center">
                                                                                        <div
                                                                                            class="dz-preview dz-file-preview w-100">
                                                                                            <div class="dz-details">
                                                                                                <div class="dz-thumbnail"
                                                                                                    style="width:95%"> <img
                                                                                                        data-dz-thumbnail=""
                                                                                                        alt="Download.jpeg"
                                                                                                        src="https://dash.yekbun.net/storage/music/64fdaa9e6e18c___Download.jpeg">
                                                                                                    <span
                                                                                                        class="dz-nopreview">No
                                                                                                        preview</span>
                                                                                                    <div
                                                                                                        class="dz-success-mark">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="dz-error-mark">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="dz-error-message">
                                                                                                        <span
                                                                                                            data-dz-errormessage=""></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="dz-filename"
                                                                                                    data-dz-name="">
                                                                                                    Download.jpeg</div>
                                                                                                <div class="dz-size"
                                                                                                    data-dz-size="">
                                                                                                    <strong>4.5</strong> KB
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> <a class="dz-remove"
                                                                                        href="javascript:undefined;"
                                                                                        data-dz-remove="">Remove file</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <label class="form-label"
                                                                        for="status">Status</label>
                                                                    <select class="form-select" name="status">
                                                                        <option selected="" value="">Select
                                                                        </option>
                                                                        <option value="1" selected="">Publish
                                                                        </option>
                                                                        <option value="0">UnPublish</option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>


                                                <script>
                                                    'use strict';


                                                    //  <div class="progress">
                                                    // <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                                    //                                                     </div>

                                                    dropZoneInitFunctions.push(function() {
                                                        // previewTemplate: Updated Dropzone default previewTemplate

                                                        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail >
                                                            <span class="dz-nopreview">No preview</span>
                                                            <div class="dz-success-mark"></div>
                                                            <div class="dz-error-mark"></div>
                                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>

                                                        </div>
                                                        <div class="dz-filename" data-dz-name></div>
                                                            <div class="dz-size" data-dz-size></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

                                                        // image
                                                        const dropzoneMulti1 = new Dropzone('#dropzone-img5', {
                                                            url: 'https://dash.yekbun.net/file/upload',
                                                            previewTemplate: previewTemplate,
                                                            parallelUploads: 1,
                                                            maxFilesize: 100,
                                                            addRemoveLinks: true,
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            },
                                                            sending: function(file, xhr, formData) {
                                                                formData.append('folder', 'music');
                                                            },
                                                            success: function(file, response) {

                                                                if (file.previewElement) {
                                                                    file.previewElement.classList.add("dz-success");
                                                                }
                                                                file.previewElement.dataset.path = response.path;
                                                                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                                                                    '.hidden-inputs');
                                                                hiddenInputsContainer.innerHTML +=
                                                                    `<input type="hidden" name="image" value="${response.path}" data-path="${response.path}">`;

                                                            },
                                                            removedfile: function(file) {
                                                                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                                                                    '.hidden-inputs');
                                                                hiddenInputsContainer.querySelector(
                                                                    `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                                                                if (file.previewElement != null && file.previewElement.parentNode != null) {
                                                                    file.previewElement.parentNode.removeChild(file.previewElement);
                                                                }

                                                                $.ajax({
                                                                    url: 'https://dash.yekbun.net/artists/5/image',
                                                                    method: 'delete',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                                                                    },
                                                                    data: {
                                                                        path: file.previewElement.dataset.path
                                                                    },
                                                                    success: function() {}
                                                                });

                                                                return this._updateMaxFilesReachedClass();
                                                            }
                                                        });

                                                        $("document").ready(() => {
                                                            var path = "https://dash.yekbun.net/storage/music/64fdaa9e6e18c___Download.jpeg";
                                                            var rpath = "music/64fdaa9e6e18c___Download.jpeg";
                                                            const parts = rpath.split("___");

                                                            imageUrlToFile(path, parts).then((file) => {
                                                                file['status'] = "success";
                                                                file['previewElement'] = "div.dz-preview.dz-image-preview";
                                                                file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                                                                file['_removeLink'] = "a.dz-remove";
                                                                // file['webkitRelativePath'] = "";
                                                                file['width'] = 500;
                                                                file['height'] = 500;
                                                                file['accepted'] = true;
                                                                file['dataURL'] = path;
                                                                file['processing'] = true;
                                                                file['addPathToDataset'] = true;
                                                                dropzoneMulti1.on('addedfile', function(file) {
                                                                    if (file.addPathToDataset)
                                                                        file.previewElement.dataset.path = rpath;
                                                                });
                                                                file['upload'] = {
                                                                    bytesSent: 0,
                                                                    progress: 0,
                                                                };

                                                                // Update the preview template to include the music title

                                                                dropzoneMulti1.emit("addedfile", file, path);
                                                                dropzoneMulti1.emit("thumbnail", file, path);
                                                                // dropzoneMulti1.files.push(file);
                                                            });
                                                        });
                                                    })
                                                </script>

                                                <script>
                                                    async function imageUrlToFile(imageUrl, fileName) {
                                                        // Fetch the image
                                                        const response = await fetch(imageUrl);
                                                        const blob = await response.blob();

                                                        // Create a File object
                                                        const file = new File([blob], fileName[1], {
                                                            type: blob.type
                                                        });

                                                        return file;
                                                    }
                                                </script>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-label-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" form="editForm5" class="btn btn-primary"
                                                    onclick="">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>

    {{-- Create Artis model --}}
    <x-modal id="createartistModal" title="Create Artist" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">
        @include('content.include.artist.createForm')
    </x-modal>

    {{-- Create Music model --}}
<x-modal
id="createmusicModal"
title="{{ $type == 'music' ? 'Create Music' : 'Create Songs' }}"
 saveBtnText="Create"
 saveBtnType="submit"
  saveBtnForm="createForm"
  size="md">

 @include('content.include.music.createForm')
</x-modal>
@section('page-script')
    <script>
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
    </script>

    <script>
        $('.province_id').change(function() {
            let url = $(this).data('url');
            let id = $(this).val();
            const self = this;

            $.ajax({
                type: 'get',
                url: url + '/' + id,
                success: function(response) {
                    const cityIdEl = $(self).closest('form').find('.city_id');
                    cityIdEl.html('');
                    $.each(response, function(index, value) {
                        console.log('Province',index, value);
                        cityIdEl.append('<option value="' + value._id + '">' + value.name +
                            '</option>')
                    })
                }
            })

        });

        $(document).ready(function() {
            $('.edit-form .province_id').each(function(index, provinceEl) {
                let url = $(provinceEl).data('url');
                let id = $(provinceEl).val();
                let selected = $(provinceEl).data('selected');

                $.ajax({
                    type: 'get',
                    url: url + '/' + id,
                    success: function(response) {
                        const cityIdEl = $(provinceEl).closest('form').find('.city_id');
                        cityIdEl.html('');
                        $.each(response, function(index, value) {
                            cityIdEl.append('<option value="' + value.id + '" ' + (value
                                    .id == selected ? 'selected' : '') + '>' + value
                                .name + '</option>')
                        })
                    }
                })

            });
        });
        // $('.province_id').change(function() {
        //     let url = $(this).data('url');
        //     let id = $(this).val();
        //     console.log(url);
        //     console.log(id);
        //     $.ajax({
        //         type: 'get'
        //         , url: url + '/' + id
        //         , success: function(response) {
        //             $('#city_id').html('')
        //             $.each(response, function(index, value) {
        //                 console.log(index, value);
        //                 $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>')
        //             })
        //         }
        //     })

        // });
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection

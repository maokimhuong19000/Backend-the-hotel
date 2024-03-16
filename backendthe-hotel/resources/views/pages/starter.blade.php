@extends('layouts.vertical', ['title' => 'Starter Page', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => ''])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Upload Image </h4>
                    <p class="text-muted mb-0">
                        Click upload image
                    </p>
                </div>

                @if (Session::has('error'))
                    <div class="alert alert-warning" role="alert">
                        Something was wrong
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ url('/store') }}" method="post" class="dropzone" id="room_img" name="room_img"
                        data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                        <div class="fallback">
                            <input name="room_img" type="file" multiple  required/>
                        </div>
                        <div class="dz-message needsclick">
                            <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                            <h3>Drop files here or click to upload.</h3>
                            <span class="text-muted fs-13">(This is just a demo dropzone. Selected files are
                                <strong>not</strong> actually uploaded.)</span>
                        </div>
                    </form>
                    <!-- Preview -->
                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- file preview template -->
            <div class="d-none" id="uploadPreviewTemplate" name="room_img">
                <div class="card mt-1 mb-0 shadow-none border">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                            </div>
                            <div class="col ps-0">
                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                <p class="mb-0" data-dz-size></p>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="" class="btn btn-link btn-lg text-danger" data-dz-remove>
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end card-->
        </div>
        <!-- end col-->
    </div>

    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create Room</h4>
                        <p class="text-muted mb-0">
                        </p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="room_id" name="room_id"
                                        placeholder="id" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="room_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="room_name" name="room_name"
                                        placeholder="name" required>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="room_price" class="form-label">Pricing</label>
                                    <input type="text" class="form-control" id="room_price" name="room_price"
                                        placeholder="enter price" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputState" class="form-label">Room Type</label>
                                    <select id="room_type_id" name="room_type_id" class="form-select" required>
                                        @foreach ($roomtype as $item)
                                            <option value="{{ $item->room_type_id }}">{{ $item->room_type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="row g-2">

                                <div class="mb-3 ">
                                    <label for="inputState" class="form-label">Status</label>
                                    <select id="room_status" name="room_status" class="form-select" required>
                                        <option>
                                        <option value="1">Aailable</option>
                                        <option value="0">Unavilable</option>
                                        </option>

                                    </select>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="inputAddress2" class="form-label">Description</label>
                                <input type="text" class="form-control" id="room_desc" name="room_desc"
                                    placeholder="description" required>
                            </div>
                            <button id="submitButton" type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Check if success message exists in the session and show the SweetAlert2 message
        @if (Session::has('success'))
            Swal.fire({
                title: "Create Successfully",
                text: "{{ Session::get('success') }}",
                timer: 10000,
                icon: "success"
            });
        @endif
    </script>
@endsection
@section('script')
    @vite(['resources/js/pages/fileupload.init.js'])
@endsection

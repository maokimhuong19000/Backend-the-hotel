@extends('layouts.vertical', ['title' => 'Starter Page', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => ''])
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create Room</h4>
                        <p class="text-muted mb-0"></p>
                    </div>

                    <!-- Upload Image Section -->

                    <div class="row g-2">
                        <div class="mb-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ url('/store') }}" method="post" id="room_img_form"
                                        enctype="multipart/form-data">
                                        <div class="fallback">
                                            <input type="file" name="room_img" id="room_img"​​​>
                                        </div>
                                    </form>
                                    <div class="card-body">
                                        <h5 class="card-title">Image Preview</h5>
                                        <img id="image_preview" src="#" alt="Image Preview" width="200px"
                                            style="display: none;">
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->
                    </div>
                    <script>
                        document.getElementById('room_img').addEventListener('change', function(event) {
                            var file = event.target.files[0];
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                var img = document.getElementById('image_preview');
                                img.src = event.target.result;
                                img.style.display = 'block';
                            };
                            reader.readAsDataURL(file);
                        });
                    </script>

                    <!-- End Upload Image Section -->

                    <div class="card-body">
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" class="form-control" id="room_id" name="room_id" placeholder="id">
                                @if ($errors->has('room_id'))
                                    <span class="text-danger">{{ $errors->first('room_id') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="room_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="room_name" name="room_name"
                                    placeholder="name">
                                @if ($errors->has('room_name'))
                                    <span class="text-danger">{{ $errors->first('room_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="room_price" class="form-label">Pricing</label>
                                <input type="text" class="form-control" id="room_price" name="room_price"
                                    placeholder="enter price">
                                @if ($errors->has('room_price'))
                                    <span class="text-danger">{{ $errors->first('room_price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputState" class="form-label">Room Type</label>
                                <select id="room_type_id" name="room_type_id" class="form-select">
                                    @foreach ($roomtype as $item)
                                        <option value="{{ $item->room_type_id }}">{{ $item->room_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 ">
                                <label for="inputState" class="form-label">Status</label>
                                <select id="room_status" name="room_status" class="form-select">
                                    <option value="1">Available</option>
                                    <option value="0">Unavailable</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Description</label>
                            <input type="text" class="form-control" id="room_desc" name="room_desc"
                                placeholder="description">
                        </div>
                        <button id="submitButton" type="submit" class="btn btn-primary">Save</button>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
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

        @if (Session::has('error'))
            Swal.fire({
                title: "Create faidil error",
                text: "{{ Session::get('success') }}",
                timer: 10000,
                icon: "error"
            });
        @endif


        //image preview
        $(document).ready(function() {
            // Initialize Dropzone
            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone("#room_img", {
                url: "{{ url('/store') }}",
                paramName: "room_img",
                maxFiles: 1,
                maxFilesize: 2, // in MB
                acceptedFiles: "image/*",
                addRemoveLinks: true,
                dictRemoveFile: "Remove",
                previewsContainer: "#file-preview",
                init: function() {
                    this.on("addedfile", function(file) {
                        if (this.files[1] != null) {
                            this.removeFile(this.files[0]);
                        }
                    });
                }
            });
        });
    </script>
@endsection
@section('script')
    @vite(['resources/js/pages/fileupload.init.js'])
@endsection

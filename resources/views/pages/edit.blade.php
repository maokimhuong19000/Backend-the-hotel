@extends('layouts.vertical', ['title' => 'Starter Page', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => ''])

    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif --}}
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    
    
    <form action="{{ route('room.update') }}" method="POST" enctype="multipart/form-data">
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
                                    <form action="{{ url('room.update') }}" method="post" id="room_img"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="fallback">
                                            <input type="file" name="room_img" id="room_img">
                                        </div>
                                    </form>
                                    <div class="card-body">
                                        <h5 class="card-title">Image Preview</h5>
                                        <img id="image_preview" src="{{$room->room_img}}" alt="Image Preview" width="200px">
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
                                <input type="text" class="form-control" name="room_id" id="room_id" value="{{$room->room_id}}"
                                    placeholder="ID" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="room_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="room_name" name="room_name" value="{{$room->room_name}}"
                                    placeholder="name" required>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="room_price" class="form-label">Pricing</label>
                                <input type="text" class="form-control" id="room_price" name="room_price" value="{{$room->room_price}}"
                                    placeholder="enter price" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputState" class="form-label">Room Type</label>
                                <select id="room_type_id" name="room_type_id" class="form-select" required>
                                    @foreach ($roomtype as $item)
                                        <option value="{{ $item->room_type_id }}"{{$room->room_type_id==$item->room_type_id ? 'selected':''}}>{{ $item->room_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 ">
                                <label for="inputState" class="form-label">Status</label>
                                <select id="room_status" name="room_status" class="form-select" required>
                                    <option value="1" {{$room->room_status == '1'? 'selected':''}}>Available</option>
                                    <option value="0" {{$room->room_status == '0'? 'selected':''}}>Unavailable</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Description</label>
                            <textarea class="form-control" id="room_desc" name="room_desc" row="3">{{$room->room_desc}}</textarea>
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

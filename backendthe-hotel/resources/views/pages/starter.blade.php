@extends('layouts.vertical', ['title' => 'Starter Page', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                <div class="card-body">
                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                        data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
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
            <div class="d-none" id="uploadPreviewTemplate">
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

<form action="{{url('room.store')}}" method="post" enctype="multipart/form-data" >
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
                                <input type="text" class="form-control" id="room_id" name="room_id" placeholder="id">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="room_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="room_name" name="room_name" placeholder="name">
                            </div>
                        </div>
                        <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="room_price" class="form-label">Pricing</label>
                            <input type="text" class="form-control" id="room_price" name="room_price" placeholder="enter price">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Status</label>
                            <select id="room_type_id" name="room_type_id" class="form-select">
                                <option>---------------------------------</option>
                                @foreach ($roomtype as $item)
                                <option>{{ $item->room_type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            
                           
                        </div>

                        <div class="mb-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                <label class="form-check-label" for="customCheck11">Check this custom
                                    checkbox</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</form>
@endsection
@section('script')
    @vite(['resources/js/pages/fileupload.init.js'])
@endsection

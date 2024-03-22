@extends('layouts.vertical', ['title' => 'Basic Tables', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@section('content')
    @include('layouts.shared/page-title', ['page_title' => 'បញ្ចីបន្ទប់', 'sub_title' => 'Tables'])
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Accommodation list</h4>
                    <p class="text-muted mb-0">
                    </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered border-primary table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Room Type</th>
                                    <th>Pricing</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">View</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <?php
                            $page = @$_GET['page'];
                            if (!$page) {
                                $page = 1;
                            }
                            $i = config('app.row') * ($page - 1) + 1;
                            ?>
                            @foreach ($room as $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="table-user" style="width: 100px"><img src="{{ $item->room_img }}"
                                                style="width: auto;height: 50px;"></td>
                                        <td>{{ $item->room_name }}</td>
                                        <th>{{ $item->room_type_name }}</th>
                                        <td>{{ $item->room_price }}</td>
                                        <td>
                                            @if ($item->room_status == 1)
                                                Available
                                            @elseif($item->room_status == 0)
                                                Unavailable
                                            @else
                                            @endif
                                        </td>
                                        <td style="width: 400px">{{ $item->room_desc }}</td>
                                        {{-- edit button --}}
                                        <td class="text-center">
                                            <a href="{{ route('room.edit', ['id' => $item->room_id]) }}"
                                                id="editButton{{ $item->room_id }}" class="btn btn-danger delete-btn"
                                                style="border: 2px; background-color: rgb(0, 172, 72);">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                        </td>
                                        {{-- view button --}}
                                        <td class="text-center">
                                            <button type="submitview" id="viewButton{{ $item->room_id }}"
                                                class="btn btn-danger delete-btn"
                                                style="border: 2px; background-color: rgb(0, 120, 218);">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </td>
                                        {{-- delete button  --}}
                                        <td class="text-center">
                                            <form action="{{ route('tables.basic.delete', ['id' => $item->room_id]) }}"
                                                method="POST" id="deleteForm{{ $item->room_id }}"
                                                class="text-reset fs-16 px-1" onsubmit="return confirmDelete()">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="deleteButton{{ $item->room_id }}"
                                                    class="btn btn-danger delete-btn"
                                                    style="border: 2px; background-color: crimson;">
                                                    <i class="ri-delete-bin-2-line"></i>
                                                </button>
                                            </form>
                                        </td>
                                </tbody>
                            @endforeach
                        </table>
                        {{ $room->links('/vendor/pagination/bootstrap-5') }}
                    </div> <!-- end table-responsive-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete() {
            if (confirm('Are you sure you want to delete this record?')) {
             
                Swal.fire({
                    icon: 'success',
                    title: 'Record deleted successfully.',
                    showConfirmButton: false,
                    timer: 10000
                });
                return true;
            } else {
                return false;
            }
        }
    </script>
    <script>
        // Check if success message exists in the session and show the SweetAlert2 message
        @if (Session::has('success_update'))
            Swal.fire({
                title: "Update Successfully",
                text: "{{ Session::get('ssuccess') }}",
                timer: 10000,
                icon: "success"
            });
        @endif

        @if (Session::has('error_update'))
            Swal.fire({
                title: "Create faidil error",
                text: "{{ Session::get('success') }}",
                timer: 10000,
                icon: "error"
            });
        @endif
    </script>
    <!-- end row-->
@endsection
@endsection

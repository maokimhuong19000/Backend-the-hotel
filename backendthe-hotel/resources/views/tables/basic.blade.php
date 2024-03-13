@extends('layouts.vertical', ['title' => 'Basic Tables', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    @include('layouts.shared/page-title', ['page_title' => 'បញ្ចីបន្ទប់', 'sub_title' => 'Tables'])

    {{-- <div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Basic example</h4>
                <p class="text-muted mb-0">
                    For basic styling—light padding and only horizontal dividers—add the base class
                    <code>.table</code> to any <code>&lt;table&gt;</code>.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Date of Birth</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Risa D. Pearson</td>
                                <td>336-508-2157</td>
                                <td>July 24, 1950</td>
                                <td>India</td>
                            </tr>
                            <tr>
                                <td>Ann C. Thompson</td>
                                <td>646-473-2057</td>
                                <td>January 25, 1959</td>
                                <td>USA</td>
                            </tr>
                            <tr>
                                <td>Paul J. Friend</td>
                                <td>281-308-0793</td>
                                <td>September 1, 1939</td>
                                <td>Canada</td>
                            </tr>
                            <tr>
                                <td>Linda G. Smith</td>
                                <td>606-253-1207</td>
                                <td>May 3, 1962</td>
                                <td>Brazil</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Inverse table</h4>
                <p class="text-muted mb-0">
                    You can also invert the colors—with light text on dark backgrounds—with
                    <code>.table-dark</code>.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-dark mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Date of Birth</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Risa D. Pearson</td>
                                <td>336-508-2157</td>
                                <td>July 24, 1950</td>
                                <td>Malaysia</td>
                            </tr>
                            <tr>
                                <td>Ann C. Thompson</td>
                                <td>646-473-2057</td>
                                <td>January 25, 1959</td>
                                <td>Belgium</td>
                            </tr>
                            <tr>
                                <td>Paul J. Friend</td>
                                <td>281-308-0793</td>
                                <td>September 1, 1939</td>
                                <td>Australia</td>
                            </tr>
                            <tr>
                                <td>Sean C. Nguyen</td>
                                <td>269-714-6825</td>
                                <td>February 5, 1994</td>
                                <td>Algeria</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row--> --}}
    {{-- 
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Striped rows</h4>
                <p class="text-muted mb-0">
                    Use <code>.table-striped</code> to add zebra-striping to any table row
                    within the <code>&lt;tbody&gt;</code>.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Account No.</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-2.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Risa D. Pearson
                                </td>
                                <td>AC336 508 2157</td>
                                <td>July 24, 1950</td>
                                <td>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-settings-3-line"></i></a>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-3.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Ann C. Thompson
                                </td>
                                <td>SB646 473 2057</td>
                                <td>January 25, 1959</td>
                                <td>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-settings-3-line"></i></a>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-4.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Paul J. Friend
                                </td>
                                <td>DL281 308 0793</td>
                                <td>September 1, 1939</td>
                                <td>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-settings-3-line"></i></a>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-5.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Sean C. Nguyen
                                </td>
                                <td>CA269 714 6825</td>
                                <td>February 5, 1994</td>
                                <td>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-settings-3-line"></i></a>
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Table head options</h4>
                <p class="text-muted mb-0">
                    Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light
                    or dark gray.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-centered mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Product</th>
                                <th>Courier</th>
                                <th>Process</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASOS Ridley High Waist</td>
                                <td>FedEx</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-success"
                                            role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>Delivered</td>
                            </tr>
                            <tr>
                                <td>Marco Lightweight Shirt</td>
                                <td>DHL</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-warning"
                                            role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>Shipped</td>
                            </tr>
                            <tr>
                                <td>Half Sleeve Shirt</td>
                                <td>Bright</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-info"
                                            role="progressbar" style="width: 25%" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>Order Received</td>
                            </tr>
                            <tr>
                                <td>Lightweight Jacket</td>
                                <td>FedEx</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-success"
                                            role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>Delivered</td>
                            </tr>
                            <tr>
                                <td>Cargo Pant & Shirt</td>
                                <td>FedEx</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-danger"
                                            role="progressbar" style="width: 10%" aria-valuenow="10"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>Payment Failed</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> --}}
    <!-- end row-->

    {{-- 
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Hoverable rows</h4>
                <p class="text-muted mb-0">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASOS Ridley High Waist</td>
                                <td>$79.49</td>
                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                <td>$6,518.18</td>
                            </tr>
                            <tr>
                                <td>Marco Lightweight Shirt</td>
                                <td>$128.50</td>
                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                <td>$4,754.50</td>
                            </tr>
                            <tr>
                                <td>Half Sleeve Shirt</td>
                                <td>$39.99</td>
                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                <td>$2,559.36</td>
                            </tr>
                            <tr>
                                <td>Lightweight Jacket</td>
                                <td>$20.00</td>
                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                <td>$3,680.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Small table</h4>
                <p class="text-muted mb-0">
                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding
                    in half.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-sm table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASOS Ridley High Waist</td>
                                <td>$79.49</td>
                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                <td>$6,518.18</td>
                            </tr>
                            <tr>
                                <td>Marco Lightweight Shirt</td>
                                <td>$128.50</td>
                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                <td>$4,754.50</td>
                            </tr>
                            <tr>
                                <td>Half Sleeve Shirt</td>
                                <td>$39.99</td>
                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                <td>$2,559.36</td>
                            </tr>
                            <tr>
                                <td>Lightweight Jacket</td>
                                <td>$20.00</td>
                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                <td>$3,680.00</td>
                            </tr>
                            <tr>
                                <td>Marco Shoes</td>
                                <td>$28.49</td>
                                <td><span class="badge bg-primary">69 Pcs</span></td>
                                <td>$1,965.81</td>
                            </tr>
                            <tr>
                                <td>ASOS Ridley High Waist</td>
                                <td>$79.49</td>
                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                <td>$6,518.18</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> --}}
    <!-- end row-->

    <div class="row">
        {{-- <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Bordered table</h4>
                <p class="text-muted mb-0">
                    Add <code>.table-bordered</code> for borders on all sides of the table and
                    cells.
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Account No.</th>
                                <th>Balance</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-6.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Risa D. Pearson
                                </td>
                                <td>AC336 508 2157</td>
                                <td>July 24, 1950</td>
                                <td class="text-center">
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-7.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Ann C. Thompson
                                </td>
                                <td>SB646 473 2057</td>
                                <td>January 25, 1959</td>
                                <td class="text-center">
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-8.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Paul J. Friend
                                </td>
                                <td>DL281 308 0793</td>
                                <td>September 1, 1939</td>
                                <td class="text-center">
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="/images/users/avatar-9.jpg" alt="table-user"
                                        class="me-2 rounded-circle" />
                                    Sean C. Nguyen
                                </td>
                                <td>CA269 714 6825</td>
                                <td>February 5, 1994</td>
                                <td class="text-center">
                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i
                                            class="ri-delete-bin-2-line"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col--> --}}

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
                                    <th class="text-center">Action</th>
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
                                        <td class="text-center">
                                            <form action="{{ route('tables.basic.delete', ['id' => $item->room_id]) }}"
                                                method="POST" id="deleteForm{{ $item->room_id }}"
                                                class="text-reset fs-16 px-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="button"  class="btn btn-danger delete-btn"
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
    <!-- end row-->
@endsection

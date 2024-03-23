@extends('layouts.vertical', ['title' => 'Invoice', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => 'Invoice'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- Invoice Logo-->
                    <div class="clearfix">
                        <div class="float-start mb-3">
                            <H1>The Moulin Oasis</H1>
                        </div>
                        <div class="float-end">
                            <h4 class="m-0 d-print-none">Invoice</h4>
                        </div>
                    </div>

                    <!-- Invoice Detail-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="float-end mt-3">
                                <p><b>Hello, Thomson</b></p>
                                <p class="text-muted fs-13">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                            </div>

                        </div><!-- end col -->
                        <div class="col-sm-4 offset-sm-2">
                            <div class="mt-3 float-sm-end">
                                <p class="fs-13"><strong>Booking Date</strong> &nbsp;&nbsp;&nbsp; Jan 17, 2023</p>
                                <p class="fs-13"><strong>Booking Status: </strong> <span class="badge bg-success float-end">Paid</span></p>
                                <p class="fs-13"><strong>Booking ID: </strong> <span class="float-end">#123456</span></p>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row mt-4">
                        <div class="col-6">
                            <h6 class="fs-14">Billing Address</h6>
                            <address>
                                Keo Chanda st <br>
                                Chroy Changva<br>
                                Phnom Peng, Cambodia<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div> <!-- end col-->

                        <div class="col-6">
                            <h6 class="fs-14">Accommodation Address</h6>
                            <address>
                                Keo Chanda st <br>
                                Chroy Changva<br>
                                Phnom Peng, Cambodia<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div> <!-- end col-->
                    </div>    
                    <!-- end row -->        

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-centered table-hover table-borderless mb-0 mt-3">
                                    <thead class="border-top border-bottom bg-light-subtle border-light">
                                    <tr><th>#</th>
                                        <th>Booking</th>
                                        <th>Date</th>
                                        <th>Unit Cost</th>
                                        <th class="text-end">Total</th>
                                    </tr></thead>
                                    <tbody>
                                    <tr>
                                        <td class="">1</td>
                                        <td>
                                            <b>Twin Room</b> <br/>
                                        
                                        </td>
                                        <td>3 ngiht</td>
                                        <td>$190.00</td>
                                        <td class="text-end">570</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>2</td>
                                        <td>
                                            <b>Warranty</b> <br/>
                                            Two Year Extended Warranty -
                                            Parts and Labor
                                        </td>
                                        <td class="">3</td>
                                        <td>$499.00</td>
                                        <td class="text-end">$1497.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <b>LED</b> <br/>
                                            80cm (32) HD Ready LED TV
                                        </td>
                                        <td class="">2</td>
                                        <td>$412.00</td>
                                        <td class="text-end">$824.00</td>
                                    </tr> --}}

                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="clearfix pt-3">
                                <h6 class="text-muted fs-14">Notes:</h6>
                                <small>
                                    All accounts are to be paid within 7 days from receipt of
                                    invoice. To be paid by cheque or credit card or direct payment
                                    online. If account is not paid within 7 days the credits details
                                    supplied as confirmation of work undertaken will be charged the
                                    agreed quoted fee noted above.
                                </small>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="float-end mt-3 mt-sm-0">
                                <p><b>Sub-total:</b> <span class="float-end">$570.00</span></p>
                                <p><b>VAT (12.5):</b> <span class="float-end">$5.70</span></p>
                                <h3>$575.70 USD</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="d-print-none mt-4">
                        <div class="text-center">
                            <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-printer-line"></i> Print</a>
                            <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                        </div>
                    </div>   
                    <!-- end buttons -->

                </div> <!-- end card-body-->
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
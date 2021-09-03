@extends('layouts.app', ['activePage' => 'history', 'titlePage' => __('history')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">ประวัติการจอง</h4>
                        <p class="card-category"> This is The List History Bookings .</p>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Room
                                    </th>
                                    <th>
                                        Note
                                    </th>
                                    <th>
                                        Start
                                    </th>
                                    <th>
                                        End
                                    </th>
                                    <th>
                                        Satatus
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-primary">
                                            2001-02-02
                                        </td>
                                        <td class="text-primary">
                                            2001-02-04
                                        </td>
                                        <td>
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">ประวัติการอนุมัติ</h4>
                        <p class="card-category"> This is The List Appove Bookings .</p>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID Booking
                                    </th>
                                    <th>
                                        User ID
                                    </th>
                                    <th>
                                        Room
                                    </th>
                                    <th>
                                        Booker Note
                                    </th>
                                    <th>
                                        Start Date
                                    </th>
                                    <th>
                                        End Date
                                    </th>
                                    <th>
                                        Checker Note
                                    </th>
                                    <th>
                                        Appove Status
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                        <td>
                                            จอง
                                        </td>
                                        <td class="text-primary">
                                            2001-02-02
                                        </td>
                                        <td class="text-primary">
                                            2001-02-04
                                        </td>
                                        <td>
                                            อนุมัติ
                                        </td>
                                        <td>
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
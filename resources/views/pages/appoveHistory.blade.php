@extends('layouts.app', ['activePage' => 'appoveHistory', 'titlePage' => __('Booking History')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('history.title.approve') }}</h4>
                        <input class="form-control" id="appovehistory" type="text" placeholder="พิมพ์ชื่อห้องหรือสถานะเพื่อค้นหา..">
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <!-- <th>
                                        {{ __('history.id booking') }}
                                    </th> -->
                                    <th>
                                        {{ __('history.user id') }}
                                    </th>
                                    <th>
                                        {{ __('history.room') }}
                                    </th>
                                    <th>
                                        {{ __('history.note') }}
                                    </th>
                                    <th>
                                        {{ __('history.date appove.start') }}
                                    </th>
                                    <th>
                                        {{ __('history.date appove.end') }}
                                    </th>
                                    <th>
                                        {{ __('history.appove status') }}
                                    </th>
                                    <th>
                                        {{ __('history.checker note') }}
                                    </th>

                                </thead>
                                <tbody id="myTable">
                                    @foreach($data as $key)
                                    <tr>
                                        <!-- <td>
                                            {{$key['id']}}
                                        </td> -->
                                        <td>
                                        {{$key['booker_id']}}
                                        </td>
                                        <td>
                                        {{$key['room_id']}}

                                        </td>
                                        <td>
                                        {{$key['booker_note']}}

                                        </td>
                                        <td>
                                        {{$key['start_date']}}

                                        </td>
                                        <td>
                                        {{$key['end_date']}}

                                        </td>
                                        <td>

                                        @if($key['booking_status'] == 1)
                                            {{ __('listBooking.status booking.approve') }}

                                            @elseif($key['booking_status'] == 0)
                                            {{ __('listBooking.status booking.disapproved') }}

                                            @elseif($key['booking_status'] == -1)
                                            {{ __('listBooking.status booking.pending') }}

                                            @elseif($key['booking_status'] == -2)
                                            {{ __('listBooking.status booking.cancle') }}
                                            @endif

                                        </td>
                                        <td>
                                        {{$key['checker_note']}}

                                        </td>
                                    </tr>
                                    @endforeach
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
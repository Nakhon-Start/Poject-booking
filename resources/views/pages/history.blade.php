@extends('layouts.app', ['activePage' => 'history', 'titlePage' => __('Booking History')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('history.title.booking') }}</h4>
                        <!-- <p class="card-category"> พิมพ์ข้อความเพื่อค้นหาประวัติข้อมูล </p> -->
                        <input class="form-control" id="history" type="text" placeholder="พิมพ์ชื่อห้องหรือผลอนุมัติเพื่อตรวจสอบ..">
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('success') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (session('failed'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('failed') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <!-- <th>
                                        {{ __('history.id') }}
                                    </th> -->
                                    <th>
                                        {{ __('history.room name') }}
                                    </th>
                                    <th>
                                        {{ __('history.note') }}
                                    </th>
                                    <th>
                                        {{ __('history.date booking.start') }}
                                    </th>
                                    <th>
                                        {{ __('history.date booking.end') }}
                                    </th>
                                    <th>
                                        {{ __('history.status') }}
                                    </th>
                                    <th>
                                        {{ __('history.appove by') }}
                                    </th>
                                    <th>
                                        {{ __('history.checker note') }}
                                    </th>
                                    <!-- <th>
                                        {{ __('history.create at') }}
                                    </th> -->
                                    <th>
                                        {{ __('listBooking.edit booking') }}
                                    </th>
                                    <th>
                                        {{ __('listBooking.cancle booking') }}
                                    </th>
                                </thead>
                                <tbody id="myTable">
                                    @foreach($data['booker_history'] as $data)
                                    <tr>
                                        <!-- <td>
                                            {{$data['id']}}
                                        </td> -->
                                        <td>
                                            {{$data['room_id']}}
                                        </td>
                                        <td>
                                            {{$data['booker_note']}}
                                        </td>
                                        <td>
                                            {{$data['start_date']}}
                                        </td>
                                        <td>
                                            {{$data['end_date']}}
                                        </td>
                                        <td>
                                            @if($data['booking_status'] == 1)
                                            {{ __('listBooking.status booking.approve') }}

                                            @elseif($data['booking_status'] == 0)
                                            {{ __('listBooking.status booking.disapproved') }}

                                            @elseif($data['booking_status'] == -1)
                                            {{ __('listBooking.status booking.pending') }}

                                            @elseif($data['booking_status'] == -2)
                                            {{ __('listBooking.status booking.cancle') }}
                                            @endif
                                        </td>
                                        <td>
                                        @if($data['booking_status'] != -2)
                                            {{$data['checker_id']}}
                                            @elseif($data['booking_status'] != 1)
                                            {{ __('history.null') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($data['booking_status'] != -2)
                                            {{$data['checker_note']}}
                                            @elseif($data['booking_status'] != 1)
                                            {{ __('history.null') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($data['booking_status'] == -1)
                                            <button type="button" title class="btn btn-warning btn-link btn-xl" data-toggle="modal" data-target="#editHistory" data-booking_status="{{$data['booking_status']}}" data-id="{{$data['id']}}">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            @elseif($data['booking_status'] != -1)
                                            {{ __('history.null') }}
                                            @endif
                                        </td>
                                        <td>
                                            <form action="cancle" method="POST">
                                                @csrf
                                                <input type="hidden" class="form-control text-center" name="id" value="{{$data['id']}}">
                                                <input type="hidden" class="form-control text-center" name="booker_note" value="ยกเลิก">
                                                @if($data['booking_status'] == -1)
                                                <button type="submit" class="btn btn-danger btn-link btn-xl">
                                                    <i class="material-icons">cancel</i>
                                                </button>
                                                @elseif($data['booking_status'] != -1)
                                                {{ __('history.null') }}
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="editHistory">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"> {{ __('booking.edit') }}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body text-center">
                            <form action="setBooking" method="POST">
                                @csrf
                                <div id="modalBody" class="modal-body text-center">

                                    <input type="hidden" class="form-control text-center" name="id" id="id">
                                    <!-- <input type="hidden" class="form-control text-center" name="booking_status" id="booking_status"> -->
                                    <!-- </div> -->
                                    <div class="form-group text-center">
                                        <label class="col-sm-12 col-form-label"> {{ __('booking.booking note') }}</label><br>
                                        <textarea class="form-control text-center" type="text" name="booker_note"></textarea>
                                    </div>
                                    <div class="center col-sm-12 form-group">
                                        <label class="col-sm-8 col-form-label"> {{ __('booking.date.start') }}</label>
                                        <input type="date" id="birthday" name="start_date" id="start_date">
                                    </div>
                                    <div class="center col-sm-12 form-group">
                                        <label class="col-sm-8 col-form-label"> {{ __('booking.date.end') }}</label>
                                        <input type="date" id="birthday" name="end_date" id="end_date">
                                    </div>
                                    <div class="modal-footer"></div>
                                    <!-- <button type="submit" class="btn btn-primary" id="submitButton">Save</button> -->

                                    <button type="submit" class="btn btn-primary" id="submitButton" onclick="this.classList.toggle('button--loading')">
                                        <span class="button__text">{{ __('booking.submit') }}</span>
                                    </button>

                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('booking.cancle') }}</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
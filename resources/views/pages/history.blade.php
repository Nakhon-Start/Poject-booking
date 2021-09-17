@extends('layouts.app', ['activePage' => 'history', 'titlePage' => __('Booking History')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('history.title.booking') }}</h4>
                        <!-- <p class="card-category"> This is The List History Bookings .</p> -->
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                    {{ __('history.id') }}
                                    </th>
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
                                </thead>
                                <tbody>
                                    @foreach($data['booker_history'] as $data)
                                    <tr>
                                        <td>
                                            {{$data['id']}}
                                        </td>
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
                                            {{$data['booking_status']}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('history.title.approve') }}</h4>
                        <!-- <p class="card-category"> This is The List Appove Bookings .</p> -->
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                    {{ __('history.id booking') }}
                                    </th>
                                    <th>
                                    {{ __('history.user id') }}
                                    </th>
                                    <th>
                                    {{ __('history.room') }}
                                    </th>
                                    <th>
                                    {{ __('history.booker note') }}
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
                                <tbody>
                                    @foreach($booker as $data)
                                    <tr>
                                        <td>
                                            {{$data['id']}}
                                        </td>
                                        <td>
                                            {{$data['booker_id']}}
                                        </td>
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
                                            {{$data['booking_status']}}
                                        </td>
                                        <td>
                                            {{$data['checker_note']}}
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
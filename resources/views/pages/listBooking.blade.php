@extends('layouts.app', ['activePage' => 'listBooking', 'titlePage' => __('List Booking')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('listBooking.title') }}</h4>
            <!-- <p class="card-category"> This is The List Bookings .</p> -->
            <input class="form-control" id="listbooking" type="text" placeholder="พิมพ์ชื่อห้องหรือสถานะเพื่อค้นหา..">
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
                    {{ __('listBooking.id') }}
                  </th> -->
                  <th>
                    {{ __('listBooking.room') }}
                  </th>
                  <th>
                    {{ __('listBooking.note') }}
                  </th>
                  <th>
                    {{ __('listBooking.date.start') }}
                  </th>
                  <th>
                    {{ __('listBooking.date.end') }}
                  </th>
                  <th>
                    {{ __('listBooking.booking by') }}
                  </th>
                  <th>
                    {{ __('listBooking.status') }}
                  </th>
                  <!-- <th>
                    {{ __('listBooking.edit booking') }}
                  </th>
                  <th>
                    {{ __('listBooking.cancle booking') }}
                  </th> -->
                  @can('is_checker')
                  <th>
                    {{ __('listBooking.appove') }}
                  </th>
                  @endcan

                </thead>
                <tbody id="myTable">
                  @foreach($booking as $data)
                  @csrf
                  <tr>
                    <!-- <td>
                      {{$data->id}}
                    </td> -->
                    <td>
                      {{$data->room->name}}
                    </td>
                    <td>
                      {{$data->booker_note}}
                    </td>
                    <td>
                      {{$data->start_date}}
                    </td>
                    <td>
                      {{$data->end_date}}
                    </td>
                    <td>
                      {{$data->user->name}}
                    </td>
                    <td>
                      @if($data->booking_status == 1)
                      {{ __('listBooking.status booking.approve') }}

                      @elseif($data->booking_status == 0)
                      {{ __('listBooking.status booking.disapproved') }}

                      @elseif($data->booking_status == -1)
                      {{ __('listBooking.status booking.pending') }}

                      @elseif($data->booking_status == -2)
                      {{ __('listBooking.status booking.cancle') }}

                      @endif
                    </td>
                    <!-- <td>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                    <td>
                      <form action="cancle" method="POST">
                        @csrf
                        <input type="hidden" class="form-control text-center" name="id" value="{{$data->id}}">
                        <input type="hidden" class="form-control text-center" name="booker_note" value="cancel">
                        <button type="submit" class="btn btn-danger">
                          <i class="material-icons">cancel</i>
                        </button>
                      </form>
                    </td> -->
                    @can('is_checker')
                    <!-- <td>
                      <button type="button" class="btn btn-success" data-id="{{$data->id}}" data-toggle="modal" data-target="#Appove">
                        Appove</button>
                    </td> -->
                    
                    <td>
                    @if($data->booking_status == -1)
                      <button type="button" title class="btn btn-success btn-link btn-xl" data-id="{{$data->id}}" data-toggle="modal" data-target="#Appove">
                        <i class="fa fa-bars"></i></button>
                        @elseif($data->booking_status != -1)
                      {{ __('history.null') }}
                        @endif
                    </td>
                    @endcan
                    <th>
                    </th>
                    <th>
                    </th>
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

<div class="modal" id="Appove">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ __('listBooking.appove') }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-center">
        <form action="approve" method="POST">
          @csrf
          <div>
            <input type="hidden" class="form-control text-center" name="id" id="id">
            <label>{{ __('listBooking.noteCheck.accept') }}</label>
            <input type="text" class="form-control text-center" name="accepted_note">
            <!-- <label>{{ __('listBooking.noteCheck.reject') }}</label>
            <input type="text" class="form-control text-center" name="rejected_note"> -->
            <input type="hidden" class="form-control text-center" name="rejected_note" value="ปฎิเสธการจอง">
          </div>
          <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-primary" data-submit="modal">Submit</button> -->
            <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
              <span class="button__text">{{ __('listBooking.submit') }}</span>
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('listBooking.close')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
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
                  <th>
                    {{ __('listBooking.id') }}
                  </th>
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
                  <th>
                    {{ __('listBooking.edit booking') }}
                  </th>
                  <th>
                    {{ __('listBooking.cancle booking') }}
                  </th>
                  @can('is_checker')
                  <th>
                    {{ __('listBooking.appove') }}
                  </th>
                  @endcan

                </thead>
                <tbody>
                  @foreach($booking['data'] as $data)
                  <form action="{{ route('approvePage',$data['id']) }}" method="POST">
                    @csrf
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
                        {{$data['booker_id']}}
                      </td>
                      <td>
                        {{$data['booking_status']}}
                      </td>
                      <td>
                        <button type="submit" class="btn btn-warning">
                          <i class="material-icons">edit</i>
                        </button>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-danger">
                          <i class="material-icons">cancel</i>
                        </button>
                      </td>
                      <td>
                        @can('is_checker')
                        <button type="submit" class="btn btn-primary">
                          Appove
                        </button>
                        @endcan
                      </td>
                      <th>
                      </th>
                      <th>
                      </th>
                      </td>
                    </tr>
                  </form>
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
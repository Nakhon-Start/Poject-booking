@extends('layouts.app', ['activePage' => 'booking', 'titlePage' => __('booking.title')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div>
      @if (session('emptyTime'))
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-success" role="alert">
          {{ session('emptyTime') }}
          </div>
        </div>
      </div>
      @endif
    </div>
        <div>
      @if (session('emptyRoom'))
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-success" role="alert">
          {{ session('emptyRoom') }}
          </div>
        </div>
      </div>
      @endif
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="card text-center">
          <div class="card-header card-header-primary">
            <h4 class="modal-title ">{{ __('booking.search.time') }}</h4>
          </div>
          <div class="card-body">
            <div class="col-12 text-right">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Booking</button>
            </div>
            <form action="searchRoom" method="POST">
              @csrf
              <div class="center col-sm-12 form-group">
                <label class="col-sm-2 col-form-label">{{ __('dashboard.date.start') }}</label>
                <input type="date" id="birthday" name="start_date">
              </div>
              <div class="center col-sm-12 form-group">
                <label class="col-sm-2 col-form-label">{{ __('dashboard.date.end') }}</label>
                <input type="date" id="birthday" name="end_date">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">{{ __('dashboard.search') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card text-center">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('booking.search.room') }}</h4>
          </div>
          <div class="card-body">
            <div class="col-12 text-right">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Booking</button>
            </div>
            <form action="searchRoomId" method="POST">
              @csrf
              <label>Room</label>
              <div class="center col-md-6 col-lg-12 form-group">
                <select class="form-control form-control-lg text-center " name="room_id">
                  @foreach($room['data'] as $data)
                  <option value="{{$data['id']}}">{{$data['name']}}</option>
                  @endforeach
                </select>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">{{ __('dashboard.search') }}</button>
              </div><br>
            </form>
          </div>
        </div>
      </div>
      <div class="modal" id="edit">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Booking</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
              <form action="bookingByData" method="POST">
                @csrf
                <div id="modalBody" class="modal-body text-center">
                  <div class="form-group">
                    <label class="col-sm-12 col-form-label ">{{ 'Room ID' }}</label><br>
                    <input type="text" class="form-control text-center" name="room_id">
                  </div>
                  <div class="form-group text-center">
                    <label class="col-sm-12 col-form-label">{{ 'Booking Note' }}</label><br>
                    <textarea class="form-control text-center" type="text" name="booker_note"></textarea>
                  </div>
                  <div class="center col-sm-10 form-group">
                    <label class="col-sm-6 col-form-label">{{ 'Start Date' }}</label>
                    <input type="date" id="birthday" name="start_date">
                  </div>
                  <div class="center col-sm-10 form-group">
                    <label class="col-sm-6 col-form-label">{{ 'End Date' }}</label>
                    <input type="date" id="birthday" name="end_date">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        @if($data = Session::get('data'))
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center">List approve booking uccess</h4>
              </div>
              <div class="card-body ">
              </div>
              <div class="card-body table-responsive text-center">
                <table class="table table-hover">
                  <thead class="text-primary">
                    <th>{{ __('dashboard.id') }}</th>
                    <th>{{ __('dashboard.room') }}</th>
                    <th>{{ __('dashboard.date.start') }}</th>
                    <th>{{ __('dashboard.date.end') }}</th>

                  </thead>
                  <tbody>
                    @foreach($data as $room)
                    <tr>
                      <td>{{$room->room->name}}</td>
                      <td>{{$room->booker_note}}</td>
                      <td>{{$room->start_date}}</td>
                      <td>{{$room->end_date}}</td>
                      <td> @if (session('error'))
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                              </button>
                              <span>{{ session('error') }}</span>
                            </div>
                          </div>
                        </div>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
  @extends('layouts.app', ['activePage' => 'bookingByRoom', 'titlePage' => __('booking.title')])

  @section('content')


  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  </head>

  <div class="content" id="scarch">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 col-md-6">
          <div id="calendar"></div>
          <div class="card text-center">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">{{ __('booking.search.room') }}</h4>
            </div>
            <div class="card-body">
              <form action="searchRoomId" method="POST">
                @csrf
                <label>Room</label>
                <div class="modal-body text-center">
                  <select class="form-controlmyTable form-control-lg text-center " name="room_id">
                    @foreach($room as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">{{ __('dashboard.search') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div id="createEventModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4>Booking</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">close</span></button>
                  </div>
                  <form action="booking" method="POST">
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
                      <div class="center col-sm-12 form-group">
                        <label class="col-sm-8 col-form-label">{{ 'Start Date' }}</label>
                        <input type="date" id="birthday" name="start_date" id="start_date">
                      </div>
                      <div class="center col-sm-12 form-group">
                        <label class="col-sm-8 col-form-label">{{ 'End Date' }}</label>
                        <input type="date" id="birthday" name="end_date" id="end_date">
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
        </div>
      </div>
    </div>
  </div>
  @endsection
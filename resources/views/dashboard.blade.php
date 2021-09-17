@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Home')])

@section('content')


<!DOCTYPE html>
<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>

<body>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div id="calendar"></div>
          <div id="createEventModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4>Booking</h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">close</span></button>
                </div>
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
      </div>
    </div>
    <script>
      $(document).ready(function() {

        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        var calendar = $('#calendar').fullCalendar({
          events: [{
            title: 'booking',
            start: '2021-09-16',
            end: '2021-09-18'
          }],
          displayEventTime: false,
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            $('#createEventModal').modal('show');
          },
        });
      });
    </script>
  </div>
</body>

</html>

@endsection
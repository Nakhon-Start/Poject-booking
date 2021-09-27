@extends('layouts.app', ['activePage' => 'bookingByTime', 'titlePage' => __('booking.title')])

@section('content')


<div class="content" id="scarch">
  <div class="container-fluid">
    <div class="row">
      <div id="calendarTime"></div>
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
                  <h4>{{ __('booking.title') }}</h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">close</span></button>
                </div>
                <form action="booking" method="POST">
                  @csrf
                  <div id="modalBody" class="modal-body text-center">
                    <div class="form-group">
                      <label class="col-sm-12 col-form-label ">{{ __('booking.room') }}</label><br>
                      <input type="text" class="form-control text-center" name="room_id">
                    </div>
                    <div class="form-group text-center">
                      <label class="col-sm-12 col-form-label">{{ __('booking.booking note') }}</label><br>
                      <textarea class="form-control text-center" type="text" name="booker_note"></textarea>
                    </div>
                    <div class="center col-sm-12 form-group">
                      <label class="col-sm-8 col-form-label">{{ __('booking.date.start') }}</label>
                      <input type="date" id="birthday" name="start_date" id="start_date">
                    </div>
                    <div class="center col-sm-12 form-group">
                      <label class="col-sm-8 col-form-label">{{ __('booking.date.end') }}</label>
                      <input type="date" id="birthday" name="end_date" id="end_date">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" id="submitButton">{{ __('booking.submit') }}</button>
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
  </div>
</div>

@endsection
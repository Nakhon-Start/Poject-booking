@extends('layouts.app', ['activePage' => 'booking', 'titlePage' => __('booking.title')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Booking</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <div class="modal-body text-center">
                                <form action="{{ route('bookingByRoomId',$id) }}" method="POST">
                                    @csrf
                                    <div>
                                        <label>booker_note</label>
                                        <input type="text" class="form-control text-center" name="booker_note">
                                        <div class="center col-sm-12 form-group">
                                            <label class="col-sm-2 col-form-label">{{ __('dashboard.date.start') }}</label>
                                            <input type="date" id="birthday" name="start_date">
                                        </div>
                                        <div class="center col-sm-12 form-group">
                                            <label class="col-sm-2 col-form-label">{{ __('dashboard.date.end') }}</label>
                                            <input type="date" id="birthday" name="end_date">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
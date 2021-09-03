@extends('layouts.app', ['activePage' => 'booking', 'titlePage' => __('booking')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">ทำรายการจอง</h4>
                        <p class="card-category"> This is Booking .</p>
                    </div>
                    <div class="card-body ">
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <form action="createbooking" method="POST">
                            @csrf
                            <div>
                                <label>room_ID</label>
                                <select class="col-sm-4 form-control" name="room_id">
                                    @foreach($room['data'] as $data)
                                    <option value="{{$data['id']}}">{{$data['id']}} {{$data['name']}}</option>
                                    @endforeach
                                </select>
                                <label>Booking Note</label>
                                <input type="text" class="col-sm-4 form-control" name="booker_note">
                                <div class="col-sm-12 form-group">
                                    <label>Start-Date:</label><br>
                                    <input type="date" name="start_date">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>End-Date:</label><br>
                                    <input type="date" name="end_date">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-submit="modal">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
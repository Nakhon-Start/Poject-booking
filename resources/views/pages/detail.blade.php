@extends('layouts.app', ['activePage' => 'detail', 'titlePage' => __('Booking History')])

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
                                <select class="form-control form-control-lg text-center " name="room_id">
                                
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
    <script>
        $(document).ready(function() {

            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#calendar').fullCalendar({
                displayEventTime: false,
                selectable: true,
                selectHelper: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                select: function(start, end, allDay) {
                    //$('#createEventModal').modal('show');

                    $('#createEventModal').modal('show', function(event) {
                        var button = $(event.relatedTarget)
                        var id = button.data('id')
                        var modal = $(this)
                        modal.find('.modal-body #start_date').val(start)
                        modal.find('.modal-body #end_date').val(end)
                    })
                },
            });
        });
    </script>

    @endsection
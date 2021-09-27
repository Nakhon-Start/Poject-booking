@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Home')])

@section('content')


<div class="content" id="scarch">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 col-md-12">
        <div class="card text-center">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('dashboard.building') }}</h4>
          </div>
          <div class="card-body">
            <form action="searchBuild" method="POST">
              @csrf
              <label> {{ __('dashboard.search building') }}</label>
              <div class="modal-body text-center">
                <select class="form-control form-control-lg text-center " name="building_id">
                  <option value="null"> {{ __('dashboard.listbuilding') }} </option>
                  @foreach($building as $data)
                  <option value="{{$data->id}}">{{$data->name}} - {{$data->description}}</option>
                  @endforeach
                </select>
              </div>
              <div>

                <button type="submit" class="btn btn-primary" onclick="this.classList.toggle('button--loading')">
                  <span class="button__text">{{ __('dashboard.search') }}</span>
                </button>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">{{ __('listRoom.title') }}</h4>
              <input class="form-control" id="home" type="text" placeholder="พิมพ์ชื่อห้องหรือประเภทของห้องเพื่อค้นหา..">
            </div>
            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table">
                  <thead class="text-primary">
                    <!-- <th>
                      {{ __('listRoom.id')}}
                    </th> -->
                    <th>
                      {{ __('listRoom.room name')}}
                    </th>
                    <th>
                      {{ __('listRoom.description')}}
                    </th>
                    <th>
                      {{ __('listRoom.limited people')}}
                    </th>
                    <th>
                      {{ __('listRoom.type')?? 'None' }}
                    </th>
                    <th>
                      {{ __('listRoom.booking')}}
                    </th>
                  </thead>
                  <tbody id="myTable">
                    @csrf
                    @foreach($room as $data)
                    @foreach($data->room as $room)
                    <tr>
                      <!-- <td>
                        {{$room->id}}
                      </td> -->
                      <td>
                        {{$room->name}}
                      </td>
                      <td>
                        {{$room->description}}
                      </td>
                      <td>
                        {{$room->quantity}}
                      </td>
                      <td>
                        {{$room->room_type}}
                      </td>
                      <td>
                        <button type="button" class="btn btn-warning btn-link btn-xl detail-btn" data-toggle="modal" data-target="#Booking" data-id="{{$room->id}}">
                          <i class="material-icons">assignment</i>
                        </button>
                      </td>
                    </tr>
                    @endforeach
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

  <div class="modal" id="Booking">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{ __('booking.reservation') }}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body text-center">
          <div id="calendar"></div>
          <form action="booking" method="POST">
            @csrf
            <div id="modalBody" class="modal-body text-center">
              <div class="form-group">
                <input type="hidden" class="form-control text-center" name="room_id" id="id">
                <div class="form-group text-center">
                  <label class="col-sm-12 col-form-label">{{ __('booking.booking note') }}</label><br>
                  <textarea class="form-control text-center" type="text" name="booker_note"></textarea>
                </div>
                <div class="center col-sm-12 form-group">
                  <label class="col-sm-8 col-form-label">{{ __('booking.date.start') }}</label>
                  <input type="date" id="birthday" name="start_date" value="{{date('Y-m-d', strtotime('+1 day'))}}" id="start_date">
                </div>
                <div class="center col-sm-12 form-group">
                  <label class="col-sm-8 col-form-label">{{ __('booking.date.end') }}</label>
                  <input type="date" id="birthday" name="end_date" value="{{date('Y-m-d', strtotime('+1 day'))}}" id="end_date">
                </div>
                <div class="modal-footer">
                  <!-- <button type="submit" class="btn btn-primary" id="submitButton">Booking</button> -->
                  <button type="submit" class="btn btn-primary" id="submitButton" onclick="this.classList.toggle('button--loading')">
                    <span class="button__text">{{ __('booking.submit') }}</span>
                  </button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('booking.cancle') }}</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
@extends('layouts.app', ['activePage' => 'room', 'titlePage' => __('room.name')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('room.title') }} </h4>
            <!-- <p class="card-category"> This is Create Rooms . </p> -->
            <input class="form-control" id="room" type="text" placeholder="พิมพ์ชื่อห้องเพื่อค้นหา..">
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

            <div class="row">
              <div class="col-12 text-right">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  {{ __('room.modal.button') }}
                </button>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">{{ __('room.name') }}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body text-center">
                        <form action="createRoom" method="POST">
                          @csrf
                          <div>
                            <label>{{ __('room.modal.room name') }}</label>
                            <input type="text" class="form-control text-center" name="name" required>
                            <label>{{ __('room.modal.description') }}</label>
                            <input type="text" class="form-control text-center" name="description" required>
                            <label>{{ __('room.modal.limited people') }}</label>
                            <select class="form-control text-center" name="quantity">
                              <option>50</option>
                              <option>100</option>
                              <option>130</option>
                              <option>150</option>
                              <option>200</option>
                            </select>
                            <label>{{ __('room.modal.type') }}</label>
                            <select class="form-control text-center" name="room_type">
                              <option>ห้องเรียนมีกระดานดำ</option>
                              <option>ห้องประชุมมีไมค์</option>
                              <option>ห้องประชุมมีเวที</option>
                              <option>ลานกว้าง</option>
                              <option>ห้องโปรเจคเตอร์</option>
                              <option>ห้องนอน</option>
                            </select>
                            <label>{{ __('room.modal.building id') }}</label>
                            <select class="form-control text-center" name="building_id">
                              @foreach($building as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="modal-footer">
                            <!-- <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('room.modal.button submit') }}</button> -->
                            <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
                              <span class="button__text">{{ __('room.modal.button submit') }}</span>
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('room.modal.button close') }}</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive text-center">
              <table class="table">
                <thead class=" text-primary">
                  <tr>
                    <!-- <th>
                      {{ __('room.id') }}
                    </th> -->
                    <th>
                      {{ __('room.room name') }}
                    </th>
                    <th>
                      {{ __('room.building') }}
                    </th>
                    <th>
                      {{ __('room.description') }}
                    </th>
                    <th>
                      {{ __('room.limited people') }}
                    </th>
                    <th>
                      {{ __('room.type') }}
                    </th>
                    <th>
                      {{ __('room.status') }}
                    </th>
                    <th>
                      {{ __('room.create') }}
                    </th>
                    <th>
                      {{ __('room.edit') }}
                    </th>

                  </tr>
                </thead>
                <tbody id="myTable">
                  @foreach($room as $data)
                  @csrf
                  <tr>
                    <!-- <td>{{$data->id}}</td> -->
                    <td>{{$data->name}}</td>
                    <td>{{$data->building->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->room_type}}</td>
                    <td>

                      @if($data->is_active == 1)
                      {{ __('room.statusRoom.available') }}

                      @elseif($data->is_active == 0)
                      {{ __('room.statusRoom.unavailable') }}

                      @endif

                    </td>
                    <td>{{$data->user->name}}</td>
                    <td>
                      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditmyModal" data-id="{{$data->id}}">
                      <i class="material-icons">edit</i>
                    </button> -->
                      <button type="button" title class="btn btn-warning btn-link btn-xl" data-toggle="modal" data-target="#EditmyModal" data-id="{{$data->id}}">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal" id="EditmyModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">{{ __('room.setroom.title') }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body text-center">
                    <form action="setRoom" method="POST">
                      @csrf
                      <div>
                        <input type="hidden" class="form-control text-center" name="id" id="id">
                        <label>{{ __('room.modal.room name') }}</label>
                        <input type="text" class="form-control text-center" name="name">
                        <label>{{ __('room.modal.description') }}</label>
                        <input type="text" class="form-control text-center" name="description">
                        <label>{{ __('room.status') }}</label>
                        <select class="form-control text-center" name="is_active">
                          <option value="1">เปิดใช้งาน</option>
                          <option value="0">ไม่เปิดใช้งาน</option>
                        </select>
                        <label>{{ __('room.modal.limited people') }}</label>
                        <select class="form-control text-center" name="quantity">
                          <option>50</option>
                          <option>100</option>
                          <option>130</option>
                          <option>150</option>
                          <option>200</option>
                        </select>
                        <label>{{ __('room.modal.type') }}</label>
                        <select class="form-control text-center" name="room_type">
                          <option>ห้องเรียนมีกระดานดำ</option>
                          <option>ห้องประชุมมีไมค์</option>
                          <option>ห้องประชุมมีเวที</option>
                          <option>ลานกว้าง</option>
                          <option>ห้องโปรเจคเตอร์</option>
                          <option>ห้องนอน</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('room.modal.button submit') }}</button> -->
                        <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
                          <span class="button__text">{{ __('room.modal.button submit') }}</span>
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('room.modal.button close') }}</button>
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
  </div>
</div>
</div>
@endsection
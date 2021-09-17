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
              <div class="col-sm-12"></div>
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
                          <input type="text" class="form-control text-center" name="name">
                          <label>{{ __('room.modal.description') }}</label>
                          <input type="text" class="form-control text-center" name="description">
                          <label>{{ __('room.modal.building id') }}</label>
                          <select class="form-control text-center" name="building_id">
                            @foreach($building['data'] as $data)
                            <option value="{{$data['id']}}">{{$data['name']}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('room.modal.button submit') }}</button>
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
                  <th>
                    {{ __('room.id') }}
                  </th>
                  <th>
                    {{ __('room.room name') }}
                  </th>
                  <th>
                    {{ __('room.description') }}
                  </th>
                  <th>
                    {{ __('room.building') }}
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
              @foreach($room['data'] as $data)
              <form action="{{ route('setRoomPage',$data['id']) }}" method="POST">
                @csrf
                <tr>
                  <td>{{$data['id']}}</td>
                  <td>{{$data['name']}}</td>
                  <td>{{$data['description']}}</td>
                  <td>{{$data['building_id']}}</td>
                  <td>{{$data['is_active']}}</td>
                  <td>{{$data['create_by']}}</td>
                  <td class="td-actions text-center">
                    <button type="submit" class="btn btn-warning">
                      <i class="material-icons">edit</i>
                    </button>
                  </td>
                  <!-- <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditmyModal">
                    <i class="material-icons">edit</i>
                    </button>
                  </td> -->
                  <!-- The Modal -->
                  <!-- <div class="modal" id="EditmyModal">
                    <div class="modal-dialog">
                      <div class="modal-content"> -->
                  <!-- Modal Header -->
                  <!-- <div class="modal-header">
                          <h4 class="modal-title">{{ __('room.setroom.title') }}</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div> -->
                  <!-- Modal body -->
                  <!-- <div class="modal-body text-center">
                          <form action="createRoom" method="POST">
                            @csrf
                            <div>
                              <label>{{ __('room.modal.room name') }}</label>
                              <input type="text" class="form-control text-center" name="name">
                              <label>{{ __('room.modal.description') }}</label>
                              <input type="text" class="form-control text-center" name="description">
                              <label>{{ __('room.modal.building id') }}</label>
                              <select class="form-control text-center" name="building_id">
                                @foreach($building['data'] as $data)
                                <option value="{{$data['id']}}">{{$data['name']}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('room.modal.button submit') }}</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('room.modal.button close') }}</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div> -->  
                </tr>
              </form>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
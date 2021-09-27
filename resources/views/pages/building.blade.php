@extends('layouts.app', ['activePage' => 'building', 'titlePage' => __('building.name')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('building.title') }} </h4>
            <input class="form-control" id="building" type="text" placeholder="พิมพ์ชื่อตึกเพื่อค้นหา..">
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
                  {{ __('building.add') }}
                </button>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">{{ __('building.createBuilding') }}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body text-center">
                        <form action="createBuilding" method="POST">
                          @csrf
                          <div>
                            <label>{{ __('building.nameBuilding') }}</label>
                            <input type="text" class="form-control text-center" name="name">
                            <label>{{ __('building.description') }}</label>
                            <input type="text" class="form-control text-center" name="description">
                          </div>
                          <div class="modal-footer">
                            <!-- <button type="submit" class="btn btn-primary" data-submit="modal">Submit</button> -->
                            <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
                              <span class="button__text">{{ __('building.button.submit') }}</span>
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('building.button.close') }}</button>
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
                      {{ __('building.id') }}
                    </th> -->
                    <th>
                      {{ __('building.nameBuilding') }}
                    </th>
                    <th>
                      {{ __('building.description') }}
                    </th>
                    <th>
                      {{ __('building.status') }}
                    </th>
                    <th>
                      {{ __('building.edit') }}
                    </th>
                  </tr>
                </thead>
                <tbody id="myTable">

                  @foreach($building as $data)
                  @csrf
                  <tr>
                    <!-- <td>
                    {{$data->id}}                    
                  </td> -->
                    <td>
                      {{$data->name}}
                    </td>
                    <td>
                      {{$data->description}}
                    </td>
                    <td>

                      @if($data->is_active == 1)
                      {{ __('building.statusBuilding.available') }}

                      @elseif($data->is_active == 0)
                      {{ __('building.statusBuilding.unavailable') }}

                      @endif

                    </td>
                    <td class="td-actions text-center">
                      <button type="button" title class="btn btn-warning btn-link btn-xl" data-toggle="modal" data-target="#EditmyModal" data-id="{{$data->id}}">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                  </tr>
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

<div class="modal" id="EditmyModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ __('building.setBuilding') }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
        <form action="setBuilding" method="POST">
          @csrf
          <div>
            <input type="hidden" class="form-control text-center" name="id" id="id">
            <label>{{ __('room.modal.room name') }}</label>
            <input type="text" class="form-control text-center" name="name" id="name" required>
            <label>{{ __('room.modal.description') }}</label>
            <input type="text" class="form-control text-center" name="description" id="description" required>
            <label>{{ __('room.modal.limited people') }}</label>
            <label>{{ __('building.statusBuilding.status') }}</label>
            <select class="form-control text-center" name="is_active">
              <option value="1">{{ __('building.statusBuilding.available') }}</option>
              <option value="0">{{ __('building.statusBuilding.unavailable') }}</option>
            </select>
          </div>
          <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('room.modal.button submit') }}</button> -->
            <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
              <span class="button__text">{{ __('building.button.submit') }}</span>
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('building.button.close')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
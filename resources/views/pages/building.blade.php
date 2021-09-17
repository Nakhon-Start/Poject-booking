@extends('layouts.app', ['activePage' => 'building', 'titlePage' => __('building.name')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('building.title') }} </h4>
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
            <div class="table-responsive text-center">
              <table class="table">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      {{ __('building.id') }}
                    </th>
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
                @foreach($building['data'] as $data)
                <form action="{{ route('setBuildingPage',$data['id']) }}" method="POST">
                  @csrf
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['description']}}</td>
                    <td>{{$data['is_active']}}</td>
                    <td class="td-actions text-center">
                      <button type="submit" class="btn btn-warning">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
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
@extends('layouts.app', ['activePage' => 'listRooms', 'titlePage' => __('List Room')])

@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('listRoom.title') }}</h4>
            <!-- <p class="card-category"> This is The List Rooms .</p> -->          
          </div>
          <div class="card-body">
            <div class="table-responsive text-center">
              <table class="table">
                <thead class="text-primary">
                  <th>
                    {{ __('listRoom.id') }}
                  </th>
                  <th>
                    {{ __('listRoom.room name') }}
                  </th>
                  <th>
                    {{ __('listRoom.building id') }}
                  </th>
                  <th>
                    {{ __('listRoom.description') }}
                  </th>
                  <th>
                    {{ __('listRoom.attendant') }}
                  </th>
                  <th>
                    {{ __('listRoom.limited people') }}
                  </th>
                  <th>
                    {{ __('listRoom.type') }}
                  </th>
                  <th>
                    {{ __('listRoom.status') }}
                  </th>
                  <th>
                    {{ __('listRoom.booking') }}
                  </th>

                </thead>
                <tbody>

                  @foreach($room as $data)
                  <tr>
                    <td>
                      {{$data->id}}
                    </td>
                    <td>
                    {{$data->name}}
                    </td>
                    <td>
                      {{$data->building->name}}
                    </td>
                    <td>
                      {{$data->description}}
                    </td>
                    <td>
                      {{$data->user->name}}
                    </td>
                    <td>
                      {{$data->quantity}}
                    </td>
                    <td>
                      {{$data->room_type}}
                    </td>
                    <td>

                      @if($data->is_active == 1)
                      {{ __('listRoom.statusRoom.available') }}

                      @elseif($data->is_active == 0)
                      {{ __('listRoom.statusRoom.unavailable') }}

                      @endif

                    </td>
                    <td>
                      <a href="home" class="btn btn-primary" role="button">{{ __('listRoom.button booking') }}</a>
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
@endsection
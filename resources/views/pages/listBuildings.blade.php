@extends('layouts.app', ['activePage' => 'listBuildings', 'titlePage' => __('List Building')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('building.listBuilding') }}</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive text-center">
              <table class="table">
                <thead class=" text-primary">
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
                </thead>
                <tbody>
                  @foreach($building['data'] as $data)
                  <tr>
                    <td>
                      {{$data['id']}}
                    </td>
                    <td>
                      {{$data['name']}}
                    </td>
                    <td>
                      {{$data['description']}}
                    </td>
                    <td>
                      @if($data['is_active'] == 1)
                        {{ __('building.statusBuilding.available') }}

                      @elseif($data['is_active'] == 0)
                        {{ __('building.statusBuilding.unavailable') }}

                      @endif

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
@extends('layouts.app', ['activePage' => 'check', 'titlePage' => __('Check.name')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('check.title') }}</h4>
                        <input class="form-control" id="check" type="text" placeholder="พิมพ์ชื่อตึกเพื่อค้นหา..">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <!-- <th>
                                        {{ __('check.building id') }}
                                    </th> -->
                                    <th>
                                        {{ __('check.name') }}
                                    </th>
                                    <th>
                                        {{ __('check.description') }}
                                    </th>
                                    <th>
                                        {{ __('check.is active') }}
                                    </th>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($respone as $data)
                                    <tr></tr>
                                        <!-- <td>{{$data->building_id}}</td> -->
                                        <td>{{$data->building->name}}</td>
                                        <td>{{$data->building->description}}</td>
                                        <td>

                                            @if ($data->building->is_active == 1)
                                                {{ __('เปิดใช้งาน') }}

                                            @elseif ($data->building->is_active == 0)
                                                {{ __('ไม่เปิดใช้งาน') }}

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
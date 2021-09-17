@extends('layouts.app', ['activePage' => 'check', 'titlePage' => __('Check.name')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('check.title') }}</h4>
                        <p class="card-category"> This is The List Check Building / สิทธิ์ของตัวเองในตึก .</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        {{ __('check.building id') }}
                                    </th>
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
                                <tbody>
                                    @foreach ($respone as $data)
                                    <tr></tr>
                                        <td>{{$data->building_id}}</td>
                                        <td>{{$data->building->name}}</td>
                                        <td>{{$data->building->description}}</td>
                                        <td>{{$data->building->is_active}}</td>
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
@extends('layouts.app', ['activePage' => 'responsibilities', 'titlePage' => __('responsibilities')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('responsibilities.name.respons') }}</h4>
                        <!-- <p class="card-category">{{ __('responsibility.name.list respons') }}</p> -->
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('message') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class=" col-sm-12 text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm"></div>
                                <div class="col-sm-6">
                                    <form action="createBuilding" method="POST">
                                        @csrf
                                        <div>
                                            <label>{{ __('responsibilities.modal.user id') }} </label>
                                            <input type="text" class="form-control text-center" name="name">
                                            <label>{{ __('responsibilities.modal.building id') }}</label>
                                            <input type="text" class="form-control text-center" name="description">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" data-submit="modal">submit</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('responsibilities.name.list respons') }}</h4>
                <!-- <p class="card-category">{{ __('responsibility.name') }}</p> -->
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('message') }}</span>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-12 text-right">
                        <!-- Button to Open the Modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            {{ __('responsibility.modal.button') }}
                        </button> -->

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ __('responsibilities.modal.title') }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body text-center">
                                        <form action="createBuilding" method="POST">
                                            @csrf
                                            <div>
                                                <label>{{ __('responsibilities.modal.user id') }} </label>
                                                <input type="text" class="form-control text-center" name="name">
                                                <label> {{ __('responsibilities.modal.building id') }}</label>
                                                <input type="text" class="form-control text-center" name="description">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('responsibilities.modal.button submit') }}</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('responsibilities.modal.button close') }}</button>
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
                                    {{ __('responsibilities.checker id') }}
                                </th>
                                <th>
                                    {{ __('responsibilities.user id') }}
                                </th>
                                <th>
                                    {{ __('responsibilities.building id') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($checker['checker'] as $data)
                            <tr>
                                <td>
                                    {{$data['id']}}
                                </td>
                                <td>
                                    {{$data['user_id']}}
                                </td>
                                <td>
                                    {{$data['building_id']}}
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
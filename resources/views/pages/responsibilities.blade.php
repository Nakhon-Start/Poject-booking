@extends('layouts.app', ['activePage' => 'responsibilities', 'titlePage' => __('responsibilities')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('responsibilities.name.list respons') }}</h4>
                <!-- <p class="card-category">{{ __('responsibility.name') }}</p> -->
                <input class="form-control" id="responsibirities" type="text" placeholder="พิมพ์ชื่อผู้ใช้หรือชื่อตึกเพื่อค้นหา..">
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
                                <!-- <th>
                                    {{ __('responsibilities.checker id') }}
                                </th> -->
                                <th>
                                    {{ __('responsibilities.user id') }}
                                </th>
                                <th>
                                    {{ __('responsibilities.building id') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($checker as $data)
                            <tr>
                                <!-- <td>
                                    {{$data->id}}
                                </td> -->
                                <td>
                                    {{$data->checker->name}}
                                </td>
                                <td>
                                    {{$data->building->name}}
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
@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('editUser.title') }}</h4>
            <!-- <p class="card-category"> Here you can manage users</p> -->
            <input class="form-control" id="index" type="text" placeholder="พิมพ์ชื่อผู้ใช้หรือสถานะผู้ใช้เพื่อค้นหา..">
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
            <div class="table-responsive">
              <table class="table text-center">
                <thead class=" text-primary">
                  <tr>
                    <!-- <th>
                      {{ __('editUser.id') }}
                    </th> -->
                    <th>
                      {{ __('editUser.name') }}
                    </th>
                    <th>
                      {{ __('editUser.email') }}
                    </th>
                    <th>
                      {{ __('editUser.status.status') }}
                    </th>
                    <th>
                      {{ __('editUser.admin status') }}
                    </th>
                    <th>
                      {{ __('editUser.topic.editUser') }}
                    </th>
                    <th>
                      {{ __('editUser.topic.setResponse') }}
                    </th>

                  </tr>
                </thead>
                <tbody id="myTable">
                  @foreach($users as $data)
                  <tr>
                    <!-- <td>
                      {{$data->id}}
                    </td> -->
                    <td>
                      {{$data->name}}
                    </td>
                    <td>
                      {{$data->email}}
                    </td>
                    <td>

                      @if($data->is_active == 1)
                      {{ __('editUser.active.true') }}

                      @elseif($data->is_active == 0)
                      {{ __('editUser.active.false') }}

                      @endif
                    </td>
                    <td>

                      @if($data->is_admin == 1)
                      {{ __('editUser.status.admin') }}

                      @elseif($data->is_admin == 0)
                      {{ __('editUser.status.user') }}

                      @endif
                    </td>
                    <td>
                      <button type="button" title class="btn btn-warning btn-link btn-xl" data-toggle="modal" data-target="#setUser" data-id="{{$data->id}}" data-name="{{$data->name}}">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                    <td>

                      <button type="button" title class="btn btn-success btn-link btn-xl" data-toggle="modal" data-target="#setResponse" data-id="{{$data->id}}">
                        <i class="material-icons">person</i>
                      </button>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal" id="setUser">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">{{ __('editUser.edit') }}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body text-center">
                  <form action="setUser" method="POST">
                    @csrf
                    <div>
                      <input type="hidden" class="form-control text-center" name="id" id="id">
                      <!-- <label>{{ __('editUser.edit name') }}</label>
                      <input type="text" class="form-control text-center" name="name" id="name"> -->
                      <label>{{ __('editUser.modal.is active') }}</label>
                      <select class="form-control text-center" name="is_active">
                        <option value="1">เปิดใช้งาน</option>
                        <option value="0">ไม่เปิดใช้งาน</option>
                      </select>
                      <label>{{ __('editUser.modal.is admin') }}</label>
                      <select class="form-control text-center" name="is_admin">
                        <option value="1">{{ __('editUser.set.admin') }}</option>
                        <option value="0">{{ __('editUser.set.user') }}</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                      <!-- <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('editUser.submit.submit') }}</button> -->
                      <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
                        <span class="button__text">{{ __('editUser.button.save') }}</span>
                      </button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('editUser.button.close') }}</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="setResponse">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">{{ __('editUser.topic.setResponse') }}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body text-center">
                  <form action="createResponsibilities" method="POST">
                    @csrf
                    <div>
                      <input type="hidden" class="form-control text-center" name="user_id" id="id">
                      <label> {{ __('editUser.building') }}</label>
                      <select class="form-control text-center" name="building_id">
                        <option value="null"> {{ __('editUser.selectBuilding') }} </option>
                        @foreach($building as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="modal-footer">
                      <!-- <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('editUser.submit.submit') }}</button> -->
                      <button type="submit" class="btn btn-primary" data-submit="modal" onclick="this.classList.toggle('button--loading')">
                        <span class="button__text">{{ __('editUser.button.save') }}</span>
                      </button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('editUser.button.close') }}</button>
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
@endsection
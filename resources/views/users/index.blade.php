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
          </div>
          <div class="card-body">
            <!-- <div class="row">
                      <div class="col-12 text-right">
                        <a href="#" class="btn btn-sm btn-primary">Add user</a>
                      </div>
                    </div> -->
            <div class="table-responsive">
              <table class="table text-center">
                <thead class=" text-primary">
                  <tr>
                    <th>
                    {{ __('editUser.id') }}
                    </th>
                    <th>
                    {{ __('editUser.name') }}
                    </th>
                    <th>
                    {{ __('editUser.email') }}
                    </th>
                    <th>
                    {{ __('editUser.status') }}
                    </th>
                    <th>
                    {{ __('editUser.admin status') }}
                    </th>
                    <th>
                    {{ __('editUser.edit') }}
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users['data'] as $data)
                  <tr>
                    <td>
                      {{$data['id']}}
                    </td>
                    <td>
                      {{$data['name']}}
                    </td>
                    <td>
                      {{$data['email']}}
                    </td>
                    <td>
                      {{$data['is_active']}}
                    </td>
                    <td>
                      {{$data['is_admin']}}
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                    <div class="modal" id="edit">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">{{ __('editUser.modal.edit status') }}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body text-center">
                            <form action="setRoom" method="POST">
                              @csrf
                              <div>
                                <label>{{ __('editUser.modal.is active') }}</label>
                                <select class="form-control text-center" id="sel1">
                                  <option>เปิดใช้งาน</option>
                                  <option>ไม่เปิดใช้งาน</option>
                                </select>
                              </div>
                              <div>
                                <label>{{ __('editUser.modal.is admin') }}</label>
                                <select class="form-control text-center" id="sel1">
                                  <option>กำหนดให้เป็นแอดมิน</option>
                                  <option>กำหนดให้เป็นผู้ใช้งาน</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-submit="modal">{{ __('editUser.submit.submit') }}</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('editUser.submit.cancle') }}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
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
@extends('layouts.app', ['activePage' => 'room', 'titlePage' => __('Room')])

@section('content')



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Create Room </h4>
            <p class="card-category"> This is Create Rooms . </p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Add Room
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Create Room</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body text-left">
                        <form action="createRoom" method="POST">
                          @csrf
                          <div>
                            <label>Name Room</label>
                            <input type="text" class="form-control" name="name">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description">
                            <label>Building_ID</label>
                            <select class="form-control" name="building_id">
                              @foreach($building['data'] as $data)
                              <option value="{{$data['id']}}">{{$data['name']}}</option>
                              @endforeach
                            </select>
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
                      ID Room
                    </th>
                    <th>
                      Name Room
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      Building
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Create By
                    </th>
                    <th>
                      Edit
                    </th>
                  </tr>
                </thead>
                @foreach($room['data'] as $data)
                <tr>
                <tr>
                  <td id="id">{{$data['id']}}</td>
                  <td>{{$data['name']}}</td>
                  <td>{{$data['description']}}</td>
                  <td>{{$data['building_id']}}</td>
                  <td>{{$data['is_active']}}</td>
                  <td>{{$data['create_by']}}</td>
                  <td class="td-actions text-center">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">
                      <i class="material-icons">edit</i>
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Create Room</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body text-left">
                            <form action="createRoom" method="POST">
                              @csrf
                              <div>
                                <label>Name Room</label>
                                <input type="text" class="form-control" name="name">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description">
                                <label>Building_ID</label>
                                <select class="form-control" name="building_id">
                                  @foreach($building['data'] as $data)
                                  <option value="{{$data['id']}}">{{$data['name']}}</option>
                                  @endforeach
                                </select>
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
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="modal" id="edit">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Room</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-left">
                      <form action="setRoom" method="POST">
                        @csrf
                        <div>
                          <label>Name Room</label>
                          <input type="text" class="form-control" name="name" data-target="#id">
                          <label>Description</label>
                          <input type="text" class="form-control" name="description">
                          <label>Status</label>
                          <select class="form-control" id="sel1">
                            <option>เปิดใช้งาน</option>
                            <option>ไม่เปิดใช้งาน</option>
                          </select>
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
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">สร้าง / แก้ไข ห้อง</h4>
            <p class="card-category"> This is Create Rooms .</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <a href="#" class="btn btn-sm btn-primary">สร้างห้อง</a>
              </div>
            </div>
            <form>
              <div>
                <label>Name</label>
                <input type="text" class="form-control">
                <label>Description</label>
                <input type="text" class="form-control">
                <label>Building_id</label>
                <input type="text" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       <div class="alert alert-danger">
          <span style="font-size:18px;">
            <b> </b> This is a PRO feature!</span>
        </div> -->
<!-- </div>
</div>
</div>
</div> -->
@endsection

<!-- @push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
@endpush -->
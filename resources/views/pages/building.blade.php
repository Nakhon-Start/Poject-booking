@extends('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')])

@section('content')
<!-- <div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h3 class="card-title">Notifications</h3>
        <p class="card-category">Handcrafted by our friend
          <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
          <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
        </p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title">Notifications Style</h4>
            <div class="alert alert-info">
              <span>This is a plain notification</span>
            </div>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>This is a notification with close button.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <i class="material-icons" data-notify="icon">add_alert</i>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span data-notify="message">This is a notification with close button and icon.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <i class="material-icons" data-notify="icon">add_alert</i>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
            </div>
          </div>
          <div class="col-md-6">
            <h4 class="card-title">Notification states</h4>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Info - </b> This is a regular notification made with ".alert-info"</span>
            </div>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Success - </b> This is a regular notification made with ".alert-success"</span>
            </div>
            <div class="alert alert-warning">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
            </div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
            </div>
            <div class="alert alert-primary">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h4 class="card-title">
                Notifications Places
                <p class="category">Click to view notifications</p>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','left')">Top Left</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','center')">Top Center</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','right')">Top Right</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','left')">Bottom Left</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','center')">Bottom Center</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','right')">Bottom Right</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- 
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">สร้าง / แก้ไข ตึก</h4>
            <p class="card-category"> This is Create Building .</p>
          </div>
          <div class="card-body">
            <form>
              <div>
                <label>Name</label>
                <input type="text" class="form-control">
                <label>Description</label>
                <input type="text" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

      </div>
      <!-- <div class="alert alert-danger">
          <span style="font-size:18px;">
            <b> </b> This is a PRO feature!</span>
        </div> -->
<!-- </div>
  </div>
</div>
</div>  -->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">สร้างตึก</h4>
            <p class="card-category"> This is Create Building . </p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Add Building
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Create Building</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body text-left">
                        <form action="createBuilding" method="POST">
                          @csrf
                          <div>
                            <div>
                              <label>Name</label>
                              <input type="text" class="form-control" name="name">
                              <label>Description</label>
                              <input type="text" class="form-control" name="description">
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-submit="modal">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
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
                        ID Building
                      </th>
                      <th>
                        Name Building
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  @foreach($building['data'] as $data)
                  <tr>
                  <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['description']}}</td>
                    <td>{{$data['is_active']}}</td>
                    <td class="td-actions text-right">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
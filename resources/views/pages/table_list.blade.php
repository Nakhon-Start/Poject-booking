@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">รายการจองทั้งหมด</h4>
            <p class="card-category"> This is The List Bookings .</p>
          </div>
          <div class="card-body">
            <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
            <div class="table-responsive text-center">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Room
                  </th>
                  <th>
                    Note
                  </th>
                  <th>
                    Start
                  </th>
                  <th>
                    End
                  </th>
                  <th>
                    Satatus
                  </th>
                  <th>
                    Fix Booking
                  </th>
                  <th>
                    Appove
                  </th>

                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      2001-02-02
                    </td>
                    <td class="text-primary">
                      2001-02-04
                    </td>
                    <td>
                      1
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-primary">
                      2001-02-02
                    </td>
                    <td class="text-primary">
                      2001-02-05
                    </td>
                    <td>
                      0
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-primary">
                      2001-02-09
                    </td>
                    <td class="text-primary">
                      2001-02-12
                    </td>
                    <td>
                      -1
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-primary">
                      2001-02-02
                    </td>
                    <td class="text-primary">
                      2001-02-07
                    </td>
                    <td>
                      1
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-primary">
                      2001-02-07
                    </td>
                    <td class="text-primary">
                      2001-02-07
                    </td>
                    <td>
                      -1
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-primary">
                      2001-02-01
                    </td>
                    <td class="text-primary">
                      2001-02-04
                    </td>
                    <td>
                      0
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Appove
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Appove</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-left">
                              <form action="createRoom" method="POST">
                                <div>
                                  <label>Checker Note</label>
                                  <input type="text" class="form-control" name="description">
                                </div>
                              </form>
                              <div class="modal-footer btn-group">
                                <button type="button" class="btn btn-primary">Accepet</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      $78,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>  -->
    </div>
  </div>
</div>
@endsection
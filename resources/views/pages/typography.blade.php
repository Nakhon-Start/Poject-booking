@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')
<!-- <div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Material Dashboard Heading</h4>
        <p class="card-category">Created using Roboto Font Family</p>
      </div>
      <div class="card-body">
        <div id="typography">
          <div class="card-title">
            <h2>Typography</h2>
          </div>
          <div class="row">
            <div class="tim-typo">
              <h1>
                <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
            </div>
            <div class="tim-typo">
              <h2>
                <span class="tim-note">Header 2</span>The Life of Material Dashboard</h2>
            </div>
            <div class="tim-typo">
              <h3>
                <span class="tim-note">Header 3</span>The Life of Material Dashboard</h3>
            </div>
            <div class="tim-typo">
              <h4>
                <span class="tim-note">Header 4</span>The Life of Material Dashboard</h4>
            </div>
            <div class="tim-typo">
              <h5>
                <span class="tim-note">Header 5</span>The Life of Material Dashboard</h5>
            </div>
            <div class="tim-typo">
              <h6>
                <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
            </div>
            <div class="tim-typo">
              <p>
                <span class="tim-note">Paragraph</span>
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Quote</span>
              <blockquote class="blockquote">
                <p>
                  I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                </p>
                <small>
                  Kanye West, Musician
                </small>
              </blockquote>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Muted Text</span>
              <p class="text-muted">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
              </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Primary Text</span>
              <p class="text-primary">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Info Text</span>
              <p class="text-info">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Success Text</span>
              <p class="text-success">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Warning Text</span>
              <p class="text-warning">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
              </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Danger Text</span>
              <p class="text-danger">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <h2>
                <span class="tim-note">Small Tag</span>
                Header with small subtitle
                <br>
                <small>Use "small" tag for the headers</small>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">รายการห้องทั้งหมด</h4>
            <p class="card-category"> This is The List Rooms .</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Room
                  </th>
                  <th>
                    Building
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    View Room
                  </th>
                  <th>
                    Booking
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
                      <div class="container">
                        Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      1
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
                      0
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
                      1
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
                      1
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
                      1
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
                      0
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Open modal
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                    <a href="booking" class="btn btn-primary" role="button">Booking Room</a>
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
  @endsection
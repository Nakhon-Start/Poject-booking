@extends('layouts.app', ['activePage' => 'listRooms', 'titlePage' => __('List Room')])

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
            <h4 class="card-title ">{{ __('listRoom.title') }}</h4>
            <!-- <p class="card-category"> This is The List Rooms .</p> -->
          </div>
          <div class="card-body">
            <!-- <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary"> -->
            <div class="table-responsive text-center">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                  {{ __('listRoom.id') }}
                  </th>
                  <th>
                  {{ __('listRoom.room name') }}
                  </th>
                  <th>
                  {{ __('listRoom.building id') }}
                  </th>
                  <th>
                  {{ __('listRoom.description') }}
                  </th>
                  <th>
                  {{ __('listRoom.status') }}
                  </th>
                  <th>
                  {{ __('listRoom.room') }}
                  </th>
                  <th>
                  {{ __('listRoom.booking') }}
                  </th>

                </thead>
                <tbody>
                  @foreach($room['data'] as $data)
                  <tr>
                    <td>
                      {{$data['id']}}
                    </td>
                    <td>
                      {{$data['name']}}
                    </td>
                    <td>
                      {{$data['building_id']}}
                    </td>
                    <td>
                      {{$data['description']}}
                    </td>
                    <td>
                      {{$data['is_active']}}
                    </td>
                    <td>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      {{ __('listRoom.modal.button open') }}
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">{{ __('listRoom.modal.title') }}</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                            {{ __('listRoom.modal.details') }}
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('listRoom.modal.button close') }}</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <a href="home" class="btn btn-primary" role="button">{{ __('listRoom.button booking') }}</a>
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
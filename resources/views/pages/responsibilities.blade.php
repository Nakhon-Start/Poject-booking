@extends('layouts.app', ['activePage' => 'responsibilities', 'titlePage' => __('responsibilities')])

@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">สร้างผู้ดูแล</h4>
                        <p class="card-category"> This is Create Checker . </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Add Checker
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create Checker</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div>
                                                        <label>User ID</label>
                                                        <input type="text" class="form-control">
                                                        <label>Building ID</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-submit="modal">Submit</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                            User ID
                                        </th>
                                        <th>
                                            Building ID
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td class="td-actions text-right">
                                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </td>
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
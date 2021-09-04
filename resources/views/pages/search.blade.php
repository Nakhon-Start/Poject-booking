@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('search')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Search by time</h4>
                        <p class="card-category"> This is Search Room .</p>
                    </div>
                    <label class="col-sm-2 col-form-label">{{ __('ชื่อห้อง') }}</label>
                    <div class="col-sm-12 form-group ">
                        <select class="form-control" id="sel1">
                            <option>Room1</option>
                            <option>Room2</option>
                            <option>Room3</option>
                            <option>Room4</option>
                        </select>
                    </div>
                    <div class="center col-sm-12 form-group">
                        <form action="/action_page.php"></form>
                        <label class="col-sm-2 col-form-label">{{ __('Start-Date') }}</label>
                        <input type="date" id="birthday" name="birthday">
                        </form>
                        <form action="/action_page.php"></form>
                        <label class="col-sm-2 col-form-label">{{ __('End-Date') }}</label>
                        <input type="date" id="birthday" name="birthday">
                        </form>
                    </div>
                    <label class="col-sm-2 col-form-label">{{ __('สถานะห้อง') }}</label>
                    <div class="col-sm-12 form-group ">
                        <select class="form-control" id="sel1">
                            <option>ว่าง</option>
                            <option>ไม่ว่าง</option>
                            <option>รออนุมัติ</option>
                            <option>ยกเลิก</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="home" class="btn btn-danger" role="button">Cancle</a>
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title "> List Availability</h4>
                                        <p class="card-category"> This is The List Bookings .</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
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
                                                    </tr>
                                                </tbody>
                                            </table>
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




@endsection
@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('Dashboard')])


<!-- 

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Search by time</h4>
                        <p class="card-category"> This is Search Room .</p>
                    </div>
                    <label class="col-sm-2 col-form-label">{{ __('สถานะห้อง') }}</label>
                    <div class="col-sm-4 form-group ">
                        <select class="form-control" id="sel1">
                            <option>ว่าง</option>
                            <option>ไม่ว่าง</option>
                            <option>รออนุมัติ</option>
                            <option>ยกเลิก</option>
                        </select>
                    </div>
                    <div class="center col-sm-12 form-group">
                        <form action="/action_page.php"></form>
                        <label class="col-sm-2 col-form-label">{{ __('Start-Date') }}</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <div class="center col-sm-12 form-group">
                        <form action="/action_page.php"></form>
                        <label class="col-sm-2 col-form-label">{{ __('End-Date') }}</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>

                    <button type="submit" class="btn btn-primary">Search</button> -->
<!-- <a href="home" class="btn btn-danger" role="button">Cancle</a> -->
<!-- </div>
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
</div> -->


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <!-- <i class="material-icons">content_copy</i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                        </div>
                        <p class="card-category">จำนวนผู้ใช้งานทั้งหมด</p>
                        <h3 class="card-title">49 คน

                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons text-danger">warning</i>
              <a href="#pablo">Get More Space...</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <!-- <i class="material-icons">store</i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                            </svg>
                        </div>
                        <p class="card-category">จำนวนห้องทั้งหมด</p>
                        <h3 class="card-title">260 ห้อง</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <!-- <i class="material-icons">info_outline</i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg>
                        </div>
                        <p class="card-category">จำนวนตึกทั้งหมด</p>
                        <h3 class="card-title">75 ตึก</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons">local_offer</i> Tracked from Github -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-10 col-sm-10">
            <div class="card card-chart">
                <div class="card-header card-header-warning">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">ยอดคนสมัครสมาชิกใหม่ต่อเดือน</h4>
                    <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-10">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">ยอดเฉลี่ยคนใช้งานเว็ปต่อสัปดาห์</h4>
                    <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div> -->
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>
@endpush
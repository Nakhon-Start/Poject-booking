<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('งานฉัน') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('หน้าแรก') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('แก้ไขข้อมูล') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('แก้ไขข้อมูลส่วนตัว') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('แก้ไขข้อมูลผู้ใช้') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('รายการจองทั้งหมด') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'listRooms' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('listRooms') }}">
          <!-- <i class="material-icons">library_books</i> -->
          <i class="material-icons">content_paste</i>

          <p>{{ __('รายการห้องทั้งหมด') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'listBuildings' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('listBuildings') }}">
          <!-- <i class="material-icons">bubble_chart</i>  -->
          <i class="material-icons">content_paste</i>
          <p>{{ __('รายการตึกทั้งหมด') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'room' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('room') }}">
          <i class="material-icons">location_ons</i>
          <p>{{ __('สร้างห้อง') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'building' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('building') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('สร้างตึก') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
      <li class="nav-item{{ $activePage == 'booking' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('booking') }}">
          <!-- <i class="material-icons">library_books</i> -->
          <i class="material-icons">content_paste</i>

          <p>{{ __('จอง') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'responsibilities' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('responsibilities') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('กำหนดผู้ดูแลตึก') }}</p>
        </a>
      </li> 
      <li class="nav-item{{ $activePage == 'search' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('search') }}">
          <!-- <i class="material-icons">library_books</i> -->
          <i class="material-icons">content_paste</i>

          <p>{{ __('ค้นหา') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'history' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('history') }}">
          <!-- <i class="material-icons">library_books</i> -->
          <i class="material-icons">content_paste</i>

          <p>{{ __('ประวัติการจอง') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
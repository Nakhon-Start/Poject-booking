@extends('layouts.app', ['activePage' => 'booking', 'titlePage' => __('booking')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">ทำรายการจอง</h4>
                        <p class="card-category"> This is Booking .</p>
                    </div>
                    <div class="card-body ">
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('ห้องที่ต้องการจอง') }}</label>
                            <div class="col-sm-12 form-group ">
                                <select class="form-control" id="sel1">
                                    <option>ห้อง1</option>
                                    <option>ห้อง2</option>
                                    <option>ห้อง3</option>
                                    <option>ห้อง4</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">{{ __('รายละเอียดการจอง') }}</label><br>
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <!-- <label for="comment">Comment:</label> -->
                                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-12 form-group">
                            <form action="/action_page.php">
                                <label for="birthday">Start-Date:</label><br>
                                <input type="date" id="birthday" name="birthday">
                            </form>
                            </div>

                            <div class="col-sm-12 form-group">
                            <form action="/action_page.php">
                                <label for="birthday" >End-Date:</label><br>
                                <input type="date" id="birthday" name="birthday">
                            </form> 
                            </div>
                           

                            <!-- <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div> -->

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="home" class="btn btn-danger" role="button">Cancle</a>

                </div>
            </div>
        </div>
    </div>
</div>






@endsection
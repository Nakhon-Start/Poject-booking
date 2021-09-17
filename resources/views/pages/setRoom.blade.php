@extends('layouts.app', ['activePage' => 'room', 'titlePage' => __('set room')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Appove</h4>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('message') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive text-center">
                            <div class="modal-body text-center">
                                <form action="{{ route('setRoom',$id) }}" method="POST">
                                    @csrf
                                    <div>
                                        <label>name</label>
                                        <input type="text" class="form-control text-center" name="name">
                                        <label>description</label>
                                        <input type="text" class="form-control text-center" name="description">
                                        <label>is_active</label>
                                        <input type="text" class="form-control text-center" name="is_active">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" data-submit="modal">Submit</button>
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
@endsection
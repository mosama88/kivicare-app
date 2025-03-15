@extends('dashboard.layouts.master')

@section('title', 'Settings')
@section('content')

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Setting Create</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-sm-3 align-self-center mb-0" for="email11">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email11" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3 align-self-center mb-0" for="pwd2">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="pwd2"
                                    placeholder="Enter Your Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remembercheck">
                                <label class="form-check-label" for="remembercheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection

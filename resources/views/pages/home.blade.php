@extends('layouts.app')
@section('content')
<script>
    setInterval(function(){
        document.getElementById("time").innerHTML = (new Date()).toLocaleTimeString();
    }, 1000);
</script>
<div class="container" onload="startTime()">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Welcome {{ Auth::user()->username }}
                    <span class="pull-right">Today: {{ date("Y/m/d") }} <span id="time"></span></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="box-profile">
                        <div class="box-profile-photo">
                            <a href="/">
                                <div style="background-image: url('http://i.imgur.com/pKDdFJR.png')" class="profile-photo"></div>
                            </a>
                        </div>
                        <div class="box-profile-info">
                            <p>{{ Auth::user()->name }}</p>
                            <p>Birthday: </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    {{ __('Announcement') }}
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Create New Announcement</button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">{{ __('Create New Announcement') }}</h4>
                                </div>
                                <form method="post" action="{{ url('announcement') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">{{ __('TiTle') }}</label>

                                            <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="content">{{ __('Announcement') }}</label>
                                            <textarea class="form-control" id="content" name="conetent"></textarea>
                                            @if ($errors->has('content'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">{{ __('Post') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    test
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
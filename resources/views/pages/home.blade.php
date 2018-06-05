@extends('layouts.app')
@section('content')
<script>
    /*setInterval(function(){
        document.getElementById("time").innerHTML = (new Date()).toLocaleTimeString();
    }, 1000);*/

    $( document ).ready(function() {
        $('.btn-compose').click(function(){
            $('.compose-form').show();
            $(this).hide();
        });
    });
</script>
<div class="row justify-content-center">
    <div class="container" onload="startTime()">
        <div class="col-md-12">
            <h1>News Feeds</h1>
            <p>{{ date("F j, Y") }}</p>
        </div>
        <div class="col-md-9">
            <div class="card box-card-wrapper box-post-announcement">
                <div class="box-compose">
                    <label>Post Announcements</label>
                    <a href="/create/announcement"><button class="btn-compose">COMPOSE <img src="/images/icon-compose.png" /></button></a>
                </div>
            </div>
            <div class="card box-card-wrapper box-post-announcement box-announcement-list">
                @if (count($announcements) == 0)
                    <div class="box-list">
                        <p class="title">No post announcement</p>
                    </div>
                @endif
                @foreach($announcements as $announcement)
                    <div class="box-list">
                        <p class="title">{{$announcement->title}}</p>
                        <p class="content">{{$announcement->content}}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Welcome {{ Auth::user()->username }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="box-profile-info">
                            <p>{{ Auth::user()->name }}</p>
                            <p>Birthday: </p>
                        </div>
                </div>
            </div>
    </div>
</div>
@endsection
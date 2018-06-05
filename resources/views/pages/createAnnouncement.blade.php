@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="container">
        <div class="col-md-9">
            <div class="card box-card-wrapper box-post-announcement">
                <div class="compose-form">
                    <form method="post" action="{{ route('announcement.store') }}" autocomplete="off">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Title</label>

                                <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="content">Announcement</label>
                                <textarea class="form-control" id="content" name="content"></textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
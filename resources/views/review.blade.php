@extends('layout.layout')

@section('title')
    Отзывы
@endsection

@section('main_content')
    <div class="row">

        <div class="col-6 offset-3">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3>Review form</h3>
            <form action="{{ route('send_form') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <small id="emailHelp" class="form-text text-muted">Title of your review</small>
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                    <textarea type="text" class="form-control" id="message" name="message"></textarea>
                    <small id="emailHelp" class="form-text text-muted">Your review</small>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>

            <h3 class="mt-5">All reviews</h3>
            @foreach($reviews as $re)
                <div class="alert alert-success">
                    <h3>{{$re->title}}</h3>
                    <b>{{$re->email}}</b>
                    <p>{{$re->message}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

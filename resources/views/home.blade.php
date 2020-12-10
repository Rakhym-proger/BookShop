@extends('layout.layout')

@section('title')
    Главная
@endsection

@section('main_content')

    @if(session('email_or_pass_success'))
        <div class="alert alert-success" role="alert">
            {{ session('email_or_pass_success') }}
        </div>
    @endif

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>
    <div class="row">
        @foreach($books as $book)
            <div class="col-2 m-0">
                <div class="card mb-2 w-100" style="height: 400px;">
                    <img src="{{ "storage/images/".$book->img }}" class="card-img-top" alt="{{ $book->img }}" style="height: 200px; margin-bottom: -20px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text">{{ $book->author->name . " " . $book->author->surname }} <small>{{ $book->date }}</small></p>
                        <a href="#" class="btn btn-info btn-sm">Read</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

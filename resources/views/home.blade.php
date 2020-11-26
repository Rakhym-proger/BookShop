@extends('layout.layout')

@section('title')
    Главная
@endsection

@section('main_content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>
    @foreach($genres as $genre)
        <div class="jumbotron" style="background-color:#a0aec0;">
            {{ $genre->id }}<br>
            {{ $genre->name }}<br>
            @foreach($genre->books as $book)
                <div class="jumbotron" style="background-color:#0f6674;">
                    {{ $book->id }}<br>
                    {{ $book->name }}
                </div>
            @endforeach

        </div>
    @endforeach
{{--    @foreach($books as $book)--}}
{{--        <div class="jumbotron" style="background-color:#a0aec0;">--}}
{{--            {{ $book->id }}<br>--}}
{{--            {{ $book->name }}<br>--}}
{{--            {{ $book->date }}<br>--}}
{{--            {{ $book->author->name . " " . $book->author->surname }}<br>--}}
{{--            {{ $book->author->country->name}}--}}
{{--            @foreach($book->genres as $genr)--}}
{{--                <div class="jumbotron" style="background-color:#0f6674;">--}}
{{--                    {{ $genr->id }}<br>--}}
{{--                    {{ $genr->name }}--}}
{{--                </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}
{{--    @endforeach--}}
{{--    @foreach($authors as $auth)--}}
{{--        <div class="jumbotron" style="background-color:#0f6674;">--}}
{{--            {{ $auth->id }}<br>--}}
{{--            {{ $auth->name }}<br>--}}
{{--            {{ $auth->surname }}<br>--}}
{{--            {{ $auth->birth_date }}<br>--}}
{{--            @foreach($auth->books as $book)--}}
{{--                <div class="jumbotron" style="background-color:#a0aec0;">--}}
{{--                    {{ $book->id }}<br>--}}
{{--                    {{ $book->name }}<br>--}}
{{--                    {{ $book->date }}<br>--}}
{{--                    {{ $book->author->name . " " . $book->author->surname }}<br>--}}
{{--                    {{ $book->author->country->name}}--}}
{{--                </div>--}}
{{--            @endforeach <br>--}}
{{--            {{ $auth->country->name }}--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--    @foreach($countries as $country)--}}
{{--        <div class="jumbotron" style="background-color:#fd7e14;">--}}
{{--            {{ $country->id }}<br>--}}
{{--            {{ $country->name }}<br>--}}
{{--            @foreach($country->authors as $auth)--}}
{{--                <div class="jumbotron" style="background-color:#0f6674;">--}}
{{--                    {{ $auth->id }}<br>--}}
{{--                    {{ $auth->name }}<br>--}}
{{--                    {{ $auth->surname }}<br>--}}
{{--                    {{ $auth->birth_date }}<br>--}}
{{--                    {{ $auth->country->name }}--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endforeach--}}
@endsection

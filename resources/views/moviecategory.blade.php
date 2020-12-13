@extends('headerfooter')
@section('title', 'Movie Category')

@section('css')

@section('content')

    <div class="container bggray pt-5 pl-4 pr-4 pb-5">

        <div class="container bgcolor pt-4 pb-4">

            <h4 class="text-uppercase">{{$genre->name}}<h4>

            <div class="card-group">

                @foreach ($movie as $m)
                    <div class="card">
                        <img src="{{asset($m->photo)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$m->title}}</h5>
                            </div>
                        <a class="btn btn-primary" href="/movieDetail/{{$m->id}}">LIHAT FILM</a>
                    </div>
                @endforeach

            </div>
            
        </div>

    </div>
    
@endsection
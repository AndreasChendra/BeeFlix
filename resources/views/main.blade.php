@extends('headerfooter')
@section('title', 'BeeFlix')
    
@section('css')

@section('content')

    <div class="container bggray pt-5 pl-4 pr-4 pb-5">

        <div class="container bgcolor">
            <br>

            @foreach ($genre as $g)
                <h4 class="text-uppercase">{{$g->name}}<h4>
                    
                    <div class="card-group">
                        @foreach ($movie as $m)

                            @if ($m->genre_id == $g->id)

                                <div class="card">
                                    <img src="{{$m->photo}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$m->title}}</h5>
                                        </div>
                                    <a class="btn btn-primary" href="/movieDetail/{{$m->id}}">LIHAT FILM</a>
                                </div>
                                
                            @endif
                            
                        @endforeach
                    </div>
                    <br>

            @endforeach

            <br>
        </div>

    </div>

@endsection
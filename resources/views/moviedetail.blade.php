@extends('headerfooter')
@section('title', 'Movie Detail')

@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')

    <div class="container bggray pt-5 pl-4 pr-4 pb-5">

        <div class="container bgcolor pt-4 pl-5 pr-5 pb-4">

            <div class="container">
                <div class="row">
                    {{-- column 1 --}}
                    <div class="col">
                        <div class="card-group">

                            <div class="card">
                                <img src="{{asset($movie->photo)}}" class="card-img-top" alt="...">
                            </div>

                        </div>
                    </div>
                    {{-- column 2 --}}
                    <div class="col">
                        <h3 class="card-title">{{$movie->title}}</h3>

                        @for ($i = 0; $i < $movie->rating; $i++)
                            <i class="material-icons" style="font-size:30px;color:#f7f600">star</i>
                        @endfor

                        <p>{{$movie->description}}</p>
                    
                        <p>Kategori: <a href="/movieCategory/{{$genre->name}}">{{$genre->name}}</a></p>
                    </div>
                    {{-- column 3 --}}
                    <div class="col">
                        <h6 class="card-title">EPISODE</h6>

                        {{-- table --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">episode</th>
                                    <th scope="col">judul</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($episode as $e)
                                    <tr>
                                        <td>{{$e->episode}}</td>
                                        <td>{{$e->title}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$episode->links()}}

                    </div>
                </div>
            </div>
            
        </div>

    </div>
    
@endsection
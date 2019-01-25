<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-heroes Music Detail - Song Name</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4 mt-4">
                    <a href="{{route('list')}}" class="btn btn-outline-secondary">Back</a>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h1>Artist name: {{$song['artist']}}</h1>
                                    <h2>Song title: {{$song['title']}}</h2>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li>Position: {{$song['position']}}</li>
                                        <li>Last week: {{$song['last_week']}}</li>
                                        <li>Total weeks: {{$song['total_weeks']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/6cP_0YkS16U"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{$song['more_info']}}" class="btn btn-outline-primary">More information about this song</a>
                                </div>
                            </div>
                            <!--  -->
                            <div class="row">
                                @if(count($song) > 0)

                                <div class="col-md-9">
                                    <h1>Artist name: {{$song['artist']}}</h1>
                                    <h2>Song title: {{$song['title']}}</h2>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li>Position: {{$song['position']}}</li>
                                        <li>Last week: {{$song['last_week']}}</li>
                                        <li>Total weeks: {{$song['total_weeks']}}</li>
                                    </ul>
                                 </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/6cP_0YkS16U"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{$song['more_info']}}" class="btn btn-outline-primary">More information about this song</a>
                                </div>
                            </div>


                            @endif

                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>

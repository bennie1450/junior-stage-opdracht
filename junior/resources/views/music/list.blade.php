<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-heroes Music List</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>Top 10 hits of January 2019</h1>
                </div>

                <!-- 1 -->
                <div class="card">
                    <div class="card-header">
               <h3>artist name: {{$song['artist']}}</h3>
                <h4>$song title: {{$song['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song['total_weeks']}}</p>
                        <a href="{{$song['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>artist name: {{$song2['artist']}}</h3>
                            <h4>$song title: {{$song2['title']}} </h4>
                        </div>
                        <div class="card-body">
                            <ul class="no-bullet inline">
                                <li class="badge badge-primary position-this-week">position-this-week {{$song2['position']}}</li>
                                <li class="badge badge-secondary position-last-week">position-last-week {{$song2['last_week']}}</li>
                            </ul>
                            <p class="text-center"> total week: {{$song2['total_weeks']}}</p>
                            <a href="{{$song2['more_info']}}" class="btn btn-primary">more info: </a>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song3['artist']}}</h3>
                        <h4>$song title: {{$song3['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song3['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song3['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song3['total_weeks']}}</p>
                        <a href="{{$song3['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song4['artist']}}</h3>
                        <h4>$song title: {{$song4['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song4['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song4['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song4['total_weeks']}}</p>
                        <a href="{{$song4['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 5 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song5['artist']}}</h3>
                        <h4>$song title: {{$song5['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song5['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song5['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song5['total_weeks']}}</p>
                        <a href="{{$song5['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 6 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song6['artist']}}</h3>
                        <h4>$song title: {{$song6['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song6['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song6['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song6['total_weeks']}}</p>
                        <a href="{{$song6['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 7 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song7['artist']}}</h3>
                        <h4>$song title: {{$song7['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song7['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song7['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song7['total_weeks']}}</p>
                        <a href="{{$song7['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 8 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song8['artist']}}</h3>
                        <h4>$song title: {{$song8['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song8['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song8['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song8['total_weeks']}}</p>
                        <a href="{{$song8['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 9 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song9['artist']}}</h3>
                        <h4>$song title: {{$song9['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song9['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song9['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song9['total_weeks']}}</p>
                        <a href="{{$song9['more_info']}}" class="btn btn-primary">more info: </a>
                    </div>
                </div>
            </div>
                <!-- 10 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>artist name: {{$song10['artist']}}</h3>
                        <h4>$song title: {{$song10['title']}} </h4>
                    </div>
                    <div class="card-body">
                        <ul class="no-bullet inline">
                            <li class="badge badge-primary position-this-week">position-this-week {{$song10['position']}}</li>
                            <li class="badge badge-secondary position-last-week">position-last-week {{$song10['last_week']}}</li>
                        </ul>
                        <p class="text-center"> total week: {{$song10['total_weeks']}}</p>
                        <a href="{{$song10['more_info']}}" class="btn btn-primary">more info: </a>

                    </div>
                </div>
            </div>

            </div>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>

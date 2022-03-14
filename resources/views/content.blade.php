<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @switch($type)
            @case('location')
            景勝地
            @break

            @case('food')
            飲み食い
            @break

            @case('festival')
            お祭り
            @break
        @endswitch
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>
<body>
<div class="team-grid">
    <div class="container">
        <div class="row people">
            @foreach ($contents as $content)
            <div class="col-md-4 col-lg-3 item">
                <div class="box"
                     style="background-image: url('{{ asset('img/detail/'.$content->type.'/'.$content->thumbnail)}}');"
                     onclick="window.location='{{route('detail',['type' => $content->type, 'id' => $content->id])}}'">
                    <div class="cover">
                        <h3 class="name">{{$content->name}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

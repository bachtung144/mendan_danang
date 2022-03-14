<!DOCTYPE html>
<html>
<head>
    <title>{{$detail->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <script type="text/javascript" src="{{asset('js/detail.js')}}"></script>
</head>

<body style="background-color: #262626">

<div class="slideshow-container">
    @foreach($detail->images as $image)
        <div class="mySlides fade">
            <img src="{{asset('img/detail/'.$detail->type.'/'.$image->name)}}" class="img-slide">
        </div>
    @endforeach
</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<p class="des">{{$detail->description}}</p>

</body>

<footer>
    <script>showSlides();</script>
</footer>

</html>

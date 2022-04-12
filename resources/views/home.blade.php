<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ダナン市</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('bower_components/bower_mendan/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/bower_mendan/assets/css/templatemo-main.css')}}">
    <script src="{{asset('bower_components/bower_mendan/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>

<body>

<div class="fixed-side-navbar">
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="#home"><span>ホーム</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#services"><span>サービス</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#content"><span>コンテンツ</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#reward"><span>賞</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#contact"><span>コンタクト</span></a></li>
    </ul>
</div>

<div class="parallax-content baner-content" id="home">
    <div class="container">
        <div class="first-content">
            <h1>ダナン市</h1>
            <div class="primary-button">
                <a href="#services" style="font-size: 16px">もっと見る</a>
            </div>
        </div>
    </div>
</div>

<div class="service-content" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-text">
                    <h4>ダナンの詳細</h4>
                    <div class="line-dec"></div>
                    <p>ダナンは、ハノイとホーチミンに次ぐベトナムで3番目に大きな都市です。ダナンはベトナムで最も有名な観光都市です。</p>
                    <div class="primary-button">
                        <a href="#content" style="font-size: 14px">私たちについてもっと知る</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>景勝地</h4>
                            <div class="line-dec"></div>
                            <p>多くの美しい景勝地とモダンなエンターテインメントエリア</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item" style="height: 170px">
                            <h4>ビーチ</h4>
                            <div class="line-dec" ></div>
                            <p>世界で有名な多くの美しいビーチ</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>お祭り</h4>
                            <div class="line-dec"></div>
                            <p>伝統的なお祭りや国際的なお祭りを含む多くの特別なお祭り</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>飲み食い</h4>
                            <div class="line-dec"></div>
                            <p>美味しくて､栄養価が高くて、安い基準を満たす豊富な飲み食い</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-content projects-content" id="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <a href="{{ route('Content', ['type' => 'location']) }}">
                        <img src="{{asset('bower_components/bower_mendan/assets/img/detail/reward/mk.jpg')}}" alt="" style="width: 100%; height: 250px">
                    </a>
                    <div style="align-self: center; padding: 15px">
                        <h4><b>景勝地</b></h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="{{ route('Content', ['type' => 'festival']) }}">
                        <img src="{{asset('bower_components/bower_mendan/assets/img/detail/main/le-hoi.jpg')}}" alt="" style="width: 100%; height: 250px">
                    </a>
                    <div style="align-self: center; padding: 15px">
                        <h4><b>お祭り</b></h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <a href="{{ route('Content', ['type' => 'food']) }}">
                        <img src="{{asset('bower_components/bower_mendan/assets/img/detail/main/am-thuc.jpg')}}" alt="" style="width: 100%; height: 250px">
                    </a>
                    <div style="align-self: center; padding: 15px">
                        <h4><b>飲み食い</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tabs-content" id="reward">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                        @foreach($rewards as $reward)
                            <div id="{{$reward->id}}">
                                <img src="{{asset('bower_components/bower_mendan/assets/img/detail/reward/'.$reward->thumbnail)}}">
                                <p>{{$reward->description}}</p>
                            </div>
                        @endforeach
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        @foreach($rewards as $reward)
                            @if($reward->id === 1)
                                <li><a href="#{{$reward->id}}" class="active">{{$reward->year}}</a></li>
                            @else
                                <li><a href="#{{$reward->id}}">{{$reward->year}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-content contact-content" id="contact">
    <div class="container">
        <div class="row">
            <div class="map">
                <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJEyolkscZQjERBn5yhkvL8B0&key=AIzaSyCX3fGo19ph7CT9xGZdReO4DzTLucDke-I&language=ja" ></iframe>
            </div>

        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="primary-button">
                    <a href="#home" style="font-size: 15px">トップへ戻る</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>window.jQuery || document.write('<script src="{{asset('bower_components/bower_mendan/assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
<script src="{{asset('bower_components/bower_mendan/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/bower_mendan/assets/js/main.js')}}"></script>

</body>
</html>

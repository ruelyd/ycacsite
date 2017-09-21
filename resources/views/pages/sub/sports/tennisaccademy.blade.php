@extends("layouts.main")

@section('style')
<link href="{{URL::to('/css/sports.css')}}" rel="stylesheet" type="text/css">
@endsection

@section("content")

<h1> tennis academy </h1>

<div class="container containertopmargin">
    <div class="row">
        <div class="col-md-1">  </div>    
        <div class="col-md-5 ">`
            <div class="boxblueorange">
                <p>
                    YC&AC </br> TENNIS  ACADEMY
                </p> 
            </div> 
            <div style="height: 10px;"></div> 
            <div>
                <img src="{{asset('image/resource/tennisacademy/cp.jpg')}}" style="width: 400px;height: 300px;" class="img-responsive" ></img>
            </div>
            <div style="margin:25px;">
                <img src="{{asset('image/resource/tennisacademy/cp1.jpg')}}" style="width: 400px;height: 300px;" class="img-responsive" ></img>
            </div>
            <div style="margin:25px;">
                <img src="{{asset('image/resource/tennisacademy/sports-tennis.jpg')}}" style="width: 400px;height: 300px;" class="img-responsive" ></img>
            </div>
            <div style="margin:25px;">
                <button type="button" id="tenshed" class="btn btn-primary " style="width: 200px">Download Schedule</button>
            </div>
        </div>  
        <div class="col-md-5 ">`
            <div class="row" style="padding-left: 10px; ">
                <p>Introducing the concept of intensive tennis program with the latest approach to the technical and tactical game and practice, specific tennis physical conditioning and developing the mental approach to the tennis game.
                    YC&AC Tennis Academy offer a program developed and run by International Professional Tennis Coaches.</p>
                <p> Coaches are the key to our success.</p>

                <p style="text-align: justify;"> KIDS PROGRAM – Jr.C “LOVE FOR THE GAME PROGRAM”</p>
                <p style="text-align: left;">
                    Developing the basics of tennis technique and tennis movement through series of fun drills and games in a healthy and fun environment. Introducing the understanding of the tennis strokes and the tennis footwork as the base for the future development.
                    Developing the love for the game itself through the tennis program based on education through fun and games.
                </p>

                <p style="text-align: justify;">  Jr.B “SEMI-INTENSIVE PROGRAM””</p>
                <p style="text-align: left;">
                    Tennis program for young competitive players or intermediate level who are seeking to improve there tennis game. The program is set for the players that developed the basics of tennis technique and tennis movement and are ready to take their game to the higher level through better understanding of the game of tennis.
                    Introduction of the tennis tactics, points and matches.
                </p>

                <p style="text-align: justify;"> Jr.A Program </p>
                <p style="text-align: left;">
                    YC&AC Semi-Pro Junior is an intensive tennis program for juniors players.
                    Tuesday to Friday, 100 min tennis practice focusing on Technical and Tactical improvement, understanding the tennis game and specific tennis fitness.
                    Program is developed and adapted for juniors with more serious tennis approach and higher expectations of the game itself.
                </p>

                <p style="text-align: justify;"> JUNIOR CORRECTION PROGRAM </p>
                <p style="text-align: left;">
                    Private intensive technique correction program for pre-tournament and tournament players.</p>
                <p style="text-align: left;">Program is developed for players to correct their technique, improve their strokes and bring their tennis to much higher level.
                    Using video analysis and newest approach to tennis game, creating the most efficient combination of power and control in strokes and movement technique.
                </p>

                <p style="text-align: justify;"> TOURNAMENT PLAYER “INTENSIVE PROGRAM” </p>
                <p style="text-align: left;">
                    High intensity program based on a years of tennis coaching experience working with top national junior, ETA and ITF players throughout Europe, USA and Japan.
                    Proper technical development using video analysis, scientific approach to the game development using the principles of biomechanics, sports physiology and sports psychology, creating tactical patterns on and off the court, building mental toughness for the game and intense specific tennis conditioning weight-free training (aerobic and anaerobic).
                    Every our player has a specific training development program based on the technical and physical testings and monitoring.</p>

                <p style="text-align: left;"> 2h30 minutes of daily tennis practice, physical training and stretching from Monday to Sunday.
                </p>

                <p style="text-align: justify;">  ADULT PRIVATE and SEMI-PRIVATE PROGRAM </p>
                <p style="text-align: left;">
                    One-on-One tennis lessons, developing proper injury free tennis technique, introducing the basics of singles and doubles tactics.</p>

                <p style="text-align: left;">Private lessons are suitable for all tennis players from beginner to advance level.</p>
            </div> 

            <div class="col-md-1 "></div>
        </div>
    </div> 

    <div style="background-color:orangered; margin-top:50px;margin-bottom: 50px; padding-top: 15px; height:80px; width: 100%;  text-align: center">
        <p style=" text-align: center; font-size:35px; color:whitesmoke;">COACHES</p>
    </div>


    <div class="row">

        <div class="col-md-4"> 
            <div class="bgrd" style="background : url({{asset('image/resource/tennisacademy/tennisimage.jpg')}});" >
                <div style=" background-color:#3CAAE8;margin-bottom:15px ; font-size: 28px;color:white; text-align:center;" >  Bosko Tesic </div>
                <div style="width:300px ;height: 330px;margin: auto;">
                    <img src="{{asset('image/resource/tennisacademy/boskp-t.jpg')}}" style="width:300px ;height: 330px;" class="img-responsive" ></img>
                    <p class="tennistextcouch">Bosko Tesic is Director of YC&AC’s Jr.Tennis Academy. Two-Years Sports College,USPTA certified professional tennis coach. Holds 17 years of coaching experience.</p>
                </div>
            </div>    
        </div>


        <div class="col-md-4">
            <div class="bgrd" style="background : url({{asset('image/resource/tennisacademy/tennisimage.jpg')}});" >
                <div style=" background-color:#3CAAE8;margin-bottom:15px ; font-size: 28px;color:white; text-align:center;" >  Milos Dimic </div>
                <div style="width:300px ;height: 330px;margin: auto;">
                    <img src="{{asset('image/resource/tennisacademy/milos-d.jpg')}}" style="width:300px ;height: 330px;" class="img-responsive" ></img>
                    <p class="tennistextcouch">Milos Dimic is Head Coach of YC&AC’s Jr.Tennis Academy. USPTA, RPT and ITPA certified professional tennis coach and trainer.Holds 15 years of coaching experience.</p>
                </div>
            </div>    
        </div>

        <div class="col-md-4"> 
            <div class="bgrd" style="background : url({{asset('image/resource/tennisacademy/tennisimage.jpg')}});" >
                <div style=" background-color:#3CAAE8;margin-bottom:15px ; font-size: 28px;color:white; text-align:center;" >  Vladan Mihic </div>
                <div style="width:300px ;height: 330px;margin: auto;">
                    <img src="{{asset('image/resource/tennisacademy/mihict-v.jpg')}}" style="width:300px ;height: 330px;" class="img-responsive" ></img>
                    <p class="tennistextcouch" >Vladan Mihic is tennis coach,Vladan developed his own technique of fitness training, coordination and tennis footwork for young tennis players.Holding 10 years of coaching experience.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div style="padding-top:20px"></div>

<div class="container">    
    <div class="row">
        <div class="col-md-1">    </div>
        <div class="col-md-10">   
            <img src="{{asset('image/resource/tennisacademy/logos.jpg')}}"  class="img-responsive" ></img>
        </div>
        <div class="col-md-1">    </div>
    </div>

    <div style="background-color:#3CAAE8; margin-top:50px;margin-bottom: 50px; padding-top: 15px; height:auto; width: 100%; ">
        <p style=" text-align: center; font-size:30px; color:whitesmoke;padding:20px;margin:0px; ">TOURNAMENT PLAYER HIGH INTESITY PROGRAM</p>
    </div>


    <div class="row">
        <div class="col-md-1">    </div>
        <div class="col-md-10">

            <div style="text-align: center">
                <p style="text-align: center">
                    The Junior Team is a high-performance training program created specially to prepare the best players to the tournaments in Japan, ITF, ATF and ETA.</p>
                <p> Team players have the opportunity to train in the best possible training environment at the YC&AC Tennis Academy, a unique opportunity for young </p> 
                <p> talented players to learn from the very best coaches in Japan.</p>
            </div>
            <div style="text-align: center">
                <p style="font-size:30px;">WHO TRAIN AT YC&AC TENNIS ACADEMY </p>
            </div>
        </div>
        <div class="col-md-1">    </div>
    </div>

    <div style="padding-top:20px"></div>
    <div class="col-md-1">    </div> 
    <div class="col-md-10">    
        <div class="row">
            <div  id="myslide"   class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('image/resource/tennisacademy/erik.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Erik Asakura </p>
                            <p class="tennistextcarousel"> Nationality, Japan - Romania </p>
                        </div>
                    </div>   
                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/reo.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Reo Ozaki</p>
                            <p class="tennistextcarousel"> Nationality, Japan </p>
                        </div>
                    </div>   
                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/yuma.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Yuma Daijima</p>
                            <p class="tennistextcarousel"> Nationality, France - Japan </p>
                        </div>
                    </div>   

                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/kei.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Kei Ishii </p>
                            <p class="tennistextcarousel"> Nationality, Japan </p>
                        </div>
                    </div>   
                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/mamori.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Mamori Yamazaki </p>
                            <p class="tennistextcarousel"> Nationality, Japan </p>
                        </div>
                    </div>   
                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/kazuya.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Kazuya Matsumoto </p>
                            <p class="tennistextcarousel"> Nationality, Japan </p>
                        </div>
                    </div>   

                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/makasi.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Masaki Hamada </p>
                            <p class="tennistextcarousel"> Nationality, Japan </p>
                        </div>
                    </div> 

                    <div class="item ">
                        <img src="{{asset('image/resource/tennisacademy/blue.jpg')}}" class="img-responsive" ></img>
                        <div class="carousel-caption">
                            <p class="tennistextcarousel"> Blue Cockle </p>
                            <p class="tennistextcarousel"> Nationality, USA - Japan </p>
                        </div>
                    </div> 
                </div>
                <a class="right carousel-control" href="#myslide" data-slide="next"> 
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <a class="left carousel-control" href="#myslide" data-slide="prev"> 
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-1">    </div>
</div>

@endsection

@section("jquery")
<script type='text/javascript'>
    $(document).ready(function () {
        //Your Click event
        $('#tenshed').click(function () {
            window.location.href = "{{asset('pdf/tenniaccademy/ycac-tennis-timetable.pdf')}}";
        });
    });
</script>
@endsection
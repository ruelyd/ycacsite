@extends("layouts.main")

@section("content")

<h1> sportsbar </h1>
<div style="margin-bottom:60px;"></div>
<div class="container containertopmargin">



    <div class="row">
        <div class="col-md-2"></div>   
        <div class="col-md-8">
            <div>
                <img src="{{asset('image/resource/dining/sb.jpg')}}" class="img-responsive"></img>   
            </div>
        </div>  
        <div class="col-md-2"></div> 
    </div>



    <div style="margin-bottom:60px;"></div>

    <div class="row">
        <div class="col-md-2"></div>   
        <div class="col-md-4">
            <img src="{{asset('image/resource/dining/sb1.jpg')}}" class="img-responsive" style="width:100%; height: auto;padding-bottom: 30px"></img>   
        </div>   


        <div class="col-md-4"> 
            
            <img src="{{asset('image/resource/dining/sportbarsched.jpg')}}"  class="img-responsive" style="margin-bottom: 30px;"></img>  
            <p>
                The Club’s Sports Bar is located close to the
                Main Field and has ample seating outside. It
                is ideally placed both for spectators and for
                those stumbling off the pitch after a game –
                and is the main social hub of YC&AC?s
                sporting community. Visiting teams often
                join together with YC&AC?s teams to enjoy
                a drink and a bite to eat after an
                invigorating match on our pitch.
            </p><p>
                Food may be ordered from Mollison’s here,
                and live sports from around the world are
                readily accessible on the large flat-screen
                TV. There is also special Menu available for
                the sports players. During the busy season,
                Sports bar is a venue of “TFI Friday”, a
                member-organized event, an uber-opoular
                gatehring night filled with music, beer and
                talks!
            </p>
        </div>   
        <div class="col-md-2"></div>   
    </div>
</div>



@endsection
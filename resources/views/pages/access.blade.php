@extends("layouts.main")

@section("content")
<body>

    <h1>Access</h1>

    <div class="container containertopmargin">
        <div class="row">

            <div class="col-md-2"></div>   
            <div class="col-md-8">

                <p>Members must first register their vehicles with the Club. After this, they are required to display a valid “YC&AC” parking sticker provided by the Club prominently on their vehicle’s windshield.</p>
                <p>Visitor must park at the lower parking area. Parking at the lower parking is free of charge on weekdays and we charge <strong>1,500 yen on weekend and national holidays</strong>.</p> 

                <div style="margin-bottom:50px;margin-top: 50px; ">
                <h4>Guided Photo Tour from Yamate Station to YC&AC</h4>
                </div>

                <div  id="myslide"   class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('image/resource/access/Route-1.jpg')}}" class="img-responsive" ></img>
                        </div>   
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-2.jpg')}}" class="img-responsive" ></img>
                        </div>   
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-3.jpg')}}" class="img-responsive" ></img>
                        </div>   

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-4.jpg')}}" class="img-responsive" ></img>
                        </div>   
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-5.jpg')}}" class="img-responsive" ></img>
                        </div>   
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-6.jpg')}}" class="img-responsive" ></img>
                        </div>   

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-7.jpg')}}" class="img-responsive" ></img>
                        </div> 

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-8.jpg')}}" class="img-responsive" ></img>
                        </div> 

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-9.jpg')}}" class="img-responsive" ></img>
                        </div> 

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-10.jpg')}}" class="img-responsive" ></img>
                        </div> 
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-12.jpg')}}" class="img-responsive" ></img>
                        </div> 

                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-13.jpg')}}" class="img-responsive" ></img>
                        </div> 
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-14.jpg')}}" class="img-responsive" ></img>
                        </div> 
                        <div class="item ">
                            <img src="{{asset('image/resource/access/Route-15.jpg')}}" class="img-responsive" ></img>
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
            <div class="col-md-2"></div>
        </div> 

        <div style="margin-top:80px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=11-1+Yaguchidai+Naka-ku+Yokohama,+Japan&amp;aq=&amp;sll=37.666259,141.014156&amp;sspn=0.031185,0.030642&amp;ie=UTF8&amp;hq=&amp;hnear=Japan,+Kanagawa-ken,+Yokohama-shi,+Naka-ku,+Yaguchidai,+%EF%BC%91%EF%BC%91%E2%88%92%EF%BC%91&amp;ll=35.423986,139.649275&amp;spn=0.00403,0.00383&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near;" width="100%" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></p>       
            
                <p>Access by Train and Foote</p>
                <p>Disembark at Yamate Station on the Keihin Tohoku Line. Immediately turn right under the tracks. Climb the winding road up the hill and turn right at the very top. Follow the narrow road, bearing right at a minor fork, after which you will soon see the YC&AC on the left. The walk from the station takes around 10 minutes.</p>
            
                <p>Access by Car</p>
            
                <p>Please trust your car navigation system to the Club’s Yaguchidai address. YC&AC has two parking lots: an upper parking lot for members only, located next to the Clubhouse, and a lower parking lot adjacent to the tennis courts.</p>
                <p>Get Direction</p>
            
            
            
            
            </div>
            <div class="col-md-2"></div>
        </div></div>
    </div>   


    @endsection
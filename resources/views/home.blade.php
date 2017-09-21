@extends("layouts.main")
@section('content')


<div class="banner">
    <img src="{{asset('image/bannerhq.jpg')}}" class="img-responsive"></img>
</div>

<div class="lowerborange"></div>
<div class="lowerblue">
<div class="container mt40">
    <section class="row">
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                       <img src="{{asset('gallery/mainbar.jpg')}}" class="img-responsive"></img>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Bar's">Bar's</a></h4>
                    <span class="pull-right">
                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                    </span>
                </div>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/food/2" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                        <img src="{{asset('gallery/mollison.jpg')}}" alt="Food Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Food Portfolio">Mollison's</a></h4>
                    <span class="pull-right">
                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                    </span>
                </div>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/sports/3" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                       <img src="{{asset('gallery/sports.jpg')}}" class="img-responsive"></img>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                    <span class="pull-right">
                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                    </span>
                </div>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/people/1" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                        <img src="{{asset('gallery/pool.jpg')}}" class="img-responsive"></img>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Pool Fun">Pool</a></h4>  
                    <span class="pull-right">
                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                    </span>
                </div>
            </div>
        </article>                                              
</section>
</div>
    <!--** container -->
</div>
<div class="container">

   <div class="row">
       <div class="col-md-6">
           <h2>WELCOME TO YC&AC</h2>
             <p>Established in 1868 as the Yokohama Cricket Club (YCC), YC&AC is Japan’s oldest sports and social club.</p>
             <p> YCC’s earliest members maintained a magnificent cricket ground in the middle of Yokohama Park and made this available to other sports clubs in the fledgling port city. In 1884, YCC members voted to absorb the Yokohama Football (rugby), Athletics, Baseball and Tennis Clubs to form the multi-sport YC&AC as we know it today.</p>
             <p>In 1912 YC&AC moved to its present location in Yamate, an expansive hilltop sanctuary just 45 minutes by car from Tokyo (Shibuya). Here the Club continues to offer the same rich sporting and social experience of days gone by, in a safe, family friendly, international environment.</p>
             <p> Drop by any time to see for yourself, or call ahead on (045) 670-9004 to arrange a tour of our clubhouse and grounds.</p>
        </div>
       <div class="col-md-6" style="margin-top:30px;">
           <div style="margin: auto; width: 50%;">
           <img src="{{asset('gallery/150-year-campaign.jpg')}}" style="width:300px ;height: 400px; "></img>
           </div>
      </div>
   </div>




   <div class="row">
       <div class="col-md-6">
           Event Are 1
        </div>
       <div class="col-md-6">
           Event Area 2
      </div>
   </div>

</div>
@endsection
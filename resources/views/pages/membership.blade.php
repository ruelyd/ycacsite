@extends("layouts.main")
@section("content")

<h1> membership </h1>

<div class="content containertopmargin">
<div class="row">
    <div class="col-md-3">
    </div>    
    <div class="col-md-5">
        <div>
            <p style="text-align: justify;"> 
             <h4 style="margin-bottom: 15px;">   Enjoy the benefits of membership of Japan’s premier sports and social club!</h4>
            </p>               
            <p style="text-align: justify;"> 
                In those days members got to the club mainly by street car and in the summer could walk down the hill to bathe in the clean water of Mikado Bay which was then part of the ‘Mississippi Bay.’ Some views of Mississippi Bay were rated among the most beautiful in the world, but unfortunately in the 1960’s the authorities decided to reclaim a lot of land from the sea and build petrochemical complexes. So the beaches are long gone and instead of overlooking beautiful beaches, the club now sadly overlooks oil refineries.
            </p>               
            <p style="text-align: justify;"> 
               Idyllically situated on a Yokohama hilltop as little as 30 minutes from Tokyo by car or train, YC&AC invites you to experience a very special part of Japan.
            </p>               
            <p style="text-align: justify;"> 
               If you would like to learn more about joining the club, or are interested in booking our facilities for private functions, please write to concierge@ycac.or.jp or call (045) 670-9004.
            </p>   
        </div>
        
         <h4 style="margin-bottom: 15px; padding-left:28px;  margin-top: 35px ;"> Benefits of YC&AC membership </h4>
            <ol class="lineheight">
            <li>Benefits of YC&AC membership</li>
            <li>Full-size all-weather pitch</li>
            <li>Open-air swimming pool and playground</li>
            <li>Tennis and squash courts</li>
            <li>Badminton and basketball courts</li>
            <li>Table tennis tables</li>
            <li>World-class lawn bowling green</li>
            <li>Billiards room, 10-pin bowling alley and real darts</li>
            <li>State-of-the-art fitness center</li>
            <li>Dance, yoga and massage studio</li>
            <li>Highly qualified instructors, trainers and physiotherapists</li>
            <li>Superb international dining at Mollison’s restaurant</li>
            <li>Alfresco dining on the Roof Deck and Patio</li>
            <li>Members Bar and Sports Bar</li>
            <li>Countless fantastic events</li>
            <li>International Frienship</li>
            </ol>
                
    </div>    
    <div class="col-md-4">
        <div  class="contactbox  center-block">
           <h3>Club Tour</h3>
           <p style="font-size: 16px; ">For a guided tour of our facilities or more details of our range of membership packages and fees, please write to concierge@ycac.or.jp or call (045) 670-9004.</p>
           <button type="button" id="appform" class="btn btn-warning pull-right" style="width: 200px">Application Form</button>
         </div>
       </div>    
</div>     
</div>   
 
@endsection



@section("style")
<link href="{{URL::to('/css/membership.css')}}" rel="stylesheet" type="text/css">
@endsection

@section("jquery")
<script type='text/javascript'>
$(document).ready(function(){
    //Your Click event
    $('#appform').click(function(){
        window.location.href="{{asset('pdf/membership/applicationform.pdf')}}";
    });
});
</script>
@endsection
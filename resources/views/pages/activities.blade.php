@extends("layouts.main")

@section("content")

<ul id="breadcrumbs-two">
    <li><a href=""> Activities   </a></li>
</ul>
 
<div class="container-fluid containertopmargin" >
  <div class="row" style="margin-left: -15px;  margin-right: -15px;">
    <div class="col-md-2"> </div>    
      <div class="col-md-8">
       <div>
        <p style="text-align: justify;"> 
           In addition to the many sporting and fitness-related activities the Club provides (and for those see the relevant pages), the Club also offers a range of recreational and educational classes and opportunities.
         </p>               
          <p style="text-align: justify;"> 
           If you are interested in participating in any of these activities, please visit our Front Desk or call on (045) 670-9004, and we will direct you to the relevant instructor or group leader. Likewise, if you are interested in running your own activities or classes on the Club’s premises, please contact the Front Desk for details of how to proceed.
          </p>               
        </div>
      </div>    
     <div class="col-md-2"></div>    
  </div>     
</div>  
<div style="margin-bottom:50px"></div>

<div class="container-fluid">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <button type="button" id="kdsports" class="btn btn-warning pull-right" style="width: 200px">KIDS SPORTS / ACTIVITIES</button> 
            <button type="button" id="ativeshed" class="btn btn-primary pull-right" style="width: 200px">ACITVITIES SCHEDULE</button>
        </div>
        <div class="col-md-2"></div>
    </div>
    
    <div class="row">
        <div class="col-md-2"> </div>    
        <div class="col-md-8">
            <div style="border: 3px solid #000; padding: 0;">
                <img src="{{asset('image/resource/activities/activities-schedule.jpg')}}" class="img-responsive"></img>   
            </div>
        </div>    
        <div class="col-md-2"></div>    
    </div>
</div>    
@endsection


@section("jquery")
<script type='text/javascript'>
$(document).ready(function(){
    //Your Click event
    $('#kdsports').click(function(){
        window.location.href="{{asset('pdf/activities/kids-sports.pdf')}}";
    });
});

$(document).ready(function(){
    //Your Click event
    $('#ativeshed').click(function(){
        window.location.href="{{asset('pdf/activities/activities-schedule-may2017.pdf')}}";
    });
});

</script>
@endsection
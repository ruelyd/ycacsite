<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YC&AC</title>
        <link href="{{URL::to('/css/home.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::to('/css/register.css')}}" rel="stylesheet" type="text/css">
             <!-- Latest compiled and minified CSS -->
        <link href="{{URL::to('/337/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> 
        <link href="{{URL::to('/css/footer.css')}}" rel="stylesheet" type="text/css">
        <!-- Set style other pages -->        
               @yield("style")
        <!-------------------------->
    </head>
    
    <div class="container" style="height: 100px; width: 99%;">
        <div class="row">
           <div class="col-md-9 col-sm-12" style="padding-top:5px; padding-left:50px;"> 
             <img src="{{asset('image/logo.jpg')}}" class="logsize"  ></img>
           </div>        
                       
            <div class="col-md-3 col-sm-12 center-block">
              <!--  <button onclick="window.location='{{ route("login") }}'"  type="button"  class="btn-primary pull-right" style="height:35px; width: 100px;">Login</button> -->
                <img src="{{asset('image/socialmedia/facebook.png')}}"  class="socialm pull-right "  > </img>
                <img src="{{asset('image/socialmedia/twitter.png')}}"   class="socialm pull-right" ></img>
                <button onclick="window.location='{{ route("register") }}'" type="button" class="btn-success pull-right" style="height:35px; width: 150px; margin-right: 15px;margin-top:8px; "> Register </button>
            </div>    
            <!--
            <div class="col-md-3 col-sm-12 center-block" style="border-style:solid;border-color: red; ">
                <div style="display: inline-block" class="pull-right">
                <img src="{{asset('image/socialmedia/facebook.png')}}"  class="socialm "  > </img>
                <img src="{{asset('image/socialmedia/twitter.png')}}"   class="socialm " ></img>
                <img src="{{asset('image/socialmedia/twitter.png')}}"   class="socialm "   ></img></div>
            </div>  -->
           
        </div>
     </div>
   
     <div class="content" style="width: 99%;">
         <div class="row">
         </div>
     </div>

    @include("includes.headers")
    <body>
       <!-- The main content -->
          @yield("content")
       <!---------------------->  
        <script src="{{URL::to('/337/js/jquery-3.2.1.js')}}"></script>
        <script src="{{URL::to('/337/js/bootstrap.min.js')}}"></script>
        
          @yield("jquery")
    </body>
    @include("includes.footers")
</html>

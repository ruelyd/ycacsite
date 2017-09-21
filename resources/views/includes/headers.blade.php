
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="{{route('home')}}">HOME</a></li>
            <li><a href="{{route('koekishadanhojin')}}">KOEKI SHADAN HOJIN</a></li>
            <li><a href="{{route('clubhistory')}}">CLUB HISTORY</a></li>
            <li><a href="{{route('membership')}}">MEMBERSHIP</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DINING<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('mollison')}}">Mollison's</a></li>
                        <li><a href="{{route('membersbar')}}">Members Bar</a></li>
                        <li><a href="{{route('sporstbar')}}">Sports Bar</a></li>
                        <li><a href="{{route('cateringparting')}}">Catering & Party</a></li>
                    </ul>
                </li>
          
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SPORTS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('ycacsports')}}">Ycac Sports</a></li>
                        <li><a href="{{route('tennisaccademy')}}">Tennis Academy</a></li>
                    </ul>
                </li>

                <li><a href="{{route('activities')}}">ACTIVITIES</a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMMUNITY<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('friends')}}">Friends</a></li>
                        <li><a href="{{route('rpn')}}">Reciprocal Club Network</a></li>
                        <li><a href="{{route('childcare')}}">Child Care</a></li>    
                    </ul>
                </li>

            <li><a href="{{route('access')}}">ACCESS</a></li>
            <li><a href="{{route('career')}}">CONTACT</a></li>
      </ul>
   
    </div>
  </div>
    <div class="lowerborange"></div>
</nav>

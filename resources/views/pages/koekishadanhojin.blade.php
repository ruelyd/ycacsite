@extends("layouts.main")

@section("content")
<h1> Koeki Shadan Hojin Documents </h1>


<div class="container containertopmargin"  >
    <div class="row">
        <div class="col-md-2"> </div>    
        <div class="col-md-4" >
            <div class="caption" >
                <h4>Article of Association</h4>
            </div>     
            <div class="thumbnail">
                <a href="{{asset('pdf/KSHD/YCAC-AOA.pdf')}}">
                    <img src="{{asset('image/resource/koekishadanhojin/YCAC-AOA.jpg')}}" class="img-responsive" style=" width:220px; height:400px"></img>   
                </a>
            </div>
        </div>    
        <div class="col-md-4">
            <div class="caption" >
                <h4>By-Laws</h4>
            </div>    
            <div class="thumbnail" >
                <a href="{{asset('pdf/KSHD/YCAC-By-Laws.pdf')}}">
                    <img src="{{asset('image/resource/koekishadanhojin/YCAC-By-Laws.jpg')}}" class="img-responsive" style=" width:220px; height:400px"></img>   
                </a>
            </div>
        </div>    
        <div class="col-md-2"></div>    
    </div>
</div>    

<div class="container">
    <div class="row">
        <div class="col-md-2"> </div>    
        <div class="col-md-4">
            <div class="caption" >
                <h4>Profit and Loss Statement</h4>
            </div>   
            <div class="thumbnail">
                <a href="{{asset('pdf/KSHD/YCAC-Financial-Statement-PL-FY2015-FY2016.pdf')}}">
                    <img src="{{asset('image/resource/koekishadanhojin/YCAC-Financial-Statement-PL-FY2015-FY2016.jpg')}}" class="img-responsive" style="width:220px; height:400px;" ></img>   
                </a>
            </div>
        </div>    
        <div class="col-md-4" >
            <div class="caption">
                <h4>Balance Sheet</h4>
            </div>    
            <div class="thumbnail">
                <a href="{{asset('pdf/KSHD/YCAC-Financial-Statement-BS-FY2015-FY2016.pdf')}}">
                    <img src="{{asset('image/resource/koekishadanhojin/YCAC-Financial-Statement-BS-FY2015-FY2016.jpg')}}" class="img-responsive" style="width:220px; height:400px;" ></img>   
                </a>
            </div>    
        </div>    
        <div class="col-md-2"></div>    
    </div>
</div>    





@endsection
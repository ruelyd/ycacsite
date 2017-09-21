@extends("layouts.main")

@section("content")
<body>


    <h1>child care </h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <p>＊ YC&AC provides nursery services for children between the ages of one and seven years old.</p>
                <p>＊ Enjoy the ample facilities of Yokohama Country & Athletic Club in an English environment!</p>
                <p>＊ Children do not need to be bilingual!</p>
                <p>Even in the calm hills of Yokohama, the hustle and bustle of life in Japan means that raising a young child can be a stressful proposition. With international preschools commonly on long waiting lists due to the increase in families living in Yokohama, there are few options for an international-minded parent needing more time in the day.</P>
            </div> 

            <div class="col-md-4">
                <img src="{{asset('image/resource/community/childcare/childcareimage1.jpg')}}" class="img-responsive"></img>
            </div> 
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <p>We encourage members and non-members to bring their young children to YC&AC to experience a quality international daycare service as part of the Club community; neighbors and families in Yokohama are part of our community too!</p>
                <p>Hours: Monday to Friday, 9:00am to 4:00pm (special service outside normal hours by appointment)</p>
                <p>Booking: Flexible rates are available, book single days, weeks, or even months at a time!</p>
                <p>Need a quick day on your own? We’ll take care of your young ones.</p>
                <p>Work keeping you away from family next week? Call us.</p>
                <p>No matter the reason, call us anyway!</p>
                <p>Reservations available three days in advance, or stop by for same-day service!</p>
                <p>Bringing a brother or sister along too? Enjoy a 25% discount!</p>
                <p>Contact: YC&AC Front Desk, (045) 670-9004</p>
                <p>hild Care Email: l.kaneko@ycac.or.jp</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('image/resource/community/childcare/childcareimage2.jpg')}}" class="img-responsive"></img>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-2"></div>    
    </div> 


    @endsection
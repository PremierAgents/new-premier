@extends('layouts.FrontEnd')

@section('content')
 <style>
 .section-mobile{
   display: none;
 }


.searchTerm:focus{
  color: #00B4CC;
}

#subscribe {
  width: 180px;
  height: 60px;
  background: cornflowerblue;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
}

.sasaa input{
  height: 60px;
  width: 550px;
}
/*Resize the wrap to see the search bar change!*/



.btn2 {
            cursor: pointer;
            border: 1px solid cornflowerblue;
            background-color: cornflowerblue;
            height: 60px;
            width: 180px;
            color: white;
            font-size: 20px;
            border-radius: 2px 5px 5px 2px;
            font-weight: bold;

        }

        .reg-btn{
          display: flex;
           justify-content: space-evenly !important;
        }

        .section-sub{
          display: flex;
          justify-content: space-around;
          padding-top: 80px;

        }

        .main-sec{
          background: #dcdcdc;
          height: 200px;
        }

        .reg-btn p{
          margin-right: 15px;
          font-size: 15px;
          font-weight: bold;
        }

        .bar-a{
          display: flex;

        }
        .bar-a p{
          margin-right: 15px;
          font-size: 15px;
          font-weight: bold;
        }

        @media only screen and (max-width: 768px) {
        .section-sub{
          display: none;
        }
        .main-sec{
          display: none;
        }
}


@media only screen and (max-width: 768px) {
        .section-mobile{
          display: block;

        }

        #paragraph{
          text-align: center;
        }

        .card-sub-title{
          text-align: center;
        }

        #subscribe3 {
  width: 340px;
  height: 60px;
  background: cornflowerblue;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
  margin-left: 15px;
  margin-top: 10px;
}

.mobi-bg{
  background:  #dcdcdc;
  height: 500px;
}

}

@media(max-width:900px) {
  #cards{
    visibility: hidden;
  }
}


 </style>
    <!----Banner---->
  <section class="home--banner">
    <div class="container">
      <div class="row banner-content align-middle justify-content-center align-items-center">
        <div class="col-xl-12 col-md-12- col-sm-12 col-12">
          <div class="center_item">
            <div class="slogan">
              <h1>Find Genuine and Affordable Land and Houses for Sale.</h1>
              <!--<p>The leading real estate marketplace to buy, rent and sell property in KENYA</p>-->
              <div class="tabs">

                    <form action={{route('landsearch')}} method="GET" id="landss">


                        <div class="top-pop" id="hungry">
                            <div class="selection">
                                <input id="pizza" class="radio-option" name="aaa" value='11' type="radio">
                                <label for="pizza" style=" text-align:center;">Houses</label>
                            </div>
                            <div class="selection" style="margin-left:10px;">
                            <input id="burger" class="radio-option" type="radio" checked>
                            <label for="burger" style=" text-align:center;">Land</label>
                          </div>
                        </div>
                            <div class="tab-content" id="search-bar" >
                                 <div class="tab-pane fade active show" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                                    <div class="row no-gutters">
                                       <div class="col-9 col-md-10">
                                          <div class="input-group">
                                             <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                                <input class="form-control" placeholder="Enter location then click search" type="text" name="city" id="city">
                                          </div>
                                       </div>
                                       <div class="col-3 col-md-2">
                                          <button type="submit" id="search"  class="btn btn-secondary btn-block no-radius">Search</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="suggesstion-box-city" class="sugest-bx" style="display: none">
                                    <ul id="CityList" class="sug-sub-bx">
                                    </ul>
                                </div>
                                 <div class="tab-pane fade" id="offplan" role="tabpanel" aria-labelledby="offplan-tab">
                                    <div class="row no-gutters">
                                       <div class="col-sm-10">
                                          <div class="input-group">
                                             <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                             <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                          </div>
                                       </div>
                                       <div class="col-sm-2">
                                          <button type="submit"  class="btn btn-secondary btn-block no-radius">Search</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                    <div class="row no-gutters">
                                       <div class="col-sm-10">
                                          <div class="input-group">
                                             <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                             <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                          </div>
                                       </div>
                                       <div class="col-sm-2">
                                          <button type="submit" class="btn btn-secondary btn-block no-radius">Search</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="holiday_rent" role="tabpanel" aria-labelledby="holiday_rent-tab">
                                    <div class="row no-gutters">
                                       <div class="col-sm-10">
                                          <div class="input-group">
                                             <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                             <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                          </div>
                                       </div>
                                      <div class="col-sm-2">
                                          <button type="submit" class="btn btn-secondary btn-block no-radius">Search</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                    </form>
                    <form action={{route('homesearch')}} method="POST" id="homess" hidden>

                       {!! csrf_field() !!}

                            <div class="top-pop" id="hungry">

                                 <div class="selection">
                                <input id="pizza" class="radio-option" name="aaa" value='11' type="radio" checked>
                                <label for="pizza" style=" text-align:center;">Houses</label>
                              </div>
                              <div class="selection" style="margin-left:10px;">
                                <input id="burger" class="radio-option" name="aaa" value='10'type="radio" >
                                <label for="burger" style=" text-align:center;">Land</label>
                              </div>
                            </div>
                                <div class="tab-content" id="search-bar" >
                                     <div class="tab-pane fade active show" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                                        <div class="row no-gutters">
                                           <div class="col-9 col-md-10">
                                              <div class="input-group">
                                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                                    <input class="form-control" placeholder="Enter location then click search" type="text" name="city" id="city">
                                              </div>
                                           </div>
                                           <div class="col-3 col-md-2">
                                              <button type="submit" id="search"  class="btn btn-secondary btn-block no-radius">Search</button>
                                           </div>
                                        </div>
                                     </div>
                                     <div id="suggesstion-box-city" class="sugest-bx" style="display: none">
                                        <ul id="CityList" class="sug-sub-bx">
                                        </ul>
                                    </div>
                                     <div class="tab-pane fade" id="offplan" role="tabpanel" aria-labelledby="offplan-tab">
                                        <div class="row no-gutters">
                                           <div class="col-sm-10">
                                              <div class="input-group">
                                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                                 <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                              </div>
                                           </div>
                                           <div class="col-sm-2">
                                              <button type="submit"  class="btn btn-secondary btn-block no-radius">Search</button>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                        <div class="row no-gutters">
                                           <div class="col-sm-10">
                                              <div class="input-group">
                                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                                 <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                              </div>
                                           </div>
                                           <div class="col-sm-2">
                                              <button type="submit" class="btn btn-secondary btn-block no-radius">Search</button>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="tab-pane fade" id="holiday_rent" role="tabpanel" aria-labelledby="holiday_rent-tab">
                                        <div class="row no-gutters">
                                           <div class="col-sm-10">
                                              <div class="input-group">
                                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                                 <input class="form-control" placeholder="Search by Region Location or Project" type="text">
                                              </div>
                                           </div>
                                          <div class="col-sm-2">
                                              <button type="submit" class="btn btn-secondary btn-block no-radius">Search</button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
             </form>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


	</br>


    <!----Banner---->
    <div class="col-12">
        <div style="text-align:center;  margin-top:5px;">
          <h2 style="color:black;">Buying or selling land or houses in Kenya?<br> Get help in every step.</h2>
        </div>
    </div>



    <section class="outer-service--section">
        <div class="outer new-outer container-fluid" >
          <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
              <div class="boxcard--service">
                <h3 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Search  Property</a></h3>
                 <img src="{{ asset('public/asset/img/search.png') }}" alt="search-logo" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                <p><a href="{{ url('/') }}/front-properties-listing?city=&propertyfor=&propertytype=10">
                @if($HomeTabDetails!="")
                <?php echo strip_tags($HomeTabDetails->search_property); ?>
                @endif
                </a>
                </p>
                 <div class="read-txt-more-service"><a href="{{ url('/') }}/front-properties-listing?city=&propertyfor=&propertytype=10"class="btn btn-read-services">Start Search</a></div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="boxcard--service">
                <h3 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Arrange to View</a></h3>
                 <img src="{{ asset('public/asset/img/trans&own.png') }}" alt="search-arrange-to- view" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                <p><a  href="{{route('agent_finder')}}" >
                @if($HomeTabDetails!="")
                <?php echo strip_tags($HomeTabDetails->arrange_to_view); ?>
                @endif
                </a>
                </p>
                    <div class="read-txt-more-service"><a  href="{{route('agent_finder')}}" class="btn btn-read-services">Find Agent</a></div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="boxcard--service">
                    <h4 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Conduct Due Diligence</a></h3>
                     <img src="{{ asset('public/asset/img/verify.png') }}" alt="conduct-due-deligence" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                    <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
                      @if($HomeTabDetails!="")
                    <?php echo strip_tags($HomeTabDetails->conduct_due_diligence); ?>
                    @endif </a></p>
                     <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" class="btn btn-read-services">Learn How</a></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="boxcard--service">
                <h3 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Transfer and Own</a></h3>
                <img src="{{ asset('public/asset/img/image_11zon.png') }}" alt="Transfer-own" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
                  @if($HomeTabDetails!="")
                <?php echo strip_tags($HomeTabDetails->transfer_and_own); ?>
                @endif
                </a></p>
                 <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" class="btn btn-read-services">Learn more</a></div>
              </div>
            </div>
          </div>
        </div>

        <!--cookie modal-->


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


        <div style="text-align:center;  margin-top:20px; background-color:#fffaf0;">
<h2>Property for sale in Kenya</h2>

<div class="row">
  <div class="column">
    <p><a href="https://premieragent.co.ke/land-for-sale?city=athi+river">Athi River</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=joska">Joska</a></p>
    <p><a href="https://premier agent.co.ke/land-for-sale?city=juja">Juja</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kajiado">Kajiado</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kamakis">Kamakis</a></p>
  </div>
  <div class="column">
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kamulu">Kamulu</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kantafu">Kantafu</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=karen">Karen</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kiambu">Kiambu</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kirinyaga">Kirinyaga</a></p>
  </div>
  <div class="column">
    <p><a href="https://premieragent.co.ke/land-for-sale?city=kitengela">Kitengela</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=komarock">Komarock</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=machakos">Machakos</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=malaa">Malaa</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=malindi">Malindi</a></p>
  </div>
  <div class="column">
    <p><a href="https://premieragent.co.ke/land-for-sale?city=matuu">Matuu</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=naivasha">Naivasha</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=nakuru">Nakuru</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=ngong">Ngong</a></p>
    <p><a href="https://premieragent.co.ke/land-for-sale?city=ruiru">Ruiru</a></p>
  </div>
</div>
    </section>

 <div class="main-sec">
  <div class="section-sub">
    <div class="bar-a">
      <div>
     <p class="card-sub-title">Join thousands of other <br>happy subscribers!</p>
      </div>
     <div class="form-group">
       <form class="sasaa" method="post" action="/subscribes">
           {{ csrf_field() }}
         <input type="email" name="email" id="useremail-id" placeholder="Enter your email">
         <button type="submit" id="subscribe">
           Subscribe
         </button>
       </form>
     </div>
    </div>


    <div class="reg-btn">
      <div id="paragraph">
        <p>List with Premier Agent
         Sign up in minutes for FREE and market <br>your properties on Kenya's fastest growing property portal.</p>
      </div>
       <div >
     <a href="{{ route('login') }}"> <button class="btn2">Register</button></a>
       </div>
    </div>
   </div>
 </div>


 <div class="mobi-bg">
  <div class="section-mobile">
    <div style="text-align: center;">
      <p class="card-sub-title" style="font-weight: bold; font-size:25px;">Join thousands of other happy subscribers!</p>
          </div>
          <form  method="post" action="/subscribes">
            {{ csrf_field() }}
            <input type="email" name="email" id="useremail-id" placeholder="Enter your email" style="width: 340px; height:60px; margin-left: 15px;"><br>
            <button type="submit" id="subscribe3">Subscribe</button>
          </form>

          <div class="reg" style="text-align: center;">
            <p  style="font-weight: bold; font-size:22px; padding-top:15px;">List with Premier Agent Sign up in minutes for FREE and market
              your properties on Kenya's fastest growing property portal.</p>
          </div>
              <div>
       <a href="{{ route('login') }}" > <button id="subscribe3">Register</button></a>
        </div>

  </div>

 </div>

  <!----About Gallery---->

  <!----About gallery---->

  <!-- Modal -->
            <div id="requestmodal" class="modal fade" role="dialog">
              <div class="modal-dialog">x

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header request-header">
                    <h4 class="modal-title modalTitle-reqst">Request Form</h4>
                    <button type="button" class="close btn px-2" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                        <div id="Message">
                        </div>
                  </div>
                <form action ="{{ action('FrontController@UserLeadsSubmit') }}" method="post" id="UserLeadsSubmit">
                  <div class="modal-body">
                    <div class="requstmoadl--body">
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                          <input type = "hidden" name="AjaxSubmit" value ="AjaxSubmit">
                          <input type="hidden" name="userid" id="agent_user_id" value="">
                            <div class="form-group">
                                <input type="text" value="" class="form-control foem--requestInput" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" value="" class="form-control foem--requestInput" name="contact" placeholder="Phone No." required>
                            </div>
                            <div class="form-group">
                                <input type="email" value="" class="form-control foem--requestInput" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Write here..." class="form-control requst-txtarea" name="message" required></textarea>
                            </div>
                    </div>
                  </div>
                  <div class="modal-footer footer--reqst py-2">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default-theme">Submit</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>


            <style>

             @media screen and (max-width: 600px) {
  .boxcard--service h4 a {
     color:cornflowerblue;
  }

}

                #hungry .selection {
  margin-bottom: 1em;
}

#hungry .selection label {
  display: inline-block;
  width:8em;
  background-color: #ffffff;
  border-radius: 20px;
  color: #003366;
  padding: 0.5em;
  cursor: pointer;
}

.top-pop{
    display:flex;

}

#hungry .selection label:hover {
  background-color: #007bf;


}

#hungry .selection input[type=radio] {
  display: none;
}

#hungry .selection input[type=radio]:checked ~ label {
  background-color: #0700d2;
  color: #ffffff !important;
}

@media only screen and (max-width: 768px) {
  #text-home {
    display: block;
  }
}



            </style>
  <!-- Slider three -->
  @section('js')
  <script src="{{ asset('clone/js/PropertyJS.js') }}"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
        $('input:radio[name=aaa]').change(function () {

            if ($("input[name='aaa']:checked").val() == 10) {
                 $("#homess").attr("hidden",true);
           $("#landss").attr("hidden",false);
            }
            if ($("input[name='aaa']:checked").val() == 11) {
                 $("#landss").attr("hidden",true);
           $("#homess").attr("hidden",false);
            }
        });

    });
    $(document).on("click",'.RequestModal',function(){
      UserId = $(this).attr("id");
      $("#agent_user_id").val(UserId);
      $("#requestmodal").modal("show");

    });

  </script>
  <script type="text/javascript">
  var GetCityOfPropertyAjax = "{{ route('GetCityOfPropertyAjax') }}";
  var UserLeadsSubmitAjax = "{{ route('user_leads_send') }}";  // User Leads Submit  ajax url path
  document.addEventListener("scroll", function testScroll() {
    const searchBar = document.getElementById("search-bar")
    if(window.scrollY > 300){
      searchBar.style.position = 'fixed'
      searchBar.style.top = '1px'
      searchBar.style.width = '80%'
    } else {
      searchBar.style.position = 'static'
    }
  })

  function actionToggle() {
    var action = document.querySelector('.action');
    action.classList.toggle('active')
    console.log()
}
</script>
  @endsection
@endsection



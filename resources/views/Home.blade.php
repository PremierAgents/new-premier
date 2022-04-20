@extends('layouts.app')

@section('content')

 <section class="home--banner">
    <div class="container">
      <div class="row banner-content align-middle justify-content-center align-items-center">
        <div class="col-xl-12 col-md-12- col-sm-12 col-12">
          <div class="center_item">
            <div class="slogan">
              <h1>Find Genuine and Affordable Land and Houses for Sale.</h1>
              <!--<p>The leading real estate marketplace to buy, rent and sell property in KENYA</p>-->
              <div class="tabs">
                    <form action= method="GET" id="landss">
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
                                          <button type="submit" id="search"  class="btn btn-secondary btn-block no-radius" style="width: 70px;">Search</button>
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
                    <form action= method="POST" id="homess" hidden>
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
  <!----text--->
  <div class="col-12">
    <div class="slogan-sale">
      <h2>Buying or selling land or houses in Kenya?<br> Get help in every step.</h2>
    </div>
</div>

<!--section card-->

<section class="outer-service--section">
    <div class="outer new-outer container-fluid" >
        <div class="row">
          <div class="col-12 col-md-6 col-xl-3">
            <div class="boxcard--service">
              <h3 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Search  Property</a></h3>
               <img src="https://www.premieragent.co.ke/public/asset/img/search.png" alt="search-logo" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
              <p><a href="{{ url('/') }}/front-properties-listing?city=&propertyfor=&propertytype=10">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptas maxime odio. Minus aliquid optio tempora nam eaque quod aspernatur, nisi maxime sit, ducimus quis, ipsam magnam animi assumenda aliquam!
              </a>
              </p>
               <div class="read-txt-more-service"><a href="{{ url('/') }}/front-properties-listing?city=&propertyfor=&propertytype=10"id="btn btn-read-services">Start Search</a></div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="boxcard--service">
              <h3 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Arrange to View</a></h3>
               <img src="https://www.premieragent.co.ke/public/asset/img/trans&own.png" alt="search-arrange-to- view" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
              <p><a  href="" >
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit in aperiam modi! Cum corporis sit, blanditiis ducimus voluptates voluptatem sed ad. Dicta non quod dolorem modi aliquam alias cumque facilis.
              </a>
              </p>
                  <div class="read-txt-more-service"><a  href="" id="btn btn-read-services">Find Agent</a></div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
              <div class="boxcard--service">
                  <h4 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Conduct Due Diligence</a></h3>
                   <img src="https://www.premieragent.co.ke/public/asset/img/verify.png" alt="conduct-due-deligence" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                  <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti cupiditate beatae aperiam, at quam rem dignissimos tempore perspiciatis similique nesciunt optio sequi voluptas obcaecati rerum autem accusantium assumenda commodi?
                    </a></p>
                   <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" id="btn btn-read-services">Learn How</a></div>
              </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="boxcard--service">
              <h3 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Transfer and Own</a></h3>
              <img src="https://www.premieragent.co.ke/public/asset/img/image_11zon.png" alt="Transfer-own" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
              <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga accusantium doloribus architecto ipsa et eum sed sint ipsam, voluptas facere minima, debitis culpa harum deleniti voluptatum nostrum libero dolores impedit?
              </a></p>
               <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" id="btn btn-read-services">Learn more</a></div>
            </div>
          </div>
        </div>
      </div>
</section>
<!---property for sale sec-->
 <center><h2 class="prop-head">Property for sale in Kenya</h2></center>
<div id="propeties-sale">

    <div ">
      <p><a href="https://premieragent.co.ke/land-for-sale?city=athi+river">Athi River</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=joska">Joska</a></p>
      <p><a href="https://premier agent.co.ke/land-for-sale?city=juja">Juja</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kajiado">Kajiado</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kamakis">Kamakis</a></p>
    </div>
    <div >
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kamulu">Kamulu</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kantafu">Kantafu</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=karen">Karen</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kiambu">Kiambu</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kirinyaga">Kirinyaga</a></p>
    </div>
    <div >
      <p><a href="https://premieragent.co.ke/land-for-sale?city=kitengela">Kitengela</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=komarock">Komarock</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=machakos">Machakos</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=malaa">Malaa</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=malindi">Malindi</a></p>
    </div>
    <div >
      <p><a href="https://premieragent.co.ke/land-for-sale?city=matuu">Matuu</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=naivasha">Naivasha</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=nakuru">Nakuru</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=ngong">Ngong</a></p>
      <p><a href="https://premieragent.co.ke/land-for-sale?city=ruiru">Ruiru</a></p>
    </div>
  </div>

  <!--featured blod-->
  <center><h2 class="prop-head">Featured Blog</h2></center>
  {{-- <div class="featured-blog">
    <div class="card" style="width: 22rem;">
        <img src="https://www.premieragent.co.ke/public/images/blogs/1650014434.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 22rem;">
        <img src="https://www.premieragent.co.ke/public/images/blogs/1649830078.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 22rem;">
        <img src="https://www.premieragent.co.ke/public/images/blogs/1649267693.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 22rem;">
        <img src="https://www.premieragent.co.ke/public/images/blogs/1649183503.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </div> --}}
  <div class="outer new-outer container-fluid" >
    <div class="row">
      <div class="col-12 col-md-6 col-xl-3">
        <div class="boxcard--service">
           {{-- <img src="https://www.premieragent.co.ke/public/images/blogs/1649267693.jpg" alt="search-logo" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/> --}}
          <p><a href="">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptas maxime odio. Minus aliquid optio tempora nam eaque quod aspernatur, nisi maxime sit, ducimus quis, ipsam magnam animi assumenda aliquam!
          </a>
          </p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-xl-3">
        <div class="boxcard--service">
           {{-- <img src="https://www.premieragent.co.ke/public/asset/img/trans&own.png" alt="search-arrange-to- view" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/> --}}
          <p><a  href="" >
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit in aperiam modi! Cum corporis sit, blanditiis ducimus voluptates voluptatem sed ad. Dicta non quod dolorem modi aliquam alias cumque facilis.
          </a>
          </p>
              {{-- <div class="read-txt-more-service"><a  href="" id="btn btn-read-services">Find Agent</a></div> --}}
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3">
          <div class="boxcard--service">
              {{-- <h4 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Conduct Due Diligence</a></h3> --}}
               {{-- <img src="https://www.premieragent.co.ke/public/asset/img/verify.png" alt="conduct-due-deligence" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/> --}}
              <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti cupiditate beatae aperiam, at quam rem dignissimos tempore perspiciatis similique nesciunt optio sequi voluptas obcaecati rerum autem accusantium assumenda commodi?
                </a></p>
               {{-- <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" id="btn btn-read-services">Learn How</a></div> --}}
          </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <div class="boxcard--service">
          {{-- <h3 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Transfer and Own</a></h3> --}}
          {{-- <img src="https://www.premieragent.co.ke/public/asset/img/image_11zon.png" alt="Transfer-own" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/> --}}
          <p><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga accusantium doloribus architecto ipsa et eum sed sint ipsam, voluptas facere minima, debitis culpa harum deleniti voluptatum nostrum libero dolores impedit?
          </a></p>
           {{-- <div class="read-txt-more-service"><a href="https://premieragent.co.ke/blog/The-Key-Steps-in-the-Process-of-Buying-Land-in-Kenya/15" id="btn btn-read-services">Learn more</a></div> --}}
        </div>
      </div>
    </div>
  </div>

@endsection

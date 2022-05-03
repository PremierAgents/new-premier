@extends('layouts.app')

@section('content')

 <section class="home--banner">
    <div class="container">
      <div class="row banner-content align-middle justify-content-center align-items-center">
        <div class="col-xl-12 col-md-12- col-sm-12 col-12">
          <div class="center_item">
            <div class="slogan">
              <h1>Find Genuine and Affordable Land and Houses for Sale.</h1>
             <div class="filter">
                <ul>
                    <li>
                        <a> <span id="box-one" class="normal">Buy</span></a>
                    </li>
                    <li>
                        <a><span id="box-two" class="normal">Rent</span></a>
                    </li>
                    <li>
                        <a> <span id="box-three" class="normal">Sold</span></a>
                    </li>
                    <li>
                    </li>
                  </ul>
                  <div class="line">
                      <hr>
                  </div>
                   <div class="search-input">
                       <div class="form-sec">
                        <form>
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input  type="text" placeholder="Search Suburb,Postcode or state" ">
                          </form>
                       </div>
                        <div class="filt-btn">
                             <div>
                                <span><i class="fas fa-filter" aria-hidden="true"></i>filters</span>
                             </div>
                            <div class="search-btn">
                                <button>Search</button>
                            </div>
                        </div>
                   </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----text--->
  {{-- <div class="col-12">
    <div class="slogan-sale">
      <h2>Buying or selling land or houses in Kenya?<br> Get help in every step.</h2>
    </div>
</div> --}}

<!--section card-->

<section class="outer-service--section">
    <div class="outer new-outer container-fluid" >
        <div class="row">
          <div class="col-12 col-md-6 col-xl-4">
            <div class="boxcard--service">
               <img src="https://www.premieragent.co.ke/public/asset/img/search.png" alt="search-logo" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
               <h4 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Buy Home</a></h4>
              <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptas maxime odio. Minus aliquid optio tempora nam eaque quod aspernatur, nisi maxime sit, ducimus quis, ipsam magnam animi assumenda aliquam!
              </p>
              <button class="btn">Search</button>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="boxcard--service">
               <img src="https://www.premieragent.co.ke/public/asset/img/trans&own.png" alt="search-arrange-to- view" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
               <h4 id="text-home"><a style="color: cornflowerblue; font-size:px;line-height:32px">Sell a Home</a></h4>
              <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit in aperiam modi! Cum corporis sit, blanditiis ducimus voluptates voluptatem sed ad. Dicta non quod dolorem modi aliquam alias cumque facilis.
              </p>
              <button class="btn">Find Agent</button>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
              <div class="boxcard--service">
                   <img src="https://www.premieragent.co.ke/public/asset/img/verify.png" alt="conduct-due-deligence" loading="lazy" style="width:100px; margin-left:auto; margin-right:auto;"/>
                   <h4 id="text-home"><a  style="color: cornflowerblue; font-size:px;line-height:32px">Rent a Home</a></h3>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti cupiditate beatae aperiam, at quam rem dignissimos tempore perspiciatis similique nesciunt optio sequi voluptas obcaecati rerum autem accusantium assumenda commodi?
                    </p>
                    <button class="btn">Learn How</button>
              </div>
          </div>
        </div>
      </div>
</section>
<!--new projects-->
<div class="viewed">
    <div class="container2">
        <div class="row">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title">New Projects</h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">Ksh<span></span></div>
                                    <div class="bbb_viewed_name"><a href="#">Name</a></div>
                                    <div class="bbb_viewed_name"><a href="#">Description</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---property for sale sec-->

  <!--featured blod-->
  <h2 class="prop-head">Featured Blog</h2>
  <div class="container3s">
	<div class="mhn-slide owl-carousel">
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?paper">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>Paper is a thin material produced by pressing together moist fibres of cellulose pulp derived from wood, rags or grasses, and drying them into flexible sheets.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?fire">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>Fire is the rapid oxidation of a material in the exothermic chemical process of combustion, releasing heat, light, and various reaction products.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?nature">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Headinge</h4>
					<p>Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?video">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>Video is an electronic medium for the recording, copying, playback, broadcasting, and display of moving visual media.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?hiking">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Headding</h4>
					<p>Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?future">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>The future is the time after the present. Future or The Future may also refer to: Futures contract, a standardized financial contract; Future (programming) · Future tense, in grammar. Contents.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?music">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are pitch rhythm dynamics (loudness and softness), and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound).</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?money">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Headding</h4>
					<p>Money is any item or verifiable record that is generally accepted as payment for goods and services and repayment of debts in a particular country or socio-economic context.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>
		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?happiness">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>In psychology, happiness is a mental or emotional state of well-being which can be defined by, among others, positive or pleasant emotions ranging from contentment to intense joy.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>
                </div>
			</div>
		</div>

		<div class="mhn-item">
			<div class="mhn-inner">
				<img src="https://source.unsplash.com/600x400/?sports">
				<div class="mhn-img"><div class="loader-circle"><div class="loader-stroke-left"></div><div class="loader-stroke-right"></div></div></div>
				<div class="mhn-text">
					<h4>Heading</h4>
					<p>A sport is commonly defined as an athletic activity or skill and involves a degree of competition, such as tennis or basketball. Some games and many kinds of racing are called sports.</p>
				</div>
                <div class="blog-det">
                    <div>
                        <span>Date</span>
                    </div>
                    <div>
                        <span>Author</span>
                    </div>

                </div>
			</div>
		</div>
	</div>

    <!--subscribe-->
    <div class="property">
        <div class="row" id="card-info">
            <div class="col-sm-5">
              <div class="card" id="card-info">
                <div class="card-body">
                  <h5 class="card-title">About premier Agent</h5>
                  <p class="card-text"> Hi, we're premier Agent, it's nice to meet you!
                  As Kenya's number 1 property portal, we're passionate
                    about helping people find their perfect homes. In addition,
                    we provide Kenya's Real Estate Industry with an
                    renters searcr ing for property online.
                    We pride ourselves on delivering a great user experience and innovative search tools, so if you have any feedback you’d like to give us, we’d love to hear from you. Please get in touch!</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" id="card-info">
                <div class="card-body">
                  <h5 class="card-title">List on premier Agent</h5>
                  <p class="card-text">Sign up as a Real Estate Agency with
                    Property24 and market your properties on
                    Kenya's leading property porta l
                     ontact our team to learn more about the
                        benefits and services we offer.</p>

                        <button class="btn">Learn How</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card" id="card-info">
                  <div class="card-body">
                    <h5 class="card-title">Alerts</h5>
                    <p class="card-text">Be the fi rst to sec new
                        properties for sale and to
                        rent in Kenya.
                         Sign up to premier Agent and get
                            customised property alerts in
                            your in box.</p>
                            <button class="btn">Sign In</button>
                  </div>
                </div>
             </div>
        </div>
        </div>
</div>



@endsection

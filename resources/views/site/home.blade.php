@extends('layouts.site')

@section('home')

<div id="carouselExampleControls" class="carousel homeCarousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item slideItem1 active">
        <header class="header homeHeader homeHeaderImage1 flexCenter">
            <div class="makanContainer">
                <div class="content">
                    <h1 class="f36 primaryColor fBold" data-i18n="homeHeader1">Smart investment with the highest ROI </h1>
                    <a href="#projects" class="makanBtn" data-i18n="headerBtn">Explore opportunities</a>
                </div>
            </div>
        </header>
      </div>
      <div class="carousel-item slideItem1">
        <header class="header homeHeader homeHeaderImage2 flexCenter">
            <div class="makanContainer">
                <div class="content">
                    <h1 class="f36 primaryColor fBold" data-i18n="homeHeader2" >10% Fixed ROI</h1>
                    <a href="#projects" class="makanBtn" data-i18n="headerBtn">Explore opportunities</a>
                </div>
            </div>
        </header>
      </div>
      <div class="carousel-item slideItem1">
        <header class="header homeHeader homeHeaderImage3 flexCenter">
            <div class="makanContainer">
                <div class="content">
                    <h1 class="f36 primaryColor fBold" data-i18n="homeHeader3">More Than 500 investments</h1>
                    <a href="#projects" class="makanBtn" data-i18n="headerBtn">Explore opportunities</a>
                </div>
            </div>
        </header>
      </div>
      <div class="carousel-item slideItem1">
        <header class="header homeHeader homeHeaderImage4 flexCenter">
            <div class="makanContainer">
                <div class="content">
                    <h1 class="f36 primaryColor fBold" data-i18n="homeHeader4">50 Strategic partners</h1>
                    <a href="{{ route('partners') }}" class="makanBtn"  data-i18n="headerBtn2">Our Partners</a>
                </div>
            </div>
        </header>
      </div>
      <div class="carousel-item slideItem1">
        <header class="header homeHeader homeHeaderImage5 flexCenter">
            <div class="makanContainer">
                <div class="content">
                    <h1 class="f36 primaryColor fBold" data-i18n="homeHeader5">We are in 5 Countries</h1>
                    <a href="{{ route('contact') }}" class="makanBtn" data-i18n="headerBtn3">Contact Us</a>
                </div>
            </div>
        </header>
      </div>
    </div>
    <button class="carousel-control-prev headerControls" id="homeSliderBtn" type="button" data-target="#carouselExampleControls"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next headerControls" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
  </div>
<section class="main">
    <div class="makanContainer">
        <div class="aboutSection">
            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/3763190/pexels-photo-3763190.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="About Section Image" title="About Section Image" class="aboutSectionImage">
                </div>
                <div class="col-md-6 aboutSectionContent toRtl">
                    <h5 data-i18n="aboutSectionTitle">Who We Are</h5>
                    <h2 class="tright mt-3" data-i18n="aboutSectionTitle2">Where Smart Investment Remains Your Lifetime Choice !!! </h2>
                    <p class="text tright mt-3" data-i18n="aboutSectionText">Makan Investment Group is your leading investment
                        destination in the Gulf region, providing an ideal opportunity for investors who are looking to make smart investments and build a diverse portfolio with the highest possible returns.
{{-- The group was founded by an expert team in investment across various sectors such as real estate, financial markets, technology, and startups, ensuring investment decisions are made based on real data and analysis figures.
The group has extensive experience in Gulf markets, particularly in Saudi Arabia and the UAE, and has established strategic partnerships with major companies and government institutions in the region to guarantee access to the best investment opportunities. --}}


                    </p>
                    <a href="{{ route('about') }}" type="button" class="makanBtn mt-3" data-i18n="readMore">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="amenities toRtl">
        <div class="flexCenter toRtl">
            <div class="content">
                <h2 class="primaryColor f28 fBold" data-i18n="serviceHeadline">Our Services</h2>
            </div>
            {{-- <button type="button" class="makanBtn" >Discover more </button> --}}
        </div>
        <h4 class="primaryColor f32 tright text-center mt-3" data-i18n="servicesSectionTitle">Our investment group offers a comprehensive range of services <br> designed to meet the diverse needs of our clients</h4>
        <div id="carouselExampleControls2" class="carousel slide serviceSlideMobile" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="cards flexEvenly">
                    <a href="/services#Investment_Management" class="card">
                        <img src="{{ asset('assets/images/service1.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content tright toRtl">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle1">Investment Management</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText1">We develop customized investment strategies tailored to your specific financial objectives, whether you're an individual or a business.
                            </p>
                        </div>
                    </a>
                    <a href="/services#Investment_Consulting" class="card">
                        <img src="{{ asset('assets/images/service2.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle2">Investment Consulting</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText2">Our team of experts provides personalized advice, helping you make informed and strategic investment decisions.
                            </p>
                        </div>
                    </a>

                </div>
              </div>
              <div class="carousel-item">
                <div class="cards flexEvenly">
                    <a href="/services#Real_Estate" class="card">
                        <img src="{{ asset('assets/images/service3.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle3">Real Estate Investment</b>
                            <p class="primaryColor tright f18"data-i18n="servicesSectionText3">We present lucrative opportunities to invest in high-potential real estate projects, particularly within the Gulf region, with a focus on the UAE.</p>
                        </div>
                    </a>
                    <a href="/services#Financial_Market" class="card">
                        <img src="{{ asset('assets/images/service4.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright"data-i18n="serviceCardTitle4">Financial Market Investment</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText4">We offer a variety of investment options, including stocks, bonds, mutual funds, and access to the stock market, ensuring diversified financial growth.</p>
                        </div>
                    </a>

                </div>
              </div>
              <div class="carousel-item">
                <div class="cards flexEvenly">
             
                    <a href="/services#Tourism" class="card">
                        <img src="{{ asset('assets/images/service6.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle6">Tourism and Hospitality Investment</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText6">We identify and offer attractive investment opportunities in hotels, resorts, and tourist destinations, capitalizing on the region’s growing hospitality sector.
                            </p>
                        </div>
                    </a>

                </div>
              </div>
            </div>
            <div class="controlsSlide2">
                <button class="carousel-control-prev prev2" type="button" data-target="#carouselExampleControls2" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </button>
                 <button class="carousel-control-next next2" type="button" data-target="#carouselExampleControls2" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </button>
            </div>
        </div>


        <div id="carouselExampleControls3" class="carousel slide serviceSlideDesktop" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="cards flexEvenly">
                    <a href="/services#Investment_Management" class="card">
                        <img src="{{ asset('assets/images/service1.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content tright toRtl">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle1">Investment Management</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText1">We develop customized investment strategies tailored to your specific financial objectives, whether you're an individual or a business.
                            </p>
                        </div>
                    </a>
                    <a href="/services#Investment_Consulting" class="card">
                        <img src="{{ asset('assets/images/service2.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle2">Investment Consulting</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText2">Our team of experts provides personalized advice, helping you make informed and strategic investment decisions.
                            </p>
                        </div>
                    </a>
                    <a href="/services#Real_Estate" class="card">
                        <img src="{{ asset('assets/images/service3.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle3">Real Estate Investment</b>
                            <p class="primaryColor tright f18"data-i18n="servicesSectionText3">We present lucrative opportunities to invest in high-potential real estate projects, particularly within the Gulf region, with a focus on the UAE.</p>
                        </div>
                    </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="cards flexEvenly">

                    <a href="/services#Financial_Market" class="card">
                        <img src="{{ asset('assets/images/service4.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright"data-i18n="serviceCardTitle4">Financial Market Investment</b>
                            <p class="primaryColor tright f18"data-i18n="servicesSectionText4" >We offer a variety of investment options, including stocks, bonds, mutual funds, and access to the stock market, ensuring diversified financial growth.</p>
                        </div>
                    </a>
               
                    <a href="/services#Tourism" class="card">
                        <img src="{{ asset('assets/images/service6.jpg') }}" alt="Amenities Card Image" title="Amenities Card Image" loading="lazy">
                        <div class="content toRtl tright">
                            <i></i>
                            <b class="tright" data-i18n="serviceCardTitle6">Tourism and Hospitality Investment</b>
                            <p class="primaryColor tright f18" data-i18n="servicesSectionText6">We identify and offer attractive investment opportunities in hotels, resorts, and tourist destinations, capitalizing on the region’s growing hospitality sector.
                            </p>
                        </div>
                    </a>
                </div>
              </div>
            </div>
            <div class="controlsSlide2">
                <button class="carousel-control-prev prev2" type="button" data-target="#carouselExampleControls3" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </button>
                 <button class="carousel-control-next next2" type="button" data-target="#carouselExampleControls3" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </button>
            </div>
        </div>
    </div>
    <div class="makanContainer">
        <div class="projects" id="projects">
            <div class="flexBetween toRtl">
                <div class="content flexCenter content">
                    {{-- <p class="headline" data-i18n="projects">Projects</p> --}}
                    <h2 class="primaryColor f28 fBold" data-i18n="projectsTitle">Our companies</h2>
                </div>
                {{-- <button type="button" class="makanBtn" data-i18n="projectsTitle">View All Projects</button> --}}
            </div>
            <div class="latestProjects">
                <div class="ProjectsCard">
                    <div class="trendAqar text-center"><span>TREND AQAR <br>
                        <p data-i18n="project1">
                            TREND AQAR is a leading real estate broker firm known for its innovative services and client-centric approach. Specializing in residential and commercial properties, their experienced team offers expert guidance in buying, selling, and leasing, ensuring clients achieve their real estate goals with confidence and integrity.

                        </p>
                    </span></div>
                    <div class="fourWeeks text-center"><span>FOUR WEEKS <br>
                        <p data-i18n="project2">
                            FOUR WEEKS is a premier tourist booking management firm specializing in seamless travel experiences. From booking flights and hotels to curating personalized tourist programs, their expert team ensures every detail is covered. With a focus on convenience and customer satisfaction, FOUR WEEKS makes planning unforgettable trips effortless.</span></div>
                    <div class="alfa text-center"><span>ALFA TECH <br>
                        <p data-i18n="project3">
                            ALPHA Tec is a cutting-edge digital game creation, development, and publishing company dedicated to crafting immersive gaming experiences. With a talented team of developers and designers, ALPHA Tec combines creativity and technology to produce innovative games that captivate players and push the boundaries of interactive entertainment.

                        </p>
                    </span></div>
                    <div class="makan text-center"><span>MAKAN THE LINE <br>
                        <p data-i18n="project4">
                            MAKAN THE LINE is a premier property management firm dedicated to enhancing the value and appeal of residential and commercial properties. With a focus on exceptional service, they offer tailored solutions including leasing, maintenance, and tenant relations, ensuring efficient management and optimal satisfaction for property owners and tenants alike.

                        </p>
                    </span></div>
                    <div class="ersal text-center"><span>ERSAL MARKETING <br>
                        <p data-i18n="project5">
                            ERSAL MARKETING is a dynamic marketing agency that specializes in creating impactful strategies to elevate brands and drive growth. With expertise in digital marketing, social media management, and content creation, their innovative team collaborates closely with clients to develop tailored solutions that resonate with target audiences and deliver measurable results.

                        </p>
                    </span></div>
                </div>
            </div>
        </div>
        <div class="partnersSection" >
            <h2 class="f36 text-center primaryColor" data-i18n="partners">Our Partners</h2>
            <div class="partners_logos">
              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/1.png" alt="AZIZI Logo" title="AZIZI Logo" loading="lazy">
              </a>
              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/2.png" alt="EMAAR Logo" title="EMAAR Logo" loading="lazy">
              </a>
              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/3.png" alt="TFG Logo" title="TFG Logo" loading="lazy">
              </a>
              </div>
            <div class="partners_logos">

              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/4.png" alt="BINGHATTI Logo" title="BINGHATTI Logo" loading="lazy">
              </a>
              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/5.png" alt="ORBIS Logo" title="ORBIS Logo" loading="lazy">
              </a>
              <a href="{{ route('partners') }}" class="flexCenter">
                <img src="assets/images/partners/6.png" alt="DAMAC Logo" title="DAMAC Logo" loading="lazy">
              </a>
            </div>
          </div>
        <div class="latestNews">
            {{-- <p class="headline text-center m-auto" data-i18n="Blog">Blog</p> --}}
            <h2 class="primaryColor f36 fBold text-center mt-2" data-i18n="LatestNews">Latest News</h2>
            <div class="row mt-5">
                <div class="col-md-4 blogCardParent">
                    <div class="blogCard">

                        <img src="{{ asset('assets/images/blogCard.png') }}" alt="Blog Image" title="Blog Image" loading="lazy">
                        <h5 class="text-dark tright f24 fBold" data-i18n="blogTitle1">5 Popular Investment Strategies 2024</h5>
                        <p class="text-dark tright" data-i18n="blogText1">Investing can help you build wealth and protect your income from inflation, but getting started can be tough. Here are the solutions.<br><br> <a href="#" class="primaryColor" data-i18n="readMore">Read More</a></p>

                    </div>
                </div>
                <div class="col-md-4 blogCardParent">
                    <div class="blogCard">
                        <img src="{{ asset('assets/images/BlogCard2.png') }}" alt="Blog Image" title="Blog Image" loading="lazy">
                        <h5 class="text-dark f24 fBold tright" data-i18n="blogTitle2">Muhammad BinGhatti: Beyond Branded Real Estate</h5>
                        <p class="text-dark tright" data-i18n="blogText2">BinGhatti believes factors like Dubai’s growing population, tenant demand, and yields still outpacing other major international financial centers will insulate the luxury market.<br><br> <a href="#" class="primaryColor" data-i18n="readMore">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 blogCardParent">
                    <div class="blogCard">
                        <img src="{{ asset('assets/images/BlogCard3.png') }}" alt="Blog Image" title="Blog Image" loading="lazy">
                        <h5 class="text-dark f24 fBold tright" data-i18n="blogTitle3">Major Gulf markets retreat on heightened regional tensions</h5>
                        <p class="text-dark tright" data-i18n="blogText3">Major stock markets in the Gulf declined in early trade on Wednesday after Iran's ballistic missile strike on Israel raised fears of a wider regional conflict.<br><br> <a href="#" class="primaryColor" data-i18n="readMore">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection

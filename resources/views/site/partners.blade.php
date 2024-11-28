@extends('layouts.site')

@section('partners')
<header class="header partnersHeader flexCenter">
    <h1 class="f36 text-center primaryColor" data-i18n="partners">Our Partners</h1>
</header>

<section class="content">
    <div class="makanContainer">
        <div class="projects">
            <div class="flexBetween toRtl">
                <div class="content">
                    <h2 class="primaryColor f28 fBold" data-i18n="partners">Our Partners</h2>
                </div>
            </div>
            <div class="latestProjects">
                <div class="ProjectsCard list-group" id="list-tab" role="tablist">
                    <div class="azizi list-group-item list-group-item-action active" id="list-azizi-list" data-toggle="list" href="#list-azizi" role="tab" aria-controls="azizi"><span>Azizi Development</span></div>
                    <div class="emaar list-group-item list-group-item-action" id="list-emaar-list" data-toggle="list" href="#list-emaar" role="tab" aria-controls="emaar"><span>Emaar Development</span></div>
                    <div class="tfg list-group-item list-group-item-action" id="list-tfg-list" data-toggle="list" href="#list-tfg" role="tab" aria-controls="tfg"><span>The First Group</span></div>
                    <div class="Binghatti list-group-item list-group-item-action" id="list-Binghatti-list" data-toggle="list" href="#list-Binghatti" role="tab" aria-controls="Binghatti"><span>Binghatti Development</span></div>
                    <div class="Sobha list-group-item list-group-item-action" id="list-Sobha-list" data-toggle="list" href="#list-Sobha" role="tab" aria-controls="Sobha"><span>Sobha Development</span></div>
                    <div class="Damac list-group-item list-group-item-action" id="list-Damac-list" data-toggle="list" href="#list-Damac" role="tab" aria-controls="Damac"><span>Damac Development</span></div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active partnerCard" id="list-azizi" role="tabpanel" aria-labelledby="list-azizi-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/1.png') }}" alt="Azizi Logo" title="Azizi Logo">
                            <p class="f36 text-center primaryColor">Azizi Development</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="azizi">Azizi Developments is a leading real estate developer in Dubai, founded in 2007 by Mirwais Azizi <br> <br>
                                The company is recognized for its focus on creating luxurious residential projects that cater to the needs of modern families, characterized by contemporary designs and high-quality construction. <br><br>
                                Azizi has a diverse portfolio of residential and commercial developments and is committed to providing exceptional service to its customers through a dedicated team with extensive experience in the real estate market.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade partnerCard" id="list-emaar" role="tabpanel" aria-labelledby="list-emaar-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/2.png') }}" alt="Azizi Logo" title="Azizi Logo">
                            <p class="f36 text-center primaryColor">Emaar Development</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="emaar">Since 1997, Emaar Properties has been at the forefront of the real estate industry, creating sustainable communities that meet the aspirations of tomorrow.Recognized for its innovative architectural designs and exceptional quality, Emaar has established itself as a global leader in the real estate sector.
                                <br><br>
                                The company has played a pivotal role in transforming Dubai's skyline, which has become synonymous with luxury and excellence.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade partnerCard" id="list-tfg" role="tabpanel" aria-labelledby="list-tfg-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/3.png') }}" alt="Azizi Logo" title="Azizi Logo">
                            <p class="f36 text-center primaryColor col-md-8">The First Group</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="tfg">The First Group offers a unique hotel investment opportunity in Dubai, where investors can own rooms and suites in luxurious, strategically located hotels. <br><br>
                                The company has strong partnerships with leading players in the hotel industry, ensuring maximum return on investment. <br><br>
                                In addition, the company offers an exclusive award-winning loyalty program that provides members with exclusive benefits such as cash rewards and dedicated travel services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade partnerCard" id="list-Binghatti" role="tabpanel" aria-labelledby="list-Binghatti-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/4.png') }}" alt="Azizi Logo" title="Azizi Logo" style="width:50%;">
                            <p class="f36 text-center primaryColor">Binghatti Development</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="Binghatti">Architect Mohamed Binghatti leads Binghatti Developers, a prominent name in Dubai's real estate. The company is known for its unique designs and modern amenities, delivering high-quality projects since 1875. <br><br>

                                Binghatti has a track record of timely delivery and competitive pricing, offering diverse residential and commercial developments, and earning projects from top financial and hospitality institutions. <br><br>
                                This has solidified Binghatti's position as a strong competitor in Dubai's real estate market.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade partnerCard" id="list-Sobha" role="tabpanel" aria-labelledby="list-Sobha-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/5.png') }}" alt="Azizi Logo" title="Azizi Logo" style="width:50%;">
                            <p class="f36 text-center primaryColor">Sobha Development</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="Sobha">Sobha Realty is a leading real estate development company founded by Indian businessman PNC Menon. They are known for their expertise in design and construction. <br><br>

                                One of their renowned projects is the Sobha Hartland in Dubai, known for its luxurious designs and spacious layouts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade partnerCard" id="list-Damac" role="tabpanel" aria-labelledby="list-Damac-list">
                    <div class="row">
                        <div class="img flexCenter col-md-4 partnerContent">
                            <img src="{{ asset('assets/images/partners/6.png') }}" alt="Azizi Logo" title="Azizi Logo" style="width:50%;">
                            <p class="f36 text-center primaryColor">Damac Development</p>
                        </div>
                        <div class="content col-md-8">
                            <p class="text tright" data-i18n="Damac">Since its inception in 2002, DAMAC Properties has solidified its position as one of the largest real estate companies in the Middle East. <br><br>

                                The company has a rich portfolio of successful projects in Dubai, spanning diverse locations and encompassing a variety of developments to cater to the evolving needs of its customers.
                                <br><br>

                                Trust : We provide our clients with the finest opportunity to be a trusted partner in attaining optimal and secure real estate investment in Dubai.
                                Credibility : We strive to conduct business with our clients in a way that is both credible and transparent.
                                Commitment : We are dedicated to giving the best service to our customers. Our commitment to them is the driving force behind all of our aspirations, and it is what distinguishes us.
                            </p>
                        </div>
                    </div>
                </div>
              </div>
        </div>

    </div>
</section>
@endsection

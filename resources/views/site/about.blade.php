@extends('layouts.site')

@section('about')
<header class="header aboutHeader flexCenter">
    <h1 class="f36 text-center primaryColor" data-i18n="aboutPageMailTitle">Where smart investment remains your lifetime choice</h1>
</header>

<section class="content">
    <div class="makanContainer aboutDesktop">
        <h2 class="f36 text-center aboutPageTitle mt-5 fBold" data-i18n="aboutPageMailTitle">Where Smart Investment Remains Your Lifetime Choice!!!</h2>
        <p class="f16 primaryColor mt-3 text-center" style="line-height: 25px" data-i18n="aboutPageMailText">Makan Investment Group is your leading investment destination in the Gulf region, providing an ideal opportunity for investors who are looking to make smart investments and build a diverse portfolio with the highest possible returns.
            The group was founded by an expert team in investment across various sectors such as real estate, financial markets, technology, and startups, ensuring investment decisions are made based on real data and analysis figures.
            The group has extensive experience in Gulf markets, particularly in Saudi Arabia and the UAE, and has established strategic partnerships with major companies and government institutions in the region to guarantee access to the best investment opportunities.
            </p>

        <div class="aboutContent toRtl">
            <div class="row" style="height: 40vh;">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/vision.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6 " >
                    <h1 class="primaryColor mt-5 aboutCardTitle f32 fBold tright" data-i18n="visionTitle">Vision :</h1>
                    <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="visionText">Our vision is to set the standard for excellence in the Gulf investment landscape by providing cutting-edge, sustainable financial solutions. We aim to empower both individual and institutional investors to shape their financial futures, driving growth and stability through our innovative approach and unwavering commitment to success.</p>
                </div>
            </div>
            <hr>

            <div class="row mt-5">
                <div class="col-md-6">
                    <h1 class="primaryColor f32 fBold tright aboutCardTitle" data-i18n="MissionTitle">Mission :</h1>
            <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="MissionText">At Makan Investment Group, our mission is to craft personalized, client-focused investment solutions that anticipate and fulfill your financial goals. We believe every client deserves more than just returns; they deserve a strategic partner committed to their vision. With our unparalleled expertise in Gulf markets, robust partnerships, and forward-thinking approach, we tailor each investment strategy to create exceptional value. By understanding your unique needs, we minimize risks, maximize growth, and build the foundation for long-term success. Together, we don’t just invest—we build legacies.

            </p>

                </div>
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/mission.jpg') }}" alt="" class="m-auto">
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/philosophy.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="primaryColor f32 fBold tright aboutCardTitle" data-i18n="PhilosophyTitle">Philosophy :</h1>
                    <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="PhilosophyText">At Makan Investment Group, our philosophy is rooted in the belief that intelligent, data-driven decisions form the foundation of long-term financial success. We are committed to empowering our clients by offering personalized, strategic investment opportunities that maximize returns while managing risk. By leveraging our deep understanding of regional markets, particularly in the Gulf, and fostering innovation across various sectors, we ensure that each investment is a smart, forward-thinking choice. We believe in building partnerships that prioritize trust, transparency, and mutual growth, with the goal of creating sustainable wealth for our investors.</p>
                </div>
            </div>
            <hr>

            <div class="row mt-5">
                <div class="col-md-6">
                    <h1 class="primaryColor f32 fBold tright aboutCardTitle" data-i18n="valuesTitle">Values :</h1>
            <p class="primaryColor f16 tright" data-i18n="valuesText">1. Excellence: We strive for excellence in every aspect of our business, from market research to execution, ensuring our clients receive the highest possible returns.
                <br>
                2. Integrity: Trust and transparency are the cornerstones of our business. We build long-term relationships with our clients by acting with integrity and always putting their interests first.
                <br>
                3. Innovation: We are committed to staying ahead of the curve by continuously seeking innovative investment solutions, allowing our clients to capitalize on emerging trends and opportunities.
                <br>
                4. Diversity: Our investment portfolio spans multiple industries, including real estate, financial markets, startups, and technology, ensuring a well-rounded and diverse approach to wealth building.
                <br>
                5. Collaboration: We believe in the power of partnerships, working closely with major companies, government institutions, and our clients to create the best investment opportunities in the Gulf region.
                <br>
                6. Sustainability: Our focus is on long-term, sustainable growth, ensuring that our investment strategies not only deliver immediate results but also secure a stable financial future for our clients.
                <br>
                With a focus on excellence, integrity, and innovation, Makan Investment Group remains your trusted partner for smart investment choices,


            </p>

                </div>
                <div class="col-md-6 aboutImg mt-5">
                    <img src="{{ asset('assets/images/lastAbout.jpg') }}" class="mt-5 ml-5" alt="" class="m-auto" style="height: 50vh">
                </div>
            </div>
        </div>

        <hr>
    </div>
    <div class="makanContainer aboutMobile">
        <h2 class="f36 text-center aboutPageTitle mt-5 fBold" data-i18n="aboutPageMailTitle">Where Smart Investment Remains Your Lifetime Choice!!!</h2>
        <p class="f18 primaryColor mt-3 text-center" style="line-height: 35px" data-i18n="aboutPageMailText">Makan Investment Group is your leading investment destination in the Gulf region, providing an ideal opportunity for investors who are looking to make smart investments and build a diverse portfolio with the highest possible returns.
            The group was founded by an expert team in investment across various sectors such as real estate, financial markets, technology, and startups, ensuring investment decisions are made based on real data and analysis figures.
            The group has extensive experience in Gulf markets, particularly in Saudi Arabia and the UAE, and has established strategic partnerships with major companies and government institutions in the region to guarantee access to the best investment opportunities.
            </p>

        <div class="aboutContent toRtl">
            <div class="row">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/vision.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="primaryColor aboutCardTitle f26 tright" data-i18n="visionTitle">Vision :</h1>
                    <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="visionText">Our vision is to set the standard for excellence in the Gulf investment landscape by providing cutting-edge, sustainable financial solutions. We aim to empower both individual and institutional investors to shape their financial futures, driving growth and stability through our innovative approach and unwavering commitment to success.</p>
                </div>
            </div>
            <hr>

            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/mission.jpg') }}" alt="" class="m-auto">
                </div>
                <div class="col-md-6">
                    <h1 class="primaryColor f26 tright aboutCardTitle" data-i18n="MissionTitle">Mission :</h1>
            <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="MissionText">At Makan Investment Group, our mission is to craft personalized, client-focused investment solutions that anticipate and fulfill your financial goals. We believe every client deserves more than just returns; they deserve a strategic partner committed to their vision. With our unparalleled expertise in Gulf markets, robust partnerships, and forward-thinking approach, we tailor each investment strategy to create exceptional value. By understanding your unique needs, we minimize risks, maximize growth, and build the foundation for long-term success. Together, we don’t just invest—we build legacies.

            </p>

                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/philosophy.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="primaryColor f26 tright aboutCardTitle" data-i18n="PhilosophyTitle">Philosophy :</h1>
                    <p class="primaryColor f16 tright mt-5 aboutCardText" data-i18n="PhilosophyText">At Makan Investment Group, our philosophy is rooted in the belief that intelligent, data-driven decisions form the foundation of long-term financial success. We are committed to empowering our clients by offering personalized, strategic investment opportunities that maximize returns while managing risk. By leveraging our deep understanding of regional markets, particularly in the Gulf, and fostering innovation across various sectors, we ensure that each investment is a smart, forward-thinking choice. We believe in building partnerships that prioritize trust, transparency, and mutual growth, with the goal of creating sustainable wealth for our investors.</p>
                </div>
            </div>
            <hr>

            <div class="row mt-5">
                <div class="col-md-6 aboutImg mt-5">
                    <img src="{{ asset('assets/images/lastAbout.jpg') }}" class="mt-5 ml-5" alt="" class="m-auto">
                </div>
                <div class="col-md-6">
                    <h1 class="primaryColor f26 tright aboutCardTitle" data-i18n="valuesTitle">Values :</h1>
            <p class="primaryColor f16 tright" data-i18n="valuesText">1. Excellence: We strive for excellence in every aspect of our business, from market research to execution, ensuring our clients receive the highest possible returns.
                <br>
                2. Integrity: Trust and transparency are the cornerstones of our business. We build long-term relationships with our clients by acting with integrity and always putting their interests first.
                <br>
                3. Innovation: We are committed to staying ahead of the curve by continuously seeking innovative investment solutions, allowing our clients to capitalize on emerging trends and opportunities.
                <br>
                4. Diversity: Our investment portfolio spans multiple industries, including real estate, financial markets, startups, and technology, ensuring a well-rounded and diverse approach to wealth building.
                <br>
                5. Collaboration: We believe in the power of partnerships, working closely with major companies, government institutions, and our clients to create the best investment opportunities in the Gulf region.
                <br>
                6. Sustainability: Our focus is on long-term, sustainable growth, ensuring that our investment strategies not only deliver immediate results but also secure a stable financial future for our clients.
                <br>
                With a focus on excellence, integrity, and innovation, Makan Investment Group remains your trusted partner for smart investment choices,


            </p>

                </div>
            </div>
        </div>

        <hr>
    </div>
</section>


@endsection

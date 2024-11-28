@extends('layouts.site')

@section('services')
<header class="header servicesHeader flexCenter">
    <h1 class="f36 text-center primaryColor" data-i18n="serviceHeader">Our Services</h1>
</header>

<section class="content">
    <div class="makanContainer servicesDesktop">
        <div class="aboutContent toRtl">
            <div class="row" id="Investment_Management">
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle1">Investment Management</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText1">
                At Makan Investment Group, we specialize in Investment Management by crafting personalized strategies that align with your unique financial goals, whether you're an individual investor or a business. Our expert team works closely with you to develop tailored plans that maximize returns while managing risk effectively. With a deep understanding of the Gulf region's dynamic markets, we ensure that your portfolio is diversified across sectors with the highest growth potential. Through data-driven insights and strategic decision-making, we help you make smart investments that deliver consistent, long-term financial success. Makan Investment Group is your trusted partner for building a prosperous and sustainable future
            </p>

                </div>
                <div class="col-md-6 aboutImg">
                    <img src=" {{ asset('assets/images/servicesCard1.jpg') }}" alt="" class="m-auto">
                </div>
            </div>

            <hr>
            <div class="row mt-5" id="Investment_Consulting">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard2.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle2">Investment Consulting</h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText2">
                        At Makan Investment Group, our Investment Consulting services are designed to guide you through the complexities of the investment landscape with expert, personalized advice. Our team of seasoned professionals works with you to understand your unique financial objectives, risk tolerance, and market interests, helping you make informed and strategic investment decisions. Whether you're navigating real estate opportunities, financial markets, or emerging sectors, we provide the insights and data you need to invest confidently. As the leading investment destination in the Gulf region, Makan is committed to empowering you with the knowledge and strategies to build a diverse and profitable portfolio with the highest possible returns
                    </p>
                </div>
            </div>
            <div class="row mt-5" id="Real_Estate">
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle3"> Real Estate Investment:</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText3">
                At Makan Investment Group, our Real Estate Investment services offer exclusive access to high-potential real estate projects across the Gulf region, with a strong focus on the thriving UAE market. We identify lucrative opportunities in commercial, residential, and mixed-use developments, providing investors with a pathway to sustainable returns and long-term growth. Leveraging our deep market knowledge and strategic partnerships, we ensure that every real estate investment is backed by solid data and positioned for success. As the Gulf's premier investment destination, Makan helps you make smart real estate investments that diversify your portfolio and deliver the highest possible returns.
            </p>

                </div>
                <div class="col-md-6 aboutImg">
                    <img src=" {{ asset('assets/images/servicesCard3.jpg') }}" alt="" class="m-auto">
                </div>
            </div>

            <hr>
            <div class="row mt-5" id="Financial_Market">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard4.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle4">
                        Financial Market Investment
                    </h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText4">
                        At Makan Investment Group, our Financial Market Investment services provide a wide range of opportunities to diversify your portfolio and achieve long-term financial growth. Whether you're interested in stocks, bonds, mutual funds, or direct access to the stock market, we offer customized options tailored to your financial goals. With our deep understanding of global and regional markets, particularly in the Gulf region, we guide you in making smart, informed decisions to maximize returns while minimizing risk. As the leading investment destination in the Gulf, Makan ensures that every financial market investment is strategic, well-researched, and aligned with your wealth-building objectives.
                    </p>
                </div>
            </div>
            <!-- <div class="row mt-5" id="Startup">
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle5">Startup Investment</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText5">
                At Makan Investment Group, our Startup Investment services are designed to fuel the growth of promising startups by providing crucial funding and strategic resources. We identify high-potential ventures in the Gulf region and beyond, offering investors the chance to support innovation and entrepreneurship while earning substantial returns. By partnering with emerging companies across various sectors, we help drive their success from early stages to market leadership. As your leading investment destination in the Gulf, Makan ensures that your investments in startups are both impactful and profitable, contributing to a diverse portfolio with the highest possible returns.
            </p>

                </div>
                <div class="col-md-6 aboutImg">
                    <img src=" {{ asset('assets/images/servicesCard5.jpg') }}" alt="" class="m-auto">
                </div>
            </div> -->

            <hr>
            <div class="row mt-5" id="Tourism">
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle6">Tourism and Hospitality Investment</h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText6">
                        At Makan Investment Group, our Tourism and Hospitality Investment services provide access to attractive opportunities in the fast-growing hospitality sector of the Gulf region. We identify high-potential investments in hotels, resorts, and tourist destinations, capitalizing on the region’s expanding tourism industry. By leveraging our market expertise and strategic partnerships, we ensure that every investment is well-positioned for strong returns and long-term success. As the leading investment destination in the Gulf, Makan offers smart, diversified opportunities that enhance your portfolio while delivering the highest possible returns in this thriving sector.
                    </p>
                </div>
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard6.jpg') }}" alt="" class="m-auto" >
                </div>
                
            </div>
        </div>

        <hr>
    </div>
    <div class="makanContainer servicesMobile">
        <div class="aboutContent toRtl">
            <div class="row">
                <div class="col-md-6 aboutImg">
                    <img src=" {{ asset('assets/images/servicesCard1.jpg') }}" alt="" class="m-auto">
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle1">Investment Management</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText1">
                At Makan Investment Group, we specialize in Investment Management by crafting personalized strategies that align with your unique financial goals, whether you're an individual investor or a business. Our expert team works closely with you to develop tailored plans that maximize returns while managing risk effectively. With a deep understanding of the Gulf region's dynamic markets, we ensure that your portfolio is diversified across sectors with the highest growth potential. Through data-driven insights and strategic decision-making, we help you make smart investments that deliver consistent, long-term financial success. Makan Investment Group is your trusted partner for building a prosperous and sustainable future
            </p>

                </div>

            </div>

            <hr>
            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard2.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle2">Investment Consulting</h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText2">
                        At Makan Investment Group, our Investment Consulting services are designed to guide you through the complexities of the investment landscape with expert, personalized advice. Our team of seasoned professionals works with you to understand your unique financial objectives, risk tolerance, and market interests, helping you make informed and strategic investment decisions. Whether you're navigating real estate opportunities, financial markets, or emerging sectors, we provide the insights and data you need to invest confidently. As the leading investment destination in the Gulf region, Makan is committed to empowering you with the knowledge and strategies to build a diverse and profitable portfolio with the highest possible returns
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard3.jpg') }}" alt="" class="m-auto">
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle3"> Real Estate Investment:</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText3">
                At Makan Investment Group, our Real Estate Investment services offer exclusive access to high-potential real estate projects across the Gulf region, with a strong focus on the thriving UAE market. We identify lucrative opportunities in commercial, residential, and mixed-use developments, providing investors with a pathway to sustainable returns and long-term growth. Leveraging our deep market knowledge and strategic partnerships, we ensure that every real estate investment is backed by solid data and positioned for success. As the Gulf's premier investment destination, Makan helps you make smart real estate investments that diversify your portfolio and deliver the highest possible returns.
            </p>

                </div>

            </div>

            <hr>
            <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard4.jpg') }}" alt="" class="m-auto" >
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle4">
                        Financial Market Investment
                    </h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText4">
                        At Makan Investment Group, our Financial Market Investment services provide a wide range of opportunities to diversify your portfolio and achieve long-term financial growth. Whether you're interested in stocks, bonds, mutual funds, or direct access to the stock market, we offer customized options tailored to your financial goals. With our deep understanding of global and regional markets, particularly in the Gulf region, we guide you in making smart, informed decisions to maximize returns while minimizing risk. As the leading investment destination in the Gulf, Makan ensures that every financial market investment is strategic, well-researched, and aligned with your wealth-building objectives.
                    </p>
                </div>
            </div>
            <!-- <div class="row mt-5">
                <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard5.jpg') }}" alt="" class="m-auto">
                </div>
                <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle5">Startup Investment</h1>
            <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText5">
                At Makan Investment Group, our Startup Investment services are designed to fuel the growth of promising startups by providing crucial funding and strategic resources. We identify high-potential ventures in the Gulf region and beyond, offering investors the chance to support innovation and entrepreneurship while earning substantial returns. By partnering with emerging companies across various sectors, we help drive their success from early stages to market leadership. As your leading investment destination in the Gulf, Makan ensures that your investments in startups are both impactful and profitable, contributing to a diverse portfolio with the highest possible returns.
            </p>

                </div>

            </div> -->

            <hr>
            <div class="row mt-5">
            <div class="col-md-6 aboutImg">
                    <img src="{{ asset('assets/images/servicesCard6.jpg') }}" alt="" class="m-auto" >
                </div>
            <div class="col-md-6">
                    <h1 class="toRtl primaryColor f26 tright serviceCardTitle" data-i18n="serviceCardTitle6">Tourism and Hospitality Investment</h1>
                    <p class="toRtl primaryColor f16 tright mt-5 aboutCardText" data-i18n="servicesCardText6">
                        At Makan Investment Group, our Tourism and Hospitality Investment services provide access to attractive opportunities in the fast-growing hospitality sector of the Gulf region. We identify high-potential investments in hotels, resorts, and tourist destinations, capitalizing on the region’s expanding tourism industry. By leveraging our market expertise and strategic partnerships, we ensure that every investment is well-positioned for strong returns and long-term success. As the leading investment destination in the Gulf, Makan offers smart, diversified opportunities that enhance your portfolio while delivering the highest possible returns in this thriving sector.
                    </p>
                </div>
               
                
            </div>
        </div>

        <hr>
    </div>
</section>

@endsection

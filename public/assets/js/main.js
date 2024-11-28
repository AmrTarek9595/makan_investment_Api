window.addEventListener('load', function() {

    setTimeout(function() {
        var loader = document.getElementById('loader');
        if (loader) {
            loader.style.transition = 'opacity 1s ease';
            loader.style.opacity = '0'; // Fade out loader
            setTimeout(function() {
                loader.style.display = 'none'; // Hide loader after fade out
            }, 1000); // Match this with the transition duration
        }
    }, 1000); // Adjust the delay if needed
});


function scroll_nav() {
    var nav = document.getElementById("nav");
    var nav_ul = document.querySelector(".navbar-nav");
    if (window.scrollY == 0) {
        if(localStorage.getItem('language') == "ar"){
            nav.style = `
                position : fixed;
                top : 2%%;
                left : 0%;
                width: 100%;
                transition : 0.5s;
                direction:rtl;
            `;
            document.querySelector('.navLinks').style = `top:9%`;
        }
        else{
            nav.style = `
            position : fixed;
            top : 2%%;
            left : 0%;
            width: 100%;
            transition : 0.5s;
            direction:ltr;
        `;
        document.querySelector('.navLinks').style = `top:9%`;
        }
    }
    if (window.scrollY > 0) {
        if(localStorage.getItem('language') == "ar"){
            nav.style = `
                position : fixed;
                top : 3%;
                left : 5%;
                width: 90%;
                transition : 0.5s;
                border-radius:25px;
                background-color: #111;
                opacity: 0.8;
                backdrop-filter: blur(6px);
                filter: drop-shadow(0px 0px 10px rgba(119, 119, 119, 0.601));
                direction:rtl;

            `;
            document.querySelector('.navLinks').style = `top:100%`;
        }
        else{
            nav.style = `
            position : fixed;
            top : 3%;
            left : 5%;
            width: 90%;
            transition : 0.5s;
            border-radius:25px;
            background-color: #111;
            opacity: 0.8;
            backdrop-filter: blur(6px);
            filter: drop-shadow(0px 0px 10px rgba(119, 119, 119, 0.601));
            direction:ltr;

        `;
        document.querySelector('.navLinks').style = `top:100%`;
        }
    }


}

window.addEventListener('scroll', scroll_nav);

const translations = {
    en: {
        home_link : "Home",
        aboutUs : "About Us",
        blogs_link : "Partners",
        contact_link : "Contact Us",
        services_link: "Services",
        headerTitle : "Smart investment with the highest ROI",
        headerBtn : "Explore services",
        count1 : `<span>10%</span><br class="brNone"> Fixed ROI  `,
        count2 : `<span>500</span><br class="brNone"> investments `,
        count3 : `<span>50</span><br class="brNone">Partners`,
        count4 : `<span>5</span><br class="brNone"> Countries`,

        readMore : "Read more",
        serviceHeadline : "Our Services",
        projects : "Projects",
        LatestProjects : "Latest Projects",
        projectsTitle : "Our companies",
        Blog : "Blog",
        LatestNews : "Latest News",
        blogTitle1 : "5 Popular Investment Strategies 2024",
        blogText1 : "Investing can help you build wealth and protect your income from inflation, but getting started can be tough. Here are the solutions.",
        blogTitle2 : "Muhammad BinGhatti: Beyond Branded Real Estate",
        blogText2 : "BinGhatti believes factors like Dubai’s growing population, tenant demand, and yields still outpacing other major international financial centers will insulate the luxury market.",
        blogTitle3 : "Major Gulf markets retreat on heightened regional tensions",
        blogText3 : "Major stock markets in the Gulf declined in early trade on Wednesday after Iran's ballistic missile strike on Israel raised fears of a wider regional conflict.",

        name : "Full Name",
        email : "Email Address",
        enterName : "Your Full Name",
        subject : "Subject",
        message : "Message",
        interest : "Register your interest",
        submit : "Submit",
        phone : "Phone",
        azizi:`Azizi Developments is a leading real estate developer in Dubai, founded in 2007 by Mirwais Azizi <br> <br>
                            The company is recognized for its focus on creating luxurious residential projects that cater to the needs of modern families, characterized by contemporary designs and high-quality construction. <br><br>
                            Azizi has a diverse portfolio of residential and commercial developments and is committed to providing exceptional service to its customers through a dedicated team with extensive experience in the real estate market.`,
        emaar : `Since 1997, Emaar Properties has been at the forefront of the real estate industry, creating sustainable communities that meet the aspirations of tomorrow.Recognized for its innovative architectural designs and exceptional quality, Emaar has established itself as a global leader in the real estate sector.
                            <br><br>
                            The company has played a pivotal role in transforming Dubai's skyline, which has become synonymous with luxury and excellence.`,
        tfg : `The First Group offers a unique hotel investment opportunity in Dubai, where investors can own rooms and suites in luxurious, strategically located hotels. <br><br>
                            The company has strong partnerships with leading players in the hotel industry, ensuring maximum return on investment. <br><br>
                            In addition, the company offers an exclusive award-winning loyalty program that provides members with exclusive benefits such as cash rewards and dedicated travel services.`,
        Binghatti : `Architect Mohamed Binghatti leads Binghatti Developers, a prominent name in Dubai's real estate. The company is known for its unique designs and modern amenities, delivering high-quality projects since 1875. <br><br>

                            Binghatti has a track record of timely delivery and competitive pricing, offering diverse residential and commercial developments, and earning projects from top financial and hospitality institutions. <br><br>
                            This has solidified Binghatti's position as a strong competitor in Dubai's real estate market.`,
        Sobha : `Sobha Realty is a leading real estate development company founded by Indian businessman PNC Menon. They are known for their expertise in design and construction. <br><br>

                            One of their renowned projects is the Sobha Hartland in Dubai, known for its luxurious designs and spacious layouts.`,
        Damac : `Since its inception in 2002, DAMAC Properties has solidified its position as one of the largest real estate companies in the Middle East. <br><br>

                            The company has a rich portfolio of successful projects in Dubai, spanning diverse locations and encompassing a variety of developments to cater to the evolving needs of its customers.
                            <br><br>

                            Trust : We provide our clients with the finest opportunity to be a trusted partner in attaining optimal and secure real estate investment in Dubai.
                            Credibility : We strive to conduct business with our clients in a way that is both credible and transparent.
                            Commitment : We are dedicated to giving the best service to our customers. Our commitment to them is the driving force behind all of our aspirations, and it is what distinguishes us.`,

        partners:"Our Partners",
        aboutPageMailTitle : `Where Smart Investment Remains Your Lifetime Choice!!!`,
        aboutPageMailText : `Makan Investment Group is your leading investment destination in the Gulf region, providing an ideal opportunity for investors who are looking to make smart investments and build a diverse portfolio with the highest possible returns.
            The group was founded by an expert team in investment across various sectors such as real estate, financial markets, technology, and startups, ensuring investment decisions are made based on real data and analysis figures.
            The group has extensive experience in Gulf markets, particularly in Saudi Arabia and the UAE, and has established strategic partnerships with major companies and government institutions in the region to guarantee access to the best investment opportunities.`,

            visionTitle : `Vision :`,
            visionText : `Our vision is to set the standard for excellence in the Gulf investment landscape by providing cutting-edge, sustainable financial solutions. We aim to empower both individual and institutional investors to shape their financial futures, driving growth and stability through our innovative approach and unwavering commitment to success.
 `,

            MissionTitle : `Mission :`,
            MissionText : `At Makan Investment Group, our mission is to craft personalized, client-focused investment solutions that anticipate and fulfill your financial goals. We believe every client deserves more than just returns; they deserve a strategic partner committed to their vision. With our unparalleled expertise in Gulf markets, robust partnerships, and forward-thinking approach, we tailor each investment strategy to create exceptional value. By understanding your unique needs, we minimize risks, maximize growth, and build the foundation for long-term success. Together, we don’t just invest—we build legacies.`,


PhilosophyTitle : `Philosophy :`,
PhilosophyText : `At Makan Investment Group, our philosophy is rooted in the belief that intelligent, data-driven decisions form the foundation of long-term financial success. We are committed to empowering our clients by offering personalized, strategic investment opportunities that maximize returns while managing risk. By leveraging our deep understanding of regional markets, particularly in the Gulf, and fostering innovation across various sectors, we ensure that each investment is a smart, forward-thinking choice. We believe in building partnerships that prioritize trust, transparency, and mutual growth, with the goal of creating sustainable wealth for our investors.`,

valuesTitle : `Values :`,
valuesText : `1. Excellence: We strive for excellence in every aspect of our business, from market research to execution, ensuring our clients receive the highest possible returns.
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
                With a focus on excellence, integrity, and innovation, Makan Investment Group remains your trusted partner for smart investment choices,`,

                contactUsNow : `Contact Us Now`,
                footerTitle : `subscribe now to stay updated and enjoy premium opportunities tailored just for you!`,
                serviceCardTitle1: `Investment Management`,
                servicesCardText1: `At Makan Investment Group, we specialize in Investment Management by crafting personalized strategies that align with your unique financial goals, whether you're an individual investor or a business. Our expert team works closely with you to develop tailored plans that maximize returns while managing risk effectively. With a deep understanding of the Gulf region's dynamic markets, we ensure that your portfolio is diversified across sectors with the highest growth potential. Through data-driven insights and strategic decision-making, we help you make smart investments that deliver consistent, long-term financial success. Makan Investment Group is your trusted partner for building a prosperous and sustainable future`,
                serviceCardTitle2: `Investment Consulting`,
                servicesCardText2: `At Makan Investment Group, our Investment Consulting services are designed to guide you through the complexities of the investment landscape with expert, personalized advice. Our team of seasoned professionals works with you to understand your unique financial objectives, risk tolerance, and market interests, helping you make informed and strategic investment decisions. Whether you're navigating real estate opportunities, financial markets, or emerging sectors, we provide the insights and data you need to invest confidently. As the leading investment destination in the Gulf region, Makan is committed to empowering you with the knowledge and strategies to build a diverse and profitable portfolio with the highest possible returns`,
                serviceCardTitle3: `Real Estate Investment:`,
                servicesCardText3: `At Makan Investment Group, our Real Estate Investment services offer exclusive access to high-potential real estate projects across the Gulf region, with a strong focus on the thriving UAE market. We identify lucrative opportunities in commercial, residential, and mixed-use developments, providing investors with a pathway to sustainable returns and long-term growth. Leveraging our deep market knowledge and strategic partnerships, we ensure that every real estate investment is backed by solid data and positioned for success. As the Gulf's premier investment destination, Makan helps you make smart real estate investments that diversify your portfolio and deliver the highest possible returns.`,
                serviceCardTitle4: `Financial Market Investment`,
                servicesCardText4: `At Makan Investment Group, our Financial Market Investment services provide a wide range of opportunities to diversify your portfolio and achieve long-term financial growth. Whether you're interested in stocks, bonds, mutual funds, or direct access to the stock market, we offer customized options tailored to your financial goals. With our deep understanding of global and regional markets, particularly in the Gulf region, we guide you in making smart, informed decisions to maximize returns while minimizing risk. As the leading investment destination in the Gulf, Makan ensures that every financial market investment is strategic, well-researched, and aligned with your wealth-building objectives.`,
                serviceCardTitle5: `Startup Investment`,
                servicesCardText5: `At Makan Investment Group, our Startup Investment services are designed to fuel the growth of promising startups by providing crucial funding and strategic resources. We identify high-potential ventures in the Gulf region and beyond, offering investors the chance to support innovation and entrepreneurship while earning substantial returns. By partnering with emerging companies across various sectors, we help drive their success from early stages to market leadership. As your leading investment destination in the Gulf, Makan ensures that your investments in startups are both impactful and profitable, contributing to a diverse portfolio with the highest possible returns.`,
                serviceCardTitle6: `Tourism and Hospitality Investment`,
                servicesCardText6: `At Makan Investment Group, our Tourism and Hospitality Investment services provide access to attractive opportunities in the fast-growing hospitality sector of the Gulf region. We identify high-potential investments in hotels, resorts, and tourist destinations, capitalizing on the region’s expanding tourism industry. By leveraging our market expertise and strategic partnerships, we ensure that every investment is well-positioned for strong returns and long-term success. As the leading investment destination in the Gulf, Makan offers smart, diversified opportunities that enhance your portfolio while delivering the highest possible returns in this thriving sector.`,

                serviceHeader: `Our Services`,
                homeHeader1 : "Smart investment with the highest ROI",
                homeHeader2 : "10% Fixed ROI",
                homeHeader3 : "More Than 500 investments.",
                homeHeader4 : "50 Strategic partners",
                homeHeader5 : "We are in 5 Countries",

                headerBtn2 : "Our Partners",
                headerBtn3 : "Contact Us",

                aboutSectionTitle : `Who We Are`,
                aboutSectionTitle2 : `Where Smart Investment Remains Your Lifetime Choice !!!
`,
                aboutSectionText : `Makan Investment Group is your leading investment destination in the Gulf region, providing an ideal opportunity for investors who are looking to make smart investments and build a diverse portfolio with the highest possible returns.`,
                servicesSectionTitle : `Our investment group offers a comprehensive range of services
designed to meet the diverse needs of our clients`,

servicesSectionText1 : `We develop customized investment strategies tailored to your specific financial objectives, whether you're an individual or a business.`,
servicesSectionText2 : `Our team of experts provides personalized advice, helping you make informed and strategic investment decisions.`,
servicesSectionText3 : `We present lucrative opportunities to invest in high-potential real estate projects, particularly within the Gulf region, with a focus on the UAE.`,
servicesSectionText4 : `We offer a variety of investment options, including stocks, bonds, mutual funds, and access to the stock market, ensuring diversified financial growth.`,
servicesSectionText5 : `We support the growth of promising startups by providing essential funding and resources to help them thrive.`,
servicesSectionText6 : `We identify and offer attractive investment opportunities in hotels, resorts, and tourist destinations, capitalizing on the region’s growing hospitality sector.`,
        project1 : `TREND AQAR is a leading real estate broker firm known for its innovative services and client-centric approach. Specializing in residential and commercial properties, their experienced team offers expert guidance in buying, selling, and leasing, ensuring clients achieve their real estate goals with confidence and integrity.`,
        project2 : `FOUR WEEKS is a premier tourist booking management firm specializing in seamless travel experiences. From booking flights and hotels to curating personalized tourist programs, their expert team ensures every detail is covered. With a focus on convenience and customer satisfaction, FOUR WEEKS makes planning unforgettable trips effortless.`,
        project3 : `ALPHA Tec is a cutting-edge digital game creation, development, and publishing company dedicated to crafting immersive gaming experiences. With a talented team of developers and designers, ALPHA Tec combines creativity and technology to produce innovative games that captivate players and push the boundaries of interactive entertainment.`,
        project4 : `MAKAN THE LINE is a premier property management firm dedicated to enhancing the value and appeal of residential and commercial properties. With a focus on exceptional service, they offer tailored solutions including leasing, maintenance, and tenant relations, ensuring efficient management and optimal satisfaction for property owners and tenants alike.`,
        project5 : `ERSAL MARKETING is a dynamic marketing agency that specializes in creating impactful strategies to elevate brands and drive growth. With expertise in digital marketing, social media management, and content creation, their innovative team collaborates closely with clients to develop tailored solutions that resonate with target audiences and deliver measurable results.`,
        contactPageMailTitle : `Have questions or need assistance? <br> Contact us today and let our team help you find the perfect Opportunities!`,
    },
    ar: {
        home_link : "الرئيسية",
        aboutUs : "من نحن",
        blogs_link : "الشركاء",
        contact_link : "التواصل",
        services_link: "خدماتنا",
        headerBtn : "اكتشف الخدمات",
        count1 : `<span>10% </span><br class="brNone">عائد ثابت `,
        count2 : `<span>500 </span><br class="brNone"> شركاء النجاح `,
        count3 : `<span>50 </span><br class="brNone">استثمار `,
        count4 : `<span>5 </span><br class="brNone"> دول `,

        readMore : "قراءة المزيد",
        serviceHeadline : "خدماتنا",


        projects : "المشاريع",
        LatestProjects : "اخر المشاريع",
        projectsTitle : "شركاتنا",
        Blog : "المدونة",
        LatestNews : "اخر الاخبار",
        blogTitle1 : "5 استراتجيات مميزة عن الاستثمار 2024",
        blogText1 : "يمكن أن يساعدك الاستثمار في بناء الثروة وحماية أموالك وثروتك من التضخم، ولكن قد تكون البداية صعبة ومرهقة، هنا تجد الحلول",
        blogTitle2 : "محمد بن غاطي: ما وراء العقارات والعلامات التجارية",
        blogText2 : "يعتقد بن غاطي أن عوامل مثل تزايد عدد السكان في دبي، والطلب على المستأجرين، والعائدات التي لا تزال تتجاوز المراكز المالية الدولية الكبرى الأخرى، سوف تحمي سوق المنتجات الفاخرة",
        blogTitle3 : "أسواق الخليج الكبرى تتراجع نتيجة تصاعد التوترات الإقليمية",
        blogText3 : "تراجعت أسواق الأسهم الرئيسية في الخليج في التعاملات المبكرة اليوم بعد أن أثار الهجوم الصاروخي الباليستي الإيراني على إسرائيل مخاوف من صراع إقليمي أوسع نطاقًا",
        name : "الاسم بالكامل",
        email : "البريد الالكتروني",
        enterName : "الاسم بالكامل",
        subject : "الموضوع",
        message : "الرسالة",
        interest : "سجل اهتمامك",
        submit : "ارسال",
        phone : "رقم الهاتف",

        azizi : `شركة رائدة في مجال التطوير العقاري بدبي، تأسست عام 2007. تتميز الشركة بتركيزها على تطوير مشاريع سكنية فاخرة تلبي احتياجات العائلات، وتصميماتها العصرية وجودتها العالية
تمتلك عزيزي مجموعة من المشاريع السكنية والتجارية، وتسعى باستمرار لتقديم أفضل الخدمات لعملائها من خلال فريق عمل متخصص وخبرة واسعة في السوق العقاري`,
        emaar : `إعمار العقارية، الرائدة في صناعة العقارات، تعمل منذ عام 1997 على خلق مجتمعات مستدامة تلبي تطلعات المستقبل.
تتميز مشاريعها بالتصميم المعماري المبتكر والجودة العالية، مما جعلها واحدة من أبرز الشركات العقارية في العالم، ساهمت في تغيير معالم دبي، وأصبحت رمزاً للرفاهية والتميز`,
        tfg : `تقدم الشركة فرصة استثمارية فندقية فريدة في دبي، حيث يمكن للمستثمرين امتلاك غرف وأجنحة في فنادق فاخرة وموقع استراتيجي في دبي.
تتميز بشراكات قوية مع كبار العاملين في صناعة الفنادق، مما يضمن تحقيق عوائد مربحة للمستثمرين في دبي بالإضافة إلى برامج الولاء التي تمنح الأعضاء مزايا حصرية مثل المكافآت النقدية وخدمات السفر الفاخرة`,
        Binghatti : `تأسست عام 1875 تحت قيادة المهندس المعماري محمد بن غاطي، تتميز الشركة بابتكار تصاميم معمارية فريدة ومرافق حديثة.

أثبتت بن غاطي قدرتها على تقديم مشاريع سكنية وتجارية متنوعة وعالية الجودة بأسعار مناسبة وفي الوقت المحدد، كما أنها نفذت مشاريع لبعض أكبر المؤسسات المالية والفندقية في العالم، وقدمت حلول شاملة تلبي احتياجات العملاء، مما جعلها منافسًا قويًا في سوق العقارات بدبي

التواصل`,
        Sobha : `شركة رائدة في مجال التطوير العقاري، أسسها ورأسها رجل الأعمال الهندي بي أن سي مينون. تمتلك الشركة سجلا حافلا بالخبرة الواسعة في تصميم وبناء مشاريع ضخمة في مختلف أنحاء العالم، أبرزها مشروع شوبا هارتلاند في دبي، الذي يعتبر أحد أكبر المشاريع السكنية المتكاملة في المنطقة.

تتميز مشاريع شوبا بتصاميمها الفاخرة ومساحاتها الواسعة، مما يجعلها خيارًا مثاليًا لمن يبحثون عن نمط حياة فاخر`,
        Damac : `منذ تأسيسها في عام 2002، رسخت داماك العقارية مكانتها كواحدة من أكبر الشركات العقارية في الشرق الأوسط.

تمتلك الشركة سجلاً حافلاً بالمشاريع الناجحة في دبي، حيث تغطي محفظتها العقارية مناطق متعددة وتضم مشاريع متنوعة تلبي احتياجات العملاء المتنوعة.

الثقة: نقدم أفضل الفرص للعملاء لنكون الشريك الموثوق في تحقيق الاسثمار العقاري الأمثل والآمن في دبي
المصداقية: نسعى أن يكون التعامل مع عملائنا قائم على المصداقية والشفافية في كل خطوة نخطوها معه.
الالتزام: نتعهد بتقديم أفضل خدمة لعملائنا والتزامنا معهم هو المحرك الرئيسي والأساس الذي نبني عليه كل طموحاتنا وهو أهم ما يميزنا`,


partners : "شركائنا",

aboutPageMailTitle : `!حيث تظل الاستثمارات الذكية اختيارك مدى الحياة`,
aboutPageMailText : `مجموعة مكان للاستثمار هي وجهتك الرائدة في منطقة الخليج، تقدم فرصة مثالية للمستثمرين الذين يتطلعون إلى القيام باستثمارات ذكية وبناء محافظ استثمارية متنوعة بأعلى العوائد الممكنة.
تأسست المجموعة على يد فريق من الخبراء في قطاعات متعددة مثل العقارات، الأسواق المالية، التكنولوجيا، والشركات الناشئة، مما يضمن أن يتم اتخاذ القرارات الاستثمارية بناءً على بيانات حقيقية وتحليلات دقيقة.
تمتلك مجموعة مكان للاستثمار خبرة واسعة في أسواق الخليج، خاصة في المملكة العربية السعودية والإمارات العربية المتحدة، وقد أقامت شراكات استراتيجية مع شركات كبرى ومؤسسات حكومية في المنطقة لضمان الوصول إلى أفضل الفرص الاستثمارية
`,

visionTitle : `رؤيتنا`,
visionText : `رؤيتنا هي أن نكون معيارًا للتميز في مشهد الاستثمار في منطقة الخليج من خلال تقديم حلول مالية متقدمة ومستدامة. نسعى لتمكين المستثمرين الأفراد والمؤسسات من تشكيل مستقبلهم المالي، مع تعزيز النمو والاستقرار من خلال نهجنا الابتكاري والتزامنا الثابت بالنجاح.`,

MissionTitle : `مهمتنا:`,
MissionText : `في مجموعة مكان للاستثمار، مهمتنا هي تقديم حلول استثمارية مصممة خصيصًا لتلبية احتياجات عملائنا المالية. نؤمن أن كل عميل يستحق أكثر من مجرد عائد مالي؛ يستحق شريكًا استراتيجيًا ملتزمًا بتحقيق رؤيته. بفضل خبراتنا الواسعة في أسواق الخليج، وشراكاتنا القوية، ونهجنا المستقبلي، نعمل على تخصيص كل استراتيجية استثمارية لخلق قيمة استثنائية. من خلال فهمنا لاحتياجاتك الفريدة، نعمل على تقليل المخاطر وتعظيم النمو، وبناء أساس قوي للنجاح على المدى الطويل. معًا، لا نستثمر فقط، بل نبني إرثًا يدوم.
`,

PhilosophyTitle : `فلسفتنا:`,
PhilosophyText : `في مجموعة مكان للاستثمار، تستند فلسفتنا إلى الإيمان بأن القرارات الذكية المستندة إلى البيانات تشكل الأساس للنجاح المالي على المدى الطويل. نحن ملتزمون بتمكين عملائنا من خلال تقديم فرص استثمارية مخصصة واستراتيجية تعظم العوائد وتدير المخاطر بفعالية. من خلال استغلال فهمنا العميق للأسواق الإقليمية، خاصة في منطقة الخليج، وتعزيز الابتكار عبر مختلف القطاعات، نضمن أن يكون كل استثمار اختيارًا ذكيًا ومتقدمًا. نؤمن ببناء شراكات تعتمد على الثقة والشفافية والنمو المشترك، بهدف خلق ثروة مستدامة لمستثمرينا.`,

valuesTitle : `قيمنا:`,
valuesText : `التميز: نسعى لتحقيق التميز في كل جانب من أعمالنا، من البحث في الأسواق إلى التنفيذ، لضمان حصول عملائنا على أعلى العوائد الممكنة.<br>
النزاهة: الثقة والشفافية هما ركيزتا أعمالنا. نبني علاقات طويلة الأمد مع عملائنا من خلال التصرف بنزاهة ووضع مصالحهم في المقام الأول دائمًا.
الابتكار: نحن ملتزمون بالبقاء في مقدمة التغيرات من خلال البحث المستمر عن حلول استثمارية مبتكرة، مما يمكّن عملاءنا من الاستفادة من الاتجاهات والفرص الجديدة.<br>
التنوع: تمتد محفظتنا الاستثمارية عبر صناعات متعددة، بما في ذلك العقارات، الأسواق المالية، الشركات الناشئة، والتكنولوجيا، مما يضمن نهجًا متنوعًا لبناء الثروة.<br>
التعاون: نؤمن بقوة الشراكات، ونعمل عن كثب مع الشركات الكبرى والمؤسسات الحكومية وعملائنا لخلق أفضل الفرص الاستثمارية في منطقة الخليج.
<br>
الاستدامة: نركز على النمو المستدام طويل الأمد، ونتأكد من أن استراتيجياتنا الاستثمارية لا تقدم نتائج فورية فحسب، بل تضمن أيضًا مستقبلًا ماليًا مستقرًا لعملائنا.<br>
من خلال التركيز على التميز، النزاهة، والابتكار، تظل مجموعة مكان للاستثمار شريكك الموثوق لاتخاذ خيارات استثمارية ذكية، مما يوفر لك المنصة المثالية لبناء محفظة متنوعة ومربحة.
`,
contactUsNow : `تواصل معنا الان`,
footerTitle : `انضم إلينا اليوم واستفد من المزايا الحصرية - اشترك الآن لتبقى على اطلاع واستمتع بفرص متميزة مصممة خصيصًا لك`,



serviceCardTitle1: `إدارة الاستثمارات:`,
                serviceCardTitle2: `استشارات الاستثمار:`,
                serviceCardTitle3: `استثمار العقارات:`,
                serviceCardTitle4: `استثمار الأسواق المالية:`,
                serviceCardTitle5: `استثمار الشركات الناشئة:`,
                serviceCardTitle6: `استثمار السياحة والضيافة:`,
                servicesCardText1: `في مجموعة مكان للاستثمار، نحن متخصصون في إدارة الاستثمارات من خلال تصميم استراتيجيات مخصصة تتماشى مع أهدافك المالية الفريدة، سواء كنت مستثمرًا فرديًا أو مؤسسة. يعمل فريقنا الخبير معك عن كثب لتطوير خطط مخصصة تزيد من العوائد بينما تدير المخاطر بفعالية. من خلال فهم عميق للأسواق الديناميكية في منطقة الخليج، نضمن أن تكون محفظتك الاستثمارية متنوعة عبر القطاعات ذات الإمكانيات العالية للنمو. من خلال رؤى قائمة على البيانات وقرارات استراتيجية، نساعدك على اتخاذ استثمارات ذكية تحقق نجاحًا ماليًا مستدامًا وطويل الأمد. مجموعة مكان للاستثمار هي شريكك الموثوق لبناء مستقبل مزدهر ومستدام.

`,
                servicesCardText2: `في مجموعة مَكان للاستثمار، تم تصميم خدمات استشارات الاستثمار لدينا لتوجيهك خلال تعقيدات عالم الاستثمار من خلال نصائح خبير وشخصية. يعمل فريقنا من المحترفين ذوي الخبرة معك لفهم أهدافك المالية الفريدة، وتحمل المخاطر، واهتمامات السوق، مما يساعدك على اتخاذ قرارات استثمارية مستنيرة واستراتيجية. سواء كنت تتنقل في فرص العقارات، أو الأسواق المالية، أو القطاعات الناشئة، نقدم لك الرؤى والبيانات التي تحتاجها للاستثمار بثقة. بصفتها الوجهة الاستثمارية الرائدة في منطقة الخليج، تلتزم مَكان بتمكينك من المعرفة والاستراتيجيات لبناء محفظة متنوعة ومربحة مع أعلى عائد ممكن.`,
                servicesCardText3: `في مجموعة مَكان للاستثمار، تقدم خدمات استثمار العقارات لدينا وصولاً حصريًا إلى مشاريع عقارية عالية الإمكانات عبر منطقة الخليج، مع تركيز قوي على السوق النامية في الإمارات العربية المتحدة. نحن نحدد الفرص المربحة في المشاريع التجارية، والسكنية، والمختلطة الاستخدام، مما يوفر للمستثمرين مسارًا لتحقيق عوائد مستدامة ونمو طويل الأمد. من خلال الاستفادة من معرفتنا العميقة بالسوق والشراكات الاستراتيجية، نضمن أن يكون كل استثمار عقاري مدعومًا ببيانات قوية ومصممًا لتحقيق النجاح. بصفتها الوجهة الاستثمارية الرائدة في الخليج، تساعدك مَكان على اتخاذ قرارات استثمار عقاري ذكية تنوع محفظتك وتحقق أعلى العوائد الممكنة.`,
                servicesCardText4: `في مجموعة مَكان للاستثمار، تقدم خدمات استثمار الأسواق المالية لدينا مجموعة واسعة من الفرص لتنويع محفظتك وتحقيق نمو مالي طويل الأمد. سواء كنت مهتمًا بالأسهم، أو السندات، أو صناديق الاستثمار المشتركة، أو الوصول المباشر إلى سوق الأسهم، نقدم خيارات مخصصة مصممة لتحقيق أهدافك المالية. بفضل فهمنا العميق للأسواق العالمية والإقليمية، وخاصة في منطقة الخليج، نوجهك في اتخاذ قرارات ذكية ومستنيرة لتعظيم العوائد مع تقليل المخاطر. بصفتها الوجهة الاستثمارية الرائدة في الخليج، تضمن مَكان أن يكون كل استثمار في الأسواق المالية استراتيجيًا، مدروسًا جيدًا، ومتوافقًا مع أهدافك في بناء الثروة.`,
                servicesCardText5: `في مجموعة مَكان للاستثمار، تم تصميم خدمات استثمار الشركات الناشئة لدينا لتعزيز نمو الشركات الواعدة من خلال توفير التمويل الحيوي والموارد الاستراتيجية. نحن نحدد المشاريع ذات الإمكانات العالية في منطقة الخليج وما بعدها، مما يمنح المستثمرين الفرصة لدعم الابتكار وريادة الأعمال بينما يحققون عوائد كبيرة. من خلال الشراكة مع الشركات الناشئة عبر مختلف القطاعات، نساعد على دفع نجاحها من المراحل المبكرة إلى ريادة السوق. بصفتك وجهتك الاستثمارية الرائدة في الخليج، تضمن مَكان أن تكون استثماراتك في الشركات الناشئة ذات تأثير وربحية، مما يسهم في تنويع محفظتك وتحقيق أعلى العوائد الممكنة.`,
                servicesCardText6: `في مجموعة مَكان للاستثمار، تقدم خدمات استثمار السياحة والضيافة لدينا وصولاً إلى فرص جذابة في قطاع الضيافة المتنامي بسرعة في منطقة الخليج. نحن نحدد الاستثمارات ذات الإمكانات العالية في الفنادق، والمنتجعات، والمناطق السياحية، مستفيدين من صناعة السياحة المتوسعة في المنطقة. من خلال الاستفادة من خبرتنا في السوق والشراكات الاستراتيجية، نضمن أن يكون كل استثمار في وضع جيد لتحقيق عوائد قوية ونجاح طويل الأمد. بصفتها الوجهة الاستثمارية الرائدة في الخليج، تقدم مَكان فرصًا ذكية ومتنوعة تعزز محفظتك بينما تحقق أعلى العوائد الممكنة في هذا القطاع المزدهر.`,

                serviceHeader: `خدماتنا`,
                homeHeader1 : "استثمارات ذكية مع أعلى عوائد استثمار",
                homeHeader2 : "%عائد استثماري ثابت 10",
                homeHeader3 : "أكثر من 500 فرص استثمارية",
                homeHeader4 : "أكثر من 50 شريك استراتيجي",
                homeHeader5 : "متواجدين في 5 دول",
                headerBtn2 : "شركائنا",
                headerBtn3 : "تواصل معنا",

                aboutSectionTitle : `من نحن`,
                aboutSectionTitle2 : `تظل الاستثمارات الذكية اختيارك مدى الحياة!`,
                aboutSectionText : `مجموعة مكان للاستثمار هي وجهتك الرائدة في منطقة الخليج، تقدم فرصة مثالية للمستثمرين الذين يتطلعون إلى القيام باستثمارات ذكية وبناء محافظ استثمارية متنوعة بأعلى العوائد الممكنة.`,
                servicesSectionTitle : `تقدم مجموعة مكان للاستثمار حزمة شاملة من الخدمات المصممة لتلبية احتياجات عملائنا المتنوعة:`,
                servicesSectionText1 : ` نقوم بتطوير استراتيجيات استثمار مخصصة تتناسب مع أهدافك المالية، سواء كنت فردًا أو مؤسسة.`,
                servicesSectionText2 : `يوفر فريقنا من الخبراء نصائح مخصصة، لمساعدتك في اتخاذ قرارات واستراتيجية استثمارية مدروسة.`,
                servicesSectionText3 : ` نقدم فرص استثمارية مربحة في مشاريع عقارية ذات إمكانات عالية، خاصة في منطقة الخليج مع التركيز على دولة الإمارات العربية المتحدة.`,
                servicesSectionText4 : `نوفر مجموعة متنوعة من الخيارات الاستثمارية، بما في ذلك الأسهم، السندات، وصناديق الاستثمار المشترك، مما يضمن نموًا ماليًا متنوعًا.`,
                servicesSectionText5 : ` ندعم نمو الشركات الناشئة الواعدة من خلال تقديم التمويل والموارد اللازمة لنجاحها.`,
                servicesSectionText6 : ` نحدد ونعرض فرص استثمارية جذابة في الفنادق، المنتجعات، والوجهات السياحية، استغلالًا لنمو قطاع الضيافة في المنطقة`,

                project1 : `شركة وساطة عقارية رائدة في تقديم خدمات مبتكرة ونهجًا يركز على العملاء. متخصصون في العقارات السكنية والتجارية، ويقدم فريقهم المتمرس إرشادات .لتحقيق الأهداف العقارية بثقة ونزاهة`,
                project2 : `شركة متخصصة في إدارة حجوزات السياحة، تقدم تجارب سفر سلسة، من حجز الطيران والفنادق إلى برامج سياحية مخصصة`,
                project3 : `شركة متخصصة في تطوير ونشر الألعاب الرقمية، تجمع بين الإبداع والتكنولوجيا لابتكار تجارب ألعاب غامرة`,
                project4 : `شركة إدارة العقارات متميزة في تقديم حلولًا شاملة لتعزيز قيمة العقارات السكنية والتجارية`,
                project5 : `وكالة تسويق ديناميكية تتخصص في استراتيجيات مبتكرة لرفع العلامات التجارية وتحقيق النمو`,
        contactPageMailTitle : `هل لديك أسئلة أو تحتاج إلى مساعدة؟ <br>اتصل بنا اليوم ودع فريقنا يساعدك في العثور على الفرص المثالية!`,

    }
};
function switchLanguage() {
    const currentLang = localStorage.getItem('language') === 'ar' ? 'ar' : 'en';

    const newLang = currentLang === 'en' ? 'ar' : 'en';
    localStorage.setItem('language', newLang);

    // Update the image source based on the new language
    const langText = document.getElementById('langText');
    if (newLang === 'ar') {

        langText.innerHTML = 'EN';

        document.querySelectorAll('.tright').forEach(element => {
            element.style.textAlign = 'right'; // Align text to right for Arabic
        });
        document.querySelectorAll('.navbar-nav').forEach(element => {
            element.style = 'margin-left:auto;'; // Align text to right for Arabic
        });

        document.querySelectorAll('.toRtl').forEach(element => {
            element.style.direction = 'rtl';
        });
        document.querySelectorAll('.footer_content').forEach(element => {
            element.style = `flex-direction:row-reverse;`;
        });
        document.querySelectorAll('.header_content').forEach(element => {
            element.style.padding = '0% 5% 0% 0%'; // Align text to right for Arabic
        });

    } else {
        langText.innerHTML = 'AR';
        console.log("as")
        document.querySelectorAll('.blogTitleee').forEach(element => {
            element.innerHTML = enTitle; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogdesc').forEach(element => {
            element.innerHTML = endesc; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogBody').forEach(element => {
            element.innerHTML = enbody; // Align text to right for Arabic
        });
        document.querySelectorAll('.blogImage').forEach(element => {
            element.src = 'dashboard/' + image_en; // Align text to right for Arabic
        });

        document.querySelectorAll('.tright').forEach(element => {
            element.style.textAlign = 'left'; // Align text to left for English
        });
        document.querySelectorAll('.toRtl').forEach(element => {
            element.style.direction = 'ltr';
        });

        document.querySelectorAll('.footer_content').forEach(element => {
            element.style = `flex-direction:row;`;
        });

    }

    // Change the direction of the element with id="dr"
    const drElement = document.getElementById('dr');
    if (drElement) {
        drElement.style.direction = newLang === 'ar' ? 'rtl' : 'ltr';
    }

    // Update translations
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        element.innerHTML = translations[newLang][key];
    });

    document.querySelectorAll('[data-i18n-placeholder]').forEach(element => {
        const key = element.getAttribute('data-i18n-placeholder');
        element.setAttribute('placeholder', translations[newLang][key]);
    });
    localStorage.setItem('lang', newLang);
    updateContent();

    const form = document.getElementById('home_form');
    form.action = translations[newLang].formAction;



}

function loadLanguage() {

    const savedLang = localStorage.getItem('language') || 'en';

    // Update the image source based on the saved language
    const langImage = document.getElementById('langImage');
    if (savedLang === 'ar') {
        langText.innerHTML = 'EN';
        document.querySelectorAll('.blogTitleee').forEach(element => {
            element.innerHTML = arTitle; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogdesc').forEach(element => {
            element.innerHTML = ardesc; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogBody').forEach(element => {
            element.innerHTML = arbody; // Align text to right for Arabic
        });
        document.querySelectorAll('.blogImage').forEach(element => {
            element.src = 'dashboard/' + image_ar; // Align text to right for Arabic
        });
        document.querySelectorAll('.tright').forEach(element => {
            element.style.textAlign = 'right'; // Align text to right for Arabic
        });
        document.querySelectorAll('.header_content').forEach(element => {
            element.style.padding = '0% 5% 0% 0%'; // Align text to right for Arabic
        });
        document.querySelectorAll('.toRtl').forEach(element => {
            element.style.direction = 'rtl';
        });
                document.querySelectorAll('.footer_content').forEach(element => {
            element.style = `flex-direction:row-reverse;`;
        });
    } else {
        langText.innerHTML = 'AR';
        document.querySelectorAll('.blogTitleee').forEach(element => {
            element.innerHTML = enTitle; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogdesc').forEach(element => {
            element.innerHTML = endesc; // Align text to right for Arabic
        });

        document.querySelectorAll('.blogBody').forEach(element => {
            element.innerHTML = enbody; // Align text to right for Arabic
        });
        document.querySelectorAll('.blogImage').forEach(element => {
            element.src = 'dashboard/' + image_en; // Align text to right for Arabic
        });
        document.querySelectorAll('.tright').forEach(element => {
            element.style.textAlign = 'left'; // Align text to left for English
        });
        document.querySelectorAll('.toRtl').forEach(element => {
            element.style.direction = 'ltr';
        });
                document.querySelectorAll('.footer_content').forEach(element => {
            element.style = `flex-direction:row;`;
        });
    }

    // Change the direction of the element with id="dr"
    const drElement = document.getElementById('dr');
    if (drElement) {
        drElement.style.direction = savedLang === 'ar' ? 'rtl' : 'ltr';
    }

    // Update translations
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        element.innerHTML = translations[savedLang][key];
    });

    document.querySelectorAll('[data-i18n-placeholder]').forEach(element => {
        const key = element.getAttribute('data-i18n-placeholder');
        element.setAttribute('placeholder', translations[savedLang][key]);
    });

    const form = document.getElementById('home_form');
    form.action = translations[savedLang].formAction;

    updateContent();
}
this.document.querySelector('.trendAqar').addEventListener('click' , function(){
    window.open('https://trend-aqar.com/');
});
this.document.querySelector('.fourWeeks').addEventListener('click' , function(){
    window.open('https://fourweeks.ae/');
});
this.document.querySelector('.alfa').addEventListener('click' , function(){
    window.open('https://alpha-tech.ae/');
});
this.document.querySelector('.makan').addEventListener('click' , function(){
    window.open('https://makan-theline.ae/');
});
this.document.querySelector('.ersal').addEventListener('click' , function(){
    window.open('https://ersal.com.sa/');
});
// Load the language on page load
window.addEventListener('DOMContentLoaded', loadLanguage);

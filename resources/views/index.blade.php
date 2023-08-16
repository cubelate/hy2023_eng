<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HUA CAPITAL - HOME</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/idangerous.swiper.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/idangerous.swiper.min.js"></script>
    <script src="./js/myJs.js"></script>
    <style>
        #screenInfo{
            padding:10px 15px;
            background:rgba(255,255,255,.6);
            color:black;
            font-size:24px;
            font-weight:bold;
            position: fixed;
            left:0;
            top:0;
            z-index: 100;
        }
    </style>
</head>
<body>
<div class="header transparent">
    <x-nav />
</div>

<div class="flex-frame">
    <!-- <div id="screenInfo"></div> -->
    <div class="pageContainer">
        <!-- sideBar nav -->
        <ul class="pageBar">
            <li class="pageBar_item active"><span class="txt">HOME</span></li>
            <li class="pageBar_item"><span class="txt">HUA CAPITAL</span></li>
            <li class="pageBar_item"><span class="txt">PORTFOLIO</span></li>
            <li class="pageBar_item"><span class="txt">RECENT NEWS</span></li>
            <li class="pageBar_item"><span class="txt">CONTACT</span></li>
        </ul>

        <!-- page slider content -->
        <div class="content page-wrapper" >
            <div class="swiper swiper_home page-slide wow slideInRight">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="wd_con swiper-txtBx lt wow fadeIn" data-wow-delay="1.2s" >
                            <!-- lt -->
                            <p class="swiper-title ">Striving for the Rise of the Next 
                                Generation of Chinese Tech Enterprises</p>
                        </div>

                    </div>
                    <div class="swiper-slide ">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="wd_con swiper-txtBx rt  wow fadeIn"  data-wow-delay="1.2s">
                            <!-- rt -->
                            <p class="swiper-title ">Empowering and 
                                Investing in Visionary Tech Leaders</p>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="wd_con swiper-txtBx rt  wow fadeIn" data-wow-delay="1.2s">
                            <!-- rt -->
                            <p class="swiper-title ">Focus on Investing in Information Technology 
                                and associated Industry Transformation</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-btnBx">
                    <div id="swiper-btn-prev" class="swiper-btn" ></div>
                    <span class="line"></span>
                    <div id="swiper-btn-next" class="swiper-btn" ></div>
                </div>
                <div></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="capital page-slide deep">
                <div class="wd_con capital_contain">
                    <div class="capital_title">Hua Capital</div>
                    <div class="capital_bg">
                        <div class="capital_bg_des">Hua Capital was founded in 2015 by former executives from leading global technology companies and seasoned investors. We specialize in investing in information technology and associated industry transformation. Our mission is to empower visionary tech leaders through value investments, fostering the growth of industry-leading enterprises.
                        </div>
                        <img class="icon_opinion" src="./img/capital_opinion.svg" alt="">
                        <img class="icon_resource" src="./img/capital_resource.svg" alt="">
                        <img class="icon_method" src="./img/capital_method.svg" alt="">

                        <div class="capital_center" >
                            <p class="capital_center_label">Value Propostion:</p>
                            <p class="capital_center_title">Industry-focused<br> Investment Institution</p>
                        </div>

                        <div class="capital_bg_item capital_opinion">
                            <div class="capital_bg_item_title">Industry Insights:</div>
                            <p class="capital_bg_item_row">Insight into Technological Transformation Trends<br>through deeply Cultivating Industries</p>
                        </div>
                        <div class="capital_bg_item capital_method">
                            <div class="capital_bg_item_title">Collaboration:</div>
                            <p class="capital_bg_item_row">Gathering and Investing in Synergistic Industrial <br>Ecosystems,Promoting Mutual Growth and Prosperity</p>

                        </div>
                        <div class="capital_bg_item  capital_resource">
                            <div class="capital_bg_item_title">Value-add to portfolio companies</div>
                            <p class="capital_bg_item_row">Average of over 15 years of management and practical<br>experience in leading technology enterprises, <br>accompanying founders in their growth.</p>
                        </div>
                        <a class="btn_about" href="{{ URL::to("about.html") }}">ABOUT US</a>
                    </div>
                </div>
            </div>

            <div class="ho_example page-slide">
                <div class="wd_con ho_example_contain">
                    <div class="ho_example_bg">
                        <a class="logo1 logo" href="https://www.hanshow.com/zh-cn/" target="_blank">
                            <img src="./img/logo_01.png" alt="">
                            <p>A world-leading provider of digital store solutions</p>
                        </a>

                        <a class="logo2 logo" href="https://www.smartx.com/" target="_blank">
                            <img src="./img/logo_02.png" alt="">
                            <p>A leading provider of hyperconverged architecture and enterprise cloud solutions in China</p>
                        </a>

                        <a class="logo3 logo" href="http://flagchip.com.cn/" target="_blank">
                            <img src="./img/logo_03.png" alt="">
                            <p>An emerging developer of high-end control chips for intelligent vehicles in China</p>
                        </a>

                        <a class="logo4 logo" href="http://joywellsemi.com/" target="_blank">
                            <img src="./img/logo_04.png" alt="">
                            <p>China's leading supplier of SerDes/ADC/PLL chip</p>
                        </a>

                        <a class="logo5 logo" href="https://www.kematek.com/" target="_blank">
                            <img src="./img/logo_05.png" alt="">
                            <p>A world-leading developer and manufacturer of ceramic materials, parts, technologies, products and services</p>
                        </a>

                        <a class="logo6 logo" href="https://www.hirain.com/" target="_blank">
                            <img src="./img/logo_06.png" alt="">
                            <p>A leading provider of intelligent automotive products in China </p>
                        </a>

                        <a class="logo7 logo" href="https://keendata.com/" target="_blank">
                            <img src="./img/logo_07.png" alt="">
                            <p>A leading provider of data management, development and mining, and integrated O&M solutions in China</p>
                        </a>

                        <a class="logo8 logo" href="http://www.len-technology.com/" target="_blank">
                            <img src="./img/logo_08.png" alt="">
                            <p>A leader in independent R&D of high-performance auto-grade power chips</p>
                        </a>

                        <a class="logo9 logo" href="https://www.jaguarmicro.com/" target="_blank">
                            <img src="./img/logo_09.png" alt="">
                            <p>A leading player in data processor chips and solutions in China </p>
                        </a>

                        <a class="logo10 logo" href="https://www.jssisemi.cn/" target="_blank">
                            <img src="./img/logo_10.png" alt="">
                            <p>A leading provider of advanced one-stop, mid- and back-channel package and test services</p>
                        </a>

                        <a class="logo11 logo" href="https://www.ldrobot.com/" target="_blank">
                            <img src="./img/logo_11.png" alt="">
                            <p>World's leading provider of service robots and 3D visual integrated solutions</p>
                        </a>

                        <a class="logo12 logo" href="https://www.innoscience.com/cn" target="_blank">
                            <img src="./img/logo_12.png" alt="">
                            <p>A world-leading integrator and manufacturer of the third-generation semiconductors</p>
                        </a>

                        <a class="logo13 logo" href="http://www.nuvoltatech.com.cn/" target="_blank">
                            <img src="./img/logo_13.png" alt="">
                            <p>China's leading supplier in wireless charging solution</p>
                        </a>
                        <a class="logo14 logo" href="https://www.si-in.com/" target="_blank">
                            <img src="./img/logo_14.png" alt="">
                            <p>China's leading solution supplier of ToF sensor chip and intelligent audio</p>
                        </a>
                        <a class="logo15 logo" href="https://www.jscj-elec.com/" target="_blank">
                            <img src="./img/logo_15.png" alt="">
                            <p>A leading company of semiconductor discrete device in China</p>
                        </a>
                    </div>

                    <a class="btn_link btn_more" href="{{ URL::to("case.html") }}">VIEW MORE</a>
                    <div class="md_title">
                        <span class="txt"  >PORTFOLIO</span>
                    </div>
                </div>

            </div>

            <div class='ho_news page-slide deep'>
                <div class="wd_con ho_news_contain clearfix">
                    <div class="md_title">
                        <span class="txt" >RECENT<br>NEWS</span>
                    </div>

                    <div class="newBx">
                        <ul class="news" >
                            @foreach($indexNews as $data)
                            <li class="news_item">
                                <a href="{{ URL::to('/news_detail_'.$data->id.'.html') }}" target="_blank">
                                    <dl class="news_item_dl">
                                        <dt class="imgCase"><img src="{{ Storage::url($data->thumb) }}" alt=""></dt>
                                        <dd class="des">
                                            <p class="date">{{ $data->day }}</p>
                                            <p class="txt clampLine2">{{ $data->title }}</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                        <a class="btn_link btn_more" href="{{ URL::to('news.html') }}">VIEW MORE</a>
                    </div>
                </div>
            </div>

            <!-- mobile -->
            <div class="home_module_nav">
                <a class="item" href="{{ URL::to('about.html') }}"><span class="title">ABOUT US</span></a>
                <a class="item" href="{{ URL::to('case.html') }}"><span class="title">PORTFOLIO</span></a>
                <a class="item" href="{{ URL::to('team.html') }}"><span class="title">MANAGEMENT<br>TEAM</span></a>
                <a class="item" href="{{ URL::to('empower.html') }}"><span class="title">POST INVESTMENT<br>EMPOWERMENT</span></a>
                <a class="item" href="{{ URL::to('contact.html') }}"><span class="title">CONTACT</span></a>
            </div>
            <ul class="home_mobile_content">
                <li class="item" >
                    <a href="{{ URL::to('about.html') }}">
                        <i class="imgCase"><img src="img/home_mobile_banner1.jpg" alt=""></i>
                        <div class="des">
                            <p class="des_title">ABOUT US</p>
                            <p class="des_txt">Explore, invest and hatch new leaders in technology industry, striving for the rise of the tech enterprises.</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                <a href="{{ URL::to('case.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner2.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">PORTFOLIO</p>
                        <p class="des_txt">Investment Cases: All in the third-generation information technology, focus on investing in IT and associated industry transformation.</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="{{ URL::to('team.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner3.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">MANAGEMENT TEAM</p>
                        <p class="des_txt">Management Team: possess practical growth experience in leading technology companies, insight into industry trends and resources in industry Eco-system.</p>
                    </div>
                </a>
            </li>
            <li class="item" >
                <a href="{{ URL::to('empower.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner4.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">POST INVESTMENT EMPOWERMENT</p>
                        <p class="des_txt">Post-investment Empowerment: Promote growth for further development, empower technology companies to achieve sustainable development and long-term success.</p>
                    </div>
                </a>
            </li>
            <li class="item" >
                <a href="{{ URL::to('news.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner5.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">RECENT NEWS</p>
                        <p class="des_txt">News feed:Stay updated with important news and viewpoints about Hua Capital and our ecosystem partners in the technology industry. </p>
                    </div>
                </a>
            </li>
            </ul>
            <x-foot-contact />
        </div>
    </div>

    <!-- back top slider index=0 -->
    <div class="backTopBx">
        <div class="btn_backTop"></div>
        <img class="wechat_qr" src="img/qr.jpg" alt="">
        <p class="title">Scan the QR code to follow Hua Capital</p>
    </div>
</div>
<script>
    new WOW().init();

    var mySwiper = new Swiper('.swiper',{
        loop: true,
        autoplay: 5000,
        speed:1000,
        pagination : '.swiper-pagination',
        onSlideClick:function(swiper){
            if(swiper.activeLoopIndex===0){
                fullPageSwiper.swipeTo(1,1000,true) //跳首页第二屏
            }
            else if(swiper.activeLoopIndex===1){
                location.href='./empower.html'  // 跳投后赋能
            }
            else if(swiper.activeLoopIndex===2){
                location.href='./case.html'  // 跳投资案例
            }
        }
        // resizeReInit:true,
    });

    $('#swiper-btn-prev').click(function(){
        mySwiper.swipePrev();
    })
    $('#swiper-btn-next').click(function(){
        mySwiper.swipeNext();
    })


    // swiper-btn hover none event
    $('.swiper-btn').hover(function(e){
        e.stopPropagation();
    },function(e){
        e.stopPropagation();
    })

    // swiper hover btn show
    // $('.swiper_home').hover(function(){
    //     $('.swiper-btn').show()
    // },function(){
    //     $('.swiper-btn').hide()
    // })

    var fullPageSwiper = new Swiper('.pageContainer',{
        loop: false,
        speed:500,
        mode:'vertical',
        slidesPerView:'auto',
        mousewheelControl : true,
        keyboardControl : true,
        wrapperClass : 'page-wrapper',
        slideClass : 'page-slide',
        // pagination: '.pagination',
        grabCursor: true,
        paginationClickable: true,
        longSwipesRatio:0.1,
        // resizeReInit:true,
        onSlideChangeEnd:fullPageChange,
        onSlideChangeStart:fullPageChangeStart,

    });
    var bodyWidth = document.documentElement.clientWidth;
        if(bodyWidth<1000){
            fullPageSwiper.destroy()
        }

    $('.pageBar_item').click(function(){
        var index = $(this).index()
        fullPageSwiper.swipeTo(index,1000,true)
    })
    $('.pageBar_item').hover(function(){
        $(this).addClass('hover')
    },function(){
        $(this).removeClass('hover')
    })
    function fullPageChangeStart(){
        let index = fullPageSwiper.activeIndex
        $(".pageBar_item").removeClass('active')
        $(".pageBar_item").eq(index).addClass('active')
    }
    function fullPageChange(){
        let index = fullPageSwiper.activeIndex
        switch (index){
            case 0:
                $(".header").hasClass('transparent') ? null :$(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").hide()
                $(".backTopBx").removeClass('white')

                break
            case 1:
                $(".header").hasClass('transparent') ? null : $(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").removeClass('white')

                break
            case 2:
                $(".header").hasClass('deep') ? null : $(".header").addClass('deep');
                $(".header").removeClass('bg')
                $(".header").removeClass('transparent')
                $('.logoCase img').attr("src",'img/logo_white.png')
                $('.nav_item.en img').attr("src",'img/en_white.svg')
                $(".backTopBx").show()
                $(".backTopBx").addClass('white')
                break
            case 3:
                $(".header").hasClass('transparent') ? null : $(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").removeClass('white')
                break
            case 4:
                $(".header").hasClass('bg') ? null : $(".header").addClass('bg');
                $(".header").removeClass('deep')
                $(".header").removeClass('transparent')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").addClass('white')
                break
            default:
                $(".header").addClass('bg')
                break;

        }
    }

    $(".btn_backTop").click(function(){
        fullPageSwiper.swipeTo(0,1000,true)
    })

    window.addEventListener('resize',  throttle(initSwiper,200))
    function throttle(fn, delay){
        var timer = null;
        return function(){
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function(){
                fn.apply(context, args);
            }, delay);
        };
    };
    function initSwiper(){
        mySwiper.reInit()
        mySwiper.swipeTo(0,1000,true)
    }

    // 显示屏宽高 test
    // function getScreenInfo(){
    //     var screenHeight =  window.screen.height
    //     var screenWidth=  window.screen.width
    //     var bodyHeight =  document.body.clientHeight
    //     var bodyWidth=  document.body.clientWidth
    //     console.log(window)
    //     $('#screenInfo').text(`body:${bodyWidth} * ${bodyHeight}`)
    // }

    // getScreenInfo()
    // window.addEventListener("resize", function(){
    //     getScreenInfo()
    // })
</script>

<x-convertlab />
</body>
</html>

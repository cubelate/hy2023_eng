<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HUA CAPITAL - MANAGEMENT TEAM</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/common.css?v=10">
    <link rel="stylesheet" href="./css/style.css?t=3">
    <script src="./js/jquery.min.js"></script>
    {{-- <script src="./js/myJs.js?t=11"></script> --}}
</head>
<body>
<div class="header bg">
    <x-nav />
</div>

<div class="flex-frame">
    <div class="team">
        <div class="team_banner">
            <div class="wd_con team_banner_contain">
                <div class="title">Investment Team</div>
                <div class="subTitle">A special force for<br> hard-tech investment</div>
                <div class="des">
                Hua Capital is dedicated to cultivating industrial talents, with the investment team averaging over 15 years of management and practical experience in leading technology companies, earning them the reputation of being a "special forces" in hard-tech investment. The team adheres to "agility, flexibility, coordination, and collaborative efforts," employing trend-oriented industry insights, interconnected resource networks, and practical experience in enterprise growth to enhance investment success rates and post-investment growth.
                </div>
            </div>
        </div>

        <div class="team_introduction wd_con">

        </div>

        <div class="team_content">
            <ul class="teamers clearfix">
                @foreach($teams as $data)
                <li class="item">
                    <div class="item_case">
                        <img class="avatar" src="{{ Storage::url($data->image) }}" alt="" loading="lazy">
                        <div class="des">
                            <p class="name">{{ $data->name }}</p>
                            @if ($data->show_title)
                                <p class="position">{{ $data->title }}</p>
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div id="teamerInfo">
        <div class="wd_con teamerInfo_contain clearfix">
            <div class="lt">
                <i class="imgCase"><img id="bigTeamerAvatar"  src="" alt=""></i>
                <div class="info">
                    <p class="name" id="teamerName"></p>
                    <p class="position" id="teamerPosition"></p>
                </div>
            </div>
            <div class="des" >
                <div id="teamerIntro">
                    <p></p>
                </div>
                <!-- <a class="btn_bp" href="https://host.convertlab.com/p/b3827c" target="_blank">BP投送</a> -->
            </div>

            <div class="btn_close"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // team bounceframe
            var teamData = [
                @foreach($teams as $data)
                {name:'{{ $data->name }}', bp: '{{ $data->accept_bp }}', position:'{{ $data->title }}',imgName:'{{ Storage::url($data->image_big) }}',des:`{!! $data->content !!}`},
                @endforeach
            ]

            // click teamer 
            $('.teamers .item').click(function(e){
                e.stopPropagation();
                var index = $(this).index()
                getBounceframeInfo(index)
                $('body').css('overflow-y','hidden')
                $('#teamerInfo').addClass('activeFrame ')
            })

            function getBounceframeInfo(index){
                console.log(index)
                var obj = teamData[index]
       
                
                $('#teamerName').text(obj.name)
                $('#teamerPosition').text(obj.position)
                $('#bigTeamerAvatar').css('visibility','visible')
                $('#bigTeamerAvatar').attr("src", obj.imgName)
                $("#teamerIntro p").remove();
                $('#teamerIntro').append(obj.des)
                if(obj.bp == '1'){
                    var btnHtml = '<a class="btn_bp" href="/form-bp.html" target="_blank">BP Delivery</a>'
                    $('#teamerIntro').append(btnHtml)
                }   

            }

            $('#teamerInfo').click(function(e){
                e.stopPropagation();
            })
            $('#teamerInfo .btn_close').click(closeBounceFrame)

            $('body').click(closeBounceFrame)

            function closeBounceFrame(){
                var isHas =  $('#teamerInfo').hasClass('activeFrame')
                if(isHas){
                    $('#teamerInfo').removeClass('activeFrame')
                    $('body').css('overflow-y','auto')
                    $('#teamerName').text('')
                    $('#teamerPosition').text('')
                    $('#bigTeamerAvatar').css('visibility','hidden')
                    $('#bigTeamerAvatar').attr("src","")
                    $("#teamerIntro p").remove();
                    $("#teamerIntro .btn_bp").remove();
                }

                // mobile nav
                var isMobileNav = $('body').hasClass('bodyMask')
                if(isMobileNav){
                    mobileNavTodo()
                }
            }



            // form 
            // select
            $('.form_select .inputBtn').click(function(){
                $('.form_selectOption').toggle();
            })
            $('.form_selectOption li').click(function(){
                var val = $(this).text()
                $('.form_select .inputBtn').val(val)
                $('.form_selectOption').toggle();
            })

            // menu
            $('.btn_menu').click(function(){
                mobileNavTodo()
            })
            function mobileNavTodo(){
                $('.header .nav').slideToggle('normal',function(){
                    $('body').toggleClass('bodyMask')
                })
            }
            $('.header').click(function(e){
                e.stopPropagation();
            })



            })


    </script>
    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>

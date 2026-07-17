<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | HyT Capital</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteKeywords() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" type="image/png" href="/favicon.png">
    <x-org-schema />
    <link rel="stylesheet" href="./css/flex_default.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/flex_style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/flex.js"></script>
</head>
<body class="contactUsBody">
<div class="header">
    <x-nav />
</div>
<div class="flex-frame contactUs">
    <div class="contactUs_content ">
        <div class="wd_con contactUs_contain clearfix">
            <div class="ltBar">
                <a class="btn" href="{{ URL::to("form-bp.html") }}" target="_blank">BP delivery</a>
                <a class="btn" href="{{ URL::to("form-reservation.html") }}" target="_blank">Appointment</a>
                <a class="btn" href="{{ URL::to("job.html") }}" target="_blank">Join us</a>

                <div class="contact_ways">
                    <div class="item">
                        <img class="icon" src="./img/ico_contact_1.svg" alt="">
                        <p class="txt">Tel.:<span class="txt_val">0755-86968295</span></p>
                    </div>

                    <div class="item">
                        <img class="icon" src="./img/ico_contact_2.svg" alt="">
                        <p class="txt">Media:<span class="txt_val">pr@hua­cap­i­tal.com</span></p>
                    </div>

                    <div class="item">
                        <img class="icon" src="./img/ico_contact_3.svg" alt="">
                        <p class="txt">Join us:<span class="txt_val">hr@hua­cap­i­tal.com</span></p>
                    </div>
                </div>
            </div>

            <ul class="positionBx">
                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">SHEN ZHEN</div>
                        <div class="des">Haitang No.3 Villa, Yi Dexuan, Nanshan District, Shenzhen</div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=22.555091,113.990494&title=深圳市南山区侨香路4066号懿德轩海棠道3号&content=懿德轩&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_sz.png" alt="">
                    </div>
                </li>

                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">SHANG HAI</div>
                        <div class="des">Room 3004, Jing'an Kerry Center Office Building T2, Nanjing West Road, Jing'an District, Shanghai
                        </div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=31.230297,121.455552&title=上海市静安区南京西路静安嘉里中心办公楼二座&content=静安嘉里中心办公楼-2座&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_sh.gif" alt="">
                    </div>
                </li>

                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">HONG KONG</div>
                        <div class="des">Units 5501-5502 &amp; 5513, 55th Floor, The Center, 99 Queen's Road Central, Central, Hong Kong</div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=22.287500,114.165400&title=香港中环皇后大道中99号中环中心55楼5501-5502及5513室&content=中环中心&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_hk.gif" alt="">
                    </div>
                </li>


            </ul>
        </div>
    </div>

</div>
<x-convertlab />
</body>
</html>

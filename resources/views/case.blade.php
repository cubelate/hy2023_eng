<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HUA CAPITAL - PORTFOLIO</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/flex_default.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/flex_style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/flex.js"></script>
</head>
<body>
<div class="header">
    <x-nav />
</div>
<div class="flex-frame">
    <div class="content">
        <div class="example_wrap">
            <div class="example_wrap_contain">
                <div class="effect_contain-content">
                    <p class="title  "></p>
                    <p class="des  ">We focus on Investing in IT and associated Industry Transformation. Our investment areas include semiconductors, digitization, robotics, and digital energy. We are committed to helping industry-leading enterprises through value investment and empowerment. We aim to contribute to the rise of the new generation of technology companies.</p>
                </div>
            </div>
        </div>


        <div class="example_content">
            <div class="example_tab  ">
                <div class="item active"><span class="title">ALL INDUSTRIES</span></div>
                <div class="item"><span class="title">SEMICONDUCTOR</span></div>
                <div class="item"><span class="title">CLOUD AND DIGITALIZATION</span></div>
                <div class="item"><span class="title">INTELLIGENT TERMINALS</span></div>
                <div class="item"><span class="title">DIGITAL ENERGY</span></div>
            </div>
            <div class="example_bx  ">
                <!-- 1 -->
                <div class="example_tabContent clearfix active">
                    @foreach($all as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">Stock Code  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                            <div class="exampleNews">
                                <div class="exampleNews_content">
                                    <p class="exampleNews_content_title">News Updates</p>
                                    <ul class="list">
                                        <!-- 只展示1条 -->
                                        <li class="li">
                                            <a href="{{ $data['latest_url'] }}" target="_blank">
                                                <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- 2 -->
                <!-- 半导体 -->
                <div class="example_tabContent clearfix ">
                    @foreach($bdt as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">Stock Code  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">News Updates</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- 3 -->
                <!-- 云于数字化 -->
                <div class="example_tabContent clearfix ">
                    @foreach($yyszh as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">Stock Code  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">News Updates</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- 4 -->
                <!-- 智能终端 -->
                <div class="example_tabContent clearfix ">
                        @foreach($znzd as $data)
                            <div class="item">
                                <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                    @if(isset($data['stock_code']))
                                    <div class="code">Stock Code  {{ $data['stock_code'] }}</div>
                                    @endif
                                    <i class="imgCase">
                                        <img src="{{ Storage::url($data['logo']) }}" alt="">
                                    </i>
                                    <div class="des">
                                        <p class="title clampLine1">{{ $data['name'] }}</p>
                                        <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                    </div>
                                </a>

                                @if(isset($data['latest_title']))
                                    <div class="exampleNews">
                                        <div class="exampleNews_content">
                                            <p class="exampleNews_content_title">News Updates</p>
                                            <ul class="list">
                                                <!-- 只展示1条 -->
                                                <li class="li">
                                                    <a href="{{ $data['latest_url'] }}" target="_blank">
                                                        <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                        <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                </div>

                <!-- 5 -->
                <!-- 数字能源 -->
                <div class="example_tabContent clearfix">
                    @foreach($szny as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">Stock Code  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">News Updates</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>

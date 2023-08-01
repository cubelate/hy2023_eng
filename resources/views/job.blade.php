<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HUA CAPITAL</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/common.css?t={{ time() }}">
    <link rel="stylesheet" href="./css/style.css?t={{ time() }}">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/myJs.js"></script>
</head>
<body>
<div class="header bg">
    <x-nav />
</div>
<div class="flex-frame">
    <div class="from_wrap">
        <div class="form_banner">
            <img src="img/form_banner.png" alt="">
            <div class="form_banner_content">
                <div class="title">HUA CAPITAL</div>
                <div class="des">
                    <p class="des_cn">通过价值投资和赋能·成就行业领导企业</p>
                    <p class="des_en">Achieve industry leading enterprises through value investment and empowerment</p>
                </div>
            </div>
        </div>

        <div class="aplication_content">
            <div class="aplication_content_item">
                <div class="top">Investment Analyst (multi-track)</div>
                <div class="contain">
                    <div class="des">
                        <div class="des_title">Job Responsibilities</div>
                        <div class="des_txt">
                            <p>1. Conduct information collection and research for industries in multi-track fields, and write industry and track analysis reports;</p>
                            <p>2. Conduct communication analysis and opportunity mining on investment projects and founders in the field of focus;</p>
                            <p>3. Conduct research on leading companies, think tanks, research institutes, investors, etc. in the industry, and track the dynamics of key companies;</p>
                            <p>4. Assist organizations to provide management empowerment and value-added services to invested companies.</p>
                        </div>
                    </div>
                    <div class="des">
                        <div class="des_title">job requirements</div>
                        <div class="des_txt">
                            <p>1. With a background in science and engineering, with a master’s degree or above, internship experience in well-known VC/PE institutions or leading industrial companies is preferred;</p>
                            <p>2. Have continuous attention and love for the science and technology track, especially have certain research in the fields of technological development, digitalization, new energy and other fields, and those with relevant industrial background or professional knowledge background are preferred;</p>
                            <p>3. Possess strong professional analysis ability, market/industry research ability and judgment ability, and be able to form their own independent views and opinions based on industry information input;</p>
                            <p>4. Have strong logical thinking ability and learning ability, good communication skills, good self-motivation and efficient execution.</p>
                        </div>
                    </div>

                    <a href="{{ URL::to("form-application-1.html") }}"><div class="submit">Submit your resume</div></a>
                </div>
            </div>

            <div class="aplication_content_item">
                <div class="top">Enterprise Learning Development Specialist</div>
                <div class="contain">
                    <div class="des">
                        <div class="des_title">Job Responsibilities</div>
                        <div class="des_txt">
                            <p>1. Responsible for the design and delivery of training courses within the company and post-investment companies, regularly understand the demands of post-investment companies and adjust the course arrangement;</p>
                            <p>2. Responsible for the whole-process support of the training delivery period, including but not limited to content preparation, lecturer docking, conference arrangement, college follow-up, etc.;</p>
                            <p>3. Be proactive, careful and friendly, and be good at mobilizing resources to solve and implement complex problems;</p>
                            <p>4. Have enthusiasm and interest in talent development and learning growth, and have good interpersonal relationship understanding and connection skills;</p>
                            <p>5. Good audio and video editing skills and copywriting planning ability, proficient in PowerPoint, audio and video editing and other software;</p>
                            <p>6. Aspiring to grow into an independent corporate lecturer/strategic development expert, and have a high interest in corporate strategic operations.</p>
                        </div>
                    </div>
                    <div class="des">
                        <div class="des_title">job requirements</div>
                        <div class="des_txt">
                            <p>1. Fresh graduates with 985/211 undergraduate degree or above or social recruiters within 2 years of graduation;</p>
                            <p>2. Experience in corporate internal training, course design and delivery, independent lecturers, etc. is preferred;</p>
                            <p>3. Good English reading, writing and expression skills;</p>
                            <p>4. High interest in technology, investment, human resource management and other fields.</p>
                        </div>
                    </div>
                    <a href="{{ URL::to("form-application-2.html") }}"><div class="submit">Submit your resume</div></a>
                </div>
            </div>

            <div class="aplication_content_item">
                <div class="top">Fund operation</div>
                <div class="contain">
                    <div class="des">
                        <div class="des_title">Job Responsibilities</div>
                        <div class="des_txt">
                            <p>1. Responsible for data collection, analysis and collation of invested funds, and internally form operational reports based on interview materials;</p>
                            <p>2. Prepare fundraising materials, organize roadshows and investor interviews, follow up fundraising due diligence and other operational related work;</p>
                            <p>3. Regularly communicate with post-investment companies to understand the business and team operation status of the supported companies, and regularly organize reports and send them to relevant personnel;</p>
                            <p>4. Carry out dynamic fund operation data monitoring, follow up the operation status of funds in each period, and form fund operation suggestions.</p>
                        </div>
                    </div>
                    <div class="des">
                        <div class="des_title">job requirements</div>
                        <div class="des_txt">
                            <p>1. Bachelor degree or above from domestic and foreign universities;</p>
                            <p>2. Finance, investment, financial related majors, English can be used as a working language as a bonus item;</p>
                            <p>3.  Understand the operation logic of the primary market, and have contact with the whole process of fund raising, investment, management and withdrawal;</p>
                            <p>4. Possess strong data and document processing ability and excellent communication and coordination ability.</p>
                        </div>
                    </div>
                    <a href="{{ URL::to("form-application-3.html") }}"><div class="submit">Submit your resume</div></a>
                </div>
            </div>

        </div>

    </div>
</div>
<x-convertlab />
</body>
</html>

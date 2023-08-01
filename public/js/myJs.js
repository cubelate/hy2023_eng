$(document).ready(function () {
   // team bounceframe
   var teamData = [
    {name:'Sun Yelin',position:'Founding Partner',imgName:'teamerph01.png',des:[
        'Mr. Sun Yelin possesses extensive experience in the IT industry and investment. He has held senior vice president positions in globally renowned technology companies. During his tenure at Huawei, he served as the Director of the Beijing Research Institute, Global President of Services, Optical Network Product Line President, Commonwealth of Independent States (CIS) Region, and Operations and Regional Management Department President. He has accumulated comprehensive skills in innovation and product portfolio management, investment decision-making, service management, international business expansion, global, regional management, leadership enhancement, and corporate transformation management. Furthermore, he has a wealth of industry resources.',
        'Mr. Sun Yelin holds M.S. and B.S. degrees in Physical Electronics and Optoelectronics from Huazhong University of Science and Technology. ',
        'Featured projects invested by Mr. Sun include Innoscience, Nuvolta, Jaguar Microsystems, EPICMEMS, Flagchip as Flagship, Len Technology, Seek Wave, GalaxyCore, Phlexing, Hanshow, Jingwei Hirain, IDCloudbase Technology, SmartX, CassTime, XForcePlus, and ZHKC.'
    ]},
    {name:'Yang Huajun',position:'Founding Partner',imgName:'teamerph02.png', des:[
        'Mr. Yang Huajun has rich entrepreneurial experience and early-stage investment experience in TMT (Technology, Media, and Telecommunications). He previously served as a partner at N5Capital, responsible for TMT investments and management. Before that, he was a serial entrepreneur with two startup projects/technologies acquired by renowned internet companies. Mr. Yang Huajun is the Vice President and Executive Secretary of the Entrepreneur Association at Huazhong University of Science and Technology, where he has cultivated extensive networks and profound industry resources through long-term dedication.',
        "Mr. Yang Huajun holds a Master of Business Administration (MBA) in Finance from The Chinese University of Hong Kong and a Bachelor's degree in Information Management from Huazhong University of Science and Technology.",
        "Featured projects invested by Mr. Yang include Silicon Integrated Co., Ltd, Nuvolta, Joywell Semi, and Changjing Elec. Tech., Visinex Technology, Vertilite, DERA, JSSI Semi, KemaTek, Sandtek, LDROBOT, Asterfusion, PPIO, Keen, Yunzhanghu and Ichunt.com."
    ]},
    {name:'Tong Guodong',position:'Managing Director and Corporate Growth Partner',imgName:'teamerph03.png', des:[
        "Mr. Tong Guodong coordinates the invested companies' empowerment training, consulting service capacity building, and project implementation. Mr. Tong is dedicated to developing organizational capabilities for business growth and practicing and researching transformation and model methodologies. Before joining the company, he served as Senior Vice President, COO/CHO, Party Committee Secretary, and Legal Representative of eight companies at WuXi AppTec. As a key member, Mr. Tong participated in the organizational capability-building and transformation process that led to the company's listing and a market value increase of HKD 450 billion in just over five years. ",
        `In addition, he has nearly twenty years of management and practical experience in research and development, regional and headquarters operations, and human resources in top global technology companies. He has held positions such as Assistant to the President of the Corporate University, President of Consumer Business for the South Pacific and China, EMT member and HRVP of Consumer Business, and Vice President of the Group's Human Resources Department. Mr. Tong Guodong believes that "effective management can bring about tenfold growth" and emphasizes management and scientific management as the critical path for hard-tech entrepreneurship to achieve excellence. He holds a Master's degree in Law from Wuhan University.`
    ]},
    {name:'He Renlong',position:'Managing Director',imgName:'teamerph04.png', des:[
        `Mr. He Renlong primarily focuses on investments in semiconductors, artificial intelligence, and the Internet of Things. Before joining the company, he served as the Investment Director of the ARM investment department and Vice President of Legend Capital. Earlier in his career, he held research and development management positions at Spreadtrum Communications, Qualcomm Wireless Communications, Silan Microelectronics, and Horizon Robotics, and he also has previous entrepreneurial experience. Mr. He Renlong has over ten years of experience in research and development management and entrepreneurship in the technology industry.`,
        `He Renlong holds a Master's in Communication and Information Systems from Ningbo University and a Bachelor's in Communication Engineering from Zhejiang Normal University.`,
        `Featured projects invested by Mr. He Renlong include Flagship, Len Technology, Muyewei, Seek Wave, AICXTEK, Jaguar Microsystems, JSSI Semi, Sandtek, Jingwei Hirain, and ATECH.`
    ],bp:true},
    {name:'Ren Jianjun',position:'Managing Director',imgName:'teamerph05.png', des:[
        `Mr. Ren Jianjun primarily focuses on investments in cloud, digitization, and artificial intelligence. Before joining the company, he established an innovation and entrepreneurship accelerator. He collaborated with Tencent to support numerous startup companies in strategic planning, organizational development, and market operations in Shenzhen, Guangzhou, and other innovation spaces. He has worked for 16 years in leading global technology companies, accumulating rich work experience in China and North America. He has held positions in marketing, product management departments, and Silicon Valley innovation centers. Mr. Ren Jianjun possesses extensive technical experience in cloud computing and communication networks and is also an expert in strategic design, market planning, and product strategy. He has successfully led the creation of a large-scale communication system that achieved the top global market share.`,
        `Mr. Ren Jianjun holds a Bachelor's in Industrial Automation from Tianjin University.`,
        `Featured projects invested by Mr. Ren Jianjun include SmartX, Asterfusion, DERA, PPIO, GUANCE.COM, and ZHKC.`
    ],bp:true},
    {name:'Huang Wei',position:'Managing Director and General Manager, Fund Management Department',imgName:'teamerph06.png', des:[
        `Ms. Huang Wei is primarily responsible for fund operations, risk control, and investor relations. Before joining the company, she was a Senior Consultant in the Enterprise Risk Department of Ernst & Young (China) Advisory Ltd. As a key member, she participated in consultancy projects for multiple listed companies, including asset restructuring and valuation projects for a large automotive sales group, top-level design projects for a major state-owned venture capital group (including governance architecture, authorization system design, control mode, organizational responsibility design, and risk prevention and control system design), and financial system transformation projects for a Hong Kong-listed telecommunications company. She was awarded the Ernst & Young Excellence Award in 2012 and 2014 and has served clients in various industries, including internet, telecommunications, publishing, pharmaceuticals, automotive, real estate, hotels, and aviation. Ms. Huang Wei has extensive experience in enterprise management consulting and is familiar with investment management in the TMT (Technology, Media, and Telecommunications) sector.`,
        `Ms. Huang Wei holds a Master's in Communication and New Media from the City University of Hong Kong and a Bachelor's in Management from Nanjing University. She also took information management courses as a minor at Tamkang University in Taiwan.`
    ]},
    {name:'Wang Chongru',position:'Executive Director',imgName:'teamerph07.png', des:[
        `Mr. Wang Chongru primarily focuses on investments in new energy. Before joining the company, he participated in establishing Huishoubao, a leading mobile and digital device recycling platform strategically invested by Alibaba. He served as the Product Director and was responsible for overall product planning and implementation. Before that, he worked as a Product Manager at Tencent. Through his past work and entrepreneurial experiences, Mr. Wang Chongru has accumulated rich experience in product and system design. During his tenure at Tencent, he completed nearly 20 related product patents.`,
        `Mr. Wang Chongru holds a Master's degree in Medicine from Huazhong University of Science and Technology, a Bachelor's degree in Science from Huazhong University of Science and Technology, and a Bachelor's degree in Economics from Wuhan University.`,
        `Featured projects invested by Mr. Wang Chongru include Silicon Integrated Co., Ltd, Nuvolta, EPICMEMS, Changjing Elec. Tech., Visinex Technology, Hanshow, IDCloudbase Technology, ZHKC, and Morlus.`
    ],bp:true},
    {name:'Zhang Zhongrong',position:'Executive Director',imgName:'teamerph08.png', des:[
        `Mr. Zhang Zhongrong primarily focuses on investments in cloud， digitization, and artificial intelligence. Before joining the company, he served as Vice President and General Manager of the Cloud Business Operations Center at Youchangjitong (HK: 01588). Previously, he worked at companies such as Sina, UC Browser (formerly known as Ushi), and Samsung China. He also has experience in two entrepreneurial ventures. With over 14 years of experience in internet and mobile internet product operations and entrepreneurship, Mr. Zhang Zhongrong is the author of best-selling books "The Way of Internet Operations" and "The Essence of Operations."`,
        `Mr. Zhang Zhongrong holds a Bachelor's in Computer Science and Technology from Huazhong University of Science and Technology.`,
        `Featured projects invested by Mr. Zhang Zhongrong include LDROBOT, Keen, XForcePlus, Yunzhanghu, and King Chemicals.`
    ],bp:true},
    {name:'Lu Kunlun',position:'Executive Director',imgName:'teamerph09.png', des:[
        `Mr. Lu Kunlun primarily focuses on investments in AI & Robotics. Before joining the company, he worked for 15 years in leading global technology companies. He has held positions responsible for strategic planning, product planning, product development, delivery, and service in enterprise networking product lines and data communication product lines. He has achieved success across the entire process of the ICT industry's business operations.`,
        `Mr. Lu Kunlun holds a Bachelor's in Computer Science and Technology from Huazhong University of Science and Technology.`,
        `Featured projects invested by Mr. Lu Kunlun include LDROBOT, Multiway Robotics, Zongwei, Jiyu, and Yarbot. `
    ],bp:true},
    {name:'Zhang Gang',position:'Executive Director',imgName:'teamerph10.png', des:[
        `Mr. Zhang Gang primarily focuses on investments in cloud and digitization. He has extensive experience in enterprise management consulting, software, and cloud services. Before joining the company, he worked for 18 years at Accenture (Consulting) and Oracle (Software). He provided management consulting, digital transformation, application software/SaaS, data technology, and cloud platform services to large and medium-sized enterprises in China and globally operating companies. Mr. Zhang Gang has been actively involved in CRM strategy, LTC (Lead to Cash) transformation, Contract to Cash integration, as well as business integration with product development IPD (Integrated Product Development), supply chain ISC (Integrated Supply Chain), and financial services IFS (Integrated Financial Services) in leading global technology companies.`,
        `Mr. Zhang Gang holds a Master's and Bachelor's degree from the Beijing University of Science and Technology.`
    ],bp:true},
    {name:'Huang Xi',position:'Investment Director',imgName:'teamerph11.png', des:[
        `Mr. Huang Xi primarily focuses on investments in the semiconductor field. Before joining the company, he worked as a research scientist and senior systems engineer at well-known technology companies such as Bell Labs (China). Mr. Huang is familiar with data centers, fiber optic communications, and industry standards. He applied for and obtained 15 Chinese patents and 2 US patents during his tenure.`,
        `Mr. Huang Xi holds a Ph.D. from the Wuhan National Laboratory for Optoelectronics and the School of Optoelectronic Science and Engineering at Huazhong University of Science and Technology. He also has a Bachelor's degree from the School of Physics at Huazhong University of Science and Technology.`,
        `Featured projects invested by Mr. Huang Xi include Innoscience, Joywell Semi, Hypersics Semiconductor, Phlexing, KemaTek, PN Junction Semiconductor, and GalaxyCore.`
    ],bp:true},
    {name:'Han Tao',position:'Vice President of Investment',imgName:'teamerph12.png', des:[
        `Mr. Han Tao primarily focuses on semiconductors and Internet of Things (IoT) investments. With over ten years of experience in the semiconductor sensor industry, he worked at internationally renowned sensor chip companies such as Sciosense, AMS, and Melexis before joining the company. He also participated in entrepreneurship at MultiTech and held important positions in research and development, applications, product management, marketing, and sales, accumulating rich experience in the semiconductor industry.`,
        `Mr. Han Tao holds an EMBA degree from Shanghai Jiao Tong University, a Master's in Sensing Technology and Automation from the University of Science and Technology of China, and a Bachelor's degree in Mechanical Electronic Engineering from Central South University. He also holds a second degree in Business Administration.`,
        `Featured projects invested by Mr. Han Tao include MSTM, MEMS, and Prophesee. `
    ],bp:true},
    {name:'Wang Jia',position:'Vice President of Investment',imgName:'teamerph13.png', des:[
        `Ms. Wang Jia primarily focuses on investments in semiconductor equipment, materials, packaging and testing, and advanced functional materials. She is familiar with both international and domestic semiconductor supply chains. Before joining the company, Mrs. Wang worked in the supply chain department at TSMC (Taiwan Semiconductor Manufacturing Company) for over ten years. She led a team responsible for procuring semiconductor equipment, spare parts, and raw materials. Mrs. Wang also managed capacity expansion projects. After that, she served as the head of the equipment and materials procurement department in a third-generation unicorn company.`,
        `Ms. Wang Jia holds a Bachelor's degree and a Master's degree in Applied Chemistry from the Harbin Institute of Technology.`,
        `Featured projects invested by Mrs. Wang Jia include NASO TECH and Yuangui Materials. `
    ],bp:true},
    {name:'Zhu Lingjia ',position:'Vice President of Investment',imgName:'teamerph14.png', des:[
        `Ms. Zhu Lingjia primarily focuses on investments in the semiconductor and automotive sectors. Before joining the company, she served as ARM's Automotive IP Market and Ecosystem Manager. Earlier in her career, she worked as the Business Manager for the Automotive Processor Division in the Asia-Pacific region at NXP Semiconductors. `,
        `Ms. Zhu Lingjia holds a Master's in Electronic Engineering from the Hong Kong University of Science and Technology and a Bachelor's in Electronic Information and Technology from Fudan University.She has seven years of experience in market product strategy development and operations in related industries.`,
        `Featured projects invested by Ms. Zhu Lingjia include Jaguar Microsystems, Len Technology, and ATECH.`
    ],bp:true},
    {name:'Lin Guiping',position:'Executive Director',imgName:'teamerph15.png', des:[
        `Mr. Lin Guiping is primarily responsible for the post-investment management of the fund. Before joining the company, he served as the Dean of the Yuanzhi Business Model Research Institute and a Senior Researcher at the Peking University Business Model Research Center. He provided consulting and advisory services in business model and strategic planning design for numerous large and medium-sized enterprises. Some companies he has collaborated with include Skyworth Group, Zhongtong Electronics, Vanke Group, Rainbow Department Store, Beiqingsong, Herong Group, and AVIC International. He has previously worked for China Telecom. Mr. Lin Guiping is the author of books such as "The Economic Explanation of Business Models" and "Analysis of Profit Models," and he received the "4th Management Science Award" in 2014.`,
        `Mr. Lin Guiping holds a Ph.D. in Economics from Peking University, a Master's degree in Finance from the University of Hong Kong, and a Bachelor's degree in Information Engineering from Beijing University of Posts and Telecommunications.`
    ]},

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
    var txt = ''
    obj.des.forEach(item=>{
        txt +='<p>'+item +'</p>'
    })
    $('#teamerName').text(obj.name)
    $('#teamerPosition').text(obj.position)
    $('#bigTeamerAvatar').css('visibility','visible')
    $('#bigTeamerAvatar').attr("src","./img/"+obj.imgName)
    $("#teamerIntro p").remove();
    $('#teamerIntro').append(txt)
    if(obj.bp){
        var btnHtml = '<a class="btn_bp" href="/form-bp.html" target="_blank">BP投送</a>'
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


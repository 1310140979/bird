<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Keywords" content="矿大,校庆" />
	<title>矿大110年校庆</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" /> -->
	<link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">

	<link rel="stylesheet" href="css/style.css">

	<!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/fontawesome-all.min.css"> -->
	<link rel="stylesheet" href="css/bootsnav.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Days+One'>
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
		.body{
			background-color: #f4f1ec;
		}
		.biaoti{
			position: relative;
			z-index: 1;
			height: 350px;
			background-color:#f4f1ec;
			margin-top: 0px;
			padding: 0px;
		}
		.wrap{
			position: relative;
		}
		article img {
    margin-left: 93px;
    width: 114px;
		}
		 @font-face {
  		font-family: 'canruoxiahua';
			src:url('./fonts/canruoxiahua.ttf') format('truetype');
		}
		@font-face {
  font-family: 'icomoon';
  src:  url('./fonts/icomoon.eot');
  src:  url('./fonts/icomoon.eot') format('embedded-opentype'),
    url('./fonts/icomoon.ttf') format('truetype'),
    url('./fonts/icomoon.woff') format('woff'),
    url('./fonts/icomoon.svg') format('svg');
  font-weight: normal;
  font-style: normal;
}
		.htmleaf-header {
			font-family: 'canruoxiahua';
		}
		.wrap,.front{
			max-height: 325px;
		}
		.htmleaf-header{
			max-height: 325px;
			margin-left: 20px;
		}
		#cube{
			max-height: 325px;
		}
		#cube .col-md-8,#cube .col-sm-12,.cube-container,#cube .col-md-4{
			max-height: 325px;
		}
		.previous,.next{
			color: rgb(218, 55, 96);
			font-family: 'icomoon';
		}
		.crxh{
			font-family: 'canruoxiahua'
		} 
		#cube .col-md-8,#cube .col-sm-12, .cube-container,#cube .col-md-4 {
			max-width: 1445px;
		}

			.demo{ background-color: #54a0ff; padding-top: 30px;padding-bottom: 30px;}
	nav.navbar.bootsnav{
			background: none;
			font-family: 'Sarabun', sans-serif;
			margin-bottom: 150px;
			border: none;
	}
	nav.navbar.bootsnav ul.nav > li{ margin-right: 20px; }
	nav.navbar.bootsnav ul.nav > li > a{
			color: #fff;
			background-color: transparent;
			font-size: 15px;
			font-weight: 600;
			text-transform: uppercase;
			padding: 10px 15px;
			border-radius: 0;
			overflow: hidden;
			position: relative;
			transition: all .5s ease;
			z-index: 1;
	}
	nav.navbar.bootsnav ul.nav > li.dropdown > a{ padding: 10px 30px 10px 15px; }
	nav.navbar.bootsnav ul.nav > li.active > a,
	nav.navbar.bootsnav ul.nav > li.active > a:hover,
	nav.navbar.bootsnav ul.nav > li > a:hover,
	nav.navbar.bootsnav ul.nav > li.on > a{
			color: #fff;
			background: transparent !important;
			border-color: transparent;
	}
	nav.navbar.bootsnav ul.nav > li > a > span:before,
	nav.navbar.bootsnav ul.nav > li > a > span:after{
			content: "";
			background-color: rgba(255,255,255,0.5);
			width: 50%;
			height: 100%;
			position: absolute;
			left: -100%;
			top: 0;
			transition: all 0.3s ease 0s;
	}
	nav.navbar.bootsnav ul.nav > li > a > span:after{
			width: 100%;
			height: 2px;
			top: 50%;
			transform: translateY(-50%);
			left: 100%;
			transition: all 0.3s ease 0.1s;
	}
	nav.navbar.bootsnav ul.nav > li:hover > a > span:before,
	nav.navbar.bootsnav ul.nav > li.active > a > span:before{
			left: 100%;
	}
	nav.navbar.bootsnav ul.nav > li:hover > a > span:after,
	nav.navbar.bootsnav ul.nav > li.active > a > span:after{
			left:0;
	}
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu li a{ color: #fff !important; }
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content li a:hover,
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu li a:hover,
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu li a.dropdown-toggle:active,
	nav.navbar ul.nav li.dropdown.on ul.dropdown-menu li.dropdown.on > a{
			background: #fff !important;
			color: #1775e8 !important;
			box-shadow: 0 0 8px #fff inset;
	}
	nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after{
			position: absolute;
			top: 10px;
			right: 10px;
			margin: 0 0 0 7px;
	}
	nav.navbar.bootsnav ul.nav > li.dropdown > ul{
			top: 100%;
			transition: all 0.8s ease 0s;
	}
	nav.navbar.bootsnav ul.nav > li.dropdown.on > ul{ top: 120%; }
	.dropdown-menu.multi-dropdown{
			position: absolute;
			left: -100% !important;
	}
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu{
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			background-color: #38254a;
			border: none;
	}
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content li{ font-size: 14px; }
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .menu-col li a{ padding-left: 10px; }
	nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .title{
			color: #fff;
			font-size: 16px;
			font-weight: bold;
	}
	@media only screen and (max-width:990px){
			.dropdown-menu.multi-dropdown{ left: 0 !important; }
			nav.navbar.bootsnav .navbar-toggle{
					color: #fff;
					background: transparent !important;
			}
			nav.navbar.bootsnav.navbar-mobile .navbar-collapse{ background-color: #1775e8; }
			nav.navbar.bootsnav ul.nav>li{ margin: 5px auto 15px; }
			nav.navbar.bootsnav.navbar-mobile ul.nav>li>a{
					color: #fff;
					text-align: center;
					padding: 10px 15px;
					border: none;
			}
			nav.navbar.bootsnav ul.nav>li.dropdown>a{ padding: 10px 10px 10px 17px; }
			nav.navbar.bootsnav ul.nav>li.active>a,
			nav.navbar.bootsnav ul.nav>li>a:hover,
			nav.navbar.bootsnav ul.nav>li.on>a{
					color: #fff;
			}
			nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu>li>a{
					padding-left: 10px;
					border-bottom-color: none;
			}
			nav.navbar.bootsnav ul.nav>li.dropdown>ul{ top: 100%; }
			nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .title{
					color: #fff;
					font-size: 14px;
					font-weight: normal;
					padding-left: 10px;
			}
	}
	.demo {
    background-image: url('http://110.cumt.edu.cn/_upload/article/images/ea/46/27faa0c349de8c99bb70e74defc2/b2470d7e-3890-4550-ab8b-e6156c3cb52c.jpg');
    border-bottom: 2px solid gray;
}
	.bgc{
	background-color: #38254a;
    height: 50px;
    margin-top: -30px;
	border-top: 1.5px solid #886f9f;
	border-bottom: 1.5px solid #886f9f;
	}
	.container {
    z-index: 2;
    margin-top: -44px;
}
nav.navbar.bootsnav ul.nav > li > a {
    font-size: 24px;
    margin-left: 56px;
}
.dropdown-toggle{
	font-family: 'icomoon';
}
#clock{
			font-family: 'Days One',"Microsoft YaHei", Arial,sans-serif;
			font-size: 2em;
		}
		.htmleaf-container {
    z-index: 1;
    position: relative;
    text-align: center;
    /* width: 300px; */
    /* float: left; */
    /* display: inline; */
}
.log{
position: absolute;
z-index: 2;
width: 34px;
margin-left: 1391px;

}
.log a{
	text-decoration:none; 
color:#ccc; 
}
.timeLine {
	background-image:url(http://110.cumt.edu.cn/_upload/tpl/05/6e/1390/template1390/images/containerbg.jpg);

}

		</style>
</head>
<body>
	<div class="wrap" id="wrap">
		
			<section class="cube-container">
					<div class="log">
							<a href="./login.html">欢迎你，<?php echo $_POST['name']; ?></a>
						</div>
			  <div id="cube">
						
			    <figure class="front">
			      <div class="col-md-8 col-sm-12" style="background-image: url('http://www.cumt.edu.cn/_upload/article/images/86/b0/ebb3db4f43989490e83f0f222359/c4e9664d-1671-4c0b-b78b-0ae76f37c1c4.jpg');"></div>
			      <div class="col-md-4" style="height:inherit;display:inline-block;">
						  <article>
						    <img src="img/profile.svg" alt="logo" class="mb-4">
						    <header class="htmleaf-header">
			<h1>百年矿大 再创辉煌 <span>矿大110年校庆</span></h1>
			<div class="htmleaf-links">
			
			</div>
		</header>
						  </article>  
			       </div>
			    </figure>
			    <figure class="back">
			    <div class="col-md-8" style="background-image:url('http://www.cumt.edu.cn/_upload/article/images/8f/d1/61a37c7d4c9997863d000df77329/5ae8ba2b-1716-44e5-a262-2c32fac57c44.jpg');"></div>
			      <div class="col-md-4" style="height:inherit;display:inline-block;">
						  <article>
						    <img src="img/profile.svg" alt="logo" class="mb-4">
								<p></p>
			        <p class="text-center crxh">&nbsp;&nbsp;&nbsp;寒窗躬耕廿余载，往事如风，依稀旧人影。</p>
						  </article>
			      </div>
			    </figure>
			    <figure class="right">
			      <div class="col-md-8" style="background-image:url('http://www.cumt.edu.cn/_upload/article/images/f1/0e/aeac8c2a4c45876bec1bd7e6b35d/068ebef1-9238-41c6-9bb5-098365f10592.jpg');"></div>
			      <div class="col-md-4" style="height:inherit;display:inline-block;">
						  <article>
								<img src="img/profile.svg" alt="logo" class="mb-4">
								<p></p>
			        <p class="text-center crxh">&nbsp;&nbsp;&nbsp;青衣墨笔山河颜，往圣绝学自风流。</p>
						  </article>
			      </div>
			        
			      </figure>
			    <figure class="left">
			      <div class="col-md-8" style="background-image:url('http://www.cumt.edu.cn/_upload/article/images/da/b8/32c1e15843fb97a9c8a709f86d8f/508581ab-fb8d-47b4-9136-91926619c6c1.jpg');"></div>
			      <div class="col-md-4" style="height:inherit;display:inline-block;">
						  <article>
								<img src="img/profile.svg" alt="logo" class="mb-4">
								<p></p>
			        <p class="text-center crxh">&nbsp;&nbsp;&nbsp;桃李廊下话春秋，庠序之教，诗书传古今。</p>
						  </article>
			      </div>
			    </figure>
			    <figure class="top">5</figure>
			    <!-- <figure class="bottom">6</figure> -->
			  </div>
			</section>
				
			<div class="button-wrap">
					<button class="previous"></button>
					<button class="next"></button>  
				</div>
			</div>

		
	

	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script type="text/javascript">
		var counter = 0;
		$('.next').on('click', function(){
		  counter -= 90;
		  var rotation = 'translateZ( -50vw ) rotateY( ' + counter + 'deg )';
		  $('#cube').css('transform', rotation);
		});
		$('.previous').on('click', function(){
		  counter += 90;
		  var rotation = 'translateZ( -50vw ) rotateY( ' + counter + 'deg )';
		  $('#cube').css('transform', rotation);
		});
	function myfunction(){
		counter -= 90;
		  var rotation = 'translateZ( -50vw ) rotateY( ' + counter + 'deg )';
		  $('#cube').css('transform', rotation);
	}
	// $(document).ready(function(){
	// 	setInterval("myfunction()",1000);
	// }
	function my$(id) {
        return document.getElementById(id);
    }
	var wrap=my$("wrap");
	var timeId=setInterval(myfunction,6000);
	wrap.onmouseover=function () {
        clearInterval(timeId);
	};
	wrap.onmouseout=function () {
        timeId=setInterval(myfunction,6000);
    };

	</script>
	<div class="biaoti">
		<div class="htmleaf-container1">
		
			<div class="demo" style="min-height:350px;">
				<div class="bgc">

				</div>
					<div class="container">
							<div class="row">
									<div class="col-md-12">
											<nav class="navbar navbar-default navbar-mobile bootsnav">
													<div class="navbar-header">
															<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
																	<i class="fa fa-bars"></i>
															</button>
													</div>
													<div class="collapse navbar-collapse" id="navbar-menu">
															<ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
																	<li><a href="#" data-hover="Home">矿大首页 <span data-hover="Home"></span></a></li>
																	<li><a href="introduce.html" data-hover="About">学校简介 <span data-hover="About"></span></a>
																	</li>
																	<li><a href="zhimingxuezhe.html" data-hover="About">知名学者 <span data-hover="About"></span></a>
																	</li>

																	<li><a href="donate.html" data-hover="About">我要捐赠 <span data-hover="About"></span></a>
																	</li>
																	<li class="dropdown">
																			<a href="#" class="dropdown-toggle" data-toggle="dropdown"
																					data-hover="Pages">相关链接<span data-hover="Pages"></span></a>
																			<ul class="dropdown-menu">
																					<li><a href="http://www.cumt.edu.cn/">矿大主页</a></li>
																					<li><a href="http://www.cumt.edu.cn/13724/list.htm">矿大视点新闻</a></li>
																					<li><a href="http://xyh.cumt.edu.cn/">校友会</a></li>
																					<li><a href="http://dsh.cumt.edu.cn/">董事会</a></li>
																					<li><a href="http://edf.cumt.edu.cn/">教育发展基金会</a></li>
																				
																			</ul>
																	</li>
															</ul>
													</div>
											</nav>
									</div>
							</div>
					</div>
			</div>
		</div>
		
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/bootsnav.js"></script>
	</div>
	<div class="htmleaf2-content" >
			<style scoped>
					@import "./css/style1.css";
			</style>
			<div class="timeLine">
					
				<div class="row">
						
					<div class="lineHeader hidden-sm hidden-xs"></div>
					<div class="lineFooter hidden-sm hidden-xs"></div>
					
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item" >
							<div class="caption">
								<div class="star center-block">
									<span class="h3">1</span>
									<span>1909-</span>
									<span>1915</span>
								</div>
								<div class="image">
									<img src="img/1.jpg">
									<div class="title">
										<h2>焦作路矿学堂 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">中国矿业大学的前身，是创办于1909年(清宣统元年)的焦作路矿学堂。这是一所最初由英国福公司(PekingSyndicateLimited)投资创办，在我国建立最早的近代矿业高等学府。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">2</span>
									<span>1915-</span>
									<span>1919</span>
								</div>
								<div class="image">
									<img src="img/2.jpg">
									<div class="title">
										<h2>福中矿务学校<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">1915年福公司和中原公司合组为福中总公司，恢复了停办两年的路矿学堂，校址设在开封改名为河南福中矿务学校。这是国内当时惟一的中外合资的私立工科高等学校和矿业高等学校。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">3</span>
									<span>1919-</span>
									<span>1921</span>
								</div>
								<div class="image">
									<img src="img/3.jpg">
									<div class="title">
										<h2>福中矿务专门学校 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">根据《壬子癸丑学制》和《福中矿务学校管理规则》，学校于1919年2月举办专门本科后改名为福中矿务专门学校，自此，学校进入正科的创始时期，成为一所既有预科又有本科的专门学校。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">4</span>
									<span>1931-</span>
									<span>1938</span>
								</div>
								<div class="image">
									<img src="img/4.jpg">
									<div class="title">
										<h2>焦作工学院 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">学院的教育体系是以美国的高校、特别是科罗拉多矿务大学、密苏里大学、哥伦比亚大学为蓝本的，办学颇有章法，基础颇称稳固。全院师生以“同舟共济之精神，朴实耐劳之习惯”努力奋斗，使学校能够获得不断的发展。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">5</span>
									<span>1950</span>
									<span>1953</span>
								</div>
								<div class="image">
									<img src="img/5.jpg">
									<div class="title">
										<h2>中国矿业学院 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">Since then i came to Austria as refugee far from my lovers and friends far a way escaping from wars and threats searching a new life that i didn't find until yet.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">6</span>
									<span>1953-</span>
									<span>1970</span>
								</div>
								<div class="image">
									<img src="img/6.jpg">
									<div class="title">
										<h2>北京矿业学院<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">中国人民政府政务院核准中国矿业学院改为北京矿业学院，在首都北京掀开自己发展历史上崭新的一页。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">7</span>
									<span>1970-</span>
									<span>1978</span>
								</div>
								<div class="image">
									<img src="img/7.jpg">
									<div class="title">
										<h2>四川矿业学院<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">在极左思想的指导下，学院搬出北京，在办学条件极其困难的四川合川县华蓥山重建新校，改名为四川矿业学院，原北京矿院作为留守处使用。</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">8</span>
									<span>1988</span>
									<span>今</span>
								</div>
								<div class="image">
										<img src="img/8.jpg">
									<div class="title">
										<h2>中国矿业大学<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">1988年学校更名为中国矿业大学，邓小平同志为中国矿业大学题写校名。</p>
								</div>
							</div>
						</div>
						
				</div>
			</div>
		</div>
		<script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
		<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/timeLine.js"></script>
		<script src="js/script.js"></script>

		
	<div class="htmleaf-container">
	
		<div class="htmleaf-content bgcolor-8">
			<p>距离矿大校庆还有：</p>
			<span id="clock"></span>
		</div>
	</div>
	
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script type="text/javascript" src="dist/jquery.countdown.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#clock').countdown('2019/6/1', function(event) {
			  $(this).html(event.strftime('%D 天 %H:%M:%S'));
			});
		})
	</script>
	<div></div>
	<hr/>
	    <div id="footer" >
					<div class="copy" style="text-align:center;">
							<p>网站开发测试中...</p>
							<p>版权所有 WGD-中国矿业大学</p>
					</div>
			</div>
</body>
</html>
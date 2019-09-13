<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" media="all" />
	<link rel=”stylesheet” href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- slider start-->

 <!-- #region Jssor Slider Begin -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1200);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
   
<!-- slider end-->
	<title>Freelancer-sagor</title>
</head>
<body>
	
	<div class="manubar">
	<nav>
	<ul>
	<li><a href="index.html" class="homecolor"> Home</li></a>
	<li><a href="team.html"> Our Team</li></a>
	<li><a href=""> Service </li></a>
	<li><a href="contrat.html"> Contact Us </li></a>
	</ul>
	
	
</nav>
	</div>

	<div class="slider">
	
	    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/web.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/web-desing.png" />
            </div>
            <div>
                <img data-u="image" src="img/wordpress.png" />
            </div>
            <div>
                <img data-u="image" src="img/phot.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
</div>


<div class="text-animation">

<img src="img/me.jpg" class="myphoto" />
		<h2> I am <span class="typing-text"></span></h2>
		
	
	<script src="typed.js"></script>
<script src="typed.min.js"></script>
<script type="text/javascript">
   var typed = new Typed('.typing-text', {
   strings:[ "Web Developer"," Web Developer","Web Desing","Wordpress Developer","Wordpress Customize","SEO","Youtuber","Data Analysist","SAGOR AHMEAD"],
   loop: true,
   typeSpeed: 80,
   backSpeed: 40,
   backDelay: 1000,
   });

</script>
</div>
</div>

<div class="content">
<section>
<img src="img/web.png" class="websetting" />
<h2> Web Develop</h2>
<p> A website is one of the things that make your business better and more successful.
Through the web site, your business will<br>  be known to everyone very soon.</p>
</section>

<section>
<img src="img/images.png" class="graphics" />
<h2> Graphics Design</h2>
<p> Graphic design is one of the things that makes your business name so beautiful. 
Everyone appreciates your business.</p>
</section>

<section>
<img src="img/wordpress (2).png" class="wordpress" />
<h2> Wordpress Customize</h2>
<p> wordpress is on of the things that allows you to easily access your business or any type of web site.</p>
</section>


</div>
<div class="more"> 
<section class="more">
<img src="img/computer1.png" class="skill" />
<h1> <b><u>Our Skill</b> </u></h1> 
<P CLASS="wskill">1.Web Develop 2. Web design 3. Wordpress coustomize 4. Graphic Design and logo </p>  

</section>
</div> 

<div>
<section class="worktime">
<img src="img/worktime1.png" alt="work " />
<h2> <u>We Are Avalible</u></h2> 
<P CLASS="avalible"> 24*7 HOURS<br> AND DAY OF 365.WE ARE READY TO SERVICE. </p>  

</section>
</div>


<div class="footer">
<section class="main-footer">
<img src="img/logo5.png" class="logof" />

<h3 class="intro"> <b>Sagor Ahmead</b> <br> Web Application Developer</h3>
<p class="email"> Phone: 01780485521<br> Email: sagorahmead.it.org@gmail.com <br> FB: Fb.com/me.sagorahmead
<ul>
<li><a href="https://www.facebook.com/me.sagorahmead/about?section=contact-info&lst=100007442896705%3A100007442896705%3A1568204598" target="blank"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></a></i></li>
<li> <a href="#"><i class="fa fa-envelope fa-2x" aria-hidden="true"></a></i></li>
<li><a href="https://www.facebook.com/me.sagorahmead" target="blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></a></i></li>
<li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></a></i></li>
<li><a href="https://www.youtube.com/channel/UCv3A4q3RXM8wOh1vSRFasjQ?view_as=subscriber" target="blank"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></a></i></li>

</ul>

</section>
</div>
<div class= "secendf">
<section class="lastf">

<p class="lastp">All Copy Right freelancer-sagor.com @2019</p>

</section>

</div>

</body>
</html>
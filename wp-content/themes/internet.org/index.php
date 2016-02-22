<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 <!DOCTYPE html>
 <html lang="en">
     <head>
 		<meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>Internet.org - Connecting the world</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
         <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
         <meta name="author" content="Codrops" />
         <link rel="shortcut icon" href="../favicon.ico">
 	      <link rel="stylesheet" type="text/css" href="css/demo.css" />
         <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/custom.css" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" media="all" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">
 	      <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
     		<noscript>
     			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
     		</noscript>
     </head>
     <body>

         <div class="container demo-2">



         <div class="sidebar hidden">
           <div class="search">
             <!-- <span class="fa fa-search"></span> -->
             <span class="zmdi zmdi-search"></span>
             <input placeholder="Search">
             <span id="btn-close" class="zmdi zmdi-close"></span>
           </div>
           <div class="main-items">
             <ul>
               <li><a id="side-mission" href="https://info.internet.org/en/mission/">Our Mission</a></li>
               <li><span><i class="zmdi zmdi-circle-o"></i></span></li>
               <li><a id="side-approach" href="https://info.internet.org/en/approach/">Our Approach</a></li>
               <li><span><i class="zmdi zmdi-circle-o"></i></span></li>
               <li><a id="side-impact" href="https://info.internet.org/en/impact/">Our Impact</a></li>
             </ul>
           </div>
           <div class="secondary-items">
             <table>
               <tr>
                 <td id="td-1"><a href="https://info.internet.org/en/press/">press</a></td>
                 <td id="td-2"><a href="https://info.internet.org/story/platform">platform</a></td>
               </tr>
               <tr>
                 <td id="td-3"><a href="https://info.internet.org/story/mobile-operator-partnership-program/">operators</a></td>
                 <td id="td-4"><a href="https://fb.me/Internetdotorg">facebook page</a></td>
               </tr>
               <tr>
                 <td id="td-5"><a href="https://www.facebook.com/careers/">careers</a></td>
                 <td id="td-6"><a href="https://info.internet.org/en/contact-us/">contact</a></td>
               </tr>
             </table>
           </div>
           <div class="lang">
             <span class="zmdi zmdi-caret-down"></span>
             <select name="language">
               <option value="english (US)">english (US)</option>
               <option value="spanish (SPAIN)">spanish (SPAIN)</option>
             </select>
           </div>

         </div>

         <div class="lightboxify hidden"></div>

         <header class="clearfix"> <!-- clearfix is good except for mobile, where it needs to be stripped down : Sean W -->
   				<!-- <h1>Slit Slider <span>with CSS3 and jQuery</span></h1> -->
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-358 260 242.7 42" xml:space="preserve" width="243" height="62">
            <defs>
                <clipPath id="logo-stencil">
                   <path d="M-336.9,268.8c-0.8-0.3-1.6-0.6-2.4-0.8c-0.2,0-0.3-0.2-0.2-0.4l3.2-7.6h-2.5l-13.5,31.8
                       c-1.1-1.2-1.9-2.5-2.5-4c-1.3-3.2-1.2-6.8,0.2-10c1.2-2.8,3.3-5.1,5.9-6.4l1.3-3.1c-4,1.3-7.5,4.3-9.3,8.6c-2.6,6-1,12.8,3.3,17.1
                       c0.1,0.1,0.1,0.3,0,0.4l-3.2,7.6h2.5l13.5-31.9c0.9,0.2,1.8,0.5,2.7,0.8c3.1,1.4,5.5,3.9,6.8,7.2c1.3,3.2,1.2,6.8-0.2,10
                       c-2,4.8-6.6,7.9-11.7,7.9c-1.1,0-2.2-0.2-3.3-0.5l-0.9,2.2c1.4,0.4,2.8,0.6,4.2,0.6c5.8,0,11.4-3.5,13.9-9.3
                       C-325.7,281.3-329.3,272.2-336.9,268.8z"></path>
                   <!-- internet.org -->
                       <path d="M-262.7,279c-2.4,0-4.6,2-4.6,5.1c0,3.3,2.3,5.2,4.8,5.2c2.3,0,3.8-1.4,4.3-3.1l-1.9-0.6
                           c-0.3,1-1,1.7-2.4,1.7c-1.4,0-2.5-1.1-2.6-2.5h6.9c0,0,0.1-0.4,0.1-0.7C-258.1,281-259.8,279-262.7,279z M-265,283.1
                           c0.1-1,0.9-2.1,2.3-2.1c1.6,0,2.3,1,2.3,2.1H-265z"></path>
                       <path d="M-247.4,285.9c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6
                           C-245.8,286.6-246.5,285.9-247.4,285.9z"></path>
                       <path d="M-272.8,279.1c-1.1,0-2.2,0.5-2.8,1.6v-1.3h-2.2v9.7h2.3v-5.6c0-1.3,0.7-2.3,2-2.3c1.4,0,1.9,1,1.9,2.1v5.7
                           h2.3v-6.1C-269.3,280.8-270.4,279.1-272.8,279.1z"></path>
                       <path d="M-253,285.9v-4.5h2v-2h-2v-3h-2v1.5c0,0.9-0.4,1.5-1.5,1.5h-0.5v2h1.8v4.9c0,1.8,1.1,2.9,2.8,2.9
                           c0.8,0,1.2-0.2,1.4-0.2V287c-0.1,0-0.5,0.1-0.8,0.1C-252.7,287.1-253,286.7-253,285.9z"></path>
                       <rect x="-319.1" y="279.3" width="2.2" height="9.7"></rect>
                       <path d="M-318,274.4c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5c0.8,0,1.5-0.7,1.5-1.5S-317.2,274.4-318,274.4z"></path>
                       <path d="M-299.9,285.9v-4.5h2v-2h-2v-3h-2v1.5c0,0.9-0.4,1.5-1.5,1.5h-0.5v2h1.8v4.9c0,1.8,1.1,2.9,2.8,2.9
                           c0.8,0,1.2-0.2,1.4-0.2V287c-0.1,0-0.5,0.1-0.8,0.1C-299.6,287.1-299.9,286.7-299.9,285.9z"></path>
                       <path d="M-309,279.1c-1.1,0-2.2,0.5-2.8,1.6v-1.3h-2.2v9.7h2.3v-5.6c0-1.3,0.7-2.3,2-2.3c1.4,0,1.9,1,1.9,2.1v5.7h2.3
                           v-6.1C-305.5,280.8-306.6,279.1-309,279.1z"></path>
                       <path d="M-283.1,280.9v-1.6h-2.2v9.7h2.3v-4.6c0-1.8,0.8-2.8,2.6-2.8c0.2,0,0.5,0,0.7,0.1v-2.3
                           c-0.1,0-0.3-0.1-0.6-0.1C-281.6,279.2-282.7,279.8-283.1,280.9z"></path>
                       <path d="M-291.9,279c-2.4,0-4.6,2-4.6,5.1c0,3.3,2.3,5.2,4.8,5.2c2.3,0,3.8-1.4,4.3-3.1l-1.9-0.6
                           c-0.3,1-1,1.7-2.4,1.7c-1.4,0-2.5-1.1-2.6-2.5h6.9c0,0,0.1-0.4,0.1-0.7C-287.2,281-288.9,279-291.9,279z M-294.2,283.1
                           c0.1-1,0.9-2.1,2.3-2.1c1.6,0,2.3,1,2.3,2.1H-294.2z"></path>
                       <path d="M-218.5,280.6c-0.4-0.8-1.3-1.4-2.8-1.4c-2.6,0-4.4,2.1-4.4,4.7c0,2.7,1.8,4.7,4.4,4.7c1.4,0,2.3-0.7,2.7-1.4
                           v1c0,2-0.9,2.9-2.7,2.9c-1.3,0-2.2-0.9-2.4-2.1l-2.1,0.6c0.3,1.9,2,3.5,4.5,3.5c3.6,0,4.9-2.4,4.9-5v-8.8h-2.2V280.6z
                            M-220.9,286.6c-1.5,0-2.5-1.1-2.5-2.7c0-1.7,1-2.7,2.5-2.7c1.4,0,2.4,1.1,2.4,2.7C-218.5,285.5-219.5,286.6-220.9,286.6z"></path>
                       <path d="M-229.8,280.9v-1.6h-2.2v9.7h2.3v-4.6c0-1.8,0.8-2.8,2.6-2.8c0.2,0,0.5,0,0.7,0.1v-2.3
                           c-0.1,0-0.3-0.1-0.6-0.1C-228.3,279.2-229.3,279.8-229.8,280.9z"></path>
                       <path d="M-239.2,279c-2.8,0-4.9,2.2-4.9,5.1c0,3,2.1,5.2,4.9,5.2c2.8,0,4.9-2.2,4.9-5.2
                           C-234.3,281.2-236.4,279-239.2,279z M-239.2,287.3c-1.4,0-2.6-1.1-2.6-3.1c0-2,1.3-3,2.6-3c1.4,0,2.6,1,2.6,3
                           C-236.5,286.2-237.8,287.3-239.2,287.3z"></path>
                   <!-- /internet.org -->
                   <!-- by facebook -->
                       <path d="M-139.6,279.5c-3,0-4.5,1.9-4.5,4.6v0.5c0,2.7,1.5,4.6,4.5,4.6c3,0,4.5-1.9,4.5-4.6v-0.5
                           C-135,281.4-136.5,279.5-139.6,279.5z M-137.8,284.8c0,1.2-0.5,2.2-1.8,2.2c-1.3,0-1.8-1-1.8-2.2v-0.9c0-1.2,0.5-2.2,1.8-2.2
                           c1.3,0,1.8,1,1.8,2.2V284.8z"></path>
                       <path d="M-166.9,281.7c0.7,0,1.4,0.2,1.8,0.4l0.6-2c-0.6-0.4-1.6-0.6-2.6-0.6c-3.2,0-4.7,1.8-4.7,4.6v0.4
                           c0,2.9,1.5,4.6,4.7,4.6c1.1,0,2.1-0.2,2.6-0.6l-0.6-2c-0.4,0.2-1.1,0.4-1.8,0.4c-1.5,0-2.1-0.9-2.1-2.4v-0.5
                           C-169.1,282.6-168.4,281.7-166.9,281.7z"></path>
                       <path d="M-159.4,279.5c-3,0-4.5,1.7-4.5,4.4v0.8c0,2.7,1.3,4.5,4.8,4.5c1.3,0,2.8-0.3,3.5-0.7l-0.5-1.9
                           c-0.8,0.4-1.9,0.6-2.9,0.6c-1.5,0-2.1-0.6-2.1-1.8h5.8v-1.5C-155.4,281.3-156.6,279.5-159.4,279.5z M-157.8,283.5h-3.3
                           c0-1.3,0.5-2.1,1.7-2.1c1.2,0,1.6,0.8,1.6,1.8V283.5z"></path>
                       <path d="M-148.9,279.5c-1.3,0-2.2,0.7-2.6,1.5v-6.2l-2.8,0.3v14h2.6v-1.4c0.4,0.9,1.3,1.6,2.7,1.6
                           c2.5,0,3.8-2,3.8-4.6v-0.6C-145.1,281.5-146.4,279.5-148.9,279.5z M-147.9,284.7c0,1.3-0.5,2.3-1.8,2.3c-1.1,0-1.7-0.8-1.7-2.2v-1
                           c0-1.3,0.6-2.2,1.7-2.2c1.3,0,1.8,1,1.8,2.3V284.7z"></path>
                       <path d="M-129.4,279.5c-3,0-4.5,1.9-4.5,4.6v0.5c0,2.7,1.5,4.6,4.5,4.6c3,0,4.5-1.9,4.5-4.6v-0.5
                           C-124.9,281.4-126.4,279.5-129.4,279.5z M-127.6,284.8c0,1.2-0.5,2.2-1.8,2.2c-1.3,0-1.8-1-1.8-2.2v-0.9c0-1.2,0.5-2.2,1.8-2.2
                           c1.3,0,1.8,1,1.8,2.2V284.8z"></path>
                       <polygon points="-118.3,284.3 -115.4,279.7 -118.4,279.7 -121.1,284.1 -121.1,274.8 -123.9,275 -123.9,289
                           -121.1,289 -121.1,284.4 -118.3,289 -115.3,289         "></polygon>
                       <path d="M-175.3,281.1c-0.4-0.9-1.2-1.6-2.6-1.6c-2.5,0-3.7,2-3.7,4.6v0.6c0,2.6,1.2,4.6,3.7,4.6
                           c1.4,0,2.2-0.7,2.6-1.6v1.4h2.5v-9.3h-2.5V281.1z M-175.4,284.8c0,1.3-0.6,2.2-1.7,2.2c-1.3,0-1.8-0.9-1.8-2.3V284
                           c0-1.4,0.5-2.3,1.8-2.3c1.1,0,1.7,0.8,1.7,2.2V284.8z"></path>
                       <path d="M-202.7,282.6c-0.3-0.4-0.6-0.7-1-0.9c-0.4-0.2-0.9-0.3-1.4-0.3c-0.5,0-1,0.1-1.5,0.4c-0.5,0.2-0.9,0.6-1.1,1
                           v-4.1h-0.8v10.4h0.8v-1.3h0c0.1,0.3,0.3,0.5,0.5,0.7c0.2,0.2,0.4,0.3,0.6,0.5c0.2,0.1,0.5,0.2,0.7,0.3c0.2,0.1,0.5,0.1,0.7,0.1
                           c0.6,0,1.1-0.1,1.5-0.3c0.4-0.2,0.8-0.5,1-0.8c0.3-0.4,0.5-0.8,0.6-1.2c0.1-0.5,0.2-1,0.2-1.5c0-0.5-0.1-1-0.2-1.5
                           C-202.3,283.4-202.5,283-202.7,282.6z M-203,286.9c-0.1,0.4-0.3,0.7-0.5,0.9c-0.2,0.3-0.5,0.4-0.8,0.6c-0.3,0.1-0.6,0.2-1,0.2
                           c-0.4,0-0.8-0.1-1.1-0.2c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.3-0.4-0.6-0.5-1c-0.1-0.4-0.2-0.8-0.2-1.3c0-0.4,0.1-0.8,0.2-1.2
                           c0.1-0.4,0.3-0.7,0.5-1c0.2-0.3,0.5-0.5,0.8-0.7c0.3-0.2,0.7-0.3,1-0.3c0.4,0,0.8,0.1,1.1,0.3c0.3,0.2,0.6,0.4,0.8,0.7
                           c0.2,0.3,0.4,0.7,0.5,1.1c0.1,0.4,0.1,0.8,0.1,1.3C-202.8,286.1-202.9,286.5-203,286.9z"></path>
                       <path d="M-197.6,288.1l-2.3-6.4h-0.9l2.8,7.5c-0.1,0.2-0.2,0.4-0.2,0.6c-0.1,0.2-0.1,0.5-0.2,0.7
                           c-0.1,0.2-0.2,0.4-0.4,0.6c-0.2,0.2-0.3,0.2-0.6,0.2c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3-0.1v0.8c0.1,0,0.2,0.1,0.4,0.1
                           c0.1,0,0.3,0,0.4,0c0.3,0,0.5-0.1,0.8-0.2c0.2-0.1,0.4-0.3,0.6-0.6c0.2-0.3,0.3-0.6,0.5-1c0.2-0.4,0.3-0.8,0.5-1.3l2.7-7.4h-0.9
                           L-197.6,288.1z"></path>
                       <path d="M-186.9,278.3v1.4h-1.9v2.3h1.9v7h2.8v-7h2.1l0.2-2.3h-2.3v-1.4c0-0.9,0.2-1.3,1.1-1.3h1.2v-2.2
                           c-0.4-0.1-1.1-0.1-1.6-0.1C-186,274.7-186.9,276-186.9,278.3z"></path>
                   <!-- /by facebook -->
               </clipPath>
             </defs>
               <rect x="-358" y="260" width="242.7" height="42" clip-path="url(#logo-stencil)"></rect>
           </svg>

   				<!-- <nav class="codrops-demos">
   					<a href="index.html">MENU <i class="fa fa-bars"></i></a>
   				</nav> -->
           <div class="menu">
             <button id="menu-btn" type="button" name="button">
               <span class="menuTrigger menuTrigger_onDark">
                 <span id="menu-text">MENU</span>
                 <span id="menu-icon"><i class="zmdi zmdi-menu"></i></span>
               </span>
             </button>
           </div>
   			</header>

       <div id="slider" class="sl-slider-wrapper">

 				<div class="sl-slider">

 					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
 						<div class="sl-slide-inner">
 							<div class="bg-img bg-img-1 blur"></div>
               <blockquote class="first-intro"><p>Internet.org is</p></blockquote>
               <h2>Connecting the world</h2>
 						</div>
 					</div>

 					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
 						<div class="sl-slide-inner">
 							<div class="bg-img bg-img-2 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>means the whole world, not just some of us.</p>
                 <a href="https://info.internet.org/en/mission/"><cite id="arr1">OUR MISSION <i id="arrow1" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
 						</div>
 					</div>

 					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
 						<div class="sl-slide-inner">
 							<div class="bg-img bg-img-3 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>takes inventing new ways of doing things.</p>
                 <a href="https://info.internet.org/en/approach/"><cite id="arr2">OUR APPROACH <i id="arrow2" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
 						</div>
 					</div>

 					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
 						<div class="sl-slide-inner">
 							<div class="bg-img bg-img-4 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>takes inventing new ways of doing things.</p>
                 <a href="https://info.internet.org/en/approach/"><cite id="arr3">OUR APPROACH <i id="arrow3" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
 						</div>
 					</div>

 					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
 						<div class="sl-slide-inner">
 							<div class="bg-img bg-img-5 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>takes inventing new ways of doing things.</p>
                 <a href="https://info.internet.org/en/approach/"><cite id="arr4">OUR APPROACH <i id="arrow4" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
 						</div>
 					</div>

           <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
             <div class="sl-slide-inner">
               <div class="bg-img bg-img-6 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>takes inventing new ways of doing things.</p>
                 <a href="https://info.internet.org/en/approach/"><cite id="arr5">OUR APPROACH <i id="arrow5" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
             </div>
           </div>

           <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
             <div class="sl-slide-inner">
               <div class="bg-img bg-img-7 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>is already making a difference.</p>
                 <a href="https://info.internet.org/en/impact/"><cite id="arr6">OUR IMPACT <i id="arrow6" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
             </div>
           </div>

           <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
             <div class="sl-slide-inner">
               <div class="bg-img bg-img-8 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>is already making a difference.</p>
                 <a href="https://info.internet.org/en/impact/"><cite id="arr7">OUR IMPACT <i id="arrow7" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
             </div>
           </div>

           <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
             <div class="sl-slide-inner">
               <div class="bg-img bg-img-9 blur"></div>
               <h2 class="rest-intros">Connecting the world</h2>
 							<blockquote>
                 <p>is already making a difference.</p>
                 <a href="https://info.internet.org/en/impact/"><cite id="arr8">OUR IMPACT <i id="arrow8" class="zmdi zmdi-long-arrow-right"></i></cite></a>
               </blockquote>
             </div>
           </div>

           <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
             <div class="sl-slide-inner">
               <div class="bg-img bg-img-10 blur"></div>
               <blockquote class="closing"><p>Join us</p></blockquote>
               <h2>Connecting the world</h2>
               <div class="call-to-action">
                 <div class="get-involved">
                   <blockquote>
                     <h4>Get Involved</h4>
                     <p>
                       <span><i class="fa fa-angle-double-right"></i> <a href="https://info.internet.org/en/story/platform/">Add your website to free basics</a></span><br>
                       <span><i class="fa fa-angle-double-right"></i> <a href="https://www.facebook.com/careers/">See our careers</a></span>
                     </p>
                   </blockquote>
                 </div>
                 <div class="get-the-latest">
                   <blockquote>
                     <h4>Get the latest</h4>
                     <p>
                       <span><i class="fa fa-angle-double-right"></i> <a href="https://info.internet.org/en/press">Read the press</a></span><br>
                       <span><i class="fa fa-angle-double-right"></i> <a href="https://fb.me/Internetdotorg">Follow us on facebook</a></span>
                     </p>
                   </blockquote>
                 </div>
                 <div class="get-in-touch">
                   <blockquote>
                     <h4>Get in touch</h4>
                     <p>
                       <span><i class="fa fa-angle-double-right"></i> <a href="https://info.internet.org/en/contact-us">Contact the internet.org team</a><br></span>
                     </p>
                   </blockquote>
                 </div>
               </div>

             </div>
           </div>
 				</div><!-- /sl-slider -->

 				<nav id="nav-dots" class="nav-dots">
 					<span class="nav-dot-current"></span>
 					<span></span>
 					<span></span>
 					<span></span>
 					<span></span>
           <span></span>
           <span></span>
           <span></span>
           <span></span>
           <span></span>
 				</nav>

 			</div><!-- /slider-wrapper -->

         </div>
 		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
 		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
     <script type="text/javascript" src="js/hover-arrows.js"></script>
     <script type="text/javascript" src="js/toggle-sidebar.js"></script>
 		<script type="text/javascript">
 			$(function() {

 				var Page = (function() {

 					var $nav = $( '#nav-dots > span' ),
 						slitslider = $( '#slider' ).slitslider( {
 							onBeforeChange : function( slide, pos ) {

 								$nav.removeClass( 'nav-dot-current' );
 								$nav.eq( pos ).addClass( 'nav-dot-current' );

 							}
 						} ),

 						init = function() {

 							initEvents();

 						},
 						initEvents = function() {

 							$nav.each( function( i ) {

 								$( this ).on( 'click', function( event ) {

 									var $dot = $( this );

 									if( !slitslider.isActive() ) {

 										$nav.removeClass( 'nav-dot-current' );
 										$dot.addClass( 'nav-dot-current' );

 									}

 									slitslider.jump( i + 1 );
 									return false;

 								} );

 							} );

 						};

 						return { init : init };

 				})();

 				Page.init();

 			});
 		</script>
 	</body>
 </html>

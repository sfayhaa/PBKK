<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portofolio</title>

	<style type="text/css">

*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }

html
{
	font-size:100%;
}

body
{
	-webkit-font-smoothing:antialiased;
	color:#333332;
	font-family:Lora, serif;
	font-size:18px;
	font-weight:400;
	line-height:1.4;
	text-rendering:optimizeLegibility;
}

.skill-set li:hover
{
	background:#3498db;
}

h1
{
	color:rgba(0,0,0,.75);
}

.wrapper
{
	height:100%;
}

.left
{
	background-color:rgba(0,0,0,.025);
	border-right:1px solid rgba(0,0,0,.05);
	float:right;
	height:100%;
	margin-left:-1px;
	min-width:256px;
	position:fixed;
	width:33.33%;
  
}

.right
{
	float:right;
	height:100%;
	position:relative;
	width:66.66%;
}


.name-hero
{
	background:rgba(0,0,0,.001);
	bottom:0;
	height:290px;
	left:0;
	margin:auto;
	position:absolute;
	right:0;
	top:0;
	width:85%;
}

.me-img
{
	background:url(https://media-exp1.licdn.com/dms/image/C4E03AQGnLq_IB_mf8Q/profile-displayphoto-shrink_400_400/0/1631022739752?e=1648684800&v=beta&t=eICUjHeH_g9GQEItmEMK1j2gCADwqfjrlccSD_5za58) no-repeat center center ;
	background-size:100%;
  background-position:0px;
	border-radius:100%;
	height:150px;
	margin:0 auto;
	position:relative;
	width:150px;
}

.name-hero h1
{
	font-family:Open Sans, sans-serif;
	font-size:1.5em;
	text-align:center;
}

.name-hero h1 em
{
	color:rgba(0,0,0,.3);
	font-style:normal;
	font-weight:700;
}

.name-hero p
{
	color:rgba(0,0,0,.75);
	font-size:.75em;
	line-height:1.5;
	margin:0 8px 0 0;
	text-align:center;
}

.name-hero .name-text
{
	margin:0 auto;
	width:85%;
}

.inner
{
	margin:0 auto;
	max-width:975px;
	padding:3em;
}

.inner h1
{
	font-size:1.75em;
}

.inner p
{
	color:rgba(0,0,0,.5);
}

.inner p em
{
	color:rgba(0,0,0,1);
	font-style:normal;
}

.inner section
{
	margin:100px auto;
}

ul
{
	list-style-type:none;
	margin-top:-10px;
	max-width:570px;
	padding:0;
}

.skill-set li
{
	background:rgba(0,0,0,.75);
	border-radius:5px;
	color:#FFF;
	display:inline-block;
	list-style:none;
	margin:15px 15px 0 0;
	padding:10px;
	text-align:justify;
}

@media screen and (max-width: 48em) {
	.right,.left
	{
		float:none;
    position:relative !important;
		width:100%;
    min-height:500px;
	}
  .handmade {
  text-align:center !important;
  margin-top:0px !important;
}

@media screen and (max-width: 75em) {
    body
{ font-size:16px;}
}

@media screen and (max-width: 60em) {
    body
{ font-size:14px;}
}
.clearfix:after {
   content: " "; /* Older browser do not support empty content */
   visibility: hidden;
   display: block;
   height: 0;
   clear: both;
}
.handmade {
  text-align:right;
  margin-top:100px;
}
.handmade em {
  font-family: 'Shadows Into Light', cursive;
  font-size: 1.25em;
  margin-left:5px;
}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic|Open+Sans:300,400,500,700|Waiting+for+the+Sunrise|Shadows+Into+Light' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper clearfix">
<div class="left">
    
    <div class="name-hero">
      
      <div class="me-img"></div>
      
      <div class="name-text">
        
        <h1>Fayha <em>Syifa Qalbi</em></h1>
        <p>Surabaya, Indonesia</p>
        <p>syifafayha@gmail.com</p> 
        <p>(62) 822 4345 8283</p>
     
      </div>
   
    </div>
    
  </div>
 <div class="right">
    
    <div class="inner">
      <section>
        <h1>Education</h1>
        <p>August 2019 - Present | <em>Institute Technology of Sepuluh Nopember | Informatics student</em></p>
        <p>Motivated Internship student working toward Bachelors degree. Resourceful team player with experience
with common and advanced software applications and social media platforms. Well-versed in business
organization and strategies for successfully modernizing workplaces. Skilled at project support with a
proven history of solutions-oriented problem-solving.</p>
        <p>August 2021 - December 2021 | <em>Exchange Program | Thailand, King Mongkut's Institute of Technology Ladkrabang</em></p>
        <p>Received a Student Exchange Program with course Research Operation, and experienced education with billingual language
    	</p>
      </section>
      <section>
        <h1>Technical Skills</h1>
        <ul class="skill-set">
          <li>Artificial Intelligent</li>
          <li>Python</li>
          <li>Canva</li>
          <li>Figma</li>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>UI Design</li>
        </ul>
      </section>
      <section>
        <h1>Experiences</h1>
        <p>GPBL | <em>Japan | Kumamoto University</em></p>
        <p>Awardee of the Best Project Award</p>
        <p>Artificial Intelligence for Start-Up | <em> Indonesia | PT Orbit Ventura</em></p>
        <p>Create a website based AI for Recommendation Tourist Attractions</p>
      </section>
    </div>
    
  </div>
  
  
  
</div>


</body>
</html>

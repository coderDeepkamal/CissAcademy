<!DOCTYPE html><!--[if IE]>  <html class="ie"> <![endif]-->
<html>
	<head> 
 <STYLE> 
 sup {
	top: -0.4em;
	vertical-align: baseline;
	position: relative;
}
sub {
	top: 0.4em;
	vertical-align: baseline;
	position: relative;
}
a:link {text-decoration:none;}
a:visited {text-decoration:none;}
@media screen and (min-device-pixel-ratio:0), (-webkit-min-device-pixel-ratio:0), (min--moz-device-pixel-ratio: 0) {.stl_view{ font-size:10em; transform:scale(0.1); -moz-transform:scale(0.1); -webkit-transform:scale(0.1); -moz-transform-origin:top left; -webkit-transform-origin:top left; } }
.layer { }.ie { font-size: 1pt; }
.ie body { font-size: 12em; }
.stl_01 {
	position: absolute;
	white-space: nowrap;
}
.stl_02 {
	height: 49.58333em;
	font-size: 1em;
	margin: 0em;
	line-height: 0.0em;
	display: block;
	border-style: none;
	width: 70.08334em;
}

@supports(-ms-ime-align:auto) { .stl_02 {width: auto; overflow: hidden;}}
.stl_03 {
	position: relative;
}
.stl_04 {
	width: 100%;
	clip: rect(2.293208em,64.94073em,48.24988em,5.137388em);
	position: absolute;
	pointer-events: none;
}
.stl_05 {
	position: relative;
	width: 70.08334em;
}
.stl_06 {
	height: 4.958333em;
}
.ie .stl_06 {
	height: 49.58333em;
}
@font-face {
	font-family:"VCQIAU+Calibri";
	
}
.stl_07 {
	font-size: 0.9em;
	font-family: "VCQIAU+Calibri", "Times New Roman";
	color: #000000;
	line-height: 1.041992em;
}
.stl_08 {
	letter-spacing: 0em;
}
.stl_09 {
	letter-spacing: 0.01em;
}
@font-face {
	font-family:"BLETES+BookmanOldStyle-Italic";
}
.stl_10 {
	font-size: 1.32em;
	font-family: "BLETES+BookmanOldStyle-Italic";
	color: #000000;
	line-height: 1.041992em;
}
.stl_11 {
	font-size: 1.16em;
	font-family: "BLETES+BookmanOldStyle-Italic";
	color: #000000;
	line-height: 1.041992em;
}
.stl_12 {
	letter-spacing: -0.01em;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
 </STYLE> 

		<meta charset="utf-8" />
		<title>
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
	<div class="content">
        <div class="container-fluid">
	       <center>
	<?php
            foreach($records as $r){
                foreach($records1 as $r1){
                    foreach($records2 as $r2){
                        if($r->student_id==$r1->student_id && $r1->course_id==$r2->course_id){ 
    ?>	
	<div class="stl_view" >
		<div class="stl_05 stl_06">
				
			<div class="row" >
			  <div class="column">
			    <img src="<?=base_url();?>assets2/assets/img/easylogo.jpeg" alt="Snow" style="width: 1500px;">
			  </div>
			  <div class="column">
			    
			  </div>
			  <div class="column">
			    <img src="<?=base_url();?>assets2/assets/img/ciss-academy_logo.png" alt="Mountains" style="width: 2000px;">
			  </div>
			</div>
                     
					<div class="stl_01" style="top: 9.5741em; left:13.3941em;"><span class="stl_07"></span></div>
					<div class="stl_01" style="top: 9.5741em; left:13.6013em;"><span class="stl_07 stl_08"><span class="stl_09"> &nbsp;</span></span></div>
					<div class="stl_01" style="top: 9.5741em; left:59.8772em;"><span class="stl_07 stl_08"><span class="stl_09"> &nbsp;</span></span></div>
					<div class="stl_01" style="top: 16.1822em; left:26.0591em;"><span class="stl_10" style="word-spacing:0.03em;">Certificate On successful completion of &nbsp;</span></div>
					<div class="stl_01" style="top: 18.7222em; left:19.1991em; font-weight: bold;"><span class="stl_10 stl_08">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $r2->course_name;?><span class="stl_09">&nbsp;</span></span></div>
					<div class="stl_01" style="top: 21.2622em; left:30.9391em;"><span class="stl_10" style="word-spacing:0em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Presented to &nbsp;</span></div>
					<div class="stl_01" style="top: 23.7563em; left:6.3591em; font-weight: bold;"><span class="stl_11 stl_08">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $r->name;?></div>
					<div class="stl_01" style="top: 26.0763em; left:6.0191em;"></div>
					<div class="stl_01" style="top: 28.3963em; left:6.0191em;"><span class="stl_11" style="word-spacing:0.06em;">as being employment</span><span class="stl_11" style="word-spacing:0.03em;">&nbsp;ready</span><span class="stl_11" style="word-spacing:0.07em;">&nbsp;for</span><span class="stl_11" style="word-spacing:0.06em;">&nbsp;performing</span><span class="stl_11" style="word-spacing:0.07em;">&nbsp;role</span><span class="stl_11" style="word-spacing:0.06em;">&nbsp;of</span><span class="stl_11" style="word-spacing:0.07em;">&nbsp;Unarmed</span><span class="stl_11" style="word-spacing:0.06em;">&nbsp;Security Guard,</span><span class="stl_11" style="word-spacing:0.07em;">&nbsp;having secured</span><span class="stl_11" style="word-spacing:0.06em;">&nbsp;Grade</span><span class="stl_11" style="word-spacing:0.06em;">&nbsp;….. &nbsp;</span></div>
					<div class="stl_01" style="top: 30.0363em; left:6.0191em;"><span class="stl_11 stl_12" style="word-spacing:0.19em;">in the said course, conducted by</span><span class="stl_11 stl_12" style="word-spacing:0.2em;">&nbsp;School of Internal Security</span><span class="stl_11 stl_12" style="word-spacing:0.15em;">&nbsp;&amp;</span><span class="stl_11 stl_12" style="word-spacing:0.2em;">&nbsp;Police</span><span class="stl_11 stl_12" style="word-spacing:0.68em;">&nbsp;Administration,</span><span class="stl_11 stl_12" style="word-spacing:0.2em;">&nbsp;Raksha</span><span class="stl_11 stl_12" style="word-spacing:0.18em;">&nbsp;Shakti &nbsp;</span></div>
					<div class="stl_01" style="top: 31.6963em; left:6.0191em;"><span class="stl_11 stl_08" style="word-spacing:0.02em;">University a<span class="stl_12">nd</span></span><span class="stl_11 stl_12" style="word-spacing:0.08em;">&nbsp;CISS Academy</span><span class="stl_11 stl_12" style="word-spacing:0.04em;">&nbsp;For</span><span class="stl_11 stl_12" style="word-spacing:0.06em;">&nbsp;Skill Human</span><span class="stl_11 stl_12" style="word-spacing:0.11em;">&nbsp;Development</span><span class="stl_11 stl_12" style="word-spacing:0.02em;">&nbsp;Pvt Ltd</span><span class="stl_11 stl_12" style="word-spacing:0.07em;">&nbsp;under</span><span class="stl_11 stl_12" style="word-spacing:0.07em;">&nbsp;their</span><span class="stl_11 stl_12" style="word-spacing:0.36em;">&nbsp;joint</span><span class="stl_11 stl_12" style="word-spacing:0.04em;">&nbsp;Skill</span><span class="stl_11 stl_12" style="word-spacing:0.12em;">&nbsp;Development &nbsp;</span></div>
					<div class="stl_01" style="top: 33.3363em; left:6.0191em;"><span class="stl_11 stl_12" style="word-spacing:0.65em;">Certification Program, conforming to Indian National Occupational Standards, as included in &nbsp;</span></div>
					<div class="stl_01" style="top: 34.9963em; left:6.0191em;"><span class="stl_11 stl_12" style="word-spacing:0.08em;">Qualification Pack, National Skill Qualification Framework, Level-4. &nbsp;</span></div>
					<div class="stl_01" style="top: 37.2963em; left:6.0191em;"><span class="stl_11 stl_12" style="word-spacing:0.1em;">The course was conducted</span><span class="stl_11 stl_12" style="word-spacing:0.09em;">&nbsp;online</span><span class="stl_11 stl_12" style="word-spacing:0.07em;">&nbsp;from</span><span class="stl_11" style="word-spacing:0.03em; font-weight:bold;">&nbsp;<?= date('d-m-Y',strtotime($r1->from));?></span>&nbsp;&nbsp;to<span class="stl_11 stl_12" style="word-spacing:0.13em; font-weight:bold;">&nbsp;<?= date('d-m-Y',strtotime($r1->to));?></span><span class="stl_11 stl_12" style="word-spacing:0.03em;">&nbsp;as</span><span class="stl_11 stl_12" style="word-spacing:0.05em;">&nbsp;per</span><span class="stl_11 stl_12" style="word-spacing:0.07em;">&nbsp;and</span><span class="stl_11 stl_12" style="word-spacing:0.08em;">&nbsp;rules</span><span class="stl_11 stl_12" style="word-spacing:0.09em;">&nbsp;laid down</span><span class="stl_11 stl_12" style="word-spacing:0.07em;">&nbsp;by</span><span class="stl_11 stl_12" style="word-spacing:0.11em;">&nbsp;Security &nbsp;</span></div>
					<div class="stl_01" style="top: 38.9563em; left:6.0191em;"><span class="stl_11 stl_12" style="word-spacing:0.07em;">Sector Council for the role of Unarmed Security Guard. &nbsp;</span></div>
					<div class="stl_01" style="top: 41.3222em; left:6.0191em; font-weight: bold;"><span class="stl_10" style="word-spacing:0.03em;">Serial No.<?= $r1->certificate_id;?>&nbsp;</span></div>
					<div class="stl_01" style="top: 41.3222em; left:36.7791em;"><span class="stl_10 stl_08">Date:<?php echo date("M d Y"); ?><span class="stl_09"> &nbsp;</span></span></div>
					<div class="stl_01" style="top: 46.1363em; left:6.0191em; font-weight: bold;"><span class="stl_11 stl_12" style="word-spacing:0.09em;">Date of Issue :<?php echo date("M d Y"); ?>&nbsp;</span></div>
				</div>
			</div>
		</div>
		    <?php
                   }
                 }
               }
             } 
            ?>
            </div>
        </div>
		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
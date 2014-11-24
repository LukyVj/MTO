
<?php
    header("Content-type: text/css; charset: UTF-8");

   $brandColor = "#990000";
   $linkColor = "#555555";
   $CDNURL = 'http://dev.web-gate.fr/MTO/assets/' ;
?>

@import url(http://weloveiconfonts.com/api/?family=entypo);
@import '<?php echo $CDNURL ?>css/icons.css';
@import '<?php echo $CDNURL ?>css/theme.min.css';
@font-face {
  font-family: 'vag';
  src: url('http://dev.web-gate.fr/MTO/assets/fonts/vagrounded-bold.eot?') format('eot'), url('http://dev.web-gate.fr/MTO/assets/fonts/vagrounded-bold.woff') format('woff'), url('http://dev.web-gate.fr/MTO/assets/fonts/vagrounded-bold.ttf') format('truetype'), url('http://dev.web-gate.fr/MTO/assets/fonts/vagrounded-bold.otf') format('opentype'), url('http://dev.web-gate.fr/MTO/assets/fonts/vagrounded-bold.svg') format('svg');
}/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
	color:#333; 
}
::selection{background:transparent}
*{
	box-sizing:border-box;
	font-family: vag, 'vag';
	-webkit-font-smoothing: antialiased;
	font-weight: 300;
	text-shadow:0 -1px 1px rgba(0,0,0,.3);
	font-size: 1em;

}
body,html{
	margin:0;
	padding:0;
	width:100%;
	height:100%;
	background:url(http://lab.web-gate.fr/images/satinweave.png);
	overflow: scroll;
}
section{
	display:block;
	margin:auto;
	width:100%;
	height:100%;
	background:#F3F3F3;
	position:relative;
	top:0px;
	left:0px;
	overflow:hidden
}
section div{
	float:left;
	width:100%;
	height:14.50%;
	padding:0 5px; 
	/*box-shadow:0 -1px 1px rgba(0,0,0,.2), 0 -5px 10px rgba(0,0,0,.1);*/
	color:#fff;
	overflow:hidden;
	cursor:pointer;
}
/*section div h2{
	font-family: vag, 'vag';
	letter-spacing:3px;
	line-height:0;
	text-shadow:0 -1px 1px rgba(0,0,0,.3);
	font-weight:500;
	font-size: 2.4em;
	padding-left:10px;
}*/
section div h2 span{
	color: #ffffff
}
section div i{
	display:block;
	float:right;
	width:80px;
	height:80px;
	font-style:normal;
	font-size:40px;
	text-align:center;
	line-height:2;
	transition:all 1s ease;
}
.ic{
	margin: 10px;
	-webkit-transform: scale(.9);
}
h2{
height:100%;
width:20%;
margin:3px 0;
font-size:2.6em;
line-height:2.4;
padding-left:10px;
display:block;
float:left;
}

.mention{
display:block;
float:left;
font-size:1.4em;
line-height:5.4;
padding-left:10px;
}

.state{
display:block;
float:left;
font-size:2.6em;
line-height:.8;

}

.deg{
float:left;
font-size:3.2em;
line-height:2.2;
text-align:center;
margin:0 -25px 0 30px;
padding:0;
}
.celsius{
display:block;
float:left;
padding:0;
margin:0 0px 0 0px;
background-position:left center;
}


/* jq actions */
.open{
	height:100%;
	position:absolute;
	margin-top:-10px;
	z-index: 9;
	transform:scale(2.2);
}
.show{
	height:100%;
	position:absolute;
	zoom:9;
}
.display{
display: none;
color: transparent
}
.margin{
	margin:-80px 10px;
}
.zoom{
	-webkit-transform:scale(3);
	margin: -100px 100px;
}
.zoomb{
	-webkit-transform:scale(2);
	margin: 100px 140px;
}




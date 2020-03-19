<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kolkata Diares</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<style>
	
	body{
	margin:0;
	padding:0;
	font-family:arial;
	}
	
		.slideshow{
      width:100%;
	  height:100%;
	  margin:auto;
	  
}		
#slideimage{
width:100%;
height:100%;
background-size:cover;
background:rgba(0,0,0,0.5);
}
	.details{
position:absolute;
left:50%;
top:50%;
transform:translate(-50%,-50%);
text-align:center;
}	
	

.details h1{
font-size:4em;
color:#fff;
}

.details h2 span:nth-child(1){
color:red;
}

.details h2 span:nth-child(3){
color:yellow;
}
	
	#headu ul{
margin:0px;
padding:0px;
list-style:none;
}
#headu ul li {
float:right;
width:140px;
height:40px;
background-color:black;
opacity:0.8;
line-height:40px;
font-size:20px;
text-align:center;
}
#headu ul li a {
text-decoration:none;
color:#fff;
display:block;
}
#headu ul li a:hover{
background-color:steelblue;
}
#headu ul li ul li{
display:none;
}
#headu ul li:hover ul li{
display:block;
cursor:pointer;
}

#headu ul{
position:absolute;
right:25px;
top:25px;
}

header {
background:red;
margin:0px;
padding:0px;
}


#copyright{
background-color:black;
opacity: 0.8;
color: white;
text-align:center;
height: 30px;
}



#icons{
	position: relative;
text-align:right;
right: 20px;
bottom: 15px;
font-size: 20px;
}

.weblogo{
	position: absolute;
	top: 20px;
	left: 10px;
	color: #fff;
}

.content1{
	position: absolute;
	top: 400px;
	left: 420px;
	color: white;
	text-decoration: none;
	color: rgb(235, 52, 101)
}

.content1 h1 span:nth-child(2){
position: absolute;
top: 10px;
left: 420px;
color: rgb(52, 222, 235)
}

.welcome{
	position: absolute;
	top: 50px;
	color: rgb(52,222,235);
}

.food{
	position: absolute;
	bottom: -30px;
	color: rgb(66, 135, 245);
}

.food a{
	position: absolute;
	left: 760px;
	bottom: 0px;
	font-size: 20px;
}
.food a:hover{
	font-size: 40px;
}

.travelling{
	position: absolute;
	bottom: -140px;
	color: rgb(66, 245, 242)
}

.travelling a{
	position: absolute;
	left: 630px;
	bottom: 0px;
	font-size: 20px;
}

.travelling a:hover{
	font-size: 40px;
}

	</style>
</head>
<body>

<script>
var images=["pic3.jpg",
             "pic4.jpg",
			 "pic5.jpg",
			 "pic3.jpg",
			 "pic2.jpg"
			  ];
			 
var i=0;

function slides(){

document.getElementById("slideimage").src=images[i];
if(i<(images.length-1)){
   i++;
   }else {
   i=0;}
}
setInterval(slides,5000);			 
</script>

<script charset="utf-8" async defer>
	$(document).ready(function() {
		$('.weblogo').addClass('animated flip');
      $('.list').addClass('animated shake');
	});

	$(document).ready(function() {
		$('.details').on('mouseover',function(){
         $('h1').addClass('animated wobble');
		});
	});

	$(document).ready(function() {
		$('.welcome').addClass('animated lightSpeedOut');
	});

	



</script>

<header id="headu">

<div class="list">
<ul>
<li><a href="http://www.google.com"><i class="fa fa-address-book-o"> About Us</i></a></li>
<li><a href="http://www.google.com"><i class="fa fa-cutlery"> Order Online</i></a>
<ul>
<li><a href="http://www.google.com">Uber Eats</a></li>
<li><a href="http://www.google.com">Swiggy</a></li>
<li><a href="http://www.google.com">Zomato</a></li>
</ul>
</li>
<li><a href="http://www.google.com"><i class="fa fa-id-card"> Contact Us</i></a></li>
<li><a href="http://www.google.com"><i class="fa fa-picture-o"> Gallery</i></a></li>
<li><a href="http://www.google.com"><i class="fa fa-home"> Home</i></a></li>
</ul>
</div>
</header>

<div class="welcome">
<h1>Welcome Visitor!</h1>
</div>

<div class="weblogo">
<i><i class="fa fa-taxi">Kolkata-Diaries</i></i>
</div>

	<div class="slideshow">
	<div class="details">
	<h1>FunLovers</h1>	
	<h2>
	<span>Good Food</span>
	<span>&</span>
	<span>Travelling</span>
	</h2>
	</div>
	
	
	<img src="pic2.jpg" alt="pic2.jpg" id="slideimage">
	</div>

	<div class="content1">
    <h1>
    	<span>We suggest you the Best</span>
<span>& Delicious Food</span> 
</h1>
 </div>

 <div class="food">
<h2>For Getting Trustable Informations Regarding From Best Pocket Friendly Restaurants To Trendy Ones In Kolkata, Please Click on The Button <i class="fa fa-hand-o-right"></i> </h2>
<a href="foodyadda.php" class="btn btn-success">foodyadda</a>

</div>

<div class="travelling">
<h2>For Getting Trustable Informations Regarding The Must Visit Places In Kolkata, Please Click on The Button <i class="fa fa-hand-o-right"></i></h2>
<a href="explorelovers.php" class="btn btn-primary">explorelovers</a>

</div>

	<footer>
	<div id="copyright">
<span>&COPY; 2020 by Sourav Ghatak</span>

<div id="icons">
<a href=""><i class="fa fa-facebook-official"></i></a>
<a href=""><i class="fa fa-twitter-square"></i></a>
<a href=""><i class="fa fa-instagram"></i></a>
</div>
</div>
</footer>
	
</body>
</html>
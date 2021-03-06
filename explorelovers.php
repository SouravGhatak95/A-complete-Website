<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ExploreLovers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 <style type="text/css">
 	.weblogo{
	position: absolute;
	top: 20px;
	left: 10px;
	color: #fff;
}

#copyright{
background-color:black;
opacity: 0.8;
color: white;
text-align:center;
height: 30px;
}

#copyright{
	position: relative;
	top: -10px;
	height: : 60px;
}



#icons{
	position: relative;
text-align:right;
right: 20px;
bottom: 15px;
font-size: 20px;
}

#slideimages{
	width: 100%;
	height: 100%;
	background-size: cover;
	background: rgba(0, 0, 0, 0.5);
}

.details{
	position: absolute;
	top: 30px;
	left: 260px;
}

.details h1{
	color: black;
	font-size: 30px;
	font-weight: bold;
	text-transform: uppercase;
}

.details h2{
	position: relative;
	top: 120px;
	font-size: 20px;
}

.details h2 span:nth-child(1){
	color: red;
	border: 2px black solid;
	padding: 10px;
}

.details h2 span:nth-child(1):hover{
	background-image: linear-gradient(to right,#f54842,#f56942,#f58d42);
}

.details h2 span:nth-child(2){
	color: blue;
	border: 2px black solid;
	padding: 10px;
}

.details h2 span:nth-child(2):hover{
	background-image: linear-gradient(to right,#f54842,#f56942,#f58d42);
}

.details h2 span:nth-child(3){
	color: green;
	border: 2px black solid;
	padding: 10px;
}

.details h2 span:nth-child(3):hover{
	background-image: linear-gradient(to right,#f54842,#f56942,#f58d42);
}

.details h2 span:nth-child(4){
	color: green;
	border: 2px black solid;
	padding: 10px;
}



.details h2 span:nth-child(4):hover{
	background-image: linear-gradient(to right,#f54842,#f56942,#f58d42);
}

.list{
	position: absolute;
	top: 0px;
	right: 0px;
	padding: 0px;
	background-color: snow;
	height: 660px;
}

.list ul{
	margin: 0;
	padding: 0;
	list-style: none;
}

.list ul li{
	padding: 5px;
	line-height: 25px;
	font-size: 20px;
	display: block;
	border: 1px black solid;
}

.cafeteria{
	background-color: red;
}

.street{
	background-color: blue;
}

.trendy{
	background-color: green;
}

.email h2{
	position: absolute;
	top: 320px;
	left: 50px;
	color: #f542a7;
}

.submit-box{
	position: absolute;
	top: 370px;
    left: 600px;
    width: 450px;
}

.submit-box h2{
    color: #a8326f;
}





 </style>
</head>
<body>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.weblogo').addClass('animated flip');
			$('ul li').addClass('animated bounce');
			$('.details h1').addClass('animated wobble');
		});
	</script>


	<div class="weblogo">
<i><i class="fa fa-taxi">Kolkata-Diaries</i></i>
</div>


<script>
	var images=["howrah.jpg",
	             "lake sorobor.jpg",
	             "Indian-Museum.jpg",
	             "trum.jpg"
	                                    ];

	var i=0;
	
	function  slides(){
		document.getElementById('slideimages').src=images[i];
		if (i<(images.length-1)) {
			i++;
		} else {
			i=0;
		}
	}                                    
setInterval(slides, 5000);

</script>


<div class="container-fluid">
	<div class="submit-box">
		<div class="row">
			<div class="col-md-6">
				<h2>Submit Here</h2>
				<form action="submit.php" method="post">
					<div class="form-group">
						<label style="color: white;">Email Id <i class="fa fa-envelope"></i></label>
						<input type="text" name="email" class="form-control" required>
				  </div>

				  <div class="form-group">
						<label style="color: white;">Contact Number <i class="fa fa-mobile"></i></label>
						<input type="number" name="number" class="form-control" required>
				  </div>
                  <button type="submit" class="btn btn-primary" style="padding:20px 40px;">Submit</button>


				</form>



			</div>
		</div>
	</div>
</div>


<div class="slider">
	<div class="details">
		<h1>Welcome to EXPLORELOVERS Guysss...</h1>
		<h2>
			<span><a href="">Peaceful Places</a></span> |
			<span><a href="">Crowded Places</a></span> |
            <span><a href="">Temples</a></span> |
            <span><a href="">Haunted Places</a></span>
		</h2>

	</div>
   
   <img src="rickshaw.jpg" alt="rickshaw.jpg" id="slideimages">

</div>

<div class="email">
	<h2>To Hire A Pro Guide, Kindly Provide Us Your Email Id Below <i class="fa fa-hand-o-down"></i></h2>

</div>

<div class="list">
<ul>
	<div class="cafeteria"><li><b>Top-5 Peaceful Places</b></li></div>
	<li><a href="">link1</a></li>
	<li><a href="">link2</a></li>
	<li><a href="">link3</a></li>
	<li><a href="">link4</a></li>
	<li><a href="">link5</a></li>
	<div class="street"><li><b>Top-5 Crowded Places</b></li></div>
	<li><a href="">link1</a></li>
	<li><a href="">link2</a></li>
	<li><a href="">link3</a></li>
	<li><a href="">link4</a></li>
	<li><a href="">link5</a></li>
	<div class="trendy"><li><b>Top-5 Temples & Haunted Places</b></li></div>
	<li><a href="">link1</a></li>
	<li><a href="">link2</a></li>
	<li><a href="">link3</a></li>
	<li><a href="">link4</a></li>
	<li><a href="">link5</a></li>
</ul>
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
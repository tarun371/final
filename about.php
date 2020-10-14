<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/headerstyle.css">
<link rel="stylesheet" href="css/footerstyle.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>

  <style>


#leftbox {
                float:left;
                width:50%;
                height:280%;
 		padding:1%;
		text-align:justify;
		margin:5%;
            }

          }
#rightbox{
                float:right;
                width:50%;
                height:280%;
		padding:1%;
		margin:5%;
            }

#carousel {

        width:100%;
        border:2px solid #222;
        height:350px;
        position:relative;
        margin:10px;
        clear:both;
        overflow:hidden;
        background:#ecd9c6;
      }
      #carousel img {
        visibility:hidden;
        cursor:pointer;
	width:40%;
	height:90%;
      }
      body{
background-color:#fff;
}
p{
font-family: Calibri;
}

</style>

<?php
include 'reuseheader.php';
?>
</head>
<body>

<section class="about-section" id="about">
<div id = "boxes">
        <div id = "leftbox">
  		<img  src="image/about.jpg" alt="about" style="width:100%;border-radius:50%;">
 	</div>
        <br>
	<div id = "rightbox">
		<h1 style="margin-left:70%;margin-right:15%;font-size:40px;color:red;border-bottom:4px solid orange;padding:13px 0;"><b><center>About Us</h1>
	         <p style="font-size:25px;">“I am an interior Designer  in New York, specializing in User  Design. We build clean, interiors which comply with the latest  standards.  Design is my life. Without it, my world would be black and white."
		“I am a creative. I can never seem to stop creating anything. I am drawn to color and the beauty around me. I have always been drawn to art and design. Growing up I was constantly in my sketch book or having some kind of craft happening on the dining room table"</p>
		<p style="font-size:25px;">I am a hard working individual with a great attention to detail. I enjoy new and challenging projects that push me to learn more in the great field of interior design. Throughout college, I have gained great time managment skills that allow me to work on multiple projects at once.</p>


	</div>
</div>
<h1 style="margin-left:40%;margin-right:40%;font-size:40px;color:red;border-bottom:4px solid orange;padding:13px 0;">WHO WE ARE?</h1>
<p style="margin:5%;font:Courier New;font-size:25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>


<div id = "boxes">
        <div id = "leftbox" style="margin-left:5%;margin-right:0;padding:0;">
  		<img  src="image/1.jpg" alt="about" style="width:75%;padding:0;align:top;">
 	</div>
        <br>
	<div id = "rightbox" style="margin-left:0%;margin-right:5%;padding:0;">
		<h1 style="margin-left:60%;margin-right:15%;font-size:40px;color:red;border-bottom:4px solid orange;padding:13px 0;"><b><center>THE STUDIO</h1>
	         <p style="margin-bottom:5%;font-size:25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>

	<h1 style="margin-left:60%;margin-right:15%;font-size:40px;color:red;border-bottom:4px solid orange;padding:13px 0;"><b><center>HOW WE WORK</h1>
         <p style="font-size:25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare  nibh.</p>




	</div>
</div>
<h1 style="margin-left:40%;margin-right:41.5%;font-size:40px;color:red;border-bottom:4px solid orange;padding:13px 0;">Previous Works</h1>
<div id="carousel" >
      <a href=""><img src="image/6.jpg" id="item-1" /></a>
      <a href=""><img src="image/2.jpg" id="item-2" /></a>
      <a href=""><img src="image/3.jpg" id="item-3" /></a>
      <a href=""><img src="image/4.jpg" id="item-4" /></a>
      <a href=""><img src="image/5.jpg" id="item-5" /></a>
      <a href=""><img src="image/10.jpg" id="item-6" /></a>
      <a href=""><img src="image/7.jpg" id="item-7" /></a>
      <a href=""><img src="image/8.jpg" id="item-8" /></a>
      <a href=""><img src="image/9.jpg" id="item-9" /></a>
    </div>

   <p style="font-size:25px;"><a style="text-decoration:none;padding:13.5%;" href="#" id="prev">Prev</a> <a style="text-decoration:none;padding:13.5%;" href="#" id="reload">Reload Images</a><a style="text-decoration:none;padding:13.5%;" href="#" id="next">Next</a></p>
    </section >
</body>
<div style="margin-top:8%;">
<?php
include 'reusefooter.php';
?>
</div>
</html>

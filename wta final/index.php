<?php

session_start();

    include("connection.php");
    include("functions.php");

   $user_data = check_login($con);


?>



<html>
    <head>
		<style>
			/* Sidebar Div */
.div10 {
color: white;
 position: fixed;
 top:10px;
width: 190px;
padding-left: 20px;
height: 160vh;
background-image: linear-gradient(30deg, blue, red);
border-top-right-radius: 9px;
border-top-left-radius: 9px;
border-bottom-right-radius: 9px;
border-bottom-left-radius: 9px;
}
/* Div header */
div h3 {
	font-size: 40px;
padding: 0px 0 0 0;
cursor: pointer;
}
/* Div links */
div a {
font-size: 22px;
color: #fff;
display: block;
padding: 20px;
padding-left: 0px;
text-decoration: none;
outline: none;
}
/* Div link on hover */
div a:hover {
color:black;
background: orange;
position: relative;
background-color: rgb(14, 140, 186);
border-top-left-radius: 9px;
border-bottom-left-radius: 9px;
}




div.c {
  position: absolute;
  right: 10px;
  width: 1300px;
  height: 120px;
  top:10px;
 
} 




/**
Palette: https://scrimba.com/links/hometown-palette
RED: #E63946
LIGHT: #F1FAEE
AQUA: #A8DADC
LIGHT BLUE: #457B9D
DARK BLUE: #1D3557

*/
@font-face{
    src: url("ZillaSlab-SemiBold.ttf");
    font-family: Zilla;
}

body {
    margin: 0;
    text-align: center;
    font-family: Zilla;
}
#head{
    background-image: url("images/golden-temple.gif");
    background-size: cover;
    height: 450px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    margin: 0px;

}
.visit-GT{
    width: 300px;
    background: #82352A;
    border-radius: 5px;
    margin: 5.5px;
    padding: 5px 10px 5px 10px;
}
.enjoy-pray{
    width: 283px;
    background: #82352A;
    border-radius: 5px;
    margin: 5.5px;
    padding: 5px 10px 5px 10px;
}
#reason-section{
        background: #EAE1D9;
        border: 1px solid #CAAE8E;
        padding-bottom: 35px;
        color: #82352A;

}
.reason-heading{
    font-size: 30px;
    margin: 35px 20px 40px ;
}
.reasons{
    display: flex;
    justify-content: center;
    margin: 0px 15px;
}
.reason-h3{
    margin: 5px 5px;
}
.reason-p{
  margin: 1px 5px;
}
.reason-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 10px;
    border: 1px solid;
}
#guide-section{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px auto;
}
#guide-card{
    display: flex;
    width: 400px;
    height: 200px;
    padding: 0px;
    border-radius: 10px;
    background-color: #EAE1D9;
    padding: 23px 13px;
    box-shadow: 0px 6px 0px #82352A;
}
.guide-pic{
    width: 150px;
    height: 200px;
}
.guide-info{
    padding: 0px 10px;
}

footer {
  text-align: left;
  padding: 10px;
  background-color: DarkSalmon;
  position: absolute;
  top:1030px;
  width:98%;
}

img {
border: 3px solid #ffffff;
padding: 0px 0 0 0;
 border-top-left-radius: 700px;
 border-bottom-left-radius: 700px;
 border-top-right-radius: 700px;
 border-bottom-right-radius: 700px;
 }
 
</style>
</head>
<body>

		<div class="div10">
			<!-- Div Header-->
           <img src="logo1.jpg" alt="logo" width="180" height="170">
			<h3>Index</h3>
			<!-- Links in Div -->
            <a href="places.php">Places</a>
			<a href="restaurant.php">Hotels & Restaurants</a>
			<a href="transportation.php">Transportation</a>
            <a href="shopping.php">Shopping</a>
            <a href="logout.php">Logout</a>


		</div>


<div class="c">
        <!-- HEAD SECTION -->
        <div id="head">
            <h1 class="visit-GT">Visit Golden Temple</h1>
            <h2 class="enjoy-pray">Enjoy the spiritual bliss</h2>
        </div>
        
        <!-- ACTIVITIES SECTION -->
		<div id="reason-section">
			<h3 class="reason-heading">Top reasons to visit Golden Temple</h3>
			<div class="reasons">
				<div>
					<img class="reason-img" src="images/holy-dip.jpg"><br><br>
					<h3 class="reason-h3">Spiritual Bliss</h3>
					<p class="reason-p">One can truly experience the sacred aura of the temple which is magnified by the constant chanting of Sikh hymns, prayers and scripture readings. Its atmosphere will disconnect you from the outer world and immerse you in a silent,spiritual realm.</p>
				</div>
				<div>
					<img class="reason-img" src="images/Inside-the-Golden-Temple.jpg">
					<h3 class="reason-h3">Superb Architecture</h3>
					<p class="reason-p">The dome is covered in gold and the temple has entrances on all four sides, reflecting openness. There is a causeway leading
						to the inner sanctum bordered by marble balustrades. The interior is richly decorated with floral and mirror designs.</p>
				</div>
				<div>
					<img class="reason-img" src="images/Pilgrims-at-the-langar.jpg">
                    <h3 class="reason-h3">Guru Ram Das Langar</h3>
                    <p class="reason-p">The largest free community kitchen in the world that serves a wholesome vegetarian meal to around 50,000 thousand visitors daily (sometimes double the number) is by all means a laudable humanitarian feat. People from all walks of life are welcome to partake in the langar and no one is ever turned away.</p>
				</div>
                <div>
					<img class="reason-img" src="images/Massacre-sight.jpg">
                    <h3 class="reason-h3">Nearby sights</h3>
                    <p class="reason-p">Your trip to the Golden Temple will be incomplete without visiting the historic Jallianwala Bagh (1 kilometre away) , where you can pay respects to the martyrs of the massacre.</p>
				</div>
              
			</div>
		</div>
<footer>
        <p>Golden Temple<br>
            Help:<br>
            contact:0123456789<br>
            Email:abc@gmail.com
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#169;copyright
        </p>

</footer>
</div>
		
    </body>
</html>
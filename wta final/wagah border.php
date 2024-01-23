<!DOCTYPE html>
<html lang="en">
  <!-- divinectorweb.com -->
<head>
<style>
  .div10 {
color: white;
 position: fixed;
 top:0px;
width: 190px;
left:0px;
padding-left: 20px;
height: 160vh;
background-image:  linear-gradient(30deg, blue, red);
border-top-right-radius: 9px;
border-top-left-radius: 9px;
border-bottom-right-radius: 9px;
border-bottom-left-radius: 9px;
}
/* Div header */
div h3 {
	font-size: 35px;
padding: 40px 0 0 0;
cursor: pointer;
font-family: bebas neue;

}
/* Div links */
div a {
font-size: 20px;
color: #fff;
display: block;
padding: 20px;
padding-left: 30px;
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

*, *::before, *::after {
	box-sizing: border-box;
}
body {
	margin: 0;
	font-family: "Roboto", sans-serif;
	font-size: 1.3rem;
	position: absolute;
	left:190px;
}
.wrapper {
	background: transparent;
	background-color: rgb(37, 36, 36);
	width: 100%;
	max-width: 100%;
	position: relative;
	height: 120px;

}
header 
  {background-color: rgba(255,255,255,0.5);;
	background: transparent;
	padding:  0;
	text-align: center;
	position: relative;
	width: 100%;
}
.nav {
	width: 1000px;
	height:30px;
	margin: auto;
	}


.nav-toggle {
	cursor: pointer;
	border: 0;
	width: 3rem;
	height: 3rem;
	padding: 0em;
	background: transparent;
	color: rgb(236, 230, 230);
	transition: opacity 250ms ease;
	position: absolute;
	right: 0;
}
.nav-toggle:focus, .nav-toggle:hover {
	opacity: 0.75;
}
.icon-area {
	width: 50%;
	position: relative;
}
.icon-area, .icon-area::before, .icon-area::after {
	display: block;
	margin: 0 auto;
	height: 3px;
	background: white;
}
.icon-area::before, .icon-area::after {
	content: "";
	width: 100%;
}
.icon-area::before {
	transform: translateY(-6px);
}
.icon-area::after {
	transform: translateY(3px);
}
.nav {
	visibility: hidden;
	height: 0;
	position: relative;
}
.nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.nav ul li a {
	color: #fff;
	text-decoration: none;
}
.openMenu {
	visibility: visible;
	height: auto;
	position: relative;
}
.logo {
	text-decoration: none;
	color: #fff;
	font-family: bebas neue;
	text-transform: uppercase;
	font-size: 40px;
	float:left;
	margin-left: 100px;
}
@media (min-width: 800px) {
	.nav-toggle {
		display: none;
	}
	.nav {
		visibility: visible;
		display: flex;
		align-items: center;
		justify-content: flex-end;
		height: auto;
		position: relative;
	
	}
	.nav ul {
		margin: 0;
		display: flex;
		justify-content: space-between;
		float:left;
	}
	.nav ul li {
		margin: 0 0 0 1.5rem;
	}
	.row {
		display: flex;
		justify-content: space-between;
		width: 100%;
		align:center;
	}
}

.banner {
	background: linear-gradient(135deg, rgb(151, 131, 131), transparent);
	height: 70vh;
	background-size: cover;
	background-position: center center;
	display: grid;
	place-items: center;
	text-align: center;
	border-bottom:2px #000;
}
.content {
	margin-top: 0;
    
}
.content h2 {
	margin: 0;
	font-family: 'Alfa Slab One', cursive;
	font-size: 65px;
	color: #fff;
}
.banner p {
	margin: 0;
	color: #fff;
}
.banner a {
	text-decoration: none;
	background: #fff;
	color: #000;
	padding: 10px 25px;
	border-radius: 50px;
	display: inline-block;
	margin-top: 15px;
}
@media (max-width:991px) {
	.nav.openMenu {
		padding: 30px 0;
		background: rgba(0, 0, 0, 0.8);
		margin-top: 20px;
	}
	.nav.openMenu a {
		line-height: 2.5;
	}
}
@media (max-width: 600px) {
	.openMenu {
		padding: 5px 0;
		background: rgba(0, 0, 0, 0.8);
	}
	.openMenu a {
		color: #fff;
		font-size: 16px;
	}
	.content h2 {
		font-size: 20px;
	}
	.banner {
		background-position: 80%;
	}
	.logo {
		font-size: 40px;
	}
	.nav ul li {
		margin: 5px 0;
	}
	.content h2 {
		font-size: 20px;
	}
}

.brief1{
	
	align:center;
	margin:5%;
	padding-left:20px;
	box-shadow: 0px 5px 10px  rgb(37, 36, 36);
	word-wrap: break-word;


}
.brief2
{	
	align:center;
	margin:5%;
	padding-left:20px;
	box-shadow: 0px 5px 10px  rgb(37, 36, 36);
	word-wrap: break-word;
	
}

.inside{
	padding:10px;
	text-align: justify;
	
}

.heading
{	margin-block:-400px;
	margin-top:30px;
	margin-bottom: 5px;
	width:500px;
}

.image{
	text-align: justify;
	position:relative;
	box-shadow:1px 5px 5px black;
	float: right;
	width: auto;
	height: auto;
	display: inline-block;
	margin-right: 15px;
	margin-bottom: 15px;
	margin-left: 15px;
	
}

hr {
  
    border: none;
    height: 2px;
    background: black;
    
}
.neon {
    color: #fff;
    text-shadow:
      0 0 5px #fff,
      0 0 10px #fff,
      0 0 20px #fff,
      0 0 40px #0ff,
      0 0 80px #0ff,
      0 0 90px #0ff,
      0 0 100px #0ff,
      0 0 150px #0ff;
  }


</style>




  </head>
<body>
  <div class="div10">
    <!-- Div Header-->
    <h3>Wagha Border</h3>
    <!-- Links in Div -->
    <a href="#History">History</a>
    <a href="#Border ceremony">Border ceremony</a>
    <a href="#Length">Length</a>  
    <a href="#maps">Maps</a>

  </div>


    <header>

        <div class="wrapper row">
          <button class="nav-toggle">
            <span class="icon-area"></span>
          </button>
          <nav class="nav">
            <ul>
			<li><a href="index.php">Home</a></li>
              <li><a href="places.php">Back</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            </ul>            
          </nav>
        </div>
      </header>

<div class="banner">
    <div class="content">
        <h1 style="color: rgb(0, 0, 0);" id="Wagha Border" class="heading">wagha Border</h1>
    </div>
</div>
<div class="brief1" id="brief">
    <h2 class="heading" id="History">HISTORY</h2><hr>
    <div class="image">
        <img src= "wagah.jpg" style="width:330px;height:330px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>
        Located about 32 km from Amritsar, Wagah is a village in Pakistan located on the historic Grand Trunk Road that passes between Amritsar and Lahore.<mark> The Radcliffe Line or the boundary line dividing India and Pakistan was drawn here, on the Indian side of the village, during the partition of India.</mark> This border crossing draws its name from the village where it is located and hence is called Wagah Border. At the time of partition, migrants used this border crossing to travel to Pakistan from India.

Since 1959, both the countries have been conducting the lowering of the flags ceremony here as a daily ritual. In August 2017, India had erected a 110 meter flagpole in Attari, the Indian side of the Wagah Border. In reply, Pakistan came up with a 122 meter flagpole on their side.  <mark>The flagpole on the Indian side is the highest one in the country while the one on Pakistan’s side is considered to be the tallest one in South Asia.</mark>
     </p>
     </p><br>
</div>

<div class="brief1" id="brief">
    <h2 class="heading" id="Border ceremony">Border ceremony</h2><hr>
    <div class="image">
      </div>
    <p class="inside" style="text-align: justify;">
      <p>
        The Wagah-Attari Border Ceremony or the lowering of the flags ceremony takes place at the border gate between Pakistan and India. This military practice, observed every day since 1959, takes place two hours before the sunset. Conducted by the Indian Border Security Force (BSF) and the Pakistan Rangers, the ceremony attracts tourists from across the country, making the Wagah Border one of the top places to visit in Amritsar.

The ceremony is a 30-minutes drill, the purpose of which is to lower the national flags and formally close the border between the two nations till sunrise. <mark>It starts with an elaborate parade conducted by soldiers on both sides of the border. Then, the opening of the iron gates at the border and the lowering of the national flags on both sides take place in perfectly coordinated movements. After the flags are folded, soldiers from both the sides shake hands and the iron gates are closed, marking the end of the ceremony.</mark>

The Wagah-Attari Border Ceremony is also known as Beating Retreat Ceremony, which is a symbol of cooperation and brotherhood between the two countries.
    </p>
     </p><br>
</div>


<div class="brief1" id="brief">
  <h2 class="heading" id="Length">Length</h2><hr>
  <div class="image">
      <img src= "wagah length.jpg" style="width:300px;height:380px;" />
    </div>
  <p class="inside" style="text-align: justify;">
    <p>
	The Wagah Border is a famous border crossing between India and Pakistan, known for its elaborate daily ceremony that takes place at sunset.  <mark>In terms of its length, the Wagah Border stretches for approximately 2.5 kilometers (1.5 miles) across the Radcliffe Line, </mark> which demarcates the border between the two nations.

The border is located near the village of Wagah in the Amritsar district of Punjab, India, and Lahore district of Punjab, Pakistan. It is one of the few road crossings between the two countries and serves as a significant transit point for people traveling between India and Pakistan.

The border is marked by a tall gate on either side, known as the "Wagah Border Gate" or "Attari Border Gate" in India, and "Wagah Border Gate" or "Babar Border Gate" in Pakistan. The gates are adorned with national flags and are often crowded with spectators during the daily ceremony.

The ceremony at the Wagah Border is a symbol of the rivalry and tension between India and Pakistan, but it is also a testament to the shared history and cultural heritage of the two nations. The lowering of the flags and the synchronized drills performed by the border guards on both sides attract tourists from around the world.

Overall, while the Wagah Border may not be exceptionally long in terms of its physical length, its significance and the ceremonial activities that take place there make it a prominent landmark and a unique point of connection between India and Pakistan.
  </p>
   </p><br>
</div>


<div class="brief1" id="brief">
	<h2 class="heading" id="maps">Maps</h2><hr>

	<p class="inside" style="text-align: justify;">
	  <p>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75789.40949427665!2d74.4975392209297!3d31.601824068532178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191311ac62856f%3A0xf98dd7768aade5cc!2sAttari%20border!5e0!3m2!1sen!2sin!4v1687885734811!5m2!1sen!2sin" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</p>
	 </p><br>
  </div>  



<div class="container my-5">

  <footer class="text-white text-center text-lg-start" style="background-color:  rgb(75, 72, 72);">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h2 class="text-uppercase mb-4">&nbsp;&nbsp;About </h2>

          <p>
            &nbsp;&nbsp;This Website gives us information Wagha Border.
          </p>

  
      
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Info:</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">WAGHA/ATTARI BORDER, NATIONAL HIGHWAY 1 PB, AMRITSAR, PUNJAB - 143001
                Punjab 143006</span>
            </li>

            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2"> 0183-2258275</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
       </div>
      <!--Grid row-->
    </div>
   


  </footer>
  
</div>
      <script>
        const cusMenu = document.querySelector(".nav-toggle");
            const nav = document.querySelector(".nav");

            cusMenu.addEventListener("click", () => {
            nav.classList.toggle("openMenu");
        });
      </script>
</body>
</html>
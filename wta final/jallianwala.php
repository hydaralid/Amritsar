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
	font-size: 30px;
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
    <h3>Jallianwala Bagh</h3>
    <!-- Links in Div -->
    <a href="#introduction">Introduction</a>
    <a href="#history">History</a>
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
        <h1 style="color: black;" id="jallianwala bagh" class="heading">Jallianwala Bagh</h1>
    </div>
</div>
<div class="brief1" id="brief">
    <h2 class="heading" id="introduction">Introduction</h2><hr>
    <div class="image">
        <img src= "jallianwala.jpg" style="width:330px;height:330px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>

	  Jallianwala Bagh is a historic garden located in Amritsar, Punjab, India. It is infamous for the tragic massacre that took place there on <mark>April 13, 1919,</mark> during the British colonial rule in India. The Jallianwala Bagh massacre, also known as the Amritsar massacre, was a pivotal event in India's struggle for independence.

The Jallianwala Bagh garden was originally a peaceful public garden used for social gatherings, festivals, and political meetings. However, on that fateful day <mark> in 1919, it became the site of a brutal and indiscriminate act of violence against unarmed civilians. </mark>

The massacre was perpetrated by the British Indian Army,  <mark>led by Brigadier General Reginald Dyer. </mark> In response to widespread protests against the repressive Rowlatt Act, which allowed for the detention of Indians without trial, Dyer ordered his troops to open fire on a gathering of thousands of people who had gathered at Jallianwala Bagh.The soldiers, armed with rifles, blocked the main entrance and began firing into the crowd without any warning or order to disperse. The narrow exits made it difficult for people to escape, resulting in the deaths of hundreds of men, women, and children. The exact number of casualties remains uncertain, but <mark> it is estimated that between 379 and 1,000 people were killed, with thousands more injured. </mark>

The Jallianwala Bagh massacre sparked widespread outrage and had a profound impact on the Indian independence movement. It led to a surge in nationalist sentiment and further fueled the struggle against British colonial rule. The brutality of the incident and the subsequent lack of accountability for those responsible were pivotal in galvanizing public support for India's independence.

Today, Jallianwala Bagh is a memorial garden dedicated to the victims of the massacre. It serves as a reminder of the sacrifices made by those who fought for India's freedom. The garden features a memorial with an eternal flame, a wall with bullet marks, and a museum that exhibits photographs and artifacts related to the massacre. It continues to be an important site for remembrance and reflection, attracting visitors from around the world. </p>
     </p><br>
</div>

<div class="brief1" id="brief">
    <h2 class="heading" id="history">History</h2><hr>
    <div class="image">
        <img src= "fight.jpg" style="width:300px;height:380px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>
The history of Jallianwala Bagh dates back to the late 19th century when it was initially a privately owned garden belonging to a local noble family in Amritsar, Punjab. The word "Bagh" means garden in Punjabi. It served as a peaceful recreational area for the local community, with its well-maintained lawns, trees, and a water tank.

<mark>On April 13, 1919, a large crowd gathered at Jallianwala Bagh to peacefully protest against the Rowlatt Act and to listen to speeches from leaders of the Indian independence movement, such as Dr. Saifuddin Kitchlew and Dr. Satyapal.</mark> However, the British colonial authorities, fearing an uprising, imposed martial law in Amritsar and prohibited public gatherings.

Brigadier General Reginald Dyer, the military commander in Amritsar, received information about the gathering at Jallianwala Bagh and decided to take drastic action to suppress the protest. Without warning or any effort to disperse the crowd, Dyer ordered his troops to open fire on the unarmed civilians.

<mark>The soldiers, armed with rifles, positioned themselves at the main entrance of the garden, blocking the only viable exit. They then opened fire on the helpless crowd for about ten minutes until they ran out of ammunition.The narrow passages and walls of the garden made it difficult for people to escape the gunfire.</mark>

The Jallianwala Bagh massacre resulted in the deaths of hundreds of people, including men, women, and children, and left thousands injured. The exact number of casualties remains disputed, with different sources providing varying estimates.

The massacre sparked widespread outrage and had a profound impact on the Indian independence movement. It led to widespread protests, strikes, and a surge in nationalist sentiment across the country. <mark>The incident also garnered international attention and condemnation, causing a significant dent in the credibility of British rule in India.</mark>
</p>
     </p><br>
</div>





<div class="brief1" id="brief">
	<h2 class="heading" id="maps">Maps</h2><hr>

	<p class="inside" style="text-align: justify;">
	  <p>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5838.96435819855!2d74.87558364144876!3d31.62086832854251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197caf29f8a3ed%3A0xcb013976169cb75b!2sJallianwala%20Bagh!5e0!3m2!1sen!2sin!4v1687885651145!5m2!1sen!2sin" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
          &nbsp;&nbsp;This Website gives us information about the Jallianwal Bagh.
          </p>

  
      
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Info:</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jallianwala Bagh, Golden Temple Rd |
                 near<br> Golden Temple, Amritsar, Punjab, 143006, India</span>
            </li>

            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+91-183-2542245</span>
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
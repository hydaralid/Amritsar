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
    <h3>Partition Museum</h3>
    <!-- Links in Div -->
    <a href="#partition museum">Museum</a>
    <a href="#History">History</a>
    <a href="#collections">collections</a>
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
        <h1 style="color: rgb(0, 0, 0);" id="Partition Museum" class="heading">The Partition Museum</h1>
    </div>
</div>

<div class="brief1" id="brief">
    <h2 class="heading" id="partition museum">Museum</h2><hr>
    <div class="image">
        <img src= "partition.jpg" style="width:330px;height:330px;" />

      </div>
    <p class="inside" style="text-align: justify;">
      <p>
        The Partition Museum comprehensively charts the Partition with a narrative arc that moves from the time before partition, proceeds to the independence movement, the early demands for separate countries, and ultimately the Partition and its consequences.

        Established as a People’s Museum, the Partition Museum endeavors to depict the Partition as it was experienced by the People. One key aspect of the collections comprises the artefacts generously donated by Partition Survivors and their families. As people were displaced, they carried with them whatever little they could, and these objects are now not only important milestones of the events, but symbols of losses suffered and trials endured. The uncertainty and confusion caused by the sudden division of the country often gave people no time to be able to gather their belongings before walking out of their homes forever. The artefacts received by the Partition Museum include things that were of practical use brought across by people along with those that held sentimental value for them. From utensils, trunks and clothes, to a wedding sari, a jewellery box and a tin box, the Museum houses artefacts of the Partition belonging to people from diverse and different backgrounds.
    </p>
     </p><br>
</div>

<div class="brief1" id="brief">
    <h2 class="heading" id="History">HISTORY</h2><hr>
    <div class="image">
        <img src= "partition history.jpg" style="width:330px;height:300px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>
        In 1947, British India was divided into India and Pakistan.<mark> The partition lines, drawn on a map by the British lawyer Cyril Radcliffe, divided the province of Punjab and Bengal into two parts on the basis of religion. As a result, millions of people found themselves on the wrong side of the border overnight. According to various estimates, more than 800,000 Muslims, Hindus, and Sikhs were killed in the riots that followed the partition between August 1947 to January 1948. Additionally, more than 1,400,000 people became refugees.</mark>

        The Government of Punjab founded this museum with The Arts and Cultural Heritage Trust of the United Kingdom as a way to memorialize those who were affected by the partition.
     </p>
     </p><br>
</div>



<div class="brief1" id="brief">
  <h2 class="heading" id="collections">collections</h2><hr>
  <div class="image">
      <img src= "partition collections.jpg" style="width:300px;height:320px;" />
    </div>
  <p class="inside" style="text-align: justify;">
    <p>
	The Partition Museum, located in Amritsar, Punjab, India, is a museum dedicated to preserving the history and memory of the Partition of India in 1947. It aims to document and educate visitors about the human experiences, stories, and consequences of the partition. While I don't have access to the most up-to-date information on the museum's collections since my knowledge cutoff is September 2021, I can provide you with some examples of the types of collections you might find in the Partition Museum:
		<br><mark>Oral Histories:</mark> The museum collects oral testimonies and interviews from survivors, witnesses, and descendants of those affected by the partition. These personal narratives provide valuable insights into the experiences of individuals and communities during that time.

<br><mark>Artifacts:</mark> The museum displays a range of artifacts related to the partition, including personal belongings, letters, documents, photographs, and religious objects. These items offer a tangible connection to the events and help to illustrate the impact of the partition on people's lives.
<br><mark>Archival Materials:</mark> The museum houses a collection of archival materials, such as official documents, government reports, maps, and newspapers, which provide historical context and help in understanding the political and social aspects of the partition.

</p>
   </p><br>
</div>


<div class="brief1" id="brief">
	<h2 class="heading" id="maps">Maps</h2><hr>

	<p class="inside" style="text-align: justify;">
	  <p>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.224244459449!2d74.87690195740922!3d31.625658772679525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197cab9b7d4cdb%3A0x11b099790ffc0924!2sThe%20Partition%20Museum%20-%20Amritsar%20District%2C%20Punjab%2C%20India!5e0!3m2!1sen!2sin!4v1687885791751!5m2!1sen!2sin" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<?php include('include/header.php');?>
<!-- The structure of the website is being the Bootstrap template. -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <p>Jessica Soares Lopes</p>
      <p>Student Number: 2019197</p>
      <p>Course: Bachelor in Information Technology</p>
      <p>Assessment title: Project PHP</p>
      </div>
      <div>  
        <!-- All photos and video were included were taken by me -->
    <div class="col-sm-4">
      <h2>Beginning of a dream</h2>
      <img src="img/ire1.png.jpg" width="300px" height="240px">
      <p>First photo in Ireland</p>
      <h2>Favorite Places</h2>
      <ul class="nav nav-pills ">
        <li><a href="https://www.thecrazytourist.com/25-best-things-budapest/">Budapest</a></li>
        <li><a href="https://www.planetware.com/upper-austria/hallstatter-see-hallstatt-a-o-halls.htm">Hallstatt</a></li>
        <li><a href="https://www.thecommonwanderer.com/blog/things-to-do-in-menorca">Minorca</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div> 
      </div>
      <!-- Doubts on how to style with CSS on the page were seen at w3school. -->
      <div class="col-sm-4">
      <h2>Last Country Visit</h2>
      <video width="320" height="240" controls>
      <source src="img/and1.mp4.MOV" type="video/mp4">
      </video>
      <p>Mountain in Andorra</p>
      </div>    
  </div>
</div>
<?php require 'include/footer.php'?>
</body>
</html>
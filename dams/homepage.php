<?php
session_start();
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    background: linear-gradient(171deg, rgb(251, 165, 116) 0.00%, rgb(216, 245, 251) 100.00%);
    color:rgb(249, 206, 183);
    font-family: Arial, sans-serif;
    margin: 0;
   padding: 0;
  }
  h2{
    color:#03946c;
  }
  h1{
    color:darkblue;
  }
 .grid-container
 {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   grid-gap: 50px;
   padding: 150px;
   }
    .box
     {
    width: 70%; 
    padding-top: 30%;
 /* This creates a square box */
  
  border: 2px solid #333; 
  border-radius: 30px;
  position: relative; 
  text-align: center; 
  color: white; 
  line-height: 1.6;

 box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);
}
.box-content 
{ 
  position: absolute; 
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
  line-height: 1.6;
  font-size: 1.5em; 
} 
.app-footer{
  color:black;
}
.about
{ 
  max-width: 800px; 
  margin: 0 auto; 
  padding: 0px; 
  color:black;
}

.team-container
 { 
  display: grid; 
  grid-template-columns: repeat(3, minmax(200px, 1fr)); 
  gap: 20px;
 padding: 50px; 
}
.team-member
{ 
  background-color: #fff; 
  border: 1px solid #ccc; 
  border-radius: 10px; 
  text-align: center; 
  padding: 20px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  } 
.team-member img
 { 
  width: 100%; 
  height: auto; 
  border-radius: 50%; 
  }
.team-member h3
 { 
  margin: 10px 0 5px; 
} 
.team-member p 
{ 
  margin: 0; 
  color: #666;
 } 
</style>  
    </style>
  </head>
  <body>
  <?php include_once('header.php');?>
      <script src="script.js"></script><br>
      <h2 align="center">Welcome To </h1>
      <h1 align="center">Doctor Appointment Management System</h1>
      <section>
      <div class="grid-container">
         <div class="box">
          <div class="box-content">Convenience</div>
        </div>
         <div class="box">
          <div class="box-content">Time Efficiency</div>
        </div> 
        <div class="box">
          <div class="box-content">Efficient</div>
        </div> 
    </div>
</section>
    <section>
   <div class="team-container">
     <div class="team-member">
     <img src="developer1.jpg" alt="Developer 1">
     <h3>Developer 1</h3>
      <p>Frontend Developer</p>
    </div>
      <div class="team-member">
      <img src="developer2.jpg" alt="Developer 2">
       <h3>Developer 2</h3>
       <p>Backend Developer</p>
    </div>
      <div class="team-member">
       <img src="developer3.jpg" alt="Developer 3">
        <h3>Developer 3</h3>
         <p>Full Stack Developer</p>
     </div>
        <div class="team-member">
        <img src="developer4.jpg" alt="Developer 4">
         <h3>Developer 4</h3>
         <p>UI/UX Designer</p>
       </div>
     <div class="team-member">
     <img src="developer1.jpg" alt="Developer 1">
     <h3>Developer 5</h3>
      <p>Frontend Developer</p>
    </div>
      <div class="team-member">
      <img src="developer2.jpg" alt="Developer 2">
       <h3>Developer 6</h3>
       <p>Backend Developer</p>
    </div>
      <div class="team-member">
       <img src="developer3.jpg" alt="Developer 3">
        <h3>Developer 7</h3>
         <p>Full Stack Developer</p>
     </div>
     </div>
     <br>  
       <div class="about">
       <h1>About Us</h1>
       <br>
        <p>Welcome to our Doctor Appointment Management System! Our mission is to streamline the process of booking and managing doctor appointments, making it easier for both patients and healthcare providers.</p>
       <p>Our system offers a user-friendly interface that allows patients to book appointments online at their convenience. With just a few clicks, patients can view available time slots, select their preferred doctor, and schedule an appointment without the need to call the clinic.</p> <p>For healthcare providers, our system simplifies appointment management by reducing administrative workload and minimizing the risk of double bookings or missed appointments. It also allows for easy rescheduling and cancellations, improving overall efficiency and patient satisfaction.</p> <p>We are committed to providing a seamless and efficient experience for both patients and healthcare providers. Thank you for choosing our Doctor Appointment Management System!</p>
   </div>
  </section>
  
    <div class="wrap p-t-0">
    <footer class="app-footer">
   <p align="center"><a href="https://github.com/JohnLincoln-k"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/k-john-lincoln"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/_lazy_legend/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></p> 
        <div class="copyright" align="center"> &copy; 2025 KOKKILIGADDA JOHN LINCOLN. All rights reserved.</div>
    </footer>
  </div>

  </body>




</html>
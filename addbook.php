<?php
    
    //include 'admin_navbar.php'; 
    
?>
<!doctype html>
<html> 
 <head>
	<title>CSS Box Shadow For Beginners</title>
	<link rel="stylesheet" type="text/css" href="addbook.css">
     </head>
  <style>
      table{
          width:100%;
          /*padding:20px;*/
          
          
          
      }
      td{
          padding:20px;
      }
      tr{
          padding:10px;
      }
      .container a{
        font-family: "Times New Roman", Times, serif;
        font-size:25px;
        color:black;
      }
      body{
			height:780px;
			width: 100%;
			margin-top: 0px;
			background-image: url("images/img4.jpg");
			
		}
  </style>
  <body style="background-color:#2ec194;"> 
  <ul class="topnav">
  <li><a href="">E-LIBRARY SYSTEM




</a></li>
  <li><a class="active" href="admin_home_index.php">HOME</a></li>
  <li><a href="admin_bookpage.php">BOOKS</a></li>
  <li><a href="admin_registration.php">ADD-ADMIN</a></li>
  <li><a href="admin_profile.php">MY PROFILE</a></li>
  <li class="right"><a href="admin_logout.php">LOGOUT</a></li>
</ul>

       <div class="container">
           <table>
	<tr>
        <td><div class="box shadow1"><a href="novels_add.php">Novels</a></div></td>
        <td><div class="box shadow2"><a href="fiction_add.php">Fiction</a></div></td>
        <td><div class="box shadow3"><a href="nonfiction_add.php">Non Fiction</a></div></td>
        <td><div class="box shadow4"><a href="philosophical_add.php">Philosophical</a></div></td>
    </tr>
    <tr>
        <td><div class="box shadow5"><a href="biography_add.php">Biography</a></div></td>
        <td><div class="box shadow6"><a href="programming_add.php">Programming</a></div></td>
        <td><div class="box shadow7"><a href="engineering_books_add.php">Engineering Books</a></div></td>
        <td><div class="box shadow8"><a href="story_books_add.php">Story Books</a></div></td>
    </tr>
    <tr>
        <td><div class="box shadow9"><a href="technical_add.php">Technical</a></div></td>
        <td><div class="box shadow10"><a href="suspense_add.php">Suspense</a></div></td>
        <td><div class="box shadow11"><a href="horror_add.php">Horror</a></div></td>
        <td><div class="box shadow12"><a href="adventure_add.php">Adventure</a></div></td>
    </tr>
	<div class="box shadow13"><a href="add.php">Aprrove books</a></div>
    </table>
	</div>
  </body>
</html>
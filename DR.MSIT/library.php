<html>
    <head>
	  <title>Dr.MSIT</title>
	<link rel="stylesheet" href="style.css">
	
	<script>
	     function myclock(){
		time = new Date();
        hours =time.getHours();
        mins = time.getMinutes();
        sec =time.getSeconds();

        if(sec<10){
            sec = "0"+sec;
        }			

		if(mins<0){
            mins = "0"+sec;
        }
		document.getElementById("clock").innerHTML=hours+":"+mins+":"+sec;
		timer = setTimeout(function(){myclock()},500);
		}
		</script>
		  </head>
		  
	<body onload="myclock()">
 <!--This is top bar-->
 <div id="top">
 <p1>Today is:&nbsp;&nbsp;<?php echo date("l jS, F  Y"); ?>
 </p1>
 <div id="top">
 <p id="clock"></p>
 </div>
 
 </div>
  <div id="top">
 <p2><img style="float:center;"src="images/welcome.gif" />
</p2> 
 
 </div>
 <!--This is header-->
 <div id="header"><p1>
<img style="float:center;"src="images/head.png" />
</p1></div>
<!--This is sub_header-->
<div id="sub_head"><p1>GOVT. OF WEST BENGAL</p1></div>
<!--This is logo-->
<div id="logo"><p1>
<img style="float:center"src="images/wblogo.png" />

</p1>
</div>
<!--This is navigation bar-->
<div id="menu"> 
<ul>
    <li><a href="index.php">Home</a></li>
	<li><a href="#">Facilitites &#9660 </a>
            <ul>
                   <li><a href="hostel.php">Hostel</a></li>
                   <li><a href="library.php">Library</a></li>
                   <li><a href="scholarship.php">Scholarship</a></li>
            </li>
            </ul>
	<li><a href="#">Students &#9660 </a>
<ul>
                   
                   <li><a href="union.php">Student Union</a></li>
                   <li><a href="annual.php">Annual Program</a></li>
                       </li>
                       </ul>
            
            <li><a href="#">Faculties &#9660 </a>
            <ul>
                   <li><a href="member.php">Faculty Members</a></li>
                   <li><a href="hod.php">H.O.D</a></li>
                   <li><a href="campus.php">Campus Life</a></li>
             </li>
             </ul>
            <li><a href="#">Placement &#9660 </a>
            <ul>
                   <li><a href="TPO.php">TPO's Desk</a></li>

                   
				   <li><a href="recruit.php">Recruiters</a></li>
				   
				   
                   
            
            </ul>
            
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
</div>
</div>
</div>	
<br>
<br>
<br>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"> The Institute has a well equipped library managed by Librarian Mr. Samir Kumar Sardar and one assistant Librarian Miss Sanchayita Patra .The total stock of books of different titles covering entire course curriculum of different fields of engineering is 3500. Number of copies available for us of students as well as teachers are approx.Students are also entitled to avail reading room facility from 10.30 A.M. to 4.50 P.M. Two English dailies and a Bengali daily newspapers are available in the library for readers. Besides, a few scientific journals like readers digest, digit competition, Success Review magazine etc. afre available for readers in the library. Monthly & periodical journals regarding placement news are also available with library. The students have enough scope to upgrade their knowledge in order to keep familiar with the rapid development of Science & Technolgy.</p>

<div>
<p style="margin-left:8em;">
Librarian:
<b>Mr. Samir Kumar Sardar</b></p></div>
<div>
<p style="margin-left:8em;">
Asst. Librarian:
<b>Miss Sanchayita Patra</b></p>
</div>

</div>
</font>

</body>
</html>
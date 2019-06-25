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
                   <li><a href="annual">Annual Program</a></li>
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
<div> <p style="margin-left:37em;"><b><u> OUR FACULTY </b></u> </p>
</div>

<font face = "Bookman Old Style">
<div> <p style="margin-left:35em;"><b> CIVIL ENGINEERING </b> </p>
</div>

<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Lecturer:- </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) Mr. Sunil Kr. Roy, B.E.<br>
(2) Mr. Chinmoy Dey, M.Tech<br>
(3) Mr. Dhurjati Prasad sarkar, M.Tech <br>
(4) Mr. Soumendu Hazra, M.Tech<br>
 </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Instructor:- </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) Mr. Amar Bag (P/T)  </p>
</div>

<font face = "Bookman Old Style">
<div> <p style="margin-left:34em;"><b> COMPUTER SCIENCE & TECHNOLOGY </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Lecturer:- </b> </p>
</div>
<div> <p style="margin-left:8em;">(1) Mr. Jaydeb Mandal, MCA.<br>
(2) Mrs. Sampa Nag, MCA<br>
(3) Mr. Biplab Bhowmick, M.Tech <br>
(4) Mr. Debasish Biswas, M.Tech
<br>
 </p>
 </div>
 <font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Instructor:- </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) Mr. Manabendra Nath Maity (P/T)   </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:34em;"><b> CHEMICAL ENGINEERING </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Lecturer:- </b> </p>
</div>
<div> <p style="margin-left:8em;">(1) Miss Anima Das, B.E</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Instructor:- </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) Arunima Chatterjee (P/T)<br>
(2) Asima Das (P/T)<br>
   </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> Laboratory Asst.- </b> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) Mr. Manan Kumar Chakrabarty (P/T)    </p>
</div>

</font>

</body>
</html>
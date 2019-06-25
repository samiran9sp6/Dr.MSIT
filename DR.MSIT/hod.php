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
<div> <p style="margin-left:38em;"><b><u> H.O.D </b></u> </p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> CIVIL ENGINEERING </b> </p>
</div>
<div> <p style="margin-left:8em;"> Mr. Sunil Kr. Roy, B.E.<br>
</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> COMPUTER SCIENCE & TECHNOLOGY </b> </p>
</div>
<div> <p style="margin-left:8em;"> Mr. Jaydeb Mandal, MCA<br>
</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> CHEMICAL ENGINEERING </b> </p>
</div>
<div> <p style="margin-left:8em;"> Miss Anima Das, B.E<br>
</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> MECHANICAL ENGINEERING </b> </p>
</div>
<div> <p style="margin-left:8em;"> Mr. Anup Maiti, M.Tech<br>
</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> ELECTRICAL ENGINEERING </b> </p>
</div>
<div> <p style="margin-left:8em;"> Mr. Ramprasad Maiti, B.E.<br>
</p>
</div>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b> ELECTRONICS & INSTRUMENTATION ENGINEERING </b> </p>
</div>
<div> <p style="margin-left:8em;">  Dr. Swapan Kr. Sit, M.Sc,PhD (Acting HOD)<br>
</p>
</div>

</font>

</body>
</html>
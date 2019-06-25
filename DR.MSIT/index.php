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
<!--This is picture-->
<div id="picture">
<img style="float:left;"src="images/pic1.jpg" />
<img style="float:center;"src="images/pic2.jpg" />
<img style="float:right;"src="images/pic3.jpg" />
</div>


<!--This is mission-->

<div id="mission"><font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"><b><u>MISSION</u></b><br></div>We have the mission to create and sustain an academic environment conducive to academic and professional excellence. To create a technology savvy campus and to impart value based education. To develop faculty competence, to meet the challenges of rapidly changing social environment. To nurture innovative and creative abilities of students and faculties. To be a finishing school where the outgoing students will be ready to accept the challenges of the educational society.
</div>
<!--This is acknowledgement-->
<div id="acknowledgement"><font face = "Bookman Old Style">
<div> <p style="margin-left:10em;"><b><u>ACKNOWLEDGEMENT</u></b><br></div>Dr. Meghnad Saha Institute of Technology was established in the year of 1998 with the aim to develop manpower in the field of Engineering & Technology to pace with the industrial growth of Haldia. The institute is well approved by AICTE. The academic programme & curriculum is affiliated & directly controlled by West Bengal State Council of Technical and Vocational Education and Skill Development (WBSCT&VE&SD).The institute is also under the direct administrative control of the Department of Technical Education & Training, Government of West Bengal. The institute upholds the standard of Technical Education by engaging qualified faculties & providing modern laboratory facilities.
</div>
<!--This is vision-->
<div id="vision"><font face = "Bookman Old Style">
<div> <p style="margin-left:10em;"><b><u>VISION</u></b><br></div>Vision of us are to be an institution of excellence in higher technical education that continually responds to changing social realities through development. The institute will strive to inculcate quality skill in young minds, prepare them for the dynamic global technological environment, create proactive technical acumen with adequate knowledge and develop them to socially responsible technical professionals. It will strive to become one of the top polytechnic institution through imparting high quality education and effective training, through dedicated faculty and the best available infrastructure.
</div>
<!--This is copyright-->
<div id="copyright">
<p1>Copyright © 2017  All Rights Reserved. </p1>
</div>
<div id="copyright">

<p2>Dr.Meghnad Saha Institute Of Technology,Haldia
</p2>
</div>

 </body>
</html> 
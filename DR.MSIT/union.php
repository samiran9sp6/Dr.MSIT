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
<p style="margin-left:37em;"><b><u>STUDENT UNION</u></b></p>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;"> I’m sure everyone on campus, students, faculty & visitors, have all seen Union’s ‘logo’ with the ‘motto’ around it, but few know what it means. The logo, featuring Minerva, the Roman goddess of wisdom, is surrounded by a phrase in French. The phrase is “Sous les lois de Minerve, nous devenons tous frères”.  Luckily for me I have studied French for almost nine years so I was able to translate this into English: “Under the laws of Minerva, we all become brothers”.
</p>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">
While technically now it should be “we all become brothers and sisters“, Union was originally an all-male school when this motto was adopted. Now that I know what it means it makes me think of Union a little differently. One of the main reasons I chose to come to Union was for the strong sense of community I felt amongst the students when I visited, and I still feel this connection every day. This slogan really does reflect how Union’s students bond together on campus.
</p>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">
I love feeling connected to my peers on campus and hopefully more people will begin to understand the true meaning of this slogan and what Union stands for!
</p></div>
</font>

</body>
</html>
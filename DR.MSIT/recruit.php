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
<div> <p style="margin-left:38em;"><b><u>OUR RECRUITERS</u></b></p>
<font face = "Bookman Old Style">
<div> <p style="margin-left:8em;">(1) VA TECH WABAG LIMITED- CHENNAI.
(2) Haldia Petrochemical Ltd.<br>
(3) Ms. Unisys Hyderabad.<br>
(4) Tractor India Ltd.<br>
(5) Wipro Technology.<br>
(6) M/S Akash Infotech.<br>
(7) Devicenet Technologies.<br>
(8) COMUNET INFO-SYSTEMS PVT. LTD.<br>
(9) Mahale Behr India Pvt Ltd.<br>
(10) JSW<br>
(11) Genus Electrotech Limited<br>
(12) Emami Agrotech Ltd<br>
(13) Borg Warner Limited<br>
(14) Centrum Electronics.<br>
(15) Takata India Pvt Ltd , Chennai<br>
(16) AVO Electro Power Ltd<br>
(17) Essel Propack Ltd<br>
(18) Centum Electronics Ltd , Bangalore<br>
(19) Faurecia Ltd<br>
(20) Tech Mahindra<br>
(21) HCL<br>
(22) ITC<br>
(23) MCPI<br>
(24) SANMAR LTD<br>
(25) CUMMINS INDIA LTD<br>
(26) Electro Steel Casting Ltd<br>
(27) Gabriel India Ltd ,Nashik<br>
(28) CY Myuntec<br>
(29) Pioneer Electricals , Durgapur<br>
(30) BRG Iron & Steel Co. Pvt. Ltd<br>
(31) Talbros Marugo Rubber Private Limited<br>
(32) Mahle Filters Systems Pvt Ltd<br>
(33) Rashmi Cement, Jhargram<br>
(34) FUTURE NETWINGS SOLUTIONS PVT. LTD<br>
(35) EMARSION LTD, (DCL) BAHARAMPUR<br>
(36) Birla Coopers Ltd<br>
(37) NAGAJURNA CONSTRUCTION Ltd<br>
(38) JINDAL STEEL<br>
(39) IIC Technologies <br>
</p>
</div>
</font>

</body>
</html>
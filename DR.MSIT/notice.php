<html>
<head>
<title>insert new notice</title>
</head>

<body>
<form method= "post" action="notice.php" enctype="multipart/form-data">
<table align="center" border="10" width="800">
<tr>
<td align="right" bgcolor="yellow" ><h1>insert new notice here</h1></td>
</tr>  
<tr>
<td align="right" >notice_title:</td>
<td><input type="text" name="title"></td>
</tr>

<tr>
<td align="right" >notice_author:</td>
<td><input type="text" name="author"></td>
</tr>
<tr>
<td align="right" >notice_file:</td>
<td><input type="file" name="document"></td>
</tr>
<tr>
<td align="right" >notice_content:</td>
<td><textarea name="content" cols="20" rows="20"></textarea></td>
</tr>
<tr>
<td align="center" colspan="5"><input type="submit" name="submit" value="publish now"></td>
</tr>

</body>
</html>


<?php 
include("includes/connect.php");
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$date = date('d/m/y');
	$author=$_POST['author'];
	$content = $_POST['content'];
	$file_name=$_FILES['document']['name'];
	$file_type=$_FILES['document']['type'];
	$file_type=$_FILES['document']['size'];
	$file_tmp =$_FILES['document']['tmp_name'];
	
	if ($title =='' or $author=='' or $content==''){
		echo "<script>alert('Any field is empty')</script>";
		exit();
	}
	if($file_type=="document/docx" or $file_type=="document/pdf" or $file_type=="document/jpeg"or $file_type=="document/png"){
		
		if($file_size<-500000000){
		move_uploaded_file($file_tmp,"files/$document_name");
		}
        else{
        echo "<script>alert('File is larger,only 500 mb size is allowed')</script>";
		}
	}	
		else {
			echo "<script>alert('document type is invalid')</script>";
		}
		
		$query ="insert into 'notice'(notice_title,notice_date,notice_author,notice_file,notice_content) values('$title','$date','$author','$file_name','$content')";
`		
		if(mysql_query($query)){
			
		echo "<center><h1>Notice Has Been Published</h1></center>";	

}		
}
?>
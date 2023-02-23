<?php
    $con=mysqli_connect('localhost','root','','crime_portal');
        $rat=$_POST['experience'];
        $cmt=$_POST['comments'];
        $name=$_POST['name'];
        $mail=$_POST['email'];
       $reg="insert into feedback values('$rat','$cmt','$name','$mail')";
       // mysqli_select_db("crime_portal");
        $res=mysqli_query($con,$reg);
?>
<html>
<head>
<script>
function myFunction() {
  alert("Your FeedBack Is Recorded Successfully....Thank You!");
}
</script>
<style>
.size{
font-size: 50px;
font-weight:bold;
}
.size1{
font-size: 30px;
font-weight:bold;
}
.img{
	background-image: url("desk.jpg");
	background-repeat: no-repeat;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>
<body class="img">
    <form action="feedback.php" method="post" >
   <table border="0" align="center">
   <tr><td colspan="4" align="center" class="size">FeedBack</td></tr>
   <tr><td colspan="2" class="size1" >Enter your Name </td><td colspan="2"><input type="text" name="name"> </td></tr>
  <tr><td colspan="2" class="size1" >Enter your mail </td><td colspan="2"><input type="text" name="email"> </td></tr>
	<tr><td  class="size1">Give your feedback</td>
		<td  class="size1"> &nbsp&nbsp&nbsp bad: <input type="radio" name="experience" value="bad"></td>
			<td  class="size1">  Good:<input type="radio" name="experience" value="good"></td>
				<td  class="size1">  very Good: <input type="radio" name="experience" value="very good"></td></tr>
   <tr><td colspan="2"  class="size1"> comment below </td><td colspan="2"><textarea name="comments" id="" cols="30" rows="10"></textarea></td></tr>
   <tr><td colspan="4" align="center"> <input type="submit" value="submit" onclick="myFunction()"  class="size1"></td></tr>
	</table>
    </form>
	
</body>
</html>

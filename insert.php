<?php
        include('connect.php');
       if(isset($_POST['submit']))
	   {
	   
            $name=$_POST['t1'];
            $email=$_POST['t2'];
            $dob=$_POST['t3'];
            
   $query = mysqli_query($cn,"insert into usertable(fname,semail,dob)values('$name','$email','$dob')");
	if($query === TRUE)
	{
		echo "<script>alert('Account Created Sucessfully!');window.location.href='../php_session/wlcmuser.php';</script>" ;
	}
	else
	{
	echo "<script>alert('Error: Try Again!');window.location.href='../php_session/wlcmuser.php';</script>" ;
    
    }
	   }
        ?>
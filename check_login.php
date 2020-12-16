<?php
    
        require_once('connect.php');
        session_start() ;
        if(isset($_POST['login']))
        {
            if(empty($_POST['uname']) || empty($_POST['pass']))
            {
                echo "Please fill the following fields!" ;
            }
            else{
                $var = "SELECT *FROM testing where u_name='".$_POST['uname']."' and u_pass='".$_POST['pass']."' ";
                $result = mysqli_query($cn,$var) ;
                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['username'] =$_POST['uname'];
                    header("location:wlcmuser.php");
                }
                else{
                    echo "Wrong input details!" ;
                }
            }
        }
        
        
        
      
      
    
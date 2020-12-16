<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
      
        
    </body>
    </html>

    <html>
    <head>
        <title>Test_example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        
          <button  style="float:right;" class="btn btn-primary mt-4"><a style="color:white;text-decoration:none;" href="logout.php?logout">Logout</a></button>
          <br><br>
          <div class="container">



                            <?php
                    session_start() ;
                    if(isset($_SESSION['username']))
                    {
                    echo '<h3>Welcome ' .$_SESSION['username'].'</h3><br>';                            
                    
                    }
                    else
                    {
                        header("location:index.html") ;
                    }
                    ?>
            <form action="insert.php" method="POST">
                <div class="form-group mt-2">
                  <label for="exampleFormControlInput1"><b>Full Name *</b></label>
                  <input type="text" class="form-control" name="t1" placeholder="John Smith">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleFormControlInput1"><b>Please Enter Valid Email address! *</b></label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" name="t2" placeholder="name@example.com">
                  
                </div>
                <div class="form-group mt-2">
                    <label for="exampleFormControlInput1"><b>DOB: Format: month-date (12-20) *</b></label>
                  <input type="text" class="form-control" name="t3" placeholder="example-> 12-06">

                  <button type="submit" name="submit" class="btn btn-primary mt-4">Register Here</button>
                  
                </div>
              </form>
          </div>
        
    </body>
    </html>


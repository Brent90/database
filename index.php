<?php

require('config/db.php');


$sql = "SELECT * FROM personInfo";

$result = $conn->query($sql);



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        <title>Insert Users</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!--Syle CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/main.js"></script>

    </head>

    <body>

        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#">Add Users</a></li>
                       
                    </ul>
                </nav>
                <h3 class="text-muted">Add Users</h3>
            </div>

           <div class="container">
            <div class="jumbotron">
               <h2>Add Person To Database</h2>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <div class="form-group">
                        <label for="fname">Enter Firstname:</label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Enter Lastname:</label>
                        <input type="text" class="form-control" id="lname" name="lname" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Enter Phone Number :</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                 
                    <button type="submit" class="btn btn-default">Submit</button>

                </form> 
            </div>
            </div>


            <div class="container search-buttons">
                <div class="row">
                    <div class="col-md-4">
                        <button type="button" id="sortByFirstName" onclick="sortByFirst()" name="sortByFname" class="btn btn-default form-control">Sort By Firstname</button>
                    </div>
                    <div class="col-md-4">
                         <button type="button" id="sortByLastName" onclick="sortByLast()" name="sortByLname" class="btn btn-default form-control">Sort By Lastname</button>
                    </div>
                </div>

            </div> 
            


            
            <div class =" container">
                <div class="table-respnsive">
                <table class="table table-hover" id="sort-by-first">
                <?php  
                
                echo "<th>Firstname</th><th>Lastname</th><th>Phone Number</th>";
            
                
                while($row = $result->fetch_assoc()) {  
                echo"<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['phonenumber']."</td> 
                </tr>";}
                $conn->close();

                ?>   
                </table>
            </div>
            </div>
            
            
            

            <footer class="footer">
                <p>&copy; <?php echo DATE('Y'); ?>  Company, Inc.</p>
            </footer>

        </div> <!-- /container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>




 </script>




    </body>
</html>

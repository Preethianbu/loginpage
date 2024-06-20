<?php
require("connect.php"); 

 $qry= "SELECT * FROM `userdata`";
     $collect= $conn->query($qry);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Table</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheet.css'>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            border: 2px solid;
            color : black;
        }
        body{

            height: 100%;
            margin: 0;
        }
       .bgimg{
            background-image: url('tabimg.jpg');
            height: 100%;
            
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <center><h2 style="color:blue;">Data Table</h2></center><br>
    <div class="bgimg"></div>
    <form>
    <table>
    
                <tr>
                    <th>S.No</th>
                    <th>Full name</th>
                    <th>Email address</th>
                    <th>Contact number</th>
                    <th>Location</th>
                    <th>Action</th>                </tr>
            
            
                <tr>
                   <?php 
                         if ($collect->num_rows > 0) {
                            $count = 1;
                            while($row = $collect->fetch_assoc()) {
                    ?>
                    <td><?php echo $row['id']; ?></td>        
                    <td><?php echo $row['firstname']; ?></td>        
                    <td><?php echo $row['emailaddress']; ?></td>        
                    <td><?php echo $row['contactnumber']; ?></td>        
                    <td><?php echo $row['State']; ?></td>        
                    <td><a href=""><button style="background:green;">Edit</button></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><button style="background:red;">Delete</button></a></td>       
                          
                </tr>           
                    <?php
                        }}
                    ?>     
                        
                       
                        
                         
                    
                    
                    <!-- <td><input type="text" name="name" id="fullname"></td>
                    <td><input type="text" name="email" id="emailaddress"></td>
                    <td><input type="text" name="mobile" id="mobile_number"></td>
                    <td><input type="text" name="location" id="currentlocation"></td>
                    <td><input type="submit" name="save" id="saveinfo"></td> -->
                
            
    </table>
    </form>
</body>
</html>

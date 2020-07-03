<?php
require_once('Prob 3 config php.php');
?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form action="Prob 3 Registration php.php" method="post">
            <div>
                <?php
                //$date1=date;
                //$date2=date($_POST['dob']);
                //$ddiff=date_diff($date1,$date2);
                //$gd="";
                
                if(isset($_POST['create']) && strcmp($_POST['pwd'],$_POST['cpwd'])==0)
                {
                    $nm     =$_POST['name'];
                    $mob    =$_POST['mnum'];
                    $email  =$_POST['email'];
                    $dob    =date($_POST['dob']);
                    $pwd    =$_POST['pwd'];
                    //echo $nm." ". $mob." ". $email." ".$dob." ". $pwd;
                    $sql="INSERT INTO users(name,mobno,email,dob,password) values(?,?,?,?,?)";
                    $stmtinsert=$db->prepare($sql);
                    $result=$stmtinsert->execute([$nm,$mob,$email,$dob,$pwd]);
                    if($result)
                    {
                        echo 'successfully saved';
                    }
                    else{
                        echo 'Error in saving';
                    }

                }
                ?>
            </div>
            <div class="container">
                <h1>Registration</h1>
                <label for="name">Name:</label>
                <input type="text" name="name" >
                <br>
                <label for="Mobile Number">Mobile Number:</label>
                <input type="text" name="mnum" >
                <br>
                <label for="Email">Email:</label>
                <input type="text" name="email" >
                <br>
                <label for="DOB">DOB:</label>
                <input type="date" name="dob" >
                <br>
                <label for="Password">Password:</label>
                <input type="password" name="pwd" >
                <br>
                <label for="Confirm Password">Confirm Password:</label>
                <input type="password" name="cpwd" >
                <br>
                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </body>

</html>
<?php


?>
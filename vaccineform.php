<?php
    if(count($_POST)>0)
     {
        $name=$_POST['uname'];
        $pnum=$_POST['ph'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $ano=$_POST['anum'];
        $dose=$_POST['dose'];
        $dov=$_POST['dov'];
        $address=$_POST['address'];
        $conn=mysqli_connect("localhost","root","","vaccination") or die('Unable To connect');
        $query="insert into vaccination values('$name','$pnum','$gender','$dob','$ano','$dose','$dov','$address')";
        $result=mysqli_query($conn,$query);
        if($result)
        echo "<script>alert('successfully registered!')</script>";
        else
        echo " try again!!!";
        echo "<a href='1 main file.html'>Go Back</a>";
        mysqli_close($conn);
    }
    
?>
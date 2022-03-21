<?php
 $pnum=$_POST['pnum'];
 $ano=$_POST['anum'];
  $con=mysqli_connect("localhost","root","","vaccination") or die('Unable To connect');
  $que="select * from vaccination where pnum='$pnum' and ano='$ano'";
  $result=mysqli_query($con,$que);
  if(mysqli_num_rows($result)>0)
  {
      echo "<table border='3' align='center' height='50%' style='font-size:25px;'><tr><th>Name</th><th>Phonenumber</th><th>gender</th><th>date of birth</th><th>aadhar</th><th>dose</th><th>date of vaccination</th><th>Address</th></tr>";
      while($row=mysqli_fetch_assoc($result))
      {
          echo "<tr><td>".$row['name']."</td><td>".$row['pnum']."</td><td>".$row['gender']."</td><td>".$row['dob']."</td><td>".$row['ano']."</td><td>".$row['dose']."</td><td>".$row['dov']."</td><td>".$row['address']."</td><tr>";
      }
     
      echo"</table>";
      echo "<a href='1 main file.html'>GO BACK</a>";
  }
  else
   echo " NO RECORDS FOUND";
  mysqli_close($con);
?>
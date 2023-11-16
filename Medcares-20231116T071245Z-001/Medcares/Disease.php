<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease Info</title>
    <link rel="stylesheet" href="Test.css">
</head>
<body >
    <section class="hero">
      <!-- -------Navbar------- -->
      <nav id="navbar" class="sticky">
        <a href="index.html" class="nav-logo"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul id="menu">
                
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  <?php




$link = mysqli_connect("localhost", "root", "", "doctor_patient_management");
   
    
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 




$sql = "SELECT * FROM disease_info";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "<p>Disease Information</p>";
        echo "<table border=2>";
            echo "<tr>";
              //  echo "<th>name</th>";
                // echo "<th>email</th>";
                echo "<td>Disease Id</th>";
                echo "<td>Disease Name</th>";
		echo "<td>Disease Type </td>";
		echo "<td>Disease Description </td>";
                echo "<td>Disease Cause </td>";
		echo "<td>Disease Advise </td>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>" . $row['name'] . "</td>";
               // echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['disease_id'] . "</td>";
                  echo "<td>" . $row['disease_name'] . "</td>";
				
		  echo "<td>" . $row['disease_type'] . "</td>";
		  echo "<td>" . $row['disease_description'] . "</td>";
		  echo "<td>" . $row['disease_cause'] . "</td>";
		  echo "<td>" . $row['disease_advise'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}




mysqli_close($link);
?>
	
	
	
	
	
</section>	
	

</body>
</html>
<?php 

include_once 'config.php';

if (isset($_POST['submit'])) 
{ 
    /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "port");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Escape user inputs for security

$clientName = $_POST['clientName']; 
$pointA_pointB = $_POST['pointA_pointB']; 
$rackNo = $_POST['rackNo']; 
$odfNo = $_POST['odfNo']; 
$wNo = $_POST['wNo']; 
$portNo = $_POST['portNo']; 
$comments = $_POST['comments'];
 
// Attempt insert query execution
$sql = "INSERT INTO assignment (clientName, pointA_pointB , rackNo, odfNo, wNo , portNo,comments ) 
                    VALUES ('$clientName', '$pointA_pointB', '$rackNo' ,'$odfNo','$wNo','$portNo','$comments')";
if(mysqli_query($link, $sql)){
    

                 
    echo"<h1>INPUT RECEIVED</h1><br>"; 
    echo "<table border='1'>"; 
    
    echo "<tr>"; 
    echo "<th>clientName</th>"; 
    echo "<th>pointA_pointB</th>";
    echo "<th>rackNo</th>"; 
    echo "<th>odfNo</th>"; 
    echo "<th>wNo</th>";
    echo "<th>portNo</th>"; 
    echo "<th>comments</th>"; 
    echo "</tr>"; 

    echo "<tr>"; 
     
    echo "<td>".$clientName."</td>"; 
    echo "<td>".$pointA_pointB."</td>"; 
    echo "<td>".$rackNo."</td>"; 
    echo "<td>" .$odfNo."</td>"; 
    echo "<td>".$wNo."</td>"; 
    echo "<td>".$portNo."</td>"; 
    echo "<td>".$comments."</td>"; 
    echo "</tr>"; 
 
    echo "</table>"; 
    
    echo "Records added successfully.";
     

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

} 
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>add new</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/3.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">



<body> 
<nav class="navbar navbar-dark bg-primary">
                    
                    <form class="form-inline">
                       
                    <h2><a href="assignment.php" class="btn btn-danger pull-right">BACK</a></h2>
                        
                    </form>
                </nav>
                
	<h1>Add link information</h1> 
	<fieldset class="justify-content-center"> 
	
		<form id="form" method="post" action="add.php" > 
			<?php 
				if (isset($_POST['submit'])) 
				{ 
					if (isset($error)) 
					{ 
						echo "<p style='color:red;'>"
						. $error . "</p>"; 
					} 
				} 
                ?> 
                
                
				 <p>
					<label for="clientName">Client Name:</label>
					<input type="text" name="clientName" id="clientName" required>
					<span style="color:red;">*</span> 
				</p>
				<p>
					<label for="pointA_pointB">Point A and Poinr B:</label>
					<input type="text" name="pointA_pointB" id="pointA_pointB" required>
					<span style="color:red;">*</span>
				</p>
				<p>
					<label for="rackNo">Rack No:</label>
					<input type="text" name="rackNo" id="rackNo" required>
					<span style="color:red;">*</span>
				</p>
				<p>
					<label for="odfNo">ODF No:</label>
					<input type="text" name="odfNo" id="odfNo" required>
					<span style="color:red;">*</span>
				</p>
				<p>
					<label for="wNo">W No:</label>
					<input type="text" name="wNo" id="wNo" required>
					<span style="color:red;">*</span>
				</p>
				<p>
					<label for="portNo">PORT No:</label>
					<input type="text" name="portNo" id="portNo" required>
					<span style="color:red;">*</span>
				</p>
				<p>
					<label for="comments">COMMENTS :</label>
					<input type="text" name="comments" id="comments" required>
					<span style="color:red;">*</span>
				</p>
				<input type="submit" value="Submit" name="submit" /> 
		</form> 
	</fieldset> 
	
</body> 
</html> 

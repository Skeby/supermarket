<!DOCTYPE html>
<html>
<head>
  <title>Supermarket Database</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <style type="text/css">
    body {
      margin: auto;
      padding: 32px 64px;
    }
  </style>
</head>
<body>
	<h1>Supermarket Database</h1>

  	<!-- Staff Table -->
  	<h2>Staff</h2>
  	<table border="1" class="table">
  		<thead>
  			<tr>
  				<th>Staff Number</th>
  				<th>Name</th>
  				<th>Address</th>
  				<th>Telephone Number</th>
  				<th>Sex</th>
  				<th>Date of Birth</th>
  				<th>Position</th>
  				<th>Salary</th>
  				<th>Branch Number</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php
  			// connect to the database
  			$conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

       		//retrieve data from the staff table
        	$sql = "SELECT * FROM staff";
        	$result = mysqli_query($conn, $sql);

        	//display the data in a table
        	while($row = mysqli_fetch_assoc($result)){
         		echo "<tr>";
          		echo "<td>" . $row['staff_number'] . "</td>";
          		echo "<td>" . $row['name'] . "</td>";
          		echo "<td>" . $row['address'] . "</td>";
          		echo "<td>" . $row['telephone_number'] . "</td>";
          		echo "<td>" . $row['sex'] . "</td>";
          		echo "<td>" . $row['date_of_birth'] . "</td>";
				echo "<td>" . $row['position'] . "</td>";
				echo "<td>" . $row['salary'] . "</td>";
				echo "<td>" . $row['branch_number'] . "</td>";
				echo "</tr>";
			}
   			//close the connection
    		mysqli_close($conn);
    		?>
		</tbody>
	</table>

	<!-- Branch Office -->
  	<h2>Branch Office</h2>
  	<table border="1" class="table">
    	<thead>
      		<tr>
        		<th>Branch Number</th>
        		<th>Address</th>
        		<th>Telephone Number</th>
        		<th>Manager Name</th>
      		</tr>
    	</thead>
    	<tbody>
     	<?php
        	//connect to the database
        	$conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        	//retrieve data from the branch_office table
        	$sql = "SELECT * FROM branch_office";
        	$result = mysqli_query($conn, $sql);

        	//display the data in a table
        	while($row = mysqli_fetch_assoc($result)){
          	echo "<tr>";
          	echo "<td>" . $row['branch_number'] . "</td>";
          	echo "<td>" . $row['address'] . "</td>";
          	echo "<td>" . $row['telephone_number'] . "</td>";
          	echo "<td>" . $row['manager_name'] . "</td>";
          	echo "</tr>";
          }

        	//close the connection
       		mysqli_close($conn);
      	?>
    	</tbody>
    </table>
    <!-- Manager Table -->
    <h2>Manager</h2>
    <table border="1" class="table">
    <thead>
      <tr>
        <th>Manager Name</th>
        <th>Address</th>
        <th>Telephone Number</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //connect to the database
        $conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        //retrieve data from the manager table
        $sql = "SELECT * FROM manager";
        $result = mysqli_query($conn, $sql);

        //display the data in a table
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['manager_name'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['telephone_number'] . "</td>";
          echo "</tr>";
        }

        //close the connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>
  <!-- Secretary Table -->
  <h2>Secretary</h2>
   <table border="1" class="table">
    <thead>
      <tr>
        <th>Staff Number</th>
        <th>Typing Speed</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //connect to the database
        $conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        //retrieve data from the secretary table
        $sql = "SELECT * FROM secretary";
        $result = mysqli_query($conn, $sql);

        //display the data in a table
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['staff_number'] . "</td>";
          echo "<td>" . $row['typing_speed'] . "</td>";
          echo "</tr>";
        }

        //close the connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>

  <!-- Sales Personnel Table -->
  <h2>Sales Personnel Table</h2>
<table border="1" class="table">
    <thead>
      <tr>
        <th>Staff Number</th>
        <th>Sales Area</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //connect to the database
        $conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        //retrieve data from the sales_personnel table
        $sql = "SELECT * FROM sales_personnel";
        $result = mysqli_query($conn, $sql);

        //display the data in a table
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['staff_number'] . "</td>";
          echo "<td>" . $row['sales_area'] . "</td>";
          echo "</tr>";
        }

        //close the connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>

  <!-- Next of Kin -->
  <h2>Next of Kin</h2>
  <table border="1" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Relationship</th>
        <th>Address</th>
        <th>Telephone Number</th>
        <th>Staff Number</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //connect to the database
        $conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        //retrieve data from the next_of_kin table
        $sql = "SELECT * FROM next_of_kin";
        $result = mysqli_query($conn, $sql);

        //display the data in a table
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['relationship'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['telephone_number'] . "</td>";
          echo "<td>" . $row['staff_number'] . "</td>";
          echo "</tr>";
        }

        //close the connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>

  <!-- Emergency Contact   -->
  <h2>Emergency Contact</h2>
  <table border="1" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Telephone Number</th>
        <th>Branch Number</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //connect to the database
        $conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

        //retrieve data from the emergency_contact table
        $sql = "SELECT * FROM emergency_contact";
        $result = mysqli_query($conn, $sql);

        //display the data in a table
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['telephone_number'] . "</td>";
          echo "<td>" . $row['branch_number'] . "</td>";
          echo "</tr>";
        }

        //close the connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>
</body>
</html>
<?php
$staff_number = $_POST['staff_number'];
$sales_area = $_POST['sales_area'];

//connect to the database
$conn = mysqli_connect('localhost','root','','supermarket');

//check the connection
if(!$conn){
    echo "Failed to connect";
}
else{
    echo "You have connected successfully\n";
}

// Insert the data into the database
$sql = "INSERT INTO sales_personnel (staff_number, sales_area) VALUES ('$staff_number', '$sales_area')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Next Form - Next of Kin</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "next_of_kin.html"
    }
</script>
<?php
$staff_number = $_POST['staff_number'];
$typing_speed = $_POST['typing_speed'];

//connect to the database
$conn = mysqli_connect('localhost','root','Qwerty107#','supermarket');

//check the connection
if(!$conn){
    echo "Failed to connect";
}
else{
    echo "You have connected successfully\n";
}

// Insert the data into the database
$sql = "INSERT INTO secretary (staff_number, typing_speed) VALUES ('$staff_number', '$typing_speed')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Next Form - Sales Personnel</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "sales_personnel.html"
    }
</script>
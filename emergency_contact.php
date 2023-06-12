<?php
$name = $_POST['name'];
$address = $_POST['address'];
$telephone_number = $_POST['telephone_number'];
$branch_number = $_POST['branch_number'];

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
$sql = "INSERT INTO emergency_contact (name, address, telephone_number, branch_number) VALUES ( '$name', '$address', '$telephone_number', '$branch_number')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Display Database</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "display.php"
    }
</script>
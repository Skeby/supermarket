<?php
$name = $_POST['name'];
$relationship = $_POST['relationship'];
$address = $_POST['address'];
$telephone_number = $_POST['telephone_number'];
$staff_number = $_POST['staff_number'];

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
$sql = "INSERT INTO next_of_kin (name, relationship, address, telephone_number, staff_number) VALUES ( '$name', '$relationship', '$address', '$telephone_number', '$staff_number')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Next Form - Emergency Contact</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "emergency_contact.html"
    }
</script>
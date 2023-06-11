<?php
$manager_name = $_POST['manager_name'];
$address = $_POST['address'];
$telephone_number = $_POST['telephone_number'];

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
$sql = "INSERT INTO manager (manager_name, address, telephone_number) VALUES ('$manager_name', '$address', '$telephone_number')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Next Form - Secretary</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "secretary.html"
    }
</script>
<?php
$branch_number = $_POST['branch_number'];
$address = $_POST['address'];
$telephone_number = $_POST['telephone_number'];
$manager_name = $_POST['manager_name'];

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
$sql = "INSERT INTO branch_office (branch_number, address, telephone_number, manager_name) VALUES ( '$branch_number','$address', '$telephone_number', '$manager_name')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>

<div>
    <button onclick="redirect()">Next Form - Manager</button>
</div>
<script type="text/javascript">
    function redirect(){
        window.location.href = "manager.html"
    }
</script>
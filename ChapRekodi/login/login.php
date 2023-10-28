<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
} 

//establish a connection to the database

$connection = mysqli_connect("localhost", "root", "", "chaprekodi");

//test if the connection is not succesful
if(!$connection){
    echo "Connection not succesful due to the following errors <br>".mysqli_conn_error();
}

//establish a query to select a value from the database
$query = "SELECT * FROM admin WHERE jina = '$username' AND nenosiri = '$password';";

//send the query to the database
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    echo '
    <script type="text/javascript">
        window.location.href = "../products/index.php?login=Umefanikiwa kuingia kwenye akaunti!";
    </script>
    ';
} else {
    echo '
    <script type="text/javascript">
        alert("User not found!");
        window.location.href = "index.html";
    </script>
    ';
}
?>
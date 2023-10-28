<?php 
include_once "connection.php";
//retrieving data to the form
$id = $_GET["id"];
$query = "SELECT * FROM stoki where id = '$id'";
$result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badili mauzo</title>
    <style>
        body{
            background-color: rgba(238, 58, 58, 0.671);
        }

        form{
            width:500px;
            max-width: 600px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            border: none;
            border-radius: 30px;
            padding: 14px;
            margin: 20% auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        form img{
            height: 100px;
            width: 100px;
            margin: 5px auto;
        }

        form h1{
            text-align: center;
            padding: 10px 0 25px;
            font-family: cursive;
            font-weight: 900;
        }

        input,button {
            height: 46px;
            border: none;
            border-radius: 14px;
            background-color: #ddd;
            text-align: center;
            font-size: 16px;
            padding-left: 10px;
        }

        input[type=submit],button{
            background-color: rgba(248, 12, 12, 0.788);
            color: #fff;
            margin-top:30px;
            font-size: 18px;
            font-weight: 900;
            transition: .4s ease-in-out;
        }

        input[type=submit]:hover{
            background-color: rgba(121, 121, 201, 0.2);
            cursor: pointer;
        }

        input:focus{
            border: 2px solid #ff7300a4;
        }

        /*for literally small-devices*/
        @media (max-width:532px){
            form{
                width:300px;
            }

            form img{
            height: 50px;
            width: 50px;
            margin: 5px auto;
        }

        form h1{
            text-align: center;
            font-size:18px;
            padding: 10px 0 25px;
            font-family: cursive;
            font-weight: 900;
        }

        input,button {
            height: 32px;
            border: none;
            border-radius: 8px;
            background-color: #ddd;
            text-align: center;
            font-size: 16px;
            padding-left: 10px;
        }

        input[type=submit]{
            background-color: rgba(248, 12, 12, 0.788);
            color: #fff;
            margin-top:30px;
            font-size: 15px;
            font-weight: 900;
            transition: .4s ease-in-out;
        }

        button{
            background-color: #ff7300de;
            color: #fff;
            margin-top:1px;
            font-size: 15px;
            font-weight: 900;
            transition: .4s ease-in-out;
        }

        input[type=submit]:hover{
            background-color: #ff7300bb;
            cursor: pointer;
        }

        input:focus{
            border: 2px solid #ff7300a4;
        }
        }
    </style>
</head>
<body>
    <form method="post">
        <img src="../assets/icons/update.png" alt="">
        <h1>BADILI STOKI</h1>

        <?php 
        if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)){
            echo '
        <input type="text" name="ainayastoki"  value = '.$row["ainayastoki"].' required><br>
        <input type="text" name="nambayakuku"  value = '.$row["nambayakuku"].' required><br>
        <input type="text" name="jumlailiyotumika"  value = '.$row["jumlailiyotumika"].' required><br>
        <input type="text" name="tarehe"  value = '.$row["tarehe"].' required><br>
        <input type="submit" value="BADILI" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="viewstock.php" style="text-decoration:none; color: #fff;">SITISHA</a></button>
        </form>   
</body>
</html>';
        }
    }
?>

<?php
  //on updating
if(isset($_POST['submit'])){
    $id = $_GET["id"];
    $productName = $_POST['ainayastoki'];
    $productPrice = $_POST['nambayakuku'];
    $productDescription = $_POST['jumlailiyotumika'];
    $productImage = $_POST['tarehe'];

    //request and execute the query
    $query = "UPDATE stoki SET ainayastoki = '$productName', nambayakuku ='$productPrice', jumlailiyotumika ='$productDescription', tarehe ='$productImage'  WHERE id = $id;";
    $result2 = mysqli_query($connection,$query);
    
    if($result2){
        echo "<script type='text/javascript'>
                    window.location.href = 'viewstock.php?update=Mabadiliko yamefanyika kikamilifu!';
              </script>";
        $connection->close();
    } else {
        echo "<script type='text/javascript'>
                    alert('Hitilafu imetokea! Jaribu tena');
                    window.location.href = 'updatestock.php';
              </script>";
    }
    }

?>
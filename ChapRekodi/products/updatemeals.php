<?php 
include_once "connection.php";
//retrieving data to the form
$id = $_GET["id"];
$query = "SELECT * FROM chakula where id = '$id'";
$result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badili taarifa za Mlo</title>
    <style>
        body{
            background-color: rgba(218, 204, 7, 0.692);
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
            background-color: rgba(218, 204, 7, 0.692);
            color: #fff;
            margin-top:30px;
            font-size: 18px;
            font-weight: 900;
            transition: .4s ease-in-out;
        }

        input[type=submit]:hover{
            background-color: rgba(218, 204, 7, 0.8);
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
            background-color: rgba(218, 204, 7, 0.692);
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
            background-color: rgba(218, 204, 7, 0.8);
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
        <h1>BADILI TAARIFA KUHUSU MLO</h1>

        <?php 
        if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)){
            echo '
        <input type="text" name="ainayachakula"  value = '.$row["ainayachakula"].' required ><br>
        <input type="text" name="nambayamifuko"  value = '.$row["nambayamifuko"].' required><br>
        <input type="text" name="jumlailiyotumika"  value = '.$row["jumlailiyotumika"].' required><br>
        <input type="text" name="tarehe"  value = '.$row["tarehe"].' required><br>
        <input type="submit" value="BADILI" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="viewmeals.php" style="text-decoration:none; color: #fff;">SITISHA</a></button>
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
    $productName = $_POST['ainayachakula'];
    $productPrice = $_POST['nambayamifuko'];
    $productDescription = $_POST['jumlailiyotumika'];
    $productImage = $_POST['tarehe'];

    //request and execute the query
    $query = "UPDATE chakula SET ainayachakula = '$productName', nambayamifuko ='$productPrice', jumlailiyotumika ='$productDescription', tarehe ='$productImage'  WHERE id = $id;";
    $result2 = mysqli_query($connection,$query);
    
    if($result2){
        echo "<script type='text/javascript'>
                    window.location.href = 'viewmeals.php?update=Mabadiliko yamefanyika kikamilifu!';
              </script>";
        $connection->close();
    } else {
        echo "<script type='text/javascript'>
                    alert('Hitilafu imetokea! Jaribu tena');
                    window.location.href = 'updatereport.php';
              </script>";
    }
    }

?>
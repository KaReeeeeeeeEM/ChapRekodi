<?php 
include_once "connection.php";

if(isset($_POST['submit'])){

$query = "INSERT INTO taarifa (ainayataarifa,nambayakuku,jumlayahasara,tarehe) VALUES(?,?,?,?);";
$stmt = mysqli_prepare($connection,$query);
$stmt->bind_param("ssss",$_POST['ainayataarifa'],$_POST['nambayakuku'],$_POST['jumlayahasara'],$_POST['tarehe']);
$stmt->execute();
$stmt->close();

    echo "<script type='text/javascript'>
                window.location.href = 'viewreports.php?new=Umefanikiwa kutoa taarifa!';
          </script>";
    $connection->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekodi Taarifa</title>
    <style>
        body{
            background-color:rgba(118, 243, 93, 0.658) ;
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
            background-color: rgba(73, 240, 40, 0.966);
            color: #fff;
            margin-top:30px;
            font-size: 18px;
            font-weight: 900;
            transition: .4s ease-in-out;
        }

        input[type=submit]:hover{
            background-color: rgba(118, 243, 93, 0.658);
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
            background-color: rgba(73, 240, 40, 0.966);
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
        <img src="../assets/icons/product.png" alt="product">
        <h1>TOA TAARIFA</h1>
        <input type="text" name="ainayataarifa" placeholder="Aina ya Taarifa" autofocus required><br>
        <input type="text" name="nambayakuku" placeholder="Namba ya Bidhaa au Idadi" required><br>
        <input type="text" name="jumlayahasara" placeholder="Jumla ya Hasara au Gharama" required><br>
        <input type="date" name="tarehe" placeholder="Tarehe" required><br>
        <input type="submit" value="HIFADHI" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="viewstock.php" style="text-decoration:none; color: #fff;">SITISHA</a></button>
    </form>
    
</body>
</html>

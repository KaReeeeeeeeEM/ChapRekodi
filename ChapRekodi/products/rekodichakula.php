<?php 
include_once "connection.php";

if(isset($_POST['submit'])){

$query = "INSERT INTO chakula (ainayachakula,nambayamifuko,jumlailiyotumika,tarehe) VALUES(?,?,?,?);";
$stmt = mysqli_prepare($connection,$query);
$stmt->bind_param("ssss",$_POST['ainayachakula'],$_POST['nambayamifuko'],$_POST['jumlailiyotumika'],$_POST['tarehe']);
$stmt->execute();
$stmt->close();

    echo "<script type='text/javascript'>
                window.location.href = 'viewmeals.php?new=Umefanikiwa kurekodi chakula kipya!';
          </script>";
    $connection->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taarifa ya Mlo</title>
    <style>
        body{
            background-color:rgba(218, 204, 7, 0.692) ;
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
        <h1>REKODI MLO</h1>
        <input type="text" name="ainayachakula" placeholder="Aina ya Chakula" autofocus required><br>
        <input type="text" name="nambayamifuko" placeholder="Namba ya Mifuko" required><br>
        <input type="text" name="jumlailiyotumika" placeholder="Jumla Iliyotumika" required><br>
        <input type="date" name="tarehe" placeholder="Tarehe" required><br>
        <input type="submit" value="REKODI" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="viewmeals.php" style="text-decoration:none; color: #fff;">SITISHA</a></button>
    </form>
    
</body>
</html>

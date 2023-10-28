<?php 
    include_once "connection.php";
        $id = $_GET['id'];

    if(isset($_GET['id']) && isset($_POST['submit'])){
        $query = "DELETE FROM stoki WHERE id = '$id'";
        mysqli_query($connection,$query);
        
        echo "<script type='text/javascript'>
                    window.location.href = 'viewstock.php?success=Bidhaa imefutwa kikamilifu';
              </script>";
        mysqli_close($connection);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futa Stoki</title>
</head>
<style>
    body{
        background-color:rgba(238, 58, 58, 0.671);
        font-family:arial;
    }

    form{
        display:flex;
        flex-direction:column;
        max-width:500px;
        background-color:#fff;
        text-align:center;
        padding:10px 14px;
        margin:20% auto;
        height:250px;
        border-radius:30px;

    }

    input,a{
        width:96%;
        padding:14px 16px;
        margin-bottom:12px;
        border:none;
        border-radius:15px;
    }

    input{
        background-color:#FF1E00;
        color:#fff;
    }

    input:hover{
        cursor:pointer;
    }

    a{
        background-color:#ff7200;
        width:90%;
        text-decoration:none;
        color:#fff;
    }

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

            a{
                background-color:#ff7200;
                width:85%;
                text-decoration:none;
                color:#fff;
                height:12px;
                font-size:14px;
             }
            

        }


</style>
<body>
    <form method="post">
        <h1 style="text-align:center;">ONYO!</h1>
        <p style="text-align:center;">Unakaribia kufuta hii bidhaa  " <b>
        <?php 
    include_once "connection.php";
        $name = $_GET['name'];
        $id = $_GET['id'];

    if(isset($_GET['id'])){
        if(isset($_GET['name'])){
            echo $name;
            }
        }

?>
        
    </b>" kwenye stoki, je una uhakika?</p>
        <input type="submit" value="FUTA" name="submit">
        <a href="viewstock.php">SITISHA</a>
    </form>
</body>
</html>
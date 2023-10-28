<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumla ya Mahesabu</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        /*for the navbar*/
        .navbar{
            display: flex;
            justify-content: space-between;
            margin-bottom:30px;
            border-bottom: 2px solid rgb(151, 61, 235);
        }

        .logo{
            padding-left: 12px;
        }

        .navlinks{
            width: 900px;
            margin-top: 8px;
            float:right;
        }

        .navlinks ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            list-style: none;
        }

        .navlinks ul li {
            text-align: right;
        }

        .navlinks ul li img{
            height: 20px;
            width:20px;
            float: left;
            padding-right:3px;
        }

        .navlinks ul li a, .navlinks ul li a:visited{
            text-decoration: none;
            font-size: 18px;
            transition: .4s ease-in-out;
            color: #333;
        }

        .navlinks ul li a.logout{
           color: rgb(151, 61, 235);
           padding-left: 5px;
        }

        .navlinks ul li a:hover,.logo{
            color:rgb(151, 61, 235);
        }

        /* for the table */
        table {
            width:70%;
            margin: 20px auto;
        }

        tr:nth-child(n){
            background-color: rgba(243, 74, 74, 0.445);
        }
        
        tr{
            height:50px;
        }

        th,td{
            text-align:center;
        }
        
        td a{
            text-decoration:none;
            background-color: green;
            color:#fff;
            padding:8px 12px;
            border:none;
            border-radius: 8px;
        }


        /*for literally small-devices*/
       @media (max-width:532px){

            /*navigation bar*/
            .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 12px;
                font-size: 7px;
            }

            .navlinks ul li img{
                height: 2px;
                width:2px;
                float: left;
                padding-right:3px;
                visibility: hidden;
            }

            .navlinks ul li a, .navlinks ul li a:visited{
                font-size: 9px;
                transition: .4s ease-in-out;
                color:#333;
            }

            .navlinks ul li a.login{
                color: rgba(243, 74, 74, 0.445);
                padding-left: 5px;
            }

            .navlinks ul li a:hover,.logo{
                color:rgba(243, 74, 74, 0.445);
            }

            .heading{
                font-size:14px;
            }

            .paragraph{
                font-size:10px;
            }

            /*for literally small screen table */
             /* for the table */
            table {
                width:95%;
                margin: 20px auto;
                font-size:12px;
            }

            tr:nth-child(n){
                background-color: rgba(243, 74, 74, 0.445);
            }
            
            tr{
                height:50px;
            }

            th,td{
                text-align:center;
            }
            
            td a{
                text-decoration:none;
                background-color: green;
                color:#fff;
                padding:4px 6px;
                border:none;
                font-size:10px;
                border-radius: 8px;
                margin:3px 4px;
            }
       }

       @media (min-width:533px) and (max-width:620px){
                .navlinks ul li img{
                    visibility:hidden;
                    height:1px;
                    width:1px;
                }

                .navlinks ul li a{
                    font-size:8px;
                }

                .logo{
                    font-size:10px;
                }

                h1{
                    font-size:16px;
                }

                h2{
                    font-size:14px;
                }

                p{
                    font-size:12px;
                }

                tr,td,td a{
                    font-size:10px;
                    padding:3px;
                }

                .jumla{
                    font-size:10px;
                }
       }

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1><a href="index.php" style="text-decoration:none;color:rgb(151, 61, 235)">ChapRekodi</a></h1>
        </div>
        <div class="navlinks">
            <ul>
                <li><img src="../assets/icons/add-small.png" alt="add"><a href="rekodi.php">Rekodi Mauzo</a></li>
                <li><img src="../assets/icons/product.png" alt="view"><a href="rekodichakula.php">Rekodi Chakula</a></li>
                <li><img src="../assets/icons/file-small.png" alt="view"><a href="rekodistoki.php">Stoki Mpya</a></li>
                <li><img src="../assets/icons/user.png" alt="view"><a href="rekoditaarifa.php">Toa Taarifa</a></li>
                <?php include_once'connection.php'; 
                    $query = 'SELECT * FROM admin';
                    $result = mysqli_query($connection,$query); 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    echo '
                         <li><img src="../assets/icons/password.png" alt="change"><a href="../login/changepassword.php?id='.$row["id"];
                          }
                        }
                          ?> ">Badili nenosiri</a></li>
                <li><img src="../assets/icons/logout.png" alt="exit"><a href="../login/index.html" class="logout">Ondoka</a></li>
            </ul>
        </div>
    </div>

    <h1 style="text-align:center;" class="heading">JUMLA YA MAHESABU</h1>
    <p style="text-align:center;" class="paragraph">Hii ndio jumla ya mahesabu yote katika biashara yako</p>
    
    <div class="hesabu">
        <h2 style="color:rgba(121, 121, 201, 0.445);margin-top:5%;font-style:italic;text-align:center;">A. Jumla ya Mauzo:<h2>
        <?php
            echo '
            <table style="background-color:rgba(121, 121, 201, 0.445)">
                <tr style="font-size:16px";>
                <td style="text-align:left;padding-left:24px;"><b>JUMLA YA MAUZO</b></td>
                <td>';
        ?>
        <?php 
            $query2 = "SELECT SUM(jumlayabei)
            FROM mauzo;";
            $result2 = mysqli_query($connection, $query2);
            if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                echo "<b>Tsh ".$row2["SUM(jumlayabei)"]."/=</b>";
                } echo '</td>
                </tr>
            </table>';
            }
    ?>
    </div>
    
    <div class="hesabu">
        <h2 style="color:rgba(243, 74, 74, 0.445);margin-top:5%;font-style:italic;text-align:center;">B. Jumla ya Manunuzi:</h2>
        <?php
            echo '
            <table style="background-color:rgba(243, 74, 74, 0.445)">
                <tr>
                <td style="text-align:left;padding-left:24px;"><b>JUMLA YA MANUNUZI</b></td>
                <td>';
        ?>
        <?php 
            $query2 = "SELECT SUM(jumlailiyotumika)
            FROM stoki;";
            $result2 = mysqli_query($connection, $query2);
            if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                echo "<b>Tsh ".$row2["SUM(jumlailiyotumika)"]."/=</b>";
                } echo '</td>
                </tr>
            </table>';
            }
    ?>
    
    </div>
    
    <div class="hesabu">
        <h2 style="color:rgba(73, 240, 40, 0.966);margin-top:5%;font-style:italic;text-align:center;">C. Jumla ya Hasara:</h2>        
        <?php
            echo '
            <table style="background-color:rgba(73, 240, 40, 0.966)">
                <tr>
                <td style="text-align:left;padding-left:24px;"><b>JUMLA YA HASARA</b></td>
                <td>';
        ?>
        <?php 
            $query2 = "SELECT SUM(jumlayahasara)
            FROM taarifa;";
            $result2 = mysqli_query($connection, $query2);
            if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                echo "<b>Tsh ".$row2["SUM(jumlayahasara)"]."/=</b>";
                } echo '</td>
                </tr>
            </table>';
            }
    ?>
    
    </div>
    
    <div class="hesabu">
        <h2 style="color:rgba(218, 204, 7, 0.692);margin-top:5%;font-style:italic;text-align:center;">D. Gharama za Chakula:</h2>
        <?php
            echo '
            <table style="background-color:rgba(218, 204, 7, 0.692);">
                <tr>
                <td style="text-align:left;padding-left:24px;"><b>GHARAMA ZA CHAKULA</b></td>
                <td>';
        ?>
        <?php 
           
           $query2 = "SELECT SUM(jumlailiyotumika)
           FROM chakula;";
           $result2 = mysqli_query($connection,$query2);
            if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                echo "<b>Tsh ".$row2["SUM(jumlailiyotumika)"]."/=</b>";
                } echo '</td>
                </tr>
            </table>';
            }
        

            
    ?>
            
    </div>

    <hr style="height:20px;">
    <?php
            echo '
            <table style="background-color:#ccc;height:100px;">
                <tr>
                <td style="text-align:left;padding-left:24px;font-size:24px;color:#fff;" class="jumla"><b>JUMLA KUU</b></td>
                <td style = "text-align:right;padding-right:20px;font-size:24px;color:#fff;" class = "jumla">';
    ?>
    <?php

                $query = "SELECT SUM(jumlailiyotumika)
                FROM chakula;";
                $result = mysqli_query($connection, $query);

                $query2 = "SELECT SUM(jumlayahasara)
                FROM taarifa;";
                $result2 = mysqli_query($connection, $query2);

                $query3 = "SELECT SUM(jumlailiyotumika)
                FROM stoki;";
                $result3 = mysqli_query($connection, $query3);

                $query4 = "SELECT SUM(jumlayabei)
                FROM mauzo;";
                $result4 = mysqli_query($connection, $query4);
          

            if(mysqli_num_rows($result) > 0 && mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0 && mysqli_num_rows($result4) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    while($row2 = mysqli_fetch_assoc($result2) ){
                        while($row3 = mysqli_fetch_assoc($result3)){
                            while($row4 = mysqli_fetch_assoc($result4)){
                    echo '<br>';
                     echo 'Tsh '.$row4["SUM(jumlayabei)"] - $row2["SUM(jumlayahasara)"] - $row3["SUM(jumlailiyotumika)"] - $row["SUM(jumlailiyotumika)"]; 
                     echo'/=</b>';
                    echo '</td>
                    </tr>
                </table>
                ';          }
                        }
                    }
                }
            }
    ?>
    
    </body>
</html>
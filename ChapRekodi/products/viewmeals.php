<?php  

 if(isset($_GET['update'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:rgba(218, 204, 7, 0.692);
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color: rgba(218, 204, 7, 0.692);
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }

                   
                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>Hongera</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['update'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "viewmeals.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>

<?php  

 if(isset($_GET['new'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:rgba(218, 204, 7, 0.692);
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color: rgba(218, 204, 7, 0.692);
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }

                   
                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>Hongera</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['new'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "viewmeals.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hifadhi ya Mlo</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        /*for the navbar*/
        .navbar{
            display: flex;
            justify-content: space-between;
            margin-bottom:30px;
            border-bottom: 2px solid rgba(218, 204, 7, 0.692);
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
           color: rgba(218, 204, 7, 0.692);
           padding-left: 5px;
        }

        .navlinks ul li a:hover,.logo{
            color:rgba(218, 204, 7, 0.692);
        }

        /* for the table */
        table {
            width:90%;
            margin: 20px auto;
        }

        tr:nth-child(n){
            background-color: rgba(218, 204, 7, 0.692);
        }
        
        tr{
            height:50px;
        }

        th,td{
            text-align:center;
        }
        
        td a{
            text-decoration:none;
            background-color: #fff;
            color:rgba(218, 204, 7, 0.692);
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
                color: #ff7300;
                padding-left: 5px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
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
                background-color: rgba(218, 204, 7, 0.692);
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

                p{
                    font-size:12px;
                }

                tr,td,td a{
                    font-size:10px;
                    padding:3px;
                }
       }

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1><a href="index.php" style="text-decoration:none;color:rgba(218, 204, 7, 0.692)">ChapRekodi</a></h1>
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

    <h1 style="text-align:center" class="heading">Rekodi za Mlo</h1>
    <p style="text-align:center;" class="paragraph">Mlo ni sehemu muhimu sana katika hatua za ufugaji, hapa ndipo utakapoweza kuona rekodi ya milo yote katika mifuko na aina za mlo</p>

<?php
    include_once "connection.php";

    $query = "SELECT * FROM chakula";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<table>
        <tr>
            <th>id</th>
            <th>Aina ya Chakula</th>
            <th>Namba ya Mifuko</th>
            <th>Jumla Iliyotumika</th>
            <th>Tarehe</th>
            <th>Vitendo</th>
        </tr>';

        while($row = mysqli_fetch_assoc($result)) {
        echo ' 
                <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['ainayachakula'].'</td>
                        <td>'.$row['nambayamifuko'].'</td>
                        <td>'.$row['jumlailiyotumika'].'</td>
                        <td>'.$row['tarehe'].'</td>
                        <td>
                            <a href="updatemeals.php?id='.$row['id'].'" class="delete" style="color:orange;">Badili</a>
                            <a href="deletemeal.php?id='.$row['id'].'&name='.$row['ainayachakula'].'" class="delete" style="background-color:red;color:white;">Futa</a>
                        </td>
                </tr>';
        }

        echo '
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        
        <tr>
        <td><b>JUMLA ILIYOTUMIKA</b></td>
        <td></td>
        <td></td>
        <td>';?> <?php 
        $query2 = "SELECT SUM(jumlailiyotumika)
        FROM chakula;";
        $result2 = mysqli_query($connection, $query2);
        if(mysqli_num_rows($result2) > 0){
        while($row2 = mysqli_fetch_assoc($result2)){
            echo "<p><b>Tsh ".$row2["SUM(jumlailiyotumika)"]."/=</b></p>";
            } echo '</td>
            <td></td>
            <td></td>
            </tr>
        </table>
            </body>
         </html>';

    }

    } else {
        echo "<p style='text-align:center;margin-top:20%;font-size:24px;color:rgba(218, 204, 7, 0.692);'>Hakuna manunuzi ya chakula kwa sasa!</p>";
    }

?>
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
                        z-index:100000000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:blue;
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
                    background-color:blue;
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
                window.location.href = "index.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>




<?php  

 if(isset($_GET['login'])){
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
                        z-index:100000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:blue;
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
                    background-color:blue;
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
                    <p>'.$_GET['login'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "index.php";
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
    <title>ChapRekodi</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        /*for the navbar*/
        .navbar{
            display: flex;
            justify-content: space-between;
            margin-bottom:30px;
            border-bottom: 2px solid #aaa;
            background-color:rgba(4, 8, 233,0.8);
            position: fixed;
            width:100%;
            top:0;
            left:0;
            z-index: 1000;

        }

        .logo{
            padding-left: 12px;
        }

        .logo h1{
            color:#fff;
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
            color: #fff;
        }

        .navlinks ul li a.logout{
           color: #333;
           padding-left: 5px;
        }

        .navlinks ul li a.logout:hover{
            color:#fff;
        }

        .navlinks ul li a:hover{
            color:#333;
        }

        /*for the hero section*/
        .hero-section{
            display:flex;
            justify-content: space-between;
        }

        .first{
            margin-top:100px;
        }

        .hero-contents h1{
            margin-top: 50px;
            margin-left:20px;
            font-size: 42px;
        }

        .hero-contents p{
            font-size: 24px;
            margin-left: 20px;
        }

        .hero-image{
            margin-right: 20px;
            margin-left: 28px;
            height:600px;
            max-width: 680px;
        }

        .hero-image img{
            width: 550px;
            height:500px;
            margin-top:48px;
            border-radius:30px;
        }

        .second{
            background-color:rgba(238, 58, 58, 0.671);
        }

        .fourth{
            background-color:rgba(255, 208, 0, 0.692);
        }

    
        .call-to-action-button{
            float: left;
            width: 50%;
            padding:50px 80px;
            text-align: center;
        }

        .call-to-action-button a{
            background-color: rgba(121, 121, 201, 0.445);
            color: #fff;
            padding:14px 36px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 24px;
            transition: .4s ease-in-out;
        }

        .second-button a{
            color:rgba(238, 58, 58, 0.671);
            background-color:#fff;
        }

        .third-button a{
            background-color:rgba(73, 240, 40, 0.966);
        }

       .fourth-button a{
            background-color:#fff;
            color:rgba(218, 144, 7, 0.692);
        }

        .fifth-button a{
            background-color:rgba(187, 4, 233, 0.692);
        }

        .call-to-action-button a:hover{
            background-color: #333;
            color:#fff;
        }

       


        
      
       /*for literally small-devices*/
       @media (max-width:532px){

        .hero-image{
                    height:300px;
                }

        .hero-section{
            height:300px;
        }

        .hero-section.first{
            margin-top:60px;
        }

        .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 19px;
                font-size: 5px;
            }

            .hero-contents h1,span{
                font-size:16px;
                margin-right:10px;
                margin-left:15px;
            }

            .hero-contents p{
                font-size:13px;
            }

            .hero-image img{
                width:100px;
                height:100px;
                border-radius:10px;
            }

            h2.username{
                font-size:8px;
                margin-left:19px;
                margin-top:22px;
            }

            .navlinks ul li img{
                height: 1px;
                width:1px;
                float: left;
                padding-right:3px;
                visibility: hidden;
            }

            .navlinks ul li a, .navlinks ul li a:visited{
                font-size: 4px;
                transition: .4s ease-in-out;
                color:#333;
            }

            .navlinks ul li a.login{
                color: #ff7300;
                padding-left: 1px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
            }

            .call-to-action-button a, .call-to-action-button{
                padding:3px;
                font-size:8px;
                margin-top:-5px;
                margin-left:15px;
            }
            

        }

        @media (min-width:520px) and (max-width:719.9999px){
                
                
                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
                }
                
                .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 19px;
                font-size: 5px;
            }

            .navlinks ul li img{
                height: 1px;
                width:1px;
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
                padding-left: 1px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
            }

            .hero-section{
                height:250px;
            }

            .hero-contents h1,span{
                font-size:16px;
            }

            .hero-contents p{
                font-size:12px;
            }

            .hero-section img{
                height:180px;
                width:180px;
            }

            .call-to-action-button a, .call-to-action-button{
                font-size:10px;
                padding:5px;
            }

            h2.username{
                font-size:8px;
                margin-left:12px;
                margin-top:24px;
            }
                
               
     }

            @media (min-width:720px) and (max-width:809.9999px){
                .call-to-action-button a,.call-to-action-button{
                    margin-top:-33px;
                    font-size:10px;
                }

                .hero-image{
                    height:330px;
                }

            .hero-contents h1,span{
                    font-size:24px;
                }
                
                .hero-contents p{
                    font-size:18px;
                }

                .hero-section img{
                    width:200px;
                    height:200px;
                    margin-top:32px;
                }

                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
            }

                .navlinks ul li a, .navlinks ul li a:visited{
                    font-size: 12px;
                    transition: .4s ease-in-out;
                    padding:3px 5px;
                    color:#333;
            }

            h2.username{
                font-size:10px;
                margin-left:16px;
                margin-top:22px;
            }

            .hero-section{
                height:330px;
            }

            .logo{
                font-size:12px;
            }


     }

            @media (min-width:810px) and (max-width:1280px) {
                .hero-contents h1,span{
                    font-size:24px;
                }
                
                .hero-contents p{
                    font-size:18px;
                    padding-right:18px;
                }

                .hero-section img{
                    width:200px;
                    height:200px;
                    margin-top:32px;
                }

                .hero-image{
                    height:330px;
                }

                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
            }

                .navlinks ul li a, .navlinks ul li a:visited{
                    font-size: 12px;
                    transition: .4s ease-in-out;
                    padding:3px 5px;
                    color:#333;
            }

            h2.username{
                font-size:10px;
                margin-left:16px;
                margin-top:22px;
            }

            .hero-section{
                height:330px;
            }

            .logo{
                font-size:12px;
            }

            .call-to-action-button, .call-to-action-button a{
                font-size:18px;
                padding:5px 8px;
            }

              
        }
    


    

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1>ChapRekodi</h1>
        </div>
        <?php include_once'connection.php'; 
                    $query = 'SELECT * FROM admin';
                    $result = mysqli_query($connection,$query); 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    echo '
                        <h2 style="font-family:cursive" class="username">Karibu '.$row["jina"].' !</h2>
                        <div class="navlinks">
                            <ul>
                <li><img src="../assets/icons/add-small.png" alt="add"><a href="rekodi.php">Rekodi Mauzo</a></li>
                <li><img src="../assets/icons/product.png" alt="view"><a href="rekodichakula.php">Rekodi Chakula</a></li>
                <li><img src="../assets/icons/file-small.png" alt="view"><a href="rekodistoki.php">Stoki Mpya</a></li>
                <li><img src="../assets/icons/user.png" alt="view"><a href="rekoditaarifa.php">Toa Taarifa</a></li>
                
                         <li><img src="../assets/icons/password.png" alt="change"><a href="../login/changepassword.php?id='.$row["id"];
                          }
                        }
                          ?> ">Badili nenosiri</a></li>
                <li><img src="../assets/icons/logout.png" alt="exit"><a href="../login/index.html" class="logout">Ondoka</a></li>
            </ul>
        </div>
    </div>

    <body>
    <div class="hero-section first">
        <div class="hero-contents">
            <h1><span style="color: #0059ff70;">Rekodi Mauzo</span>: Sasa unaweza kuhifadhi mauzo</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro esse adipisci facere explicabo labore sequi doloremque, voluptate reiciendis quam placeat architecto vitae dolorum blanditiis consequatur corporis ea nam sed. Fugiat.</p>
            <div class="call-to-action-button">
                    <a href="viewsales.php">Angalia Mauzo</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="../assets/images/ruslan-bardash-4kTbAMRAHtQ-unsplash.jpg" alt="">
        </div>
    </div>

    <div class="hero-section second">
    <div class="hero-image">
            <img src="../assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg" alt="">
        </div>
        <div class="hero-contents">
            <h1><span style="color: rgba(240, 40, 40, 0.966) ;">Stoki Mpya</span>: Hifadhi stoki inayoingia</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro esse adipisci facere explicabo labore sequi doloremque, voluptate reiciendis quam placeat architecto vitae dolorum blanditiis consequatur corporis ea nam sed. Fugiat.</p>
            <div class="call-to-action-button second-button">
                    <a href="viewstock.php">Kagua Stoki</a>
            </div>
        </div>
    </div>

    <div class="hero-section third">
        <div class="hero-contents">
            <h1><span style="color: rgba(73, 240, 40, 0.966);">Taarifa</span>:Toa taarifa kuhusu kuku waliopata hitilafu</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro esse adipisci facere explicabo labore sequi doloremque, voluptate reiciendis quam placeat architecto vitae dolorum blanditiis consequatur corporis ea nam sed. Fugiat.</p>
            <div class="call-to-action-button third-button">
                    <a href="viewreports.php">Peruzi Taarifa</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="../assets/images/solen-feyissa-mO-_iF_FkCk-unsplash.jpg" alt="">
        </div>
    </div>

    <div class="hero-section fourth">
        <div class="hero-image">
            <img src="../assets/images/daniel-korpai-hbTKIbuMmBI-unsplash.jpg" alt="">
        </div>
        <div class="hero-contents">
            <h1><span style="color:rgba(218, 144, 7, 0.692);">Chakula</span>: Weka namba ya gunia za chakula zilizoingia</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro esse adipisci facere explicabo labore sequi doloremque, voluptate reiciendis quam placeat architecto vitae dolorum blanditiis consequatur corporis ea nam sed. Fugiat.</p>
            <div class="call-to-action-button fourth-button">
                    <a href="viewmeals.php">Hifadhi ya Manunuzi</a>
            </div>
        </div>
    </div>

    <div class="hero-section fifth">
        <div class="hero-contents">
            <h1><span style="color:rgba(187, 4, 233, 0.692);">Mahesabu</span>: Pata jumla ya matumizi ili ujue faida na hasara</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro esse adipisci facere explicabo labore sequi doloremque, voluptate reiciendis quam placeat architecto vitae dolorum blanditiis consequatur corporis ea nam sed. Fugiat.</p>
            <div class="call-to-action-button fifth-button">
                    <a href="viewsummary.php">Pata Hesabu</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="../assets/images/rachit-tank-2cFZ_FB08UM-unsplash.jpg" alt="">
        </div>
    </div>
    </body>
</html>
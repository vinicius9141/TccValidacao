<!DOCTYPE html>
<html lang="pt-br">
<?php 
session_start();
include('verifica_login.php');
?>
<head>
    <title>Kairos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>  
    
    <script src="js/qrcode.min.js"></script>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    <span class="login100-form-title">
                          <h2> Olá,  <?php echo $_SESSION['usuario'];?></h2>

                    </span>
                    <div class="container-login100-form-btn" align="center">
                         <video id="webcam" height="300" width="300"></video>

                            <script src="js/instascan.min.js"></script>
                            <script>
                            
                                
                              const scanner = new Instascan.Scanner({
                                video: document.getElementById('webcam')
                              })
                              scanner.addListener('scan', content => {
                                console.log(content)
                              })
                              Instascan.Camera.getCameras().then( cameras => {
                                if(cameras.length > 0){
                                  scanner.start(cameras[0])
                                }
                              })
                              
                            </script>
                        </form>
                             <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="logout.php"  method="post">
                            <div class="container-login100-form-btn">
                                <a href="logout.php"> 
                                    <button class="login100-form-btn"> 
                                         S A I R 
                                    </button> 
                               </a>
                          </div>
                        </form> 
  
                    </div> <br><br>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    
  </body>
</html>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js">
    </script>

</body>
</html>
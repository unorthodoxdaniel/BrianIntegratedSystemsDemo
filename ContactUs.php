<!DOCTYPE HTML>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <script src ="jquery/jquery-3.3.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap Js CDN -->
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <script src ="js/animation.js"></script>  
</head>
    <body>
        <?php include 'includefiles/header.php';?>
        <!-- Body content Here -->
        <div class ="box">
            <div class ="home-display headerimg" style = "display:none;">
                <img src = "img/organic-1280537_640.jpg" class ="home-img">
                <div class = "home-div" >
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>

        <section class="section hideme">
            <div class="container section-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="left-side mt-5">
                            <h2>Locate Us</h2>
                            <address>
                            LAGOS OFFICE:
                            8, Victoria Odeniran Close, Off Salvation Road. Opebi Ikeja- Lagos.
                            Tel: 08151694239, 08150617343 
                            ABUJA OFFICE:
                            Suite A 44 Shakir Plaza, Plot 1029 Michika Street,
                            Opposite KIA Motors Off Ahmadu Bello Way, Garki Area II ,
                            Tel: 08150617345, 08151694223
                            IBADAN OFFICE:
                            MIC Building Oyo State Secretariat, Ibadan , Oyo State.
                            Tel: 08151694235
                            </address> 
                        </div>                                    
                    </div>               
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <form action="">
                            <div class="form-group">
                                <label for="name">name</label>
                            <input type="text" class="form-control" id="name"><br>

                            <label for="email">email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com"><br>

                            <label for="phone-number">phone number</label>
                            <input type="text" class="form-control" id="phone-number"><br>

                            <label for="subject">subject</label>
                            <input type="text" class="form-control" id="subject"><br>

                            <label for="message">message</label>
                            <textarea id="message" class="form-control" id="" cols="30" rows="10"></textarea><br>
                            <div class="btn-wrapper text-center">
                                <button type="submit" class="btn btn-default btn-md">Submit</button>
                            </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includefiles/footer.php';?>
        <script src ="js/animation.js"></script>
    </body>
</html>
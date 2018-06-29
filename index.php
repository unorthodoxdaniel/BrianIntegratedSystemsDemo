<!DOCTYPE HTML>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <script src ="jquery/jquery-3.3.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <script src ="js/animation.js"></script>
        
</head>
    <body>
        <?php include 'includefiles/header.php';?>
<div class ="hideme" >
             <div class ="box">
                 <div class ="home-display">
                    <img src = "img/organic-1280537_640.jpg" class ="home-img">

                <div class = "home-div" >
                    <p> <h1><b>Experience New Age Technology</p>
                    </p></h1>
                    <button type="button" class="btn btn-default btn-lg">Our Products</button>
                </div>
            </div>
        </div>
</div>

<section class="hideme">
        <div class ="box">
                 <div class ="home-display">
                    <img src = "img/joy-2483926_640.jpg" class ="home-img">

                <div class = "home-div">
                    <p> <h1><b>Rugged System With Make You Deliver On Promise To Your Clients, We Are Fast Durable And Gives You All The Apps You Need Handy</p>
                    </p></h1>
                    <button type="button" class="btn btn-default btn-lg">Our Products</button>
                </div>
            </div>
        </div>
</section>

<section class="hideme">
        <div class ="box">
                 <div class ="home-display">
                    <img src = "img/office-3295556_960_720.jpg" class ="home-img">

                <div class = "home-div">
                    <p> <h1><b>Rugged System With Make You Deliver On Promise To Your Clients, We Are Fast Durable And Gives You All The Apps You Need Handy</p>
                    </p></h1>
                    <button type="button" class="btn btn-default btn-lg">Our Products</button>
                </div>
            </div>
        </div>
</section>
        <?php include 'includefiles/footer.php';?>
        <script>
            $("#headernavbar").fadeIn(1000);
            $('.hideme').css("opacity","0");
            $(document).ready(function() {

                /* Every time the window is scrolled ... */
                $(window).scroll( function(){

                    /* Check the location of each desired element */
                    $('.hideme').each( function(i){
                        var bottom_of_object = $(this).offset().top + $(this).outerHeight() * 0.5;
                            // + $(this).outerHeight();
                        var bottom_of_window = $(window).scrollTop() + $(window).height();

                        /* If the object is completely visible in the window, fade it it */
                        if( bottom_of_window > bottom_of_object){
                            if($(this).css("opacity") == 0)
                                $(this).animate({'opacity':'1'},500);

                        } else{
                            if($(this).css("opacity") == 1)
                            {
                                $(this).animate({'opacity':'0'},300);
                            }}

                    });

                });

            });
        </script>
    </body>
</html>
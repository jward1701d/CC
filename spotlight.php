<?php
	$dir = "issues/issue33/spotlight/";
    $numPages = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coalfield Connection</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/wow_book.css" type="text/css" />
    <link href="css/book.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Hide this line for IE (needed for Firefox and others) -->
	  <![if !IE]>
	  <link rel="icon" href="img/flavicon.ico" type="image/x-icon" />
	  <![endif]>
	  <!-- This is needed for IE -->
	  <link rel="shortcut icon" href="img/flavicon.ico" type="image/ico" />
    <script src="js/modernizr-1.6.min.js"></script>
</head>
<body>
    <?php include_once "includes/base/header.php"; ?><!-- contains the navigation -->
    <div id="container">
        <nav>
            <ul>
                <li><a id='first'     href="#" title='goto first page'   >First page</a></li>
                <li><a id='back'      href="#" title='go back one page'  >Back</a></li>
                <li><a id='next'      href="#" title='go foward one page'>Next</a></li>
                <li><a id='last'      href="#" title='goto last page'    >last page</a></li>
                <li><a id='zoomin'    href="#" title='zoom in'           >Zoom In</a></li>
                <li><a id='zoomout'   href="#" title='zoom out'          >Zoom Out</a></li>
                 <li><a id='zoom'   href="#" title='zoom'          >Zoom</a></li>
                <li><a id='slideshow' href="#" title='start slideshow'   >Slide Show</a></li>
                <li><a id='flipsound' href="#" title='flip sound on/off' >Flip sound</a></li>
               <!-- <li><a id='fullscreen' href="#" title='fullscreen on/off' >Fullscreen</a></li>
               <!-- <li><a id='thumbs'    href="#" title='thumbnails on/off' >Thumbs</a></li>-->
            </ul>
        </nav>
        <div id="main" >
            <div id='business-spotlight'>
                <div id='cover'>
                    <img src="<?php echo $dir;?>1.jpg" style = 'width: 100%; height: 100%;'>
                </div>
                
                
                <div class='responsive feature'>
                        <img src="<?php echo $dir;?>2.jpg" style = 'width: 100%; height: 100%;'>
                </div>
                <div class='responsive feature'>
                        <img src="<?php echo $dir;?>3.jpg" style = 'width: 100%; height: 100%;'>
                </div>
                <div class='responsive feature'>
                        <img src="<?php echo $dir;?>78.jpg" style = 'width: 100%; height: 100%;'>
                </div>
                <div class='responsive feature'>
                        <img src="<?php echo $dir;?>79.jpg" style = 'width: 100%; height: 100%;'>
                </div>
                <div class='responsive feature'>
                        <img src="<?php echo $dir;?>80.jpg" style = 'width: 100%; height: 100%;'>
                </div>
            </div>
        </div>    
    </div>
    <div class="blank"></div>
    <?php include_once "includes/base/footer.php"; ?><!-- contains footer of the website-->
    <?php include_once "includes/scripts.php"; ?><!-- contains the common js files for the website-->
    <script type="text/javascript" src="js/wow_book.min.js"></script>
    
    <script type="text/javascript">
    
$(document).ready(function() {
    var zoomclicked = 0;
    var zoomed = false;
    var faded = false;
    var slide = false;
    var soundEnabled = true;
    
   
    $('#business-spotlight').wowBook({
            height : 500
            ,width  : 800
            ,centeredWhenClosed : true
            ,hardcovers : false
            ,turnPageDuration : 1000
			,pageNumbers: false
			,numberedPages : [1,-2]
            ,controls : {
                zoomIn    : '#zoomin',
                zoomOut   : '#zoomout',
                next      : '#next',
                back      : '#back',
                first     : '#first',
                last      : '#last',
                slideShow : '#slideshow',
                flipSound : '#flipsound'
            }
            ,scaleToFit: "#container"
            
        }).css({'display':'none', 'margin':'auto'}).fadeIn(1000);

        $("#cover").click(function(){
            $.wowBook("#business-spotlight").advance();
            
        });

        var book = $.wowBook("#business-spotlight");
       
    
        $('#zoom').click(function(){ 
            if(!zoomed){
                book.zoom(2);
                zoomed = true;
                zoomclicked = 22;
                $('.navbar-custom').fadeOut();
                $('#cc-footer').fadeOut();
                $('#container').css('padding-top','5px');
                faded = true;
                $('.wowbook-zoomwindow').css('top','40px', 'height','800px');
            }
            else{
                book.zoom(1);
                $('.navbar-custom').fadeIn();
                $('#cc-footer').fadeIn();
                if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 					$('#container').css('padding-top','60px');
				}else{
                	$('#container').css('padding-top','126px');
				}
                faded = false;
                zoomed = false;
                zoomclicked = 0;
            }
            
        });
        
    
        $('#zoomin').click(function(){
            zoomclicked++;
            console.log(zoomclicked);
            if(zoomclicked >= 5){
                $('.wowbook-zoomwindow').css('top','0');
                $('.navbar-custom').fadeOut();
                $('#cc-footer').fadeOut();
                faded = true;
                zoomed = true;
                $('#container').css('padding-top','5px');
                if(zoomclicked > 21){
                    zoomclicked = 21;
                }

                   
            }
        
        });
        $('#zoomout').click(function(){
            zoomclicked--;
            console.log(zoomclicked);
            if(zoomclicked < 5 && faded === true){
                $('.navbar-custom').fadeIn();
                $('#cc-footer').fadeIn();
                $('#container').css('padding-top','126px');
                faded = false;
                if(zoomclicked <= 0){
                    zoomclicked = 0;
                }
            }
            if(zoomclicked <= 0){
                zoomclicked = 0;
            }
           
        });
        $('#slideshow').click(function(){
            if(!slide){
                slide = true;
                $('#slideshow').css('background-image','url(images/icons/slideshow_pause.png)');
            }else{
                slide = false;
                $('#slideshow').css('background-image','url(images/icons/slideshow_play.png)');
            }
        
        });
        $('#flipsound').click(function(){
            if(!soundEnabled){
                soundEnabled = true;
                $('#flipsound').css('background-image','url(images/icons/sound_on.png)');
            }
            else{
                soundEnabled = false;
                $('#flipsound').css('background-image','url(images/icons/sound_off.png)');
            }
        });
  
});



    </script>
    
    
   
</body>
</html>
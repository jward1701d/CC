$(document).ready(function() {
    var zoomclicked = 0;
    var zoomed = false;
    var faded = false;
    var slide = false;
    var soundEnabled = true;
    
   
    $('#current').wowBook({//$('#features').wowBook({
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
                //thumbnails : '#thumbs',
                //fullscreen : '#fullscreen'
            }
            ,scaleToFit: "#container"
            ,thumbnailsPosition : 'bottom'
            ,onFullscreenError : function(){
                var msg="Fullscreen failed.";
                if (self!=top) msg="The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
                alert(msg);
            }
        }).css({'display':'none', 'margin':'auto'}).fadeIn(1000);

        $("#cover").click(function(){
            //$.wowBook("#features").advance();
            $.wowBook("#current").advance();
            
        });

        //var book = $.wowBook("#features");
        var book = $.wowBook("#current");
       
    
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
                $('#container').css('padding-top','126px');
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
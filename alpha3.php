<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alpha3</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
    </head>
    <body>                        
        <button id="myBtn">Images;Alpha3</button>
        <div id="myModal" class="modal">
            <div id="modal-content" class="modal-content animated zoomIn">
                <span class="close">&times;</span>
                <h4>Images</h4>
                <img class="web_icon" src="img/web.png" alt="web"> 
                <?php include 'webgallery.php'; ?>
                <a class="button" href="img/zips/Alpha3-web.zip" download="Alpha3-web.zip">Download web pictures</a>
                <img class="print_icon" src="img/print.png" alt="print">                            
                <?php include 'printgallery.php'; ?>
                <a class="button" href="img/zips/Alpha3-print.zip" download="Alpha3-print.zip">Download print pictures</a>
                <br/>
                <a class="button-main" href="img/zips/Alpha3-images.zip" download="Alpha3-images.zip">Download all pictures</a>
            </div>      
        </div>  
        <button id="myBtn2">Web-banners;Alpha3</button>
        <div id="myModal2" class="modal">
            <div id="modal-content2" class="modal-content animated zoomIn">
                <span class="close">&times;</span>
                <h4>Web banners</h4>
                <img class="web_icon" src="img/web.png" alt="web">   
                <div class="link-container"><a href="img/web-banners/ALPHA3_circulator_webbanner_300x250px_ENGLISH_MASTER.jpg" download="ALPHA3_circulator_webbanner_300x250px_ENGLISH_MASTER.jpg"> <img class="web_banners img-responsive" src="img/web-banners/ALPHA3_circulator_webbanner_300x250px_ENGLISH_MASTER.jpg" alt="web-banner"> </a></div>
                <div class="link-container"><a href="img/web-banners/ALPHA3_circulator_webbanner_300x250px_ENGLISH_MASTER.jpg" download="ALPHA3_circulator_webbanner_700x90px_ENGLISH_MASTER"> <img class="web_banners img-responsive" src="img/web-banners/ALPHA3_circulator_webbanner_700x90px_ENGLISH_MASTER.jpg" alt="web-banner" height="70"> </a></div>
                <a class="button" href="img/zips/Webbanners.zip" download="Webbanners.zip">Download all</a>
            </div>      
        </div>
        <script src="main.js"></script>
    </body>
</html>

<?php

//path to the folder that contains the pictures    
$sti = 'img/web-gallery/';
//Filter "." and ".." from the array and return only the pictures names
$pictures = array_filter(scandir($sti,1), function ($item) { return '.' !== $item[0];});
//Declaring empty arrays to separate the files
$smallPictures = array();
$bigPictures = array();
$mediumPictures = array();
//Separating pictures by size
foreach ($pictures as $key => $picture)
{
    list($width, $height, $type, $attr) = getimagesize($sti.$picture); 
    
    $size = $width . "x" . $height. "px"; 
    if($width < 100)
    {   //Less than 100px width     
        $smallPictures[] = array( "size" => $size, "name" => $picture);
    }
    elseif( $width < 1200)
    {
        //Less than 1200px width
        $mediumPictures[] = array( "size" => $size, "name" => $picture);
    }
    else
    {
        //More than 1199px width
        $bigPictures[] = array( "size" => $size, "name" => $picture);
    }
}
?>
<div class="web-gallery">
    <?php $odd = false; //This is used to write the name class for left and right?>
    <?php foreach ($bigPictures as $key => $image): ?>
    <?php $class = $odd? "right" : "left" ?>
        <div class="gallery-item big <?php echo $class ?>">
            <div class="link-container">
                <a class="big-picture" href="<?php echo $sti.$image["name"]?>" download="<?php echo $image["name"] ?>">
                    <img class="img-responsive" src="<?php echo $sti.$image["name"]?>" alt="<?php echo $image["name"] ?>"/>
                </a>
            </div>
        </div>
    <?php if($key == 1 || $key == 3): ?>
        <div style="clear: both;"></div>
    <?php endif; ?>
    <?php $odd = !$odd ?>
    <?php endforeach; ?>
    <!-- Small pictures are displayed inside one "medium" container -->
    <div class="gallery-item medium multi-container left">
        <?php    foreach ($smallPictures as $key => $image): ?>
        <div class="link-container">
            <a class="small-picture" href="<?php echo $sti.$image["name"]?>" download="<?php echo $image["name"] ?>">
                <img class="img-responsive" src="<?php echo $sti.$image["name"]?>" alt="<?php echo $image["name"] ?>"/>
            </a>
        </div>
        <?php $odd = !$odd ?>
        <?php if($key == 2 || $key == 5): ?>
        <div style="clear: both;"></div>
    <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <?php foreach ($mediumPictures as $image): ?>
        <?php $class = $odd? "right" : "left" ?>
        <div class="gallery-item medium right">
            <div class="link-container">
                <a class="medium-picture" href="<?php echo $sti.$image["name"]?>" download="<?php echo $image["name"] ?>">
                    <img class="img-responsive" src="<?php echo $sti.$image["name"]?>" alt="<?php echo $image["name"] ?>"/>
                </a>
            </div>
        </div>
    <?php $odd = !$odd ?>
    <?php endforeach; ?>
    <div style="clear: both;"></div>
</div>
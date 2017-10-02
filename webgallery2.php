<?php

//path to the folder that contains the pictures    
$sti = 'img/web2-gallery/';
//Filter "." and ".." from the array and return only the pictures names
$pictures = array_filter(scandir($sti,1), function ($item) { return '.' !== $item[0];});
$smallPictures = array();
$bigPictures = array();
$mediumPictures = array();
foreach ($pictures as $key => $picture)
{
    list($width, $height, $type, $attr) = getimagesize($sti.$picture); 
    
    $size = $width . "x" . $height. "px"; 
    if($width < 100)
    {
        $smallPictures[] = array( "size" => $size, "name" => $picture);
    }
    elseif( $width < 1200)
    {
        $mediumPictures[] = array( "size" => $size, "name" => $picture);
    }
    else
    {
        $bigPictures[] = array( "size" => $size, "name" => $picture);
    }
}
?>
<div class="web-gallery">
    <?php $odd = false; ?>
    <?php    foreach ($bigPictures as $key => $image): ?>
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
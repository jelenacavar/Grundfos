<?php

//path to the folder that contains the pictures    
$sti = 'img/print2-gallery/';
//Filter "." and ".." from the array and return only the pictures names
$images = array_filter(scandir($sti,1), function ($item) { return '.' !== $item[0];});
$pictures = array();
$i = 0;
foreach($images as $key => $picture)
{
    list($width, $height, $type, $attr) = getimagesize($sti.$picture); 
    if(mime_content_type($sti.$picture) != "image/tiff")
    {
        $pictures[] = array( "size" => $width, "name" => $picture);
    }
    $i++;
}
asort($pictures);
?>
<div class="web-gallery">
    <?php $oddKey = false; ?>
    <?php    foreach ($pictures as $key => $image): ?>
    <?php $class = $oddKey? "right" : "left" ?>
        <div class="gallery-item big <?php echo $class ?>">
            <div class="link-container">
                <?php $tiff = str_replace(".jpg", ".tif", $image["name"])?>
                <?php $tiff = str_replace(".png", ".tif", $image["name"])?>
                <a class="big-picture" href="<?php echo $sti.$tiff ?>" download="<?php echo $tiff ?>">
                    <img class="img-responsive" src="<?php echo $sti.$image["name"] ?>" alt="<?php echo $image["name"] ?>"/>
                </a>
            </div>
        </div>
    <?php if($oddKey): ?>
        <div style="clear: both;"></div>
    <?php endif; ?>
    <?php $oddKey = !$oddKey ?>
    <?php endforeach; ?>        
</div>


<?php
foreach ($images as $image) :
    $imgUrl = "/img/{$image['path']}";
    ?>
    <a href="/photo.php?id=<?=$image['id']?>">
        <img src="<?=$imgUrl?>" width='200'>
    </a>
<? endforeach;?>

<html>
    <body>
        <figure class="img">
            <p><img src="<?=CATALOG_IMAGES_PATH.$prod['image']?>" /></p>
            <figcaption>
                <?="<h3>".$prod['name']."</h3><p>Цена: ".$prod['price']."</p><p>".$prod['description']."</p>"?>
            </figcaption>
        </figure>
        <ul>
            <li><a href="?mod=feedback">Отзывы</a></li>
        </ul>
    </body>
</html>


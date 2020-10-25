<?php
foreach ($images as $image) :
    $imgUrl = "/img/{$image['path']}";
?>
    <a href="/photo.php?id=<?=$image['id']?>">
            <img src="<?=$imgUrl?>" width='200'>
    </a>
<? endforeach;?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image[]" multiple>
    <input type="submit">
</form>


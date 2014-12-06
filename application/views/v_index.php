<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>phpFlickr in CodeIgniter</title>
</head>
<body>

	<h1>Example API</h1>
    <ul>
		<?php
        foreach($list_gallery['photos']['photo'] as $hsl)
        {
        ?>
        <li>
            <a href="https://www.flickr.com/photos/51170438@N08/<?php echo $hsl['id']?>" target="_blank">
                <img src="<?php echo $this->flickr->f->buildPhotoURL($hsl, 'small')?>" 
                align="<?php echo $hsl['title']; ?>" width="163" height="91"  />
            </a>
        </li>
        <?php } ?>
	</ul>

</body>
</html>
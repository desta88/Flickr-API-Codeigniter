<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>phpFlickr in CodeIgniter</title>
    <style> ul{ list-style: none; } ul li { display: inline; }</style>
</head>
<body>

	<h1>Example API (List Public Photos)</h1>
    <ul>
		<?php
        foreach($list_gallery['photos']['photo'] as $hsl)
        {
        ?>
        <li>
            <a href="https://www.flickr.com/photos/44115070@N00/<?php echo $hsl['id']?>" target="_blank">
                <img src="<?php echo $this->flickr->f->buildPhotoURL($hsl, 'small')?>" alt="<?php echo $hsl['title']; ?>"  />
            </a>
        </li>
        <?php } ?>
	</ul>
    <div align="center">Photos by Riza Nugraha</div>

</body>
</html>
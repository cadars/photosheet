<?php

$site_title = "Photographs of Roadside America";
$site_desc = "by John Margolies";
$site_style = 'style.css';
$img_folder = 'img';
$allowed_types = array('png','jpg','jpeg','gif');

function create_slug($string){
  $string = strtolower($string);
  $string = strip_tags($string);
  $string = stripslashes($string);
  $string = html_entity_decode($string);
  $string = str_replace('\'', '', $string);
  $string = trim(preg_replace('/[^a-z0-9]+/', '-', $string), '-');
  return $string;
}

$dimg = opendir($img_folder);
while($img_file = readdir($dimg))
{
  if(in_array(strtolower(end(explode('.',$img_file))),$allowed_types))
  {$a_img[] = $img_file;} 
}
if(is_array($a_img)) sort($a_img);
$totimg = count($a_img);

for($x = 0; $x < $totimg; $x++)
{
  $size = getimagesize($img_folder.'/'.$a_img[$x]);
  $width = $size[0];
  $height = $size[1];
  $aspect = $height / $width;
  if ($aspect >= 1) $orientation = 'portrait';
  else $orientation = 'landscape';
  $file_name = pathinfo($a_img[$x], PATHINFO_FILENAME);
  $file_slug = create_slug($file_name);
  
  $grid .= '
  <figure class="'.$orientation.'">
    <a href="#'.$file_slug.'">
      <img loading="lazy" width="'.$width.'" height="'.$height.'" src="'.$img_folder.'/'.$a_img[$x].'" alt="'.$file_name.'">
    </a>
    <figcaption>'.$file_name.'</figcaption>
  </figure>
  ';
  
  $lightbox .= '
  <a id="'.$file_slug.'" class="lightbox '.$orientation.'" href="#_">
    <img loading="lazy" width="'.$width.'" height="'.$height.'" src="'.$img_folder.'/'.$a_img[$x].'" alt="'.$file_name.'" title="'.$file_name.'">
  </a>
  ';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">     
  <title><?php echo $site_title; ?></title>
  <meta name="description" content="<?php echo $site_desc; ?>">
  <style type="text/css">
    <?php echo file_get_contents($site_style); ?>
  </style>
</head>
<body>
  <header>
    <h1><?php echo $site_title; ?> <span><?php echo $site_desc; ?></span></h1>
  </header>
  <div class="grid">
    <?php echo $grid; ?>
  </div>
  <footer>
    This <a target="_blank" rel="noopener" href="http://github.com/cadars/photosheet">photo sheet<a> was generated on <?php echo date("F j, Y"); ?>
  </footer>
  <?php echo $lightbox; ?>
</body>
</html>

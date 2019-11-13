<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson 4</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<div id="container">
	<div id="heading"> 
	  <h1>My gallery</h1>
	  </div>
	  <div id="gallery"> 
	  <?

		$directory = 'img';	
		$allowed_types=array('jpg','jpeg','png');	
		$file_parts=array();
		  $ext='';
		  $title='';
		  $i=0;
		
		  $dir_handle = @opendir($directory) or die("There is an error with your image directory!");
		while ($file = readdir($dir_handle)){	
			 $file_parts = explode('.',$file);	//разделить имя файла и поместить его в массив
			 $ext = strtolower(array_pop($file_parts));	//последний элеменет - это расширение
			 $title = implode('.',$file_parts);	
			 $title = htmlspecialchars($title);	
			 $nomargin='';
		  if(in_array($ext,$allowed_types))	{
			  if(($i+1)%4==0) $nomargin='nomargin';	//последнему изображению в ряде присваевается CSS класс "nomargin"
			  echo '
			  <div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat ">
			 	 <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
			  </div>';
			 $i++;	
			  }
		  }
		closedir($dir_handle);	//закрыть папку
			 
	  ?>
	
</body>
</html>
<!-- <img class="pic '.$nomargin.'" src="'.$directory.'/'.$file.'" alt="'.$title.'"> -->
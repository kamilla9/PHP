<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson 3</title>
</head>
<body>

	<?

		// 1 ЗАДАНИЕ

		$a=0;
			while($a<=100){
				if($a %3 == 0){
					echo $a.",";
				}
				++$a;
			};

		echo "<br>";

		// 2 ЗАДАНИЕ

		$c = 0;

		echo "0 - ноль <br>";
		while($c <= 9){
			$c++;
			if($c %2 == 0){
				echo $c." - четное число <br>";
			}
			else{
				echo $c." - нечетное число <br>";
			}
		};

		//3 ЗАДАНИЕ


		$areas = ["Московская область "=>["Москва ","Зеленоград ","Клин "],
				 "Ленинградская область"=>["Санкт-Петербург ","Вселоволжск ","Кронштадт "],
				 "Татарстан"=>["Казань ","Самара ","Бугульма"]];

		foreach($areas as $area => $cities){
			echo "<br> $area : ";
			$str = implode(",",$cities);
			echo $str;
			for($i=0;$i<$str;$i++){
				echo $str[$i];
				
			}
		}


		//4 ЗАДАНИЕ

		function translit ($text) {
		 
		$word = array(
		 
		    "а"=>"a",
		    "б"=>"b",
		    "в"=>"v",
		    "г"=>"g",
		    "д"=>"d",
		    "е"=>"e",
		    "ё"=>"e",
		    "ж"=>"zh",
		    "з"=>"z",
		    "и"=>"i",
		    "й"=>"i",
		    "к"=>"k",
		    "л"=>"l",
		    "м"=>"m",
		    "н"=>"n",
		    "о"=>"o",
		    "п"=>"p",
		    "р"=>"r",
		    "с"=>"s",
		    "т"=>"t",
		    "у"=>"u",
		    "ф"=>"f",
		    "х"=>"h",
		    "ц"=>"tc",
		    "ч"=>"ch",
		    "ш"=>"sh",
		    "щ"=>"shch",
		    "ы"=>"y",
		    "э"=>"e",
		    "ю"=>"iu",
		    "я"=>"ia",
		    "ь"=>""
		);
		 
		   	return strtr($text, $word);
		}
		echo translit("<br>привет от пхп<br>");

		//5 ЗАДАНИЕ

		function replaced($text){
			echo str_replace(" ","_",$text);
		}

		echo replaced("Здесь будет замена пробелов на подчеркивания<br>");


		//6 ЗАДАНИЕ

		$menu = ["Главная","Услуги"=>["Помощь с инвестициями","Советы от брокера","Прогнозы рубля и доллара"],"О компании"=>["История","Наши инвесторы"],"Контакты"];

		
		foreach ($menu as $about => $itemname) {
			// is_array
			if (gettype($itemname) == "array" ) {
				echo "<li>".$about."<ul>";
				foreach ($itemname as $itemname2) {
					echo "<li>".$itemname2."</li>";
				}
				echo "</ul>";
			}
			else echo "<li>".$itemname."</li>";
		}


		//7 ЗАДАНИЕ

		for($a = 0; $a<=9; $a++)
			echo 'Число:'.$a."<br>";

		//8 ЗАДАНИЕ

		// не успела ;(

	?>
</body>
</html>
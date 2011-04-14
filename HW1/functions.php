<?php
// $csvString - низ, във формат Comma Separated Value
// функцията Parse-ва низа, като го разделя по запетайките
// и връща уникалните елементи
// input - "rado,vlado,rado,vlado"
// output - масив, който съдържа уникалните елементи [rado, vlado]
function parseUniqueCSV($csvString) {
  if(!empty($csvString)) {
    return array_unique(explode(",", $csvString));
  }
}

// $string - низ, например някакво изречение.
// $replaceMap - асоциативен масив от вида $key=>$value
// $key и $value са низове.
// функцията замества всяко срещане на $key в $string с $value
// input - "Python is cool", ["Python" => "PHP", "cool" => "cooler"]
// output - "PHP is cooler"
function replace($string, $replaceMap) {
  if(!empty($replaceMap)) {
    return str_replace(array_keys($replaceMap), array_values($replaceMap), $string);
  }
}

function contains($str, $content){
    return strpos($content, $str) ? true : false;
}

// $arrayOfFiles - масив от низове, които представляват име на файл
// функцията трябва да върне асоциативен масив, където
// $key е името на файла, а $value е разширението му
// input - ["omg.jpg", "wtf.mp3", "asd.txt"]
// output - ["omg" => "jpg", "wtf" => "mp3", "asd" => "txt"]
function extensions($arrayOfFiles) {
  if(!empty($arrayOfFiles)) {
    $res = array();
    foreach($arrayOfFiles as $value) {
      if(contains(".", $value)) {
	$tmp = explode('.', $value);
	$res[$tmp[0]] = $tmp[1];
      }
    }
    return $res;
  }
}

// $alphabet - масив от букви
// $length - дължината на генерираната парола
// функцията трябва да генерира парола
// със случайни числа от $alphabet
// и дължина $length
// input - password(array("a","b","c","d","$","#"),  4)
// output - "d$#a" (може да има повторения)
function password($alphabet, $length) {
  if((!empty($alphabet)) && $length >= 0) {
    $res = "";
    for($i=0; $i<$length; $i++) {
      $res .= $alphabet[rand(0, count($alphabet)-1)];
    }
  return $res;
  }
}
?>

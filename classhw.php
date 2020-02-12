<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>classhw</title>
</head>
<body>
<?php

class OlympicClass
{
  public function Baseball(){
      echo '81million'."\n";
  }

  public function Soccer(){
      echo '64million'."\n";
  }

}

$sports = new OlympicClass();

$sports->Baseball();
$sports->Soccer();









 ?>
</body>
</html>

<?php
$result = false;

if (isset($_POST['choice'])) {
    $janken = array(
        'グー',
        'チョキ',
        'パー'
    );

    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');

    $com = $janken[array_rand($janken)];

    if ($player === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($player === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($player === 'グー' && $com === 'パー') {
        $result = '負け';

    }elseif ($player === 'チョキ' && $com === 'チョキ') {
        $result = 'あいこ';
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'パー') {
        $result = '勝ち';

    }elseif ($player === 'パー' && $com === 'チョキ') {
        $result = '負け';
    } elseif ($player === 'パー' && $com === 'グー') {
        $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'パー') {
        $result = 'あいこ';
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>じゃんけん</title>
</head>
<body>
<?php
  echo "選んでください";
?>
 <form action="" method="post">
      <button type="submit" name="choice" value="グー">グー</button>
      <button type="submit" name="choice" value="チョキ">チョキ</button>
      <button type="submit" name="choice" value="パー">パー</button>
  </form>


<?php   if ($result) :
      echo "結果";
?>

  <?php      echo "あなた：".$player;
             echo "あいて：".$com;


     echo $result; です。
    ?>
</body>
</html>

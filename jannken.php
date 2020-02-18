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
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'チョキ') {
        $result = 'あいこ';
    } elseif ($player === 'チョキ' && $com === 'パー') {
        $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'グー') {
        $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'チョキ') {
        $result = '負け';
    } elseif ($player === 'パー' && $com === 'パー') {
        $result = 'あいこ';
    }

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPでじゃんけんゲーム</title>
</head>
<body>
<p>選んでください。</p>

<form action="" method="post">
    <button type="submit" name="choice" value="グー">グー</button>
    <button type="submit" name="choice" value="チョキ">チョキ</button>
    <button type="submit" name="choice" value="パー">パー</button>
</form>

<?php if ($result) : ?>
    <p>結果</p>

    <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $com; ?>
    </p>

    <p><?php echo $result; ?>です。</p>
<?php endif; ?>

</body>
</html>

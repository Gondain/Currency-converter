<?php 
if (isset($_POST['from'], $_POST['to'], $_POST['amount']) && !empty($_POST['amount'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $convert_amount = [
    'euro' => 1,
    'usdollar' => 1.039,
    'yen' => 159.79,
    'CZK' => 25.057,
    'DKK' => 7.4586,
    'BGN' => 1.9558,
    'GBP' => 0.83313,
    'HUF' => 401.78,
    'PLN' => 4.1688,
    'RON' => 4.9771,
    'SEK' => 11.2815,
    ];

    $final_amount = ($amount / $convert_amount[$from]) * $convert_amount[$to];

} else {
    $error_message = "Please enter a valid amount.";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
</head>
<body>
    <h1>Your result:</h1>
    <hr>

    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php else: ?>
        <p>Your amount in <?php echo $from; ?>: <?php echo $amount; ?></p>
        <p>Your amount in <?php echo $to; ?>:  <?php echo round($final_amount, 2); ?></p>
    <?php endif; ?>

    <a href="index.php">
        <button>Back</button>
    </a>
</body>
</html>
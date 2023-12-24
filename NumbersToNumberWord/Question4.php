<!DOCTYPE html>
<html>
<head>
    <title>Number to Words Converter</title>
</head>
<body>

    <h1>Number to Words Converter</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" id="number" required>
        <input type="submit" value="Convert">
    </form>

    <?php
function numberToWords($number) {
    $ones = array(
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine"
    );

    $teens = array(
        11 => "Eleven",
        12 => "Twelve",
        13 => "Thirteen",
        14 => "Fourteen",
        15 => "Fifteen",
        16 => "Sixteen",
        17 => "Seventeen",
        18 => "Eighteen",
        19 => "Nineteen"
    );

    $tens = array(
        10 => "Ten",
        20 => "Twenty",
        30 => "Thirty",
        40 => "Forty",
        50 => "Fifty",
        60 => "Sixty",
        70 => "Seventy",
        80 => "Eighty",
        90 => "Ninety"
    );

    if ($number == 0) {
        return "Zero";
    } elseif ($number < 0) {
        return "Negative " . numberToWords(abs($number));
    }

    $words = "";

    if (($number / 1000) >= 1) {
        $thousands = floor($number / 1000);
        $words .= numberToWords($thousands) . " Thousand ";
        $number %= 1000;
    }

    if (($number / 100) >= 1) {
        $hundreds = floor($number / 100);
        $words .= $ones[$hundreds] . " Hundred ";
        $number %= 100;
    }

    if ($number >= 11 && $number <= 19) {
        $words .= $teens[$number];
    } elseif ($number >= 10) {
        $tensDigit = floor($number / 10) * 10;
        $words .= $tens[$tensDigit] . " ";
        $number %= 10;
    }

    if ($number >= 1) {
        $words .= $ones[$number];
    }

    return trim($words);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = isset($_POST["number"]) ? $_POST["number"] : 0;

    if (is_numeric($number)) {
        $number = intval($number);
        $result = numberToWords($number);
        echo "<p>Number " . $number . " in words: <b>$result</b></p>";
    } else {
        echo "<p><b>Invalid Value</b></p>";
    }
}
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Filter All Even Numbers</title>
</head>
<body>
    <h1>Filter All Even Numbers</h1>
    <form method="post" action="">
        <label for="input">Enter any value:</label>
        <input type="text" id="input" name="inputText" required>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST["inputText"];
        $evenDigits = [];
        $seenEvenDigits = [];

        for ($i = 0; $i < strlen($inputText); $i++) {
            $digit = $inputText[$i];
            if (is_numeric($digit) && $digit % 2 == 0 && !in_array($digit, $seenEvenDigits)) {
                $evenDigits[] =  "<b>$digit</b>";
                $seenEvenDigits[] = $digit;
            }
        }

        if (!empty($evenDigits)) {
            echo "Even Numbers Found: " . implode(", ", $evenDigits);
        } else {
            echo "Please Enter Valid Number.";
        }
    }
    ?>
</body>
</html>

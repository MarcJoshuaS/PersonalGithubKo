<!DOCTYPE html>
<html>
<head>
    <title>Consonant Filter</title>
</head>
<body>
    <h1>Consonat Filter</h1>


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
        $consonants = [];
        $previousConsonant = '';

        for ($i = 0; $i < strlen($inputText); $i++) {
            $character = $inputText[$i];
            if (ctype_alpha($character) && !in_array(strtolower($character), ['a', 'e', 'i', 'o', 'u'])) {
                if (strtolower($character) !== $previousConsonant) {
                    $consonants[] = "<strong>" . strtoupper($character) . "</strong>"; 
                    $previousConsonant = strtolower($character);
                }
            }
        }

        if (!empty($consonants)) {
            echo "Consonants found: " . implode(", ", $consonants);
        } else {
            echo "No consonants found.";
        }
    }
    ?>
</body>
</html>

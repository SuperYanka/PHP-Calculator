<?php
$display = '';
$result = '';

if(isset($_POST['submit'])) {
    $button = $_POST['submit'];
    $display = $_POST['display'];

    switch($button) {
        case 'C':
            $display = '0';
            break;
        case '=':
            eval('$result = ' . $display . ';');{
            $display = $result;
        }
            break;
        case '^':
            $display .= '**';
            break;
        case 'x²':
            $result = pow($display, 2);
            $display = $result;
            break;
        case '%':
            $result = $display / 100;
            $display = $result;
            break;
        case 'sqrt':
            $result = sqrt($display);
            $display = $result;
            break;
        case 'sin':
            $result = sin($display);
            $display = $result;
            break;
        case 'cos':
            $result = cos($display);
            $display = $result;
            break;
        case 'tan':
            $result = tan($display);
            $display = $result;
            break;
        case 'log':
            $result = log($display);
            $display = $result;
            break;
        case 'log10':
            $result = log10($display);
            $display = $result;
            break;
        case '<-':
            $display = substr($display, 0, -1);
            break;

        default:
            if($display == '0' ){
                $display = $button;
            } else {
                $display .= $button;
            }
            break;
    }
} else {
    $display = '0';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cute Calculator</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<form method="post">
    <div id = calculator>
        <input type="text" name="display" id="dis" value="<?php echo $display; ?>" readonly><br><br>
        <input type="submit" name="submit" class="c" value="C">
        <input type="submit" name="submit" class="op" value="+">
        <input type="submit" name="submit" class="op" value="-">
        <input type="submit" name="submit" class="op" value="%">
        <input type="submit" name="submit" class="op" value="^">
        <input type="submit" name="submit" class="op" value="sin">
        <br>
        <input type="submit" name="submit" class="i" value="1">
        <input type="submit" name="submit" class="i" value="2">
        <input type="submit" name="submit" class="i" value="3">
        <input type="submit" name="submit" class="op" value="*">
        <input type="submit" name="submit" class="op" value="x²">
        <input type="submit" name="submit" class="op" value="cos">
        <br>
        <input type="submit" name="submit" class="i" value="4">
        <input type="submit" name="submit" class="i" value="5">
        <input type="submit" name="submit" class="i" value="6">
        <input type="submit" name="submit" class="op" value="/">
        <input type="submit" name="submit" class="op" value="sqrt">
        <input type="submit" name="submit" class="op" value="tan">
        <br>
        <input type="submit" name="submit" class="i" value="7">
        <input type="submit" name="submit" class="i" value="8">
        <input type="submit" name="submit" class="i" value="9">
        <input type="submit" name="submit" class="c" value="=">
        <input type="submit" name="submit" class="log" value="log">
        <br>
        <input type="submit" name="submit" class="O" value="0">
        <input type="submit" name="submit" class="op" value=".">
        <input type="submit" name="submit" class="c" value="<-">
        <input type="submit" name="submit" class="log" value="log10">
    </div>
</form>
</body>
</html>
</body>
</html>
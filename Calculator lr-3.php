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
<html>
<head>
    <title>WEB-Calculator PHP</title>
    <style>
        body {
            background: linear-gradient(to bottom,  #ffccff, #ff99ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #calculator {
            background-color: #f4a460;
            width: 370px;
            height: 375px;
            text-align: center;
            box-shadow: 16px 14px 20px #d2691e;
            border-radius: 10px;
            position: relative;
        }
        input {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            outline: 0;
            position: relative;
            left: 5px;
            top: 5px;
            border: 0;
            color: #ffffff;
            background-color: #ff69b4;
            float: left;
            box-shadow: 0 4px #d23c6d;
            cursor: pointer;
        }
        input:hover{
            border: 0 solid #000;
            color: #495069;
            background-color: #ff1493;
            border-radius: 4px;
            float: left;
            margin: 5px;
            font-size: 20px;
            box-shadow: 0 4px #d23c6d;
        }
        #dis {
            width: 345px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            text-align: right;
            padding-right: 5px;
            background-color: #ffc0cb;
            float: left;
            column-span: all;
        }
        #op{
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            background-color: #ff69b4;
            position: relative;
        }
        #op:hover{
            background-color: #ff1493;
            box-shadow: 0 4px #d23c6d;
        }
        #O {
            width: 110px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
        }
        #c{
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            background-color: #9370db;
        }
        #c:hover{
            background-color: #6a5acd;
            box-shadow: 0 4px #483d8b;
        }
        #log {
            width: 110px;
            height: 50px;
            font-size: 20px;
            position: ;
            color: #ff1493;
            background-color: #ffffe0;
        }
        #log:hover{
            background-color: #6a5acd;
            box-shadow: 0 4px #483d8b;
        }
    </style>

</head>
<body>
<form method="post">
    <div id = calculator>
    <input type="text" name="display" id="dis" value="<?php echo $display; ?>" readonly><br><br>
    <input type="submit" name="submit" id="c" value="C">
    <input type="submit" name="submit" id="op" value="+">
    <input type="submit" name="submit" id="op" value="-">
    <input type="submit" name="submit" id="op" value="%">
    <input type="submit" name="submit" id="op" value="^">
    <input type="submit" name="submit" id="op" value="sin">
    <br>
    <input type="submit" name="submit" id="i" value="1">
    <input type="submit" name="submit" id="i" value="2">
    <input type="submit" name="submit" id="i" value="3">
    <input type="submit" name="submit" id="op" value="*">
    <input type="submit" name="submit" id="op" value="x²">
    <input type="submit" name="submit" id="op" value="cos">
    <br>
    <input type="submit" name="submit" id="i" value="4">
    <input type="submit" name="submit" id="i" value="5">
    <input type="submit" name="submit" id="i" value="6">
    <input type="submit" name="submit" id="op" value="/">
    <input type="submit" name="submit" id="op" value="sqrt">
    <input type="submit" name="submit" id="op" value="tan">
    <br>
    <input type="submit" name="submit" id="i" value="7">
    <input type="submit" name="submit" id="i" value="8">
    <input type="submit" name="submit" id="i" value="9">
    <input type="submit" name="submit" id="c" value="=">
    <input type="submit" name="submit" id="log" value="log">
    <br>
    <input type="submit" name="submit" id="O" value="0">
    <input type="submit" name="submit" id="op" value=".">
    <input type="submit" name="submit" id="c" value="<-">
    <input type="submit" name="submit" id="log" value="log10">
    </div>

</form>
</body>
</html>




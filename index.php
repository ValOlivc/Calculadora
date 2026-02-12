<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculadora</title>
    <link type="text/css" rel="stylesheet" href="/Styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="particles-js"></div>
    <div id="app">
        <form name="calculator">
            <h1>Calculadora</h1>
            <p>Calculos simples y precisos</p>
            <input type="textfield" name="ans" value="" autocomplete="off" readonly>
            <div id="buttons">
                <input type="button" value="7" onclick="document.calculator.ans.value+='7'" class="pink">
                <input type="button" value="8" onclick="document.calculator.ans.value+='8'" class="pink">
                <input type="button" value="9" onclick="document.calculator.ans.value+='9'" class="pink">
                <input type="button" value="+" onclick="document.calculator.ans.value+='+'" class="orange">
                <br>
                <input type="button" value="4" onclick="document.calculator.ans.value+='4'" class="pink">
                <input type="button" value="5" onclick="document.calculator.ans.value+='5'" class="pink">
                <input type="button" value="6" onclick="document.calculator.ans.value+='6'" class="pink">
                <input type="button" value="-" onclick="document.calculator.ans.value+='-'" class="orange">
                <br>
                <input type="button" value="1" onclick="document.calculator.ans.value+='1'" class="pink">
                <input type="button" value="2" onclick="document.calculator.ans.value+='2'" class="pink">
                <input type="button" value="3" onclick="document.calculator.ans.value+='3'" class="pink">
                <input type="button" value="x" onclick="document.calculator.ans.value+='*'" class="orange">
                <br>
                <input type="button" value="0" onclick="document.calculator.ans.value+='0'" class="pink">
                <input type="reset" value="C">
                <input type="button" value="=" onclick="document.calculator.ans.value=eval(document.calculator.ans.value)">
                <input type="button" value="÷" onclick="document.calculator.ans.value+='/'" class="orange">
            </div>
            
        </form>
        
    </div>
    <script src="JS/particles.min.js"></script>
    <script src="JS/app.js"></script>
</body>
</html>
<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">


</form>

<?php

if (isset($_GET)){

    
    foreach ($_GET as $key => $vale) {
        
        echo "Nome do campo: " . $key;
        echo "<br>";
        echo "Valor do campo: " . $vale;
        echo "<br>";
        echo "<hr>";
        
    }
    
}

?>
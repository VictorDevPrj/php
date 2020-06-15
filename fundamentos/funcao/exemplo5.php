<?php

function test($callBack) {

    //Processo lento

    $callBack();

}

test(function(){

    echo "Testando";

});
?>
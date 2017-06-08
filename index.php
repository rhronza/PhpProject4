<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo ("------------------------------------------------<br/>");
        $retezA = "retezA";
        $retezB  = 'retezB';
        var_dump($retezA);
        echo"</br>";
        var_dump($retezB);
        echo"</br>";
        
        echo ("<br/>------------------------------------------------<br/>");
        $retezA.=$retezB;
        var_dump($retezA);
        echo ("<br/>------------------------------------------------<br/>");
        $cislo=645;
        $cislo.=5; // sečte jako řetezec
        var_dump($cislo);
        echo ("<br/>------------------------------------------------<br/>");
        ECHO phpinfo();
        ?>
    </body>
</html>

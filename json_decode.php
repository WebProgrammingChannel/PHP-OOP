<?php
    $user = '{"name":"htetlinthu","job":"web-developer","city":"yangon"}';
    print_r( json_decode($user,true) );
    //Array ( [name] => htetlinthu [job] => web-developer [city] => yangon )
?>
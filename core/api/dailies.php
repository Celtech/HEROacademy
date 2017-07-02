<?php
function getDaily($date) {
    $url = 'http://mabi.world/sm/mww/'. $date .'.json';
    $content = json_decode(file_get_contents($url));
    return ["Taillteann"=>$content->Taillteann->Normal, "Tara"=>$content->Tara->Normal, "Taillteann VIP"=>$content->Taillteann->VIP, "Tara VIP"=>$content->Tara->VIP];
}

<?php
$age = 10;
if ($age < 15) :
    echo '儿童';
elseif ($age < 30) :
    echo '青年';
elseif ($age < 50) :
    echo '中年';
else :
    echo '尊敬的老年';
endif;
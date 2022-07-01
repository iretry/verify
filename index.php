<?php

include  './vendor/autoload.php';
$verify = new Irety\Verify\verify();
var_dump($verify->test("aa", "bb"));

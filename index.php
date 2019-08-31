<?php

use FactoryPattern\Cast ;
require 'vendor/autoload.php';

$cs = new Cast() ;
echo $cs->castValue("int","ssss");

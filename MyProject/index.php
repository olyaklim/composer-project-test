<?php

namespace Olyaklim;

require "../vendor/autoload.php";


echo "Current date:<br>";
//print_r(get_declared_classes());
echo (new ComposerGetDate())->get_date();





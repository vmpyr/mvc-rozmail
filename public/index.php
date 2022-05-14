<?php
    require_once "../vendor/autoload.php";

    Toro::serve(array(
        "/" => "\Controller\Main",
    ));
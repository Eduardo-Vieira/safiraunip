<?php

session_start();

foreach ($_SESSION as $key => $value) {
    print($key.' -> '.$value.'<br>');
}

foreach ($_COOKIE as $key => $value) {
    print($key.' -> '.$value.'<br>');
};
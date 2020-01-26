<?php

class Form {
    public static function old($input) {
        if(isset($_REQUEST[$input])) {
            return $_REQUEST[$input];
        }
    }
}
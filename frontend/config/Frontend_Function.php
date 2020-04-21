<?php


class Frontend_Function extends Functions
{
    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'app', $charset = 'utf8')
    {
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname, $charset);
    }


}

$frontend_function = new Frontend_Function();
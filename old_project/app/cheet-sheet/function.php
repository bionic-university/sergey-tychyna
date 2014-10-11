<?php
$array = ['Vlad', 'Viktor', 'Slava'];

function usernameConverter($username, $symbol = 'V', $replacement = 'B')
{

    if (preg_match('/V/', $username)) {
        $username = str_replace($symbol, $replacement, $username);
    }
    return $username;
}

function multiply($arguments)
{
    $multiplication = 1;
    foreach ($arguments as $value) {
        $multiplication *= $value;
    }

    return $multiplication;

}


echo multiply(array(1, 2));
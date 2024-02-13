<?php

function generateCSRFToken()
{
    return $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


function verifyCSRFToken($submittedToken)
{
    return (!empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $submittedToken));
}


function validate($name, $phone, $email)
{
    $mistake['name'] = "";
    $mistake['phone'] = "";
    $mistake['email'] = "";
    function isValidEmail($element)
    {
        $regex = '/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/';
        return preg_match($regex, $element);
    }

    function isValidName($element)
    {
        $regex = '/^[a-zA-Z]+(?: [a-zA-Z]+)*$/';
        return preg_match($regex, $element);
    }
    function isValidPhoneNumber($element)
    {
        $regex = '/^\+\d{11,12}$/';
        return preg_match($regex, $element);
    }
    $name = trim($name);
    $phone = trim($phone);
    $email = trim($email);

    if (!isset($name) & $name == null) {
    } elseif ($name === "") {
        $mistake['name'] = "Entity cannot be empty";
    } elseif (strlen($name) < 2) {
        $mistake['name'] = "Entity cannot be shorter than 2 characters";
    } elseif (strlen($name) > 32) {
        $mistake['name'] = "Entity cannot be longer than 32 characters";
    } elseif (!isValidName($name)) {
        $mistake['name'] = "The name must not contain numbers";
    }

    if (!isset($email) & $email === null) {
    } elseif ($email === "") {
        $mistake['email'] = "Entity cannot be empty";
    } elseif (!isValidEmail($email)) {
        $mistake['email'] = "Incorrectly entered email";
    }

    if (!isset($phome) & $phone === null) {
    } elseif ($phone === "") {
        $mistake['phone'] = "Entity cannot be empty";
    } elseif (!isValidPhoneNumber($phone)) {
        $mistake['phone'] = "Incorrectly entered phone number";
    }
    return $mistake;
}

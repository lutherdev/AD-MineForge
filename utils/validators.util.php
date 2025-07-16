<?php
function validateUsername(string $username): string|true {
    $username = trim($username);

    if (preg_match('/\s/', $username)) {
        return 'invalid_username';
    }

    if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username)) {
        return 'invalid_username';
    }

    return true;
}

function validatePassword(string $password): string|true {
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
        return 'weak_password';
    }

    return true;
}
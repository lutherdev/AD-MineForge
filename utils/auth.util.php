<?php
require_once 'validators.util.php';
require_once UTILS_PATH . '/users.util.php';
class Auth{
    public static function init(): void {
    if (session_status() === PHP_SESSION_NONE) { 
        session_start(); 
        } 
    }   
    public static function sessionSet(array $user): void{
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
        ]; 
    }

    public static function attempt(PDO $pdo, string $username, string $password): string {
        try {
            $user = getUserData($username);
            if (!$user) {
                return 'wrong_username';
            }
            if (!password_verify($password, $user['password'])) {
                return 'wrong_password';
            }
            self::sessionSet($user);
            return 'login_success';
        } catch (PDOException $e) {
            error_log("Auth attempt failed: " . $e->getMessage());
            return 'db_error';
        }
    }

    public static function register(PDO $pdo, array $data): string {
        $userData = [
            'username' => $data['username'],
            'password' => $data['password'],
            'first_name' => trim($data['firstname']),
            'last_name' => trim($data['lastname']),
            'street' => trim($data['street']),
            'province' => trim($data['province']),
            'city' => trim($data['city']),
        ];
        if (($usernameError = validateUsername($userData['username'])) !== true) {
            return $usernameError;
        }
        if (($passwordError = validatePassword($userData['password'])) !== true) {
            return $passwordError;
        }
        try {
            insertUser($pdo, $userData);
            $user = getUserData($userData['username']);
            self::sessionSet($user);
            return 'success';
        } catch (PDOException $e) {
            error_log("Registration failed: " . $e->getMessage());
            return 'db_error';
        }
    }

    public static function logout(): void
    {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
    }

    public static function getData(PDO $pdo, string $username){
        $user = getUserData($username);
        if (!$user){
            return 'no_username';
        }
        self::sessionSet($user);
        return $user;
    }

    public static function user(): ?array
    {
        return $_SESSION['user'] ?? null;
    }

    public static function check(): bool
    {
        return isset($_SESSION['user']);
    }

}
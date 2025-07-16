<?php

require_once BASE_PATH . '/bootstrap.php';
require_once UTILS_PATH . '/auth.util.php';
try {
    Auth::init();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'login') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = Auth::attempt($pdo, $username, $password);

        switch ($result) {
        case 'login_success':
            header("Location: /");
            break;
        case 'wrong_username':
            header("Location: /login?error=invalid+username");
            break;
        case 'wrong_password':
            header("Location: /login?error=invalid+password");
            break;
        case 'db_error':
            header("Location: /login?error=dbbad");
            break;
        default:
            header("Location: /login?error=login_failed");
            break;
        }
        exit;
    }

}   catch (Exception $e) {
echo "❌ ERROR: " . $e->getMessage() . "\n";
exit(255);
}

?>
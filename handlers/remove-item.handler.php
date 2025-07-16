<?php
require_once BASE_PATH . '/bootstrap.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = trim($_POST['item_id']);
    try {
        $checkStmt = $pdo->prepare("SELECT * FROM items WHERE id = :id");
        $checkStmt->execute([':id' => $id]);
        $item = $checkStmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        header("Location: /remove-item?error=id+failed");
        exit;
    }
    
    if (!$item) {
        header("Location: /remove-item?error=item+id+doesnt+exists");
        exit;
    }

    $stmt = $pdo->prepare("UPDATE items SET status = :status WHERE id = :id");
    $stmt->execute([
        ':status' => 'is-inactive', 
        ':id' => $id
    ]);
    header("Location: /remove-item?success=Item+Deleted");
    exit;
}
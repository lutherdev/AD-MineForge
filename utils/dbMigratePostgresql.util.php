<?php
declare(strict_types=1);

require_once 'bootstrap.php';

try {

echo "Dropping old tables…\n";
foreach (['users', 'items', 'item_orders', 'users_messages', 'images'] as $table) {
$pdo->exec("DROP TABLE IF EXISTS {$table} CASCADE;");
}

echo "Applying schema from database/users.model.sql…\n";
$files = ['database/users.model.sql', 'database/items.model.sql', 'database/item_orders.model.sql', 'database/users_messages.model.sql', 'database/images.model.sql'];
foreach ($files as $file){
$sql = file_get_contents($file);

if ($sql === false) {
    throw new RuntimeException("Could not read $file");
} else {
    echo "Creation Success from the $file\n";
}
$pdo->exec($sql);
}

} catch (Exception $e) {
echo "❌ ERROR: " . $e->getMessage() . "\n";
exit(255);
}
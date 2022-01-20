$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$cityId = $_POST['city_id'];

$query = "UPDATE users SET name = :name, login = :login WHERE id = :id";
$query = "UPDATE users SET name = :name, city_id = :city_id, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name
    ':name' => $name,
    ':city_id' => $cityId,
]);

if (!$status) {
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else {
    $_SESSION['success'] = true;
}

# ЗАПОЛНИТЬ КЛЮЧ В СЕССИИ, ЕСЛИ ЗАПРОС ВЫПОЛНИЛСЯ УСПЕШНО

header("Location: ../pages/user.php?id=$userId");
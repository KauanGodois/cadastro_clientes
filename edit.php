<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $foto = $_FILES['foto']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);

    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', foto='$foto' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM clientes WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>"><br>
        Foto: <input type="file" name="foto" required><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
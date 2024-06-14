<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $foto = $_FILES['foto']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);

    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $sql = "INSERT INTO clientes (nome, email, telefone, foto) VALUES ('$nome', '$email', '$telefone', '$foto')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' rel='stylesheet'>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="brand">Cadastrar</a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="add.php">Adicionar Cliente</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="wrapper">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <h1>Adicionar Cliente</h1>

            <div class="input-box">
                <input type="text" name="nome" required>
                <label for="">Nome</label>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-box">
                <input type="email" name="email" required>
                <label for="">Email</label>
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-box">
                <input type="text" name="telefone" required>
                <label for="">Telefone</label>
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-box file-input">
                <div class="file-upload-container">
                    <i class="fa-solid fa-image"></i>                
                </div>
                <input type="file" name="foto" id="foto" required>
            </div>

            <button type="submit" class="btn">Adicionar</button>
        </form>
    </div>
</body>
</html>

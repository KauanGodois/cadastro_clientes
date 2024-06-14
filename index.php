<?php
include('config.php');
$result = $conn->query("SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' rel='stylesheet'>
    
</head>
<body>
    <div class="table">
        <div class="table-header">
            <p>Informações dos Clientes</p>
            <div>
                <input type="text" class="search" placeholder="Pesquisar">
                <button class="btn-add" id="addBtn">+ Adicionar Cliente</button>
            </div>
        </div>
        <div class="table-section">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th><i class="fa-solid fa-user" style="margin-right: 10px;"></i>Cliente</th>
                        <th><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>Email</th>
                        <th><i class="fa-solid fa-phone" style="margin-right: 10px;"></i>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>
                            <img src="uploads/<?php echo $row['foto']; ?>" width="50">
                            <?php echo $row['nome']; ?>
                        </td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['telefone']; ?></td>
                        
                        <td>
                            <button> 
                                <a href="edit.php?id=<?php echo $row['id']; ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button> 
                                <a href="delete.php?id=<?php echo $row['id']; ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>

                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="pagination">
        <div><i class="fa-solid fa-angles-left"></i></div>
        <div><i class="fa-solid fa-angle-left"></i></div>
        <div>1</div>
        <div>2</div>
        <div><i class="fa-solid fa-angle-right"></i></div>
        <div><i class="fa-solid fa-angles-right"></i></div>
    </div>  

    <script>
        
        document.addEventListener('DOMContentLoaded', () => {
        const addButton = document.getElementById('addBtn');
        addButton.addEventListener('click', () => {
            window.location.href = 'add.php'; // Redireciona para add.php
        });
    });

    </script>
</body>
</html>

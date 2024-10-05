<?php
include 'Bebidas.php';

if (isset($_POST['bebida']) && isset($_POST['preco'])) {
    $bebidaTipo = $_POST['bebida'];
    $preco = $_POST['preco'];

    switch ($bebidaTipo) {
        case 'vinho':
            $bebida = new Vinho($preco);
            break;
        case 'refrigerante':
            $bebida = new Refrigerante($preco);
            break;
        case 'suco':
            $bebida = new Suco($preco);
            break;
        default:
            echo "Tipo de bebida inválido.";
            exit();
    }

    echo $bebida->mostrarBebida() . "<br>";
    echo $bebida->verificarPreco();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha sua Bebida</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Escolha sua Bebida</h1>
        <form action="Bebidas.php" method="post">
            <label for="bebida">Tipo de Bebida:</label>
            <select name="bebida" id="bebida">
                <option value="vinho">Vinho</option>
                <option value="refrigerante">Refrigerante</option>
                <option value="suco">Suco</option>
            </select>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" required>

            <button type="submit">Verificar</button>
        </form>
    </div>
</body>
</html>

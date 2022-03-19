<?php
    include('conexao.php');

    echo 'Dados do usuário cadastrado';
    echo '<br/>'; echo '<br/>';

    $sql = $conn->prepare("SELECT `nome`, `email` FROM `usuario`");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($result); $i++) { 
        foreach ($result[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }

    ?>
        <form method="POST" name="form" action="tabuada.php">
            <label for="valor">Digite um número para ver sua tabuada: </label>
            <input type="text" name="valor">
            <button type="submit" value="enviar">Visualizar</button>
        </form>
    <?php
?>
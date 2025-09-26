<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Calculadora</h1>

    <form method="POST" action="recebe-form.php">
        <div class="mb-3">
            <label for="num1" class="form-label">Primeiro Valor:</label>
            <input type="num1" class="form-control" id="num1" name="num1">
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Segundo Valor:</label>
            <input type="num2" class="form-control" id="num2" name="num2">
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Escolha a Operação Matemática</label>
            <select name="estado" id="estado" class="form-control">
                <option value="subtrair">-</option>
                <option value="soma">+</option>
                <option value="multiplicar">x</option>
                <option value="dividir">÷</option>
            </select>
        </div>

        <a href="index.php" class="btn btn-info">VOLTAR</a>

        <button type="reset" class="btn btn-warning">LIMPAR</button>

        <button type="submit" class="btn btn-success">ENVIAR PARA O PHP</button>
    </form>

    <?php

     $pnum = $_POST['num1'];
     $snum = $_POST['num2'];
     $op =  $_POST['operacao'];
     
     if (!empty($op)){
        if($op == '+')
        $c = $pnum + $snum;
     
        $c = $pnum - $snum;
     
        $c = $pnum / $snum;
        $c = $pnum * $snum;
     }




    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
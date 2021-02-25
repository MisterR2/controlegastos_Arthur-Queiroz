<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Gasto</h1>
    <?= form_open('gastos/salvar') ?>
        <p>Data:</p>
        <input required type="date" name="data" id="" required><br>
        <p>Descrição:</p>
        <input required type="text" name="descricao" id="" require><br>
        <p>Valor:</p>
        <input required type="number" name="valor" id="" require><br><br>
        <input type="submit" value="Enviar"> 
        <input type="reset" value="Limpar">
    <?= form_close() ?>
</body>
</html>
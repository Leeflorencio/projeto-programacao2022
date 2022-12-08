<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Cadastrar Dividas</title>
</head>
<body>
    <h1>Cadastrar divida</h1>

    <form>
        <fieldset>
            <legend>Nova divida</legend>
            <label>
                Nome:
            <input type="text" name="nome" />
            </label>

            <label>
                Valor:
            <input type="text" name="valor" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Dividas:</th>
        </tr>
            <?php foreach ($lista_dividas as $divida) : ?>
        <tr>
        <td><?php echo $divida;?> </td>
        </tr>
        <?php endforeach;?>
    </table>

</body>
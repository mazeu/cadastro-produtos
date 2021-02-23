<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <style>

        .tabela, .tabela td, .tabela tr{
            border: 1px solid;
        }
   
    </style>
</head>
<body>
    <h2><?php echo $titulo ?></h2>
    <p><a href="<?php echo base_url('categorias/inserir') ?>">Inserir Nova Categoria</a></p>

    <table class="tabela">
        <tr>
            <td>Codigo da Categoria</td>
            <td>Nome da Categoria</td>
            <td></td>
            <td></td>
        </tr>
        <?php foreach ($categorias as $categoria) : ?>
            <tr>
                <td><?php echo $categoria->idcategoria ?></td>
                <td><?php echo $categoria->nomecategoria ?></td>
                <td><a href="<?php echo base_url('categorias/editar/'.$categoria->idcategoria) ?>">Editar</a></td>
                <td><a href="<?php echo base_url('categorias/excluir/'.$categoria->idcategoria) ?>">Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $titulo; ?></h1>
    </div>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td><?php echo $info->id ?></td>
                <td><?php echo formataDataBr($info->data_cadastro) ?></td>
                <td><?php echo $info->nome_livro ?></td>
                <td><?php echo $info->autor_livro ?></td>
                <td><?php echo formataMoedaBr($info->preco) ?></td>
            </tr>
        </tbody>
    </table>
</main> 
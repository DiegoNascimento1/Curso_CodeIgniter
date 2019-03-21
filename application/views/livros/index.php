<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $titulo; ?></h1>
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do livro</th>
                <th scope="col">Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($livros as $livro) {
                echo 
                '<tr>
                    <th scope="row">' . $livro->id .'</th>
                    <td> '. $livro->nome_livro  .'</td>
                    <td> '. $livro->autor_livro  .'</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</main >
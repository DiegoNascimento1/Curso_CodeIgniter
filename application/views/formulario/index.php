<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $titulo; ?></h1>
    </div>
    <section>
        <div class="col-12 col-sm-12">
            <?php
                echo form_open('site/enviar');
            
                    echo '<div class="form-group">';
                    echo form_label('Email', 'email');
                    echo form_input(array(
                        'type'          => 'email',
                        'name'          => 'email',
                        'id'            => 'email',
                        'class '        => 'form-control',
                        'autocomplete'  => 'off'
                    ));
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo form_label('Senha', 'password');
                    echo form_input(array(
                        'type'          => 'password',
                        'name'          => 'password',
                        'id'            => 'password',
                        'class '        => 'form-control',
                        'autocomplete'  => 'off'
                    ));
                    echo '</div>';

                    echo form_submit('submit', 'Logar', array('class' => 'btn btn-outline-success btn-block'));

                echo form_close();
            ?>
        </div>
    </section> 
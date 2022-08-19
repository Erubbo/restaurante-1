<?php
include "../includes/conexao.php"
?>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" id="bootstrap-css">
<div class="container">
    <div class="row-centered-form">
        <div class="col-lg-12">
            <p><a href="index.php">Add New Record</a></p>
            <div class="panel-default">
                <?php
                $query = "SELECT * FROM tb_reservas";

                $result = mysqli_query($conexao, $query);

                $total = mysqli_num_rows($result);
                ?>
           
    <div class="panel-heading">
        <h3 class="panel-title">Listagem de Reserva</h3>
        <div class="panel-body">
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Data de Reserva</th>
                        <th>Mensagem</th>
                        <th>Numero de pessoas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($dados=mysqli_fetch_array($result)){
                        $id = $dados['id'];

                    ?>
                    <tr>
                        <td><?php echo $dados['id'] ?></td>
                        <td><?php echo $dados['nome'] ?></td>
                        <td><?php echo $dados['telefone']?></td>
                        <td><?php echo $dados['email']?></td>
                        <td><?php echo $dados['data_reserva']?></td>
                        <td><?php echo $dados['mensagem']?></td>
                        <td><?php echo $dados['numero_pessoas']?></td>
                        <td><button><a href="editar_reservas.php?idreserva=<?php echo $id ?>">Alterar</button></a></td>
                    <td><button><a href="deletar_reservas.php?idreserva=<?php echo $id ?>">Excluir</button></a></td>
                    </tr>
                    <?php
                } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .row-centered-form {
    margin-top: 60px;
  }
  
  .row-centered-form .panel-default {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Clientes</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
    
</head>
<body>
    <br><br>
<div class="container mt-lg-5">
	<div class="card-deck mb-3 text-center">
		<!--<a href="<//?php //echo base_url('cliente/inserir');?>"><button class="btn btn-primary">Cadastrar Cliente</button></a>&nbsp;-->
        
    <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Cadastrar Cliente</button></a>
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="pre_cadastro" class="comment-form" method="post" action="">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sobrenome:</label>
                <input type="text"  name="sobrenome" class="form-control" id="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Idade:</label>
                <input type="number" name="idade" class="form-control" id="idade" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Cidade:</label>
                <input type="text"  name="cidade" class="form-control" id="cidade" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Estado:</label>
                <input type="text" name="estado" class="form-control" id="estado" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary">Enviar</button>
            </div>
         </form> 
      </div>
      
    </div>
  </div>
</div>
      
        
		<br><br>
		<table class="table table-bordered ">
			<thead>
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Sobrenome</th>
				<th scope="col">Idade</th>
                <th scope="col">Cidade</th>
				<th scope="col">Estado</th>
                <th scope="col">Ação</th>
			</tr>
			</thead>
			<tbody id="tableBody">
			<?php foreach ($cliente as $data): ?>
				<tr id="tsk_<?= $data->id; ?>">
					<td class="task_nome">
						<?php echo $data->nome; ?>
					</td>
					<td class="task_sobrenome">
						<?php echo $data->sobrenome; ?>
					</td>
                     <td class="task_idade">
						<?php echo $data->idade; ?>
					</td>
                    <td class="task_cidade">
						<?php echo $data->cidade; ?>
					</td>
                    <td class="task_estado">
						<?php echo $data->estado; ?>
					</td>
                    
					<td>
                        <a><button class="btn btn-primary edit_task" data-id="<?= $data->id; ?>" data-toggle='modal' data-target='#editModel'>Editar</button></a>  | 
						<!--<a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" >Editar</button></a>-->
                        <!--<a><button type="submit" id="deletar" class="btn btn-primary">Remover</button></a>-->
                        <a><button class="btn btn-danger delete_task" data-id="<?= $data->id; ?>" data-toggle="modal" data-target="#deleteModel">Remover</button></a>
                        <!--<a href="<?php //echo base_url('cliente/remover/').$data->id; ?>">Remover</a> -->
                        <?php endforeach; ?>     
					</td>
				</tr>
			
			</tbody>
		</table>
	</div>

</div>
    
<!-- Edit Task Modal -->
<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">
					
				</h4>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<form role="form" id="editTaskForm">
					<div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required autofocus="true">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sobrenome:</label>
                <input type="text"  name="sobrenome" class="form-control" id="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Idade:</label>
                <input type="number" name="idade" class="form-control" id="idade" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Cidade:</label>
                <input type="text"  name="cidade" class="form-control" id="cidade" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Estado:</label>
                <input type="text" name="estado" class="form-control" id="estado" required>
            </div>
					<input type="hidden" id="id" name="id">
				</form>
				<div id="message1">
				</div>
			</div>
			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Close
				</button>
				<button type="button" id="update_task" class="btn btn-success">
					Atualizar
				</button>
			</div>
		</div>
	</div>
</div>
    
    <!-- Delete Task Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					<!--Deletar cliente-->
				</h4>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<p>Deseja remover o cliente?</p>
			</div>
			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Cancel
				</button>
				<button type="button" id="del_btn" class="btn btn-danger">
					Delete
				</button>
			</div>
		</div>
	</div>
</div>
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
    
      $(document).ready(function(event) {
                    $('#pre_cadastro').submit(function(e) {
                                e.preventDefault();
                                $.ajax({
                                    type: "POST",
                                    url: "http://localhost/Crud_Coldigniter_Teste/cliente/criar",
                                    dataType: "json",
                                    cache: false,  
                                    data: $(this).serialize(),
                                    success: function(json)
                                    {
                                        //var json = JSON.parse(response);

                                        // user is logged in successfully in the back-end
                                        // let's redirect
                                        if (json["status"] == 1) {
                                            //clearErrors();
                                            window.location = "http://localhost/Crud_Coldigniter_Teste/cliente";
                                        } 
                                        else
                                        {
                                            alert('Invalid Credentials!');
                                        }
                                   }
                               });
                     });
                    
        
                    $('#tableBody').on('click', '.edit_task', function(e){
                        e.preventDefault();
                        var rowId = $(this).data('id');
                        var nome = $('#tsk_'+rowId).find('.task_nome').text().trim();
                        var sobrenome = $('#tsk_'+rowId).find('.task_sobrenome').text().trim();
                        var idade = parseInt($('#tsk_'+rowId).find('.task_idade').text());
                        var cidade = $('#tsk_'+rowId).find('.task_cidade').text().trim();
                        var estado = $('#tsk_'+rowId).find('.task_estado').text().trim();
                        $("#editTaskForm").find('#id').val(rowId);
                        $("#editTaskForm").find('#nome').val(nome);
                        $("#editTaskForm").find('#sobrenome').val(sobrenome);
                        $("#editTaskForm").find('#idade').val(idade);
                        $("#editTaskForm").find('#cidade').val(cidade);
                        $("#editTaskForm").find('#estado').val(estado);
                    });

        
                    /* The following function Updates the Selected Task */
                    $('#update_task').on('click', function(e){
                        e.preventDefault();
                        var formData = $("#editTaskForm").serialize();
                        $.ajax({
                                type: 'POST',
                                url: 'http://localhost/Crud_Coldigniter_Teste/cliente/update',
                                cache: false,  
                                dataType: "json",
                                data: formData, 
                                success: function(json)
                                {
                                            //var json = JSON.parse(response);

                                            // user is logged in successfully in the back-end
                                            // let's redirect
                                            if (json["status"] == 1) {
                                                //clearErrors();
                                                window.location = "http://localhost/Crud_Coldigniter_Teste/cliente";
                                            } 
                                            else
                                            {
                                                alert('Invalid Credentials!');
                                            }
                                }
                        });
                    });
                    
        
        
                    $('#tableBody').on('click', '.delete_task', function(e){
                        e.preventDefault();
                        var id = $(this).data('id');
                        $('#deleteModel #del_btn').data('id', id);
                    });
        
        
                    $('#del_btn').click(function(e){
                            e.preventDefault();
                            var id = $(this).data('id');
                            $('#deleteModel').modal('toggle');
                            $.ajax({
                                type: 'POST',
                                url: 'http://localhost/Crud_Coldigniter_Teste/cliente/remover/'+id,
                                dataType: "json",
                                data: {'id': id},
                                success: function(json)
                                {
                            
                                        if (json["status"] == 1) {
                                            //clearErrors();
                                            window.location = "http://localhost/Crud_Coldigniter_Teste/cliente";
                                        } 
                                        else
                                        {
                                            alert('Invalid Credentials!');
                                        }
                                    
                                }
                            });
                
                    });
        });
    </script> 
    
</body>
</html>

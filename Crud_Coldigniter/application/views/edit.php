<!DOCTYPE html>
<html>
<head>
	<title>Editar Clientes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container mt-lg-5">
	<?php foreach($cliente as $row){ ?>
	<?php echo form_open(base_url('cliente/update/').$row->id); ?>
    <div class="col-sm-4 my-1">
        <h4>Editando dados do Cliente</h4><br>
    </div> 
    <div class="col-sm-4 my-1">
	   <div class="form-group">
		  <label>Nome:</label>
		  <input type="text" name="nome" class="form-control" id="exampleInputEmail1" value="<?php echo $row->nome; ?>">
	   </div>
    </div>
    <div class="col-sm-4 my-1">
	   <div class="form-group">
		  <label >Sobrenome:</label>
		  <input type="text" name="sobrenome" class="form-control" id="exampleInputEmail1" value="<?php echo $row->sobrenome; ?>">
	   </div>
    </div>
    <div class="col-sm-4 my-1">
        <div class="form-group">
		  <label >Idade:</label>
		  <input type="number" name="idade" class="form-control" id="exampleInputEmail1" value="<?php echo $row->idade; ?>">
	   </div>
    </div>
    <div class="col-sm-4 my-1">
        <div class="form-group">
		  <label >Cidade:</label>
		  <input type="text" name="cidade" class="form-control" id="exampleInputEmail1" value="<?php echo $row->cidade; ?>">
	   </div>
    </div>
    <div class="col-sm-4 my-1">
        <div class="form-group">
		  <label >Estado:</label>
		  <input type="text" name="estado" class="form-control" id="exampleInputEmail1" value="<?php echo $row->estado; ?>">
	   </div>
    </div>
    <div class="col-sm-4 my-1">
	   <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
	<?php } ?>
</div>
</body>
</html>

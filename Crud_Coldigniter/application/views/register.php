<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Clientes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container mt-lg-5">
    <div class="col-sm-4 my-1">
        <h4>Cadastro Cliente</h4><br>
    </div>    
	<?php echo form_open(base_url('cliente/criar')); ?>
    
    <div class="col-sm-4 my-1 ">
		<div class="form-group">
			<label>Nome:</label>
			<input type="text" name="nome" class="form-control" id="" required>
		</div>
    </div>
    <div class="col-sm-4 my-1">
		<div class="form-group">
				<label >Sobrenome:</label>
				<input type="text" name="sobrenome" class="form-control" id="" required>
	   </div>
    </div>
    <div class="col-sm-4 my-1">
        <div class="form-group">
				<label >Idade:</label>
				<input type="number" name="idade" class="form-control" id="" required>
	   </div>
    </div>
    <div class="col-sm-4 my-1">
        <div class="form-group">
				<label >Cidade:</label>
				<input type="text" name="cidade" class="form-control" id="" required>
	   </div>
    </div>
    <div class="col-sm-4 my-1">
         <div class="form-group">
				<label >Estado:</label>
				<input type="text" name="estado" class="form-control" id="" required>
	   </div>
    </div>
    <div class="col-sm-4 my-1">
			<button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
	
	<br>
	<br>
	<h3 class="text-center text-success" id="message"></h3>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
					 
						<a href="#addEmployeeModal" class="btn btn-success" data-coreui-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-coreui-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
			</div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Marca</th>
                        <th>Modelo</th>
						<th>armazenamento</th>
						<th>Memoria Ram</th>
						<th>Processador</th>
						<th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
				<?php
                while($row = mysqli_fetch_array($result))
                {
                ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						
						<td><?php echo $row["marca"]; ?></td>
						<td><?php echo $row["modelo"]; ?></td>
						<td><?php echo $row["armazenamento"]; ?></td>
						<td><?php echo $row["ram"]; ?></td>
						<td><?php echo $row["processador"]; ?></td>
						<td><?php echo $row["descricao"]; ?></td>
					
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                <?php 
                    } 
                ?>
				<?php
				
					// close connection database
					mysqli_close($conn);
                ?>
                </tbody>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="index.php">
					<div class="modal-header">						
						<h4 class="modal-title">Cadastrar Equipamentos</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<div class="form-group">
							<label>Tipo de Dispositivo</label>
							<input type="text" class="form-control" name="modelo" placeholder="Insira o modelo" required>
						</div>					
						<div class="form-group">
							<label>Marca</label>
							<input type="text" class="form-control" name="marca" placeholder="Enter name" required>
						
		
						</div>
						<div class="form-group">
							<label>Modelo</label>
							<input type="text" class="form-control" name="modelo" placeholder="Insira o modelo" required>
						</div>
						<div class="form-group">
							<label>Armazenamento</label>
							<input type="text" class="form-control" name="armazenamento" placeholder="Insira o amazenmento" required>
						</div>
						<div class="form-group">
							<label>Memória Ram</label>
							<input type="text" class="form-control" name="ram" placeholder="Insira a memória ram" required>
						</div>
						<div class="form-group">
							<label>Processador</label>
							<input type="text" class="form-control" name="processador" placeholder="Insira o modelo" required>
						</div>
						<div class="form-group">
							<label>Descrição</label>
							<textarea class="form-control" name="descricao" placeholder="Insira a descrição" required></textarea>
						</div>
										
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="add" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Edit Employee Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editEmployeeForm" method="post" action="edit_employee.php">
        <div class="modal-header">
          <h4 class="modal-title">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Marca</label>
            <input type="text" class="form-control" name="marca" required>
          </div>
          <div class="form-group">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo" required>
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>

	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

<script src="javascript.js"></script>

	




	                          		                            
</body>
</html>
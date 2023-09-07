<?php include "../templates/cabecera.php"; ?>
<?php include "cursos.php"; ?>

<div class="row">
  <div class="col-12">
    <div class="row">
			<div class="col-md-5">
				<form action="" method="post">
					<div class="card">
						<div class="card-header">
							Cursos
						</div>

						<div class="card-body">
							<div class="mb-3 d-none">
								<input
									class="form-control"
									type="text"
									name="id"
									id="id"
									value="<?php echo $id; ?>"
									placeholder="ID"
									autocomplete="off"
									required
								/>
							</div>

							<div class="mb-3">
								<input
									class="form-control"
									type="text"
									name="nombre_curso"
									id="nombre_curso"
									value="<?php echo $nombre_curso; ?>"
									placeholder="Nombre del curso"
									autocomplete="off"
									required
								/>
							</div>

							<div class="btn-group" role="group">
								<button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
								<button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
								<button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-7 mt-4 mt-md-0">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre del curso</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listaCursos as $curso){ ?>
							<tr>
								<td><?php echo $curso['id']; ?></td>
								<td><?php echo $curso['nombre_curso']; ?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>" />
										<input class="btn btn-info" type="submit" value="Seleccionar" name="accion" />
									</form>
								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
  </div>
</div>

<?php include "../templates/pie.php"; ?>
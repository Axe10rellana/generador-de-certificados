<?php include "../templates/cabecera.php"; ?>
<?php include "alumnos.php"; ?>

<div class="row">
	<div class="col-md-5">
		<form action="" method="post">
			<div class="card">
				<div class="card-header">
					Alumnos
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
							name="nombre"
							id="nombre"
							value="<?php echo $nombre; ?>"
							placeholder="Nombre del alumno"
							autocomplete="off"
							required
						/>
					</div>

					<div class="mb-3">
						<input
							class="form-control"
							type="text"
							name="apellidos"
							id="apellidos"
							value="<?php echo $apellidos; ?>"
							placeholder="Apellidos del alumno"
							autocomplete="off"
							required
						/>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Cursos del alumno:</label>
						<select multiple class="form-control" name="cursos[]" id="listaCursos">
							<?php foreach ($cursos as $curso){ ?>
								<option
									<?php
										if(!empty($arregloCursos)):
											if(in_array($curso['id'], $arregloCursos)):
												echo 'selected';
											endif;
										endif;
									?>
									value="<?php echo $curso['id']; ?>"
								>
									<?php echo $curso['id']; ?> - <?php echo $curso['nombre_curso']; ?>
								</option>
							<?php }?>
						</select>
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
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($alumnos as $alumno){ ?>
					<tr>
						<td><?php echo $alumno['id']; ?></td>
						<td class="mb-4">
							<?php echo $alumno['nombre']; ?> <?php echo $alumno['apellidos']; ?>
							<br />
							<?php foreach ($alumno["cursos"] as $curso){ ?>
								- <a href="certificado.php?idcurso=<?php echo $curso['id']; ?>&idalumno=<?php echo $alumno['id']; ?>">
									<i class="bi bi-filetype-pdf text-danger"></i> <?php echo $curso["nombre_curso"]; ?>
									</a><br />
							<?php }?>
						</td>
						<td>
							<form action="" method="post">
								<input type="hidden" name="id" id="id" value="<?php echo $alumno['id']; ?>" />
								<input class="btn btn-info" type="submit" value="Seleccionar" name="accion" />
							</form>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
<script type="text/javascript">
	new TomSelect('#listaCursos');
</script>
<?php include "../templates/pie.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="styleSheet" href="http://localhost/2223_2DAW_Adivina_la_cancion/src/css/estilos.css" type="text/css">
		<link rel="icon" type="image/x-icon" href="../img/logo.png">
		<script src="https://kit.fontawesome.com/f7b55e9c0a.js" crossorigin="anonymous"></script>
		<title>CRUD Canciones</title>
	</head>
	<body>
		<div id="divCRUDcanciones">
			<button class="btnVolver">Volver</button>
			<button id="anadirCancion">+</button>	
			<table class="tablasCRUD">
				<thead>
					<th>Nombre Canción</th>
					<th>Categoría</th>
					<th>Respuestas</th>
					<th>Botones</th>
				</thead>
				<tbody>
                    <?php
                        foreach($resultado as $mostrar){
                            echo "<tr><td>".$mostrar['id']."</td></tr>";
                        }
                    ?>
<!--					<tr>-->
<!--						<td>Lucha</td>-->
<!--						<td>Luchas Raciales</td>-->
<!--						<td>-->
<!--							<select>-->
<!--								<option>Respuestas</option>-->
<!--								<option>Dark Alive</option>-->
<!--								<option>No chance</option>-->
<!--							</select>-->
<!--						</td>-->
<!--						<td>-->
<!--							<i class="fa-sharp fa-solid fa-trash"></i>-->
<!--							<i class="fa-sharp fa-solid fa-pencil"></i>-->
<!--						</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Lucha</td>-->
<!--						<td>Luchas Raciales</td>-->
<!--						<td>-->
<!--							<select>-->
<!--								<option>Respuestas</option>-->
<!--								<option>Dark Alive</option>-->
<!--								<option>No chance</option>-->
<!--							</select>-->
<!--						</td>-->
<!--						<td>-->
<!--							<i class="fa-sharp fa-solid fa-trash"></i>-->
<!--							<i class="fa-sharp fa-solid fa-pencil"></i>-->
<!--						</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Lucha</td>-->
<!--						<td>Luchas Raciales</td>-->
<!--						<td>-->
<!--							<select>-->
<!--								<option>Respuestas</option>-->
<!--								<option>Dark Alive</option>-->
<!--								<option>No chance</option>-->
<!--							</select>-->
<!--						</td>-->
<!--						<td>-->
<!--							<i class="fa-sharp fa-solid fa-trash"></i>-->
<!--							<i class="fa-sharp fa-solid fa-pencil"></i>-->
<!--						</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Lucha</td>-->
<!--						<td>Luchas Raciales</td>-->
<!--						<td>-->
<!--							<select>-->
<!--								<option>Respuestas</option>-->
<!--								<option>Dark Alive</option>-->
<!--								<option>No chance</option>-->
<!--							</select>-->
<!--						</td>-->
<!--						<td>-->
<!--							<i class="fa-sharp fa-solid fa-trash"></i>-->
<!--							<i class="fa-sharp fa-solid fa-pencil"></i>-->
<!--						</td>-->
<!--					</tr>-->
				</tbody>
			</table>
		</div>
	</body>
</html>
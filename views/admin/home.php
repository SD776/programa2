<?php  include_once 'views/templates/header.php'; ?>

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-info">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">N° de Usuarios Registrados</p>
										<h4 class="my-1 text-info"><?php echo $data['usuarios']['total'];?></h4>
										<a class="mb-0 font-13" href="<?php echo BASE_URL . 'usuarios'; ?>">Registros</a>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
									<i class='bx bxs-group'></i>										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">N° de Clientes Registrados</p>
										<h4 class="my-1 text-danger"><?php echo $data['clientes']['total'];?></h4>
										<a class="mb-0 font-13" href="<?php echo BASE_URL . 'clientes'; ?>">Registros</a>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
									<i class="fa-solid fa-users"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Total Proveedores</p>
										<h4 class="my-1 text-success"><?php echo $data['proveedor']['total'];?></h4>
										<a class="mb-0 font-13" href="<?php echo BASE_URL . 'proveedor'; ?>">Registros</a>
									</div>
									<div
										class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
										<i class="fa-solid fa-user-tie"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Total Productos</p>
										<h4 class="my-1 text-warning"><?php echo $data['productos']['total'];?></h4>
										<a class="mb-0 font-13" href="<?php echo BASE_URL . 'productos'; ?>">Detalles</a>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
									<i class='bx bxs-cart'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->				
				<!--end row-->

			<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Productos Agregados Recientemente</h6>
							</div>
							<div class="dropdown ms-auto">
								<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
										class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
								</a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo BASE_URL . 'admin/reporteExcel'; ?>" target= "_blank"><i class="fas fa-file-excel text-success"></i> Reporte Excel</a>
                            </li>									
								</ul>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Producto</th>
										<th>Precio Compra</th>
										<th>Precio Venta</th>
										<th>Fecha</th>
										<th>Categoria</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data['nuevosProductos'] as $nuevosProductos) {?>
									<tr>
										<td><?php echo $nuevosProductos['descripcion'];?></td>
										<td><span class="badge bg-primary text-white shadow-sm w-100"><?php echo $nuevosProductos['precio_compra']?></span>
										</td>
										<td><span class="badge bg-success text-white shadow-sm w-100"><?php echo $nuevosProductos['precio_venta']?></span></td>
										<td><?php echo $nuevosProductos['fecha'];?></td>
										<td>
										<td><?php echo $nuevosProductos['categoria'];?></td>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
</div>
<!--end row-->
				

				<?php  include_once 'views/templates/footer.php'; ?>	
<?php get_header()?>

<!-- Main Left-->
<div class="main__left col-md-1">
	<img class="main__left--image" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraegifts.png" alt="logo principal">
</div>

<!-- Main Right-->
<div class="main__right col-md-11">

	<!-- NavBar-->
	<nav class="navbar col-md-12 navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class="navbar-left col-md-10">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<div class="nav--componente__menu"> </div>
						<a class="nav-link" href="#">Regalos para Empleados <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Regalos para Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Todos los regalos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	
	<!-- Products Grid -->
	<div class="products__grid container-fluid">

		<!-- Products title -->
		<div class="products__grid--category">
			
			<div class="products__grid--category-menu">
				<h3 class="products__grid--title">Regalos para Clientes</h3>
				<div class="products__grid--category-menu-right">
					<label id="products__sortform--select">Ordenar por</label>
					<select id="products__sortform form-control" class="products__sortform" name="" >
						<option value="position:desc">--</option>
						<option value="price:asc">Precio de menor a mayor</option>
						<option value="price:desc">Precio de mayor a menor</option>

					</select>
				</div>
			</div>

		</div>

		<!-- Products List-->
		<!-- First Column of Products-->
		<div class="row">
			<div class="col-md-12">
				<ul class="products__grid--list">

					<!-- Item 1 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 2 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 3 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 4 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- item 5-->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>
				</ul>
			</div><!-- col-md-12-->
		</div><!--row-->

		<!-- Second Column of Products-->
		<div class="row">
			<div class="col-md-12">
				<ul class="products__grid--list">

					<!-- Item 6 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 7 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 8 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 9 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>

					<!-- Item 10 -->
					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="" title="Mug happy" class="products__grid--link">
								<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
							</a>
							<div class="products__grid--info">
								<h2 class="products__grid--name">
									<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
								</h2>
							</div>
							<div class="products__grid--price">
								<p>$5990</p>
							</div>
						</li>
					</div>
				</ul>
			</div><!-- col-md-12-->
		</div><!--row-->
	</div><!--product grid-->

	<!--product pagination-->
	<div class="products__grid--pagination container-fluid">
		<nav aria-label="Products results pages">
			<ul class="pagination pagination-sm">
				<li class="page-item products__grid--pagination-item disabled">
					<a class="page-link" href="#" tabindex="-1">Anterior</a>
				</li>
				<li class="page-item products__grid--pagination-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item active products__grid--pagination-item">
					<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
				</li>
				<li class="page-item products__grid--pagination-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item products__grid--pagination-item">
					<a class="page-link" href="#">Siguiente</a>
				</li>
			</ul>
		</nav>
		
	</div>

	

	<!-- Opinions -->
	<div class="opinion col-md-12">
		<div class="row">
			<!-- Opinion 1 -->
			<div class="col-md-4">
				<div class="opinion__inner">
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<h4>Gran producto</h4>
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus </p>
					<h5>Nataly Medina</h5>
				</div>
			</div>

			<!-- Opinion 2 -->
			<div class="col-md-4">
				<div class="opinion__inner">
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<h4>Gran producto</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus </p>
					<h5>Nataly Medina</h5>
				</div>
			</div>

			<!-- Opinion 3 -->
			<div class="col-md-4">
				<div class="opinion__inner">
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<i class="opinion__inner--star fas fa-star"></i>
					<h4>Gran producto</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus n</p>
					<h5>Nataly Medina</h5>
				</div>
			</div>
		</div>
	</div>



	<?php get_footer()?>
</div><!-- Main Right -->

</body>
</html>
<?php get_sidebar()?>
<?php get_header()?>
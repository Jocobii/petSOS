<!-- blog -->
<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Nuestro Blog</h3>
			<div class="row blog-content pt-lg-3">
				<!-- left side -->
				<div class="col-lg-8 blog_section">
					<div class="card border-0">
						<a href="single.html">
							<img class="card-img-top" src="<?= base_url() ?>/assets/images/V1.jpg" alt="">
						</a>
						<div class="card-body">
							<div class="row border-bottom pb-3">
								<div class="col-sm-6 col-4 perso-wthree">
									<h6 class="blog-first text-bl">
										<span class="fa fa-user mr-2"></span>Adrian Lie
									</h6>
								</div>
								<div class="col-sm-6 col-8 info-commt text-right">
									<ul class="blog_list">
										<li>Oct 16, 2019</li>
										<li class="mx-3">
											<a href="#">
												<span class="fa fa-heart-o mr-1"></span>30
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-comments-o mr-1"></span>18
											</a>
										</li>
									</ul>
								</div>
							</div>
							<a href="#" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">¿Sufre estrés tu mascota?</a>
							<p class="card-text">Hoy en día, muchas de nuestros animales de compañía están sometidos a factores estresantes. Si bien hay animales que están totalmente adaptados a la vida doméstica, hay otros, que por su carácter, o por no haber tenido un periodo de socialización adecuado, sufren a menudo estrés.
                            </p>
							<a href="<?= base_url() ?>/blogc1" class="btn blog-button mt-4">Leer Mas</a>
						</div>
					</div>
					<div class="card border-0 my-4">
						<a href="single.html">
							<img class="card-img-top" src="<?= base_url() ?>/assets/images/V2.jpg" alt="">
						</a>
						<div class="card-body">
							<div class="row border-bottom pb-3">
								<div class="col-sm-6 col-4 perso-wthree">
									<h6 class="blog-first text-bl">
										<span class="fa fa-user mr-2"></span>Mario Spe
									</h6>
								</div>
								<div class="col-sm-6 col-8 info-commt text-right">
									<ul class="blog_list">
										<li>Oct 25, 2019</li>
										<li class="mx-3">
											<a href="#">
												<span class="fa fa-heart-o mr-1"></span>20
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-comments-o mr-1"></span>22
											</a>
										</li>
									</ul>
								</div>
							</div>
							<a href="single.html" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Rascadores para gato. ¡La mejor solución para afilar sus uñas!</a>
							<p class="card-text">Afilarse las uñas es para todos los gatos lo que comer, beber o andar es para nosotros. Es una necesidad e instinto básico de estos pequeños animales que tanto nos gustan.</p>
							<a href="<?= base_url() ?>/blogc2" class="btn blog-button mt-4">Leer Mas</a>
						</div>
					</div>
					<div class="card border-0">
						<a href="single.html">
							<img class="card-img-top" src="<?= base_url() ?>/assets/images/V3.jpg" alt="">
						</a>
						<div class="card-body">
							<div class="row border-bottom pb-3">
								<div class="col-sm-6 col-4 perso-wthree">
									<h6 class="blog-first text-bl">
										<span class="fa fa-user mr-2"></span>Bob Fra
									</h6>
								</div>
								<div class="col-sm-6 col-8 info-commt text-right">
									<ul class="blog_list">
										<li>Feb 07, 2019</li>
										<li class="mx-3">
											<a href="#">
												<span class="fa fa-heart-o mr-1"></span>28
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-comments-o mr-1"></span>23
											</a>
										</li>
									</ul>
								</div>
							</div>
							<a href="single.html" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">¿Cómo acabar con las manchas del lagrimal de nuestras mascotas?</a>
							<p class="card-text">Las típicas manchas de tonos rojizos o marrones que se presentan sobre todo en el lagrimal de algunos perros, es un problema frecuente ante el que se encuentran muchos propietarios de mascotas.</p>
							<a href="<?= base_url() ?>/blogc3" class="btn btn-primary blog-button mt-4">Leer Mas</a>
						</div>
					</div>
					
					<div aria-label="Page navigation example">
						<ul class="pagination mt-5">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Anterior</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Siguiente</a>
							</li>
						</ul>
					</div>
					<!-- //left side -->
				</div>
				<!-- right side -->
				<div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
					<div class="event-right1">
						<div class="search1">
							<h3 class="blog-title text-bl mb-4">Buscar</h3>
							<form class="form-inline" action="#" method="post">
								<input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Buscar mas.." name="Search" required>
								<button class="btn text-wh rounded-0 mt-3" type="submit">Buscar</button>
							</form>
						</div>
						<div class="categories my-5">
							<h3 class="blog-title text-bl mb-4">Categorias</h3>
							<ul class="list-unstyled">
								<li class="border-bottom mb-3 pb-2">
									<a href="<?= base_url() ?>/bloga" class="text-cati">Aseo </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="<?= base_url() ?>/blog" class="text-cati">Entrenamiento de perros </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="<?= base_url() ?>/blogc" class="text-cati">Cuidado de veterinario </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li>
									<a href="<?= base_url() ?>/blogad" class="text-cati">Adopcion </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
							</ul>
						</div>
						<div class="posts">
							<h3 class="blog-title text-bl mb-4">Nuestros Eventos</h3>
							<div class="posts-grids">
								<div class="row posts-grid">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.html">
											<img src="<?= base_url() ?>/assets/images/g2.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.html" class="text-bl">Convivencia de mascotas</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>15/11/19</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.html" class="text-bl ml-2">Administrador</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid my-4">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.html">
											<img src="<?= base_url() ?>/assets/images/g3.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.html" class="text-bl">Convivencia de perros</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>23/05/18</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.html" class="text-bl ml-2">Administrador</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.html">
											<img src="<?= base_url() ?>/assets/images/g6.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.html" class="text-bl">Paseo con tu perro</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>13/10/19</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.html" class="text-bl ml-2">Administrador</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid mt-4">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.html">
											<img src="<?= base_url() ?>/assets/images/g9.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.html" class="text-bl">Entrenamiento basico</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>27/12/19</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.html" class="text-bl ml-2">Administrador</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="category-story my-5">
							<h3 class="blog-title text-bl mb-4">Mas Historias</h3>
							<ul class="list-unstyled">
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">La mascota apropiada para ti</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">Convivencia de mascotas en el parque</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">Entrenamiento de perros en la ciudad de Tijuana</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">Vacunas gratis para paracitos</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">Miles de perros en la calle..</a>
								</li>
								<li>
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">Niños rescatan a un perro a punto de caeer de un puente</a>
								</li>

							</ul>
						</div>
						<div class="tags">
							<h3 class="blog-title text-bl">Etiquetas recientes</h3>
							<ul class="mt-4">
								<li>
									<a href="single.html" class="text-bl border">Perros</a>
								</li>
								<li>
									<a href="single.html" class="text-bl border">Gatos</a>
								</li>
								<li>
									<a href="single.html" class="text-bl border">Aves</a>
								</li>
								<li>
									<a href="single.html" class="text-bl border">Mascotas pequeñas</a>
								</li>
								<li>
									<a href="single.html" class="text-bl border">Acuarios</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- //right side -->
			</div>
		</div>
	</div>
	<!-- //blog -->
<?php require_once 'includes/header.php'; ?>
<!-- banner -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-0 slider-niveles">
            <div class="banner-slide">
                <div><img src="images/banners/contacto.jpg"></div>
            </div>
        </div>
    </div>
</div>
<!-- /banner -->
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1 class="text-cui">Contáctanos</h1>
				<span>Aclara cualquier duda, estamos a tus órdenes</span>
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">

							<h3><span>Envíanos un mensaje</span></h3>

								<form class="mb-0" id="contactForm" data-toggle="validator">

									<div class="row">
										<div class="col-md-6 form-group">
											<input type="text" class="sm-form-control required" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre completo*" required>
                                    		<div class="help-block with-errors text-danger"></div>
										</div>

										<div class="col-md-6 form-group">
											<input type="email" class="sm-form-control required" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                    		<div class="help-block with-errors text-danger"></div>
										</div>

										<div class="col-md-6 form-group">
											<input type="tel" class="sm-form-control required" name="tel" id="tel" onfocus="this.placeholder = 'Escribe tu teléfono (10 digitos)*'" onblur="this.placeholder = 'El teléfono es obligatorio*'" placeholder="Teléfono (10 digitos)*" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                    		<div class="help-block with-errors text-danger"></div>
										</div>

										<div class="col-md-6 form-group">
											<input type="text" class="sm-form-control required required" name="subject" id="subject" onfocus="this.placeholder = 'Escribe el asunto*'" onblur="this.placeholder = 'El asunto es obligatorio*'" placeholder="Asunto*" required>
                                    		<div class="help-block with-errors text-danger"></div>
										</div>

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<textarea class="sm-form-control required" name="message" id="message" onfocus="this.placeholder = 'Escribe el mensaje*'" onblur="this.placeholder = 'El mensaje es obligatorio*'" placeholder="Mensaje*" rows="6" cols="30" required></textarea>
                                        	<div class="help-block with-errors text-danger"></div>
                                        	<div id="msgSubmit" class="h5 text-center hidden"></div>
                                        	<p>*Campos obligatorios</p>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-12 form-group">
											<button class="button button-3d m-0" type="submit" id="form-submit" name="button-submit" value="submit">Enviar</button>
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								<strong class="text-cui">Dirección Playa del Carmen:</strong><br>
								Calle 72 entre Av. Sian Ka’an y Carr. Federal Mza. 026, Lote 03, Ejidal, 77714 Playa del Carmen, Q.R.<br><br>
								<strong class="text-cui">Dirección Tulum:</strong><br>
								Calle Escorpión Sur entre calle Andrómeda Oriente y calle Sol Oriente, Col. Huracanes, Tulum Centro.
							</address>
							<abbr title="Phone Number"><strong class="text-cui">Teléfono:</strong></abbr>+52 (984) 807 7481<br>
							<abbr title="Email Address"><strong class="text-cui">Email:</strong></abbr> asesoradmisiones3@educacionmeguz.com <br>


							<div class="widget border-0 pt-0">

								<a href="https://www.facebook.com/cuingles" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="https://www.instagram.com/cuinglespdc/" class="social-icon si-small si-dark si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="https://bit.ly/2FST5aL" class="social-icon si-small si-dark si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

							</div>

						</div><!-- .sidebar end -->
					</div>

				</div>
			<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-cui py-3 mb-0 ">Campus Playa del Carmen</h2>
					<!-- Google Map ============================================= -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.3726929145946!2d-87.06697208576124!3d20.65441110582974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e433ced5332b5%3A0xd52e76f71f1cc53b!2sCentro%20Universitario%20Ingl%C3%A9s!5e0!3m2!1sen!2smx!4v1580936050597!5m2!1sen!2smx" width="100%" height="60" frameborder="0" style="border:0;" allowfullscreen="" class="border-radius"></iframe>
				</div>
				<div class="col-md-6">
					<h2 class="text-cui py-3 mb-0 ">Campus Tulum</h2>
					<!-- Google Map ============================================= -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1872.0578749241645!2d-87.45508192694139!3d20.212510567668712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x372fc7566594a00b!2sColegio%20Ingl%C3%A9s%20Tulum!5e0!3m2!1ses-419!2smx!4v1609112386748!5m2!1ses-419!2smx" width="100%" height="60" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="border-radius"></iframe>
				</div>
			</div>
			</div>
		</div>
		</section><!-- #content end -->
<?php require_once 'includes/footer.php'; ?>
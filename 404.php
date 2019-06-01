
    <!--***php que llama al header.php*********-->
    <?php get_header(); ?>
	<!--*************************************galeria***************************-->	

    <div class="contenedor-header animated fadeInDown">
        <div class="animated slideInRight delay-1s">
            <h4>Tú empresa tú Web</h4>
            <p class="animated slideInRight delay-2s">El futuro de las compras está en Internet.</p>
				</div>
				
        


</div>

	<!--*************************************promo***************************-->	
         <div class="container">
            <div class="card " style="width: 100%;">
                <div class="card-body" >
                    <h5 class="card-title">Error al cargar la Pagina</h5>
                    <p class="card-text">Se produjo un error al intentar cargar la pagina, vuelva a intentarlo.</p>
                    <a href="<?php bloginfo('url');?>/" class="btn btn-info">Volver a pagina principal</a>
                </div>
            </div>
         </div>  


<!--    **************Formulario de contacto*************                            -->
    
					
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="well well-sm">
							<form class="form-horizontal" method="post">
								<fieldset>
									<legend class="text-center1 header">Contacto</legend>
                                    <?php echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto"]' ); ?>
									
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>

 			
			
			<hr>





<!--***************************************************************************************-->
        
<!--***php que llama al footer.php*********-->
<?php get_footer(); ?>
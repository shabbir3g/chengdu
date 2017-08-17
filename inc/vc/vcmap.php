<?php 


add_shortcode('sumonvc',function($atts, $content){
	
	$serv_atts = shortcode_atts( array( 
			'col'			=> 'Here you can find all about our services',
			'ttl'			=> 'Here you can find all about our services',
			
		), $atts);
	
	
	ob_start(); ?>
	
	<div class="amaderdiv"> 
	
	<h2 style="color: <?php echo $serv_atts['col']; ?>;"><?php echo $serv_atts['ttl']; ?></h2>
	
	
	</div>
	
	
	<?php 
	
	$myvar = ob_get_contents();
	

	ob_get_clean();
	
	return $myvar;
	
});


	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'Our Sumon',
			'base'				=> 'sumonvc',
			'params'			=> array( 
					array( 
							'param_name'			=> 'col',
							'type'					=> 'colorpicker',
							'heading'				=> 'Type color'
						),
						array( 
							'param_name'			=> 'ttl',
							'type'					=> 'textarea',
							'heading'				=> 'Type section title'
						),
						array( 
							'param_name'			=> 'accordion_jakhosi',
							'type'					=> 'param_group',
							'heading'				=> 'Accordion',
							'params'				=> array( 
									array( 
											'param_name'		=> 'title',
											'type'				=> 'textfield',
											'heading'			=> 'Type accordion Title',
											'value'				=> 'akhane title hobe'
										),

									array( 
											'param_name'		=> 'desc',
											'type'				=> 'textarea',
											'heading'			=> 'Type accordion Description',
											'value'				=> 'akhane Description hobe'
										),


								)
						),
					
				)
		));


	}




<?php 




	function chengdu_home_tabs($one, $two){ 

		$tabs_atts = shortcode_atts( array( 
				'title1'			=> 'Case',
				'subtitle1'			=> 'System integration technique',
				'descript1'			=> 	"Chengdu Qihang system integration co., LTD., is a system integration technology company which dedicated to provide solutions with all kinds of military electronic chassis. We are committed to design, research, manufacture and integrate all kinds of chassis to apply to different environment, and meet the military industry customers' special needs. The main service object is the China electronics technology group, Air China, China Aerospace, China’s weapons, the Chinese heavy industry and other national defense group. After years of development, we are very familiar with the process of military products' research and development process and requirements, and we accumulated the rich connections and high precision CNC machining technology and experience. We pass the ISO9000 certification, military standard quality system certification, and won the title of "."national high-tech enterprise ",
				'btntex1'			=> 	'go to the main page',
				'btnhref1'			=> 	'#',
				'title2'			=> 'Mold',
				'subtitle2'			=> 'Precision molds machining',
				'descript2'			=> 	"Our precision mold department is a first-class mold manufacturing enterprises which has 15 years of experience in mold design and manufacturing in Sichuan. We have a professional project management team, designer team, technician team. We have more than 12 years experience about aviation, aerospace and precision CNC of military components, all the mould machining according to the military standard and inspection. 
                The cooperation clients with Chengdu Xinhaosi CNC machinery manufacturing co.,ltd.: China Electronics Technology Group Corporation No.10 Research Institution, Xi'an HongXing and other military scientific research units; Plastic Packaging Materials Co.,Ltd and other medical equipment units; NanFang, TianKun, FengYi, DaPeng and other bottle cap companies; Fotong and other auto industry unit, and a large number of foreign enterprises.",
				'btntex2'			=> 	'go to the main page',
				'btnhref2'			=> 	'#',
				
				'title3'			=> 'The bottle cap',
				'subtitle3'			=> 'Cap mold',
				'descript3'			=> 	"The bottle cap mould division specializing in the production of liquor bottle cap mould and product, we offer coordinated services including wine bottle cap design, mold manufacturing, cap parts processing, spraying, hot stamping and assembling. There is a large number of wine bottle cap mould for you to choose, you do not need to bear the high mould cost, the sample fastest 7 days can be finished. Over the years, our company has cooperated with LangJiu, Plastic Packaging Materials Co.,Ltd, LUZHOULAOJIAO, KWEICHOW MOUTAI CO.,Ltd，XiFengJiu，XiJiu and other kind of enterprises. We provide large quantities of white spirits cap suites and the high quality bottle cap complete sets of plastic mold for dozens of domestic professional bottle cap production enterprises, such as the NanFang, TianKun, FengYi and so on.",
				'btntex3'			=> 	'go to the main page',
				'btnhref3'			=> 	'#',
			), $one);
			
			
			ob_start();

		?>

		<div class="business_tab_hd">
            <ul class="clearfix">
               <li class="jx on"><a href="javascript:;"><i class="icon"></i><?php echo $tabs_atts['title1']; ?></a></li>
               <li class="mj"><a href="javascript:;"><i class="icon"></i><?php echo $tabs_atts['title2']; ?></a></li>
               <li class="pg"><a href="javascript:;"><i class="icon"></i><?php echo $tabs_atts['title3']; ?></a></li>
            </ul>
         </div>
         <div class="business_tab_bd">
            <div class="business_tab_item business_tab_jx">
               <div class="business_intro">
                  <div class="w1200">
                     <div class="business_intro_con">
					
                        <h2> <?php echo $tabs_atts['subtitle1']; ?></h2>
                        <p> <?php echo $tabs_atts['descript1']; ?></p>
                        <a href="<?php echo $tabs_atts['btnhref1']; ?>"><?php echo $tabs_atts['btntex1']; ?></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="business_tab_item business_tab_mj" style="display:none;">
               <div class="business_intro">
                  <div class="w1200">
                     <div class="business_intro_con">
                       <h2> <?php echo $tabs_atts['subtitle2']; ?></h2>
                        <p> <?php echo $tabs_atts['descript2']; ?></p>
                        <a href="<?php echo $tabs_atts['btnhref2']; ?>"><?php echo $tabs_atts['btntex2']; ?></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="business_tab_item business_tab_pg" style="display:none;">
               <div class="business_intro">
                  <div class="w1200">
                     <div class="business_intro_con">
                        <h2> <?php echo $tabs_atts['subtitle3']; ?></h2>
                        <p> <?php echo $tabs_atts['descript3']; ?></p>
                        <a href="<?php echo $tabs_atts['btnhref3']; ?>"><?php echo $tabs_atts['btntex3']; ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>






	<?php 

	
	return ob_get_clean();

	}
	
	
	
	
	add_shortcode('home_tabs','chengdu_home_tabs');

	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'Home Tabs',
			'base'				=> 'home_tabs',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title1',
							'type'					=> 'textfield',
							'heading'				=> 'Tab Title 01'
						),
					array( 
							'param_name'			=> 'descript1',
							'type'					=> 'textarea',
							'heading'				=> 'Tab Description 01'
						),
						array( 
							'param_name'			=> 'title2',
							'type'					=> 'textfield',
							'heading'				=> 'Tab Title 02'
						),
					array( 
							'param_name'			=> 'descript2',
							'type'					=> 'textarea',
							'heading'				=> 'Tab Description 02'
						),
						array( 
							'param_name'			=> 'title3',
							'type'					=> 'textfield',
							'heading'				=> 'Tab Title 03'
						),
					array( 
							'param_name'			=> 'descript3',
							'type'					=> 'textarea',
							'heading'				=> 'Tab Description 03'
						)
				)
		));


	}
	
	
	
	
	
	
		function chengdu_home_tabs_small($one, $two){ 

		$tabs_atts_small = shortcode_atts( array( 
				'title1'			=> 'Company news',
				'title2'			=> 'Trade news',
				
				
			), $one);
			
			
			ob_start();

		?>

		<div class="business_news_item business_news_m">
                  <div class="news_tab_hd">
                     <ul class="clearfix">
                        <li class="on"><?php echo $tabs_atts_small['title1']; ?></li>
                        <li><?php echo $tabs_atts_small['title2']; ?></li>
                     </ul>
                     <a href="<?php echo home_url(); ?>/news-center/" class="more">MORE</a>
                  </div>
                  <div class="news_tab_bd">
				  
				  <?php 
				  
				  
				  $h_post = new WP_Query(array(
					'post_type'		=> 'post'
				  ));
				  
				  
				  while($h_post->have_posts()): $h_post->the_post(); ?>
                     <div class="news_tab_item">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),3,false); ?>...</p>
                        <a href="<?php the_permalink(); ?>">View details&nbsp;&nbsp;></a>
                     </div>
					<?php endwhile; ?>
					
                  </div>
               </div>
	<?php 

	
	return ob_get_clean();

	}
	
	
	
	
	add_shortcode('home_tabs_small','chengdu_home_tabs_small');

	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'Home Tabs Small',
			'base'				=> 'home_tabs_small',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title1',
							'type'					=> 'textfield',
							'heading'				=> 'Tab Title 01'
						),
					array( 
						'param_name'			=> 'title2',
						'type'					=> 'textfield',
						'heading'				=> 'Tab Title 02'
					),
					array( 
							'param_name'			=> 'descript1',
							'type'					=> 'textarea',
							'heading'				=> 'Tab Description 01'
						),
						
					
				)
		));


	}
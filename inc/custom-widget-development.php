<?php 

		class contact_info extends WP_Widget{
		
		
		
		public function __construct(){
			
			
			parent::__construct('koncept_custom_widget','Contact Info',array(
				'description'	=> 'You can add your Contact Info here'
			));
			
			
		}
		
		public function widget($first, $second){


		$title 		= $second['title'];
		$address1 	= $second['address1'];
		$address2 	= $second['address2'];
		$address3 	= $second['address3'];
		?>
			
			<div class="contact_item">
                <dl class="contact_item_con">
                  <dt><?php echo $title; ?></dt>
                  <dd><?php echo $address1; ?></dd>
                  <dd><?php echo $address2; ?></dd>
                  <dd><?php echo $address3; ?></dd>
                </dl>
            </div>
			
		
			
			
			
			<?php 
			
			}
			
			
			
		public function form($second){
			
			
			$title 		= $second['title'];
			$address1 	= $second['address1'];
			$address2 	= $second['address2'];
			$address3 	= $second['address3'];
			
			
			?>
			
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('address1'); ?>">Address 01</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('address1'); ?>" name="<?php echo $this->get_field_name('address1'); ?>" value="<?php echo $address1; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('address2'); ?>">Address 02</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('address2'); ?>" name="<?php echo $this->get_field_name('address2'); ?>" value="<?php echo $address2; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('address3'); ?>">Address 03</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('address3'); ?>" name="<?php echo $this->get_field_name('address3'); ?>" value="<?php echo $address3; ?>" />
			</p>
			
			<?php 
		}
		
		
	}
	
	
	add_action('widgets_init',function(){
		
		
		
		register_widget('contact_info');
		
		
		
		
	});

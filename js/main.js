(function($){
	$(document).ready(function(){
		
	  $('.new_tab_hd li:last').css('border', 'none');
	  
	  var len=$('.new_tab_banner li').size();
	  
	  $('.new_tab_banner .all').html(len)
	  
	  $('.btn_right').click(function(){
	  
		var index=$('.new_tab_num .on').html();
	  
		index++;
	  
		if (index>len) {
	  
			index=1;
	  
		};
	  
		$('.new_tab_banner li').eq(index-1).addClass('on').fadeIn().siblings().removeClass('on').fadeOut();
	  
		$('.new_tab_num .on').html(index);
	  
		console.log(index)
	  
	  })
	  
	  $('.btn_left').click(function(){
	  
		var index=$('.new_tab_num .on').html();
	  
		index--;
	  
		if (index<1) {
	  
			index=len;
	  
		};
	  
		$('.new_tab_banner li').eq(index-1).addClass('on').fadeIn().siblings().removeClass('on').fadeOut();
	  
		$('.new_tab_num .on').html(index);
	  
	  })
	  
		 // about page code 
		
		$('.business_tab_hd li').click(function(){
         
         	var i=$(this).index();
         
         	$(this).addClass('on').siblings().removeClass('on');
         
         	$('.business_tab_item').eq(i).show().siblings().hide();
         
         });
         
         $('.news_tab_hd li').click(function(event) {
         	var i=$(this).index();
         	$(this).addClass('on').siblings().removeClass('on');
         	$('.news_tab_item').eq(i).show().siblings().hide();
         });
		
		
		 $('.about_honor li:odd').css('margin', '0');
      
      $('.about_equ li:odd').css('margin', '0');
      
      $('.about_tab_hd li').click(function(event) {
      
      	var i=$(this).index();
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      	$('.about_tab_bd_item').eq(i).fadeIn().siblings().fadeOut();
      
      });
      
	  
	  
	  // case page code 
	  
	     $('.bmcl').css('margin', '0');
      
      $('.case_tab_bd_item').find('li:last').css('margin', '0');
      
      $('.case_tab_bd_item').eq(0).show();
      
      $('.about_fac_c li:last').css('margin', '0');
      
      $('.about_hor li:last').css('margin', '0');
      
      $('.business_lsit li').hover(function() {
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      }, function() {
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      });
      
      $('.case_tab_hd li').click(function(){
      
      	var i=$(this).index();
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      	$('.case_tab_bd_item').eq(i).fadeIn().siblings().fadeOut()
      
      })
	  
	  // product center 
	  
	   $(function() {
      	$('.xt_product_cata ul').css({
      		'left':'50%',
      		'margin-left':-$('.xt_product_cata ul').width()/2+'px'
      	});
      	$('.xt_product_cata li:last').css('border-right','0');
      	
      });
	  
	  // simulation code
	  
	    $('.xt_test_cata li:last').css('border-right','0');
      $('.xt_test_cata ul').css({
      	'left':'50%',
      	'margin-left':(-$('.xt_test_cata ul').width()/2)+'px'
      });
      $('.xt_test_cata li').click(function(){
      	var i=$(this).index();
      	$(this).addClass('on').siblings().removeClass('on')
      	// $('.test_tab_item').eq(i).addClass('on').siblings().removeClass('on')
      	$('.test_tab_item').eq(i).fadeIn().siblings().fadeOut();
      })
      
	  // article center 
	  
		  $('.mj_news_cata li:last').css('border-right','0');
      
      $('.mj_news_cata ul').css({
      	'left':'50%',
      	'margin-left':-$('.mj_news_cata ul').width()/2+'px'
      });
		
		// data center 
		
		  $('.xt_news_cata li:last').css('border-right','0');
      $('.xt_news_cata ul').css('margin-left', (-$('.xt_news_cata ul').width()/2)+'px');
	  
	 // mold page 
	 
	 $('.bmcl').css('margin', '0');
         
         $('.case_tab_bd_item').find('li:last').css('margin', '0');
         
         $('.case_tab_bd_item').eq(0).show();
         
         $('.about_fac_c li:last').css('margin', '0');
         
         $('.about_hor li:last').css('margin', '0');
         
         $('.cooperation_item:nth-child(3n)').css('margin', '0');
         
         // console.log( $('.cooperation_item').eq(3n))
         
         $('.business_lsit li').hover(function() {
         
         	$(this).addClass('on').siblings().removeClass('on')
         
         }, function() {
         
         	$(this).addClass('on').siblings().removeClass('on')
         
         });
         
         $('.case_tab_hd li').click(function(){
         
         	var i=$(this).index();
         
         	$(this).addClass('on').siblings().removeClass('on')
         
         	$('.case_tab_bd_item').eq(i).fadeIn().siblings().fadeOut()
         
         })
		 
		// mold case 
		  $('.mj_product_cata li:last').css('border-right','0');
         
         $('.mj_product_cata ul').css({
         	'left':'50%',
         	'margin-left':-$('.mj_product_cata ul').width()/2+'px'
         });
		 
		   $('.client_item:nth-child(3n)').css('margin', '0');
		   
		   
		 // bottle cap

		 $('.sjkm').css('margin', '0');
      
      $('.cooperation_item:nth-child(3n)').css('margin', '0');
      
      $('.case_tab_bd_item').find('li:last').css('margin', '0');
      
      $('.case_tab_bd_item').eq(0).show();
      
      $('.design_tab_bd_item').find('li:last').css('margin', '0');
      
      $('.design_tab_bd_item').eq(0).show();
      
      $('.about_fac_c li:last').css('margin', '0');
      
      $('.about_hor li:last').css('margin', '0');
      
      $('.business_lsit li').hover(function() {
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      }, function() {
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      });
      
      $('.case_tab_hd li').click(function(){
      
      	var i=$(this).index();
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      	$('.case_tab_bd_item').eq(i).fadeIn().siblings().fadeOut()
      
      })
      
      $('.design_tab_hd li').click(function(){
      
      	var i=$(this).index();
      
      	$(this).addClass('on').siblings().removeClass('on')
      
      	$('.design_tab_bd_item').eq(i).fadeIn().siblings().fadeOut()
      
      })
      
	  
	  // bottole display 
	  
	   $('.pg_product_cata li:last').css('border-right','0');
      
      $('.pg_product_cata ul').css({
      	'left':'50%',
      	'margin-left':-$('.pg_product_cata ul').width()/2+'px'
      });
	  
	    $('.client_item:nth-child(3n)').css('margin', '0');
		
		 $('.pg_design li:last').css('border-right','0');
      
      $('.pg_design ul').css({
      	'left':'50%',
      	'margin-left':-$('.pg_design ul').width()/2+'px'
      });
         
		
		
		
	});
})(jQuery)
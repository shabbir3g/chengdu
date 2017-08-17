<?php get_header('main'); ?>
    <!-- banner -->
    <div class="new_banner">
      <div class="banner">
        <img src="<?php echo header_image(); ?>" />
      </div>
    </div>
    <div class="new_wrap">
      <div class="w1200 clearfix">
        <div class="breadcrumbs"><a class="bk_home" href="javascript:;"><span class="icon"></span></a>><a href="javascript:;">Home page</a>><span>News center</span></div>
        <div class="new_tab_hd fl">
          <div class="new_tab_hd_tit">
            NEWS CENTER
          </div>
          <ul>
            <li class="on"><a href="#">Company news</a></li>
            <li><a href="trander-news.html">Trade news</a></li>
          </ul>
        </div>
        <div class="new_tab_bd fl">
          <div class="new_tab_banner">
            <ul class="clearfix">
			
			<?php while(have_posts()): the_post(); ?>
              <li  class="on" >
                <div class="new_item clearfix">
                  <div class="new_item_pic fl">
                    <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
                    </a>
                  </div>
                  <div class="new_item_tex fl">
                    <div class="new_item_tit">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="new_item_info">
                      <p><?php echo wp_trim_words(get_the_content(),3,false); ?>...</p>
                    </div>
                  </div>
                </div>
              </li>
			  <?php endwhile; ?>
              
			  
			  
			  
			  
			 
			  
            </ul>
            <div class="new_tab_num">
              <a href="javascript:;" class="icon btn_left"></a>
              <a href="javascript:;" class="icon btn_right"></a>
              <span class="on">1</span>/<span class="all">5</span>
            </div>
          </div>
          <ul class="new_tab_con">
		  
		  <?php while(have_posts()): the_post(); ?>
            <li>
              <div class="new_item clearfix">
                <div class="new_item_pic fl">
                  <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
                  </a>
                </div>
                <div class="new_item_tex fl">
                  <div class="new_item_tit">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </div>
                  <div class="new_item_info">
                    <p><?php echo wp_trim_words(get_the_content(),3,false); ?>...</p>
                  </div>
                  <div class="new_item_more">
                    <span><?php the_time('Y-m-d'); ?></span>
                    <span>Author : <?php the_author(); ?></span>
                    <span>Source: <?php the_category(' ',' ',''); ?></span>
                  </div>
				  <?php the_tags('<div class="new_item_keyword">','  ','</div>'); ?>
				  
                  
                </div>
              </div>
            </li>
           <?php endwhile; ?>
		   
		   
		   
		   
          </ul>
          <div class="pages"></div>
        </div>
      </div>
    </div>
    <!-- 底部 -->
   <?php get_footer(); ?>
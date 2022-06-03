<?php 

/**
 * Code Review
 */

function review_function($atts){
   $args = shortcode_atts(array(
    'typeof' => "SoftwareApplication",
	  'name' => "",
	  'os' => "",
	  'content' => "",
	  'rating' => "4/5",
	  'stars' => "⭐⭐⭐⭐",
	  'count' => "1",
	  'price' => "1",
	  'img' => ""
   ), $atts);

   $template = 
	 '<div class="review-snippet" vocab="https://schema.org/" typeof="'.$args['typeof'].'">
    	<h3 property="name">'.$args['name'].' Review</h3>
			<div class="content-container">
				<img src="'.$args['img'].'" />
				<div>
					<b>Operating System:</b> <span property="operatingSystem">'.$args['os'].'</span> <br /> 
					<b>Type:</b> <span property="applicationCategory" content="'.$args['content'].'">'.$args['content'].'</span><br/>
					<div property="aggregateRating" typeof="AggregateRating"> 
					<b>Rating:</b> <span property="ratingValue">'.$args['rating'].' ('.$args['stars'].')</span>
					<span style="display:none;" property="ratingCount">'.$args['count'].'</span>
				</div>
				<div property="offers" typeof="Offer">
					<b>Price:</b> $<span property="price">'.$args['price'].'</span>
					<meta property="priceCurrency" content="USD" />
				</div>
				</div>
			</div>
		</div>';

   return $template;
}

/**
 * Top Posts
 */

function posts_function($atts){
   extract(shortcode_atts(array(
      'posts' => 1,
			'tag' => '',
   ), $atts));

   $return_string = '<ul>';
   query_posts(array(
		 'orderby' => 'date', 
		 'order' => 'DESC' , 
		 'showposts' => $posts, 
		 'tag' => $tag,
		 ));

   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
      endwhile;
   endif;
   $return_string .= '</ul>';

   wp_reset_query();
   return $return_string;
}


/**
 * Affiliate Promotions
 */

function affiliate_function($atts){
		
  $args = shortcode_atts(array(
    'img' => '',
		'header' => '',
		'tagline' => '',
		'href' => ''	
  ), $atts);

	$template = 
		'<div class="promotions">
			<aside class="newsletter">
				<header>
					<img src="'.$args['img'].'" />
				</header>
				<h2>'.$args['header'].'</h2>
					<p class="promotions__p">'.$args['tagline'].'</p>
					<a class="promotions__button" rel="noopener noreferrer sponsored" target="_blank" href="'.$args['href'].'"><button aria-label="promotinal-content" >signup</button></a>
			</aside>
		</div>';

	 return $template;
}

/**
 * Banner Promotions
 */

function banner_function($atts){
		
  $args = shortcode_atts(array(
    'img' => '',
		'header' => '',
		'tagline' => '',
		'href' => ''	
  ), $atts);

	$template = 
		'<div class="banner float-box">
			<aside class="newsletter">
				<header>
					<img src="'.$args['img'].'" />
				</header>
				<div class="body">
					<h3>'.$args['header'].'</h3>
					<p class="promotions__p">'.$args['tagline'].'</p>
				</div>
					<a class="promotions__button" rel="noopener noreferrer sponsored" target="_blank" href="'.$args['href'].'"><button >Signup</button></a>
			</aside>
		</div>';

	 return $template;
}

/**
 * Call Shortcodes
 */

add_shortcode('review', 'review_function');
add_shortcode('posts', 'posts_function');
add_shortcode('affiliate', 'affiliate_function');
add_shortcode('banner', 'banner_function');

?>
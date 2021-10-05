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
	  'stars' => "⭐⭐⭐⭐⭐",
	  'count' => "1",
	  'price' => "1",
	  'img' => ""
   ), $atts);

   $return_string = '<div class="review-snippet" vocab="https://schema.org/" typeof="'.$args['typeof'].'">
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

   return $return_string;
}

/**
 * Top Posts
 */

function posts_function($atts){
   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));

   $return_string = '<ul>';
   query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
      endwhile;
   endif;
   $return_string .= '</ul>';

   wp_reset_query();
   return $return_string;
}

add_shortcode('review', 'review_function');
add_shortcode('posts', 'posts_function');

?>
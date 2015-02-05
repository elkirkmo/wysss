<?php
/**
 * @package wysssv1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '.</a></h1>' ); ?>

			</header><!-- .entry-header -->

	<div class="entry-content">
		<h2>why should I stop saying "<?php the_title(); ?>"?</h2>
		<?php the_content(); ?>
		
		
		<h2>who was the last idiot to say "<?php the_title(); ?>"?</h2>
		<?php
			
			require_once('twitterAPIExchange.php');
			$settings = array(
			    'oauth_access_token' => "22568063-JHkGLBRqLre7eGy3z2yIFLQAYSA5NBDiclIWwbUYx",
			    'oauth_access_token_secret' => "7q4F2EMlo2BCsUsaBEiXbYxlfBhM8DoPAIqwtqbSTMwv0",
			    'consumer_key' => "5T7jez2hJXt7PFSGu10gfKBJI",
			    'consumer_secret' => "3IAK8aUu1qLdeP9ugqlxmOJtOjI6nprldfei7lhVE5eMQdb35r"
			);
			
			$title = get_the_title();
			$url = 'https://api.twitter.com/1.1/search/tweets.json';
			$requestMethod = 'GET';
			$getfield = '?q=#'.$title.'&result_type=recent';
			
			// Perform the request
			$twitter = new TwitterAPIExchange($settings);
			$json = $twitter->setGetfield($getfield)
			             ->buildOauth($url, $requestMethod)
			             ->performRequest();
			             
			$someArray = json_decode($json, true); ?>
			<div class="twitter_box">
			<img src='<?php echo $someArray["statuses"][0]["user"]["profile_image_url"] ?>'/>
			<ul>
				<li><?php echo $someArray["statuses"][0]["user"]["name"]; ?></li>
				<li><a href='http://twitter.com/statuses/"<?php echo $someArray["statuses"][0]["id"] ?>' target='_blank' rel='nofollow'>@ <?php echo $someArray["statuses"][0]["user"]["screen_name"] ?></a></li>
			</ul>
			<p>				
				<?php echo $someArray["statuses"][0]["text"] ?>
			</p>
			</div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer --></article><!-- #post-## -->

<?php
/**
 * @package wysssv1
 */
?>

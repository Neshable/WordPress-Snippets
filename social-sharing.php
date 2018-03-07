/**
 *  Use this code inside your theme/plugin to add social sharing function without
 *  the need of heavy bloated plugins.
 *  Use echo wp_social_sharing_buttons(); in your code afterwards
 *
 **/

function wp_social_sharing_buttons() {
	global $post;

	// Get current page URL
	$tokensURL = urlencode( get_permalink() );

		// Get current page title
	$tokensTitle = str_replace( ' ', '%20', get_the_title() );

		// Get Post Thumbnail for pinterest
	$tokensThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

		// Construct sharing URL without using any script
	$twitterURL  = 'https://twitter.com/intent/tweet?text=' . $tokensTitle . '&amp;url=' . $tokensURL . '&amp;via=neshable';
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $tokensURL;
	$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $tokensURL . '&amp;title=' . $tokensTitle;
	$telegramURL = 'https://telegram.me/share/url?url=' . $tokensURL . '&amp;text=' . $tokensTitle;
	

		// Based on popular demand added Pinterest too
	// $pinterestURL = 'https://pinterest.com/pin/create/button/?url=' . $tokensURL . '&amp;media=' . $tokensThumbnail[0] . '&amp;description=' . $tokensTitle;

	$content .= '<div id="social-sticky" class="social vertical">';
	$content .= '<a class="icon-facebook" href="' . $facebookURL . '" target="_blank"></a>';
	$content .= '<a class="icon-twitter" href="' . $twitterURL . '" target="_blank"></a>';
	$content .= '<a class="icon-linkedin" href="' . $linkedInURL . '" target="_blank"></a>';
	$content .= '<a class="icon-telegram" href="' . $telegramURL . '" target="_blank"></a>';
	$content .= '</div>';

	return $content;
};

<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coding_and_Marking
 */

?>

<header id="masthead" class="absolute max-w-screen-xl mx-auto relative flex flex-col lg:flex-row items-center w-full">

	<!-- <div>
		<?php
		//if ( is_front_page() ) :
			?>
			<h1><?php //bloginfo( 'name' ); ?></h1>
			<?php
		//else :
			?>
			<p><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			<?php
		// endif;

		// $coding_and_marking_description = get_bloginfo( 'description', 'display' );
		// if ( $coding_and_marking_description || is_customize_preview() ) :
			?>
			<p><?php //echo $coding_and_marking_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php //endif; ?>
	</div> -->
	<div class="px-4 w-full lg:w-2/12 h-16 lg:h-20 flex items-center justify-between">
		<div class="logo">
			<a href="<?php $uploads = wp_upload_dir();?>">
				<?php 
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
				?>
			</a>
		</div>
		
		<div class="flex lg:hidden">
			<span class="flex justify-center items-center h-10 w-10 rounded-full ">
				<i class="fas fa-bars  text-2xl" id="hamburger"></i>
			</span>
		</div>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'coding-and-marking' ); ?>" class="navi hidden flex-col justify-center lg:flex lg:flex-row lg:gap-6 lg:justify-end lg:items-center w-full pb-2 lg:pb-0">
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'coding-and-marking' ); ?></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'        => "menu main-menu flex flex-col lg:flex lg:flex-row py-5 lg:py-0 lg:items-center lg:gap-7  lg:max-w-lg lg:max-w-full", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				// 'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
				'after'				=> "<i class='fas fa-angle-down down-arrow hidden'></i>", // (string) Text after the link markup.
				'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			)	
		);
		?>
		<div class="navi w-full lg:w-2/12 flex items-center lg:justify-end px-2 lg:px-0">
				<button class="block lg:inline-flex w-full button">Get Quote</button>	
		</div>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->

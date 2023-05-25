<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotmak
 */

?>

<header id="masthead">

	<div class="flex flex-row">
			<div class="site-logo"></div>

			<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'dotmak' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav>
	</div>
</header>

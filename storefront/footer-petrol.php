<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('storefront_before_footer'); ?>
<div class="container-fluid site-footer py-5 position-relative">
		<div class="go-top position-absolute end-50 rounded-circle bg-white d-flex justify-content-center align-items-center px-3 py-2">
		<div class="d-flex justify-content-center align-items-center flex-column pointer">
			<span>&#xfe3f;</span>
			<span>
				Top
			</span>
		</div>
	</div>
	<?php
	if (get_field("map")) {
		$bottomimage = get_field("map");
	?>
		<img src="<?= esc_url($bottomimage['url']); ?>" alt="map">
	<?php
	}
	?>

</div>
<footer id="colophon" class="site-footer position-relative" role="contentinfo">
	<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_footer action
		 *
		 * @hooked storefront_footer_widgets - 10
		 * @hooked storefront_credit         - 20
		 */
		do_action('storefront_footer');
		?>

	</div><!-- .col-full -->
</footer><!-- #colophon -->
</div><!-- #page -->
<script>
	let pointer = document.querySelector(".pointer");
	pointer.addEventListener("click", () => {
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	});
	let barsParent = document.querySelector(".bars-parent");
	let nav = document.querySelector(".primary-navigation");
	let menu = document.getElementById("menu-main-menu");
	barsParent.addEventListener("click", () => {
		nav.classList.toggle("active");
		let li = document.createElement("li");
		li.classList.add("bars-side");
		let a = document.createElement("a");
		a.id = "bars";
		a.innerHTML = "≡";
		li.append(a);
		menu.append(li);
		li.addEventListener("click", () => {
			nav.classList.toggle("active");
			li.remove();
		});
	});
</script>
<?php wp_footer(); ?>

</body>

</html>
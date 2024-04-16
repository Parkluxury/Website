<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botiga
 */

?>

	<?php 
	/**
	 * Main Wrapper
	 */

	/**
	 * Hook 'botiga_main_wrapper_end'
	 * 
	 * @since 1.0.0
	 */
	do_action( 'botiga_main_wrapper_end' );

	/**
	 * Hook 'botiga_after_main_wrapper'
	 * 
	 * @since 1.0.0
	 */
	do_action( 'botiga_after_main_wrapper' ); 
	
	/**
	 * Footer
	 */

	/**
	 * Hook 'botiga_footer_before'
	 * 
	 * @since 1.0.0
	 */
	do_action( 'botiga_footer_before' );

	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {

		/**
		 * Hook 'botiga_footer'
		 * 
		 * @since 1.0.0
		 */
		do_action( 'botiga_footer' );
	}

	/**
	 * Hook 'botiga_footer_after'
	 * 
	 * @since 1.0.0
	 */
	do_action( 'botiga_footer_after' ); ?>

</div><!-- #page -->

<?php 
/**
 * Hook 'botiga_after_site'
 * 
 * @since 1.0.0
 */
do_action( 'botiga_after_site' ); ?>

<?php wp_footer(); ?>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var phoneInput = document.querySelector('input[name="phone-1"]'); // Replace "phone-1" with the actual name of your phone number input field
    var formSubmitted = false; // Variable to track whether form is already submitted

    phoneInput.addEventListener('input', function() {
        if (phoneInput.value.length === 10 && !formSubmitted) { // Change the length as per your phone number format and check if form is not already submitted
            formSubmitted = true;
            phoneInput.style.display = "none";
			document.getElementById('phone-1').style.display='none';
            alert("Your Mobile Number Is submitted. Please fill the below form for further details.");
           // window.location.href = 'https://park.luxury/sell/'; // Redirect to the desired URL
            
            // Remove attributes if condition is valid
            phoneInput.removeAttribute('data-required');
            phoneInput.removeAttribute('aria-required');
            phoneInput.removeAttribute('aria-invalid');
            
            // Set input as valid to prevent form validation error
            phoneInput.setCustomValidity('');
            
            // If there's any other form validation triggered, this code will attempt to reset it
            phoneInput.form.dispatchEvent(new Event('submit', { cancelable: true }));
        } else {
            phoneInput.style.display = "block";
        }
    });
});

</script>





</body>
</html>

(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );

function get_cachebreaker(){
  var d = new Date();
  var rand = d.getTime();
  var retval  =  "&rand=" + rand;
  return retval;
}

var tz_insult_Loop = {
//*********** ready ... housekeeping and loading the event handlers ************
  ready : function(){
	jQuery("#TZ_DEBUG").text("");
	jQuery('#tz_go').click(function() {

		var input = jQuery('#tz_name').val();
		var $url = testvar + "tz_insult1.php?name=" + input;
		var $cb = get_cachebreaker();

		$url = $url +  $cb;
		alert($url);
		jQuery("#TZ_INSULT").load($url);
	})




 }
};

jQuery(document).ready(function(){
  tz_insult_Loop.ready();
});

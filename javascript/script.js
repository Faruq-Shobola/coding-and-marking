/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */


/*------------------------------------------------------------------------------*/
/* Slick_slider
/*------------------------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    $(".slick_slider").slick();
    $(".partner_slider").slick();

    // Back To Top Button
    let btn = $("#button");
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "100");
	});
});


/*------------------------------------------------------------------------------*/
/* Mobile Sub_Menu
/*------------------------------------------------------------------------------*/
const hasSubMenu = document.querySelectorAll('.down-arrow')

for (var i = 0; i < hasSubMenu.length; i++) {
  hasSubMenu[i].addEventListener("click", function() {
    // this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
	dropdownContent.classList.toggle('active')
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";

    }
  });
}
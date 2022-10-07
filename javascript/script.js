/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
/***********************************
 * Mobile Menu Handler
 ************************************/
const icon = document.querySelector("#hamburger");
const menu = document.querySelector(".navi");
 

icon.addEventListener("click", function() {
	if (menu.classList.contains("hidden")) {
		menu.classList.remove("hidden")
		this.classList.remove("fa-bars");
		this.classList.add("fa-times");
	} else {
		menu.classList.add("hidden")
		this.classList.add("fa-bars");
		this.classList.remove("fa-times");
	}

})


/***********************************
 * Sub_Menu Toggler
 ************************************/
 const hasSubMenu = document.querySelectorAll('.down-arrow')

 for (var i = 0; i < hasSubMenu.length; i++) {
   hasSubMenu[i].addEventListener("click", function() {
	 // this.classList.toggle("active");
	 var dropdownContent = this.nextElementSibling;
	 dropdownContent.classList.toggle('active')
	 if (dropdownContent.style.display === "block") {
	   dropdownContent.style.display = "none";
	   this.classList.remove('rotate');
	 } else {
	   dropdownContent.style.display = "block";
	   this.classList.add('rotate')

 
	 }
   });
 }
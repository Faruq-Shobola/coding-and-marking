<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coding_and_Marking
 */

get_header();
?>
<!--  -->
<section class="">
	<div class="cont py-16 flex justiy gap-10 md:px-24 lg:px-8 lg:py-28">
		<div class="max-w-4xl mx-auto">
			<div class="flex flex-col items-center justify-center">
				<p class="mb-4 text-sm text-gray-400 uppercase">
					error 404
				</p>
				<h2 class="font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none capitalize">
					page not found
				</h2>
				<div class="w-32 h-1 bg-red-600 my-6 "></div>
				<p class="mb-4 text-base text-gray-400 md:text-lg">
					We looked everywhere for this page. Are you sure the website URL is correct?
				</p>
				<a href="/" aria-label="" class="button">
					go to homepage
					<svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
						<path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
					</svg>
				</a>
			</div>
		</div>
		<!-- <div class="flex justify-center items-center">
			<img src="https://media.istockphoto.com/vectors/exclamation-point-sign-in-red-triangle-vector-icon-vector-id894875516?k=20&m=894875516&s=612x612&w=0&h=0cvkN-GekkscxX3z0s5LfdwZCFG_hzsJcSK_4J3kKWo=" class="inset-0 object-cover top w-full h-full"  alt="">
		</div> -->
	</div>
</section>
<!--  -->

<?php
get_footer();

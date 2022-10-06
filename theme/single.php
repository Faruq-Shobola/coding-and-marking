<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Coding_and_Marking
 */

get_header();
?>
<div class="relative">
	<?php if(has_post_thumbnail()):?>	
    <img src="<?php the_post_thumbnail_url();?>"
		class="absolute inset-0 object-cover top w-full h-full"  
		alt="<?php the_title();?>"
	 >
	<?php endif;?>
    <div class="relative bg-gray-900 bg-opacity-50">
        <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
        <div class="flex flex-col items-center justify-between">
            <div class="relative w-full mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16 text-center">
                <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none capitalize">
				<?php the_title();?>
                </h2>
                <!-- <div class="w-32 h-1 bg-red-600 mx-auto my-6 "></div>
                <p class="mb-4 text-base text-gray-400 md:text-lg">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, consequatur?
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-red-400 hover:text-red-700">
                Learn more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
                </a> -->
            </div>
        </div>
        </div>
    </div>
</div>
	
<section class="pt-6 md:py-20 px-4">
	<div class="cont flex justify-center">
		<div class="w-full lg:w-11/12 grid grid-cols-1 md:grid-cols-11 gap-x-14 gap-y-10">
			<!---------------------------
					ARTICLE START 
			---------------------------->
			<div class="md:col-span-8 flex flex-col gap-7">
				<div class="flex flex-col gap-4">
				<!----------- DATE POSTED ------------>
					<div class="">
						<h5 class="text-base font-medium text-gray-500 flex gap-4">
							<span><?php echo get_the_date( 'jS F, Y' );?></span>
						</h5>
					</div>
				</div>
				<article class="flex flex-col">
						<?php the_content(); ?>

				</article> 
			</div>
				<!---------------------------
					ARTICLE END 
			---------------------------->

			<!---------------------------
					RELATED ARTICLE START 
			---------------------------->
			<div class="md:col-span-3">
				<div class="serach">

				</div>
				<div class="related-blog flex flex-col gap-8">
					<!----------- HEADING ------------->
					<div class="sub-heading ">
						<h4 class="text-xl font-semibold text-wine capitalize">
							related topics
						</h4>
					</div>
					<!----------- RELATED BLOG ------------->
					<div class="w-full flex flex-col gap-8">
						<div class="w-full grid grid-cols-1 md:grid-cols-5 gap-3 h-64 md:h-28">
							<div class="md:col-span-2 overflow-hidden">
								<img
								class="object-cover h-full w-full"
								src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
								alt="Flower and sky"
								/>
							</div>
							<div class="md:col-span-3 flex flex-col gap-2">                                        
								<h3 class="text-sm font-medium">
									Zenith Precision Ltd offers integrated Coding and Marking solution...
								</h3>
							
								<p class="text-sm text-gray">
									January 05, 2022
								</p>
								</div>
						</div>
					</div>
				</div>
			</div>
				<!---------------------------
					RELATED ARTICLE START 
			---------------------------->
		</div>
	</div>

</section>


<?php
get_footer();

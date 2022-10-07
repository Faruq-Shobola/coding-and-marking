<?php
/**
 * The template for displaying Blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromedia
 */

get_header();
?>
<div class="relative">
    <img src="" alt="">
    <img src="https://test.zenithprecision.com.ng/Images/20973721_inkjet1_1600x1066.jpg" class="absolute inset-0 object-cover top w-full h-full"  alt="">
    <div class="relative bg-gray-900 bg-opacity-50">
        <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
        <div class="flex flex-col items-center justify-between">
            <div class="relative w-full lg:w-7/12 bg-black bg-opacity-40 p-6 md:p-10 lg:p-16 text-center">
                <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none capitalize">
               Blog
                </h2>
                <div class="w-32 h-1 bg-red-600 mx-auto my-6 "></div>
                <p class="mb-4 text-base text-gray-400 md:text-lg">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, consequatur?
                </p>
            </div>
        </div>
        </div>
    </div>
</div>
<!--  -->
<section class="blog py-32 px-4">
            <div class="cont flex flex-col items-center justify-center gap-16">
                <!-------------- HEADING -------------->
                <!-- <div class="flex flex-col items-center justify-center gap-8 heading text-center">
                    <h2 class="text-4xl font-bold ">Latest Coding tips from blog</h2>
                    <span class="line border-t-4 border-solid border-wine w-32"></span>
                </div> -->
                <!-------------- BLOGS -------------->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6 sm:gap-y-12 w-full">
                   
                    <?php 
                    /**
                     * Get blogs from template-blog
                     */
                    require get_template_directory() . '/inc/template-blog.php'; 
                    ?>
                </div>
                <!-------------- BUTTON -------------->
                <div class="btn">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </section>
        <!---------
<!-- GET FOOTER CONTENT -->
<?php get_footer();?>
<?php
/**
 * The template for displaying Services page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coding_and_Marking
 */

get_header();
?>

<div class="relative">
    <img src="" alt="">
    <img src="https://test.zenithprecision.com.ng/Images/20973721_inkjet1_1600x1066.jpg" class="absolute inset-0 object-cover top w-full h-full"  alt="">
    <div class="relative bg-gray-900 bg-opacity-50">
        <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
        <div class="flex flex-col items-center justify-between">
            <div class="relative w-full mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16 text-center">
                <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none capitalize">
                    our services
                </h2>
                <div class="w-32 h-1 bg-red-600 mx-auto my-6 "></div>
                <p class="mb-4 text-base text-gray-400 md:text-lg">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, consequatur?
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-red-400 hover:text-red-700">
                Learn more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
<!--  -->
<section class="py-10 bg-cream">
    <!-- Service One -->
    <div class="cont py-14">
        <div class="flex flex-col overflow-hidden shadow-sm lg:flex-row sm:mx-auto">
            <div class="relative lg:w-1/2">
                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" class="object-cover w-full lg:absolute h-80 lg:h-full" />
            </div>
            <div class="flex flex-col justify-center p-8 bg-whine text-white lg:p-16 lg:pl-10 lg:w-1/2">
                <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl">
                    Your new ideal style
                </h5>
                <div class="w-32 h-1 bg-white my-6 "></div>
                <p class="mb-5 text-white">
                    <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
                </p>
                <p class="mb-5 text-white">
                    <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
                </p>
                <div class="flex items-center">
                    <a href="/" aria-label="" class="button-outline">
                    Learn more
                    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Two -->
    <div class="cont py-14">
        <div class="flex flex-col overflow-hidden shadow-sm lg:flex-row-reverse sm:mx-auto">
            <div class="relative lg:w-1/2">
                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" class="object-cover w-full lg:absolute h-80 lg:h-full" />
            </div>
            <div class="flex flex-col justify-center p-8 bg-whine text-white lg:p-16 lg:pl-10 lg:w-1/2">
                <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl">
                    Your new ideal style
                </h5>
                <div class="w-32 h-1 bg-white my-6 "></div>
                <p class="mb-5 text-white">
                    <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
                </p>
                <p class="mb-5 text-white">
                    <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
                </p>
                <div class="flex items-center">
                    <a href="/" aria-label="" class="button-outline">
                    Learn more
                    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<!--  -->
    <?php get_template_part( 'template-parts/content/content', 'client' ); ?>
<!--  -->
    <?php get_template_part( 'template-parts/content/content', 'cta' ); ?>
<!--  -->

<?php
get_footer(); ?>
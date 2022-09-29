<?php
/**
 * The template for displaying Home pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coding_and_Marking
 */

get_header();
?>



<!-- Slider Start -->
<div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":true, "infinite":true, "speed":1000, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
    <!-- slide 1 -->
    <div class="relative">
        <video class="absolute inset-0 object-cover top w-full h-full" src="http://zenith-precision.test/wp-content/themes/coding-and-marking/theme/video/FANUC%20Industrial%20Robots%20at%20AUDI.mp4" autoplay loop muted></video>
        <div class="relative bg-gray-900 bg-opacity-50">
            <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
            <div class="flex flex-col items-start justify-between">
                <div class="relative w-full  mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                    The quick, brown fox <br class="hidden md:block" />
                    jumps over a <span class="text-red-400">lazy dog</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
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
    <!-- slide 2 -->
    <div class="relative">
        <video class="absolute inset-0 object-cover top w-full h-full" src="http://zenith-precision.test/wp-content/themes/coding-and-marking/theme/video/FANUC%20Industrial%20Robots%20at%20AUDI.mp4" autoplay loop muted></video>
        <div class="relative bg-gray-900 bg-opacity-50">
            <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
            <div class="flex flex-col items-center justify-between">
                <div class="relative w-full  mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                    The quick, brown fox <br class="hidden md:block" />
                    jumps over a <span class="text-red-400">lazy dog</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
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
    <!-- slide 3 -->
    <div class="relative">
        <video class="absolute inset-0 object-cover top w-full h-full" src="http://zenith-precision.test/wp-content/themes/coding-and-marking/theme/video/FANUC%20Industrial%20Robots%20at%20AUDI.mp4" autoplay loop muted></video>
        <div class="relative bg-gray-900 bg-opacity-50">
            <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
            <div class="flex flex-col items-end justify-between">
                <div class="relative w-full  mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                    The quick, brown fox <br class="hidden md:block" />
                    jumps over a <span class="text-red-400">lazy dog</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
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
</div>
<!-- Slider Stop -->

<?php
get_footer(); ?>
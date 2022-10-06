<?php
/**
 * The template for displaying Contact page
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
                    contact us
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
<section class="">
    <!---------------------------------  
        CONTACT INFO SECTION START
    --------------------------------->
    <section class="cont text-gray-600 body-font relative">
        <div class="container py-24 mx-auto flex flex-col lg:grid grid-cols-2 gap-8">
            <div class=" bg-gray-300 overflow-hidden py-44 md:p-10 md:pt-72 lg:p-5 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
                <div class="bg-white relative hidden md:flex flex-wrap py-6 shadow-sm ">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">123-456-7890</p>
                    </div>
                </div>
            </div>
            <div class="bg-white relative md:hidden flex flex-wrap py-6 space-y-5 shadow-sm">
                <div class="lg:w-1/2 px-2">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                </div>
                <div class="lg:w-1/2 px-2">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">123-456-7890</p>
                </div>
            </div>
            <div class="bg-white flex flex-col items-center  py-8">
                <div class="max-w-4xl">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------  
        CONTACT INFO SECTION END
    --------------------------------->
</section>

<?php
get_footer(); ?>
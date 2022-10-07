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
<div class="relative">
    <img src="https://test.zenithprecision.com.ng/Images/20973721_inkjet1_1600x1066.jpg" class="absolute inset-0 object-cover top w-full h-full"  alt="">
    <div class="relative bg-gray-900 bg-opacity-50">
        <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
        <div class="flex flex-col items-center lg:items-start justify-between">
            <div class="relative w-full lg:w-7/12 bg-black bg-opacity-40 p-6 md:p-10 lg:p-16 text-center lg:text-left">
                <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none capitalize">
               Book an appointment
                </h2>
                <div class="w-32 h-1 bg-red-600 mx-auto lg:mx-0 my-6 "></div>
                <p class="mb-4 text-base text-gray-400 md:text-lg">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, consequatur?
                </p>
            </div>
        </div>
        </div>
    </div>
</div>
<section class="">
    <!---------------------------------  
        APPOINTMENT SECTION START
    --------------------------------->
    <section class="cont text-gray-600 body-font relative">
        <div class="container py-24 mx-auto flex flex-col lg:grid grid-cols-2 gap-8">
            <div class="bg-white flex flex-col items-center  px-8">
                <div class="max-w-4xl">
                    <p class="leading-relaxed mb-1 text-gray-600">Give Us A Brief Description Of Your Request In The Provided Column Below</p>
                    <h2 class="text-gray-900 mb-5 text-4xl  font-bold title-font">Appointment Details</h2>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------  
        APPOINTMENT SECTION END
    --------------------------------->
</section>

<?php
get_footer(); ?>
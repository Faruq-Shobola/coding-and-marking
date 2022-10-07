<?php
/**
 * The template for displaying About pages
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
            <div class="relative w-full lg:w-7/12 bg-black bg-opacity-40 p-6 md:p-10 lg:p-16 text-center">
                <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none capitalize">
               who we are
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
<section class="py-10">
    <div class="cont flex flex-col justify-between py-16 lg:grid grid-cols-2 gap-8">
        <div class="flex flex-col justify-center gap-y-7">
            <div class="">
                <!-- <h2 class="mb-6 text-4xl md:text-5xl capitalize font-bold font-head tracking-tight text-red-400 sm:leading-none">
                    Manage Everything in Your Hand
                </h2> -->
                <p class="text-base text-gray md:text-base py-3 font-body">
                    Zenith pricision Ltd is a coding and marking company in Nigeria, incoporated in year 2007 and commence coding and marking business in 2012. it's goal is to be the preferred coding and marking solution provider delivering excellent customer experience as there are rules and regulations by various global and international laws, standard and guideline to provide essential product information.
                </p>
                <p class="text-base text-gray md:text-base py-3 font-body">
                    Coding and marking ensure traceability, safety and authencity of products, promote brand positivity, avoid counterfieting and provide regulatory requirement.
                </p>
                <p class="text-base text-gray md:text-base py-3 font-body">
                    Zenith precision mission is to provide world class coding and marking solution leveeaging technology to meet customers and stakeholders' expectations.
                </p>
                <p class="text-base text-gray md:text-base py-3 font-body">
                    Zenith precision existing clients are Nigerian Bottling Company, Dangote Sugar Refinery, Unilever Plc, Lafarge Cement, Juhel Pharmaceutical Enugu, BUA Sugar Refinery, Chi LImited, Ashaka Cement Gombe and Anochemical Cosmetics Limited Agbara.
                </p>
            </div>
        </div>
        <div class="slide-right flex justify-center items-center border border-1 p-5">
            <img src="http://test.zenithprecision.com.ng/Images/Zenith_logo+.png" class="w-auto h-80 object-scale-down" alt="" />
        </div>
    </div>
</section>
<!--  -->
<section class="py-10">
    <div class="max-w-wide mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-5">
            <div class="grid sm:grid-cols-2 md:flex md:flex-col gap-10">
                <div class="flex flex-col justify-center bg-gray-500 flex-grow p-8">
                    <h3 class="text-lg uppercase font-medium text-white">our vision</h3>
                    <div class="h-0.5 w-20 my-4 bg-red-600"></div>
                    <p class="text-base font-medium text-white">To be the prefered coding and marking solution provider delivering excellent customer experience</p>
                </div>
                <div class="flex flex-col justify-center bg-slate-500 flex-grow p-8">
                    <h3 class="text-lg uppercase font-medium text-white">our mission</h3>
                    <div class="h-0.5 w-20 my-4 bg-red-600"></div>
                    <p class="text-base font-medium text-white">To provide world class coding and marking solution leveraging technology and people to meet customers and stakeholders' expectations</p>
                </div>
               
            </div>
            <div class="p-8 flex flex-col">
                <h3 class="text-lg uppercase font-medium">our core values</h3>
                <div class="h-0.5 w-20 my-4 bg-red-600"></div>
                <p class="text-base pb-2"><span class="capitalize font-medium pr-2">creativity:</span>We help our realistic ideas that align with customer' and stakeholders' target</p>
                <p class="text-base py-2"><span class="capitalize font-medium pr-2">promptness:</span>Our products and services are rendered with the topmost precision and are time efficient</p>
                <p class="text-base py-2"><span class="capitalize font-medium pr-2">synergy:</span>Our passion is to work hand in hand with you to deliver desirable customer satisfaction</p>
                <p class="text-base py-2"><span class="capitalize font-medium pr-2">integrity:</span>We deliver products that are tested and built for specific purposes to meet our customer's needs</p>
                <p class="text-base py-2"><span class="capitalize font-medium pr-2">customers' delight:</span>Quality product with longevity is what we are dedicated to. We offer you the satisfaction that is beyond your expectations.</p>
                <p class="text-base pt-2">We provide value that ensures you reach your customers them referals with their relative testimonies</p>
            </div>

        </div>
    </div>
</section>
<!--  -->
    <?php get_template_part( 'template-parts/content/content', 'client' ); ?>
<!--  -->
    <?php get_template_part( 'template-parts/content/content', 'partner' ); ?>
<!--  -->
    <?php get_template_part( 'template-parts/content/content', 'cta' ); ?>
<!--  -->

<?php
get_footer(); ?>
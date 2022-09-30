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
    <img src="" alt="">
    <img src="https://test.zenithprecision.com.ng/Images/20973721_inkjet1_1600x1066.jpg" class="absolute inset-0 object-cover top w-full h-full"  alt="">
    <div class="relative bg-gray-900 bg-opacity-50">
        <div class="cont py-16 md:px-24 lg:px-8 lg:py-28">
        <div class="flex flex-col items-center justify-between">
            <div class="relative w-full mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 bg-black bg-opacity-40 p-16 text-center">
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
<section class="">
    <div class="cont flex flex-col justify-between py-8 xl:grid grid-cols-2 gap-4 md:px-8 md:py-16">
        <div class="flex flex-col justify-center lg:ml-7 gap-y-7">
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
        <div class="slide-right">
            <img src="http://test.zenithprecision.com.ng/Images/Zenith_logo+.png" class="object-cover object-top w-full h-auto mx-auto xl:mr-24 md:max-w-xl" alt="" />
        </div>
    </div>
</section>

<?php
get_footer(); ?>
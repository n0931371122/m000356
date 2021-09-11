<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>

</head>

<body>
    <div class="wp">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main class="main">
            <h1 class="hidden">生豐電力</h1>
            <div class="index-banner-section position-relative">
                <div class="swiper-container w-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="jqimgFill">
                                <img src="styles/images/index/banner-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jqimgFill">
                                <img src="styles/images/index/banner-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination font-18 text-white"></div>
                </div>
                <div class="text-block position-absolute z-1 w-100 point-event-none">
                    <div class="text-white max1600 mx-auto">
                        <span class="d-block font-28 les4 mb-1 mb-md-0" data-aos="fade-up">仰望未來．永續潔能．共融共生</span>
                        <p class="font-100 font-weight-bold position-relative les1 lh11 mb-0" data-aos="fade-up" data-aos-delay="100">
                            <span class="d-block d-md-inline">More than</span>
                            <span class="d-block d-md-inline">just energy </span>
                            <span class="d-block">Expert<span class="d-block d-md-inline position-md-absolute RAGE font-120 font-weight-normal lh1"><span class="font-160">S</span>ustainability</span></span>
                        </p>
                        <div class="down d-none d-md-flex flex-center font-20 w180 h180 rounded-circle border-white mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="200">
                            <i class="icon-down"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="index-content-section bg-white position-relative z-1 pt-5 pt-md-3 pt-xl-5 pb-5">
                <div class="pr-4">
                    <div class="max1701 pl-4">
                        <div class="row g-0 pt-md-5 mt-xl-3">
                            <div class="col-12 col-xl-7 pr-xxl-5 mb-4 mb-md-5 mb-xl-0 pb-lg-4 pb-xl-0" data-aos="fade-up">
                                <img class="w-100" src="styles/images/index/index-group.png" alt="">
                            </div>
                            <div class="col-12 col-xl-5 lh165 pl-xl-3">
                                <div class="pl-xl-4 ml-xl-3 pt-xxl-5 mt-xxl-5">
                                    <h2 class="font-120 font-weight-bold text-EFEFEF lh085 mb-3 mb-md-4 pb-lg-2" data-aos="fade-up">Sheng Feng Power</h2>
                                    <p class="font-36 font-weight-bold les5 mb-3 mb-md-4 pb-lg-3" data-aos="fade-up">
                                        <span class="d-block">永續潔能與環境友善，</span>
                                        <span class="d-block">在地深耕、活絡地方經濟</span>
                                    </p>
                                    <p class="font-20 les15 mb-lg-4 pb-lg-1" data-aos="fade-up">生豐電力秉信人文為本、環境為始，以生態與綠能共融共生為精神，透過綠能體驗、生態保護以及環境教育等機能的導入，打造區域獨特的太陽能光電產業園區。</p>
                                    <p class="font-20 les15 pb-2 pb-md-3 mb-lg-4" data-aos="fade-up">持環境友善工法、永續在地深耕並活絡地方經濟，期許為地方帶來不同的樣貌，提供在地觀光資源使得休憩空間得以持續發展，盼在地方觀光休閒產業發展無虞的前提下，生態與綠能和諧運作。</p>
                                    <a class="more flex-align-center flex-shrink-0" href="about" data-aos="fade-up">
                                        <span class="d-block font-weight-500 les1 py-md-2 pr-1">了解生豐電力</span>
                                        <span class="flex-center bg-00A1E0 rounded-circle ml-3">
                                            <i class="icon-plus text-white"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-works-block pl-lg-4 pt-5 mt-md-4">
                    <div class="max1701 ml-auto">
                        <div class="row g-0 pt-4 pt-md-5 mt-2 mt-md-0 mt-xl-5">
                            <div class="col-auto d-none d-lg-flex font-weight-500 les1 pr-xxl-5 mr-4 pt-5 mt-5">
                                <div class="mt-5 pt-3" data-aos="fade-up">
                                    <ul class="noneStyle font-18 pt-5">
                                        <li v-for="(item,index) in indexWorkData.categoryList" :class="[indexWorkData.selectedCategoryId==index?'active':'' , indexWorkData.categoryList.length-1==index?'d-none':'' , 'mb-4']" :key="index" @click="indexWorkData.selectedCategoryId=index">
                                            <div class="d-table rounded-30 cursor">{{item.name}}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col pl-0 pl-lg-3 pr-0">
                                <h2 class="font-160 font-weight-bold text-EFEFEF text-center text-lg-left lh07 mb-0" data-aos="fade-up">Our Works</h2>
                                <div class="works-box position-relative pl-4 pl-lg-5 pt-4 pt-md-5 pr-md-4 pr-lg-0">
                                    <div class="position-relative z-1 py-xl-3 pl-xxl-5 ml-xl-3 pt-1 pt-md-0 pt-lg-4 mt-3">
                                        <div class="text-center text-md-left pr-lg-4">
                                            <h3 class="font-36 font-weight-bold les1 mb-2 mb-md-3 mb-lg-4" data-aos="fade-up">專案介紹</h3>
                                            <div class="d-block d-lg-flex flex-justify-space-between max1234">
                                                <p class="font-20 lh18 pr-md-4 mb-4 mb-lg-0 pb-1 pb-md-0" data-aos="fade-up">
                                                    <span class="d-md-block">我們透過綠能體驗、生態保護以及環境教育等機能的導入，</span>
                                                    <span class="d-md-block">打造區域獨特的太陽能光電產業園區。</span>
                                                </p>
                                                <div class="d-block d-lg-none overflow-x-auto pb-2" data-aos="fade-up">
                                                    <ul class="noneStyle d-flex les1">
                                                        <li v-for="(item,index) in indexWorkData.categoryList" :class="[indexWorkData.selectedCategoryId==index?'active':'' , 'flex-shrink-0 mx-1']" :key="index" @click="indexWorkData.selectedCategoryId=index">
                                                            <div class="rounded-50 cursor">{{item.name}}</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="more d-none d-lg-flex flex-align-center flex-shrink-0" href="works" data-aos="fade-up">
                                                    <span class="d-block font-weight-500 les1 py-md-2 pr-1">了解更多訊息</span>
                                                    <span class="flex-center bg-00A1E0 rounded-circle ml-3">
                                                        <i class="icon-plus text-white"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-container mt-4 mt-md-5 pt-2 pt-md-0 pt-lg-4 pb-xl-5 mb-xl-5 pr-4 pr-md-0" data-aos="fade-up">
                                            <swiper class="pb-4 mb-2 mb-lg-0" ref="workSwiper" :options="indexWorkData.swiperOptions">
                                                <swiper-slide v-for="(item, index) in indexWorkData.tempIndexWorkList" :key="index">
                                                    <a class="workItem d-block position-relative z-1 py-xl-3" href="work">
                                                        <span class="d-block rounded-15 overflow-hidden">
                                                            <span class="d-block position-relative">
                                                                <span class="jqimgFill d-block">
                                                                    <img :src="item.img" :alt="item.alt">
                                                                </span>
                                                                <span class="dec-circle d-none d-xl-flex position-absolute flex-center text-white rounded-circle w100 h100">
                                                                    <img class="w20" src="styles/images/index/arrow.svg" alt="生豐電力">
                                                                </span>
                                                            </span>
                                                            <span class="d-block bg-white position-relative p-3 p-md-4">
                                                                <span class="d-block py-1 px-xl-2">
                                                                    <span class="d-block mb-3 pb-md-1">
                                                                        <span class="tag d-inline-block font-15 font-weight-500 text-white bg-AED47F border-AED47F rounded-50 les1 py-1 px-2 mr-1">
                                                                            <span class="mx-1">{{item.category}}</span>
                                                                        </span>
                                                                        <span class="tag d-inline-block font-15 font-weight-500 text-AED47F bg-white border-AED47F rounded-50 les1 py-1 px-2 mx-md-1">
                                                                            <span class="mx-1">{{item.subCategory}}</span>
                                                                        </span>
                                                                        <span class="font-18 font-weight-bold text-9CC1C1 ml-1 ml-md-2">{{item.date}}</span>
                                                                    </span>
                                                                    <span class="title font-24 font-weight-bold lh16 les1 line2 mb-2 mb-md-3">{{item.title}}</span>
                                                                    <span class="content lh18 les1 line2 mb-2 mb-md-4">{{item.content}}</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </swiper-slide>
                                            </swiper>
                                            <div class="d-xl-none swiper-pagination font-18 text-white mx-2"></div>
                                            <a class="d-table d-md-none font-14 bg-00A1E0 text-white rounded-50 py-2 px-5 mx-auto mt-5" href="works">
                                                <span class="flex-align-center my-1 mx-2 px-1">
                                                    了解更多
                                                    <i class="icon-plus font-12 ml-2 pl-1"></i>
                                                </span>
                                            </a>
                                            <div class="d-none d-xl-block bar-inner">
                                                <div class="bar" :style="{width:indexWorkData.worksBarWidth+'px',transform:'translateX('+indexWorkData.worksBarTransform+'px)'}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-environment-block px-4 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="max1500 mx-auto pt-5 mt-5 pr-xl-5">
                        <div class="d-block d-md-flex text-center flex-justify-space-between flex-align-end pr-xl-5 mb-3 mb-lg-4 pb-xl-3 mr-xl-5">
                            <h2 class="font-160 font-weight-bold text-EFEFEF lh07 mb-0" data-aos="fade-up">Environment</h2>
                            <a class="more d-none d-md-flex flex-align-center flex-shrink-0" href="environment" data-aos="fade-up">
                                <span class="d-block font-weight-500 les1 py-md-2 pr-1">了解更多</span>
                                <span class="flex-center bg-00A1E0 rounded-circle ml-3">
                                    <i class="icon-plus text-white"></i>
                                </span>
                            </a>
                        </div>
                        <span class="d-block font-36 font-weight-bold text-center text-md-left les1" data-aos="fade-up">環境保護</span>
                        <div class="swiper-container mt-1 mt-md-1 pt-4 py-md-4 py-md-5 mt-xl-5" data-aos="fade-up">
                            <div class="swiper-wrapper d-block d-md-flex">
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-3.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-3-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-2.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-2-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-2.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-2-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-3.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-3-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="environmentItem position-relative bg-white border-E5E5E5">
                                        <div class="position-relative z-1">
                                            <h3 class="hidden">2021年 環境監測報告資料</h3>
                                            <a class="d-block px-4 px-xxl-5 py-4 pt-xl-5" href="demo.pdf" target="_blank">
                                                <span class="d-block mt-1 mt-md-0 pt-2 pt-md-0 pb-md-2 mb-1">
                                                    <span class="d-block font-24 font-weight-bold line1 mb-1">2021年 環境監測報告資料</span>
                                                    <span class="d-block line1 pb-3 mb-md-1">2021年第2季環境監測報告資料說明</span>
                                                    <span class="icon flex-center position-relative mt-3 mt-md-4 ml-auto">
                                                        <img class="w-100" src="styles/images/environment/icon-1.svg" alt="">
                                                        <img class="absolute-center w-100" src="styles/images/environment/icon-1-hover.svg" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="download position-absolute d-table text-707070 bg-F2F2F3 rounded-50 lh165 py-2 px-2 px-md-3" href="demo.pdf" download>
                                                <span class="d-block mx-2 mx-md-1">Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 mt-3">
                                <div class="position-relative d-none d-md-flex d-xl-none flex-center mt-lg-4">
                                    <div class="swiper-pagination font-18 text-white mx-2"></div>
                                </div>
                                <div class="d-none d-xl-block bar-inner mt-5">
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>
                        <a class="d-table d-md-none font-14 bg-00A1E0 text-white rounded-50 py-2 px-5 mx-auto" href="environment" data-aos="fade-up">
                            <span class="flex-align-center my-1 mx-2 px-1">
                                了解更多
                                <i class="icon-plus font-12 ml-2 pl-1"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="index-news-section position-relative pb-lg-5 pb-xl-0">
                    <div class="pl-lg-4 mt-3 mt-md-0 pt-lg-5">
                        <div class="max1701 ml-auto pt-xl-5 mt-4">
                            <span class="d-block d-md-none font-160 font-weight-bold text-center lh07 text-EFEFEF">News</span>
                            <div class="row g-0 pt-md-2">
                                <div class="col-12 col-lg-auto pl-4 pl-lg-0 pb-4 pb-lg-0 pr-xxl-5 mr-xl-4 pt-4 pt-md-5 mt-md-4" data-aos="fade-up">
                                    <div class="les1 pr-xl-5 mr-xxl-5 pt-3 pt-md-2">
                                        <h2 class="hidden">news</h2>
                                        <span class="d-block font-36 font-weight-bold text-center text-md-left mb-4 mb-lg-1">最新消息</span>
                                        <div class="d-none d-lg-block">
                                            <ul class="noneStyle font-18 pt-5 pb-3">
                                                <li class="mb-4 active">
                                                    <div class="d-table rounded-30 cursor" onClick="ajaxNews()">全部消息</div>
                                                </li>
                                                <li class="mb-4">
                                                    <div class="d-table rounded-30 cursor" onClick="ajaxNews()">最新消息</div>
                                                </li>
                                                <li class="mb-4">
                                                    <div class="d-table rounded-30 cursor" onClick="ajaxNews()">知識訊息</div>
                                                </li>
                                            </ul>
                                            <a class="more d-none d-lg-flex flex-align-center flex-shrink-0" href="news">
                                                <span class="d-block font-weight-500 les1 py-md-2 pr-1">了解更多訊息</span>
                                                <span class="flex-center bg-00A1E0 rounded-circle ml-3">
                                                    <i class="icon-plus text-white"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="d-block d-lg-none overflow-x-auto pb-3 pb-md-2">
                                            <ul class="noneStyle d-flex les1">
                                                <li class="flex-shrink-0 mx-1 active">
                                                    <div class="rounded-50 cursor" onClick="ajaxNews()">全部消息</div>
                                                </li>
                                                <li class="flex-shrink-0 mx-1">
                                                    <div class="rounded-50 cursor" onClick="ajaxNews()">最新消息</div>
                                                </li>
                                                <li class="flex-shrink-0 mx-1">
                                                    <div class="rounded-50 cursor" onClick="ajaxNews()">知識訊息</div>
                                                </li>
                                                <li class="flex-shrink-0 mx-1">
                                                    <div class="rounded-50 cursor" onClick="ajaxNews()">其他分類</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col pl-4 pr-4 pr-lg-3 pt-3 pt-md-0">
                                    <div class="bg-white news-block pr-lg-4 pr-xl-5 pl-lg-4 pl-lg-5 py-lg-5">
                                        <ul class="newsItems noneStyle pl-xxl-5 py-xl-3 ml-xl-3 mr-xl-4">
                                            <li class="newItem" data-aos="fade-up">
                                                <h3 class="hidden">地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任</h3>
                                                <a class="d-flex position-relative py-4 my-1 my-md-0" href="new">
                                                    <span class="d-block py-xl-2 my-xl-1">
                                                        <span class="d-block jqimgFill rounded-5" data-aos="flip-right">
                                                            <img src="styles/images/news/1.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="d-block pl-md-3 pl-lg-4 ml-xl-3 pt-md-3 mt-xl-1 pl-3 pl-md-0">
                                                        <span class="d-block mb-2 mb-md-3 mt-md-2 pb-1 pb-md-0">
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-white bg-7FBCD4 border-7FBCD4 rounded-50 les1 py-1 px-2 mr-1">
                                                                <span class="mx-md-1">新聞發佈</span>
                                                            </span>
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-7FBCD4 bg-white border-7FBCD4 rounded-50 les1 py-1 px-2 mx-md-1">
                                                                <span class="mx-md-1">次分類1</span>
                                                            </span>
                                                            <span class="date font-18 font-weight-bold text-9CB7C1 ml-md-2"> 2021.06.20</span>
                                                        </span>
                                                        <span class="title font-22 font-weight-bold line2 lh165 les1 mb-3 mb-md-0">地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任</span>
                                                    </span>
                                                    <span class="dec-circle d-none d-xl-flex position-absolute flex-center text-white rounded-circle bg-00A1E0 w100 h100">
                                                        <img class="w20" src="styles/images/index/arrow.svg" alt="">
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="newItem" data-aos="fade-up">
                                                <h3 class="hidden">產學合作，結合綠林保留區、滯洪池等保育空間，打造兼顧生態與綠能的太陽光電基地</h3>
                                                <a class="d-flex position-relative py-4 my-1 my-md-0" href="new">
                                                    <span class="d-block py-xl-2 my-xl-1">
                                                        <span class="d-block jqimgFill rounded-5" data-aos="flip-right">
                                                            <img src="styles/images/news/2.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="d-block pl-md-3 pl-lg-4 ml-xl-3 pt-md-3 mt-xl-1 pl-3 pl-md-0">
                                                        <span class="d-block mb-2 mb-md-3 mt-md-2 pb-1 pb-md-0">
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-white bg-7FBCD4 border-7FBCD4 rounded-50 les1 py-1 px-2 mr-1">
                                                                <span class="mx-md-1">知識訊息</span>
                                                            </span>
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-7FBCD4 bg-white border-7FBCD4 rounded-50 les1 py-1 px-2 mx-md-1">
                                                                <span class="mx-md-1">次分類2</span>
                                                            </span>
                                                            <span class="date font-18 font-weight-bold text-9CB7C1 ml-md-2"> 2021.06.20</span>
                                                        </span>
                                                        <span class="title font-22 font-weight-bold line2 lh165 les1 mb-3 mb-md-0">產學合作，結合綠林保留區、滯洪池等保育空間，打造兼顧生態與綠能的太陽光電基地</span>
                                                    </span>
                                                    <span class="dec-circle d-none d-xl-flex position-absolute flex-center text-white rounded-circle bg-00A1E0 w100 h100">
                                                        <img class="w20" src="styles/images/index/arrow.svg" alt="">
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="newItem" data-aos="fade-up">
                                                <h3 class="hidden">地方活動 — 綠色能源成為社區助力 打造共存共融的「綠能文資場域」為目標</h3>
                                                <a class="d-flex position-relative py-4 my-1 my-md-0" href="new">
                                                    <span class="d-block py-xl-2 my-xl-1">
                                                        <span class="d-block jqimgFill rounded-5" data-aos="flip-right">
                                                            <img src="styles/images/news/3.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="d-block pl-md-3 pl-lg-4 ml-xl-3 pt-md-3 mt-xl-1 pl-3 pl-md-0">
                                                        <span class="d-block mb-2 mb-md-3 mt-md-2 pb-1 pb-md-0">
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-white bg-7FBCD4 border-7FBCD4 rounded-50 les1 py-1 px-2 mr-1">
                                                                <span class="mx-md-1">新聞發佈</span>
                                                            </span>
                                                            <span class="tag d-inline-block font-15 font-weight-500 text-7FBCD4 bg-white border-7FBCD4 rounded-50 les1 py-1 px-2 mx-md-1">
                                                                <span class="mx-md-1">次分類3</span>
                                                            </span>
                                                            <span class="date font-18 font-weight-bold text-9CB7C1 ml-md-2"> 2021.06.20</span>
                                                        </span>
                                                        <span class="title font-22 font-weight-bold line2 lh165 les1 mb-3 mb-md-0">地方活動 — 綠色能源成為社區助力 打造共存共融的「綠能文資場域」為目標</span>
                                                    </span>
                                                    <span class="dec-circle d-none d-xl-flex position-absolute flex-center text-white rounded-circle bg-00A1E0 w100 h100">
                                                        <img class="w20" src="styles/images/index/arrow.svg" alt="">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a class="d-table d-md-none font-14 bg-00A1E0 text-white rounded-50 py-2 px-5 mx-auto mt-5" href="news">
                                <span class="flex-align-center my-1 mx-2 px-1">
                                    了解更多
                                    <i class="icon-plus font-12 ml-2 pl-1"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="dec d-none d-lg-flex flex-align-end">
                        <span class="font-190 text-white font-weight-bold lh07 pl-5 ml-3">News</span>
                    </div>
                </div>
                <div class="index-contact-section text-center px-4 py-5 mt-lg-5 mb-2 mb-md-4 mt-5 mt-md-0">
                    <div class="max1600 position-relative w-100 mx-auto pt-lg-4 mt-lg-3">
                        <div class="d-block d-lg-flex flex-justify-space-between flex-align-center mb-4 mb-lg-0 pr-xl-4">
                            <h2 class="font-160 font-weight-bold text-EFEFEF lh07 mb-3 mb-lg-0 pl-xl-5" data-aos="fade-up">Contact</h2>
                            <span class="d-block d-md-flex flex-center font-36 font-weight-bold notoSansTC les1 pr-xxl-5 mr-xl-5" data-aos="fade-up">
                                <span class="d-block d-md-flex flex-align-center">生豐電力<span class="font-20 mx-2">‧</span>潔淨能源<span class="font-20 ml-2 mx-md-2">‧</span></span>
                                <span class="d-block">守護家園</span>
                            </span>
                        </div>
                        <div data-aos="fade-up">
                            <a href="contact" class="d-block position-relative overflow-hidden rounded-30">
                                <span class="d-block jqimgFill">
                                    <img src="styles/images/index/contact.jpg" alt="">
                                </span>
                                <span class="d-block text absolute-center max600 w-100">
                                    <span class="d-block pb-3 pb-lg-4 mb-xl-2">
                                        <img class="logo" src="styles/images/index/contact-logo.svg" alt="">
                                    </span>
                                    <span class="d-block border-top-white text-white pt-3 pt-lg-4">
                                        <span class="font-28 font-weight-light les3">永續經營的綠能建置平台</span>
                                    </span>
                                </span>
                            </a>
                            <a class="arrow flex-center position-absolute text-white h100 w100 bg-00A1E0 rounded-circle" href="contact">
                                <img class="w20" src="styles/images/index/arrow.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
    <script src="scripts/plugins/vue-awesome-swiper.js"></script>
    <script>
        let indexWorkList = [{
                categoryId: 1,
                img: "styles/images/works/1.jpg",
                alt: "圖片說明",
                category: "案場資訊",
                subCategory: "次分類1",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 2,
                img: "styles/images/works/2.jpg",
                alt: "圖片說明",
                category: "案場資訊",
                subCategory: "次分類2",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 1,
                img: "styles/images/works/3.jpg",
                alt: "圖片說明",
                category: "案場資訊",
                subCategory: "次分類3",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 2,
                img: "styles/images/works/1.jpg",
                alt: "圖片說明",
                category: "專案介紹",
                subCategory: "次分類1",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 3,
                img: "styles/images/works/2.jpg",
                alt: "圖片說明",
                category: "專案介紹",
                subCategory: "次分類2",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 1,
                img: "styles/images/works/3.jpg",
                alt: "圖片說明",
                category: "專案介紹",
                subCategory: "次分類3",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 1,
                img: "styles/images/works/2.jpg",
                alt: "圖片說明",
                category: "專案介紹",
                subCategory: "次分類2",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
            {
                categoryId: 1,
                img: "styles/images/works/3.jpg",
                alt: "圖片說明",
                category: "專案介紹",
                subCategory: "次分類3",
                date: "2021.06.20",
                title: "綠色能源成為社區助力，環境友善工法，永續在地深耕",
                content: "地方活動 — 綠色能源成為社區助力 深耕在地 落實企業社會責任"
            },
        ]
        let categoryList = [{
                id: 0,
                name: "全部類型"
            },
            {
                id: 1,
                name: "專案介紹"
            },
            {
                id: 2,
                name: "專案介紹"
            },
            {
                id: 3,
                name: "其他分類"
            },
        ]
    </script>
    <script src="scripts/default/index.js"></script>
</body>

</html>
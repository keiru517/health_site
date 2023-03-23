<template>
    <div class="banner-wrapper-swf" :style="slide1Img()">
        <div class="w-full flex flex-col md:flex-row-reverse pt-8">
            <div id="rightTop" class="pt-4 flex">
                <div class="w-full"></div>
                <div class="text-right w-[85%] md:w-full">
                    <div class="inner-flag bg-secondary py-2 md:pl-12">
                        <p class="mr-4 font-bold">$0 To START</p>
                        <p class="mr-4 font-bold">COMPLIMENTARY</p>
                        <p class="mr-4 font-bold">FITNESS GOAL</p>
                        <p class="mr-4 font-bold">SESSION WITH</p>
                        <p class="mr-4 font-bold">FIT3D SCAN!</p>
                    </div>
                </div>
            </div>
            <div
                id="leftBottom"
                class="pt-18 flex flex-col pl-4 md:pl-12 md:w-full mt-[15%]"
            >
                <div class="big-ol-copy-box text-left">
                    <div class="inner-copy-box">
                        <div class="lg-copy-box">
                            <p class="font-black text-6xl md:text-7xl">THE</p>
                            <p
                                class="font-black text-6xl text-secondary md:text-7xl"
                            >
                                RECOMMIT
                            </p>
                        </div>
                        <div class="copy-divider py-2"></div>
                        <div class="sm-copy-box pt-4">
                            <span class="text-2xl text-black md:text-white"
                                >RESET RECHARGE</span
                            ><br />
                            <span class="text-2xl text-black md:text-white"
                                >YOUR SAFETY IS OUR #1 PRIORITY</span
                            >
                        </div>
                    </div>
                </div>

                <div class="outer-button-panel text-left">
                    <div class="inner-button-panel w-full">
                        <div
                            class="button-panel flex flex-col md:flex-row pt-4"
                        >
                            <div class="button-wrapper">
                                <button
                                    type="button"
                                    id="joinButton"
                                    class="btn btn-secondary hover:btn-black w-[80%] md:w-full rounded-[0px] text-xl tracking-wider h-[5.25rem]"
                                    onclick="window.location.href = '/locations'"
                                    tabindex="-1"
                                >
                                    Enroll Now
                                </button>
                            </div>
                            <div
                                class="button-wrapper alt pt-4 md:pt-0 md:pl-8"
                            >
                                <button
                                    type="button"
                                    id="learnButton"
                                    class="btn hover:btn-secondary w-[80%] md:w-full rounded-[0px] text-xl tracking-wider h-[5.25rem]"
                                    onclick="window.location.href = '/free-pass'"
                                    tabindex="-1"
                                >
                                    <p class="p-2">
                                        3 Day Complimentary Membership
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CarouselSlide1",
    methods: {
        slide1Img() {
            let n = this.$page.props.homeCarouselBGs.CarouselSlide1;
            let m = this.$page.props.homeCarouselBGs.CarouselSlide1Mobile;

            return {
                "--slideOneImg": n,
                "--slideOneImgMobile": m,
            };
        },
    },
};
</script>

<style scoped>
@media screen and (max-width: 1023px) {
    .banner-wrapper-swf {
        background-image: var(--slideOneImgMobile);
    }
}

@media screen and (min-width: 1024px) {
    .banner-wrapper-swf {
        background-image: var(--slideOneImg);
    }
}

.banner-wrapper-swf {
    background-size: cover;
    display: grid;
    grid-template-columns: auto;
    grid-auto-rows: 11% auto;
    padding-top: 3em;
    height: 48em;
    width: 100%;
    background-position-x: 40%;
}

.copy-divider {
    border-bottom: 2px solid #fff;
    width: 7.5%;
}
</style>

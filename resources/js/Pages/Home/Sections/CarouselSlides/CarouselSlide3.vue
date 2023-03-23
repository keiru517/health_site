<template>
    <div id="MustLoveClubs" class="banner-wrapper-s" :style="slide3Img()">
        <div class="w-full flex flex-col md:flex-row-reverse pt-8">
            <div
                id="leftBottom"
                class="pt-18 flex flex-col pl-4 md:pl-12 md:w-full mt-[15%]"
            >
                <div class="big-ol-copy-box text-left">
                    <div class="inner-copy-box">
                        <div class="lg-copy-box">
                            <p class="pb-2">
                                <span
                                    class="font-black text-6xl text-secondary md:text-7xl"
                                    >THE</span
                                ><span
                                    class="font-black text-2xl text-white md:text-3xl"
                                >
                                    DESTINATION FOR</span
                                >
                            </p>
                            <p>
                                <span class="font-black text-5xl md:text-6xl"
                                    >FAMILY SUMMER FUN</span
                                >
                            </p>
                        </div>
                        <div class="sm-copy-box2"></div>
                        <div class="copy-divider py-4"></div>
                        <div class="sm-copy-box pt-8">
                            <p>
                                <span class="text-4xl text-white">
                                    POOLS, THE KIDS CLUB, CAMPS &amp;
                                    MORE!</span
                                >
                            </p>
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
                                    <p class="pt-2">
                                        3 DAY COMPLIMENTARY MEMBERSHIP
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
    name: "CarouselSlide3",
    methods: {
        slide3Img() {
            let n = this.$page.props.homeCarouselBGs.CarouselSlide3;
            let m = this.$page.props.homeCarouselBGs.CarouselSlide3Mobile;

            return {
                "--slideThreeImg": n,
                "--slideThreeImgMobile": m,
            };
        },
    },
};
</script>

<style scoped>
@media screen and (max-width: 1023px) {
    .banner-wrapper-s {
        background-image: var(--slideThreeImgMobile);
    }
}

@media screen and (min-width: 1024px) {
    .banner-wrapper-s {
        background-image: var(--slideThreeImg);
    }
}

.banner-wrapper-s {
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

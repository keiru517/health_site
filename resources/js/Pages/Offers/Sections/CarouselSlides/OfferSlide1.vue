<template>
    <div class="banner-wrapper-swf" :style="slide1Img()">
        <div class="w-full flex flex-col md:flex-row-reverse pt-8">
            <div
                id="leftBottom"
                class="pt-18 flex flex-col pl-4 md:pl-12 md:w-full mt-[5%]"
            >
                <div class="big-ol-copy-box text-left">
                    <div class="inner-copy-box">
                        <div class="lg-copy-box pb-4">
                            <p class="font-black text-5xl md:text-6xl">
                                THE <span class="commit-border">RECOMMIT</span>
                            </p>
                        </div>
                        <div class="sm-copy-box pt-8">
                            <span
                                class="text-3xl text-black md:text-white uppercase"
                                >$0 to start <sup>*</sup></span
                            ><br />
                            <p class="text-sm pt-4 text-black md:text-white">
                                * THE Zircon Membership Only
                            </p>
                            <p
                                class="text-4xl pt-2 text-black md:text-white uppercase"
                            >
                                Complimentary
                                <span class="font-black">Fitness</span>
                            </p>
                            <p
                                class="text-4xl pt-2 text-black md:text-white uppercase"
                            >
                                <span class="font-black">Goal Session</span>
                                With <span class="font-black">FIT3D</span>
                            </p>
                            <p
                                class="text-4xl pt-2 text-black md:text-white uppercase"
                            >
                                <span class="font-black">Scan</span>($140
                                Value)!*
                            </p>
                            <p class="text-sm pt-12 text-black md:text-white">
                                * Dues start 10 Days Post Enrollment
                            </p>
                            <p
                                class="text-sm text-black md:text-white uppercase"
                            >
                                May Expire Without Notice
                            </p>
                        </div>
                    </div>
                </div>

                <div class="outer-button-panel text-left pl-4 pt-4">
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

.commit-border {
    border-bottom: 10px solid #35a2fe;
}
</style>

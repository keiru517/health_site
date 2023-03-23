<template>
    <div id="THENewClubs" class="banner-wrapper-s" :style="slide2Img()">
        <div class="w-full flex flex-col md:flex-row-reverse pt-8">
            <div
                id="leftBottom"
                class="pt-18 flex flex-col pl-4 md:pl-12 md:w-full mt-[15%] md:mt-[10%]"
            >
                <div class="big-ol-copy-box text-left">
                    <div class="inner-copy-box">
                        <div class="lg-copy-box">
                            <p>
                                <span
                                    class="font-black text-6xl text-secondary md:text-7xl"
                                    >THE</span
                                >
                            </p>
                            <p class="font-black text-6xl md:text-7xl">
                                NEW CLUBS
                            </p>
                        </div>
                        <div class="sm-copy-box2 pt-8">
                            <p class="text-2xl md:text-white">
                                BE READY TO BE WOWED!<br />4 CLUBS DONE - 3 MORE
                                TO GO
                            </p>
                        </div>
                        <div class="copy-divider py-4"></div>
                        <div class="sm-copy-box text-2xl md:text-white pt-8">
                            <p class="uppercase">Over $4 Million invested</p>
                            <p class="uppercase">in your fitness experience!</p>
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
                                    onclick="window.location.href = '/remodel'"
                                    tabindex="-1"
                                >
                                    View Remodels
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
    name: "CarouselSlide2",
    methods: {
        slide2Img() {
            let n = this.$page.props.homeCarouselBGs.CarouselSlide2;
            let m = this.$page.props.homeCarouselBGs.CarouselSlide2Mobile;

            return {
                "--slideTwoImg": n,
                "--slideTwoImgMobile": m,
            };
        },
    },
};
</script>

<style scoped>
@media screen and (max-width: 1023px) {
    .banner-wrapper-s {
        background-image: var(--slideTwoImgMobile);
    }
}

@media screen and (min-width: 1024px) {
    .banner-wrapper-s {
        background-image: var(--slideTwoImg);
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

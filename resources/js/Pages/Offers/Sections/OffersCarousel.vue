<template>
    <div class="w-full h-screen">
        <Carousel :autoplay="200000" :wrap-around="true">
            <Slide v-for="(details, slide) in slideComponents" :key="slide">
                <div class="carousel__item">
                    <component :is="slide"></component>
                </div>
            </Slide>

            <template #addons>
                <Pagination />
            </template>
        </Carousel>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

import CarouselSlide1 from "@/Pages/Offers/Sections/CarouselSlides/OfferSlide1";

export default {
    name: "OffersCarousel",
    props: ["slideComponents"],
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,

        CarouselSlide1,
    },

    data() {
        return {};
    },
};
</script>

<style>
.carousel {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.carousel__viewport {
    height: 100%;
    width: 100%;
}

.carousel__track {
    height: 100%;
    width: 100%;
}

.carousel__item {
    height: 100%;
    width: 100%;
    background-color: transparent;
    color: var(--vc-clr-white);
    font-size: 20px;
    border-radius: 8px;
    display: flex;
}

.carousel__slide {
    padding: 0px;
    height: 100%;
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    border: 5px solid white;
}

.carousel__pagination {
    position: absolute;
    top: 95%;
}
</style>

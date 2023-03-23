<template>
    <default-layout :show-prefooter="prefooter">
        <template #layoutExtraHead>
            <carousel :slide-components="slideComponents"></carousel>
        </template>

        <template v-slot:content>
            <div class="bg-slate-600">
                <div
                    id="salesPoints"
                    class="max-w-4xl px-4 py-8 mx-auto sm:py-32 sm:px-6 lg:px-8"
                >
                    <div id="detailsWrapper" class="w-full">
                        <div class="section-heading text-center w-full">
                            <h1 class="text-black text-5xl">
                                WHAT MAKES US DIFFERENT
                            </h1>
                            <h4 class="text-black pt-2 pb-8">
                                LEARN MORE ABOUT <br class="md:hidden" />
                                THE ATHLETIC CLUB
                                <a href="/about"
                                    ><i
                                        class="las la-arrow-alt-circle-right text-primary text-2xl"
                                    ></i
                                ></a>
                            </h4>
                        </div>

                        <div id="detailsGrid" class="pt-4">
                            <div
                                id="details"
                                class="sm:flex justify-between gap-x-20"
                            >
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i
                                            class="las la-users text-5xl text-secondary"
                                        ></i>
                                        <h2 class="mt-2 uppercase text-2xl">
                                            A PLACE FOR <br />
                                            FAMILIES
                                        </h2>
                                        <p class="pt-4">
                                            Our mission is to meet the health
                                            and fitness goals of our members and
                                            guests in an environment that is
                                            friendly, clean, welcoming and
                                            enjoyable for all ages.
                                        </p>
                                    </div>
                                </div>
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i
                                            class="las la-book-dead text-5xl text-secondary"
                                        ></i>
                                        <h2 class="mt-2 uppercase text-2xl">
                                            WHO WE ARE <br /><br />
                                        </h2>
                                        <p class="pt-4">
                                            We provide a high-level luxury
                                            health club experience to our
                                            members and guests, integrating
                                            cutting edge technology, the best
                                            equipment and impeccable customer
                                            service.
                                        </p>
                                    </div>
                                </div>
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i
                                            class="las la-trophy text-5xl text-secondary"
                                        ></i>
                                        <h2
                                            class="mt-2 uppercase text-2xl w-64"
                                        >
                                            SUPERIOR QUALITY, <br />
                                            SUPERIOR VALUE
                                        </h2>
                                        <p class="pt-4">
                                            We are strongly committed to
                                            providing services for and actively
                                            engaging our members in programs and
                                            activities for all ages and ability
                                            levels.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-20 bg-slate-600">
                <div id="callToAction" class="">
                    <div id="galleryWrapper ">
                        <div
                            class="section-heading text-center pb-4 max-w-5xl mx-auto"
                        >
                            <h1 class="text-5xl">
                                COMMITTED TO A CUTTING EDGE, INNOVATIVE
                                EXPERIENCE
                            </h1>
                        </div>

                        <div id="mediaWrapper" class="embed-container w-full">
                            <iframe
                                class="video w-full object-fit"
                                width="800"
                                height="700"
                                src="https://www.youtube-nocookie.com/embed/VBm3UoxThrQ"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen="allowfullscreen"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </default-layout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";
import Carousel from "@/Pages/Home/Sections/HomeCarousel";

export default {
    name: "HomePage",
    components: {
        Carousel,
        DefaultLayout,
    },
    props: ["prefooter"],
    data() {
        return {
            slideComponents: {
                CarouselSlide1: {},
                CarouselSlide2: {},
                CarouselSlide3: {},
            },
        };
    },
    mounted() {},
};
</script>

<style scoped></style>

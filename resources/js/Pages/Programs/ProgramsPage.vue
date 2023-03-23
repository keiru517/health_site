<template>
    <default-layout :show-prefooter="prefooter">
        <template #content>
            <div
                id="content"
                class="bg-slate-500 pt-[25%] md:pt-[10%] pb-12 md:pb-32"
            >
                <div class="section-heading text-center pt-8 pb-12">
                    <h1 class="text-6xl">PROGRAMS &amp; SERVICES</h1>
                    <p></p>
                </div>

                <div id="segmentWrapper" class="mx-16 md:px-32">
                    <div
                        class="segment-row row-left flex flex-col md:flex-row my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img1"
                                class="w-full object-fill"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto md:ml-8">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left pt-4 md:pt-0"
                            >
                                There's something <br />
                                for everyone
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                We are one of the nation's leading operators of
                                upscale health and fitness clubs. We have nine
                                facilities in four states. We take great pride
                                in all of our clubs. Each offers the latest
                                fitness equipment and programs. What really
                                makes us different is our professional,
                                member-oriented staff. It's our job to do
                                whatever we can to help our members improve the
                                quality of their life through fitness,
                                recreation, and fun.
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-right flex flex-col md:flex-row-reverse my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img2"
                                class="img-img row-img-right"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                Group Training
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                We welcome you to the TAC Group Fitness Program
                                and look forward to helping you reach your
                                goals. We offer all of the best classes
                                including, Kickboxing, Crunch, Combo, Toning,
                                Step, Weights, Yoga, Dancing, Mat Pilates and
                                More! Everything you need to get in shape and
                                stay fit.
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-left flex flex-col md:flex-row my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img3"
                                class="img-img row-img-left"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto md:ml-8">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                One-on-One Training
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                The Athletic Club wants every member to be
                                successful in his or her quest to reach personal
                                fitness goals. No matter what your fitness
                                goals, we can design a program that is safe,
                                effective and will fit into your busy schedule.
                                Don't wait. Give us a call and let us help you
                                feel and look your best.
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-right flex flex-col md:flex-row-reverse my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img4"
                                class="img-img row-img-right"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                Group Cycling
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                Cycling is simple, fun and easy to learn! It is
                                both an aerobic and anaerobic workout performed
                                on a stationary bicycle. Cycling is for everyone
                                - at any age, at every level of fitness. Whether
                                you are a beginner or an elite athlete, you can
                                both start at the same place, and you can both
                                successfully complete your cycling journey
                                together.
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-left flex flex-col md:flex-row my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img5"
                                class="img-img row-img-left"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto md:ml-8">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                Physical Therapy
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                Physical Therapy is available at the following
                                TAC locations. For more information about the
                                services they provide or to set up an
                                appointment, please call your local club.
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-right flex flex-col md:flex-row-reverse my-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img6"
                                class="img-img row-img-right"
                                alt="Program Image"
                            />
                        </div>

                        <div class="verbiage-wrapper w-full my-auto">
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                Massage Services
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                The Athletic Club massage therapist offer many
                                different massage options to fit your needs.
                            </p>
                            <p>
                                Massage therapy is available 7 days a week by
                                appointment. Nonmembers are welcome!
                            </p>
                        </div>
                    </div>
                    <div
                        class="segment-row row-left flex flex-col md:flex-row mt-8"
                    >
                        <div class="media-wrapper w-full">
                            <img
                                :src="images.img7"
                                class="img-img row-img-left"
                                alt="Program Image"
                            />
                        </div>

                        <div
                            class="verbiage-wrapper w-full my-auto md:ml-8 pb-12"
                        >
                            <h2
                                class="text-4xl font-bold uppercase tracking-wider text-center md:text-left"
                            >
                                Tanning
                            </h2>
                            <p class="pt-4 text-center md:text-left">
                                Personal tanning beds at The Athletic Club, you
                                can achieve an all-over tan morning, noon or
                                night - seven days a week - in the complete
                                privacy of our individual tanning booths. Simply
                                stop by the Front Desk. Our staff can help you
                                plan sessions to fit your schedule and show you
                                how to develop a deep, lasting tan.
                            </p>
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
export default {
    name: "ProgramsPage",
    components: {
        DefaultLayout,
    },
    props: ["prefooter", "images"],
    data() {
        return {};
    },
    mounted() {},
};
</script>

<style scoped></style>

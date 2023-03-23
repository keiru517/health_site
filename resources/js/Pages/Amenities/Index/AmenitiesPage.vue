<template>
    <default-layout :show-prefooter="prefooter">
        <template #content>
            <div
                id="content"
                class="bg-slate-500 pt-[25%] md:pt-[10%] pb-12 md:pb-32"
            >
                <div class="section-heading text-center pt-8 pb-12">
                    <h1
                        class="text-4xl md:text-6xl uppercase font-black tracking-wide"
                    >
                        All Amenities
                    </h1>
                    <p></p>
                </div>

                <div class="section-heading pt-8 pb-12 w-full">
                    <div
                        class="grid grid-flow-row-dense grid-cols-1 md:grid-cols-2 md:grid-rows-3 mx-24"
                    >
                        <div class="w-full mb-4" v-for="amenity in amenities">
                            <div
                                class="btn w-[95%] btn-outline rounded-[0px] hover:text-secondary text-2xl"
                            >
                                {{ amenity.name }}
                            </div>
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
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "AmenitiesPage",
    components: {
        Link,
        DefaultLayout,
    },
    props: ["prefooter", "amenities"],
};
</script>

<style scoped></style>

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
                        Select Location
                    </h1>
                    <p></p>
                </div>

                <div class="section-heading pt-8 pb-12 w-full">
                    <div
                        class="grid grid-flow-row-dense grid-cols-1 md:grid-cols-2 md:grid-rows-3 mx-24"
                    >
                        <div
                            class="w-full mb-4"
                            v-for="(name, clubId) in clubs"
                        >
                            <Link
                                class="btn w-[95%] btn-outline rounded-[0px] hover:text-secondary text-2xl"
                                :href="'/clubs/' + clubId"
                                >{{ name }}</Link
                            >
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
    name: "LocationsDirectoryPage",
    components: {
        Link,
        DefaultLayout,
    },
    props: ["prefooter", "clubs"],
    data() {
        return {};
    },
    mounted() {},
};
</script>

<style scoped></style>

<template>
    <default-layout :show-prefooter="prefooter">
        <template #layoutExtraHead>
            <club-info :club="club" :banner-img="bannerImg"></club-info>
        </template>

        <template v-slot:content>
            <pre-footer></pre-footer>
        </template>
    </default-layout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";

import ClubInfo from "@/Pages/Locations/ClubInfo/Sections/Deets";

import PreFooter from "@/Pages/Locations/ClubInfo/Sections/PreFooter";

export default {
    name: "ClubInfoPage",
    components: {
        ClubInfo,
        PreFooter,
        DefaultLayout,
    },
    props: ["prefooter", "club", "bannerImg"],
    data() {
        return {};
    },
    mounted() {},
};
</script>

<style scoped></style>

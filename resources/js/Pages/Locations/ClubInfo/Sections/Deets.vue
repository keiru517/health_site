<template>
    <div
        class="w-full h-2/5 bg-slate-600 pt-[30%] md:pt-[15%] banner-bg"
        :style="bannerImg()"
    >
        <div class="text-center pb-36">
            <h2
                class="text-4xl md:text-7xl uppercase text-secondary font-black tracking-wider"
            >
                {{ club["club_name"] }}
            </h2>
            <p class="tracking-wider uppercase pt-4 font-bold text-black">
                <span>{{ club["address1"] + ", " }}</span>
                <br class="sm:inline-block md:hidden" />
                <span
                    >{{ club["city"] + "," }} {{ club["state"] }}
                    {{ club["zip_code"] + " " }}
                </span>
                <br class="sm:inline-block md:hidden" />
                <span class="pl-2 md:inline-block hidden"> | </span>
                <span> {{ " " + club["phone"] }} </span>
            </p>
        </div>
    </div>
    <club-hours
        :hours="hoursTranslated"
        v-if="hoursTranslated.length > 0"
    ></club-hours>
</template>

<script>
import ClubHours from "@/Pages/Locations/ClubInfo/Sections/ClubHours";

export default {
    name: "Deets",
    components: {
        ClubHours,
    },
    props: ["club", "bannerImg"],
    computed: {
        hoursTranslated() {
            let r = [];

            let hours = JSON.parse(this.club.hours);

            if (hours) {
                r = hours;
            }

            return r;
        },
    },
    methods: {
        bannerImg() {
            return {
                "--banner": this.bannerImg,
            };
        },
    },
};
</script>

<style>
.banner-bg {
    background-image: var(--banner);
}
</style>

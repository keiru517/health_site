<template>
    <div class="w-full h-2/5 bg-black py-16">
        <div class="ml-16 md:ml-[15%]">
            <h2
                class="text-3xl uppercase text-white font-thin md:font-bold tracking-widest"
            >
                CLub Hours
            </h2>
            <div class="w-full md:w-[50%] pt-4" v-for="(hour, idx) in hours">
                <p class="text-xl">{{ hour }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ClubHours",
    props: ["hours"],
    mounted() {
        console.log(this.hours);
    },
};
</script>

<style scoped></style>

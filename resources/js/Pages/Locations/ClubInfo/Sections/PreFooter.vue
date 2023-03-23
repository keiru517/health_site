<template>
    <div class="w-full bg-secondary">
        <div class="text-center py-36">
            <p class="pb-4 super-wide uppercase font-bold">
                The Destination For Results
            </p>
            <h1 class="text-5xl md:text-7xl uppercase font-black pb-4">
                Join Our Club Today
            </h1>
            <Link
                class="btn rounded-[0px] px-24 text-xl h-16"
                href="/free-trial"
                ><p>Enroll Now</p></Link
            >
        </div>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "PreFooter",
    components: {
        Link,
    },
};
</script>

<style scoped>
.super-wide {
    letter-spacing: 0.35em;
}

@media screen and (min-width: 1024px) {
    .super-wide {
        letter-spacing: 0.5em;
    }
}
</style>

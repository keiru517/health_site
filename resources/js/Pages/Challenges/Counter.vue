<template>
    <default-layout :show-prefooter="prefooter">
        <template #content>
            <div class="mt-32 flex flex-col items-center gap-4">
                <p>I've been clicked</p>
                <div class="text-3xl font-bold text-red">{{ count }}</div>
                <p>times.</p>
                <button class="p-4 bg-blue-500 rounded" @click="handleClick">
                    Click me!
                </button>
                <div>
                    Can you make the count sync across multiple tabs WITHOUT any
                    server side code?
                </div>
            </div>
        </template>
    </default-layout>
</template>

<script>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";

export default {
    name: "CounterPage",
    components: {
        DefaultLayout,
    },
    props: ["prefooter"],
    setup() {
        const count = ref(0);
        const handleClick = () => {
            count.value++;
        };
        return { count, handleClick };
    },
};
</script>

<style scoped></style>

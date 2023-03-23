<template>
    <div>
        <img :src="image" />
        <h1>{{ title }}</h1>
        <p>
            {{ body }}
        </p>
    </div>
</template>

<style scoped>
div {
    @apply flex flex-col gap-4 max-w-2xl;
}
h1 {
    @apply uppercase font-bold text-xl;
}
</style>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
        DefaultLayout,
    },
    props: {
        title: {
            type: String,
            required: true,
        },
        body: {
            type: String,
            required: true,
        },
        image: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped></style>

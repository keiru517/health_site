<template>
    <default-layout :show-prefooter="prefooter">
        <template #content>
            <div class="mt-32 flex flex-col items-center gap-32">
                <h1 class="text-6xl">LATEST NEWS</h1>

                <news-item
                    v-for="news_item in news.data"
                    :title="news_item.title"
                    :body="news_item.body"
                    :image="news_item.image"
                />
                <div class="bg-red text-white p-8">
                    Oh no! You've reached the end. Delete this div and load news
                    items here!
                </div>
            </div>
        </template>
    </default-layout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";
import { Link } from "@inertiajs/inertia-vue3";
import NewsItem from "./Partials/NewsItem";

export default {
    name: "NewsPage",
    components: {
        Link,
        DefaultLayout,
        NewsItem,
    },
    props: ["prefooter", "news"],
};
</script>

<style scoped></style>

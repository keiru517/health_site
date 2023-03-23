<template>
    <div class="min-h-screen overflow-hidden">
        <div class="relative overflow-hidden bg-primary from-gray-50 to-white">
            <div class="relative">
                <default-header>
                    <template #extraHead>
                        <main class="w-full bg-primary">
                            <slot name="layoutExtraHead"></slot>
                        </main>
                    </template>
                </default-header>
            </div>
        </div>

        <slot name="content"></slot>

        <default-footer :prefooter="showPrefooter"></default-footer>
    </div>
</template>

<script>
import DefaultHeader from "@/Layouts/Includes/DefaultHeader";
import DefaultFooter from "@/Layouts/Includes/DefaultFooter";
export default {
    name: "DefaultLayout",
    props: ["showPrefooter"],
    components: {
        DefaultHeader,
        DefaultFooter,
    },
};
</script>

<style scoped></style>

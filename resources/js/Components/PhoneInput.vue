<template>
    <input
        type="text"
        v-bind="$attrs"
        :value="modelValue"
        @input="updateValue"
    />
</template>
<style scoped>
input {
    @apply input;
}
</style>
<script>
import { defineComponent } from "vue";
export default defineComponent({
    props: {
        modelValue: {
            type: String,
        },
    },
    setup(props, { emit }) {
        const updateValue = (event) => {
            emit("update:modelValue", event.target.value);
        };
        return { updateValue };
    },
});
</script>

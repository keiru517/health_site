<template>
    <default-layout :show-prefooter="prefooter">
        <template v-slot:content>
            <div class="mt-32 flex flex-col items-center gap-32">
                <h1 class="text-6xl">CONTACT US</h1>
                <form
                    @submit.prevent="handleSubmit"
                    class="flex flex-col gap-4 mb-2"
                >
                    <div class="form-control">
                        <label for="name">Name</label>
                        <input type="text" id="name" v-model="form.name" />
                        <div v-if="form.errors.name" class="form-error">
                            {{ form.errors.name }}
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="name">Email</label>
                        <input type="email" id="email" v-model="form.email" />
                        <div v-if="form.errors.email" class="form-error">
                            {{ form.errors.email }}
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="name">Phone</label>
                        <phone-input id="phone" v-model="form.phone" />
                        <div v-if="form.errors.phone" class="form-error">
                            {{ form.errors.phone }}
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="name">Message</label>
                        <textarea id="message" v-model="form.message" />
                        <div v-if="form.errors.message" class="form-error">
                            {{ form.errors.message }}
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </template>
    </default-layout>
</template>

<script>
import { defineComponent } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import DefaultLayout from "@/Layouts/DefaultLayout";
import PhoneInput from "@/Components/PhoneInput";
export default defineComponent({
    name: "Contact Page",
    components: {
        PhoneInput,
        DefaultLayout,
    },
    props: ["prefooter"],
    setup() {
        const form = useForm({
            email: null,
            name: null,
            phone: null,
            remember: false,
            message: null,
        });
        const handleSubmit = () => {
            console.log(form);
            form.post("/contact/create").then(()=>console.log("saved successfully."));
        };

        return { handleSubmit, form };
    },
});
</script>

<style scoped>
.form-control {
    @apply flex flex-col gap-1;
}
button {
    @apply p-4 bg-blue-500 rounded-sm;
}
input {
    min-width: 20rem;
}
.form-error {
    @apply text-red text-sm;
}
</style>

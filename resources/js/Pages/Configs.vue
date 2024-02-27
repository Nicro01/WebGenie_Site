<script>
import ColorPicker from "primevue/colorpicker";
import { useForm } from "@inertiajs/vue3";

import Accordion from "primevue/accordion";
import AccordionTab from "primevue/accordiontab";

export default {
    data() {
        return {
            colorHEX: "6466f1",
            form: useForm({
                primary_color: "",
                secondary_color: "",
                tertiary_color: "",
                quaternary_color: "",
                quintenary_color: "",
            }),
        };
    },
    props: {
        configs: Object,
    },
    components: {
        ColorPicker,
        Accordion,
        AccordionTab,
    },
    methods: {
        submit() {
            this.$inertia.post("/store", this.form);
        },
    },
};
</script>

<template>
    <div class="w-full min-h-screen flex">
        <div
            class="max-w-5xl mx-auto w-full self-center p-10 bg-slate-50 shadow-lg"
        >
            <form @submit.prevent="submit">
                <div class="flex flex-col">
                    <Accordion :activeIndex="0">
                        <AccordionTab header="Config 1">
                            <div class="flex flex-col">
                                <div
                                    class="flex gap-10 max-w-[90%] mx-auto py-10"
                                >
                                    <div class="flex flex-col items-center">
                                        <label
                                            for="cp-hex"
                                            class="font-bold block mb-2"
                                        >
                                            Primary Color
                                        </label>
                                        <ColorPicker
                                            v-model="form.primary_color"
                                            inputId="cp-hex"
                                            format="hex"
                                        />
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <label
                                            for="cp-hex"
                                            class="font-bold block mb-2"
                                        >
                                            Secundary Color
                                        </label>
                                        <ColorPicker
                                            v-model="form.secondary_color"
                                            inputId="cp-hex"
                                            format="hex"
                                        />
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <label
                                            for="cp-hex"
                                            class="font-bold block mb-2"
                                        >
                                            Tertiary Color
                                        </label>
                                        <ColorPicker
                                            v-model="form.tertiary_color"
                                            inputId="cp-hex"
                                            format="hex"
                                        />
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <label
                                            for="cp-hex"
                                            class="font-bold block mb-2"
                                        >
                                            Quaternary Color
                                        </label>
                                        <ColorPicker
                                            v-model="form.quaternary_color"
                                            inputId="cp-hex"
                                            format="hex"
                                        />
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <label
                                            for="cp-hex"
                                            class="font-bold block mb-2"
                                        >
                                            Quintenary Color
                                        </label>
                                        <ColorPicker
                                            v-model="form.quintenary_color"
                                            inputId="cp-hex"
                                            format="hex"
                                        />
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="px-10 py-2 rounded-lg bg-green-400 self-center text-white shadow-lg"
                                >
                                    Save
                                </button>
                            </div>
                        </AccordionTab>
                    </Accordion>
                </div>
            </form>
        </div>
    </div>
</template>
<style>
.p-colorpicker-preview {
    border-radius: 5px !important;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2) !important;
}
</style>

<script>
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import NavBar from "@/Components/Navegation/NavBar.vue";
import Whatsapp from "@/Components/Buttons/Whatsapp.vue";
import lottie from "lottie-web";
import { defineElement } from "@lordicon/element";

export default {
    props: {
        title: String,
        config: Object,
    },
    components: {
        Head,
        Link,
        NavBar,
        Whatsapp,
    },
    setup() {
        const title = ref("Home");
        return {
            title,
        };
    },
    mounted() {
        defineElement(lottie.loadAnimation);
    },
};

// const logout = () => {
//     router.post(route("logout"));
// };
</script>

<template>
    <div>
        <Whatsapp />

        <Head :title="title" />

        <NavBar :config="config" />

        <slot />
    </div>
</template>

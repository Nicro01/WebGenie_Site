<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroSection from "@/Components/Sections/HeroSection.vue";
import Solucoes from "@/Components/Sections/Solucoes.vue";
import CTA from "@/Components/Sections/CTA.vue";
import Diferenciais from "@/Components/Sections/Diferenciais.vue";
import Cases from "@/Components/Sections/Cases.vue";
import Duvidas from "@/Components/Sections/Duvidas.vue";
import SobreNos from "@/Components/Sections/SobreNos.vue";

import Footer from "@/Components/Sections/Footer.vue";

import { initFlowbite } from "flowbite";

export default {
    props: {
        config: Object,
    },
    components: {
        HeroSection,
        AppLayout,
        Solucoes,
        CTA,
        Diferenciais,
        Cases,
        Duvidas,
        Footer,
        SobreNos,
    },
    mounted() {
        initFlowbite();
    },
};
</script>
<template>
    <AppLayout :config="config" title="Home">
        <div class="h-screen select-none">
            <div class="max-w-5xl mx-auto">
                <HeroSection :config="config" />
                <Solucoes :config="config" />
            </div>

            <div class="max-w-5xl mx-auto">
                <SobreNos :config="config" />
            </div>

            <div class="min-h-[50vh]">
                <CTA :config="config" />
            </div>

            
            <div class="max-w-5xl mx-auto">
                <Diferenciais :config="config" />
                <Cases :config="config" />
            </div>

            <div class="lg:mt-32">
                <Duvidas :config="config" />
            </div>


            <Footer />
        </div>
    </AppLayout>
</template>

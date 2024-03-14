<script>
import BaseButton from "../Buttons/BaseButton.vue";

export default {
    data() {
        return {
            cases: [
                {
                    title: "TMKT Londrina",
                    type: "Landing Page & Sistema",
                    image: "https://i.postimg.cc/DwZrhMJ5/Minimalist-Website-Launch-Computer-Mockup-Instagram-Post.png",
                    url: "https://tmktlondrina.com.br",
                    color: "#1A2F44",
                },
                {
                    title: "Kodama",
                    type: "Landing Page",
                    image: "https://i.postimg.cc/JnryMytJ/Copy-of-Minimalist-Website-Launch-Computer-Mockup-Instagram-Post.png",
                    url: "https://kodama.webgenie.com.br",
                    color: "#3d97f2",
                },
                {
                    title: "Mais Gerencia",
                    type: "Multipage",
                    image: "https://i.postimg.cc/50kT94hs/Copy-of-Minimalist-Website-Launch-Computer-Mockup-Instagram-Post-1.png",
                    url: "https://maisgerencia.com.br",
                    color: "#FF7827",
                },
                {
                    title: "Gerenciamento de Estoque",
                    type: "Webapp / Sistema",
                    image: "https://i.postimg.cc/bwBtFNKx/Copy-of-Copy-of-Minimalist-Website-Launch-Computer-Mockup-Instagram-Post.png",
                    url: "https://uniondev.com.br",
                    color: "#FBD468",
                },
                {
                    title: "Venir",
                    type: "Webapp / Sistema",
                    image: "https://i.postimg.cc/8CPQ0Tgb/Copy-of-Copy-of-Copy-of-Minimalist-Website-Launch-Computer-Mockup-Instagram-Post.png",
                    url: "https://venir.cloud",
                    color: "#33AE61",
                },
                {
                    title: "CTA",
                    type: "Landing Page",
                    image: "https://i.postimg.cc/SKqC0tgd/Copy-of-Copy-of-Copy-of-Copy-of-Minimalist-Website-Launch-Computer-Mockup-Instagram-Post.png",
                    url: "https://jessicamagalhaes.com",
                    color: "#6B2421",
                },
            ],
        };
    },
    props: {
        config: Object,
    },
    components: {
        BaseButton,
    },
    methods: {
        openCase(url) {
            window.open(url, "_blank");
        },
    },
};
</script>
<template>
    <section class="pb-8 min-h-screen max-lg:mb-20" id="cases">
        <div>
            <h1
                class="mx-auto max-w-4xl mt-20 font-display text-center text-3xl max-lg:px-5 lg:text-5xl font-medium tracking-tight text-slate-900"
            >
                <span class="inline-block"
                    >Nossos cases de
                    <span
                        :style="{
                            color: config['primary_color'],
                        }"
                        class="relative whitespace-nowrap"
                    >
                        <svg
                            aria-hidden="true"
                            viewBox="0 0 418 42"
                            :style="{
                                fill: config['primary_color'],
                                opacity: 0.4,
                            }"
                            class="absolute top-2/3 left-0 h-[0.58em] w-full fill-blue-300/70"
                            preserveAspectRatio="none"
                        >
                            <path
                                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"
                            ></path>
                        </svg>
                        <span class="relative me-4">Sucesso </span></span
                    >
                </span>
            </h1>

            <p
                class="text-center mt-2 lg:mt-9 text-lg tracking-tight text-slate-700 sm:mt-6"
            >
                Conheça um pouco do nosso portífolio
            </p>
        </div>
        <div class="grid grid-col-1 max-lg:px-10 lg:grid-cols-3 gap-5 mt-10">
            <div
                class="group col-span-1"
                v-for="(site, i) in cases"
                data-aos="zoom-in"
            >
                <div
                    class="relative aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80"
                >
                    <img
                        :src="site.image"
                        alt=""
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                    />

                    <div
                        :style="{
                            backgroundColor: site.color,
                            backgroundOpacity: 0.2,
                        }"
                        class="absolute text-white flex flex-col items-center justify-between py-20 h-full w-full opacity-0 bottom-0 hover:opacity-100 bg-opacity-0 hover:bg-opacity-5 bg-fixed transition duration-300 ease-in-out"
                    >
                        <div class="text-center">
                            <p class="uppercase text-sm mb-2">
                                {{ site.type }}
                            </p>
                            <h2 class="font-bold text-2xl">{{ site.title }}</h2>
                        </div>

                        <BaseButton
                            @click="openCase(`${site.url}`)"
                            :primaryColor="config['primary_color']"
                            :secondaryColor="config['secondary_color']"
                            tertiaryColor="white"
                            text="Conhecer o Projeto"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

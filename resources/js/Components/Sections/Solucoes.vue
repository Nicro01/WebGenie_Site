<script>
import BaseButton from "../Buttons/BaseButton.vue";

export default {
    props: {
        config: Object,
    },
    components: {
        BaseButton,
    },
};
</script>

<template>
    <div
        class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6"
        id="solucoes"
    >
        <div class="flex flex-col gap-10">
            <!-- can help image -->
            <div class="self-center text-center">
                <div class="mb-10 text-center">
                    <h2
                        data-aos="fade-up"
                        class="text-5xl tracking-tight text-center font-bold text-primary-800"
                    >
                        Nossas
                        <span class="inline-block">
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
                                <span class="relative">soluções </span></span
                            >
                        </span>
                        para você
                    </h2>
                    <p data-aos="fade-up" class="max-w-xl mt-5 text-center">
                        A WebGenie oferece uma variedade de soluções para
                        atender às necessidades de nossos clientes, desde
                        websites e e-commerce até sistemas e APIs.
                    </p>
                </div>
            </div>
            <!-- end can help image -->

            <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                <div class="w-full sm:w-1/2 mb-4 px-2" data-aos="zoom-in">
                    <div
                        class="bg-white h-full py-4 px-6 border-2 border-black border-t-0 border-l-0 rounded-br-xl hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                    >
                        <h3 class="text-2xl font-bold text-md mb-6">
                            WebSites
                        </h3>
                        <p class="text-base">
                            Nossos websites são projetados para serem
                            visualmente atraentes, fáceis de navegar e
                            otimizados para SEO, garantindo que você se destaque
                            na web.
                        </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2" data-aos="zoom-in">
                    <div
                        class="bg-white h-full py-4 px-6 border-2 border-black border-t-0 border-l-0 rounded-br-xl hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                    >
                        <h3 class="text-2xl font-bold text-md mb-6">WebApps</h3>
                        <p class="text-base">
                            Nossos aplicativos web são projetados para serem
                            visualmente atraentes, fáceis de navegar e
                            otimizados para SEO, garantindo que você se destaque
                            na web.
                        </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2" data-aos="zoom-in">
                    <div
                        class="bg-white h-full py-4 px-6 border-2 border-black border-t-0 border-l-0 rounded-br-xl hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                    >
                        <h3 class="text-2xl font-bold text-md mb-6">
                            Sistemas
                        </h3>
                        <p class="text-base">
                            Nossos sistemas são projetados para serem
                            visualmente atraentes, fáceis de navegar e
                            otimizados para SEO, garantindo que você se destaque
                            na web.
                        </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2" data-aos="zoom-in">
                    <div
                        class="bg-white h-full py-4 px-6 border-2 border-black border-t-0 border-l-0 rounded-br-xl hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                    >
                        <h3 class="text-2xl font-bold text-md mb-6">APIs</h3>
                        <p class="text-base">
                            Nossas APIs são projetadas para serem visualmente
                            atraentes, fáceis de navegar e otimizadas para SEO,
                            garantindo que você se destaque na web.
                        </p>
                    </div>
                </div>
            </div>
            <div class="self-center" data-aos="fade-up">
                <BaseButton
                    :primaryColor="config['primary_color']"
                    :secondaryColor="config['secondary_color']"
                    tertiaryColor="#333"
                    text="Quero Saber Mais"
                />
            </div>
        </div>
    </div>
</template>

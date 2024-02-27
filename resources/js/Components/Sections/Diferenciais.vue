<script>
import BaseButton from "../Buttons/BaseButton.vue";
import Compute from "@/Components/Vectors/Compute.vue";

export default {
    props: {
        config: Object,
    },
    components: {
        BaseButton,
        Compute,
    },
};
</script>
<template>
    <section
        class="min-h-screen flex flex-col max-lg:mt-20 items-center justify-center"
        id="diferenciais"
    >
        <div class="flex flex-col lg:flex-row justify-between gap-10">
            <div class="lg:w-1/2 max-lg:px-10 self-start">
                <p
                    data-aos="fade-up"
                    class="uppercase text-sm opacity-[0.5] font-semibold mb-2"
                    :style="{
                        color: config['primary_color'],
                    }"
                >
                    Soluções personalizadas
                </p>
                <h2
                    data-aos="fade-up"
                    class="text-2xl lg:text-4xl font-bold mb-10"
                >
                    Oferecemos
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
                    ideias <br />
                    e
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
                        <span class="relative">personalizadas </span></span
                    >
                    para o seu negócio
                </h2>
                <div class="flex flex-col gap-5">
                    <div data-aos="fade-up">
                        <div
                            class="flex items-center justify-start rounded-lg p-2 hover:border-2 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                        >
                            <div
                                class="flex items-center justify-center rounded-full text-white text-center"
                            >
                                <lord-icon
                                    src="https://cdn.lordicon.com/lgoppsqp.json"
                                    trigger="loop"
                                    delay="1000"
                                    :colors="
                                        `primary:#121331,secondary:` +
                                        config['primary_color']
                                    "
                                    style="width: 80px; height: 80px"
                                >
                                </lord-icon>
                            </div>

                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">
                                    Design personalizado
                                </h3>
                                <p>
                                    Nossos sites são feitos sob medida para o
                                    seu negócio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div
                            class="flex items-center justify-start rounded-lg p-2 hover:border-2 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                        >
                            <div
                                class="flex items-center justify-start rounded-full text-white text-center"
                            >
                                <lord-icon
                                    src="https://cdn.lordicon.com/ggijgnjp.json"
                                    trigger="loop"
                                    delay="1000"
                                    :colors="
                                        `primary:#121331,secondary:` +
                                        config['primary_color']
                                    "
                                    style="width: 80px; height: 80px"
                                >
                                </lord-icon>
                            </div>

                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">SEO</h3>
                                <p>
                                    Nossos sites são feitos sob medida para o
                                    seu negócio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div
                            class="flex items-center justify-start rounded-lg p-2 hover:border-2 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                        >
                            <div
                                class="flex items-center justify-start rounded-full text-white text-center"
                            >
                                <lord-icon
                                    src="https://cdn.lordicon.com/uktwwckg.json"
                                    trigger="loop"
                                    delay="1000"
                                    :colors="
                                        `primary:#121331,secondary:` +
                                        config['primary_color']
                                    "
                                    style="width: 80px; height: 80px"
                                >
                                </lord-icon>
                            </div>

                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">Performance</h3>
                                <p>
                                    Nossos sites são feitos sob medida para o
                                    seu negócio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div
                            class="flex items-center justify-start rounded-lg p-2 hover:border-2 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                        >
                            <div
                                class="flex items-center justify-start rounded-full text-white text-center"
                            >
                                <lord-icon
                                    src="https://cdn.lordicon.com/fzfkoxxo.json"
                                    trigger="loop"
                                    delay="1000"
                                    :colors="
                                        `primary:#121331,secondary:` +
                                        config['primary_color']
                                    "
                                    style="width: 80px; height: 80px"
                                >
                                </lord-icon>
                            </div>

                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">
                                    Integração com redes sociais
                                </h3>
                                <p>
                                    Nossos sites são feitos sob medida para o
                                    seu negócio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="lg:w-1/2 self-center h-full">
                <Compute :config="config" />
            </div>
        </div>
    </section>
</template>

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
    <section
        :style="{
            backgroundColor: config['primary_color'],
        }"
        data-aos="fade-up"
        class="relative z-10 overflow-hidden py-16 px-8 mt-20 mb-28"
    >
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="text-center lg:text-left">
                        <div class="mb-10 ">
                            <h1
                                class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-white"
                            >
                                Agende sua Consulta Gratuita!
                            </h1>
                            <p
                                class="w-full text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed text-white"
                            >
                                Entre em contato conosco por telefone, WhatsApp
                                ou agende uma reunião online. Estamos ansiosos
                                para compreender suas necessidades e oferecer
                                soluções personalizadas!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="flex flex-col justify-center lg:justify-end text-center lg:text-right"
                    >
                        <div
                            class="flex gap-8 justify-center lg:justify-end mb-5 items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-10"
                                fill="#32ee11"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"
                                />
                            </svg>
                            <p class="text-white font-bold text-3xl">
                                085 9 9266 3939
                            </p>
                        </div>
                        <a
                            class="font-semibold text-xl rounded-lg self-center lg:self-end inline-flex items-center justify-center bg-white py-4 px-20 hover:bg-opacity-90"
                            href="#"
                            >Agendar Agora</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <span class="absolute top-0 right-0 -z-10">
            <svg
                width="388"
                height="250"
                viewBox="0 0 388 220"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.05"
                    d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
                    fill="url(#paint0_linear_971_6910)"
                ></path>
                <defs>
                    <linearGradient
                        id="paint0_linear_971_6910"
                        x1="60.5"
                        y1="111"
                        x2="287"
                        y2="111"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop offset="0.520507" stop-color="white"></stop>
                        <stop
                            offset="1"
                            stop-color="white"
                            stop-opacity="0"
                        ></stop>
                    </linearGradient>
                </defs></svg></span
        ><span class="absolute top-0 right-0 -z-10"
            ><svg
                width="324"
                height="250"
                viewBox="0 0 324 220"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.05"
                    d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
                    fill="url(#paint0_linear_971_6911)"
                ></path>
                <defs>
                    <linearGradient
                        id="paint0_linear_971_6911"
                        x1="60.5"
                        y1="111"
                        x2="287"
                        y2="111"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop offset="0.520507" stop-color="white"></stop>
                        <stop
                            offset="1"
                            stop-color="white"
                            stop-opacity="0"
                        ></stop>
                    </linearGradient>
                </defs></svg></span
        ><span class="absolute top-4 left-4 -z-10"
            ><svg
                width="43"
                height="56"
                viewBox="0 0 43 56"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g opacity="0.5">
                    <circle
                        cx="40.9984"
                        cy="1.49626"
                        r="1.49626"
                        transform="rotate(90 40.9984 1.49626)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="27.8304"
                        cy="1.49626"
                        r="1.49626"
                        transform="rotate(90 27.8304 1.49626)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="14.6644"
                        cy="1.49626"
                        r="1.49626"
                        transform="rotate(90 14.6644 1.49626)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="1.49642"
                        cy="1.49626"
                        r="1.49626"
                        transform="rotate(90 1.49642 1.49626)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="40.9984"
                        cy="14.6642"
                        r="1.49626"
                        transform="rotate(90 40.9984 14.6642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="27.8304"
                        cy="14.6642"
                        r="1.49626"
                        transform="rotate(90 27.8304 14.6642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="14.6644"
                        cy="14.6642"
                        r="1.49626"
                        transform="rotate(90 14.6644 14.6642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="1.49642"
                        cy="14.6642"
                        r="1.49626"
                        transform="rotate(90 1.49642 14.6642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="40.9984"
                        cy="27.8302"
                        r="1.49626"
                        transform="rotate(90 40.9984 27.8302)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="27.8304"
                        cy="27.8302"
                        r="1.49626"
                        transform="rotate(90 27.8304 27.8302)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="14.6644"
                        cy="27.8302"
                        r="1.49626"
                        transform="rotate(90 14.6644 27.8302)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="1.49642"
                        cy="27.8302"
                        r="1.49626"
                        transform="rotate(90 1.49642 27.8302)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="40.9984"
                        cy="40.9982"
                        r="1.49626"
                        transform="rotate(90 40.9984 40.9982)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="27.8304"
                        cy="40.9963"
                        r="1.49626"
                        transform="rotate(90 27.8304 40.9963)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="14.6644"
                        cy="40.9982"
                        r="1.49626"
                        transform="rotate(90 14.6644 40.9982)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="1.49642"
                        cy="40.9963"
                        r="1.49626"
                        transform="rotate(90 1.49642 40.9963)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="40.9984"
                        cy="54.1642"
                        r="1.49626"
                        transform="rotate(90 40.9984 54.1642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="27.8304"
                        cy="54.1642"
                        r="1.49626"
                        transform="rotate(90 27.8304 54.1642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="14.6644"
                        cy="54.1642"
                        r="1.49626"
                        transform="rotate(90 14.6644 54.1642)"
                        fill="white"
                    ></circle>
                    <circle
                        cx="1.49642"
                        cy="54.1642"
                        r="1.49626"
                        transform="rotate(90 1.49642 54.1642)"
                        fill="white"
                    ></circle>
                </g>
            </svg>
        </span>
    </section>
</template>

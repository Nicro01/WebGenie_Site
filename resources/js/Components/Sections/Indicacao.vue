<script>
import BaseButton from "../Buttons/BaseButton.vue";
import MoneySave from "@/Components/Vectors/MoneySave.vue"

export default {
    props: {
        config: Object,
    },
    components: {
        BaseButton,
        MoneySave,
    },
};
</script>

<template>
    <section
        :style="{
            color: config['primary_color'],
        }"
        data-aos="fade-up"
        class="bg-[#ECDAB7] relative z-10 overflow-hidden py-16 px-8  mb-28"
    >
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="text-center lg:text-left">
                        <div class="">
                            <h1
                                class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight "
                            >
                                Premiações por indicação!<br>Ganhe até R$400,00 por indicação.
                            </h1>
                            <p class="w-full mb-3 text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed">
                                Quer ganhar uma rende extra e ainda nos ajudar?<br>Faça uma indicação para a gente e receba de R$200.00 até R$400.00 !
                            </p>
                            <a
                                class="font-semibold text-xl rounded-lg self-center lg:self-end inline-flex items-center justify-center bg-white py-4 px-20 hover:bg-opacity-90"
                                href="#"
                                >Realizar Desejo</a
                            >
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 relative lg:w-1/2">
                    <div
                        class="max-sm:hidden flex flex-col bottom-[-325px] -right-[5%] absolute justify-center lg:justify-end text-center lg:text-right"
                    >
                        <MoneySave :config="config"/>
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
        ><span class="absolute top-4 left-4 -z-10">
        </span>
    </section>
</template>

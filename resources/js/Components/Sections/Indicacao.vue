<script>
import BaseButton from "../Buttons/BaseButton.vue";
import MoneySave from "@/Components/Vectors/MoneySave.vue";

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
        class="bg-[#ECDAB7] relative z-10 overflow-hidden py-16 px-8 my-28"
    >
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="text-center lg:text-left">
                        <div>
                            <h1
                                class="mt-0 text-2xl font-bold leading-tight sm:mb-6 sm:text-3xl sm:leading-snug md:text-4xl md:leading-tight"
                            >
                                Premiações por Indicação: Ganhe até R$400 por
                                Cada Amigo Indicado!
                            </h1>
                            <p
                                class="w-full mt-5 mb-8 font-medium leading-relaxed sm:mb-5 sm:text-base sm:leading-relaxed md:text-lg md:leading-relaxed"
                            >
                                Quer uma forma de ganhar dinheiro extra enquanto
                                ajuda a nossa comunidade a crescer? É simples:
                                faça uma indicação e você pode receber entre
                                R$200 e R$400 por cada pessoa que se juntar a
                                nós por sua recomendação!
                            </p>
                            <a
                                href="#"
                                class="font-semibold text-lg rounded-lg self-center lg:self-start inline-flex items-center justify-center bg-white py-2 px-10 hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out"
                            >
                                Conquiste Seus Desejos
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 relative lg:w-1/2">
                    <div
                        class="max-sm:hidden flex flex-col bottom-[-325px] -right-[5%] absolute justify-center lg:justify-end text-center lg:text-right"
                    >
                        <MoneySave :config="config" />
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
        ><span class="absolute top-4 left-4 -z-10"> </span>
    </section>
</template>

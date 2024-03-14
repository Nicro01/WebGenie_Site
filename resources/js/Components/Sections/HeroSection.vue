<script>
import DualButtons from "@/Components/Buttons/DualButtons.vue";

export default {
    data() {
        return {
            title: ["WebSite", "E-commerce", "API", "Sistema", "Blog"],
            currentTitle: "",
            currentTitleIndex: 0,
            currentCharIndex: 0,
            typingSpeed: 150,
            delayBetweenTitles: 2500,
        };
    },
    props: {
        config: Object,
    },
    components: {
        DualButtons,
    },

    mounted() {
        this.typeTitle();
    },
    methods: {
        async typeTitle() {
            if (
                this.currentCharIndex <
                this.title[this.currentTitleIndex].length
            ) {
                this.currentTitle +=
                    this.title[this.currentTitleIndex][this.currentCharIndex];
                this.currentCharIndex++;
                setTimeout(this.typeTitle, this.typingSpeed);
            } else {
                await new Promise((resolve) =>
                    setTimeout(resolve, this.delayBetweenTitles)
                );
                this.nextTitle();
            }
        },
        nextTitle() {
            this.currentTitleIndex =
                (this.currentTitleIndex + 1) % this.title.length;
            this.currentCharIndex = 0;
            this.currentTitle = "";
            this.typeTitle();
        },
    },
};
</script>
<style scoped>
@keyframes digit {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

.animate-digit {
    animation: digit 0.8s infinite;
}
</style>
<template>
    <div
        data-aos="zoom-in"
        id="home"
        class="flex flex-col items-center justify-center min-h-screen select-none"
    >
        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center"
        >
            <p
                class="mx-auto -mt-4 mb-2 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6"
            >
                Bem Vindo ao
                <span
                    class="border-b font-extrabold border-dotted border-slate-300"
                    >WebGenie</span
                >
            </p>

            <h1
                class="mx-auto max-w-4xl font-display max-lg:mt-3 text-4xl lg:text-6xl font-medium tracking-tight text-slate-900"
            >
                <span class="inline-block"
                    ><span class="max-lg:me-2 me-4" v-if="currentTitle != 'API'"
                        >Seu</span
                    >
                    <span class="max-lg:me-2 me-4" v-else>Sua</span>
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
                        <span class="relative max-lg:me-2 me-4"
                            >{{ currentTitle }}
                        </span></span
                    >
                    <span
                        class="animate-digit inline-block lg:h-12 h-8 lg:-ms-2 -ms-1 me-2 border-r-[4px] lg:border-r-[6px]"
                        :style="{
                            borderColor: config['primary_color'],
                        }"
                    ></span>
                </span>

                <span class="me-4 inline-block" v-if="currentTitle != 'API'"
                    >Personalizado</span
                >
                <span class="me-4 inline-block" v-else>Personalizada</span>
            </h1>

            <p
                class="mx-auto mt-9 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6"
            >
                <span class="inline-block me-1"
                    >Onde seus desejos se realizam</span
                >
                <span class="inline-block">e seu negócio ganha impulso</span>
            </p>

            <div
                class="mt-12 flex flex-col justify-center gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6"
            >
                <DualButtons
                    :primaryColor="config['primary_color']"
                    :secondaryColor="config['secondary_color']"
                    :tertiaryColor="config['tertiary_color']"
                    text="Realizar meu Desejo"
                    text2="Conhecer mais"
                />
            </div>
        </div>

        <lord-icon
            src="https://cdn.lordicon.com/rneyrohs.json"
            trigger="loop"
            :colors="`primary:#121331,secondary:${config['primary_color']}`"
            style="width: 60px; height: 60px"
        >
        </lord-icon>
    </div>
</template>

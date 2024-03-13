<script>
    export default {
        data() {
            return {
                menuItems: [
                    {
                        name: "Home",
                        link: "#home",
                    },
                    {
                        name: "Soluções",
                        link: "#solucoes",
                    },
                    {
                        name: "WebGenie",
                        link: "#webgenie",
                    },
                    {
                        name: "Diferenciais",
                        link: "#diferenciais",
                    },
                    {
                        name: "Cases",
                        link: "#cases",
                    },
                    {
                        name: "Depoimentos",
                        link: "#depoimentos",
                    },
                    {
                        name: "Contato",
                        link: "#contato",
                    },
                ],
            };
        },
        props: {
            config: Object,
        },
    }
</script>

<template>
    <footer class="bg-white">
        <div class="container px-4 mx-auto">
            <div class="pt-24 pb-11 mx-auto max-w-4xl">
                <a class="flex md:mx-auto mb-5 max-w-max" href="#">
                    <img
                        src="https://i.postimg.cc/VspJLRNn/Logo.png"
                        class="h-9 mr-3 sm:h-12"
                        alt="WebGenie Logo"
                    />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap"
                        :style="{ color: config['primary_color'] }"
                        >WebGenie</span
                    >
                </a>
                <div class="flex flex-wrap justify-center -mx-3 lg:-mx-6">

                    <div v-for="(item, i) in menuItems" :key="i" class="cursor-pointer w-full md:w-auto p-3 md:px-6">
                        <a
                            v-scroll-to="`${item.link}`"
                            class="inline-block text-lg text-gray-500 hover:text-gray-600 font-medium"
                            >{{ item.name }}</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b border-gray-100"></div>
        <div class="container px-4 mx-auto">
            <p
                class="py-10 md:pb-20 text-md text-gray-400 font-medium text-center"
            >
                © 2024 WebGenie. Todos os Direiros Reservados.
            </p>
        </div>
    </footer>
</template>

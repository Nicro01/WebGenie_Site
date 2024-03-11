<script>
export default {
    props: {
        config: Object,
    },
}
</script>

<template>
    <!-- component -->
<div id="depoimentos" :style="{
}" class="py-16 white w-full">  
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <h1
            class="mb-20 mx-auto max-w-4xl mt-20 font-display text-center text-3xl max-lg:px-5 lg:text-5xl font-medium tracking-tight text-slate-900"
        >
            <span class="inline-block"
                >O que
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
                    <span class="relative me-4">Parceiros</span></span
                >estão falando
            </span>
        </h1>
        <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
          <div class="row-span-2 rounded-xl p-6 text-center sm:p-8
          border-[1px] hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out
          ">
            <div class="h-full flex flex-col justify-center space-y-4">
              <img class="w-20 h-20 mx-auto rounded-full" src="https://i.ibb.co/KbGnnGM/jessica.png" alt="user avatar" height="220" width="220" loading="lazy">
              <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Oi equipe da WebGenie,
                <br><br>

                Só queria dizer um enorme obrigada pelo trabalho incrível que vocês fizeram no lancamento do meu site. Vocês não só o criaram super rápido, como também captaram exatamente o que eu queria, fazendo todas as mudanças necessárias sem problema algum.
                <br><br>
                Fiquei impressionada com o suporte que me deram durante todo o processo. Sempre estiveram disponíveis para responder minhas perguntas e resolver quaisquer problemas que surgiram.
                Estou muito feliz com o resultado final e agradeço muito por toda a ajuda e apoio que vocês me deram.
                <br><br>
                Muito obrigada! <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Jessica Magalhaes</h6>
                  <span class="text-xs text-gray-500">CTA</span>
              </div>
            </div>
          </div>

          <div class="p-6 rounded-xl sm:flex sm:space-x-8 sm:p-8
          border-[1px] hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out
          ">
            <img class="w-20 h-20 mx-auto rounded-full" src="https://i.ibb.co/NSMGw7c/kodama.png" alt="user avatar" height="220" width="220" loading="lazy">
            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
              <p class="text-gray-600"> <span class="font-serif">"</span> Muito satisfeito com a WebGenie, que fez o nosso site. Geralmente temos problemas de atrasos nos casos de prestação de serviços mas eles superaram as expectativas e entregaram antes da data acordada.
              <br> 
              <br> 
              Muita profundidade ao escolherem as paletas de cores, fontes e estrutura do site para gerar mais credibilidade para quem navegar.
              <br>
              <br>
              Muito satisfeito!
                 <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Vagner Kodama</h6>
                  <span class="text-xs text-gray-500">Kodama</span>
              </div>
            </div>
          </div>
          <div class="p-6 rounded-xl sm:flex sm:space-x-8 sm:p-8
          border-[1px] hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[5px_5px_rgba(0,_0,_0,_0.4),_10px_10px_rgba(0,_0,_0,_0.3),_15px_15px_rgba(0,_0,_0,_0.2),_20px_20px_rgba(0,_0,_0,_0.1),_25px_25px_rgba(0,_0,_0,_0.05)] transform transition-all duration-300 ease-in-out
          ">
            <img class="w-20 h-20 mx-auto rounded-full" src="https://tailus.io/sources/blocks/grid-cards/preview/images/avatars/second_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
              <p class="text-gray-600"> <span class="font-serif">"</span> Equipe WEBGENIE, nem sei como agradecer! Quando resolvi iniciar meu empreendimento fiquei completamente perdida em como faria um site, não tinha noção alguma de tecnologias rsrs, fico muito contente de ter descoberto vocês e mais ainda pelo amparo e serviço INCRÍVEL que vocês me prestaram. Amei TUDO! Queria que todos os iniciantes em negócios tivessem a oportunidade de ter um site feito por vocês, realmente magnífico. 
                <br><br>
                Ótimo trabalho! Agradecida. 
                <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Luana Aguiar</h6>
                  <span class="text-xs text-gray-500">Venir</span>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</template>
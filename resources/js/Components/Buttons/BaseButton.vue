<script>
export default {
    data() {
        return {
            hover: false,
        };
    },
    props: {
        primaryColor: {
            type: String,
            default: "#9748FF",
        },
        secondaryColor: {
            type: String,
            default: "#333",
        },
        tertiaryColor: {
            type: String,
            default: "#fff",
        },
        text: {
            type: String,
            default: "Button Text",
        },
    },
};
</script>
<template>
    <button
        :class="[
            'w-auto',
            'px-5',
            'h-12',
            'cursor-pointer',
            'rounded-3xl',
            'border-2',
            `border-[${primaryColor}]`,
            'transition',
            'duration-300',
            'ease-in-out',
            `bg-[${tertiaryColor}]`,
        ]"
        :style="{
            boxShadow: hover
                ? `inset 0px -2px 0px 1px ${primaryColor}`
                : `inset 0px -2px 0px 1px ${primaryColor}`,
            backgroundColor: hover ? primaryColor : secundaryColor,
        }"
        @mouseover="hover = true"
        @mouseout="hover = false"
    >
        <span
            :style="{
                color: hover ? 'white' : tertiaryColor,
            }"
            >{{ text }}</span
        >
    </button>
</template>

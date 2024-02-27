<script>
export default {
    data() {
        return {
            hover: false,
            hover1: false,
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
        text2: {
            type: String,
            default: "Button Text2",
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
                color: hover ? 'white' : '#333',
            }"
            >{{ text }}</span
        >
    </button>
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
            boxShadow: hover1
                ? `inset 0px -2px 0px 1px ${primaryColor}`
                : `inset 0px -2px 0px 1px ${primaryColor}`,
            backgroundColor: hover1 ? primaryColor : secundaryColor,
        }"
        @mouseover="hover1 = true"
        @mouseout="hover1 = false"
    >
        <span
            :style="{
                color: hover1 ? 'white' : '#333',
            }"
            >{{ text2 }}</span
        >
    </button>
</template>

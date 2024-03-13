<template>
  <transition name="fade">

    <div v-if="visible" class="flash-message w-full flex justify-center items-center" >
        <div class="w-screen py-[10px] px-[20px] rounded-md" :class="type">
            {{ message }}
        </div>
    </div>
  </transition>
</template>

<script>
export default {
  props: ['message', 'type'],
  data() {
    return {
      visible: false,
    };
  },
  methods: {
    show() {
      this.visible = true;
      setTimeout(() => {
        this.visible = false;
      }, 3000); // A mensagem desaparece após 3 segundos
    },
  },
  watch: {
    message: function(newVal, oldVal) {
      if (newVal !== oldVal) {
        this.show();
      }
    },
  },
};
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}
.flash-message {
  position: fixed;
  display: flex;
  top: 10px;
  padding: 10px 20px;
  color: white;
  border-radius: 5px;
  text-align: center;
  z-index: 100000;
}
.success {
  background-color: #4CAF50; /* Green */
}
.error {
  background-color: #f44336; /* Red */
}
</style>

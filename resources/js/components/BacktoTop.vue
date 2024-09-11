<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps({
  text: { type: String, default: 'text' },
  visibleOffset: { type: [String, Number], default: 500 },
  right: { type: String, default: '25px' },
  bottom: { type: String, default: '20px' },
});

const visible = ref(false);

const catchScroll = () => {
  visible.value = window.pageYOffset > parseInt(props.visibleOffset);
};

const backToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
  window.addEventListener('scroll', catchScroll);
});
</script>

<template>
  <div>
    <transition name="fade" mode="out-in">
      <div class="backtotop"
        :style="`bottom:${bottom}; right:${right}`"
        v-show="visible"
        @click="backToTop">
        <a class="p-0 btn backtoTop" href="#">
         	<i class="fa-solid fa-arrow-up icon"></i>
        </a>
      </div>
    </transition>
  </div>
</template>

<style scoped>
.fade-enter-active,
.face-leave-active {
  transition: opacity 0.5s;
}

.fade-enter,
.face-leave {
  opacity: 0;
}

.backtotop {
  position: fixed;
  z-index: 1300;
  cursor: pointer;
}

.backtotop .backtoTop {
  width: 50px;
  height: 50px;
  background: rgba(74, 74, 74, 0.34);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(12.8px);
  -webkit-backdrop-filter: blur(12.8px);
  border: none;
  border-radius: 50%;
} .backtotop .backtoTop:focus {
	background: rgba(74, 74, 74, 0.34);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(12.8px);
  -webkit-backdrop-filter: blur(12.8px);
  border: none;
	opacity: .8;
  color: #5a3b2f;
}
.backtotop .backtoTop .icon {
	font-size: 25px;
  color: #ffffff;
  margin-top: 10px;
}
</style>

<template>
	<Transition appear
		name="slide-fade"
		mode="out-in">
    <KeepAlive>
      <div :key="$route.path">
        <slot />
      </div>
    </KeepAlive>
  </Transition>
</template>

<style scoped>
/*Small Screen Transition*/
.slide-fade-enter-active {
   transition: all 0.3s ease;
}
 .slide-fade-leave-active {
  transition: all 0.1s cubic-bezier(1, 0.5, 0.8, 1);
}
 .slide-fade-enter-from,
 .slide-fade-leave-to {
  transform: translateX(-10px);
   opacity: 0;
 }
</style>
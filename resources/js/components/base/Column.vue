<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<div :class="className">
		<slot />
  </div>
</template>

<style scoped>
</style>
<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<div :class="className" class="row">
		<slot />
  </div>
</template>

<style scoped>
</style>
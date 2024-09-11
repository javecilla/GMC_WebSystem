<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<div :class="className" class="main">
		<slot />
  </div>
</template>

<style scoped>
.main {
	margin-left: 10px;
}
</style>
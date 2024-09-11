<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<div class="container" :class="className">
		<slot />
	</div>
</template>
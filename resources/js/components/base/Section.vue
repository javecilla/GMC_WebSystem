<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<section :class="className">
		<slot />
	</section>
</template>
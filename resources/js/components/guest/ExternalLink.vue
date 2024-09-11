<script setup>
const props = defineProps({
	to: { type: String },
	text: { type: String },
	title: { type: String },
	icon: { type: String },
	className: { type: String },
	inlineStyle: { type: String }
});
</script>

<template>
	<a :href="to"
		 :class="className"
		 :style="inlineStyle"
	 	 target="_blank"
	 	 rel="noopener noreferrer">
	 	 <span>{{ text }}</span>
	   &nbsp;<i :class="icon"></i>
	</a>
</template>

<style scoped>

</style>
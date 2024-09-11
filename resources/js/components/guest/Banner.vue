<script setup>
const props = defineProps({
	image: { type: String }
});
</script>

<template>
	<div class="banner">
		<img :src="`/resources/assets/images/${image}`" class="image" loading="lazy" alt="image"/>
	</div>
</template>

<style scoped>
.banner {
	pointer-events: none;
} .banner .image {
	width: 1354px;
	cursor: default;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.banner .image {
		width: 390px;
		height: 130px;
	}
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>
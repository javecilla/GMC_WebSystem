<script setup>
	import { RouterLink, RouterView } from 'vue-router';
	import Navbar from '@/components/Navbar.vue';
	import Header from '@/components/Header.vue';
</script>

<template>
	<div class="sticky-top">
		<Header />
		<Navbar />
	</div>

	<div>
		<RouterView />
	</div>
</template>
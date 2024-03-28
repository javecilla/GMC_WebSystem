<script setup>
import { RouterLink, RouterView } from 'vue-router';
import Navbar from '@/components/Navbar.vue';
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
</script>

<template>
	<div>
		<Header />
		<Navbar />
	</div>

	<div>
		<RouterView />
	</div>

	<div>
		<Footer />
	</div>
</template>
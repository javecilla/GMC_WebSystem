<script setup>
import GuestTopNav from '@/components/guest/TopNav.vue';
</script>

<template>
	<nav class="app-navbar navbar navbar-expand-lg">
		<div class="container content">
			<GuestTopNav />
		</div>
	</nav>
</template>

<style>
.app-navbar {
	background: #fff;
  border-bottom: 1px solid #f1f1f1;
} .app-navbar .content {
	max-width: 1250px;
}
</style>
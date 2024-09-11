<script setup>
import Container from '@/components/base/Container.vue';
</script>

<template>
	<nav class="app-navbar navbar navbar-expand-lg">
		<Container className="content">
			<slot />
		</Container>
  </nav>
</template>

<style scoped>
.app-navbar {
	background: #fff;
  border-bottom: 1px solid #f1f1f1;
} .app-navbar .content {
	max-width: 1280px;
}
</style>
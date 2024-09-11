<script setup>
import Container from '@/components/base/Container.vue';
</script>

<template>
	<header class="app-header">
		<Container className="content">
			<slot />
		</Container>
  </header>
</template>

<style scoped>
.app-header {
	background-image: linear-gradient(to left, #5a3b2f, #5a3b2f, #5a3b2f, #b4813f); 
  color: #f3f3f3!important;
  padding: 5px;
} .app-header .content {
	max-width: 1250px;
}
</style>
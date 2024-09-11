<script setup>
import Container from '@/components/base/Container.vue';
</script>

<template>
	<footer class="py-5">
		<Container className="content">
			<slot />
		</Container>
  </footer>
</template>

<style scoped>
footer {
	background: #F5FAFE!important;
}
</style>
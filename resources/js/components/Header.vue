<script setup>
import Banner from '@/components/guest/Banner.vue';
</script>

<template>
	<div class="app-header">
	  <div class="container content">
	    <Banner />
	  </div>
	</div>
</template>

<style>
.app-header {
	background-image: linear-gradient(to left, #5a3b2f, #5a3b2f, #5a3b2f, #b4813f); 
  color: #f3f3f3!important;
  padding: 5px;
} .app-header .content {
	max-width: 1250px;
}
</style>
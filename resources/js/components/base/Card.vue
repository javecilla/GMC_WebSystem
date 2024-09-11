<script setup>
const props = defineProps({
	className: { type: String }
});
</script>

<template>
	<div :class="className" class="card">
		<slot />
  </div>
</template>

<style scoped>
.card {
	border: none;
	border-radius: 5px!important;
	box-shadow: -2px 0px 17px 0px rgba(0,0,0,0.04);
	-webkit-box-shadow: -2px 0px 17px 0px rgba(0,0,0,0.04);
	-moz-box-shadow: -2px 0px 17px 0px rgba(0,0,0,0.04);
	background: #FFF;
}
</style>
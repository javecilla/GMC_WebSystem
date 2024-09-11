<script setup>
const props = defineProps({
  stroke: { type: String },
  color: { type: String },
  className: { type: String },
  inlineStyle: { type: String },
});
</script>
<template>
	<div v-if="stroke === 'top'" :class="className" :style="inlineStyle">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path :fill="color" fill-opacity="1" d="M0,224L120,229.3C240,235,480,245,720,245.3C960,245,1200,235,1320,229.3L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
 	</div>

 	<!-- :fill="color"  -->
 	<div v-if="stroke === 'bottom'" :class="className" :style="inlineStyle">
 		<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path :fill="color" fill-opacity="1" d="M0,64L120,64C240,64,480,64,720,64C960,64,1200,64,1320,64L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>-->
 		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path :fill="color" fill-opacity="1" d="M0,128L120,138.7C240,149,480,171,720,170.7C960,171,1200,149,1320,138.7L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
 	</div>
</template>

<style>
</style>
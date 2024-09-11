<script setup>

const props = defineProps({
	className: { type: String },
	idName: { type: String, required: true, default: 'modal'}
});
</script>

<template>
	<!--data-bs-backdrop="static" data-bs-keyboard="false"-->
	<div :id="idName" class="modal fade" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" :class="className">
      <div class="modal-content">
      	<slot />
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>
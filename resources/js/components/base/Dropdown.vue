<script setup>
const props = defineProps({
  title: { type: String },
  className: { type: String }
});
</script>

<template>
  <div class="dropdown">
    <a :class="className" class="nav-link" data-bs-toggle="dropdown" href="#">
      {{ title }} <i class="fa-solid fa-angle-down icon"></i>
    </a>
    <ul class="dropdown-menu menu">
      <slot />
    </ul>
  </div>
</template>

<style>
.dropdown .menu {
  background: #fff;
  border: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  margin-top: 10px;
}
.dropdown .icon {
  font-size: 14px;
}
</style>

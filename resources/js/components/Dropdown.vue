<script setup>
const props = defineProps({
  title: { type: String },
  items: { type: Array }
});
</script>

<template>
  <div class="dropdown">
    <a class="nav-link link" data-bs-toggle="dropdown" href="#">
      {{ title }} <i class="fa-solid fa-angle-down icon"></i>
    </a>
    <ul class="dropdown-menu menu">
      <li v-for="(item, i) in items" :key="i">
        <RouterLink :to="{ name: item.link.name }" class="dropdown-item item">
          {{ item.name }}
        </RouterLink>
      </li>
    </ul>
  </div>
</template>

<style>
.dropdown .menu {
  background: #fff;
  border: none;
} .dropdown .icon {
  font-size: 14px;
} .dropdown .item {
  font-weight:550;
  color: #373D3F!important;
} .dropdown .item:hover, .dropdown .item:focus{
  background: #996515;
  color: #f3f3f3!important;
  opacity: .7;
}
</style>

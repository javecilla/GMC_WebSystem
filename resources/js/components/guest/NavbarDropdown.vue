<script setup>
import Dropdown from '@/components/base/Dropdown.vue';

const props = defineProps({
  title: { type: String },
  className: { type: String },
  items: { type: Array }
});
</script>

<template>
	<Dropdown :className="className" :title="title">
		<div>
      <template v-for="(item, i) in items">
        <li v-if="item.status === 'Primary'" :key="i">
          <RouterLink :to="{ name: item.link.name }" class="dropdown-item dropdown-link">
            {{ item.name }}
          </RouterLink>
        </li>
      </template>
      <li><hr class="dropdown-divider"></li>
      <template v-for="(item, i) in items">
        <li v-if="item.status === 'Secondary'" :key="i">
          <RouterLink :to="{ name: item.link.name }" class="dropdown-item dropdown-link">
            {{ item.name }}
          </RouterLink>
        </li>
      </template>
    </div>
	</Dropdown>
</template>
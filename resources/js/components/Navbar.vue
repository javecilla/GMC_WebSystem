<script setup>
import { useStore } from 'vuex';
import { computed } from 'vue';

import GuestTopNav from '@/components/guest/TopNav.vue';
import AuthTopNav from '@/components/auth/TopNav.vue';

const store = useStore();
const isLogin = computed(() => store.getters['auth/user/isAuthenticated']);
</script>

<template>
	<nav class="app-navbar navbar navbar-expand-lg">
		<div class="container content" >
			<GuestTopNav v-if="!isLogin"/>
			<AuthTopNav v-if="isLogin"/>
		</div>
	</nav>
</template>

<style>
.app-navbar {
	background: #fff;
  border-bottom: 1px solid #f1f1f1;
} .app-navbar .content {
	max-width: 1250px;
}
</style>
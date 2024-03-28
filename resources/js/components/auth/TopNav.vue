<script setup>
import { useRouter } from 'vue-router';
import { useStore } from 'vuex';

import useAuth from '@/composables/auth/user';

const router = useRouter();
const store = useStore();
const { logout } = useAuth();

const onLogout = async () => {
	await logout();
  store.dispatch('auth/user/setAuth', false);
  router.push({ name: 'login' });
};
</script>

<template>
	<div>
		<button type="button" @click.prevent="onLogout">logout admin</button>
	</div>
</template>
<script setup>
import { useStore } from 'vuex';
import { computed } from 'vue';

import GuestFooter from '@/components/guest/Footer.vue';
import AuthFooter from '@/components/guest/Footer.vue';

const store = useStore();
const isLogin = computed(() => store.getters['auth/user/isAuthenticated']);
</script>

<template>
	<footer class="py-5">
		<div class="container content">
	    <GuestFooter v-if="!isLogin" />
	    <AuthFooter v-if="isLogin" />
	   </div>
  </footer>
</template>

<style scoped>
footer {
	background: #F5FAFE!important;
}
</style>
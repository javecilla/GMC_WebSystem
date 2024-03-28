<script setup>
import { onMounted, ref } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';
import { useToast } from 'vue-toast-notification';
import useAuth from '@/composables/auth/user';

const router = useRouter();
const store = useStore();
const user = ref([]);
const { getUser } = useAuth();

onMounted(async () => {
	const res = await getUser();
	user.value = res;
});
</script>

<template>
	<h1>welcome admin</h1>
	<p>Name: {{ user.name }}</p>
	<p>User Id: {{ user.id }}</p>
</template>
<script setup>
import { ref, onMounted } from 'vue'

const cookiesAgreed = ref(false)

onMounted(() => {
  checkCookiesAgreement();
})

const checkCookiesAgreement = () => {
  const cookiesAgreedValue = localStorage.getItem('cookiesAgreed');
  cookiesAgreed.value = cookiesAgreedValue === 'true';
};

const agreeToCookies = () => {
  localStorage.setItem('cookiesAgreed', 'true');
  cookiesAgreed.value = true;
};
</script>

<template>
  <div v-if="!cookiesAgreed" class="cookies-consent sticky-bottom bottom-0 alert alert-light alert-dismissible fade show">
    <div>
      <img src="@assets/images/41co0kies.png" loading="lazy" class="image" alt="Cookies"/>
      <span class="description">
        We use cookies to ensure you get the best experience on our website and online services. By continuing, you agree to our use cookies.
        <RouterLink :to="{ name: 'policy.term' }" class="link">Term of Use</RouterLink>,
        <RouterLink :to="{ name: 'policy.statement' }" class="link">Privacy Policy and Statement</RouterLink>.
      </span>
    </div>
    <button @click="agreeToCookies" type="button" class="btn-close"></button>
  </div>
</template>

<style scoped>
.cookies-consent {

}
.cookies-consent .image {
	width: 30px;
	height: 30px;
}
.cookies-consent .description {
	font-size: 14px;
	font-weight: bold;
	margin-left: 25px;
}
.cookies-consent .link {
	color: #b4813f;
}
</style>
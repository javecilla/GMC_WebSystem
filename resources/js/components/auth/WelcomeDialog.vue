<script setup>
const props = defineProps({
	className: { type: String },
	user: { type: Object },
});
</script>

<template>
  <div :class="className" class="welcome-box">
		<div class="welcome-content">
			<span class="active-user">Welcome Back <strong>{{ user.name }}</strong>!</span>
			<h3 class="header">Let's Manage, Create and Update Content</h3>
			<img src="@assets/images/cms/welcome-hero.png" class="img dashboard-hero" loading="lazy" alt="img"/>
		</div>
	</div>
</template>

<style scoped>
/*Welcome user*/
.welcome-content {
	margin-top:10px;
}
.welcome-box {
	width: auto;
	height: 140px;
	/*background: red;*/
	background-image: linear-gradient(to left, #5a3b2f, #b4813f);
	border-radius: 5px;
	margin-top: 40px;
	padding: 30px;
  color: #f3f3f3!important;
} .welcome-box .header{
	font-family: var(--app-font-poppins);
	font-size: 25px;
	color: #f3f3f3;
	margin-top: 5px;
} .welcome-box .active-user {
	font-family: var(--app-font-nunito);
	font-size: 18px;
}
.dashboard-hero {
	width: 300px;
	margin-top: -230px;
	margin-left: 560px;
}
</style>
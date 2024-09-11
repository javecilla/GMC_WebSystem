<script setup>
import Container from '@/components/base/Container.vue';
import Section from '@/components/base/Section.vue';
import useHelper from '@/composables/helper';

const { goBackToPrevious } = useHelper();
</script>

<template>
	<Section class="maintenance">
		<Container className="content">
			<div class="text-center align-items-center justify-content-center">
				<img class="d-block mx-auto image moving-img" alt="image"
				  src="@assets/images/maintenance.png"
				/>
				<h1 class="label gradient-dark-text">Under Maintenance</h1>
				<p class="text">
				  We're currently working behind the scenes to improve your experience. During this time, this page temporarily unavailable. We apologize for any inconvenience this may cause and appreciate your patience. Rest assured, we'll be back soon with exciting updates!
				</p>
				<a @click.prevent="goBackToPrevious()" class="link">
					Back to previous page <i class="fa-solid fa-arrow-right"></i>
      	</a>
			</div>
		</Container>
	</Section>
</template>

<style scoped>
.maintenance {
	padding: 30px 0 70px 0;
}
.maintenance .content {
	max-width: 1120px;
}
.maintenance .image {
	pointer-events: none;
} .maintenance h1 {
	font-family: var(--app-font-poppins);
	font-size: 46px;
	opacity: .9;
	font-weight: 900;
	text-transform: uppercase;
	margin: 0px;
	margin-top: -35px;
} .maintenance p {
	font-family: var(--app-font-roboto);
	font-size: 18px;
	font-weight: 400;
	opacity: .9;
	margin-top: 10px;
} .maintenance a {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  cursor: pointer;
  transition: all ease .3s;
} .maintenance a:hover {
 	text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.maintenance {
		padding: 20px 0 60px 0;
	}
	.maintenance .content {
		max-width: 1010px;
	}
	.image {
		width: 400px;
		margin-left: -20px;
	}
	.maintenance h1 {
		font-size: 26px;
		margin-top: -35px;
	} .maintenance p {
		font-size: 15px;
		margin-top: 10px;
	} .maintenance a {
	  font-size: 15px;
	}
}
</style>
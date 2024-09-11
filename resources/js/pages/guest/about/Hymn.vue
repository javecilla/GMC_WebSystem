<script setup>
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';
</script>

<template>
	<small class="visually-hidden">Hymn</small>
</template>

<style scoped>
/*about-us-hymn*/
.hymn {
	background: #F8FAFC;
} .hymn .content {
	margin-top: -5px;
	max-width: 1150px;
} .hymn .content .text {
	margin-top: 10px;
	font-size: 17px;
	line-height: 26px;
} .hymn .content .link {
  font-size: 17px;
  font-weight: bold;
  color: var(--app-dark-black);
  text-decoration: none;
  opacity: .7;
  transition: all ease .3s;
} .hymn .content .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-black);
  opacity: .9;
}
/*end-about-us-hymn*/
</style>
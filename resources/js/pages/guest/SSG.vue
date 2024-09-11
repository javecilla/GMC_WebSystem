<script setup>
import Container from '@/components/base/Container.vue';
import Section from '@/components/base/Section.vue';
import Banner from '@/components/guest/Banner.vue';
</script>

<template>
	<Banner :image="'bannerssg.png'" />
	<Section className="ssg-sta-maria">
		<Container className="content">
			<h1>Maintenance</h1>
		</Container>
	</Section>
</template>
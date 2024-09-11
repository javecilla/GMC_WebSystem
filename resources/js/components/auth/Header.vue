<script setup>
import Header from '@/components/base/Header.vue';
</script>

<template>
	<Header>
		<!-- <span class="date-time">
			<i class="fa-regular fa-calendar-days"></i>&nbsp;
			<span id="datetime"></span>
		</span> -->
		<!-- <template v-if="user">
			<span class="user-role">
				<i class="fa-solid fa-circle-check"></i> {{ user.role }} |
			</span>
			<span class="date-time" id="datetime"></span>
		</template>
		<template v-else>
			<span class="loading">
				<i class="fas fa-spinner fa-spin"></i> Loading
			</span>
		</template> -->
		<!-- <div class="float-end">
			<span>test</span>
	  </div> -->
	</Header>
</template>

<style scoped>
.date-time {
	font-size: 14px;
	font-weight: bold;
	color: #f3f3f3;
	cursor: default;
}
</style>
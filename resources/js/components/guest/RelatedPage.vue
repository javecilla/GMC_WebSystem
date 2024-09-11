<script setup>
import { computed } from 'vue';
import { useRouter } from 'vue-router';

const props = defineProps({
	data: { type: Array }
});

const route = useRouter();
const filteredLinks = computed(() => {
	/*filter the links only get the links if this 'secondary'
	and if the current page match to the route then don't fetch it*/
	return props.data.filter(item => {
		return item.status === 'Secondary' &&
			item.link.name !== route.currentRoute.value.name;
	});
});

</script>

<template>
	<div id="externalLinks" class="mt-3">
		<label class="label">Related page</label>
		<ul class="list-group list-group-flush list">
			<template v-for="(item, i) in filteredLinks" :key="i">
				<!-- check if the current page is much in the router in links then don't fetch it -->
				<li class="list-group-item item">
					<RouterLink :to="{ name: item.link.name }" class="link-dark">
					  <i class="fa-solid fa-caret-right"></i> {{ item.name }}
					</RouterLink>
				</li>
			</template>
		</ul>
	</div>
</template>
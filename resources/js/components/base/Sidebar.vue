<script setup>
</script>

<template>
	<aside class="position-sticky sidebar">
		<slot/>
	</aside>
</template>

<style>
.sidebar {
	top: 2rem;
} .sidebar .label {
	text-transform: uppercase;
	font-weight: 600;
	margin-bottom: 20px;
} .sidebar .list {

} .sidebar .list .item {
	opacity: .8;
	cursor: pointer;
} .sidebar .list .item:hover {
	opacity: 1;
}
.sidebar .list .item.s-active {
	font-weight: 600;
	border-left: 5px solid var(--app-light-brown);
	border-radius: 5px;
}
</style>
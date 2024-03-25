<template>
	<div class="container d-flex justify-content-center align-items-center">
		<div class="w-100 ">
			<table class="table table-bordered">
				<caption>Testing Lang</caption>
				<thead>
					<tr>
						<th>Name</th>
						<th>Year and Level</th>
						<th>Course</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="item in tests" :key="item.id">
						<td>{{ item.name}}</td>
						<td>{{ item.yearLevel}}</td>
						<td>{{ item.course}}</td>
						<td>{{ item.message}}</td>
						<td>
							<RouterLink :to="{ name: 'test.edit', params: { id: item.id }}" 
								class="btn btn-warning">Edit
							</RouterLink>&nbsp;
							<button type="button" @click="destroyTest(item.id)" 
								class="btn btn-danger">Delete
							</button>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</template>

<script>
	import useTest from './../../composables/tests';
	import { onMounted } from 'vue';

	export default {
		setup() {
			const { tests, getTests, deleteTest } = useTest()

			onMounted(getTests)
			
			const destroyTest = async (id) => {
				if(!window.confirm('Are you sure to delete?')) {
					return;
				}

				await deleteTest(id);
				await getTests();
			}

			return {	
				tests,
				destroyTest
			}
		}
	}
</script>
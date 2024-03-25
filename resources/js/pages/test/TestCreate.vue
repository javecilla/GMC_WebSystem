<template>
	<div class="container d-flex justify-content-center align-items-center">
		<div class="w-50 ">
			<p class="text-danger fw-bold d-flex align-items-center" v-if="errors !== ''">
		   	{{ errors }}
			</p>

			<form @submit.prevent="saveTest">
				<div class="mb-3">
					<input type="text" class="form-control" name="name" placeholder="Name" v-model="form.name">
				</div>
				<div class="mb-3">
				  <select class="form-select" name="year_level" v-model="form.year_level">
					  <option selected>Year Level</option>
					  <option value="1st Year">1st Year</option>
					  <option value="2nd Year">2nd Year</option>
					  <option value="3rd Year">3rd Year</option>
					  <option value="4th Year">4th Year</option>
					</select>
				</div>
				<div class="mb-3">
				  <select class="form-select" name="course" v-model="form.course">
					  <option selected>Course</option>
					  <option value="BSIT">BSIT</option>
					  <option value="BSCS">BSCS</option>
					  <option value="BSIS">BSIS</option>
					</select>
				</div>
				<div class="mb-3">
					<textarea class="form-control" name="message" rows="3"
					placeholder="Message" v-model="form.message"></textarea>
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-success btn-lg w-100">
						Create
					</button>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
	import {reactive } from 'vue';
	import useTest from './../../composables/tests';

  export default {
  	setup() {
  		const { errors, createTest } = useTest()

  		const form = reactive({
  			'name': '',
  			'year_level': '',
  			'course': '',
  			'message': '',
  		})

  		const saveTest = async () => {
  			await createTest({...form});
  		}

  		return {
  			form,
  			errors,
  			saveTest
  		}
  	}
  }
</script>
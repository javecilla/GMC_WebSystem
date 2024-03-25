<script setup>
import useTest from '@/composables/tests';
import { onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { useToast } from 'vue-toast-notification';

const props = defineProps({
	id: { 
		required: true, 
		type: String 
	}
});

const { test, getTest, updateTest } = useTest();
const router = useRouter();
const toast = useToast();

onMounted(async () => {
	try {
		await getTest(props.id)
	} catch (err) {
		toast.open({ message: err, type: 'error' });
	}
});

const saveTest = async () => {
	try {
		const res = await updateTest(props.id);
		toast.open({ message: res.text, type: res.type });
	} catch (err) {
		toast.open({ message: err, type: 'error' });
	}
};
</script>

<template>
	<div class="container d-flex justify-content-center align-items-center">
		<div class="w-50 ">
			<form @submit.prevent="saveTest">
				<div class="mb-3">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" v-model="test.name">
					<div class="invalid-feedback" id="nameError"></div>
				</div>
				<div class="mb-3">
				  <select class="form-select" name="year_level" v-model="test.year_level">
					  <option selected>Year Level</option>
					  <option value="1st Year">1st Year</option>
					  <option value="2nd Year">2nd Year</option>
					  <option value="3rd Year">3rd Year</option>
					  <option value="4th Year">4th Year</option>
					</select>
				</div>
				<div class="mb-3">
				  <select class="form-select" name="course" v-model="test.course">
					  <option selected>Course</option>
					  <option value="BSIT">BSIT</option>
					  <option value="BSCS">BSCS</option>
					  <option value="BSIS">BSIS</option>
					</select>
				</div>
				<div class="mb-3">
					<textarea class="form-control" name="message" rows="3"
					placeholder="Message" v-model="test.message"></textarea>
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-success btn-lg w-100">
						Update
					</button>
					<RouterLink :to="{ name: 'test.index'}" 
						class="btn btn-secondary mt-2 w-100 btn-lg">Back
					</RouterLink>
				</div>
			</form>
		</div>
	</div>
</template>
<script setup>
import { useStore } from 'vuex';
import { computed } from 'vue';

const store = useStore();
const quickLinks = computed(() => store.getters['guest/footer/getQuickLinks']);
const academics = computed(() => store.getters['guest/footer/getLinksAcademics']);
</script>

<template>
	<div class="guest-footer">
		<div class="row">
			<div class="col-6 col-md-2 mb-3">
	      <h5 class="label gradient-dark-text">Quick Links</h5>
	      <ul class="nav flex-column">
	        <li v-for="(item, i) in quickLinks" :key="i" class="nav-item mb-2">
		        <RouterLink :to="item.link" class="nav-link f-link p-0">
	            {{ item.name}}
	          </RouterLink>
	        </li>
	      </ul>
	    </div>

	    <div class="col-6 col-md-2 mb-3">
	      <h5 class="label gradient-dark-text">Academics</h5>
	     	<ul class="nav flex-column">
	        <li v-for="(item, i) in academics" :key="i" class="nav-item mb-2">
		        <RouterLink :to="item.link" class="nav-link f-link p-0">
	            {{ item.name}}
	          </RouterLink>
	        </li>
	      </ul>
	    </div>

	    <div class="col-6 offset-md-1 col-md-2 mb-3">
	      <h5 class="label gradient-dark-text">Online Services</h5>
	      <ul class="nav flex-column">
	        <li class="nav-item mb-2">
	        	<a href="https://admission.goldenmindsbulacan.com/" rel="noopener noreferrer" class="nav-link f-link p-0">Enrollment | Application</a>
	       	</li>
	        <li class="nav-item mb-2">
	        	<a href="https://goldenmindsbulacan.com/gmc-sis/gmc%20login.html" rel="noopener noreferrer" class="nav-link f-link p-0">SIS for Students</a>
	        </li>
	        <li class="nav-item mb-2">
	        	<a href="#" rel="noopener noreferrer" class="nav-link f-link p-0">SIS for Faculty</a>
	        </li>
	        <h5 class="label gradient-dark-text mt-3">Downloads</h5>
	        <ul class="nav flex-column">
	         	<li class="nav-item mb-2">
	          	<a href="javascript:void(0)" class="nav-link f-link p-0">For Students</a>
	          </li>
	          <li class="nav-item mb-2">
	          	<a href="javascript:void(0)" class="nav-link f-link p-0">For Faculty</a>
	          </li>
	        </ul>
	      </ul>
	    </div>

	    <div class="col-md-5 mb-3">
	      <form>
	        <h5 class="label gradient-dark-text">Golden Minds Colleges</h5>
	        <p class="text">
	        	Is a distinguished private school providing tuition-free education. Our institution is committed to nurturing graduates who excel in the ever-evolving global landscape
	        </p>
	        <p class="links-label"><i>Campus Address:
	         	<a href="javascript:void(0)" class="f-link">Sta.Maria</a>,
	          <a href="javascript:void(0)" class="f-link">Balagtas</a>,
	          <a href="javascript:void(0)" class="f-link">Guiguinto</a></i>
	        </p>
	        <p style="margin-top: -10px;" class="links-label"><i>Hotline: 
	          <a href="javascript:void(0)" class="f-link">(+63) 939 449 9844</a> /
	          <a href="javascript:void(0)" class="f-link">922 688 0228</a></i>
	        </p>
	        <p style="margin-top: -10px;" class="links-label"><i>Email Us:
	          <a href="javascript:void(0)" class="f-link">inquire@goldenmindsbulacan.com</a></i> 
	        </p>
	      </form>
	      <div>
	       	<ul class="list-unstyled d-flex social-box">
			      <li class="ms-3">
			      	<a class="link-body-emphasis social-link" href="javascript:void(0)" target="_blank" >
			      		<i class="icon fa-brands fa-facebook"></i>
			      	</a>
			     	</li>
			     	<li class="ms-3">
			      	<a class="link-body-emphasis social-link" href="javascript:void(0)" target="_blank" >
			      		<i class="icon fa-brands fa-square-instagram"></i>
			      	</a>
			      </li>
			     	<li class="ms-3">
			      	<a class="link-body-emphasis social-link" href="javascript:void(0)" target="_blank" >
			      		<i class="icon fa-brands fa-square-x-twitter"></i>
			      	</a>
			      </li>
			      <li class="ms-3">
			      	<a class="link-body-emphasis social-link" href="javascript:void(0)" target="_blank" >
			      		<i class="icon fa-brands fa-linkedin"></i>
			      	</a>
			     	</li>  
			    </ul>
	      </div>
	    </div>
	  </div>

	  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
	    <p class="text-start">Maintain and Manage by Information System</p>
	    <p class="text-end"> 
	     	<a href="javascript:void(0)" class="f-link">Website</a>,
	     	<a href="javascript:void(0)" class="f-link">Terms of Use</a>,
	      <a href="javascript:void(0)" class="f-link">Privacy Statement</a>,
	    </p>
	  </div>
	</div>
</template>

<style scoped>
.guest-footer .label {
	font-size: 19px;
	font-weight: bold;
} .guest-footer .f-link {
	font-weight: normal;
	color: #010101;
	text-decoration: none;
} .guest-footer .f-link:hover {
	text-decoration: underline;
	color: var(--app-light-brown);
} .guest-footer .text {
	font-size: 14px;
	opacity: .8;
} .guest-footer .links-label {
	font-weight: 600;
	opacity: .9;
	margin-top: -5px;
} .guest-footer .social-link {
	opacity: .9;
} .guest-footer .social-box {
	margin-left: -15px;
} .guest-footer .social-link .icon {
	font-size: 25px;
	color: #000;
	transition: all ease .1s;
} .guest-footer .social-link .icon:hover {
	color: var(--app-light-brown);
	transform: scale(1.1);
}
</style>
<script setup>
import { useStore } from 'vuex';
import { computed } from 'vue';
import Footer from '@/components/base/Footer.vue';
import ExternalLink from '@/components/guest/ExternalLink.vue';

const store = useStore();
const quickLinks = computed(() => store.getters['guest/footer/getQuickLinks']);
const academics = computed(() => store.getters['guest/footer/getLinksAcademics']);
</script>

<template>
	<Footer>
		<div class="guest-footer">
			<div class="row">
				<div class="col-6 col-md-2 mb-3">
		      <h5 class="label gradient-dark-text">Quick Links</h5>
		      <ul class="nav flex-column">
		        <li v-for="(item, i) in quickLinks" :key="i" class="nav-item mb-3">
			        <RouterLink :to="item.link" class="nav-link f-link p-0">
		            {{ item.name}}
		          </RouterLink>
		        </li>
		      </ul>
		    </div>

		    <div class="col-6 col-md-2 mb-3">
		      <h5 class="label gradient-dark-text">Academics</h5>
		     	<ul class="nav flex-column">
		        <li v-for="(item, i) in academics" :key="i" class="nav-item mb-3">
			        <RouterLink :to="item.link" class="nav-link f-link p-0">
		            {{ item.name}}
		          </RouterLink>
		        </li>
		      </ul>
		    </div>

		    <div class="col-6 offset-md-1 col-md-2 mb-3">
		      <h5 class="label gradient-dark-text">Online Services</h5>
		      <ul class="nav flex-column">
		        <li class="nav-item mb-3">
		        	<ExternalLink
                to="https://sis.goldenmindsbulacan.com/auth/login"
                text="Online Portal"
                className="nav-link f-link p-0"
              />
		        </li>
            <li class="nav-item mb-3">
            	<ExternalLink
                to="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for"
                text="Online Enrollment"
                className="nav-link f-link p-0"
              />
            </li>
		        <h5 class="label gradient-dark-text mt-3">Downloads</h5>
		        <ul class="nav flex-column">
		         	<li class="nav-item mb-3">
		          	<a href="javascript:void(0)" class="nav-link f-link p-0">For Students</a>
		          </li>
		          <li class="nav-item mb-3">
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
		        <p class="links-label mb-3">
		        	<i>Campus Address:
			        	<RouterLink :to="{ name: 'contact'}" class="f-link">
	                Sta.Maria
	              </RouterLink>
	              <RouterLink :to="{ name: 'contact'}" class="f-link">
	                Balagtas
	              </RouterLink>
	              <RouterLink :to="{ name: 'contact'}" class="f-link">
	                Guiguinto
	              </RouterLink>
            	</i>
		        </p>
		        <p class="links-label mb-3">
		        	<i>Hotline:
			        	<ExternalLink
	                to="tel:+639394499844"
	                text="(+63) 939 449 9844"
	                className="f-link"
	              />/
	              <ExternalLink
	                to="tel:+639226880228"
	                text="(+63) 922 688 0228"
	                className="f-link"
	              />
		          </i>
		        </p>
		        <p class="links-label mb-3">
		        	<i>Email Us:
		        		<ExternalLink
	                to="mailto:inquire@goldenmindsbulacan.com"
	                text="inquire@goldenmindsbulacan.com"
	                className="f-link"
	              />
		          </i>
		        </p>
		      </form>
		      <div>
		       	<ul class="list-unstyled d-flex social-box">
				      <li class="ms-3">
				      	<a class="link-body-emphasis social-link" rel="noopener noreferrer" href="https://www.facebook.com/gmcstamaria2015" target="_blank" >
				      		<i class="icon fa-brands fa-facebook"></i>
				      	</a>
				     	</li>
				     	<li class="ms-3">
				      	<a class="link-body-emphasis social-link" rel="noopener noreferrer" href="javascript:void(0)" target="_blank" >
				      		<i class="icon fa-brands fa-square-instagram"></i>
				      	</a>
				      </li>
				     	<li class="ms-3">
				      	<a class="link-body-emphasis social-link" rel="noopener noreferrer" href="javascript:void(0)" target="_blank" >
				      		<i class="icon fa-brands fa-square-x-twitter"></i>
				      	</a>
				      </li>
				      <li class="ms-3">
				      	<a class="link-body-emphasis social-link" rel="noopener noreferrer" href="javascript:void(0)" target="_blank" >
				      		<i class="icon fa-brands fa-linkedin"></i>
				      	</a>
				     	</li>
				    </ul>
		      </div>
		    </div>
		  </div>

		  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
		    <p class="text-start text-muted"><small>Maintain and Manage by Information System</small></p>
		    <p class="text-end">
		    	<small>
	        	<RouterLink :to="{ name: 'policy.term' }" class="f-link text-muted">Term of Use</RouterLink>,
	        	<RouterLink :to="{ name: 'policy.statement' }" class="f-link text-muted">Privacy Policy and Statement</RouterLink>.
		    	</small>
		    </p>
		  </div>
		</div>
	</Footer>
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
	font-size: 15px;
	opacity: .8;
	line-height: 25px;
} .guest-footer .links-label {
	font-weight: 600;
	opacity: .9;
	margin-top: -5px;
} .guest-footer .social-link {
	opacity: .9;
} .guest-footer .social-box {
	margin-left: -15px;
} .guest-footer .social-link .icon {
	font-size: 30px;
	color: #000;
	opacity: .9;
	transition: all ease .1s;
} .guest-footer .social-link .icon:hover {
	color: var(--app-light-brown);
	transform: scale(1.1);
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.guest-footer .label {
		font-size: 18px;
	} .guest-footer .f-link {
		font-size: 15px;
	} .guest-footer .text {
		font-size: 15px;
		opacity: .8;
	} .guest-footer .links-label {
		margin-top: -5px;
	} .guest-footer .social-link {
		opacity: .9;
	} .guest-footer .social-box {
		margin-left: -15px;
	} .guest-footer .social-link .icon {
		font-size: 25px;
	}
}
</style>
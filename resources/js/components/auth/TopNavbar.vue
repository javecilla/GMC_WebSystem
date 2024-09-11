<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { useStore } from 'vuex';
import Navbar from '@/components/base/Navbar.vue';
import useTransformer from '@/utilities/transformer';

const store = useStore();
const router = useRouter();
const user = ref(null);
const { ucfirst } = useTransformer();

const onLogout = async () => {
  const res = await store.dispatch('auth/user/onLogout');
  // console.log(res);
  router.push({ name: 'login' });
};

onMounted(() => {
	setTimeout(async () => {
		const fetchUser = await store.dispatch('auth/user/getUser');
		user.value = fetchUser;
	}, 1000);
});
</script>

<template>
	<Navbar>
		<RouterLink :to="{ name: 'home'}" class="navbar-brand">
      <img src="@assets/images/cms/header-logo.png" height="65" loading="lazy" alt="Golden Minds Colleges Logo"/>
    </RouterLink>
		<div id="desktopMenu" class="d-none d-lg-inline float-end">
			<div class="d-flex flex-wrap">
				<ul class="nav me-auto pb-2" v-if="user">
					<li class="nav-item item">
	          <RouterLink :to="{ name: 'u.dashboard', params: { role: user.role }}" class="nav-link link">
	            Dashboard
	          </RouterLink>
	        </li>
	        <li class="nav-item item dropdown page-dropdown">
						<a class="nav-link link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Pages
						</a>
						<div class="dropdown-menu menu page-menu" >
						  <div class="row" >
					      <div class="col-md-6">
					        <ul class="list-unstyled">
					        	<li>
					        		<RouterLink :to="{ name: 'u.pages.calendar', params: { role: user.role }}" class="dropdown-item">
					        			Calendar
					        		</RouterLink>
					        	</li>
					          <li><a class="dropdown-item" href="#">News</a></li>
					          <li><a class="dropdown-item" href="#">Announcement</a></li>
					          <li><a class="dropdown-item" href="#">Events</a></li>
					          <li><a class="dropdown-item" href="#">Gallery</a></li>
					        </ul>
					      </div>
					      <div class="col-md-6" style="margin-left: -60px;">
					        <ul class="list-unstyled">
					        	<li><a class="dropdown-item" href="#">Senior High School</a></li>
					        	<li><a class="dropdown-item" href="#">Basic Education</a></li>
					          <li><a class="dropdown-item" href="#">Student Affairs and Services</a></li>
										<li><a class="dropdown-item" href="#">Guidance and Counseling</a></li>
										<li><a class="dropdown-item" href="#">Supreme Student Goverment</a></li>
					        </ul>
					      </div>
						  </div>
						</div>
					</li>
          <li class="nav-item item">
          	<a href="#" class="nav-link link">
          		File Manager
          	</a>
          </li>
          <li class="nav-item item">
          	<a href="#" class="nav-link link">
          		Site Settings
          	</a>
          </li>
          <li class="nav-item item dropdown user-dropdown">
            <button type="button" class="nav-link link button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="rounded-circle" width="24" height="24" src="@assets/images/cms/icons/admin.png" loading="lazy" alt="admin"/>
            	{{ ucfirst(user.role) }}
            </button>
            <ul class="dropdown-menu menu user-menu">
				      <li>
				        <a class="dropdown-item d-flex gap-3 align-items-center" href="#">
				          <i class="fa-solid fa-user"></i> Profile
				        </a>
				      </li>
				     	<li>
				        <a @click.prevent="onLogout" class="dropdown-item d-flex gap-3 align-items-center" href="#logout">
				          <i class="fa-solid fa-power-off"></i> Logout
				        </a>
				      </li>
				      <li><hr class="dropdown-divider"></li>
				      <li>
				        <a class="dropdown-item d-flex gap-3 align-items-center" href="#">
				          <i class="fa-solid fa-users"></i> Permission
				        </a>
				      </li>
		    		</ul>
          </li>
				</ul>
			</div>
		</div>
	</Navbar>
</template>

<style scoped>
.page-menu{
  min-width: 400px;
  margin-left: -170px!important;
  border-radius: 5px;
  z-index: 1;
}
.user-menu {
	margin-left: -20px!important;
	color: #373D3F!important;
	border-radius: 5px;
}
.dropdown-menu .dropdown-item {
  color: #373D3F!important;
  margin-left: 1px!important;
  margin-top: 6px;

}
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
  background: transparent;
  text-decoration: underline;
	transform: scale(1.02);
	color: #373D3F;
	opacity: .9;
	text-shadow: none!important;
/*  color: #f3f3f3!important;
  opacity: .7;*/
}
</style>
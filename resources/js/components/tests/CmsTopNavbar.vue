<script setup>
import Navbar from '@/components/base/Navbar.vue';
</script>

<template>
	<Navbar>
		<RouterLink :to="{ name: 'home'}" class="navbar-brand">
      <img src="@assets/images/cms/logo.png" height="65" loading="lazy" alt="Golden Minds Colleges Logo"/>
    </RouterLink>

		<div id="desktopMenu" class="d-none d-lg-inline float-end">
      <div class="d-flex flex-wrap">
        <ul class="nav me-auto pb-2">
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              Dashboard
            </RouterLink>
          </li>
          <li class="nav-item item dropdown">
            <button type="button" class="nav-link link button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
             Academics
            </button>
            <ul class="dropdown-menu menu">

				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#">
									Office of the Student Affairs <br/>and Services
				       	</a>
				      </li>
				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#">
									Office of the Guidance and <br/>Counseling
				       	</a>
				      </li>
				      <li>
				        <a @click.prevent="onLogout" class="dropdown-item d-flex align-items-center" href="#logout">
				          Supreme Student Goverment
				        </a>
				      </li>
		    		</ul>
          </li>
          <li class="nav-item item dropdown">
            <button type="button" class="nav-link link button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
             Services
            </button>
            <ul class="dropdown-menu menu">
				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#">
									Senior High School
				        </a>
				      </li>
				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#">
									Basic Education
				        </a>
				      </li>
				      <li><hr class="dropdown-divider"></li>
				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#logout">
				          Faculty and Staff
				        </a>
				      </li>
				      <li>
				        <a class="dropdown-item d-flex align-items-center" href="#logout">
				          Career
				        </a>
				      </li>
		    		</ul>
          </li>
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              News
            </RouterLink>
          </li>
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              Announcement
            </RouterLink>
          </li>
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              Events
            </RouterLink>
          </li>
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              Gallery
            </RouterLink>
          </li>
          <li class="nav-item item">
            <RouterLink :to="{ name: 'dashboard'}" class="nav-link link">
              Calendar
            </RouterLink>
          </li>



          <li class="nav-item item dropdown">
            <button type="button" class="nav-link link button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user text-muted icon"></i>&nbsp;
             <span><span class="border-line">|</span> Jerome Avecilla</span>
            </button>
            <ul class="dropdown-menu menu">
			      <li>
			        <a class="dropdown-item d-flex gap-3 align-items-center" href="#">
			          <i class="fa-solid fa-user"></i> Profile
			        </a>
			      </li>
			      <li>
			        <a class="dropdown-item d-flex gap-3 align-items-center" href="#">
			          <i class="fa-solid fa-gear"></i> Settings
			       	</a>
			      </li>
			      <li><hr class="dropdown-divider"></li>
			      <li>
			        <a @click.prevent="onLogout" class="dropdown-item d-flex gap-3 align-items-center" href="#logout">
			          <i class="fa-solid fa-power-off"></i> Logout
			        </a>
			      </li>
		    	</ul>
          </li>
        </ul>
      </div>
   </div>
	</Navbar>
</template>
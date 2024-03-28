<script setup>
import Dropdown from '@/components/Dropdown.vue';
import BurgerMenu from '@/components/BurgerMenu.vue';
import { useStore, mapGetters } from 'vuex';
import { computed } from 'vue';

const store = useStore();
const abouts = computed(() => store.getters['guest/getDropdownLinksAbout']);
const academics = computed(() => store.getters['guest/getDropdownLinksAcademics'])
</script>

<template>
  <RouterLink :to="{ name: 'home'}" class="navbar-brand">
    <img src="@assets/images/521kanavbar.png" height="65" loading="lazy"/>
  </RouterLink>

  <BurgerMenu />
      
  <div id="desktopMenu" class="d-none d-lg-inline float-end">
    <div class="d-flex flex-wrap">
      <ul class="nav me-auto pb-2">
        <li class="nav-item item">
          <RouterLink :to="{ name: 'home'}" class="nav-link link">
            Home
          </RouterLink>
        </li>

        <li class="nav-item item">
          <Dropdown title="About" :items="abouts"/>
        </li>

        <li class="nav-item item">
          <Dropdown title="Academics" :items="academics"/>
        </li>

        <li class="nav-item item">
          <RouterLink :to="{ name: 'login'}" class="nav-link link">
            News
          </RouterLink>
        </li>

        <li class="nav-item item">
          <RouterLink :to="{ name: 'admin.dashboard'}" class="nav-link link">
            Announcements
          </RouterLink>
        </li>

        <li class="nav-item  item">
          <div class="dropdown">
            <a class="nav-link link" data-bs-toggle="dropdown" href="">
              Student Services <i class="fa-solid fa-angle-down icon"></i>
            </a>
            <ul class="dropdown-menu menu">
              <li><a rel="noopener noreferrer" class="dropdown-item item"
                href="https://goldenmindsbulacan.com/gmc-sis/gmc%20login.html">
                My Portal
              </a></li>
              <li><a rel="noopener noreferrer" class="dropdown-item item"
                href="https://admission.goldenmindsbulacan.com/">
                Registration
              </a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item item">
          <a class="nav-link link" id="search" href="#">
            <i class="fa-solid fa-magnifying-glass text-muted icon"></i>
          </a>
        </li>

      </ul>
    </div>
  </div>
</template>

<style>
.navbar-brand {
  cursor: pointer;
} .nav .item {
  margin-top: 10px;
  margin-left: -5px;
} .nav .item:focus, .nav .item:visited {
  color: #996515;
} .nav .link {
  font-weight: 600;
  font-size: 15px;
  color: #373D3F;
  border-radius: 8px;
  transition: all ease .1s;
} .nav .link:hover {
  color: var(--app-light-brown); 
  text-decoration: underline;
} .nav .link:focus {
  color: var(--app-light-brown);
} .nav .active {
  color: var(--app-light-brown)!important;
  display: inline-block;
  border-radius: 4px;
  border-bottom: 2px solid var(--app-light-brown);
} #search .icon {
  font-size: 22px;
  transition: all ease .3s;
} #search .icon:hover {
  color: var(--app-light-brown)!important; 
  transform: scale(1.1);
}
</style>
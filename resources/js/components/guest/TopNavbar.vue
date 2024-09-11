<script setup>
import { computed, reactive, onMounted } from 'vue';
import { useStore } from 'vuex';
import Navbar from '@/components/base/Navbar.vue';
import NavbarDropdown from '@/components/guest/NavbarDropdown.vue';
import SearchModal from '@/components/guest/SearchModal.vue';
import ExternalLink from '@/components/guest/ExternalLink.vue';

const store = useStore();
const abouts = computed(() => store.getters['guest/getDropdownLinksAbout']);
const academics = computed(() => store.getters['guest/getDropdownLinksAcademics']);

const state = reactive({
  active: false,
  modal: null,
});

onMounted(() => {
  state.modal = new bootstrap.Modal(`#searchModal`, {});
});

const openModal = () => {
  state.active = true;
  state.modal.show();
};

const toggleMenu = () => {
 const mobileNavbar = document.getElementById('mobileNavContent');
 mobileNavbar.classList.toggle('open');
};
</script>

<template>
  <Navbar>
    <RouterLink :to="{ name: 'home'}" class="navbar-brand">
      <img src="@assets/images/logotext.png" height="65" loading="lazy" alt="Golden Minds Colleges Logo"/>
    </RouterLink>

    <!-- Mobile -->
    <div id="mobileNavbar">
      <label class="d-lg-none d-block" for="menuBtn">
        <input type="checkbox" class="navcheckbox" id="menuBtn" @click="toggleMenu"/>
        <div class ="bar">
          <span class="top"></span>
          <span class="mid"></span>
          <span class="bot"></span>
        </div>
      </label>
      <div id="mobileNavContent" class="navbar-collapse offcanvas-collapse bg-white">
        <div class="d-block d-lg-none mt-2">
          <div class="row mt-3">
            <div class="col-6">
              <ul class="navbar-nav">
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'home'}" class="m-link">
                    Home
                  </RouterLink>
                </li>
                <li class="nav-item item">
                  <span class="text-muted">About</span>
                  <ul class="list-unstyled mt-2">
                    <template v-for="(item, i) in abouts">
                      <li v-if="item.status === 'Primary'" :key="i" class="mb-2 m-item">
                        <RouterLink :to="{ name: item.link.name }" class="m-link child">
                          {{ item.name }}
                        </RouterLink>
                      </li>
                    </template>
                  </ul>
                </li>
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'contact'}" class="m-link">
                    Contact
                  </RouterLink>
                </li>
                <li class="nav-item item mb-2">
                  <RouterLink :to="{ name: 'announcements'}" class="m-link">
                    Announcement
                  </RouterLink>
                </li>
                <li class="nav-item item mb-2">
                  <RouterLink :to="{ name: 'news'}" class="m-link">
                    News
                  </RouterLink>
                </li>
                <li class="nav-item item mb-2">
                  <RouterLink :to="{ name: 'events'}" class="m-link">
                    Events
                  </RouterLink>
                </li>
                <li class="nav-item item mb-2">
                  <RouterLink :to="{ name: 'gallery'}" class="m-link">
                    Gallery
                  </RouterLink>
                </li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="navbar-nav">
                <li class="nav-item item">
                  <span class="text-muted">Online Services</span>
                  <ul class="list-unstyled mt-2">
                    <li class="mb-2 m-item">
                      <ExternalLink
                        to="https://sis.goldenmindsbulacan.com/auth/login"
                        text="Online Portal"
                        className="m-link child"
                      />
                    </li>
                    <li class="mb-2 m-item">
                      <ExternalLink
                        to="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for"
                        text="Online Enrollment"
                        className="m-link child"
                      />
                    </li>
                  </ul>
                </li>
                <li class="nav-item item">
                  <span class="text-muted">Academics</span>
                  <ul class="list-unstyled mt-2">
                    <template v-for="(item, i) in academics">
                      <li v-if="item.status === 'Primary'" :key="i" class="mb-2 m-item">
                        <RouterLink :to="{ name: item.link.name }" class="m-link child">
                          {{ item.name }}
                        </RouterLink>
                      </li>
                    </template>
                  </ul>
                </li>
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'calendar'}" class="m-link">
                    Golden Minds Calendar
                  </RouterLink>
                </li>
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'osas'}" class="m-link">
                    Office for Student Affairs
                  </RouterLink>
                </li>
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'ogc'}" class="m-link">
                    Guidance and Counseling
                  </RouterLink>
                </li>
                <li class="nav-item item mb-3">
                  <RouterLink :to="{ name: 'ssg'}" class="m-link">
                    Supreme Student Goverment
                  </RouterLink>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Mobile -->

    <!-- Desktop -->
    <div id="desktopMenu" class="d-none d-lg-inline float-end">
      <div class="d-flex flex-wrap">
        <ul class="nav me-auto pb-2">
          <li class="nav-item item">
            <RouterLink :to="{ name: 'home'}" class="nav-link link">
              Home
            </RouterLink>
          </li>

          <li class="nav-item item">
            <NavbarDropdown title="About" :items="abouts" className="link" classChild="dropdown-item"/>
          </li>

          <li class="nav-item item">
            <NavbarDropdown title="Academics" :items="academics" className="link" classChild="dropdown-item"/>
          </li>

          <li class="nav-item  item">
            <div class="dropdown">
              <a class="nav-link link" data-bs-toggle="dropdown" href="javascript:void(0)">
                Online Services <i class="fa-solid fa-angle-down icon"></i>
              </a>
              <ul class="dropdown-menu menu">
                <li>
                  <ExternalLink
                    to="https://sis.goldenmindsbulacan.com/auth/login"
                    text="Online Portal"
                    className="dropdown-item dropdown-link"
                  />
                </li>
                <li>
                  <ExternalLink
                    to="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for"
                    text="Online Enrollment"
                    className="dropdown-item dropdown-link"
                  />
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item item">
            <RouterLink :to="{ name: 'calendar'}" class="nav-link link">
              Calendar
            </RouterLink>
          </li>

          <!-- <li class="nav-item item">
            <RouterLink :to="{ name: 'login'}" class="nav-link link">
              CMS Portal (Development)
            </RouterLink>
          </li> -->

          <li class="nav-item item">
            <button type="button" class="nav-link link button" id="search"  @click.prevent="openModal">
              <i class="fa-solid fa-magnifying-glass text-muted icon"></i>&nbsp;
             <span><span class="border-line">|</span> Search</span>
            </button>
          </li>
        </ul>
      </div>
   </div>
    <!-- End Desktop -->
  </Navbar>

  <SearchModal :isActive="state.active"/>
</template>

<style>
.text-line-through {
  text-decoration: line-through;
}
.divider {
  color: #373D3F;
  opacity: .1;
}
.m-item {
  text-indent: 20px;
}
.m-link {
  text-decoration: none;
  color: var(--app-dark-black);
  opacity: .9;
} .m-link:hover,
  .m-link:focus {
  color: var(--app-light-brown);
  text-decoration: underline;
}
.m-link.child {
  font-size: 15px;
}
/****Burger Menu****/
.bar {
  position: relative;
  cursor: pointer;
  display: flex;
  justify-content: right;
  opacity: .8;
} .bar .mid {
  height: 3px;
  width: 28px;
  background: #000;
  border-radius: 50px;
  position: absolute;
  transition: 0.2s ease;
} .bar .top {
  bottom: 3px;
  height: 3px;
  width: 28px;
  background: #000;
  border-radius: 50px;
  position: absolute;
  transition: 0.2s ease;
} .bar .bot {
  top: 7px;
  height: 3px;
  width: 28px;
  background: #000;
  border-radius: 50px;
  position: absolute;
  transition: 0.2s ease;
}
label[for="navbarMenu"] {
  cursor: pointer;
}
input.navcheckbox {
  position: absolute;
  left: -9999px;
  -webkit-appearance: none!important;
  visibility: hidden!important;
  display: none!important;
}
input.navcheckbox:checked ~ .bar .top {
  transform: rotate(-45deg);
  width: 27px;
  transform-origin: right;
  top: -10px;
}
input.navcheckbox:checked ~ .bar .bot {
  transform: rotate(45deg);
  width: 27px;
  transform-origin: right;
  top: 10px;
}
input.navcheckbox:checked ~ .bar .mid {
  transform: translateX(1px);
  opacity: 0;
}
.burger_position {
  margin-right: 51%;
}
@media screen and (max-width: 992px) {
  .burger_position {
    margin-right: 47%;
  }
}
@media screen and (max-width: 600px) {
  .burger_position {
    margin-right: 40%;
  }
}

@media screen and (max-width: 400px) {
  .burger_position {
    margin-right: 10%;
  }
}

.search_input:focus {
  border: 1px solid #b4813f;
  outline: none;
  box-shadow: inset #b4813f;
}


/*off canvas menu*/
@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 120px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #343a40;
    border-top: 1px solid #f3f3f3;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
    z-index: 1000; /* Set a higher z-index value */
  }
  .offcanvas-collapse.open {
    visibility: visible;
    transform: translateX(-100%);
  }
}

.nav-scroller .nav {
  color: rgba(255, 255, 255, .75);
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-scroller .nav-link:hover {
  color: #007bff;
}

.nav-scroller .active {
  font-weight: 500;
  color: #343a40;
}
/*a.router-link-active {
  color: var(--app-light-brown);
  text-decoration: underline;
}*/
.navbar-brand {
  cursor: pointer;
} .nav .item {
  margin-top: 10px;
  margin-left: -5px;
} .nav .item .link {
  font-weight: 600;
  font-size: 15px;
  color: #373D3F;
  border-radius: 8px;
  font-family: var(--app-poppins-font);
  transition: all ease .1s;
} .nav .item .link:hover {
  color: var(--app-light-brown);
  text-decoration: underline;
} .nav .item .link:focus {
  color: var(--app-light-brown);
}
.nav .item #search {
  margin-top: -6px;
} .nav .item #search .border-line {
  font-size: 20px;
  opacity: .5;
} .nav .item #search .icon {
  font-size: 17px;
} .nav .item #search:hover,
  #search .icon:hover {
  color: var(--app-light-brown)!important;
  text-decoration: none;
}
.nav .item .dropdown-link {
  color: #373D3F!important;
  margin-left: 1px!important;
  margin-top: 8px;
}
.nav .dropdown-link:hover,
.nav .dropdown-link:focus {
  background: #996515;
  color: #f3f3f3!important;
  opacity: .7;
}
</style>
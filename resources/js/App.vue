<script setup>
import { computed, defineAsyncComponent } from 'vue';
import { useStore } from 'vuex';
import Wrapper from '@/components/base/Wrapper.vue';
import Spinner from '@/components/Spinner.vue';
import BacktoTop from '@/components/BacktoTop.vue';

const store = useStore();
const isAuthenticated = computed(() => store.getters['auth/user/isAuthenticated']);

const GuestHeader = defineAsyncComponent(() => import('@/components/guest/Header.vue'));
const GuestNavbar = defineAsyncComponent(() => import('@/components/guest/TopNavbar.vue'));
const GuestFooter = defineAsyncComponent(() => import('@/components/guest/Footer.vue'));
const AuthHeader = defineAsyncComponent(() => import('@/components/auth/Header.vue'));
const AuthNavbar = defineAsyncComponent(() => import('@/components/auth/TopNavbar.vue'));
const CookieConsent = defineAsyncComponent(() => import('@/components/Cookies.vue'));
</script>

<template>
  <Suspense>
    <template #default>
      <div>
        <div v-if="!isAuthenticated">
          <GuestHeader />
          <GuestNavbar />
        </div>
        <div v-if="isAuthenticated" class="sticky-top">
          <AuthHeader />
          <AuthNavbar />
        </div>

        <RouterView v-slot="{ Component }">
          <Wrapper>
            <Component :is="Component" />
          </Wrapper>
        </RouterView>

        <div v-if="!isAuthenticated">
          <GuestFooter />

        </div>

        <BacktoTop />
        <CookieConsent />
      </div>
    </template>
    <template #fallback>
      <div>
        <Spinner :start="true"/>
      </div>
    </template>
  </Suspense>
</template>

<style>
:root {
  --app-light-brown: #b4813f;
  --app-semi-brown: #996515;
  --app-dark-brown: #5a3b2f;
  --app-dark-black: #000;
  --app-dirty-white: #f3f3f3;
  --app-font-poppins: 'Poppins', sans-serif;
  --app-font-roboto: 'Roboto', sans-serif;
  --app-font-nunito: 'Nunito', sans-serif;
}

::selection {
  background-color: var(--app-light-brown);
  color: var(--app-dirty-white);
  -webkit-background-clip: text;
   background-clip: text;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 2px grey;
  border-radius: 1px;
}

::-webkit-scrollbar-thumb {
  background: #cecece;
  border-radius: 1px;
  cursor: -webkit-grab;
}

::-webkit-scrollbar-thumb:hover {
  background: #cecece;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  padding: 0;
  font-family: var(--app-font-roboto)!important;
  background: #ffffff!important;
}

/*Text Gradient*/
.gradient-brown-text {
  background: -webkit-gradient(linear,left top,right top,from(var(--app-light-brown)),to(var(--app-dark-brown)));
  background-image: linear-gradient(90deg,var(--app-light-brown) 0,var(--app-dark-brown) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent
} .gradient-dark-text {
  background: -webkit-gradient(linear,left top,right top,from(#373D3F),to(#555F61));
  background-image: linear-gradient(90deg,#373D3F 0,#555F61 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent
} .gradient-golden-text {
  background: -webkit-gradient(linear,left top,right top,from(#e4c25a),to(var(--app-light-brown)));
  background-image: linear-gradient(90deg,#e4c25a 0,var(--app-light-brown) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent
}

/*Background*/
.bg-dot {
  background-color: #ffffff;
  background-image: radial-gradient(#F1F1F1 1px, transparent 1px);
  background-size: 22px 22px;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
} .bg-grid {
  height: 16rem;
  background-image:
    linear-gradient(to right, #f2f2f2 1px, transparent 1px),
    linear-gradient(to bottom, #f2f2f2 1px, transparent 1px)!important;
  background-size: 2.5rem 2.5rem;
  background-position: center center;
}

/*Links*/
.link-light-brown {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .link-light-brown:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
} .link-dark {
  font-size: 16px;
  color: var(--app-dark-brown);
  text-decoration: none;
  transition: all ease .3s;
} .link-dark i {
  opacity: .8;
} .link-dark:hover {
  text-decoration: underline;
  color: var(--app-light-brown);
}

/*Moving Image*/
.moving-img {
   animation: moveUpDown 4s ease-in-out infinite!important;
   pointer-events: none!important;
}
@keyframes moveUpDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}
/*Hover show '#'*/
.hashtag {
  position: relative;
} .hashtag:before {
  content: '#';
  position: absolute;
  top: 0;
  left: -20px;
  opacity: 0;
  transition: opacity 0.3s ease;
} .hashtag:hover::before {
  opacity: 1;
  color: var(--app-light-brown);
}

/*accordion*/
.light-accordion {
  color: #000000;
  opacity: .9;
  border-color: var(--bs-border-color);
  border-radius: 50px!important;
} .light-accordion .item {
  color: #000000;
  opacity: .9;
  background-color: #fbfbfb;
  border: 1px solid #F2F3F2;
  border-radius: 10px;
} .light-accordion .header {
  margin-bottom: 0;
} .light-accordion .header .button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
  font-size: 1rem;
  color: #000;
  opacity: .8;
  text-align: left;
  background-color: var(--app-dirty-white);
  border: 0;
  border-radius: 10px;
  overflow-anchor: none;
  transition: var(--bs-accordion-transition);
}
.light-accordion .header .button:not(.collapsed) {
  color: #000000;
  background-color: rgba(74, 74, 74, 0.10);
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
} .light-accordion .header .button:hover {
  opacity: .8;
   background-color: rgba(74, 74, 74, 0.10);
} .light-accordion .header .button:focus {
  z-index: 3;
  outline: 0;
  box-shadow: var(--bs-secondary-bg);
}

/*Nav tabs*/
.nav-tab-light nav > .nav.nav-tabs{
  border: none;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.nav-tab-light nav > div a.nav-item.nav-link {
  color: #000;
  opacity: .8;
  padding: 15px;
  border: none;
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
  background-color: var(--app-dirty-white);
  cursor: pointer;
  transition: all ease .5s;
}
.nav-tab-light nav > div a.nav-item.nav-link.active {
  color:#000;
  opacity: .8;
  background-color: rgba(74, 74, 74, 0.15);
}
.nav-tab-light nav > div a.nav-item.nav-link:hover {
  background-color: rgba(74, 74, 74, 0.15);
  transition:background 0.20s linear;
}
.nav-tab-light nav > div a.nav-item.nav-link:focus {
  outline: 0;
  box-shadow: var(--bs-secondary-bg);
   background-color: rgba(74, 74, 74, 0.15);
}
.nav-tab-light .tab-content{
  background-color: #fbfbfb;
  line-height: 25px;
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.nav-tab-light .tab-pane {
  padding: 25px;
}

/*CMS STATIC STYLE*/

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  /*accordion*/
  .light-accordion .header .button {
    font-size: 14px;
  }

  .light-accordion .accordion-body .header {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  .light-accordion .accordion-body .header .image {
    width: 350px;
    height:300px;
  }

  /*Nav tabs*/
  .nav-tab-light nav > div a.nav-item.nav-link {
    padding: 15px;
    font-size: 14px;
  }
  .nav-tab-light .tab-content {
    font-size: 14px;
    background-color: #fbfbfb;
    line-height: 22px;
  }
  .nav-tab-light .tab-pane {
    padding: 20px;
  }
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}

/* Extra large screns, TV (1201px-and above)*/
/*@media only screen and (min-width: 1201px) {
}*/
</style>
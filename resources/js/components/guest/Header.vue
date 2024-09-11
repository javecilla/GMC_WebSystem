<script setup>
import Header from '@/components/base/Header.vue';
import ExternalLink from '@/components/guest/ExternalLink.vue';
</script>
<template>
  <Header>
  	<div class="row">
    	<div class="col-md-6 d-none d-lg-inline ">
    	  <div class="d-flex">
          <ExternalLink
            to="tel:+63939449984"
            text="Contact Us: (+63) 939 449 9844"
            icon="fa-solid fa-phone"
            className="d-none d-lg-inline link"
            inlineStyle="font-size: 14px;"
          />&nbsp;&nbsp;
          <ExternalLink
            to="mailto:inquire@goldenmindsbulacan.com"
            text="inquire@goldenmindsbulacan.com"
            icon="fa-solid fa-envelope"
            className="d-none d-lg-inline link"
            inlineStyle="font-size: 14px;"
          />
    	  </div>
    	</div>

    	<div class="col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
    	  <div class="d-flex">
          <ExternalLink
            to="https://www.facebook.com/gmcstamaria2015"
            icon="fa-brands fa-facebook-f"
            className="link"
            inlineStyle="font-size: 14px;"
          />
          <ExternalLink
            to="https://www.youtube.com/@goldenmindscolleges7588"
            icon="fa-brands fa-youtube"
            className="link"
            inlineStyle="font-size: 14px;"
          />
          <ExternalLink
            to="https://www.youtube.com/@goldenmindscolleges7588"
            icon="fa-brands fa-linkedin-in"
            className="link"
            inlineStyle="font-size: 14px;"
          />
          <ExternalLink
            to="mailto:info@goldenmindsbulacan.com"
            icon="fa-solid fa-envelope"
            className="d-lg-none link"
            inlineStyle="font-size: 14px;"
          />
          <ExternalLink
            to="tel:+639394499844"
            icon="fa-solid fa-phone"
            className="d-lg-none link"
            inlineStyle="font-size: 14px;"
          />
    	  </div>
    	</div>
    </div>
  </Header>
</template>

<style scoped>
.link {
  text-decoration: none;
  color: #f3f3f3;
  opacity: .9;
  font-size: 15px;
  transition: all ease .1s;
} .link:hover {
  opacity: .8;
}
</style>
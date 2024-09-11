<script setup>
</script>

<template>
	<div id="errors">
    <div class="errors">
      <div class="errors-code">
        <h1>404</h1>
      </div>
      <h2 class="gradient-dark-text">We are sorry, Page Not Found!</h2>
      <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
      <RouterLink :to="{ name: 'home' }" class="link">
				Back to home page <i class="fa-solid fa-arrow-right"></i>
      </RouterLink>
    </div>
  </div>
</template>

<style scoped>
#errors {
  position: relative;
  height: 85vh;
}
#errors .errors {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.errors {
  max-width: 920px;
  width: 100%;
  line-height: 1.4;
  text-align: center;
  padding-left: 15px;
  padding-right: 15px;
}
.errors .errors-code {
 	position: absolute;
 	height: 100px;
 	top: 0;
 	left: 50%;
 	-webkit-transform: translateX(-50%);
 	-ms-transform: translateX(-50%);
 	transform: translateX(-50%);
 	z-index: -1;
}
.errors .errors-code h1 {
  font-family: var(--app-font-roboto);
  color: lightgray;
  font-weight: 900;
  font-size: 276px;
  margin: 0px;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.errors h2 {
	font-family: var(--app-font-roboto);
	font-size: 46px;
	opacity: .9;
	font-weight: 900;
	text-transform: uppercase;
	margin: 0px;
	margin-top: 35px;
}
.errors p {
	font-family: var(--app-font-roboto);
	font-size: 18px;
	font-weight: 400;
	margin-top: 100px;
	opacity: .9!important;
}
.errors a {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
}
.errors a:hover {
 	text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
.lower-case {
  text-transform: lowercase;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {
  #errors {
    height: 60vh;
  }
  .errors .errors-code h1 {
    font-size: 170px;
  }
  .errors h2 {
    font-size: 30px;
    margin-top: 26px;
  }
  .errors p {
    font-size: 16px;
    margin-top: 50px;
  }
  .errors a {
    font-size: 16px;
  }
}
</style>
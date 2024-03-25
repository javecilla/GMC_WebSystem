<template>
	<label class="navbar-toggler" for="menuBtn">
    <input type="checkbox" class="navcheckbox" id="menuBtn"/>
   	<div class ="bar">
      <span class="top"></span>
      <span class="mid"></span>
      <span class="bot"></span>
    </div>
  </label>
</template>

<style>
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
</style>
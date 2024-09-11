<script setup>
import { onMounted, onUnmounted } from 'vue';

const props = defineProps({
	to: { type: String },
	title: { type: String },
	className: { type: String },
});

let intervalId = null;
const dateTimeUpdate = () => {
  const now = new Date();
  const date = now.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
  const day = now.toLocaleDateString('en-US', { weekday: 'long' });
  const time = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
  const dateTimeElement = document.getElementById('datetime');
  if (dateTimeElement) {
    dateTimeElement.textContent = `${date} (${day}) - ${time}`;
  }
};

onMounted(() => {
	intervalId = setInterval(dateTimeUpdate, 1000);
});

onUnmounted(() => {
  clearInterval(intervalId);
});
</script>

<template>
	<div class="header">
	  <div class="container-fluid d-flex justify-content-between align-items-center">
	    <div class="d-flex align-items-center">
	      <span class="current-page me-3">{{ title }}</span>
	      <form action="" method="GET" class="d-flex">
	        <div class="form-group form-search d-flex align-items-center">
	          <span class="fa fa-search icon me-2"></span>
	          <input type="search" class="form-control" placeholder="Search" />
	        </div>
	      </form>
	    </div>
	  	<div>
	  		<span class="date-time">
					<i class="fa-regular fa-calendar-days"></i>&nbsp;
					<span id="datetime"><i class="fas fa-spinner fa-spin"></i> Loading</span>
				</span>
	    </div>
	  </div>
	</div>
</template>

<style scoped>
/*header*/
.header {
	margin-top: 20px;
	padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.current-page {
	font-size: 17px;
	font-family: var(--app-font-poppins);
	color: #373D3F;
  opacity: .9;
  cursor: default;
}

.header .title {
	font-size: 17px;
	font-family: var(--app-font-poppins);
	color: #373D3F;
	opacity: .8;
}
.header .link-btn {
	font-size: 14px;
	margin-top: -40px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	opacity: .9;
}
.date-time {
	font-size: 17px;
	font-family: var(--app-font-poppins);
	color: #373D3F;
  opacity: .9;
	cursor: default;
}
.form-search input[type="search"] {
  padding-left: 2.70rem;
  padding-top: .50rem;
  padding-bottom: .55rem;
  border: 1.90px solid #f3f3f3!important;
  border-radius: 5px;
  font-size: 17px!important;
  width: 300px;
  font-family: var(--app-font-nunito);
  font-weight: bold;
} .form-search input[type="search"]::placeholder {
  font-size: 16.5px!important;
  color: #000;
  opacity: .7;
} .form-search input[type="search"]:focus {
  box-shadow: none!important;
  border: 1.90px solid var(--app-light-brown)!important;
} .form-search .icon {
  position: absolute;
  margin-left: 13px;
  margin-top: -2px;
  display: block;
  width: 1.15rem;
  height: 1.15rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #373D3F;
  opacity: .9;
} .form-search .label {
  font-size: 16px;
  color: #b4813f!important;
  margin-top: 10px;
}
.notification-box {
	margin-left: 10px;
} .notification-box .icon {
	font-size: 19px!important;
	opacity: .8;
}
</style>
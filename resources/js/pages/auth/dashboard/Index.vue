<script setup>
import { ref, computed, onMounted } from 'vue';
import { useStore } from 'vuex';
import { useRoute } from 'vue-router';
import { Calendar } from 'v-calendar';

import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import Main from '@/components/base/Main.vue';
import Row from '@/components/base/Row.vue';
import Column from '@/components/base/Column.vue';
import Content from '@/components/base/Content.vue';
import Card from '@/components/base/Card.vue';
import BreadCrumb from '@/components/auth/BreadCrumb.vue';
import WelcomeDialog from '@/components/auth/WelcomeDialog.vue';
import Spinner from '@/components/Spinner.vue';

const store = useStore();
const route = useRoute();
const user = ref(null);
const selectedColor = ref('yellow');
const attrs = ref([
  {
    key: 'today',
    order: 0,
    highlight: {
    	color: 'dark',
      fillMode: 'light',
    },
    dates: new Date(),
  }
]);

onMounted(() => {
	setTimeout(async () => {
		const getUser = await store.dispatch('auth/user/getUser');
		user.value = getUser;
	}, 100);
});
</script>

<template>
	<Section className="dashboard">
		<Container className="dashboard-container" v-if="user">
			<BreadCrumb title="Dashboard" to="route.name" />
			<Main>
				<Row>
					<Column className="col-md-9">
						<Content className="left-content">
							<WelcomeDialog :user="user"/>
								<label class="content-label activities-label">Activities</label>
								<Card className="recently-page-modified">
									<div class="header">
										<h4 class="card-title title">Recently Page Modified</h4>
										<a href="#" class="btn btn-light float-end link-btn">
											View More &nbsp;<i class="fa-solid fa-chevron-right"></i>
										</a>
									</div>
									<div class="body d-flex flex-column flex-md-row border-0">
									  <div class="list-group w-100 border-0">
									  	<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0 border-bottom" aria-current="true">
									      <img src="@assets/images/cms/icons/moderator.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
									      <div class="d-flex gap-2 w-100 justify-content-between">
									        <div>
									          <b class="mb-0">#moderator/announcement</b>
									          <p class="mb-0 opacity-75">
									          	<i>@Earlwin Villaflores</i> - Added new announcement.
									          </p>
									        </div>
									        <small class="opacity-50 text-nowrap">
									        	<i class="fa-regular fa-clock"></i>
									        	May 27, 2024 - 01:13 AM
									        </small>
									      </div>
									    </a>
									    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0 border-bottom" aria-current="true">
									      <img src="@assets/images/cms/icons/moderator.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
									      <div class="d-flex gap-2 w-100 justify-content-between">
									        <div>
									          <b class="mb-0">#moderator/events</b>
									          <p class="mb-0">
									          	<i>@Gian Carlos Castillo</i> - Added new event.
									          </p>
									        </div>
									        <small class="opacity-50 text-nowrap">
									        	<i class="fa-regular fa-clock"></i>
									        	May 20, 2024 - 01:39 AM
									        </small>
									      </div>
									    </a>
									  	<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0 border-bottom" aria-current="true">
									      <img src="@assets/images/cms/icons/moderator.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
									      <div class="d-flex gap-2 w-100 justify-content-between">
									        <div>
									          <b class="mb-0">#moderator/events</b>
									          <p class="mb-0">
									          	<i>@Gian Carlos Castillo</i> - Updated events.
									          </p>
									        </div>
									        <small class="opacity-50 text-nowrap">
									        	<i class="fa-regular fa-clock"></i>
									        	June 6, 2024 - 12:03 PM
									        </small>
									      </div>
									    </a>
									    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0 border-bottom" aria-current="true">
									      <img src="@assets/images/cms/icons/admin.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
									      <div class="d-flex gap-2 w-100 justify-content-between">
									        <div>
									          <b class="mb-0">#admin/gallery</b>
									          <p class="mb-0 opacity-75">
									          	<i>@Jerome Avecilla</i> - Added new album.
									          </p>
									        </div>
									        <small class="opacity-50 text-nowrap">
									        	<i class="fa-regular fa-clock"></i>
														June 1, 2024 - 08:03 PM
									        </small>
									      </div>
									    </a>
									  </div>
									</div>
								</Card>
								<Card className="recently-page-modified mt-4">
									<div class="header">
										<h4 class="card-title title">Session Log</h4>
										<a href="#" class="btn btn-light float-end link-btn">
											View More &nbsp;<i class="fa-solid fa-chevron-right"></i>
										</a>
									</div>
									<div class="body border-0">
									  <div class="mt-4 table-responsive">
									  	<table class="table">
									  		<thead>
									  			<tr>
									  				<th>User</th>
									  				<th>Action</th>
									  				<th>Entity ID</th>
									  				<th>Timestamp</th>
									  			</tr>
									  		</thead>
									  		<tbody>
									  			<tr>
									  				<td>
									  					<div class="flex flex-row">
																<small class="user-name">Jerome Avecilla (You)</small>
															</div>
														</td>
														<td>
															<span class="text-primary fw-bold btn btn-sm btn-outline-primary">Login</span>
														</td>
									  				<td>
															<span class="badge text-bg-light opacity-75">
																wlsULYR9a5lPHXSe6peHo7yf0grEkE4s7D9VEGSqOZfCB...
															</span>
									  				</td>
									  				<td>
									  					<small class="opacity-50 text-nowrap">
											        	<i class="fa-regular fa-clock"></i>
											        	June 8, 2024 07:50 AM
											        </small>
									  				</td>
									  			</tr>
									  			<tr>
									  				<td>
									  					<div class="flex flex-row">
																<small class="user-name">Earlwin Villaflores</small>
															</div>
														</td>
														<td>
															<span class="text-success fw-bold btn btn-sm btn-outline-success">Create</span>
														</td>
									  				<td>
															<span class="badge text-bg-light opacity-75">
																9KcLmUa8QtPwXuLcjpTCccH2dpLvOMUDTDd3xU6OlBQ...
															</span>
									  				</td>
									  				<td>
									  					<small class="opacity-50 text-nowrap">
											        	<i class="fa-regular fa-clock"></i>
											        	May 27, 2024 01:13 AM
											        </small>
									  				</td>
									  			</tr>
									  			<tr>
									  				<td>
									  					<div class="flex flex-row">
																<small class="user-name">Gian Carlos Castillo</small>
															</div>
														</td>
														<td>
															<span class="text-success fw-bold btn btn-sm btn-outline-success">Create</span>
														</td>
									  				<td>
															<span class="badge text-bg-light opacity-75">
																uQqCtGyJ7F2BlKSm9qcRvrtpp5oiCtUqO3hdyq13el12Lka...
															</span>
									  				</td>
									  				<td>
									  					<small class="opacity-50 text-nowrap">
											        	<i class="fa-regular fa-clock"></i>
											        	May 20, 2024 01:39 AM
											        </small>
									  				</td>
									  			</tr>
									  			<tr>
									  				<td>
									  					<div class="flex flex-row">
																<small class="user-name">Gian Carlos Castillo</small>
															</div>
														</td>
														<td>
															<span class="text-warning fw-bold btn btn-sm btn-outline-warning">Update</span>
														</td>
									  				<td>
															<span class="badge text-bg-light opacity-75">
																XKmG4YD5m6WVJIhPgl4ZS5w1AaqMu0pgIfct4Oeg4U1Aa...
															</span>
									  				</td>
									  				<td>
									  					<small class="opacity-50 text-nowrap">
											        	<i class="fa-regular fa-clock"></i>
											        	June 6, 2024 12:03 PM
											        </small>
									  				</td>
									  			</tr>
									  			<tr>
									  				<td>
									  					<div class="flex flex-row">
																<small class="user-name">Jerome Avecilla (You)</small>
															</div>
														</td>
														<td>
															<span class="text-success fw-bold btn btn-sm btn-outline-success">Create</span>
														</td>
									  				<td>
															<span class="badge text-bg-light opacity-75">
																XKmG4YD5m6WVJIhPgl4ZS5w1AaqMu0pgIfct4Oeg44d7p...
															</span>
									  				</td>
									  				<td>
									  					<small class="opacity-50 text-nowrap">
											        	<i class="fa-regular fa-clock"></i>
											        	June 1, 2024 08:03 PM
											        </small>
									  				</td>
									  			</tr>
									  		</tbody>
									  	</table>
									  </div>
									</div>
								</Card>
						</Content>
					</Column>

					<Column className="col-md-3">
						<Content className="right-content sticky-top">
							<Card className="calendar-box card my-calendar" >
								<Calendar
							 		:color="selectedColor"
							  	:attributes="attrs"
									expanded
							  	borderless
							  	trim-weeks
							  />
							</Card>

								<label class="content-label counter-label">Summary</label>
								<Column className="col col-card">
									<Card className="card-counter">
										<div class="card-count-content">
										  <Row class="row">
										    <Column class="col-md-4">
										    	<img src="@assets/images/cms/icons/page-views.png" class="img img-fluid card-count-icon" width="60" loading="lazy" alt="img"/>
										    </Column>
										    <Column class="col-md-8">
										      <h5 class="card-title card-count-title">Page Views</h5>
										      <span class="card-count-text">Today: <strong>81</strong></span>
										      <a href="#" class="btn btn-light float-end card-count-link">
										      	<i class="fa-solid fa-chevron-right"></i>
										      </a>
										    </Column>
										  </Row>
										</div>
									</Card>
								</Column>
								<Column className="col col-card">
									<Card className="card card-counter">
									  <Row class="row">
									    <Column class="col-md-4">
									    	<img src="@assets/images/cms/icons/page-report.png" class="img img-fluid card-count-icon" width="60" loading="lazy" alt="img"/>
									    </Column>
									    <Column class="col-md-8">
									      <div class="card-count-content">
									        <h5 class="card-title card-count-title">Query Reports</h5>
									        <span class="card-count-text">New: <strong>3</strong></span>
									        <a href="#" class="btn btn-light float-end card-count-link">
									        	<i class="fa-solid fa-chevron-right"></i>
									        </a>
									      </div>
									    </Column>
									  </Row>
									</Card>
								</Column>
								<Column className="col col-card">
									<Card class="card card-counter">
									  <Row class="row">
									    <Column class="col-md-4">
									    	<img src="@assets/images/cms/icons/users.png" class="img img-fluid card-count-icon" width="60" loading="lazy" alt="img"/>
									    </Column>
									    <Column class="col-md-8">
									      <div class="card-count-content">
									        <h5 class="card-title card-count-title">Active Users</h5>
									        <span class="card-count-text">Online: <strong>2</strong></span>
									        <a href="#" class="btn btn-light float-end card-count-link">
									        	<i class="fa-solid fa-chevron-right"></i>
									        </a>
									      </div>
									    </Column>
									  </Row>
									</Card>
								</Column>
						</Content>
					</Column>
				</Row>
			</Main>
		</Container>
		<div class="vh-100" v-else>
			<Spinner :start="true"/>
		</div>
	</Section>
</template>

<style scoped>
.dashboard { background: #FAFAFA; }
.dashboard .dashboard-container {
	max-width: 1290px;
	padding: 20px;
}
.content-label {
	font-size: 16px;
	font-family: var(--app-font-nunito);
	font-weight: bold;
	color: #373D3F;
	opacity: .8;
}
.img {
	pointer-events: none;
}
/*Main content*/
.left-content {
	max-width: 850px!important;
}

/*Recently page modified*/
.recently-page-modified {
	padding: 30px;
}
.recently-page-modified .header {
	border-bottom: 1px solid #F3F3F3;
	padding-bottom: 20px;
}
.recently-page-modified .header .title {
	font-size: 17px;
	font-family: var(--app-font-poppins);
	color: #373D3F;
	opacity: .8;
}
.recently-page-modified .header .link-btn {
	font-size: 14px;
	margin-top: -40px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	opacity: .9;
}
.content-label.activities-label {
	margin-bottom: 15px;
	margin-top: 20px;
}

.right-content {
	max-width: 1050px!important;
	z-index: 0;
}
.content-label.counter-label {
	margin-left: -70px;
	margin-top: 20px;
	margin-bottom: -25px;
}
.calendar-box {
	width: 350px;
	margin-left: -70px;
	margin-top: 40px;
	z-index: -1!important;
}
.my-calendar :deep(.vc-weekday-1) { color: var(--app-light-brown);}
.my-calendar :deep(.vc-weekday-7) { color: var(--app-light-brown);}

.col-card {
	margin-top: -20px;
}
.counter-box {
	margin-top: -20px;
}
.card-counter {
	width: 350px!important;
	height: 100px!important;
	margin-left: -70px;
	margin-top: 40px;
	padding: 25px;
}
.card-count-icon {
	margin-top: -5px;
}
.card-count-title {
	font-family: var(--app-font-nunito);
	font-size: 19px;
	margin-left: -20px;
}
.card-count-text {
	font-family: var(--app-font-nunito);
	font-size: 16px;
	margin-left: -20px;
}
.card-count-link {
	border: none;
	border-radius: 5px;
	font-size: 14px;
	margin-top: -20px;
} .card-count-link i {
	line-height: 20px;
}
</style>
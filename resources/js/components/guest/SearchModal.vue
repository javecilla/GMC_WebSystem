<script setup>
import { onMounted } from 'vue';
import Modal from '@/components/base/Modal.vue';

onMounted(() => {
  let lastHoveredItem = null;
  const recentSearchItems = document.querySelectorAll('.recent-search-group .item-action');
  recentSearchItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      //remove 'hovered' class from last hovered item if exists
      if (lastHoveredItem !== null) {
        lastHoveredItem.classList.remove('hovered');
      }
      //add 'hovered' class to the current item
      item.classList.add('hovered');
      //update the last hovered item
      lastHoveredItem = item;
    });
  });
});
</script>

<template>
	<Modal idName="searchModal" className="modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
        <div class="form-group form-search">
          <span class="fa fa-search icon"></span>
          <input type="search" class="form-control form-control-lg" placeholder="Search for Golden Minds...">
        </div>
        <div style="font-size: 16px; color: #b4813f!important; margin-top: 10px;" class="label">
          Recent
        </div>
        <div>
          <div class="list-group recent-search-group">
            <a href="#" class="list-group-item item-action gap-3 list-group-item-action d-flex" >
              <i class="fa-solid fa-clock flex-shrink-0 icon"></i>
              <div class="d-flex gap-2 w-100 justify-content-between content">
                <div><p class="mb-0 title">How to enroll?</p></div>
                <small class="opacity-50 text-nowrap">
                  <i class="fa-solid fa-xmark icon-times"></i>
                </small>
              </div>
            </a>
            <a href="#" class="list-group-item item-action gap-3 list-group-item-action d-flex" >
              <i class="fa-solid fa-clock flex-shrink-0 icon"></i>
              <div class="d-flex gap-2 w-100 justify-content-between content">
                <div><p class="mb-0 title">Courses available</p></div>
                <small class="opacity-50 text-nowrap">
                  <i class="fa-solid fa-xmark icon-times"></i>
                </small>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <small class="text-muted">
          <!-- &copy; Golden Minds Colleges 245px-->
          <span style="margin-right: 105px">Notice: This feature is currently undergoing maintenance.</span>
          <!-- <span>JSA v1.4</span> -->
        </small>
      </div>
    </div>
	</Modal>
</template>

<style scoped>
.modal-content {
 border-top: 5px solid #b4813f;
 background: #F8FAFC;
}

.recent-search-group {
  margin-top: 10px;
} .recent-search-group .content {
  padding: 7px;
} .recent-search-group .title {
  text-indent: -10px;
} .recent-search-group .icon-times {
  font-size: 20px;
  margin-top: 5px;
} .recent-search-group .item-action {
  color: #000;
  opacity: .9;
  background: #fff;
  transition: all ease .2s;
} .recent-search-group .item-action:hover {
  background: #b4813f;
  color: #f3f3f3!important;
} .recent-search-group .item-action.hovered {
  background: #b4813f;
  color: #f3f3f3!important;
} .recent-search-group .item-action .icon {
  font-size: 20px;
  margin-top: 10px;
  opacity: .8;
}
.form-search input[type="search"] {
  padding-left: 3rem;
  padding-top: .95rem;
  padding-bottom: .95rem;
  border: 1.90px solid var(--app-light-brown)!important;
  border-radius: 5px;
  font-size: 17px!important;
} .form-search input[type="search"]::placeholder {
  font-size: 17px!important;
  color: #000;
  opacity: .7;
} .form-search input[type="search"]:focus {
  box-shadow: none!important;
} .form-search .icon {
  position: absolute;
  margin-left: 13px;
  margin-top: 17px;
  display: block;
  width: 1.35rem;
  height: 1.35rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #b4813f;
} .form-search .label {
  font-size: 16px;
  color: #b4813f!important;
  margin-top: 10px;
}
</style>
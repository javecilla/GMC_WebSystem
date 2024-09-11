<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
	data: { type: Array }
});

const activeArticle = ref('');
const scrollEnabled = ref(true);

// Function to determine the currently active article based on scroll position
const setActiveArticle = () => {
	if (!scrollEnabled.value) return; // If scrolling is disabled, exit the function

	const timeOut = setTimeout(() => {
		const scrollPosition = window.scrollY;
    const articles = document.querySelectorAll('article');
    let currentArticle = '';

    articles.forEach(article => {
      const sectionTop = article.offsetTop;
      const sectionHeight = article.clientHeight;

      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        currentArticle = article.id;
      }
    });

    if (currentArticle !== activeArticle.value) {
      activeArticle.value = currentArticle;
      updateUrlHash(currentArticle);
    }
	}, 100);

	return () => {
		clearTimeout(timeOut);
	}
};

// Function to scroll to a specific section and update URL hash
const scrollToArticle = (articleId) => {
  scrollEnabled.value = false; // Disable setActiveArticle function
  activeArticle.value = articleId;
  updateUrlHash(articleId);

  const article = document.getElementById(articleId);
  article.scrollIntoView({ behavior: 'smooth' });

  // Re-enable setActiveArticle function after scrolling is finished
  setTimeout(() => {
    scrollEnabled.value = true;
  }, 1000);
};

// Function to update URL hash fragment
const updateUrlHash = (hash) => {
  const state = window.history.state || {};
  window.history.replaceState(state, null, `#${hash}`);
  activeArticle.value = hash;
};

// Function to handle page load with hash fragment in URL
const handleHashChange = () => {
  const hash = window.location.hash.substr(1);
  if (hash) {
    activeArticle.value = hash;
    scrollToArticle(hash);
  }
};

// Call handleHashChange function when the component is mounted
onMounted(() => {
 	handleHashChange();
});

// Event listeners
window.addEventListener('scroll', setActiveArticle);

onUnmounted(() => {
  window.removeEventListener('scroll', setActiveArticle);
  window.removeEventListener('hashchange', handleHashChange);
});
</script>

<template>
	<div id="data">
		<label class="label">On this page</label>
		<ul class="list-group list-group-flush list">
			<template v-for="(item, i) in data" :key="i">
				<li class="list-group-item item"
					@click="scrollToArticle(item.id)"
					:class="{ 's-active': activeArticle === item.id }">
					{{ item.name }}
				</li>
			</template>
		</ul>
	</div>
</template>
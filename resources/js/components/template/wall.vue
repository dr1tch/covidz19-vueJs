<template>
	<div class="container-fluid main-wall">
		<div class="main-wall-header flex justify-content-between align-item-center">
			<h1 style="font-weight: bold;,letter-spacing: 3px;">Ideas</h1>
			<button :click="false" class="btn humburger">
				<svg viewBox="0 0 100 80" width="1.5em" height="1.5em" fill="currentColor">
				    <rect width="100" height="20" rx="8"></rect>
				    <rect y="30" width="100" height="20" rx="8"></rect>
				    <rect y="60" width="100" height="20" rx="8"></rect>
				</svg>
			</button>
		</div>
		<Posts></Posts>
	</div>


</template>

<script >
	import Posts from '../template/posts' ;
	export default {
		components: {
			Posts
		},

	}

</script>
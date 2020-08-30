<template>
	<div class="container-fluid main-wall">
		<div class="main-wall-header">
			<h1 style="font-weight: bold; 
    letter-spacing: 3px;">Ideas</h1>
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
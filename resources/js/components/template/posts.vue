<template>
	<div class="posts">
		<Post :media-src="media1"></Post>
		<Post :media-src="media2"></Post>
	</div>
</template>

<script>
	import Post from '../template/post' ;
	export default {
		components: {
			Post
		}, 
		data: function(){
			return {
				media1:"/images/post.jpg",
				media2:" " 
			};
		}
	}
</script>
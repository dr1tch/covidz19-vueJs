<template>
	<div class="container-fluid main-wall">
		<div style="padding: 10px 15px;
    border-bottom: 1px solid rgb(238, 238, 238);
    position: fixed;
    top: 0;
    z-index: 3333;
    background: #15202B;
    right: 350px;
    left: 350px;
    margin-left: 16px;
    width: 619px;">
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
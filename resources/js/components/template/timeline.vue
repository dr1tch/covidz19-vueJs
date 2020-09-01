<template>
	
	<div class="home-container" style="height: 100%;">
		<SideBar></SideBar>
		<Wall></Wall>
		<RightSide></RightSide>
	</div>

</template>

<style>
	


</style>


<script>

	import SideBar from '../template/sidebar' ;
	import Wall from '../template/wall' ;
	import RightSide from '../template/rightside' ;

	export default {
		components: {
			SideBar,
			Wall,
			RightSide
		}
	}
	
</script>
<template>
<div class="row">
	<div class="col">
		<timeline></timeline>
	</div>
	<!-- <div class="col-sm-3">
		<RightSide></RightSide>
	</div> -->
</div>
</template>
<style>
	body {
		overflow: auto;
	}
</style>

<script>
	import RightSide from '../template/rightside' ;
	import timeline from '../template/timeline' ;
	export default {
		// props: [
		// 	'user', 'role'
		// ],
		data: function(){
			return{
				isAuthenticated: false,
				ideas: {},
				user: []
				// user : user 
			}
			
		},

		components: {
			RightSide,
			// SideBar,
			timeline
		},


	  	mounted() {
	  		// console.log(this.user);
	  		this.auth();
	  		console.log(this.isAuthenticated);
	  		console.log(this.ideas);
	  		console.log(this.user);

	  	},

		methods: {
			auth (){
				axios.get('/user/ideas')
				.then((responce) => {
					console.log(responce.data);
					this.isAuthenticated = responce.data.user_check;
					this.ideas = responce.data.ideas;
					this.user = responce.data.user;
					// console.log(this.isAuthenticated);
					// console.log(isAuthenticated);
				})
				.catch(function(error){
					console.log(error);
				});
			},

			disconnect (){
				event.preventDefault();
                document.getElementById('logout-form').submit();
			}
		},
		computed: {
			// usersList(){
			// 	return user;
			// }
		},
	}


</script>
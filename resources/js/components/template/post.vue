<template>
	<div>
	<div class="post flex">
		<div class="mr-3 mt-1 flex-shrink-0">
			<a href="">
				<img class="img-md" style="margin: 10%; margin-left: 13%"  src="/images/profile.jpg" alt="">
			</a>
		</div>
		<div>
			<div class="post-header">
	    		<div class="profile-link-right-side">

					<div>
						<a class="post-name text-light" href="">
							<h6 style="font-weight: bold; margin-bottom: 0;">Youssouf Kacemi</h6>
						</a>
					</div>
	    			<div class="ml-2">
	    				<span class="text-secondary" style="font-size: .9em;"> @el.dritch</span>
	    			</div>
	    		</div>
    		</div>
    		<div>
	    		<span style="font-size: 0.9em; color: #999">1 min ago</span>
	    	</div>
        	<div class="mr-4 mt-1">
        		<div class="text">
        			<p>Hello people! i'm building the most amzing website to fight COVID-19. JOIN ME NOW IF YOU WANT TO KNOW MORE!</p>
        		</div>
        		<div class="media">
        			<img class="post-media rounded-xl" :src="getLink">
        		</div>
        	</div>
        	<React></React>
		</div>
	</div>
	</div>

</template>


<script>
	import React from "../template/reactions";
	export default {
		components : {
			React
		},
		props: [
			"media-src",
		],

		mounted(){
			console.log(this.getLink());
		}
		,
		computed: {
			getLink() {
				return "" + this.mediaSrc;
			}
		},
	}


</script>
<template>
	<div>
	<div class="post row">
		<div class="col-15">
			<img class="img-md" style="margin: 10%; margin-left: 13%"  src="/images/profile.jpg" alt="">
		</div>
		<div class="col-105">
			<div class="post-header">
	    		<div class="profile-link-right-side">
						
						<div>
							<h6 style="font-weight: bold; margin-bottom: 0;">Youssouf Kacemi</h6>
							<span style="font-size: 0.9em; color: #999">1 min ago</span>
	    			</div>
	    			<div style="height: 100%;
							    display: flex;
							    justify-content: center;
							    align-items: flex-start;
							    align-self: start;
							    margin-top: -3px;
							    margin-left: 3%;">
	    				<span style="font-size: 1em; color: #999"> @el.dritch</span>
	    			</div>
	    		</div>
	    		<!-- <div style="margin-right: 2%;">
	    			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
					</svg>
	    		</div> -->
    		</div>
        	<div class="post-body">
        		<div class="text">
        			<p>Hello people! i'm building the most amzing website to fight COVID-19. JOIN ME NOW IF YOU WANT TO KNOW MORE!</p>
        		</div>
        		<div class="media">
        			<img class="post-media" :src="getLink">
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
				return this.mediaSrc;
			}
		},
	}


</script>
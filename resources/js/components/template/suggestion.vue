<template>
	<div>
		<a href="">
			<li class="py-3 px-2 border-b friends">
				<div class="flex justify-content-between align-items-center">
	        		<div class="flex justify-content-between align-items-center">
						<img class="img-pb img-bottom"  src="/images/profile.jpg" alt="">
						<div class="ml-2">
				    		<div style="display: block;">

								<div>
									<h6 style="font-weight: bold; margin-bottom: 0;">Youssouf Kacemi</h6>
								</div>
				    			<div class="ml-2">
				    				<span class="text-secondary left" style="font-size: .9em;"> @el.dritch</span>
				    			</div>
				    		</div>
			    		</div>
	        		</div>
	        		<div style="width: 30%;">
	        			<button class="btn btn-outline-success full-width follow-button">Follow</button>
	        		</div>
	        	</div>
			</li>
		</a>
	</div>
</template>

<style>
	
	.full-width{
		width: 100%;
	}

	.follow-button {
		border-radius: 20px;
	}

	a li.friends {
		width: auto;
    	border-radius: unset;
    	margin: 0 auto;

	}

	li.friends:hover {
		background-color: rgba(58, 193, 114, 0.1);
	}
</style>


<script>
	export default {

	}
</script>
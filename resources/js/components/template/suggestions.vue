<template>
	<div>
		
		<section style="margin-top: 5em;">
			<header class="p-3 border-b">
				<span class="sec-header">People to Follow</span>
			</header>
			<div>
				<ul class="mb-0 to-follow-list">
					<Suggestion></Suggestion>
					<Suggestion></Suggestion>
					<Suggestion></Suggestion>
					<Suggestion></Suggestion>
				</ul>
			</div>
			<footer class="p-3">
				<a class="text-success" href="">Show More</a>
			</footer>
		</section>
	</div>

</template>


<style>

	section {
		width: 320px; 
		background-color: rgba(0, 0, 0, 0.24);
		border-radius: 20px;
		margin: auto;
	}

	.border-b {
		border-bottom: 1px #666 solid;
	}

	ul.to-follow-list {
		margin-top: 0;
		list-style: none;
		padding-inline-start: 0px;
	}

	.sec-header {
		font-size: 1.2em;
    	font-weight: 800;
	}



</style>

<script>
	
	import Suggestion from "../template/suggestion";
	export default {
		components: [
			Suggestion,
		],
	}
</script>
<template>
		<div class="fixed-right">
			
			<!-- Logo Part -->
			<SearchBar></SearchBar>
			<Suggestions></Suggestions>
		</div>



</template>

<script>
	import SearchBar from "../template/search-bar";
	import Suggestions from "../template/suggestions";
	export default {
		components: [
			SearchBar,
			Suggestions
		],
	}
</script>
<template>
	<div class="container-fluid main-wall">
		<div class="main-wall-header flex justify-content-between align-item-center">
			<h1 style="font-weight: bold;,letter-spacing: 3px;">Ideas</h1>
			<!-- <button :click="false" class="btn humburger" style="display; none;">
				<svg viewBox="0 0 100 80" width="1.5em" height="1.5em" fill="currentColor">
				    <rect width="100" height="20" rx="8"></rect>
				    <rect y="30" width="100" height="20" rx="8"></rect>
				    <rect y="60" width="100" height="20" rx="8"></rect>
				</svg>
			</button> -->
		</div>
		<!-- <div class="border border-blue-400 bg-tran rounded-lg px-8 py-6 mb-8">
    <form action="/ideas" method="post">
      
        <textarea
          name="body"
          class="w-full resize-none bg-transparent text-lg"
          style="position-relative"
          placeholder="what's up!"
          required
        ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
          <img
            class="rounded-full mr-2"
            src=""
            alt=""
            width="40"
            height="40"
          >
          <button class="bg-green-500 rounded-lg shadow py-2 px-4 text-white" type="submit">Poster</button>
        </footer>
    </form>

    
	<p class="text-red text-sm mt-2"></p>
    
</div> -->
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
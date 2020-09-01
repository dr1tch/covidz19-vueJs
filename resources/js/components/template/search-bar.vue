<template>
	
	<form class="search-bar" method="POST" action="">            
	    <div class="form-group full-width">
	        <div class="flex">
	        	<button class="btn">
	            	<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-search text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					</svg>
	            </button>
	            <input id="search" type="text" class="form-control px-3 py-2" name="search" required autocomplete="search" placeholder="Search">    
	            <span class="invalid-feedback" role="alert"></span>    
	        </div>
	   	</div>
	</form>

</template>
	<style>

		form.search-bar {
			border-radius: 20px;
			background-color: #080E14;
			width: 90%;
		    margin:auto;
		    margin-top: 5%;
		    margin-left: 10px;
		}

		input#search {
		    border: none;
		    background-color: transparent;
		    color: #F4F4F5;
		    height: auto;
		    box-shadow: inherit;
		  }
	</style>
<script>
	

</script>
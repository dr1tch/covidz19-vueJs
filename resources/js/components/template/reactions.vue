<template>
	<div class="flex btn-group justify-between react-container ">				
					<div class="full-heart">
						<div class="flex">
							<button class="btn">
								<svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-heart text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</button>
							
							<div class="react-count-container">
								<span class="span-react text-secondary">
									25
								</span>
							</div>
						</div>				
					</div>
					<div class="reply">
						<div class="flex">
							<button id="reply" class="btn">
								<!-- <svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-chat-right-text text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
								</svg> -->
								<svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-chat-right text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M2 1h12a1 1 0 0 1 1 1v11.586l-2-2A2 2 0 0 0 11.586 11H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
								</svg>
							</button>
							
							<div class="react-count-container">
								<span class="span-react text-secondary">
									25
								</span>
							</div>
						</div>
					</div>
					<div class="share">
						<div class="flex">
							<button class="btn">
								<!-- <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-share-fill text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
								</svg> -->
								<svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-share text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
								</svg>
							</button>
							
							<div class="react-count-container">
								<span class="span-react text-secondary">
									25
								</span>
							</div>
						</div>
					</div>
					<div class="bookmark">
						<button class="btn flex">
							<div>
								<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-bookmark text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
								</svg>
							</div>
						</button>
					</div>
				</div>
</template>

<script>
	
	export default {
		
	}
</script>
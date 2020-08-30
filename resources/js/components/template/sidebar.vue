<template>
	
	<div class="fixed-left">
		
		<!-- Logo Part -->
			<a class="logo" href="">
	            <div class="logo-container logo-container-sidebar">
	              <img class="logo-img-sidebar"  src="/images/logo.svg" alt="">
	              <h4 class="header-logo-side" style="font-weight: bold;">COVIDZ-19</h4>
	            </div>
	        </a>

        <!-- SideBar-Menu  -->

        	<div>
        		<ul>
        			<a class="menu-item-link " href="">
	        			<li class="menu-item selected">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/lamp.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Ideas</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/reports.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Reports</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/newsfeed.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">News Feed</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/graph.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Statistics</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/hashtag-half.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Explore</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/bell.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Notifications</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/send.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Messages</h5>
					            </div>
	        			</li>
        			</a>
        			<a class="menu-item-link" href="">
	        			<li class="menu-item">
		        				<div class="menu-item-container">
					              <img class="logo-img-menu"  src="/images/side-menu-icons/bookmark.svg" alt="">
					              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Bookmarks</h5>
					            </div>
	        			</li>
        			</a>

        			<li style="list-style: none;">
		        				<div style="margin: 6% auto;">
					        		<div>
					        			<button id="post" class="btn btn-success btn-sidebar bi bi-lightning-fill ">
					        				<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-lightning-fill text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
											</svg>
					        				<span class="text-button">Post</span>
					        			</button>
					        		</div>
					        		<div>
					        			<button id="report" class="btn btn-danger btn-sidebar">
					        				<svg width="1.5625em" height="1.5em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle-fill text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
											</svg>
					        				<span class="text-button">Report</span>
					        			</button>
					        		</div>  
					        	</div>
	        			</li>


	        			<li class="profile-bottom">
		        				<button class="btn" style="width:100%">
						        	<div class="profile-sidebar">
						        		<div class="profile-link-right-side profile-ticket">
					  						<img class="img-md img-bottom"  src="/images/profile.jpg" alt="">
					  						<div>
					  							<h6 class="header-logo-text-sidebar-link" style="font-weight: bold;">Youssouf Kacemi</h6>
					  							<span class="username" style="float: left; color: #666;">@el.dritch</span>
						        			</div>
						        		</div>
						        		<div class="up-arrow-part" style="margin-right: 6%;">
						        			<img style="width: 16px;height: 16px;" src="/images/side-menu-icons/arrow.svg">
						        		</div>
						        	</div>
					        	</button>
	        			</li>
        			<!-- <li class="menu-item">
        				<a class="menu-item-link" href="">
	        				<div class="menu-item-container">
				              <img class="logo-img-menu"  src="/images/side-menu-icons/lamp.svg" alt="">
				              <h5 class="header-logo-text-sidebar" style="font-weight: bold;">Ideas</h5>
				            </div>
			            </a>
        			</li> -->
        		</ul>
        	</div>
        	

        	







	</div>


</template>

<style>
	


</style>


<script>
	
</script>
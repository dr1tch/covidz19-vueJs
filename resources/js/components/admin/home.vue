<template>
	
<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href=""></a>
                            </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href=""></a>
                                </li>
                           
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="">
                                       Profile
                                    </a>
                                    
                                     
                                    <a class="dropdown-item" href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                    </a>
                                   <form id="logout-form" action="" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                       
                    </ul>

</template>

<script>
	
	export default {
		props: [
			'user', 'role'
		],
		data: function(){
			return{
				isAuthenticated: false,
				// user : user 
			}
			
		},


	  	mounted() {
	  		console.log(this.user);
	  		this.auth();
	  	},

		methods: {
			auth (){
				axios.get('/admin/details')
				.then(function(responce){
					console.log(responce);
				})
				.catch(function(error){
					console.log(error);
				})
			}
		},
		computed: {
			// usersList(){
			// 	return user;
			// }
		},
	}


</script>
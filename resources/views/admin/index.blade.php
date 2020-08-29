@extends('layouts.app')

@section('content')

	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('user_view')
                                    
                                    @endcan
                                     @can('manage_users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                       User Management
                                    </a>
                                    @endcan
                                    @can('manage_ideas')
                                    <a class="dropdown-item" href="{{ route('admin.ideas.index') }}">
                                       Idea Management
                                    </a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

	<!-- <AdminHome :user="{{Auth::user()}}" :role="{{ auth()->user()->roles }}"></AdminHome> -->
	<AdminHome></AdminHome>
@endsection
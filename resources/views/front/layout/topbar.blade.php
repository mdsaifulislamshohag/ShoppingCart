		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/OneTech/images/phone.png" alt=""></div>{{ $app->phone }}</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/OneTech/images/mail.png" alt=""></div><a href="mailto:{{ $app->email }}">{{ $app->email }}</a></div>
						<div class="top_bar_content ml-auto">
							{{-- <div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div> --}}
							<div class="top_bar_user">
								@if(Auth::user())
									@if(Auth::user()->image)
									<div class="user_icon"><img src="{{ Auth::user()->image }}" alt="" style="border-radius: 50%;width: 100%;"></div>
									@else
									<div class="user_icon"><img src="/OneTech/images/user.svg" alt=""></div>
									@endif
									<div><a href="{{ route('user.profile') }}">{{ Auth::user()->name }}</a></div>
									<div>
										<a href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>
	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                    </form>
									</div>
								@else
									<div class="user_icon"><img src="/OneTech/images/user.svg" alt=""></div>
									<div><a href="{{ route('register') }}">Register</a></div>
									<div><a href="{{ route('login') }}">Sign in</a></div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
 <ul class="metismenu" id="menu">
                    <li>
                        <a href="javascript:void();" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="#"><i class="bx bx-radio-circle"></i>eCommerce v1</a>
                            </li>
                        </ul>
                    </li> 
                     <li>
                        <a href="javascript:void();" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                            <div class="menu-title">Blank Page</div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin_blade_index') }}"><i class="bx bx-radio-circle"></i>index</a>
                               
                            </li>
                            <li>
                                <a href="{{ route('admin_blade_create') }}"><i class="bx bx-radio-circle"></i>create</a>
                                 
                            <li>
                                <a href="{{ route('admin_blade_view') }}"><i class="bx bx-radio-circle"></i>view</a>
                                
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:void();" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                            <div class="menu-title">User Management</div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin_user_index') }}"><i class="bx bx-radio-circle"></i>index</a>
                               </li>
                            <li>
                                {{-- <a href="{{ route('admin_user_view') }}"><i class="bx bx-radio-circle"></i>view</a> --}}
                            </li>
                            <li>
                                <a href="{{ route('admin_user_create') }}"><i class="bx bx-radio-circle"></i>create</a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-label">Extra</li>
                    <li>
                        <a href="/" target="_blank">
                            <div class="parent-icon"><i class="fa fa-globe"></i></div>
                            <div class="menu-title">Website</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();confirm('are you sure!!!!!!!!') && document.getElementById('logout-form').submit();">
                            <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
                            <div class="menu-title">Logout</div>
                        </a>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
{{--                     
                    <li class="menu-label">UI Elements</li>
                    <li>
                        <a href="widgets.html">
                            <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                            <div class="menu-title">Widgets</div>
                        </a>
                    </li> --}}
                   
                   
                   
                  

                
                    
                   
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bx bx-lock"></i></div>
                            <div class="menu-title">Authentication</div>
                        </a>
                        <ul>
                            <li>
                                <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Basic</a>
                                <ul>
                                    <li>
                                        <a href="auth-basic-signin.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign In</a>
                                    </li>
                                    <li>
                                        <a href="auth-basic-signup.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="auth-basic-forgot-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Forgot Password</a>
                                    </li>
                                    <li>
                                        <a href="auth-basic-reset-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Reset Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Cover</a>
                                <ul>
                                    <li>
                                        <a href="auth-cover-signin.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign In</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-signup.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-forgot-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Forgot Password</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-reset-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Reset Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>With Header Footer</a>
                                <ul>
                                    <li>
                                        <a href="auth-header-footer-signin.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign In</a>
                                    </li>
                                    <li>
                                        <a href="auth-header-footer-signup.html" target="_blank"><i class="bx bx-radio-circle"></i>Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="auth-header-footer-forgot-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Forgot Password</a>
                                    </li>
                                    <li>
                                        <a href="auth-header-footer-reset-password.html" target="_blank"><i class="bx bx-radio-circle"></i>Reset Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                   
                   
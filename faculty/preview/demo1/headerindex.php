
<!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                    <!-- begin:: Header Menu -->
     

                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

                        <div id="kt_header_menu"
                            class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                            <ul class="kt-menu__nav ">
                                <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here kt-menu__item--active"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                       <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- end:: Header Menu -->
                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: Search -->
                        <!--begin: Search -->                      
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <?php 
                                        $select="select * from tblfaculty where f_id=$id";
                                        $s=mysqli_query($con,$select);
                                        $r=mysqli_fetch_array($s);
                                        $name=$r['f_name'];
                                        $photo="http://localhost/edunet/admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$r['f_photo_path'];
                                        //echo $photo;
                                    ?>
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile"></span>
                                    <span class="kt-header__topbar-username kt-hidden-mobile" style="text-transform: capitalize;"><?php echo $name;?></span>
                                    <span class="kt-header__topbar-icon">
                                    <img class=""
                                        src="<?php echo $photo;?>"
                                        alt="" />
                                </span>
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                
                                </div>
                            </div>

                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                         

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="http://localhost/edunet/faculty/preview/demo1/custom/apps/user/profile.php?id=<?php echo $id;?>"
                                        class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Profile
                                            </div>
                                            
                                        </div>
                                    </a>
                                                                  
                                 
                                    
                                </div>
                                 <div class="kt-notification">  
                                        <a href="?userid=<?php echo $id ?>#popup2" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Change Password
                                            </div>
                                            
                                        </div>
                                    </a>
                                                                  
                                 
                                    
                                </div>

                                 <div class="kt-notification">
                                    <a href="http://localhost/edunet/faculty/preview/demo1/logout.php"
                                        class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Log Out
                                            </div>
                                            
                                        </div>
                                    </a>
                                                                  
                                 
                    

                                </div>
                                <!--end: Navigation -->
                            </div>
                        </div>
                        <div id="popup2" class="overlay1" style="padding-top: 50px;">
                            <div class="popup1">
                                <a class="close1" href="#">&times;</a>
                                <div class="heading1">
                                <h3 class="text-center">Change Password</h3>
                            </div>
                                <div class="content1">
                                                   <form method="post" action="">
                    <div class="alert alert-danger" id="change_failed"></div>
                    <div class="alert alert-danger" id="ummatch_password"></div>
                    <div class="alert alert-success" id="change_success"></div>
                   
             
                    <div class="form-group">
                      
                      <input type="password" class="form-control" placeholder="Current password" id="currentpassword" name="currentpassword"/>
                        <small id="current_error" class="text-danger"></small>
                    </div>
                    <div class="form-group"> 
                      
                        <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword"/>
                        <small id="new_error" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      
                        <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword"/>
                        <small id="confirm_error" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-log btn-block btn-thm2 btn-success"  value="Change Password" name="changepassword">
                  
                    </div>
                  <div class="form-group">
                  
                </div>
                </form>
                                </div>
                            </div>
                        </div>
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->


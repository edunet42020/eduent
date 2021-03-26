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
                                        $select="select * from tbladmin where emailid='$id'";
                                        $s=mysqli_query($con,$select);
                                        $r=mysqli_fetch_array($s);
                                        $name=$r['a_name'];
                                        $firstCharacter = $name[0];
                                        //echo $name;
                                    ?>
                               
                                   
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile"></span>
                                    <span class="kt-header__topbar-username kt-hidden-mobile"><?php echo $name;?></span>
                                         <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo $firstCharacter;?></span>
                                    
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                
                                </div>
                            </div>

                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                         

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="http://localhost/edunet/admin/preview/demo1/logout.php"
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
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Content Head -->
                    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-subheader__main">

                                <h3 class="kt-subheader__title">Home</h3>

                               
                               
                            </div>
                            <?php 
                            $today = date('Y-m-d');  
    
             $s1="select ce_date from tblcreditexam where ce_date='$today'";
    //echo $s1;
             $res1=mysqli_query($con,$s1);
             $c1=mysqli_num_rows($res1);
             if($c1>0)
             { ?>
                            <a href="sendemail.php">
                            <button class="btn btn-success">send mail for quiz</button>
                            </a>
                        <?php } ?>
                        </div>
                    </div>
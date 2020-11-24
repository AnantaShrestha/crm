<?php $url = url()->current(); ?>

<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <?php $current_user = auth()->user(); ?>
            <li class="sidebar-user-panel">
                <div class="user-panel">
                    <div class="pull-left image">

                        @if($current_user->image == "NULL")
                        <img alt="" class="img-circle user-img-circle " src="{{ asset('uploads/profile/profile.png') }}" />
                        @else

                        <img alt="" class="img-circle user-img-circle " src="{{ asset('uploads/profile/profile.png')}}" />
                        @endif

                    </div>
                    <div class="pull-left info">
                        <p> {{ $current_user->name }} </p>
                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                        Online</span></a>
                    </div>
                </div>
            </li>
            <li class="nav-item start <?php if(preg_match("/dashboard/i", $url)) { echo 'active'; } ?>">
                <a href="{{ route('admin.dashboard') }}" class="nav-link nav-toggle">
                    <i class="material-icons">dashboard</i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>


            @if(Auth::user()->can('admin_staff'))



            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                    <span class="title">User</span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('addUser') }}" class="nav-link ">
                            <span class="title">Add User</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viewAllUsers') }}" class="nav-link ">
                            <span class="title">View All Users</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                    <span class="title">Enquiry </span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link ">
                            <span class="title">Category</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('source.index') }}" class="nav-link ">
                            <span class="title">Enquiry Source</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('enquiry.index') }}" class="nav-link ">
                            <span class="title">View Enquries</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                    <span class="title">Department</span>
                    <span class="arrow"></span>

                </a>


                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('addDepartment') }}" class="nav-link ">
                            <span class="title">Add Department</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('viewDepartment') }}" class="nav-link ">
                            <span class="title">View All Departments</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                    <span class="title">Designation</span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{route('Designation.view')}}" class="nav-link ">
                            <span class="title">Designation Title</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('view_levels') }}" class="nav-link ">
                            <span class="title">Designation Level</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                    <span class="title">Staff</span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('add_staff') }}" class="nav-link ">
                            <span class="title">Add Staff</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('view_staff') }}" class="nav-link ">
                            <span class="title">View All Staff</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                    <span class="title">Customer</span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('addStudent') }}" class="nav-link ">
                            <span class="title">Add Customer</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viewStudent') }}" class="nav-link ">
                            <span class="title">View all Customer</span>
                        </a>

                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                    <span class="title">Vendor/Supplier</span>
                    <span class="arrow"></span>

                </a>

                <ul class="sub-menu">

                   <li class="nav-item">
                    <a href="{{route('vendor.index')}}" class="nav-link ">
                        <span class="title">View Vendor/Supplier</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('vendor.create')}}" class="nav-link ">
                        <span class="title">Add Vendor/Supplier</span>
                    </a>

                </li>

            </ul>
        </li>


        <li class="nav-item">
            <a href="" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                <span class="title">Service</span>
                <span class="arrow"></span>

            </a>

            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('addCourse') }}" class="nav-link ">
                        <span class="title">Add Service</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('viewCourses') }}" class="nav-link ">
                        <span class="title">View All Services</span>
                    </a>
                </li>

            </ul>
        </li>







        <li class="nav-item">
            <a href="" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                <span class="title">Account </span>
                <span class="arrow"></span>

            </a>

            <ul class="sub-menu">

               <li class="nav-item">
                <a href="{{ route('expensescategory.index') }}" class="nav-link ">
                    <span class="title">Expenses Category</span>
                </a>

            </li>
            <li class="nav-item">
                <a href="{{route('expenses.view')}}" class="nav-link ">
                    <span class="title">Expenses list</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('incomecategory.index') }}" class="nav-link ">
                    <span class="title">Income Category</span>
                </a>

            </li>
            <li class="nav-item ">
                <a href="{{route('income.incomes.view')}}" class="nav-link ">
                    <span class="title">Income List</span>
                </a>

            </li>


        </ul>
    </li>





    <li class="nav-item">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="material-icons">contact_mail</i>
            <span class="title">Send SMS </span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item">


                <a href="{{ route('viewSmsTemplate') }}" class="nav-link">

                    <i class="material-icons">contact_mail</i> SMS Template </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('s_smsview')}}" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i> To Customers

                    </a>

                </li>
              

                <li class="nav-item">
                    <a href="{{route('e_smsview')}}" class="nav-link nav-toggle">
                        <i class="material-icons">face</i> To Enquiries

                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{route('st_smsview')}}" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>To Staff

                    </a>

                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="material-icons">email</i>
                <span class="title">Send Email</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item">
                    <a href="{{ route('viewEmailTemplate') }}" class="nav-link">
                        <i class="material-icons">contact_mail</i> Email Template </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('s_emailview')}}" class="nav-link nav-toggle">
                            <i class="fa fa-user"></i>To Customers

                        </a>

                    </li>
                 
                    <li class="nav-item">
                        <a href="{{route('e_emailview')}}" class="nav-link nav-toggle">
                            <i class="material-icons">face</i>To Enquiries

                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{route('st_emailview')}}" class="nav-link nav-toggle">
                            <i class="fa fa-user"></i> To Staff

                        </a>

                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link nav-toggle">
                    <i class="material-icons">settings</i>
                    <span class="title">Settings</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                     <li class="nav-item">


                        <a href="{{ route('siteSettings') }}" class="nav-link">

                            <i class="material-icons">settings</i>
                    <span class="title"></span> General Setting</a>
                        </li>
                    <li class="nav-item">


                        <a href="{{ route('admin.profile') }}" class="nav-link">

                            <i class="fa fa-user"></i> Profile Setting</a>
                        </li>
                         <li class="nav-item">


                        <a href="{{route('setting.emailsetting')}}" class="nav-link">

                            <i class="fa fa-envelope"></i> Email Setting</a>
                        </li>
                    </ul>
                </li>





                @endif


                <!-- ===============================================================STUDENT====================================================== -->
                @if(Auth::user()->can('student'))
                <li class="nav-item">
                    <a href="{{route('mystudentprofile')}}" class="nav-link ">
                        <i class="material-icons">account_circle</i>
                        <span class="title">My profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('viewAllTeachers')}}" class="nav-link ">
                        <span class="title">View All Staff</span>
                        <i class="material-icons">group</i>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('viewCourses') }}" class="nav-link ">
                        <span class="title">My Services</span>
                        <i class="material-icons">school</i>
                    </a>
                </li>


                @endif

                <!-- ===============================================================Teacher====================================================== -->
                @if(Auth::user()->can('teacher'))

                <li class="nav-item">
                    <a href="{{route('myprofile')}}" class="nav-link ">
                        <i class="material-icons">account_circle</i>
                        <span class="title">My profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('viewStudent')}}" class="nav-link ">
                        <span class="title">View My Clients</span>
                        <i class="material-icons">group</i>
                    </a>
                </li>

                <li class="nav-item ">

                    <a href="{{ route('viewCourses') }}" class="nav-link nav-toggle">
                        <i class="material-icons">school</i>
                        <span class="title">Services</span>
                        <span class="selected"></span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('viewAllExams') }}" class="nav-link ">
                        <span class="title">My Exams</span>
                        <i class="material-icons">import_contacts</i>
                    </a>
                </li>

                @endif











            </div>
        </div>
    </div>

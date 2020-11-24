<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    if(Session::has('adminSession')){
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('adminlogin');
    }


    return view('welcome');
});


// Login
Route::match(['get', 'post'], '/crm-login', 'AdminLoginController@login')->name('adminlogin');


Route::group(['middleware' => ['adminlogin']], function () {

// Dashboard
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

    // Profile
    Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile');

    // Profile Update
    Route::post('/admin/profile/update/{id}', 'AdminController@updateProfile')->name('updateProfile');

    // Change Password
    Route::get('/admin/profile/change_password', 'AdminController@changePassword')->name('changePassword');

    // Checking User Password
    Route::post('/admin/profile/check-password', 'AdminController@chkUserPassword');

    // Update Password
    Route::post('/admin/profile/update_password/{id}', 'AdminController@updatePassword')->name('updatePassword');


    // User Management Routes
    Route::match(['get', 'post'], '/add/user', 'UsersController@addUser')->name('addUser');
    Route::get('/users/view_u/all', 'UsersController@viewAllUsers')->name('viewAllUsers');
    Route::match(['get', 'post'], '/edit/user/{id}', 'UsersController@editUser')->name('editUser');

    Route::get('/users/restore/{id}', 'UsersController@restoreUser')->name('restoreUser');
    Route::get('trash-user/{id}', 'UsersController@trashUser')->name('trashUser');
    Route::get('/users/view_trashed', 'UsersController@viewTrashedUser')->name('viewTrashedUser');

    Route::get('delete-user/{id}', 'UsersController@deleteUser')->name('deleteUser');

    Route::post('/check-user-email', 'UsersController@checkUserEmail')->name('checkUserEmail');
    Route::get('/users/print-user', 'UsersController@printUser')->name('printUser');
    Route::get('/users/generate-pdf', 'UsersController@generatePDF')->name('generate_usersPDF');


    



    //generatepdf routes


    // Courses Routes
    Route::match(['get', 'post'], '/course/add', 'CoursesController@addCourse')->name('addCourse');
    Route::get('/course/view', 'CoursesController@viewCourses')->name('viewCourses');
    Route::match(['get', 'post'], '/course/edit/{id}', 'CoursesController@editCourse')->name('editCourse');
    Route::get('delete-course/{id}', 'CoursesController@deleteCourse');

    Route::get('/course/export-course', 'CoursesController@exportCourse')->name('exportCourse');

    Route::get('/course/generate-pdf', 'CoursesController@generatePDF')->name('generatePDF');
    Route::get('/course/print-course', 'CoursesController@printCourse')->name('printCourse');
    Route::get('/course/generate-pdf', 'CoursesController@generatePDF')->name('generatePDF');


    Route::get('/course/generate-pdf', 'CoursesController@generatePDF')->name('generatePDF');
    Route::get('/course/print-course', 'CoursesController@printCourse')->name('printCourse');

    Route::get('/course/generate-pdf', 'CoursesController@generatePDF')->name('generatePDF');



    //Sections
  

   

    // Site Settings
    Route::get('/site/settings', 'SiteSettingController@siteSettings')->name('siteSettings');
    Route::post('/site/settings/update/{id}', 'SiteSettingController@updateSiteSettings')->name('updateSiteSettings');
    Route::get('setting/emailsetting','SiteSettingController@emailsettingview')->name('setting.emailsetting');


    //Enquiry Category Management Routes
    Route::resource('category', 'EnquiryCategoryController');
    Route::get('/delete-category/{id}', 'EnquiryCategoryController@deleteCategory');
    Route::resource('enquiry', 'EnquiryController');
    Route::get('/delete-enquiry/{id}', 'EnquiryController@destroy');
    Route::resource('source', 'EnquirySourceController');
    Route::get('/delete-source/{id}', 'EnquirySourceController@destroy');
    Route::post('/enquiry/applicant/{id}','EnquiryController@addtoclient')->name('clientadd');


    //Student
    Route::get('/customers/customers_v/view', 'StudentController@viewAllStudent')->name('viewStudent');
    Route::match(['get', 'post'], '/customers/add', 'StudentController@addStudent')->name('addStudent');
    Route::match(['get', 'post'], '/customers/edit/{id}', 'StudentController@editStudent')->name('editStudent');

    Route::get('trash-customers/{id}', 'StudentController@trashStudent')->name('trashStudent');
    Route::get('customers-profile/{id}', 'StudentController@profile')->name('studentprofile');
    Route::get('myprofile/stu', 'StudentController@myprofile')->name('mystudentprofile');
    Route::get('/customers/view_trashed', 'StudentController@viewTrashedStudent')->name('viewTrashedStudent');
    Route::get('restore-customers/{id}', 'StudentController@restoreStudent')->name('restoreStudent');

    Route::get('delete-customers/{id}', 'StudentController@deleteStudent')->name('deleteStudent');
   Route::get('/customers/generate-pdf', 'StudentController@generatePDF')->name('generate_studentPDF');
   Route::get('/customers/print-customers', 'StudentController@printStudent')->name('printStudent');
   
   // veendor//

   Route::get("vendor/index",'VendorController@index')->name('vendor.index');
   Route::get("vendor/create",'VendorController@create')->name('vendor.create');
   Route::post('vendor/store','VendorController@store')->name('vendor.store');
   Route::get('vendor/edit/{vendor}','VendorController@edit')->name('vendor.edit');
   Route::patch('vendor/update/{vendor}','VendorController@update')->name('vendor.update');
   Route::get('vendor/trash/{vendor}','VendorController@trash')->name('vendor.trash');
   Route::get('vendor/restore/{vendor}','VendorController@restore')->name('vendor.restore');
   Route::get('vendor/viewtrash','VendorController@viewtrash')->name('vendor.viewtrash');
   Route::get('vendor/delete/{vendor}','VendorController@delete')->name('vendor.delete');
   Route::get('vendor/print','VendorControllerController@print')->name('vendor.print');



   //Accounts Routes
   Route::resource('invoice', 'InvoiceController');
   Route::get('/delete-invoice/{id}', 'InvoiceController@destroy');
   Route::get('/show-invoice/{id}', 'InvoiceController@showinvoice')->name('showinvoice');
   Route::get('/print-invoice', 'InvoiceController@printInvoice')->name('printInvoice');

    //Accounts Routes
    Route::resource('invoice','InvoiceController');
    Route::get('/delete-invoice/{id}','InvoiceController@destroy');
    Route::get('/invoice/generate-pdf', 'InvoiceController@generatePDF')->name('generate_invoicePDF');

    //SMS
    Route::match(['get', 'post'], '/smstemplate/add', 'SmsTemplateController@addSmsTemplate')->name('addSmsTemplate');
    Route::get('/smstemplate/view', 'SmsTemplateController@viewSmsTemplate')->name('viewSmsTemplate');
    Route::match(['get', 'post'], '/smstemplate/edit/{id}', 'SmsTemplateController@editSmsTemplate')->name('editSmsTemplate');
    
    Route::get('delete-smstemplate/{id}', 'SmsTemplateController@deleteSmsTemplate');

    //Email
    Route::match(['get', 'post'], '/emailtemplate/add', 'EmailController@addEmailTemplate')->name('addEmailTemplate');
    Route::get('/emailtemplate/view', 'EmailController@viewEmailTemplate')->name('viewEmailTemplate');
    Route::match(['get', 'post'], '/emailtemplate/edit/{id}', 'EmailController@editEmailTemplate')->name('editEmailTemplate');
    Route::get('delete-emailtemplate/{id}', 'EmailController@deleteEmailTemplate');




    //SMS  View

    Route::get('/sms/customers/view', 'SmsTemplateController@s_smsview')->name('s_smsview');
    Route::get('/sms/staff/view', 'SmsTemplateController@st_smsview')->name('st_smsview');
    Route::get('/sms/enquiries/view', 'SmsTemplateController@e_smsview')->name('e_smsview');
    Route::post('/sms/send', 'SmsTemplateController@sendsms')->name('sendsms');

    //EMAIL  View

    Route::get('/email/customers/view', 'EmailController@s_emailview')->name('s_emailview');
    Route::get('/email/enquiry/view', 'EmailController@e_emailview')->name('e_emailview');
    Route::get('/email/staff/view', 'EmailController@st_emailview')->name('st_emailview');
    Route::post('/email/send', 'EmailController@sendemail')->name('sendemail');

 //Expenses Category routes
    Route::get('expenses/category/index','ExpensescategoryController@index')->name('expensescategory.index');
    Route::get('expenses/category/create','ExpensescategoryController@create')->name('expensescategory.create');
    Route::post('expenses/category/store','ExpensescategoryController@store')->name('expensescategory.store');
    Route::get('expenses/category/edit/{expensescategory}','ExpensescategoryController@edit')->name('expensescategory.edit');
    Route::patch('expenses/category/update/{expensescategory}','ExpensescategoryController@update')->name('expensescategory.update');
    Route::get('expenses/category/delete/{expensescategory}','ExpensescategoryController@delete')->name('expensescategory.delete');

    Route::get('Expenses/add','ExpensesController@create')->name('expenses.create');
    Route::get('Expenses/view','ExpensesController@view')->name('expenses.view');
    Route::post('Expenses/store','ExpensesController@store')->name('expenses.store');
    Route::get('Expenses/Edit/{expensesid}','ExpensesController@edit')->name('expenses.edit');
    Route::post('Expenses/Update/{expensesid}','ExpensesController@update')->name('expenses.update');
    Route::get('Expenses/Delete/{expensesid}','ExpensesController@destroy')->name('expenses.destroy');


     Route::get('income/category/index','IncomecategoryController@index')->name('incomecategory.index');
    Route::get('income/category/create','IncomecategoryController@create')->name('incomecategory.create');
    Route::post('income/category/store','IncomecategoryController@store')->name('incomecategory.store');
    Route::get('income/category/edit/{incomecategory}','IncomecategoryController@edit')->name('incomecategory.edit');

    Route::patch('income/category/update/{incomecategory}','IncomecategoryController@update')->name('incomecategory.update');
    Route::get('income/category/delete/{incomecategory}','IncomecategoryController@delete')->name('incomecategory.delete');


    Route::get('/incomes','IncomesController@incomes')->name('income.incomes.view');
    Route::get('/addincome','IncomesController@addIncome')->name('income.incomes.add');
    route::get('incomes/edit/{incomesid}','IncomesController@editIncome')->name('income.incomes.edit');
    Route::post('incomes/store','IncomesController@store')->name('income.incomes.store');
    Route::get('incomes/Delete/{incomesid}','IncomesController@destroy')->name('income.incomes.destroy');
    Route::post('incomes/update/{incomesid}','IncomesController@updateIncome')->name('income.incomes.update');


    //department
       Route::get('/department/view', 'DepartmentController@viewAllDepartment')->name('viewDepartment');
    Route::match(['get', 'post'], '/department/add', 'DepartmentController@addDepartment')->name('addDepartment');
    Route::match(['get', 'post'], '/department/edit/{id}', 'DepartmentController@editDepartment')->name('editDepartment');
    Route::get('/delete-department/{id}', 'DepartmentController@deleteDepartment')->name('deleteDepartment');
    Route::post('/check-user-id', 'DepartmentController@checkUserId')->name('checkUserId');




    // Staff
    Route::get("staff/view_all", "StaffController@index")->name("view_staff");
    Route::get("Staff/add", "StaffController@create")->name("add_staff");
    Route::post("Staff/store", "StaffController@store")->name("Staff.store");
    Route::post("Staff/update/{id}", "StaffController@update")->name("Staff.edit");
    Route::get("Staff/edit/{id}", "StaffController@edit")->name("edit_staff");
    Route::get('Staff/delete/{id}', 'StaffController@destroy')->name('Staff.delete');

    // Logout

    // level route
    Route::get("level/view_all", "LevelController@index")->name("view_levels");
    Route::get("level/add", "LevelController@create")->name("add_level");
    Route::post("level/store", "LevelController@store")->name("level.store");
    Route::post("level/update/{id}", "LevelController@update")->name("level.edit");
    Route::get("level/edit/{id}", "LevelController@edit")->name("edit_levels");
    Route::get('level/delete/{id}', 'LevelController@destroy')->name('level.delete');
    // Level Route ends here


    // Route for designation title
    Route::get('designation', 'DesignationController@view')->name('Designation.view');
    Route::get('designationcreate', 'DesignationController@create')->name('Designation.create');
    Route::post('designationstore', 'DesignationController@store')->name('Designation.store');
    Route::get('designationedit/{id}', 'DesignationController@edit')->name('Designation.edit');
    Route::post('designationupdate/{id}', 'DesignationController@update')->name('Designation.update');
    Route::get('designationdestroy/{id}', 'DesignationController@destroy')->name('Designation.destroy');









    // Logout

    Route::get('/ims/logout', 'AdminLoginController@imsLogout')->name('imsLogout');


});

Route::any('{catchall}', 'CatchAllController@handle')->where('catchall', '.*');



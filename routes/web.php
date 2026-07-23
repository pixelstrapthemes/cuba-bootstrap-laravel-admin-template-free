<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Users
    Route::put('user/status/{id}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::get('user/remove-image/{id}', [App\Http\Controllers\Admin\UserController::class, 'removeImage'])->name('user.removeImage');

    // Roles
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

    // Pages
    Route::put('page/status/{id}', [App\Http\Controllers\Admin\PageController::class, 'status'])->name('page.status');
    Route::resource('page', App\Http\Controllers\Admin\PageController::class);

    // Tags
    Route::put('tag/status/{id}', [App\Http\Controllers\Admin\TagController::class, 'status'])->name('tag.status');
    Route::resource('tag', App\Http\Controllers\Admin\TagController::class);

    // Blog
    Route::put('blog/status/{id}', [App\Http\Controllers\Admin\BlogController::class, 'status'])->name('blog.status');
    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::get('blog/remove-image/{id}', [App\Http\Controllers\Admin\BlogController::class, 'removeImage'])->name('blog.removeImage');

    // Category
    Route::post('category/update-orders', [App\Http\Controllers\Admin\CategoryController::class, 'updateOrders'])->name('category.update.orders');
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    // User_profile
    Route::get('edit-profile', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
    Route::get('get-states', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
    Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');


// Dashboard
Route::view('default-dashboard', 'dashboards.index')->name('default_dashboard');

//page_layout
Route::view('box-layout', 'page_layouts.box_layout')->name('box_layout');
Route::view('rtl-layout', 'page_layouts.rtl_layout')->name('rtl_layout');
Route::view('dark-layout', 'page_layouts.dark_layout')->name('dark_layout');
Route::view('hide-on-scroll', 'page_layouts.hide_on_scroll')->name('hide_on_scroll');
Route::view('footer-light', 'page_layouts.footer_light')->name('footer_light');
Route::view('footer-dark', 'page_layouts.footer_dark')->name('footer_dark');
Route::view('footer-fixed', 'page_layouts.footer_fixed')->name('footer_fixed');



 //file manager
 Route::view('file-manager', 'file_manager')->name('file_manager');

 //kanban board
 Route::view('kanban', 'kanban')->name('kanban');

 //ecommerce

 Route::view('list-products', 'ecommerce.products.list_products')->name('list_products');
 Route::view('products-details', 'ecommerce.products.products_details')->name('products_details');
 Route::view('checkout', 'ecommerce.checkout')->name('checkout');

 Route::view('settings', 'ecommerce.settings')->name('settings');

//mail box
 Route::view('mail-box', 'mail_box')->name('mail_box');

//chat
Route::view('chat-private', 'chats.chat_private')->name('chat_private');
Route::view('chat-group', 'chats.chat_group')->name('chat_group');

//users
Route::view('profile', 'users.user_profile')->name('user_profile');
Route::view('add_user', 'users.add_user')->name('add_user');
Route::view('list-users', 'users.user_list')->name('user_list');
Route::view('cards', 'users.user_cards')->name('user_cards');
Route::view('permissions-roles', 'users.role_permission')->name('role_permission');

// reports
Route::view('products-reports', 'reports.products')->name('products_reports');
Route::view('sales-reports', 'reports.sales')->name('sales_reports');
Route::view('sales-return', 'reports.sales_return')->name('sales_return');
Route::view('customer-order', 'reports.customer_order')->name('customer_order');

 //bookmark
Route::view('bookmark', 'bookmark')->name('bookmark');

//contacts
Route::view('contacts', 'contacts')->name('contacts');

//tasks
Route::view('task', 'task')->name('task');

//calendar
Route::view('calendar-basic', 'calendar_basic')->name('calendar_basic');

//social_app
Route::view('social-app', 'social_app')->name('social_app');

//to_do
Route::view('to-do', 'to_do')->name('to_do');

//search_result
Route::view('search', 'search')->name('search');

//forms -> form-control
Route::view('form-validation', 'forms.form_controls.form_validation')->name('form_validation');
Route::view('base-input', 'forms.form_controls.base_input')->name('base_input');
Route::view('radio-checkbox-control', 'forms.form_controls.radio_checkbox_control')->name('radio_checkbox_control');
Route::view('input-group', 'forms.form_controls.input_group')->name('input_group');


//forms -> form-widgets
Route::view('datepicker', 'forms.form_widgets.datepicker')->name('datepicker');
Route::view('touchspin', 'forms.form_widgets.touchspin')->name('touchspin');
Route::view('select2', 'forms.form_widgets.select2')->name('select2');
Route::view('switch', 'forms.form_widgets.switch')->name('switch');
Route::view('typeahead', 'forms.form_widgets.typeahead')->name('typeahead');
Route::view('clipboard', 'forms.form_widgets.clipboard')->name('clipboard');

//Forms -> form_layout
Route::view('form-wizard', 'forms.form_layout.form_wizard')->name('form_wizard');
Route::view('two-form-wizard', 'forms.form_layout.form_wizard_two')->name('form_wizard_two');
Route::view('two-factor', 'forms.form_layout.two_factor')->name('two_factor');

//Tables -> bootstrap_tables
Route::view('bootstrap-basic-table', 'tables.bootstrap_tables.bootstrap_basic_table')->name('bootstrap_basic_table');
Route::view('table-components', 'tables.bootstrap_tables.table_components')->name('table_components');

//Tables -> data_tables
Route::view('datatable-basic-init', 'tables.data_tables.datatable_basic_init')->name('datatable_basic_init');


//ui_kits
Route::view('typography', 'ui_kits.typography')->name('typography');
Route::view('avatars', 'ui_kits.avatars')->name('avatars');
Route::view('divider', 'ui_kits.divider')->name('divider');
Route::view('helper-classes', 'ui_kits.helper_classes')->name('helper_classes');
Route::view('grid', 'ui_kits.grid')->name('grid');
Route::view('pills-tag', 'ui_kits.tag_pills')->name('tag_pills');
Route::view('progress-bar', 'ui_kits.progress_bar')->name('progress_bar');
Route::view('modal', 'ui_kits.modal')->name('modal');
Route::view('alert', 'ui_kits.alert')->name('alert');
Route::view('popover', 'ui_kits.popover')->name('popover');
Route::view('placeholders', 'ui_kits.placeholders')->name('placeholders');
Route::view('tooltip', 'ui_kits.tooltip')->name('tooltip');
Route::view('dropdown', 'ui_kits.dropdown')->name('dropdown');
Route::view('according', 'ui_kits.according')->name('according');
Route::view('tabs', 'ui_kits.tabs')->name('tabs');
Route::view('offcanvas', 'ui_kits.offcanvas')->name('offcanvas');
Route::view('navigate-links', 'ui_kits.navigate_links')->name('navigate_links');
Route::view('list', 'ui_kits.list')->name('list');

//bonus_ui

Route::view('pagination', 'bonus_ui.pagination')->name('pagination');
Route::view('breadcrumb', 'bonus_ui.breadcrumb')->name('breadcrumb');
Route::view('basic-card', 'bonus_ui.basic_card')->name('basic_card');
Route::view('creative-card', 'bonus_ui.creative_card')->name('creative_card');

//animation
Route::view('animate', 'animations.animate')->name('animate');

//icons
Route::view('flag-icon', 'icons.flag_icon')->name('flag_icon');
Route::view('font-awesome', 'icons.font_awesome')->name('font_awesome');
Route::view('ico-icon', 'icons.ico_icon')->name('ico_icon');
Route::view('themify-icon', 'icons.themify_icon')->name('themify_icon');
Route::view('feather-icon', 'icons.feather_icon')->name('feather_icon');
Route::view('whether-icon', 'icons.whether_icon')->name('whether_icon');

//buttons
Route::view('buttons', 'buttons')->name('buttons');

//charts

// landing page

//sample-page
Route::view('sample-page', 'sample_page')->name('sample_page');


// Starter kit

//error_page
Route::view('error-404', 'error_pages.error_404')->name('error_404');

//authentication
Route::view('login', 'authentication.login')->name('login');
Route::view('sign-up', 'authentication.sign_up')->name('sign_up');
Route::view('forget-password', 'authentication.forget_password')->name('forget_password');
Route::view('reset-password', 'authentication.reset_password')->name('reset_password');


// subscribed user
Route::view('subscribed-user', 'subscribed_user')->name('subscribed_user');

//gallery
Route::view('gallery', 'gallery.gallery')->name('gallery');
Route::view('with-description', 'gallery.gallery_with_description')->name('gallery_with_description');
Route::view('masonry', 'gallery.gallery_masonry')->name('gallery_masonry');
Route::view('gallery-with-disc', 'gallery.masonry_gallery_with_disc')->name('masonry_gallery_with_disc');
Route::view('hover', 'gallery.gallery_hover')->name('gallery_hover');
Route::view('gallery-placeholder', 'gallery.gallery_placeholder')->name('gallery_placeholder');

//blog
Route::view('all-blogs', 'blog.blog')->name('blogs');
Route::view('details-blog', 'blog.blog_details')->name('blog_details');
Route::view('add-blog', 'blog.add_blog')->name('add_blog');

//job
Route::view('job-cards-view', 'jobs.job_cards_view')->name('job_cards_view');
Route::view('job-list-view', 'jobs.job_list_view')->name('job_list_view');
Route::view('job-details', 'jobs.job_details')->name('job_details');
Route::view('job-candidates', 'jobs.job_candidates')->name('job_candidates');
Route::view('job-companies', 'jobs.job_companies')->name('job_companies');
Route::view('job-apply', 'jobs.job_apply')->name('job_apply');

//courses
Route::view('course-list', 'courses.course_list')->name('course_list');
Route::view('course-details', 'courses.course_details')->name('course_details');

//maps
Route::view('map-js', 'maps.map_js')->name('map_js');
Route::view('vector-map', 'maps.vector_map')->name('vector_map');

//editors
Route::view('quill-editor', 'editors.quill_editor')->name('quill_editor');
Route::view('ckeditor', 'editors.ckeditor')->name('ckeditor');
Route::view('ace-code-editor', 'editors.ace_code_editor')->name('ace_code_editor');

//knowledgebase
Route::view('knowledgebase', 'knowledgebase')->name('knowledgebase');

//support_ticket
Route::view('support-ticket', 'support_ticket')->name('support_ticket');
});

// Refresh Data
Route::get('/refresh-data', function () {
    Artisan::call('cuba:refresh');
    return back();
});





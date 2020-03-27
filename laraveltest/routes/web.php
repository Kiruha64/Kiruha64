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


//Homepage
Route::get('/homepage',  'HomepageController@homepage')->name('homepage');

Route::get('/copy',  'HomepageController@copy')->name('copy');

//Templates

Route::get('/chart',  'TemplateController@chart')->name('chart');

Route::get('/empty',  'TemplateController@empty')->name('empty');

Route::get('/tab_panel',  'TemplateController@tab_panel')->name('tab_panel');



Route::get('/form',  'TemplateController@form')->name('form');

Route::get('/ui_elements',  'TemplateController@ui_elements')->name('ui_elements');



//basis
Route::get('/basis',  'BasisController@basis');




//Menu

Route::get('/menu',  'MenuController@menu')->name('menu');
Route::get('/menu/create',  'MenuController@create')->name('menu-create');
Route::post('/menu/create',  'MenuController@storeDevice')->name('menu-create-post');

Route::get('/menu/{id}/update','MenuController@updateMenu')->name('update-menu');
Route::post('/menu/{id}/update','MenuController@postupdateMenu')->name('post-update-menu');

Route::get('/menu/{id}','MenuController@showOneMenu')->name('show-one-menu');


Route::get('/menu/{id}/delete','MenuController@deleteMenu')->name('delete-menu');


//Slider
Route::get('/sliders/all','SlidersController@index')->name('all-sliders');
Route::get('/sliders/all/create','SlidersController@create')->name('create-sliders');
Route::post('/slidersaction','SlidersController@storeDevice');

Route::get('/sliderpagetitle/all/create','SlidersController@createpagetitle')->name('create-sliderpagetitle');
Route::post('/sliderpagetitle','SlidersController@storeDevicepagetitle');


Route::get('/sliders/all/{id}','SlidersController@showOneSlider')->name('show-one-slider');

Route::get('/sliders/all/{id}/update','SlidersController@updateSlider')->name('update-slider');
Route::post('/sliders/all/{id}/update','SlidersController@postupdateSlider')->name('post-update-slider');

Route::get('/sliderpagetitle/all/{id}/update','SlidersController@updateSliderpagetitle')->name('update-sliderpagetitle');
Route::post('/sliderpagetitle/all/{id}/update','SlidersController@postupdateSliderpagetitle')->name('post-update-sliderpagetitle');

Route::get('/sliders/all/{id}/delete','SlidersController@deleteSlider')->name('delete-slider');
Route::get('/sliderpagetitle/all/{id}/delete','SlidersController@deleteSliderpagetitle')->name('delete-sliderpagetitle');

//About Us
Route::get('/about_us',  'AboutUsController@About_us')->name('about_us');
Route::get('/about_us/create',  'AboutUsController@create')->name('about_us-create');
Route::post('/about_us/create',  'AboutUsController@storeDevice')->name('about_us-create-post');

Route::get('/about_uspagetitle/create',  'AboutUsController@createpagetitle')->name('about_uspagetitle-create');
Route::post('/about_uspagetitle',  'AboutUsController@storeDevicepagetitle')->name('about_uspagetitle-create-post');

Route::get('/about_us/{id}/update','AboutUsController@updateAbout_us')->name('update-about_us');
Route::post('/about_us/{id}/update','AboutUsController@postupdateAbout_us')->name('post-update-about_us');

Route::get('/about_uspagetitle/{id}/update','AboutUsController@updateAbout_uspagetitle')->name('update-about_uspagetitle');
Route::post('/about_uspagetitle/{id}/update','AboutUsController@postupdateAbout_uspagetitle')->name('post-update-about_uspagetitle');

Route::get('/about_us/{id}','AboutUsController@showOneAbout_us')->name('show-one-about_us');


Route::get('/about_us/{id}/delete','AboutUsController@deleteAbout_us')->name('delete-about_us');
Route::get('/about_uspagetitle/{id}/delete','AboutUsController@deleteAbout_uspagetitle')->name('delete-about_uspagetitle');


//Activity
Route::get('/activity',  'ActivityController@Activity')->name('activity');
Route::get('/activity/create',  'ActivityController@create')->name('activity-create');
Route::post('/activity/create',  'ActivityController@storeDevice')->name('activity-create-post');

Route::get('/activitypagetitle/create',  'ActivityController@createpagetitle')->name('activitypagetitle-create');
Route::post('/activitypagetitle/create',  'ActivityController@storeDevicepagetitle')->name('activitypagetitle-create-post');

Route::get('/activity/{id}/update','ActivityController@updateActivity')->name('update-activity');
Route::post('/activity/{id}/update','ActivityController@postupdateActivity')->name('post-update-activity');

Route::get('/activitypagetitle/{id}/update','ActivityController@updateActivitypagetitle')->name('update-activitypagetitle');
Route::post('/activitypagetitle/{id}/update','ActivityController@postupdateActivitypagetitle')->name('post-update-activitypagetitle');

Route::get('/activity/{id}','ActivityController@showOneActivity')->name('show-one-activity');
Route::get('/activity/{id}','ActivityController@showOneActivity')->name('show-one-activity');


Route::get('/activity/{id}/delete','ActivityController@deleteActivity')->name('delete-activity');
Route::get('/activitypagetitle/{id}/delete','ActivityController@deleteActivitypagetitle')->name('delete-activitypagetitle');

//Details
Route::get('/detail',  'DetailController@Detail')->name('detail');
Route::get('/detail/create',  'DetailController@create')->name('detail-create');
Route::post('/detail/create',  'DetailController@storeDevice')->name('detail-create-post');

Route::get('/detailpagetitle/create',  'DetailController@createpagetitle')->name('detailpagetitle-create');
Route::post('/detailpagetitle/create',  'DetailController@storeDevicepagetitle')->name('detailpagetitle-create-post');

Route::get('/detail/{id}/update','DetailController@updateDetail')->name('update-detail');
Route::post('/detail/{id}/update','DetailController@postupdateDetail')->name('post-update-detail');

Route::get('/detailpagetitle/{id}/update','DetailController@updateDetailpagetitle')->name('update-detailpagetitle');
Route::post('/detailpagetitle/{id}/update','DetailController@postupdateDetailpagetitle')->name('post-update-detailpagetitle');

Route::get('/detail/{id}','DetailController@showOneDetail')->name('show-one-detail');


Route::get('/detail/{id}/delete','DetailController@deleteDetail')->name('delete-detail');
Route::get('/detailpagetitle/{id}/delete','DetailController@deleteDetailpagetitle')->name('delete-detailpagetitle');

//Statistick table

Route::get('/statistick',  'StatistickTableController@Statistick')->name('statistick');
Route::get('/statistick/create',  'StatistickTableController@create')->name('statistick-create');
Route::post('/statistick/create',  'StatistickTableController@storeDevice')->name('statistick-create-post');

Route::get('/statistickpagetitle/create',  'StatistickTableController@createpagetitle')->name('statistickpagetitle-create');
Route::post('/statistickpagetitle/create',  'StatistickTableController@storeDevicepagetitle')->name('statistickpagetitle-create-post');

Route::get('/statistick/{id}/update','StatistickTableController@updateStatistick')->name('update-statistick');
Route::post('/statistick/{id}/update','StatistickTableController@postupdateStatistick')->name('post-update-statistick');

Route::get('/statistickpagetitle/{id}/update','StatistickTableController@updateStatistickpagetitle')->name('update-statistickpagetitle');
Route::post('/statistickpagetitle/{id}/update','StatistickTableController@postupdateStatistickpagetitle')->name('post-update-statistickpagetitle');

Route::get('/statistick/{id}','StatistickTableController@showOneStatistick')->name('show-one-statistick');


Route::get('/statistick/{id}/delete','StatistickTableController@deleteStatistick')->name('delete-statistick');
Route::get('/statistickpagetitle/{id}/delete','StatistickTableController@deleteStatistickpagetitle')->name('delete-statistickpagetitle');


//InfoHover

Route::get('/infohover',  'InfoHoverController@Infohover')->name('infohover');
Route::get('/infohover/create',  'InfoHoverController@create')->name('infohover-create');
Route::post('/infohover/create',  'InfoHoverController@storeDevice')->name('infohover-create-post');

Route::get('/infohoverpagetitle/create',  'InfoHoverController@createpagetitle')->name('infohoverpagetitle-create');
Route::post('/infohoverpagetitle/create',  'InfoHoverController@storeDevicepagetitle')->name('infohoverpagetitle-create-post');

Route::get('/infohover/{id}/update','InfoHoverController@updateInfohover')->name('update-infohover');
Route::post('/infohover/{id}/update','InfoHoverController@postupdateInfohover')->name('post-update-infohover');

Route::get('/infohoverpagetitle/{id}/update','InfoHoverController@updateInfohoverpagetitle')->name('update-infohoverpagetitle');
Route::post('/infohoverpagetitle/{id}/update','InfoHoverController@postupdateInfohoverpagetitle')->name('post-update-infohoverpagetitle');

Route::get('/infohover/{id}','InfoHoverController@showOneInfohover')->name('show-one-infohover');

Route::get('/infohover/{id}/delete','InfoHoverController@deleteInfohover')->name('delete-infohover');
Route::get('/infohoverpagetitle/{id}/delete','InfoHoverController@deleteInfohoverpagetitle')->name('delete-infohoverpagetitle');


//Second Slider

Route::get('/secondslider',  'SecondSliderController@Secondslider')->name('secondslider');
Route::get('/secondslider/create',  'SecondSliderController@create')->name('secondslider-create');
Route::post('/secondslider/create',  'SecondSliderController@storeDevice')->name('secondslider-create-post');

Route::get('/secondslider/{id}/update','SecondSliderController@updateSecondslider')->name('update-secondslider');
Route::post('/secondslider/{id}/update','SecondSliderController@postupdateSecondslider')->name('post-update-secondslider');

Route::get('/secondslider/{id}','SecondSliderController@showOneSecondslider')->name('show-one-secondslider');

Route::get('/secondslider/{id}/delete','SecondSliderController@deleteSecondslider')->name('delete-secondslider');

//Contact Form

//Route::get('/contactinfo',  'ContactInfoController@Contactinfo')->name('contactinfo');
//Route::get('/contactinfo/create',  'ContactInfoController@create')->name('contactinfo-create');
//Route::post('/contactinfo/create',  'ContactInfoController@storeDevice')->name('contactinfo-create-post');
//Route::get('/contactinfo_city/create',  'ContactInfoController@create_city')->name('contactinfo-create-city');
//Route::post('/contactinfo_city/create',  'ContactInfoController@storeDevice_city')->name('contactinfo-create-post-city');
//
//
//Route::get('/contactinfo/{id}/update','ContactInfoController@updateContactinfo')->name('update-contactinfo');
//Route::post('/contactinfo/{id}/update','ContactInfoController@postupdateContactinfo')->name('post-update-contactinfo');
//Route::get('/contactinfo_city/{id}/update','ContactInfoController@updateContactinfo_city')->name('update-contactinfo-city');
//Route::post('/contactinfo_city/{id}/update','ContactInfoController@postupdateContactinfo_city')->name('post-update-contactinfo-city');
//
//Route::get('/contactinfo/{id}','ContactInfoController@showOneContactinfo')->name('show-one-contactinfo');
//Route::get('/contactinfo_city/{id}','ContactInfoController@showOneContactinfo_city')->name('show-one-contactinfo-city');
//
//
//Route::get('/contactinfo/{id}/delete','ContactInfoController@deleteContactinfo')->name('delete-contactinfo');
//Route::get('/contactinfo_city/{id}/delete','ContactInfoController@deleteContactinfo_city')->name('delete-contactinfo-city');

//Footer


Route::get('/footer',  'FooterController@Footer')->name('footer');
Route::get('/footer/create',  'FooterController@create')->name('footer-create');
Route::post('/footer/create',  'FooterController@storeDevice')->name('footer-create-post');

//Route::get('/about_uspagetitle/create',  'AboutUsController@createpagetitle')->name('about_uspagetitle-create');
//Route::post('/about_uspagetitle',  'AboutUsController@storeDevicepagetitle')->name('about_uspagetitle-create-post');

Route::get('/footer/{id}/update','FooterController@updateFooter')->name('update-footer');
Route::post('/footer/{id}/update','FooterController@postupdateFooter')->name('post-update-footer');

//Route::get('/about_uspagetitle/{id}/update','AboutUsController@updateAbout_uspagetitle')->name('update-about_uspagetitle');
//Route::post('/about_uspagetitle/{id}/update','AboutUsController@postupdateAbout_uspagetitle')->name('post-update-about_uspagetitle');

Route::get('/footer/{id}','FooterController@showOneFooter')->name('show-one-footer');


Route::get('/footer/{id}/delete','FooterController@deleteFooter')->name('delete-footer');
//Route::get('/about_uspagetitle/{id}/delete','AboutUsController@deleteAbout_uspagetitle')->name('delete-about_uspagetitle');



















//Footer_Menu
Route::get('/footer_menu',  'FooterMenuController@Footer_menu')->name('footer_menu');


Route::get('/footer_menu/create',  'FooterMenuController@create_Footer_menu')->name('footer-menu-create');
Route::post('/footer_menu/create',  'FooterMenuController@storeDevice_Footer_menu')->name('footer-menu-create-post');

Route::get('/footer_menu/{id}/update','FooterMenuController@updateFooter_menu')->name('update-footer-menu');
Route::post('/footer_menu/{id}/update','FooterMenuController@postupdateFooter_menu')->name('post-update-footer-menu');

Route::get('/footer_menu/{id}','FooterMenuController@showOneFooter_menu')->name('show-one-footer-menu');

Route::get('/footer_menu/{id}/delete','FooterMenuController@deleteFooter_menu')->name('delete-footer-menu');
//End Footer MEnu

//Contacts

Route::get('/contacts',  'ContactsController@Contacts')->name('contacts');
Route::get('/contacts/create',  'ContactsController@create')->name('contacts-create');
Route::post('/contacts/create',  'ContactsController@storeDevice')->name('contacts-create-post');


Route::get('/contactspagetitle/{id}/update','ContactsController@updateContacts')->name('update-contacts');
Route::post('/contactspagetitle/{id}/update','ContactsController@postupdateContacts')->name('post-update-contacts');

Route::get('/contacts/{id}','ContactsController@showOneContacts')->name('show-one-contacts');

Route::get('/contacts/{id}/delete','ContactsController@deleteContacts')->name('delete-contacts');





//Portfolio
Route::get('/Portfolio/all','PortfolioController@index')->name('all-portfolio');

Route::get('/Portfolio/all/create','PortfolioController@create')->name('create-portfolio');
Route::post('/Portfolioaction','PortfolioController@storeDevice');

Route::get('/Portfoliofile/all/create','PortfolioController@createPortfoliofile')->name('create-portfoliofile');
Route::post('/Portfoliofileaction','PortfolioController@storeDevicePortfoliofile');

Route::get('/Portfolio/all/{id}','PortfolioController@showOnePortfolio')->name('show-one-portfolio');

Route::get('/Portfolio/all/{id}/update','PortfolioController@updatePortfolio')->name('update-portfolio');
Route::post('/Portfolio/all/{id}/update','PortfolioController@postupdatePortfolio')->name('post-update-portfolio');

Route::get('/Portfoliofile/all/{id}/update','PortfolioController@updatePortfoliofile')->name('update-portfoliofile');
Route::post('/Portfoliofile/all/{id}/update','PortfolioController@postupdatePortfoliofile')->name('post-update-portfoliofile');

Route::get('/Portfolio/all/{id}/delete','PortfolioController@deletePortfolio')->name('delete-portfolio');

Route::get('/Portfoliofile/all/{id}/delete','PortfolioController@deletePortfoliofile')->name('delete-portfoliofile');

//Pricing table

Route::get('/pricing',  'PricingTableController@Pricing')->name('pricing');
Route::get('/pricing/create',  'PricingTableController@create')->name('pricing-create');
Route::post('/pricing/create',  'PricingTableController@storeDevice')->name('pricing-create-post');



Route::get('/pricing/{id}/update','PricingTableController@updatePricing')->name('update-pricing');
Route::post('/pricing/{id}/update','PricingTableController@postupdatePricing')->name('post-update-pricing');



Route::get('/pricing/{id}','PricingTableController@showOnePricing')->name('show-one-pricing');


Route::get('/pricing/{id}/delete','PricingTableController@deletePricing')->name('delete-pricing');

//Blocks
Route::get('/blocks',  'BlocksController@index')->name('blocks');

Route::get('/blocks/create',  'BlocksController@create')->name('blocks-create');
Route::post('/blocksaction/create',  'BlocksController@storeDevice')->name('blocks-create-post');

Route::get('/blocks/{id}/update','BlocksController@updateBlock')->name('update-blocks');
Route::post('/blocks/{id}/update','BlocksController@postupdateBlock')->name('post-update-blocks');

Route::get('/blocks/{id}','BlocksController@showOneBlock')->name('show-one-blocks');


Route::get('/blocks/{id}/delete','BlocksController@deleteBlock')->name('delete-blocks');


//Pages

Route::get('/pages',  'PagesController@index')->name('pages');

Route::get('/pages/create',  'PagesController@create')->name('pages-create');
Route::post('/pagessaction/create',  'PagesController@storeDevice')->name('pages-create-post');

Route::get('/pages/{id}/update','PagesController@updatePage')->name('update-pages');
Route::post('/pages/{id}/update','PagesController@postupdatePage')->name('post-update-pages');

Route::get('/pages/{id}','PagesController@showOnePage')->name('show-one-pages');


Route::get('/pages/{id}/delete','PagesController@deletePage')->name('delete-pages');

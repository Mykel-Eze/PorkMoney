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

/*
|--------------------------------------------------------------------------
|   VIEW ROUTES
|--------------------------------------------------------------------------
*/
Route::view('/', 'external.index', ['title' => "PorkMoney"]);
Route::view('/add-password', 'auth.set-password');
Route::view('/biocycle-project', 'external.biocycle-project', ['title' => "PorkMoney - Biocycle Project"]);
Route::view('/contract', 'external.contract', ['title' => "PorkMoney - Contract"]);
Route::view('/faq', 'external.faq', ['title' => "PorkMoney - FAQ"]);
Route::view('/founder', 'external.founder', ['title' => "PorkMoney - Founder"]);
Route::view('/policy', 'external.policy', ['title' => "PorkMoney - Privacy Policy"]);
Route::view('/porkoyum', 'external.porkoyum-page', ['title' => "PorkMoney - Porkoyum"]);
Route::view('/posts', 'internal.posts')->middleware('admin');
Route::view('/sendemails', 'internal.sendemails')->middleware('admin');
Route::view('/emailprospects', 'internal.emailprospects')->middleware('admin');
Route::view('/wait', 'internal.awaiting')->name('wait')->middleware('auth');


Route::view('/reset-email', 'auth.reset-email');
// Route::view('/team', 'external.team', ['title' => "PorkMoney - Team"]);
Route::view('/terms', 'external.terms', ['title' => "PorkMoney - T&C"]);
Route::view('/careers', 'external.job', ['title' => "PorkMoney - Careers"]);
Route::view('/food-tech', 'external.food-tech', ['title' => "PorkMoney - Food-Tech"]);
Route::view('/hrbp', 'external.hrbp', ['title' => "PorkMoney - HRBP"]);
Route::view('/dsprm', 'external.dsprm', ['title' => "PorkMoney - DSPRM"]);
Route::view('/ebuka', 'external.ebuka', ['title' => "PorkMoney - Ebuka"]);
Route::view('/dumelo', 'external.dumelo', ['title' => "PorkMoney - Dumelo"]);
Route::view('/about', 'external.about', ['title' => "PorkMoney - About us"]);

Route::view('/unactv', 'internal.unactivated', ['title' => "PorkMoney - Log"]);
//Route::view('/pay-mode', 'internal.pay-mode', ['title' => "PorkMoney - Log"]);

/* TEST FILE */
Route::view('/kk-test-index', 'test-files.test-index', ['title' => "PorkMoney"]);

/*
|--------------------------------------------------------------------------
|   AUTH ROUTES
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
|   GET ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/add-plan', 'HomeController@addPlan')->name('addPlan')->middleware('admin');
Route::get('/complete-registration', 'DashboardController@completeRegistration')->middleware('paymodesecure');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('activated');
Route::get('/dashboard/notifications', 'DashboardController@newsletter')->middleware('activated');
Route::get('/dashboard/notifications/{id}', 'DashboardController@newsletter')->middleware('activated');
Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');
Route::get('/registration/{token}/update', 'VerificationTokenController@verify')->name('set-password');
Route::get('/homedetails','DetailsController@index')->name('details')->middleware('admin');
Route::get('/form','ContractFormController@showForm')->name('form')->middleware('contracted');
Route::get('/paymode','ContractFormController@showPaymentMode')->name('showpaymode')->middleware('paymodesecure');
Route::get('/subscribed-users', 'DetailsController@getSubscribersDetails')->middleware('admin');
Route::get('/poster','PosterController@showNewsletterPoster')->name('poster');
Route::get('/contracted-display','ContractFormController@showContractedForm')->middleware('admin');
Route::get('/jkblmnww2f','SubscriptionsController@getActivePartners');
/*
|--------------------------------------------------------------------------
|   POST ROUTES
|--------------------------------------------------------------------------
*/
Route::post('/complete-registration', 'SubscriptionsController@completeRegistration');
Route::post('/add-plan', 'SubscriptionsController@addPlan')->name('addPlan')->middleware('admin');
Route::post('join','Auth\RegisterController@join')->name('join');
Route::post('/read-notification/{id}', 'DashboardController@readNotification');
Route::post('/registration/add-password', 'Auth\RegisterController@addPassword');
Route::post('/send-newsletter', 'DashboardController@sendNotification');
Route::post('/send-password-link', 'VerificationTokenController@send');
Route::post('/subscribe', 'SubscriptionsController@store');
Route::post('/contact-us', 'ContactController@sendMail');
Route::post('/newsletter','NewsletterController@store')->name('newsletter');
Route::post('/storecontract','ContractFormController@storeform')->name('storecontract');
Route::post('/activate-account','SubscriptionsController@activateAccount');
Route::post('/activatecontract','ContractFormController@activateContract')->name('activatecontract');
Route::post('/activateuser','SubscriptionsController@active')->name('activateuser');
Route::post('/deleteuser','HomeController@destroy')->name('deleteuser');
Route::post('/sendemail','SendMailToPartners@sendTopartners')->name('sendemail');
Route::post('/emailprospects', 'SendMailToPartners@sendToProspects')->name('emailprospects');



<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Frontend
 */
Route::get('/', 'IndexController@index');
Route::get('/welcome', 'IndexController@index')->name('frontend.index');

Route::get('/about-us', 'AboutController@index')->name('frontend.about');
Route::get('/why-us', 'AboutController@whyUs')->name('frontend.why');
Route::get('/events', 'EventController@index')->name('frontend.event');

Route::get('/contact-us', 'ContactController@index')->name('frontend.contact');
Route::post('/contact-us', 'ContactController@store')->name('frontend.contact');

Route::get('/programs', 'ProgramController@index')->name('frontend.programs');
Route::get('/programs/{program}', 'ProgramController@show')->name('frontend.program.show');

Route::get('/leadership', 'LeadershipController@index')->name('frontend.leadership');
Route::get('/leadership/{leader}', 'LeadershipController@show')->name('frontend.leadership.show');

Route::get('/gallery', 'IndexController@gallery')->name('frontend.gallery');


/**
 * Admin Dashboard
 */
Route::group(['prefix' => 'dashboard'], function () {
	Route::group(['middleware' => ['auth', 'admin']],function(){
		Route::get('/', 'DashboardController@index')->name('admin.dashboard');

		Route::get('/about', 'Admin\AboutController@index')->name('admin.about.index');
		Route::get('/about/{about}/edit', 'Admin\AboutController@edit')->name('admin.about.edit');
		Route::patch('/about/{about}', 'Admin\AboutController@update')->name('admin.about.update');

		Route::get('/why-us', 'Admin\WhyusController@index')->name('admin.whyus.index');
		Route::get('/why-us/{whyus}/edit', 'Admin\WhyusController@edit')->name('admin.whyus.edit');
		Route::patch('/why-us/{whyus}', 'Admin\WhyusController@update')->name('admin.whyus.update');

		Route::get('/team', 'Admin\TeamController@index')->name('admin.team.index');
		Route::get('/team/create', 'Admin\TeamController@create')->name('admin.team.create');
		Route::post('/team', 'Admin\TeamController@store')->name('admin.team.store');
		Route::get('/team/{team}', 'Admin\TeamController@show')->name('admin.team.show');
		Route::get('/team/{team}/edit', 'Admin\TeamController@edit')->name('admin.team.edit');
		Route::patch('/team/{team}', 'Admin\TeamController@update')->name('admin.team.update');
		Route::delete('/team/{team}', 'Admin\TeamController@destroy')->name('admin.team.delete');

		Route::get('/programs', 'Admin\ProgramController@index')->name('admin.program.index');
		Route::get('/programs/create', 'Admin\ProgramController@create')->name('admin.program.create');
		Route::post('/programs', 'Admin\ProgramController@store')->name('admin.program.store');
		Route::get('/programs/{program}/edit', 'Admin\ProgramController@edit')->name('admin.program.edit');
		Route::patch('/programs/{program}', 'Admin\ProgramController@update')->name('admin.program.update');
		Route::delete('/programs/{program}', 'Admin\ProgramController@destroy')->name('admin.program.delete');

		Route::get('/events', 'Admin\EventController@index')->name('admin.event.index');
		Route::post('/events', 'Admin\EventController@store')->name('admin.event.store');
		Route::get('/events/create', 'Admin\EventController@create')->name('admin.event.create');
		Route::get('/events/{event}/edit', 'Admin\EventController@edit')->name('admin.event.edit');
		Route::patch('/events/{event}', 'Admin\EventController@update')->name('admin.event.update');
		Route::delete('/events/{event}', 'Admin\EventController@destroy')->name('admin.event.delete');

		Route::get('/results', 'Admin\ResultController@index')->name('admin.result.index');
		Route::get('/results/create', 'Admin\ResultController@create')->name('admin.result.create');
		Route::post('/results', 'Admin\ResultController@store')->name('admin.result.store');
		Route::get('/results/{result}/edit', 'Admin\ResultController@edit')->name('admin.result.edit');
		Route::patch('/results/{result}', 'Admin\ResultController@update')->name('admin.result.update');
		Route::delete('/results/{result}', 'Admin\ResultController@destroy')->name('admin.result.delete');

		Route::get('/testimonials', 'Admin\TestimonialController@index')->name('admin.testimonial.index');
		Route::get('/testimonials/create', 'Admin\TestimonialController@create')->name('admin.testimonial.create');
		Route::post('/testimonials', 'Admin\TestimonialController@store')->name('admin.testimonial.store');
		Route::get('/testimonials/{testimonial}/edit', 'Admin\TestimonialController@edit')->name('admin.testimonial.edit');
		Route::patch('/testimonials/{testimonial}', 'Admin\TestimonialController@update')->name('admin.testimonial.update');
		Route::delete('/testimonials/{testimonial}', 'Admin\TestimonialController@destroy')->name('admin.testimonial.delete');

		Route::get('/inbox', 'Admin\InboxController@index')->name('admin.inbox.index');
		Route::get('/inbox/{contact}', 'Admin\InboxController@show')->name('admin.inbox.show');
		Route::delete('/inbox/{contact}', 'Admin\InboxController@destroy')->name('admin.inbox.delete');

		Route::get('/speech', 'Admin\SpeechController@index')->name('admin.speech.index');

		Route::get('/speech/director/{director}/edit', 'Admin\DirectorController@edit')->name('admin.speech.director.edit');
		Route::patch('/speech/director/{director}', 'Admin\DirectorController@update')->name('admin.speech.director.update');

		Route::get('/speech/principal/{principal}/edit', 'Admin\PrincipalController@edit')->name('admin.speech.principal.edit');
		Route::patch('/speech/principal/{principal}', 'Admin\PrincipalController@update')->name('admin.speech.principal.update');

		Route::get('/speech/coordinator/{coordinator}/edit', 'Admin\CoordinatorController@edit')->name('admin.speech.coordinator.edit');
		Route::patch('/speech/coordinator/{coordinator}', 'Admin\CoordinatorController@update')->name('admin.speech.coordinator.update');

		Route::get('/admission-form', 'Admin\FormController@index')->name('admin.form.index');
		Route::get('/admission-form/create', 'Admin\FormController@create')->name('admin.form.create');
		Route::post('/admission-form', 'Admin\FormController@store')->name('admin.form.store');
		Route::get('/admission-form/{form}/edit', 'Admin\FormController@edit')->name('admin.form.edit');
		Route::patch('/admission-form/{form}', 'Admin\FormController@update')->name('admin.form.update');

		/*
		Gallerry 
		*/
		Route::get('/gallery', 'Admin\GalleryController@index')->name('admin.gallery.index');
		Route::get('/gallery/create', 'Admin\GalleryController@create')->name('admin.gallery.create');
		Route::post('/gallery/', 'Admin\GalleryController@store')->name('admin.gallery.store');
		Route::get('/gallery/{gallery}/edit', 'Admin\GalleryController@edit')->name('admin.gallery.edit');
		Route::patch('/gallery/{gallery}', 'Admin\GalleryController@update')->name('admin.gallery.update');
		Route::delete('/gallery/{gallery}', 'Admin\GalleryController@destroy')->name('admin.gallery.destroy');
	});
});


// ns1.ipower.com
// ns2.ipower.com

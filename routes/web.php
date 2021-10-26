<?php

Route::group(['namespace'=>'frontend'],function(){
    Route::get('/','HomeController@index')->name('frontend.home');



Route::get('/sips','SipController@index')->name('frontend.sips');
Route::get('/forms','FormsController@index')->name('frontend.form');
Route::get('/knowledge','KnowledgeController@index')->name('frontend.knowledge');

Route::get('/performance','PerformanceController@index')->name('frontend.performance');
Route::get('/nsearch','PerformanceController@search')->name('nsearch');


Route::get('/contact','ContactsController@index')->name('frontend.contacts');
Route::post('/contact-add','ContactsController@store')->name('frontend.contacts.add');




});

Auth::routes();


Route::group(['middleware' => ['auth','admin'],'namespace'=>'Admin'],function(){

    Route::get('/searchejax','DashboardController@search')->name('sraechajax');

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('users', 'DashboardController@users')->name('users');
    Route::get('/role-edit/{id}','DashboardController@registeredit');
    Route::put('/role-register-update/{id}','DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','DashboardController@registerdelete');



Route::get('/fund-perfprmance','Fundperformence@index')->name('fund.perfprmance');
Route::get('/fund-perfprmance-add','Fundperformence@add')->name('add.fund.perfprmance');
Route::post('/fund-perfprmance-sae','Fundperformence@store')->name('save.fund.perfprmance');
Route::get('/fund-perfprmance-edit/{id}','Fundperformence@edit')->name('edit.fund.perfprmance');
Route::put('/fund-perfprmance-update/{id}','Fundperformence@update')->name('update.fund.perfprmance');
Route::delete('/fund-perfprmance-delete/{id}','Fundperformence@delete')->name('delete.fund.perfprmance');


Route::get('/sliders','SlidersController@index')->name('slider');
Route::get('/slideradd','SlidersController@addview')->name('addslider');
Route::post('/storeslider','SlidersController@store')->name('storeslider');
Route::get('/editslider/{id}','SlidersController@edit')->name('edit.slider');
Route::put('/updateslider/{id}','SlidersController@update')->name('sliderupdate');
Route::delete('/updateslider/{id}','SlidersController@delete')->name('deletetslider');


Route::get('/notes','NotesController@index')->name('note');
Route::get('/noteadd','NotesController@create')->name('addnote');
Route::post('/notesave','NotesController@store')->name('savenote');
Route::get('/noteedit/{id}','NotesController@show')->name('editnote');
Route::put('/noteupdate/{id}','NotesController@update')->name('undatenote');
Route::delete('/notedelete/{id}','NotesController@delete')->name('deletenote');


Route::get('/sizes','SizeinfoController@index')->name('size');
Route::get('/sizeadd','SizeinfoController@create')->name('addsize');
Route::post('/sizesave','SizeinfoController@store')->name('savesize');
Route::get('/sizeedit/{id}','SizeinfoController@show')->name('editsize');
Route::put('/sizeupdate/{id}','SizeinfoController@update')->name('undatesize');
Route::delete('/sizedelete/{id}','SizeinfoController@delete')->name('deletesize');

Route::get('/dates','DateController@index')->name('date');
Route::get('/dateadd','DateController@create')->name('adddate');
Route::post('/datesave','DateController@store')->name('savedate');
Route::get('/dateedit/{id}','DateController@show')->name('editdate');
Route::put('/dateupdate/{id}','DateController@update')->name('undatedate');
Route::delete('/datedelete/{id}','DateController@delete')->name('deletedate');

Route::get('/infms','informationController@index')->name('infm');
Route::get('/infmadd','informationController@create')->name('addinfm');
Route::post('/infmsave','informationController@store')->name('saveinfm');
Route::get('/infmedit/{id}','informationController@show')->name('editinfm');
Route::put('/infmupdate/{id}','informationController@update')->name('updateinfm');
Route::delete('/infmdelete/{id}','informationController@delete')->name('deleteinfm');


Route::get('/detail-informations','DetailInformation@index')->name('detail.information');
Route::get('/detail-information-add','DetailInformation@create')->name('add.detail.information');
Route::post('/detail-information-save','DetailInformation@store')->name('save.detail.information');
Route::get('/detail-information-edit/{id}','DetailInformation@show')->name('edit.detail.information');
Route::put('/detail-information-update/{id}','DetailInformation@update')->name('update.detail.information');
Route::delete('/detail-information-delete/{id}','DetailInformation@delete')->name('delete.detail.information');

Route::get('/abouts','AboutsController@index')->name('about');
Route::get('/aboutadd','AboutsController@create')->name('addabout');
Route::post('/aboutsave','AboutsController@store')->name('saveabout');
Route::get('/aboutedit/{id}','AboutsController@show')->name('editabout');
Route::put('/aboutupdate/{id}','AboutsController@update')->name('updateabout');
Route::delete('/aboutdelete/{id}','AboutsController@delete')->name('deleteabout');

Route::get('/detail-abouts','DetailAbout@index')->name('detail.about');
Route::get('/detail-about-add','DetailAbout@create')->name('add.detail.about');
Route::post('/detail-about-save','DetailAbout@store')->name('save.detail.about');
Route::get('/detail-about-edit/{id}','DetailAbout@show')->name('edit.detail.about');
Route::put('/detail-about-update/{id}','DetailAbout@update')->name('update.detail.about');
Route::delete('/detail-about-delete/{id}','DetailAbout@delete')->name('delete.detail.about');

//Performance & Reports page


Route::get('/sensitive-info','SensitiveInformation@index')->name('sensitive.info');
Route::get('/sensitive-info-add','SensitiveInformation@create')->name('add.sensitive.info');
Route::post('/sensitive-info-save','SensitiveInformation@store')->name('save.sensitive.info');
Route::get('/sensitive-info-edit/{id}','SensitiveInformation@show')->name('edit.sensitive.info');
Route::put('/sensitive-info-update/{id}','SensitiveInformation@update')->name('update.sensitive.info');
Route::delete('/sensitive-info-delete/{id}','SensitiveInformation@delete')->name('delete.sensitive.info');

Route::get('/finencial-statement','FinancialStatement@index')->name('finencia.statement');
Route::get('/finencial-statement-add','FinancialStatement@create')->name('add.finencia.statement');
Route::post('/finencial-statement-save','FinancialStatement@store')->name('save.finencia.statement');
Route::get('/finencial-statement-edit/{id}','FinancialStatement@show')->name('edit.finencia.statement');
Route::put('/finencial-statement-update/{id}','FinancialStatement@update')->name('update.finencia.statement');
Route::delete('/finencial-statement-delete/{id}','FinancialStatement@delete')->name('delete.finencia.statement');

Route::get('/annual-repoet','AnnualReport@index')->name('annual.repoet');
Route::get('/annual-repoet-add','AnnualReport@create')->name('add.annual.repoet');
Route::post('/annual-repoet-save','AnnualReport@store')->name('save.annual.repoet');
Route::get('/annual-repoet-edit/{id}','AnnualReport@show')->name('edit.annual.repoet');
Route::put('/annual-repoet-update/{id}','AnnualReport@update')->name('update.annual.repoet');
Route::delete('/annual-repoet-delete/{id}','AnnualReport@delete')->name('delete.annual.repoet');

Route::get('/portfolio-report','PortfolioReport@index')->name('portfolio.report');
Route::get('/portfolio-report-add','PortfolioReport@create')->name('add.portfolio.report');
Route::post('/portfolio-report-save','PortfolioReport@store')->name('save.portfolio.report');
Route::get('/portfolio-report-edit/{id}','PortfolioReport@show')->name('edit.portfolio.report');
Route::put('/portfolio-report-update/{id}','PortfolioReport@update')->name('update.portfolio.report');
Route::delete('/portfolio-report-delete/{id}','PortfolioReport@delete')->name('delete.portfolio.report');

Route::get('/performance-report','PerformanceReport@index')->name('performance.report');
Route::get('/performance-report-add','PerformanceReport@create')->name('add.performance.report');
Route::post('/performance-report-save','PerformanceReport@store')->name('save.performance.report');
Route::get('/performance-report-edit/{id}','PerformanceReport@show')->name('edit.performance.report');
Route::put('/performance-report-update/{id}','PerformanceReport@update')->name('update.performance.report');
Route::delete('/performance-report-delete/{id}','PerformanceReport@delete')->name('delete.performance.report');

Route::get('/contact-massage','ContactMassage@index')->name('contact.massage');


//Forms And Documents Page
Route::get('/selling-agent','SellingAgentController@index')->name('selling.agent');
Route::get('/selling-agent-add','SellingAgentController@create')->name('add.selling.agent');
Route::post('/selling-agent-save','SellingAgentController@store')->name('save.selling.agent');
Route::get('/selling-agent-edit/{id}','SellingAgentController@show')->name('edit.selling.agent');
Route::put('/selling-agent-update/{id}','SellingAgentController@update')->name('update.selling.agent');
Route::delete('/selling-agent-delete/{id}','SellingAgentController@delete')->name('delete.selling.agent');

Route::get('/fund-sheet','FundSheetController@index')->name('fund.sheet');
Route::get('/fund-sheet-add','FundSheetController@create')->name('add.fund.sheet');
Route::post('/fund-sheet-save','FundSheetController@store')->name('save.fund.sheet');
Route::get('/fund-sheet-edit/{id}','FundSheetController@show')->name('edit.fund.sheet');
Route::put('/fund-sheet-update/{id}','FundSheetController@update')->name('update.fund.sheet');
Route::delete('/fund-sheet-delete/{id}','FundSheetController@delete')->name('delete.fund.sheet');


//Sip Page
Route::get('/sip-slider','SipSliderController@index')->name('sip.slider');
Route::get('/sip-slider-add','SipSliderController@create')->name('add.sip.slider');
Route::post('/sip-slider-save','SipSliderController@store')->name('save.sip.slider');
Route::get('/sip-slider-edit/{id}','SipSliderController@show')->name('edit.sip.slider');
Route::put('/sip-slider-update/{id}','SipSliderController@update')->name('update.sip.slider');
Route::delete('/sip-slider-delete/{id}','SipSliderController@delete')->name('delete.sip.slider');

Route::get('/whai-is-sip','WhatisSipController@index')->name('what.is.sip');
Route::get('/whai-is-sip-add','WhatisSipController@create')->name('add.what.is.sip');
Route::post('/whai-is-sip-save','WhatisSipController@store')->name('save.what.is.sip');
Route::get('/whai-is-sip-edit/{id}','WhatisSipController@show')->name('edit.what.is.sip');
Route::put('/whai-is-sip-update/{id}','WhatisSipController@update')->name('update.what.is.sip');
Route::delete('/whai-is-sip-delete/{id}','WhatisSipController@delete')->name('delete.what.is.sip');

Route::get('/sip','SipController@index')->name('sips');
Route::get('/sip-add','SipController@create')->name('add.sip');
Route::post('/sip-save','SipController@store')->name('save.sip');
Route::get('/sip-edit/{id}','SipController@show')->name('edit.sip');
Route::put('/sip-update/{id}','SipController@update')->name('update.sip');
Route::delete('/sip-delete/{id}','SipController@delete')->name('delete.sip');

Route::get('/key-features','KeyFeaturesController@index')->name('key.features');
Route::get('/key-features-add','KeyFeaturesController@create')->name('add.key.features');
Route::post('/key-features-save','KeyFeaturesController@store')->name('save.key.features');
Route::get('/key-features-edit/{id}','KeyFeaturesController@show')->name('edit.key.features');
Route::put('/key-features-update/{id}','KeyFeaturesController@update')->name('update.key.features');
Route::delete('/key-features-delete/{id}','KeyFeaturesController@delete')->name('delete.key.features');

//Documents
Route::get('/document-tab','DocumentTabController@index')->name('document.tab');
Route::get('/document-tab-add','DocumentTabController@create')->name('add.document.tab');
Route::post('/document-tab-save','DocumentTabController@store')->name('save.document.tab');
Route::get('/document-tab-edit/{id}','DocumentTabController@show')->name('edit.document.tab');
Route::put('/document-tab-update/{id}','DocumentTabController@update')->name('update.document.tab');
Route::delete('/document-tab-delete/{id}','DocumentTabController@delete')->name('delete.document.tab');

Route::get('/document','DocumentsController@index')->name('documents');
Route::get('/document-add','DocumentsController@create')->name('add.documents');
Route::post('/document-save','DocumentsController@store')->name('save.documents');
Route::get('/document-edit/{id}','DocumentsController@show')->name('edit.documents');
Route::put('/document-update/{id}','DocumentsController@update')->name('update.documents');
Route::delete('/document-delete/{id}','DocumentsController@delete')->name('delete.documents');

//Knowledge Center

Route::get('/question','QuestionController@index')->name('questions');
Route::get('/question-add','QuestionController@create')->name('add.questions');
Route::post('/question-save','QuestionController@store')->name('save.questions');
Route::get('/question-edit/{id}','QuestionController@show')->name('edit.questions');
Route::put('/question-update/{id}','QuestionController@update')->name('update.questions');
Route::delete('/question-delete/{id}','QuestionController@delete')->name('delete.questions');

Route::get('/video','VideoController@index')->name('videos');
Route::get('/video-add','VideoController@create')->name('add.videos');
Route::post('/video-save','VideoController@store')->name('save.videos');
Route::get('/video-edit/{id}','VideoController@show')->name('edit.videos');
Route::put('/video-update/{id}','VideoController@update')->name('update.videos');
Route::delete('/video-delete/{id}','VideoController@delete')->name('delete.videos');




});




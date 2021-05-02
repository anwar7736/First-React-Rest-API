<?php

$router->get('/', function(){
    return "<h1>Hello, World!</h1>";
});
$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReview', ['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactSend', ['middleware'=>'auth','uses'=>'ContactController@onContactSend']);
$router->get('/CourseHome', ['middleware'=>'auth','uses'=>'CourseController@onSelectFour']);
$router->get('/CourseAll', ['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);

$router->get('/CourseDetails/{CourseID}', ['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);

$router->get('/Footer', ['middleware'=>'auth','uses'=>'FooterController@onSelect']);
$router->get('/Information', ['middleware'=>'auth','uses'=>'InformationController@onSelect']);
$router->get('/Services', ['middleware'=>'auth','uses'=>'ServiceController@onSelect']);
$router->get('/Project3', ['middleware'=>'auth','uses'=>'ProjectController@onSelect3']);
$router->get('/ProjectAll', ['middleware'=>'auth','uses'=>'ProjectController@onSelectAll']);
$router->get('/ProjectDetails/{projectID}', ['middleware'=>'auth','uses'=>'ProjectController@onSelectDetail']);
$router->get('/VideoHome', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/TotalProjectClient', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProjectClient']);
$router->get('/TechDesc', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTechDesc']);
$router->get('/HomeTopTitle', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectHomeTitle']);

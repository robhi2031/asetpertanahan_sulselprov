"use strict";
/*************************
    ANGULAR ROUTER APP
*************************/
var routerApp = angular.module('routerApp', ['ui.router']);
routerApp.config(function ($locationProvider, $stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/');
	$stateProvider
	//Beranda
	.state('/', {
		url: '/',
		templateUrl: 'home',
		onEnter: function ($window, $http) {
            $('#kt_app_toolbar').show(), $('#kt_app_wrapper .app-container.container-fluid').addClass('container-xxl').removeClass('container-fluid');
            KTApp.createTinySliders();
		}
	})
	.state('home', {
        url: '/home',
		templateUrl: 'home',
		onEnter: function ($window, $http) {
            $('#kt_app_toolbar').show(), $('#kt_app_wrapper .app-container.container-fluid').addClass('container-xxl').removeClass('container-fluid');
            KTApp.createTinySliders();
        }
	})
    //Map Aset
    .state('/map_aset', {
        url: '/map_aset',
        templateUrl: 'map_aset',
        onEnter: function ($window, $http) {
            $('#kt_app_toolbar').hide(), $('#kt_app_wrapper .app-container.container-xxl').addClass('container-fluid').removeClass('container-xxl');
        }
    })
	.state('404', {
		url: '/404',
		template: '404!!! page is missing'
	});
    //html5
    // $locationProvider.html5Mode(true);
    // $locationProvider.hashPrefix('');
});
/*************************
    ANGULAR ROUTER APP END
*************************/
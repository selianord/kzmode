(function(){
    const rootModuleConfigurations = angular.module("kuzamode",["ngRoute"]);
    rootModuleConfigurations.config(function($routeProvider,$locationProvider){
        $locationProvider.hashPrefix("");
    })
}())
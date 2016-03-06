'use strict';

/* Services */
mainMod.factory('phonesFactory', ["$http","$q",
    function($http, $q) {
        var factory =  {
            phones: [],
            phonesFinded: [],
            getPosts: function() {
                // ==== Instanciation d'une promesse pour le traitement asynchrone. ====
                var defered = $q.defer();
                $http.get('phones/phones.json').then(function(data) {
                    // --- On save les données dans la factory pour limiter les calls futures ---
                    console.log('hydratation de factoryphone');
                    factory.phones = data;
                    defered.resolve(factory.phones);
                    //defered.resolve('toot');
                }, function(){
                    defered.reject('Probleme de connexion au WS');
                });

                return defered.promise;
            },
            getTest: function() {console.log('factoryok')},
            getPost: function(id) {
                var allPhones = factory.getPosts();
                //var allPhones = factory.phones;
                var thePhone = {};
                // --- Gestion des données une fois la promesses + data faites. ---
                var touslesposts = [];
                    console.log('=====D===');
                    console.log(factory.phones);
                    console.log('=====F====');
                    angular.forEach(factory.phones, function(phone, key) {
                        console.log('search phone comparaison id : ',id,' avec phone.id: '+phone.id);
                        if (id == phone.id) {
                            console.log('phone found');
                            thePhone = phone;
                        }
                    });

                return allPhones.data;
            }
        };

        return factory;
    }
])


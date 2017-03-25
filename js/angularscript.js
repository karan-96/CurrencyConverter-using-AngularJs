
var myApp = angular.module('myApp', []);
myApp.controller('MyCtrl', function ($scope, $http) {
    $scope.foo = [];
	
    //$scope.foo = "yahoo";
    $http.get('http://api.fixer.io/latest').
    success(function (data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
        $scope.foo = data.rates;
		
		
    }).
    error(function (data, status, headers, config) {
		$scope.foo="error";
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });
	
	$scope.names = [
      'AUD-Australian Dollar',
      'BGN-Bulgarian Lev',
      'BRL-Brazilian Real',
      'CAD-Canadian Dollar',
      'CHF-Swiss Franc',
      'CNY-Chinese Yuan',
      'CZK-Czech Republic Koruna',
      'DKK-Danish Krone',
      'GBP-British Pound',
      'HKD-Hong Kong Dollar',
      'HRK-Croatian Kuna',
      'HUF-Hungarian Forint',
      'IDR-Indonesian Rupiah',
      'ILS-Israeli New Sheqel',
      'INR-Indian Rupee',
      'JPY-Japanese Yen',
      'KRW-South Korean Won',
      'MXN-Mexican Peso',
      'MYR-Malaysian Ringgit',
      'NOK-Norwegian Krone',
      'NZD-New Zealand Dollar',
      'PHP-Philippine Peso',
      'PLN-Polish Zloty',
      'RON-Romanian Leu',
      'RUB-Russian Ruble',
      'SEK-Swedish Krona',
      'SGD-Singapore Dollar',
      'THB-Thai Baht',
      'TRY-Turkish Lira',
      'USD-US Dollar',
      'ZAR-South African Rand'
      
    ];
	   
	
	 
});

//]]>  

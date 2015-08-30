var app = angular.module("FazdApp", []);


app.controller("BookController", function($http, $scope, $rootScope) {
	$rootScope.currentBook = {};

	$http.get('/book').success(function(data) {
		$scope.books = data;
	});

	// $scope.books = [
	// 	{ "bookName": "test book",
	// 		"bookAuthor": "test author"
	// 	},
	// 	{ "bookName": "another test book",
	// 		"bookAuthor": "another test author"
	// 	}
	// ];

	$scope.setBook = function(bookId) {
		$rootScope.currentBook = $scope.books[bookId];
	};
});

app.controller("RecipeController", function($http, $scope, $rootScope) {
});

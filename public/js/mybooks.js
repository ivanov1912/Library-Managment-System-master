/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/mybooks/mybooks.js":
/*!*****************************************!*\
  !*** ./resources/js/mybooks/mybooks.js ***!
  \*****************************************/
/***/ (() => {

eval("$(function ($) {\n  $(document).on(\"change\", \"#flag_id\", function (e) {\n    var value = $(this).val();\n    var dataId = $.parseJSON($(this).attr('data-id'));\n    $.ajax({\n      method: \"post\",\n      url: STATUSFAVOUTITE.replace(\":id\", dataId),\n      data: {\n        'flag_id': value\n      },\n      success: function success(data) {\n        toastr.success('Successfully updated book status!');\n      },\n      error: function error(errors) {\n        toastr.danger('Unsuccessfully updated book status!');\n      }\n    });\n  });\n  $(\"#mybooks\").DataTable();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbXlib29rcy9teWJvb2tzLmpzP2FkODgiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50Iiwib24iLCJlIiwidmFsdWUiLCJ2YWwiLCJkYXRhSWQiLCJwYXJzZUpTT04iLCJhdHRyIiwiYWpheCIsIm1ldGhvZCIsInVybCIsIlNUQVRVU0ZBVk9VVElURSIsInJlcGxhY2UiLCJkYXRhIiwic3VjY2VzcyIsInRvYXN0ciIsImVycm9yIiwiZXJyb3JzIiwiZGFuZ2VyIiwiRGF0YVRhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNYQSxFQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsUUFBZixFQUF5QixVQUF6QixFQUFxQyxVQUFVQyxDQUFWLEVBQWE7QUFDOUMsUUFBSUMsS0FBSyxHQUFHSixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLEdBQVIsRUFBWjtBQUNBLFFBQUlDLE1BQU0sR0FBR04sQ0FBQyxDQUFDTyxTQUFGLENBQVlQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVEsSUFBUixDQUFhLFNBQWIsQ0FBWixDQUFiO0FBQ0FSLElBQUFBLENBQUMsQ0FBQ1MsSUFBRixDQUFPO0FBQ0hDLE1BQUFBLE1BQU0sRUFBRSxNQURMO0FBRUhDLE1BQUFBLEdBQUcsRUFBRUMsZUFBZSxDQUFDQyxPQUFoQixDQUF3QixLQUF4QixFQUErQlAsTUFBL0IsQ0FGRjtBQUdIUSxNQUFBQSxJQUFJLEVBQUU7QUFBRSxtQkFBV1Y7QUFBYixPQUhIO0FBSUhXLE1BQUFBLE9BQU8sRUFBRSxpQkFBVUQsSUFBVixFQUFnQjtBQUNyQkUsUUFBQUEsTUFBTSxDQUFDRCxPQUFQLENBQWUsbUNBQWY7QUFDSCxPQU5FO0FBT0hFLE1BQUFBLEtBQUssRUFBRSxlQUFVQyxNQUFWLEVBQWtCO0FBQ3JCRixRQUFBQSxNQUFNLENBQUNHLE1BQVAsQ0FBYyxxQ0FBZDtBQUNIO0FBVEUsS0FBUDtBQVdILEdBZEQ7QUFpQkFuQixFQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWNvQixTQUFkO0FBQ0gsQ0FuQkEsQ0FBRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24gKCQpIHtcbiAgICAkKGRvY3VtZW50KS5vbihcImNoYW5nZVwiLCBcIiNmbGFnX2lkXCIsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGxldCB2YWx1ZSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIGxldCBkYXRhSWQgPSAkLnBhcnNlSlNPTigkKHRoaXMpLmF0dHIoJ2RhdGEtaWQnKSk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICBtZXRob2Q6IFwicG9zdFwiLFxuICAgICAgICAgICAgdXJsOiBTVEFUVVNGQVZPVVRJVEUucmVwbGFjZShcIjppZFwiLCBkYXRhSWQpLFxuICAgICAgICAgICAgZGF0YTogeyAnZmxhZ19pZCc6IHZhbHVlIH0sXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSkge1xuICAgICAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdTdWNjZXNzZnVsbHkgdXBkYXRlZCBib29rIHN0YXR1cyEnKVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoZXJyb3JzKSB7XG4gICAgICAgICAgICAgICAgdG9hc3RyLmRhbmdlcignVW5zdWNjZXNzZnVsbHkgdXBkYXRlZCBib29rIHN0YXR1cyEnKVxuICAgICAgICAgICAgfSxcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cblxuICAgICQoXCIjbXlib29rc1wiKS5EYXRhVGFibGUoKTtcbn0pO1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9teWJvb2tzL215Ym9va3MuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/mybooks/mybooks.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/mybooks/mybooks.js"]();
/******/ 	
/******/ })()
;
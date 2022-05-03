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

/***/ "./resources/js/sidebar.js":
/*!*********************************!*\
  !*** ./resources/js/sidebar.js ***!
  \*********************************/
/***/ (() => {

eval("$(function () {\n  $(document).on(\"click\", \".nav-link\", function () {\n    $(\".nav-link\").removeClass(\"active\");\n    $(this).addClass(\"active\");\n  });\n  $(document).on('click', function (e) {\n    if ($(e.target).hasClass(\"clicking\") && $('body').hasClass(\"sidebar-collapse\")) {\n      $(\".user-panel .info\").addClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-2 p-0 ml-4\").addClass(\"image col-md-7 p-0 ml-3\");\n      $(\".brand-link\").addClass(\"d-none\");\n    } else {\n      $(\".user-panel .info\").removeClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-7 p-0 ml-3\").addClass(\"image col-md-2 p-0 ml-4\");\n      $(\".brand-link\").removeClass(\"d-none\");\n    }\n  });\n  $(\"aside\").hover(function () {\n    if ($('body').hasClass(\"sidebar-collapse\")) {\n      $(\".brand-link\").addClass(\"d-none\");\n      $(\".user-panel\").addClass(\"d-none\");\n    }\n  }, function () {\n    $(\".user-panel\").removeClass('d-none').addClass(\"d-block\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcz82NzEwIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsImUiLCJ0YXJnZXQiLCJoYXNDbGFzcyIsImhvdmVyIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVk7QUFDVkEsRUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLE9BQWYsRUFBd0IsV0FBeEIsRUFBcUMsWUFBWTtBQUM3Q0YsSUFBQUEsQ0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlRyxXQUFmLENBQTJCLFFBQTNCO0FBQ0FILElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUksUUFBUixDQUFpQixRQUFqQjtBQUNILEdBSEQ7QUFJQUosRUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLE9BQWYsRUFBdUIsVUFBVUcsQ0FBVixFQUFhO0FBQ2hDLFFBQUdMLENBQUMsQ0FBQ0ssQ0FBQyxDQUFDQyxNQUFILENBQUQsQ0FBWUMsUUFBWixDQUFxQixVQUFyQixLQUFvQ1AsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVTyxRQUFWLENBQW1CLGtCQUFuQixDQUF2QyxFQUErRTtBQUMzRVAsTUFBQUEsQ0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJJLFFBQXZCLENBQWdDLFFBQWhDO0FBQ0FKLE1BQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQyx5QkFBcEMsRUFBK0RDLFFBQS9ELENBQXdFLHlCQUF4RTtBQUNBSixNQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCSSxRQUFqQixDQUEwQixRQUExQjtBQUNILEtBSkQsTUFJSztBQUNESixNQUFBQSxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkcsV0FBdkIsQ0FBbUMsUUFBbkM7QUFDQUgsTUFBQUEsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JHLFdBQXhCLENBQW9DLHlCQUFwQyxFQUErREMsUUFBL0QsQ0FBd0UseUJBQXhFO0FBQ0FKLE1BQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJHLFdBQWpCLENBQTZCLFFBQTdCO0FBQ0g7QUFDSixHQVZEO0FBWUFILEVBQUFBLENBQUMsQ0FBQyxPQUFELENBQUQsQ0FBV1EsS0FBWCxDQUFpQixZQUFXO0FBQ3hCLFFBQUdSLENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVU8sUUFBVixDQUFtQixrQkFBbkIsQ0FBSCxFQUEyQztBQUMzQ1AsTUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkksUUFBakIsQ0FBMEIsUUFBMUI7QUFDQUosTUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkksUUFBakIsQ0FBMEIsUUFBMUI7QUFDQztBQUNKLEdBTEQsRUFLRyxZQUFXO0FBQ1ZKLElBQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJHLFdBQWpCLENBQTZCLFFBQTdCLEVBQXVDQyxRQUF2QyxDQUFnRCxTQUFoRDtBQUNILEdBUEQ7QUFTSCxDQTFCQSxDQUFEIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbiAoKSB7XG4gICAgJChkb2N1bWVudCkub24oXCJjbGlja1wiLCBcIi5uYXYtbGlua1wiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoXCIubmF2LWxpbmtcIikucmVtb3ZlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICQodGhpcykuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgfSk7XG4gICAgJChkb2N1bWVudCkub24oJ2NsaWNrJyxmdW5jdGlvbiAoZSkge1xuICAgICAgICBpZigkKGUudGFyZ2V0KS5oYXNDbGFzcyhcImNsaWNraW5nXCIpICYmICQoJ2JvZHknKS5oYXNDbGFzcyhcInNpZGViYXItY29sbGFwc2VcIikgKXtcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW5mb1wiKS5hZGRDbGFzcyhcImQtbm9uZVwiKTtcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW1hZ2VcIikucmVtb3ZlQ2xhc3MoXCJpbWFnZSBjb2wtbWQtMiBwLTAgbWwtNFwiKS5hZGRDbGFzcyhcImltYWdlIGNvbC1tZC03IHAtMCBtbC0zXCIpO1xuICAgICAgICAgICAgJChcIi5icmFuZC1saW5rXCIpLmFkZENsYXNzKFwiZC1ub25lXCIpO1xuICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW5mb1wiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTtcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW1hZ2VcIikucmVtb3ZlQ2xhc3MoXCJpbWFnZSBjb2wtbWQtNyBwLTAgbWwtM1wiKS5hZGRDbGFzcyhcImltYWdlIGNvbC1tZC0yIHAtMCBtbC00XCIpO1xuICAgICAgICAgICAgJChcIi5icmFuZC1saW5rXCIpLnJlbW92ZUNsYXNzKFwiZC1ub25lXCIpO1xuICAgICAgICB9XG4gICAgfSk7ICBcbiAgICBcbiAgICAkKFwiYXNpZGVcIikuaG92ZXIoZnVuY3Rpb24oKSB7XG4gICAgICAgIGlmKCQoJ2JvZHknKS5oYXNDbGFzcyhcInNpZGViYXItY29sbGFwc2VcIikpIHtcbiAgICAgICAgJChcIi5icmFuZC1saW5rXCIpLmFkZENsYXNzKFwiZC1ub25lXCIpO1xuICAgICAgICAkKFwiLnVzZXItcGFuZWxcIikuYWRkQ2xhc3MoXCJkLW5vbmVcIik7XG4gICAgICAgIH1cbiAgICB9LCBmdW5jdGlvbigpIHtcbiAgICAgICAgJChcIi51c2VyLXBhbmVsXCIpLnJlbW92ZUNsYXNzKCdkLW5vbmUnKS5hZGRDbGFzcyhcImQtYmxvY2tcIik7XG4gICAgfSk7XG4gICAgXG59KTtcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/sidebar.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/sidebar.js"]();
/******/ 	
/******/ })()
;
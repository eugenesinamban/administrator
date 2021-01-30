/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /app/resources/js/app.js: Unexpected token (24:2)\n\n\u001b[0m \u001b[90m 22 | \u001b[39m\u001b[90m// Vue.component('example-component', require('./components/ExampleComponent.vue').default);\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 23 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 24 | \u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mUpdated\u001b[39m upstream\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m  \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 25 | \u001b[39m\u001b[90m// //  includes\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 26 | \u001b[39m\u001b[90m// Vue.component('like-button', require('./components/include/like/LikeButton.vue').default);\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 27 | \u001b[39m\u001b[90m// Vue.component('likes', require('./components/include/like/Likes.vue').default);\u001b[39m\u001b[0m\n    at Parser._raise (/app/node_modules/@babel/parser/lib/index.js:748:17)\n    at Parser.raiseWithData (/app/node_modules/@babel/parser/lib/index.js:741:17)\n    at Parser.raise (/app/node_modules/@babel/parser/lib/index.js:735:17)\n    at Parser.unexpected (/app/node_modules/@babel/parser/lib/index.js:9101:16)\n    at Parser.parseExprAtom (/app/node_modules/@babel/parser/lib/index.js:10575:20)\n    at Parser.parseExprSubscripts (/app/node_modules/@babel/parser/lib/index.js:10150:23)\n    at Parser.parseUpdate (/app/node_modules/@babel/parser/lib/index.js:10130:21)\n    at Parser.parseMaybeUnary (/app/node_modules/@babel/parser/lib/index.js:10119:17)\n    at Parser.parseExprOpBaseRightExpr (/app/node_modules/@babel/parser/lib/index.js:10080:34)\n    at Parser.parseExprOpRightExpr (/app/node_modules/@babel/parser/lib/index.js:10073:21)\n    at Parser.parseExprOp (/app/node_modules/@babel/parser/lib/index.js:10039:27)\n    at Parser.parseExprOps (/app/node_modules/@babel/parser/lib/index.js:9995:17)\n    at Parser.parseMaybeConditional (/app/node_modules/@babel/parser/lib/index.js:9963:23)\n    at Parser.parseMaybeAssign (/app/node_modules/@babel/parser/lib/index.js:9926:21)\n    at Parser.parseExpressionBase (/app/node_modules/@babel/parser/lib/index.js:9871:23)\n    at allowInAnd (/app/node_modules/@babel/parser/lib/index.js:9865:39)\n    at Parser.allowInAnd (/app/node_modules/@babel/parser/lib/index.js:11541:16)\n    at Parser.parseExpression (/app/node_modules/@babel/parser/lib/index.js:9865:17)\n    at Parser.parseStatementContent (/app/node_modules/@babel/parser/lib/index.js:11807:23)\n    at Parser.parseStatement (/app/node_modules/@babel/parser/lib/index.js:11676:17)\n    at Parser.parseBlockOrModuleBlockBody (/app/node_modules/@babel/parser/lib/index.js:12258:25)\n    at Parser.parseBlockBody (/app/node_modules/@babel/parser/lib/index.js:12249:10)\n    at Parser.parseTopLevel (/app/node_modules/@babel/parser/lib/index.js:11607:10)\n    at Parser.parse (/app/node_modules/@babel/parser/lib/index.js:13415:10)\n    at parse (/app/node_modules/@babel/parser/lib/index.js:13468:38)\n    at parser (/app/node_modules/@babel/core/lib/parser/index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/app/node_modules/@babel/core/lib/transformation/normalize-file.js:99:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/app/node_modules/@babel/core/lib/transformation/index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (/app/node_modules/@babel/core/lib/transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (/app/node_modules/gensync/index.js:261:32)\n    at gen.next (/app/node_modules/gensync/index.js:273:13)\n    at async.call.value (/app/node_modules/gensync/index.js:223:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /app/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /app/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");





/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// Ingredient form

var addIngredientLink = document.createElement('button');
addIngredientLink.classList.add('add_item_link"');
addIngredientLink.href = '#';
addIngredientLink.className = "btn btn-dark mb-3";
addIngredientLink.innerText = 'Add a new ingredient to your recipe';
addIngredientLink.dataset.collectionHolderClass = 'ingredients';
var addIngredientFormDeleteLink = function addIngredientFormDeleteLink(item) {
  var removeFormButton = document.createElement("button");
  removeFormButton.innerText = "delete";
  removeFormButton.className = 'btn btn-outline-danger';
  item.append(removeFormButton);
  removeFormButton.addEventListener("click", function (e) {
    e.preventDefault();
    item.remove();
  });
};
var liIngredient = document.createElement('li').append(addIngredientLink);
document.querySelectorAll('ul.ingredients li').forEach(function (ingredient) {
  return addIngredientFormDeleteLink(ingredient);
});
var collectionHolderIngredient = document.querySelector('ul.ingredients');
try {
  collectionHolderIngredient.appendChild(addIngredientLink) == null;
} catch (e) {
  null;
}
var addFormToCollectionIngredient = function addFormToCollectionIngredient(e) {
  var collectionHolderIngredient = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
  e.preventDefault();
  var item = document.createElement('li');
  item.innerHTML = collectionHolderIngredient.dataset.prototype.replace(/__name__/g, collectionHolderIngredient.dataset.index);
  collectionHolderIngredient.appendChild(item);
  addIngredientFormDeleteLink(item);
  collectionHolderIngredient.dataset.index++;
};
addIngredientLink.addEventListener("click", addFormToCollectionIngredient);

// Description Form

var addDescriptionLink = document.createElement('button');
addDescriptionLink.classList.add('add_item_link"');
addDescriptionLink.href = '#';
addDescriptionLink.className = "btn btn-dark mb-3";
addDescriptionLink.innerText = 'Add a new step to your recipe';
addDescriptionLink.dataset.collectionHolderClass = 'descriptions';
var addDescriptionsFormDeleteLink = function addDescriptionsFormDeleteLink(item) {
  var removeFormButton = document.createElement("button");
  removeFormButton.innerText = "delete";
  removeFormButton.className = 'btn btn-outline-danger';
  item.append(removeFormButton);
  removeFormButton.addEventListener("click", function (e) {
    e.preventDefault();
    item.remove();
  });
};
document.querySelectorAll('ol.descriptions li').forEach(function (description) {
  return addDescriptionsFormDeleteLink(description);
});
var collectionHolderDescription = document.querySelector('ol.descriptions');
try {
  collectionHolderDescription.appendChild(addDescriptionLink);
} catch (e) {
  null;
}
var addFormToCollectionDescription = function addFormToCollectionDescription(e) {
  e.preventDefault();
  var collectionHolderDescription = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
  var item = document.createElement('li');
  item.innerHTML = collectionHolderDescription.dataset.prototype.replace(/__name__/g, collectionHolderDescription.dataset.index);
  collectionHolderDescription.appendChild(item);
  addDescriptionsFormDeleteLink(item);
  collectionHolderDescription.dataset.index++;
};
addDescriptionLink.addEventListener("click", addFormToCollectionDescription);

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_obj-fc4b46"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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LGFBQWEsQ0FBQyxHQUFHLEdBQUdSLENBQUMsQ0FBQ1csYUFBYSxDQUFDbEIsT0FBTyxDQUFDQyxxQkFBcUIsQ0FBQztFQUUvRyxJQUFNRSxJQUFJLEdBQUdWLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLElBQUksQ0FBQztFQUV6Q1MsSUFBSSxDQUFDZ0IsU0FBUyxHQUFHTywyQkFBMkIsQ0FDdkMxQixPQUFPLENBQ1BvQixTQUFTLENBQ1RDLE9BQU8sQ0FDSixXQUFXLEVBQ1hLLDJCQUEyQixDQUFDMUIsT0FBTyxDQUFDc0IsS0FBSyxDQUM1QztFQUVMSSwyQkFBMkIsQ0FBQ1YsV0FBVyxDQUFDYixJQUFJLENBQUM7RUFDN0NxQiw2QkFBNkIsQ0FBQ3JCLElBQUksQ0FBQztFQUVuQ3VCLDJCQUEyQixDQUFDMUIsT0FBTyxDQUFDc0IsS0FBSyxFQUFFO0FBQy9DLENBQUM7QUFFREMsa0JBQWtCLENBQUNqQixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUVxQiw4QkFBOEIsQ0FBQzs7Ozs7Ozs7Ozs7QUNoSTVFIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxuICpcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXG4gKi9cblxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcblxuXG4vLyBJbmdyZWRpZW50IGZvcm1cblxudmFyIGFkZEluZ3JlZGllbnRMaW5rID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5hZGRJbmdyZWRpZW50TGluay5jbGFzc0xpc3QuYWRkKCdhZGRfaXRlbV9saW5rXCInKTtcbmFkZEluZ3JlZGllbnRMaW5rLmhyZWY9JyMnO1xuYWRkSW5ncmVkaWVudExpbmsuY2xhc3NOYW1lID0gXCJidG4gYnRuLWRhcmsgbWItM1wiO1xuYWRkSW5ncmVkaWVudExpbmsuaW5uZXJUZXh0PSdBZGQgYSBuZXcgaW5ncmVkaWVudCB0byB5b3VyIHJlY2lwZSc7XG5hZGRJbmdyZWRpZW50TGluay5kYXRhc2V0LmNvbGxlY3Rpb25Ib2xkZXJDbGFzcz0naW5ncmVkaWVudHMnO1xuXG5jb25zdCBhZGRJbmdyZWRpZW50Rm9ybURlbGV0ZUxpbmsgPSAoaXRlbSkgPT4ge1xuICAgIGNvbnN0IHJlbW92ZUZvcm1CdXR0b24gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiYnV0dG9uXCIpO1xuICAgIHJlbW92ZUZvcm1CdXR0b24uaW5uZXJUZXh0ID0gXCJkZWxldGVcIjtcbiAgICByZW1vdmVGb3JtQnV0dG9uLmNsYXNzTmFtZSA9ICdidG4gYnRuLW91dGxpbmUtZGFuZ2VyJ1xuXG4gICAgaXRlbS5hcHBlbmQocmVtb3ZlRm9ybUJ1dHRvbik7XG5cbiAgICByZW1vdmVGb3JtQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZSkgPT4ge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGl0ZW0ucmVtb3ZlKCk7XG4gICAgfSlcbn1cblxuXG5cbmNvbnN0IGxpSW5ncmVkaWVudCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2xpJykuYXBwZW5kKGFkZEluZ3JlZGllbnRMaW5rKTtcblxuZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgndWwuaW5ncmVkaWVudHMgbGknKS5mb3JFYWNoKChpbmdyZWRpZW50KSA9PiBhZGRJbmdyZWRpZW50Rm9ybURlbGV0ZUxpbmsoaW5ncmVkaWVudCkpO1xuXG5jb25zdCBjb2xsZWN0aW9uSG9sZGVySW5ncmVkaWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ3VsLmluZ3JlZGllbnRzJyk7XG5cbnRyeSB7XG4gICAgY29sbGVjdGlvbkhvbGRlckluZ3JlZGllbnQuYXBwZW5kQ2hpbGQoYWRkSW5ncmVkaWVudExpbmspID09IG51bGw7XG59IGNhdGNoIChlKSB7XG4gICAgbnVsbFxufVxuXG5cblxuXG5cblxuY29uc3QgYWRkRm9ybVRvQ29sbGVjdGlvbkluZ3JlZGllbnQgPSAoZSkgPT4ge1xuICAgIGNvbnN0IGNvbGxlY3Rpb25Ib2xkZXJJbmdyZWRpZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLicgKyBlLmN1cnJlbnRUYXJnZXQuZGF0YXNldC5jb2xsZWN0aW9uSG9sZGVyQ2xhc3MpO1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICBjb25zdCBpdGVtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnbGknKTtcblxuICAgIGl0ZW0uaW5uZXJIVE1MID0gY29sbGVjdGlvbkhvbGRlckluZ3JlZGllbnRcbiAgICAgICAgLmRhdGFzZXRcbiAgICAgICAgLnByb3RvdHlwZVxuICAgICAgICAucmVwbGFjZShcbiAgICAgICAgICAgIC9fX25hbWVfXy9nLFxuICAgICAgICAgICAgY29sbGVjdGlvbkhvbGRlckluZ3JlZGllbnQuZGF0YXNldC5pbmRleFxuICAgICAgICApO1xuXG4gICAgY29sbGVjdGlvbkhvbGRlckluZ3JlZGllbnQuYXBwZW5kQ2hpbGQoaXRlbSk7XG5cbiAgICBhZGRJbmdyZWRpZW50Rm9ybURlbGV0ZUxpbmsoaXRlbSk7XG5cbiAgICBjb2xsZWN0aW9uSG9sZGVySW5ncmVkaWVudC5kYXRhc2V0LmluZGV4Kys7XG59XG5cbmFkZEluZ3JlZGllbnRMaW5rLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBhZGRGb3JtVG9Db2xsZWN0aW9uSW5ncmVkaWVudClcblxuLy8gRGVzY3JpcHRpb24gRm9ybVxuXG52YXIgYWRkRGVzY3JpcHRpb25MaW5rID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5hZGREZXNjcmlwdGlvbkxpbmsuY2xhc3NMaXN0LmFkZCgnYWRkX2l0ZW1fbGlua1wiJyk7XG5hZGREZXNjcmlwdGlvbkxpbmsuaHJlZj0nIyc7XG5hZGREZXNjcmlwdGlvbkxpbmsuY2xhc3NOYW1lID0gXCJidG4gYnRuLWRhcmsgbWItM1wiO1xuYWRkRGVzY3JpcHRpb25MaW5rLmlubmVyVGV4dD0nQWRkIGEgbmV3IHN0ZXAgdG8geW91ciByZWNpcGUnO1xuYWRkRGVzY3JpcHRpb25MaW5rLmRhdGFzZXQuY29sbGVjdGlvbkhvbGRlckNsYXNzPSdkZXNjcmlwdGlvbnMnO1xuXG5jb25zdCBhZGREZXNjcmlwdGlvbnNGb3JtRGVsZXRlTGluayA9IChpdGVtKSA9PiB7XG4gICAgY29uc3QgcmVtb3ZlRm9ybUJ1dHRvbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJidXR0b25cIik7XG4gICAgcmVtb3ZlRm9ybUJ1dHRvbi5pbm5lclRleHQgPSBcImRlbGV0ZVwiO1xuICAgIHJlbW92ZUZvcm1CdXR0b24uY2xhc3NOYW1lID0gJ2J0biBidG4tb3V0bGluZS1kYW5nZXInXG5cbiAgICBpdGVtLmFwcGVuZChyZW1vdmVGb3JtQnV0dG9uKTtcblxuICAgIHJlbW92ZUZvcm1CdXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChlKSA9PiB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgaXRlbS5yZW1vdmUoKTtcbiAgICB9KVxufVxuXG5cblxuZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnb2wuZGVzY3JpcHRpb25zIGxpJykuZm9yRWFjaCgoZGVzY3JpcHRpb24pID0+IGFkZERlc2NyaXB0aW9uc0Zvcm1EZWxldGVMaW5rKGRlc2NyaXB0aW9uKSk7XG5cbmNvbnN0IGNvbGxlY3Rpb25Ib2xkZXJEZXNjcmlwdGlvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ29sLmRlc2NyaXB0aW9ucycpO1xudHJ5IHtcbiAgICBjb2xsZWN0aW9uSG9sZGVyRGVzY3JpcHRpb24uYXBwZW5kQ2hpbGQoYWRkRGVzY3JpcHRpb25MaW5rKTtcbn0gY2F0Y2ggKGUpIHtcbiAgICBudWxsXG59XG5cblxuY29uc3QgYWRkRm9ybVRvQ29sbGVjdGlvbkRlc2NyaXB0aW9uID0gKGUpID0+IHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgY29uc3QgY29sbGVjdGlvbkhvbGRlckRlc2NyaXB0aW9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLicgKyBlLmN1cnJlbnRUYXJnZXQuZGF0YXNldC5jb2xsZWN0aW9uSG9sZGVyQ2xhc3MpO1xuXG4gICAgY29uc3QgaXRlbSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2xpJyk7XG5cbiAgICBpdGVtLmlubmVySFRNTCA9IGNvbGxlY3Rpb25Ib2xkZXJEZXNjcmlwdGlvblxuICAgICAgICAuZGF0YXNldFxuICAgICAgICAucHJvdG90eXBlXG4gICAgICAgIC5yZXBsYWNlKFxuICAgICAgICAgICAgL19fbmFtZV9fL2csXG4gICAgICAgICAgICBjb2xsZWN0aW9uSG9sZGVyRGVzY3JpcHRpb24uZGF0YXNldC5pbmRleFxuICAgICAgICApO1xuXG4gICAgY29sbGVjdGlvbkhvbGRlckRlc2NyaXB0aW9uLmFwcGVuZENoaWxkKGl0ZW0pO1xuICAgIGFkZERlc2NyaXB0aW9uc0Zvcm1EZWxldGVMaW5rKGl0ZW0pO1xuXG4gICAgY29sbGVjdGlvbkhvbGRlckRlc2NyaXB0aW9uLmRhdGFzZXQuaW5kZXgrKztcbn1cblxuYWRkRGVzY3JpcHRpb25MaW5rLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBhZGRGb3JtVG9Db2xsZWN0aW9uRGVzY3JpcHRpb24pIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImFkZEluZ3JlZGllbnRMaW5rIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwiaHJlZiIsImNsYXNzTmFtZSIsImlubmVyVGV4dCIsImRhdGFzZXQiLCJjb2xsZWN0aW9uSG9sZGVyQ2xhc3MiLCJhZGRJbmdyZWRpZW50Rm9ybURlbGV0ZUxpbmsiLCJpdGVtIiwicmVtb3ZlRm9ybUJ1dHRvbiIsImFwcGVuZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJyZW1vdmUiLCJsaUluZ3JlZGllbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImluZ3JlZGllbnQiLCJjb2xsZWN0aW9uSG9sZGVySW5ncmVkaWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJhcHBlbmRDaGlsZCIsImFkZEZvcm1Ub0NvbGxlY3Rpb25JbmdyZWRpZW50IiwiY3VycmVudFRhcmdldCIsImlubmVySFRNTCIsInByb3RvdHlwZSIsInJlcGxhY2UiLCJpbmRleCIsImFkZERlc2NyaXB0aW9uTGluayIsImFkZERlc2NyaXB0aW9uc0Zvcm1EZWxldGVMaW5rIiwiZGVzY3JpcHRpb24iLCJjb2xsZWN0aW9uSG9sZGVyRGVzY3JpcHRpb24iLCJhZGRGb3JtVG9Db2xsZWN0aW9uRGVzY3JpcHRpb24iXSwic291cmNlUm9vdCI6IiJ9
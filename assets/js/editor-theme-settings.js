/**
 * Editor Theme Settings
 * 
 * Unminified ES6 source code available in editor-theme-settings.src.js
 * 
 * @package GT Drive
 */
!function(e){function t(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var n={};t.m=e,t.c=n,t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n(1);(0,wp.plugins.registerPlugin)("gt-theme-settings",{render:o.a})},function(e,t,n){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function i(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}var u=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),a=wp.element.Component,l=wp.compose.compose,p=wp.data.withSelect,c=function(e){function t(){return o(this,t),r(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return i(t,e),u(t,[{key:"componentDidUpdate",value:function(){var e=this.props,t=e.pageTemplate,n=e.postType;if(!n||"page"!==n.slug)return null;"templates/template-full-width.php"===t?(document.body.classList.add("gt-fullwidth-page-layout"),document.body.classList.remove("gt-page-title-hidden")):"templates/template-no-title.php"===t?(document.body.classList.add("gt-page-title-hidden"),document.body.classList.remove("gt-fullwidth-page-layout")):"templates/template-full-width-no-title.php"===t?(document.body.classList.add("gt-fullwidth-page-layout"),document.body.classList.add("gt-page-title-hidden")):(document.body.classList.remove("gt-fullwidth-page-layout"),document.body.classList.remove("gt-page-title-hidden"))}},{key:"render",value:function(){return null}}]),t}(a);t.a=l(p(function(e){var t=e("core/editor"),n=t.getEditedPostAttribute,o=e("core"),r=o.getPostType;return{pageTemplate:n("template"),postType:r(n("type"))}}))(c)}]);
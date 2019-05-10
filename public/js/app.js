webpackJsonp([1],[
/* 0 */,
/* 1 */
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */,
/* 39 */,
/* 40 */,
/* 41 */,
/* 42 */,
/* 43 */,
/* 44 */,
/* 45 */,
/* 46 */,
/* 47 */,
/* 48 */,
/* 49 */,
/* 50 */,
/* 51 */,
/* 52 */,
/* 53 */,
/* 54 */,
/* 55 */,
/* 56 */,
/* 57 */,
/* 58 */,
/* 59 */,
/* 60 */,
/* 61 */,
/* 62 */,
/* 63 */,
/* 64 */,
/* 65 */,
/* 66 */,
/* 67 */,
/* 68 */,
/* 69 */,
/* 70 */,
/* 71 */,
/* 72 */,
/* 73 */,
/* 74 */,
/* 75 */,
/* 76 */,
/* 77 */,
/* 78 */,
/* 79 */,
/* 80 */,
/* 81 */,
/* 82 */,
/* 83 */,
/* 84 */,
/* 85 */,
/* 86 */,
/* 87 */,
/* 88 */,
/* 89 */,
/* 90 */,
/* 91 */,
/* 92 */,
/* 93 */,
/* 94 */,
/* 95 */,
/* 96 */,
/* 97 */,
/* 98 */,
/* 99 */,
/* 100 */,
/* 101 */,
/* 102 */,
/* 103 */,
/* 104 */,
/* 105 */,
/* 106 */,
/* 107 */,
/* 108 */,
/* 109 */,
/* 110 */,
/* 111 */,
/* 112 */,
/* 113 */,
/* 114 */,
/* 115 */,
/* 116 */,
/* 117 */,
/* 118 */,
/* 119 */,
/* 120 */,
/* 121 */,
/* 122 */,
/* 123 */,
/* 124 */,
/* 125 */,
/* 126 */,
/* 127 */,
/* 128 */,
/* 129 */,
/* 130 */,
/* 131 */,
/* 132 */,
/* 133 */,
/* 134 */,
/* 135 */,
/* 136 */,
/* 137 */,
/* 138 */,
/* 139 */,
/* 140 */,
/* 141 */,
/* 142 */,
/* 143 */,
/* 144 */,
/* 145 */,
/* 146 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(147);
module.exports = __webpack_require__(234);


/***/ }),
/* 147 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(148);

window.Vue = __webpack_require__(17);
window.Vuex = __webpack_require__(168);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('post-as', __webpack_require__(169));
Vue.component('delete-button', __webpack_require__(172));
Vue.component('character-time', __webpack_require__(175));
Vue.component('online-status', __webpack_require__(178));
Vue.component('show-more', __webpack_require__(181));
Vue.component('switch-character', __webpack_require__(184));
Vue.component('subscribe-button', __webpack_require__(187));
Vue.component('unread-notifications', __webpack_require__(190));
Vue.component('post-history', __webpack_require__(193));
Vue.component('lock-button', __webpack_require__(196));
Vue.component('pin-button', __webpack_require__(199));
Vue.component('author-avatar', __webpack_require__(202));
Vue.component('author-icon', __webpack_require__(205));
Vue.component('character-filter', __webpack_require__(208));
Vue.component('occupation-claims', __webpack_require__(216));
Vue.component('faction-container', __webpack_require__(219));
Vue.component('faction-select', __webpack_require__(222));
Vue.component('category-edit', __webpack_require__(225));
Vue.component('forum-edit', __webpack_require__(228));
Vue.component('post-ic-time', __webpack_require__(231));

var store = new Vuex.Store({
  state: {
    faction: 0,
    origin_faction: 0
  },
  mutations: {
    updateFaction: function updateFaction(state, faction_id) {
      return state.faction = faction_id;
    },
    updateOriginFaction: function updateOriginFaction(state, faction_id) {
      return state.origin_faction = faction_id;
    }
  },
  getters: {
    faction: function faction(state) {
      return state.faction;
    },
    origin_faction: function origin_faction(state) {
      return state.origin_faction;
    }
  }
});

var app = new Vue({
  el: '#app',
  store: store
});

/*****
* CONFIGURATION
*/
//Main navigation
$.navigation = $('nav > ul.nav');

$.panelIconOpened = 'icon-arrow-up';
$.panelIconClosed = 'icon-arrow-down';

//Default colours
$.brandPrimary = '#20a8d8';
$.brandSuccess = '#4dbd74';
$.brandInfo = '#63c2de';
$.brandWarning = '#f8cb00';
$.brandDanger = '#f86c6b';

$.grayDark = '#2a2c36';
$.gray = '#55595c';
$.grayLight = '#818a91';
$.grayLighter = '#d1d4d7';
$.grayLightest = '#f8f9fa';

'use strict';

/****
* MAIN NAVIGATION
*/

$(document).ready(function ($) {

  // Add class .active to current link
  $.navigation.find('a').each(function () {

    var cUrl = String(window.location).split('?')[0];

    if (cUrl.substr(cUrl.length - 1) == '#') {
      cUrl = cUrl.slice(0, -1);
    }

    if ($($(this))[0].href == cUrl) {
      $(this).addClass('active');

      $(this).parents('ul').add(this).each(function () {
        $(this).parent().addClass('open');
      });
    }
  });

  // Dropdown Menu
  $.navigation.on('click', 'a', function (e) {

    if ($.ajaxLoad) {
      e.preventDefault();
    }

    if ($(this).hasClass('nav-dropdown-toggle')) {
      $(this).parent().toggleClass('open');
      resizeBroadcast();
    }
  });

  function resizeBroadcast() {

    var timesRun = 0;
    var interval = setInterval(function () {
      timesRun += 1;
      if (timesRun === 5) {
        clearInterval(interval);
      }
      if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
        var evt = document.createEvent('UIEvents');
        evt.initUIEvent('resize', true, false, window, 0);
        window.dispatchEvent(evt);
      } else {
        window.dispatchEvent(new Event('resize'));
      }
    }, 62.5);
  }

  // strings because localStorage saves key pair value as string
  var closed = localStorage.getItem('mclosed') || "false";
  console.log(closed);

  if (closed === "true") {
    $('body').addClass('sidebar-minimized brand-minimized');
  }

  /* ---------- Main Menu Open/Close, Min/Full ---------- */
  $('.sidebar-toggler').click(function () {
    $('body').toggleClass('sidebar-hidden');
    resizeBroadcast();
  });

  $('.sidebar-minimizer').click(function () {
    $('body').toggleClass('sidebar-minimized');

    var close = $('body').hasClass('sidebar-minimized');
    localStorage.setItem('mclosed', close);

    resizeBroadcast();
  });

  $('.brand-minimizer').click(function () {
    $('body').toggleClass('brand-minimized');

    var close = $('body').hasClass('sidebar-minimized');
    localStorage.setItem('mclosed', close);
  });

  $('.aside-menu-toggler').click(function () {
    $('body').toggleClass('aside-menu-hidden');
    resizeBroadcast();
  });

  $('.mobile-sidebar-toggler').click(function () {
    $('body').toggleClass('sidebar-mobile-show');
    resizeBroadcast();
  });

  $('.sidebar-close').click(function () {
    $('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
  });

  /* ---------- Disable moving to top ---------- */
  $('a[href="#"][data-top!=true]').click(function (e) {
    e.preventDefault();
  });
});

/****
* CARDS ACTIONS
*/

$(document).on('click', '.card-actions a', function (e) {
  e.preventDefault();

  if ($(this).hasClass('btn-close')) {
    $(this).parent().parent().parent().fadeOut();
  } else if ($(this).hasClass('btn-minimize')) {
    var $target = $(this).parent().parent().next('.card-body');
    if (!$(this).hasClass('collapsed')) {
      $('i', $(this)).removeClass($.panelIconOpened).addClass($.panelIconClosed);
    } else {
      $('i', $(this)).removeClass($.panelIconClosed).addClass($.panelIconOpened);
    }
  } else if ($(this).hasClass('btn-setting')) {
    $('#myModal').modal('show');
  }
});

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function init(url) {

  /* ---------- Tooltip ---------- */
  $('[rel="tooltip"],[data-rel="tooltip"]').tooltip({ "placement": "bottom", delay: { show: 400, hide: 200 } });

  /* ---------- Popover ---------- */
  $('[rel="popover"],[data-rel="popover"],[data-toggle="popover"]').popover();
}

// Production steps of ECMA-262, Edition 6, 22.1.2.1
if (!Array.from) {
  Array.from = function () {
    var toStr = Object.prototype.toString;
    var isCallable = function isCallable(fn) {
      return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
    };
    var toInteger = function toInteger(value) {
      var number = Number(value);
      if (isNaN(number)) {
        return 0;
      }
      if (number === 0 || !isFinite(number)) {
        return number;
      }
      return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
    };
    var maxSafeInteger = Math.pow(2, 53) - 1;
    var toLength = function toLength(value) {
      var len = toInteger(value);
      return Math.min(Math.max(len, 0), maxSafeInteger);
    };

    // The length property of the from method is 1.
    return function from(arrayLike /*, mapFn, thisArg */) {
      // 1. Let C be the this value.
      var C = this;

      // 2. Let items be ToObject(arrayLike).
      var items = Object(arrayLike);

      // 3. ReturnIfAbrupt(items).
      if (arrayLike == null) {
        throw new TypeError('Array.from requires an array-like object - not null or undefined');
      }

      // 4. If mapfn is undefined, then let mapping be false.
      var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
      var T;
      if (typeof mapFn !== 'undefined') {
        // 5. else
        // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
        if (!isCallable(mapFn)) {
          throw new TypeError('Array.from: when provided, the second argument must be a function');
        }

        // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
        if (arguments.length > 2) {
          T = arguments[2];
        }
      }

      // 10. Let lenValue be Get(items, "length").
      // 11. Let len be ToLength(lenValue).
      var len = toLength(items.length);

      // 13. If IsConstructor(C) is true, then
      // 13. a. Let A be the result of calling the [[Construct]] internal method
      // of C with an argument list containing the single item len.
      // 14. a. Else, Let A be ArrayCreate(len).
      var A = isCallable(C) ? Object(new C(len)) : new Array(len);

      // 16. Let k be 0.
      var k = 0;
      // 17. Repeat, while k < len… (also steps a - h)
      var kValue;
      while (k < len) {
        kValue = items[k];
        if (mapFn) {
          A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
        } else {
          A[k] = kValue;
        }
        k += 1;
      }
      // 18. Let putStatus be Put(A, "length", len, true).
      A.length = len;
      // 20. Return A.
      return A;
    };
  }();
}

// https://tc39.github.io/ecma262/#sec-array.prototype.includes
if (!Array.prototype.includes) {
  Object.defineProperty(Array.prototype, 'includes', {
    value: function value(searchElement, fromIndex) {

      if (this == null) {
        throw new TypeError('"this" is null or not defined');
      }

      // 1. Let O be ? ToObject(this value).
      var o = Object(this);

      // 2. Let len be ? ToLength(? Get(O, "length")).
      var len = o.length >>> 0;

      // 3. If len is 0, return false.
      if (len === 0) {
        return false;
      }

      // 4. Let n be ? ToInteger(fromIndex).
      //    (If fromIndex is undefined, this step produces the value 0.)
      var n = fromIndex | 0;

      // 5. If n ≥ 0, then
      //  a. Let k be n.
      // 6. Else n < 0,
      //  a. Let k be len + n.
      //  b. If k < 0, let k be 0.
      var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

      function sameValueZero(x, y) {
        return x === y || typeof x === 'number' && typeof y === 'number' && isNaN(x) && isNaN(y);
      }

      // 7. Repeat, while k < len
      while (k < len) {
        // a. Let elementK be the result of ? Get(O, ! ToString(k)).
        // b. If SameValueZero(searchElement, elementK) is true, return true.
        if (sameValueZero(o[k], searchElement)) {
          return true;
        }
        // c. Increase k by 1.
        k++;
      }

      // 8. Return false
      return false;
    }
  });
}
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(5)))

/***/ }),
/* 148 */
/***/ (function(module, exports, __webpack_require__) {


window._ = __webpack_require__(9);

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.$ = window.jQuery = __webpack_require__(5);
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(11);

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });

/***/ }),
/* 149 */,
/* 150 */,
/* 151 */,
/* 152 */,
/* 153 */,
/* 154 */,
/* 155 */,
/* 156 */,
/* 157 */,
/* 158 */,
/* 159 */,
/* 160 */,
/* 161 */,
/* 162 */,
/* 163 */,
/* 164 */,
/* 165 */,
/* 166 */,
/* 167 */,
/* 168 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Store", function() { return Store; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "install", function() { return install; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mapState", function() { return mapState; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mapMutations", function() { return mapMutations; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mapGetters", function() { return mapGetters; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mapActions", function() { return mapActions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "createNamespacedHelpers", function() { return createNamespacedHelpers; });
/**
 * vuex v3.1.0
 * (c) 2019 Evan You
 * @license MIT
 */
function applyMixin (Vue) {
  var version = Number(Vue.version.split('.')[0]);

  if (version >= 2) {
    Vue.mixin({ beforeCreate: vuexInit });
  } else {
    // override init and inject vuex init procedure
    // for 1.x backwards compatibility.
    var _init = Vue.prototype._init;
    Vue.prototype._init = function (options) {
      if ( options === void 0 ) options = {};

      options.init = options.init
        ? [vuexInit].concat(options.init)
        : vuexInit;
      _init.call(this, options);
    };
  }

  /**
   * Vuex init hook, injected into each instances init hooks list.
   */

  function vuexInit () {
    var options = this.$options;
    // store injection
    if (options.store) {
      this.$store = typeof options.store === 'function'
        ? options.store()
        : options.store;
    } else if (options.parent && options.parent.$store) {
      this.$store = options.parent.$store;
    }
  }
}

var devtoolHook =
  typeof window !== 'undefined' &&
  window.__VUE_DEVTOOLS_GLOBAL_HOOK__;

function devtoolPlugin (store) {
  if (!devtoolHook) { return }

  store._devtoolHook = devtoolHook;

  devtoolHook.emit('vuex:init', store);

  devtoolHook.on('vuex:travel-to-state', function (targetState) {
    store.replaceState(targetState);
  });

  store.subscribe(function (mutation, state) {
    devtoolHook.emit('vuex:mutation', mutation, state);
  });
}

/**
 * Get the first item that pass the test
 * by second argument function
 *
 * @param {Array} list
 * @param {Function} f
 * @return {*}
 */

/**
 * forEach for object
 */
function forEachValue (obj, fn) {
  Object.keys(obj).forEach(function (key) { return fn(obj[key], key); });
}

function isObject (obj) {
  return obj !== null && typeof obj === 'object'
}

function isPromise (val) {
  return val && typeof val.then === 'function'
}

function assert (condition, msg) {
  if (!condition) { throw new Error(("[vuex] " + msg)) }
}

// Base data struct for store's module, package with some attribute and method
var Module = function Module (rawModule, runtime) {
  this.runtime = runtime;
  // Store some children item
  this._children = Object.create(null);
  // Store the origin module object which passed by programmer
  this._rawModule = rawModule;
  var rawState = rawModule.state;

  // Store the origin module's state
  this.state = (typeof rawState === 'function' ? rawState() : rawState) || {};
};

var prototypeAccessors = { namespaced: { configurable: true } };

prototypeAccessors.namespaced.get = function () {
  return !!this._rawModule.namespaced
};

Module.prototype.addChild = function addChild (key, module) {
  this._children[key] = module;
};

Module.prototype.removeChild = function removeChild (key) {
  delete this._children[key];
};

Module.prototype.getChild = function getChild (key) {
  return this._children[key]
};

Module.prototype.update = function update (rawModule) {
  this._rawModule.namespaced = rawModule.namespaced;
  if (rawModule.actions) {
    this._rawModule.actions = rawModule.actions;
  }
  if (rawModule.mutations) {
    this._rawModule.mutations = rawModule.mutations;
  }
  if (rawModule.getters) {
    this._rawModule.getters = rawModule.getters;
  }
};

Module.prototype.forEachChild = function forEachChild (fn) {
  forEachValue(this._children, fn);
};

Module.prototype.forEachGetter = function forEachGetter (fn) {
  if (this._rawModule.getters) {
    forEachValue(this._rawModule.getters, fn);
  }
};

Module.prototype.forEachAction = function forEachAction (fn) {
  if (this._rawModule.actions) {
    forEachValue(this._rawModule.actions, fn);
  }
};

Module.prototype.forEachMutation = function forEachMutation (fn) {
  if (this._rawModule.mutations) {
    forEachValue(this._rawModule.mutations, fn);
  }
};

Object.defineProperties( Module.prototype, prototypeAccessors );

var ModuleCollection = function ModuleCollection (rawRootModule) {
  // register root module (Vuex.Store options)
  this.register([], rawRootModule, false);
};

ModuleCollection.prototype.get = function get (path) {
  return path.reduce(function (module, key) {
    return module.getChild(key)
  }, this.root)
};

ModuleCollection.prototype.getNamespace = function getNamespace (path) {
  var module = this.root;
  return path.reduce(function (namespace, key) {
    module = module.getChild(key);
    return namespace + (module.namespaced ? key + '/' : '')
  }, '')
};

ModuleCollection.prototype.update = function update$1 (rawRootModule) {
  update([], this.root, rawRootModule);
};

ModuleCollection.prototype.register = function register (path, rawModule, runtime) {
    var this$1 = this;
    if ( runtime === void 0 ) runtime = true;

  if (true) {
    assertRawModule(path, rawModule);
  }

  var newModule = new Module(rawModule, runtime);
  if (path.length === 0) {
    this.root = newModule;
  } else {
    var parent = this.get(path.slice(0, -1));
    parent.addChild(path[path.length - 1], newModule);
  }

  // register nested modules
  if (rawModule.modules) {
    forEachValue(rawModule.modules, function (rawChildModule, key) {
      this$1.register(path.concat(key), rawChildModule, runtime);
    });
  }
};

ModuleCollection.prototype.unregister = function unregister (path) {
  var parent = this.get(path.slice(0, -1));
  var key = path[path.length - 1];
  if (!parent.getChild(key).runtime) { return }

  parent.removeChild(key);
};

function update (path, targetModule, newModule) {
  if (true) {
    assertRawModule(path, newModule);
  }

  // update target module
  targetModule.update(newModule);

  // update nested modules
  if (newModule.modules) {
    for (var key in newModule.modules) {
      if (!targetModule.getChild(key)) {
        if (true) {
          console.warn(
            "[vuex] trying to add a new module '" + key + "' on hot reloading, " +
            'manual reload is needed'
          );
        }
        return
      }
      update(
        path.concat(key),
        targetModule.getChild(key),
        newModule.modules[key]
      );
    }
  }
}

var functionAssert = {
  assert: function (value) { return typeof value === 'function'; },
  expected: 'function'
};

var objectAssert = {
  assert: function (value) { return typeof value === 'function' ||
    (typeof value === 'object' && typeof value.handler === 'function'); },
  expected: 'function or object with "handler" function'
};

var assertTypes = {
  getters: functionAssert,
  mutations: functionAssert,
  actions: objectAssert
};

function assertRawModule (path, rawModule) {
  Object.keys(assertTypes).forEach(function (key) {
    if (!rawModule[key]) { return }

    var assertOptions = assertTypes[key];

    forEachValue(rawModule[key], function (value, type) {
      assert(
        assertOptions.assert(value),
        makeAssertionMessage(path, key, type, value, assertOptions.expected)
      );
    });
  });
}

function makeAssertionMessage (path, key, type, value, expected) {
  var buf = key + " should be " + expected + " but \"" + key + "." + type + "\"";
  if (path.length > 0) {
    buf += " in module \"" + (path.join('.')) + "\"";
  }
  buf += " is " + (JSON.stringify(value)) + ".";
  return buf
}

var Vue; // bind on install

var Store = function Store (options) {
  var this$1 = this;
  if ( options === void 0 ) options = {};

  // Auto install if it is not done yet and `window` has `Vue`.
  // To allow users to avoid auto-installation in some cases,
  // this code should be placed here. See #731
  if (!Vue && typeof window !== 'undefined' && window.Vue) {
    install(window.Vue);
  }

  if (true) {
    assert(Vue, "must call Vue.use(Vuex) before creating a store instance.");
    assert(typeof Promise !== 'undefined', "vuex requires a Promise polyfill in this browser.");
    assert(this instanceof Store, "store must be called with the new operator.");
  }

  var plugins = options.plugins; if ( plugins === void 0 ) plugins = [];
  var strict = options.strict; if ( strict === void 0 ) strict = false;

  // store internal state
  this._committing = false;
  this._actions = Object.create(null);
  this._actionSubscribers = [];
  this._mutations = Object.create(null);
  this._wrappedGetters = Object.create(null);
  this._modules = new ModuleCollection(options);
  this._modulesNamespaceMap = Object.create(null);
  this._subscribers = [];
  this._watcherVM = new Vue();

  // bind commit and dispatch to self
  var store = this;
  var ref = this;
  var dispatch = ref.dispatch;
  var commit = ref.commit;
  this.dispatch = function boundDispatch (type, payload) {
    return dispatch.call(store, type, payload)
  };
  this.commit = function boundCommit (type, payload, options) {
    return commit.call(store, type, payload, options)
  };

  // strict mode
  this.strict = strict;

  var state = this._modules.root.state;

  // init root module.
  // this also recursively registers all sub-modules
  // and collects all module getters inside this._wrappedGetters
  installModule(this, state, [], this._modules.root);

  // initialize the store vm, which is responsible for the reactivity
  // (also registers _wrappedGetters as computed properties)
  resetStoreVM(this, state);

  // apply plugins
  plugins.forEach(function (plugin) { return plugin(this$1); });

  var useDevtools = options.devtools !== undefined ? options.devtools : Vue.config.devtools;
  if (useDevtools) {
    devtoolPlugin(this);
  }
};

var prototypeAccessors$1 = { state: { configurable: true } };

prototypeAccessors$1.state.get = function () {
  return this._vm._data.$$state
};

prototypeAccessors$1.state.set = function (v) {
  if (true) {
    assert(false, "use store.replaceState() to explicit replace store state.");
  }
};

Store.prototype.commit = function commit (_type, _payload, _options) {
    var this$1 = this;

  // check object-style commit
  var ref = unifyObjectStyle(_type, _payload, _options);
    var type = ref.type;
    var payload = ref.payload;
    var options = ref.options;

  var mutation = { type: type, payload: payload };
  var entry = this._mutations[type];
  if (!entry) {
    if (true) {
      console.error(("[vuex] unknown mutation type: " + type));
    }
    return
  }
  this._withCommit(function () {
    entry.forEach(function commitIterator (handler) {
      handler(payload);
    });
  });
  this._subscribers.forEach(function (sub) { return sub(mutation, this$1.state); });

  if (
    "development" !== 'production' &&
    options && options.silent
  ) {
    console.warn(
      "[vuex] mutation type: " + type + ". Silent option has been removed. " +
      'Use the filter functionality in the vue-devtools'
    );
  }
};

Store.prototype.dispatch = function dispatch (_type, _payload) {
    var this$1 = this;

  // check object-style dispatch
  var ref = unifyObjectStyle(_type, _payload);
    var type = ref.type;
    var payload = ref.payload;

  var action = { type: type, payload: payload };
  var entry = this._actions[type];
  if (!entry) {
    if (true) {
      console.error(("[vuex] unknown action type: " + type));
    }
    return
  }

  try {
    this._actionSubscribers
      .filter(function (sub) { return sub.before; })
      .forEach(function (sub) { return sub.before(action, this$1.state); });
  } catch (e) {
    if (true) {
      console.warn("[vuex] error in before action subscribers: ");
      console.error(e);
    }
  }

  var result = entry.length > 1
    ? Promise.all(entry.map(function (handler) { return handler(payload); }))
    : entry[0](payload);

  return result.then(function (res) {
    try {
      this$1._actionSubscribers
        .filter(function (sub) { return sub.after; })
        .forEach(function (sub) { return sub.after(action, this$1.state); });
    } catch (e) {
      if (true) {
        console.warn("[vuex] error in after action subscribers: ");
        console.error(e);
      }
    }
    return res
  })
};

Store.prototype.subscribe = function subscribe (fn) {
  return genericSubscribe(fn, this._subscribers)
};

Store.prototype.subscribeAction = function subscribeAction (fn) {
  var subs = typeof fn === 'function' ? { before: fn } : fn;
  return genericSubscribe(subs, this._actionSubscribers)
};

Store.prototype.watch = function watch (getter, cb, options) {
    var this$1 = this;

  if (true) {
    assert(typeof getter === 'function', "store.watch only accepts a function.");
  }
  return this._watcherVM.$watch(function () { return getter(this$1.state, this$1.getters); }, cb, options)
};

Store.prototype.replaceState = function replaceState (state) {
    var this$1 = this;

  this._withCommit(function () {
    this$1._vm._data.$$state = state;
  });
};

Store.prototype.registerModule = function registerModule (path, rawModule, options) {
    if ( options === void 0 ) options = {};

  if (typeof path === 'string') { path = [path]; }

  if (true) {
    assert(Array.isArray(path), "module path must be a string or an Array.");
    assert(path.length > 0, 'cannot register the root module by using registerModule.');
  }

  this._modules.register(path, rawModule);
  installModule(this, this.state, path, this._modules.get(path), options.preserveState);
  // reset store to update getters...
  resetStoreVM(this, this.state);
};

Store.prototype.unregisterModule = function unregisterModule (path) {
    var this$1 = this;

  if (typeof path === 'string') { path = [path]; }

  if (true) {
    assert(Array.isArray(path), "module path must be a string or an Array.");
  }

  this._modules.unregister(path);
  this._withCommit(function () {
    var parentState = getNestedState(this$1.state, path.slice(0, -1));
    Vue.delete(parentState, path[path.length - 1]);
  });
  resetStore(this);
};

Store.prototype.hotUpdate = function hotUpdate (newOptions) {
  this._modules.update(newOptions);
  resetStore(this, true);
};

Store.prototype._withCommit = function _withCommit (fn) {
  var committing = this._committing;
  this._committing = true;
  fn();
  this._committing = committing;
};

Object.defineProperties( Store.prototype, prototypeAccessors$1 );

function genericSubscribe (fn, subs) {
  if (subs.indexOf(fn) < 0) {
    subs.push(fn);
  }
  return function () {
    var i = subs.indexOf(fn);
    if (i > -1) {
      subs.splice(i, 1);
    }
  }
}

function resetStore (store, hot) {
  store._actions = Object.create(null);
  store._mutations = Object.create(null);
  store._wrappedGetters = Object.create(null);
  store._modulesNamespaceMap = Object.create(null);
  var state = store.state;
  // init all modules
  installModule(store, state, [], store._modules.root, true);
  // reset vm
  resetStoreVM(store, state, hot);
}

function resetStoreVM (store, state, hot) {
  var oldVm = store._vm;

  // bind store public getters
  store.getters = {};
  var wrappedGetters = store._wrappedGetters;
  var computed = {};
  forEachValue(wrappedGetters, function (fn, key) {
    // use computed to leverage its lazy-caching mechanism
    computed[key] = function () { return fn(store); };
    Object.defineProperty(store.getters, key, {
      get: function () { return store._vm[key]; },
      enumerable: true // for local getters
    });
  });

  // use a Vue instance to store the state tree
  // suppress warnings just in case the user has added
  // some funky global mixins
  var silent = Vue.config.silent;
  Vue.config.silent = true;
  store._vm = new Vue({
    data: {
      $$state: state
    },
    computed: computed
  });
  Vue.config.silent = silent;

  // enable strict mode for new vm
  if (store.strict) {
    enableStrictMode(store);
  }

  if (oldVm) {
    if (hot) {
      // dispatch changes in all subscribed watchers
      // to force getter re-evaluation for hot reloading.
      store._withCommit(function () {
        oldVm._data.$$state = null;
      });
    }
    Vue.nextTick(function () { return oldVm.$destroy(); });
  }
}

function installModule (store, rootState, path, module, hot) {
  var isRoot = !path.length;
  var namespace = store._modules.getNamespace(path);

  // register in namespace map
  if (module.namespaced) {
    store._modulesNamespaceMap[namespace] = module;
  }

  // set state
  if (!isRoot && !hot) {
    var parentState = getNestedState(rootState, path.slice(0, -1));
    var moduleName = path[path.length - 1];
    store._withCommit(function () {
      Vue.set(parentState, moduleName, module.state);
    });
  }

  var local = module.context = makeLocalContext(store, namespace, path);

  module.forEachMutation(function (mutation, key) {
    var namespacedType = namespace + key;
    registerMutation(store, namespacedType, mutation, local);
  });

  module.forEachAction(function (action, key) {
    var type = action.root ? key : namespace + key;
    var handler = action.handler || action;
    registerAction(store, type, handler, local);
  });

  module.forEachGetter(function (getter, key) {
    var namespacedType = namespace + key;
    registerGetter(store, namespacedType, getter, local);
  });

  module.forEachChild(function (child, key) {
    installModule(store, rootState, path.concat(key), child, hot);
  });
}

/**
 * make localized dispatch, commit, getters and state
 * if there is no namespace, just use root ones
 */
function makeLocalContext (store, namespace, path) {
  var noNamespace = namespace === '';

  var local = {
    dispatch: noNamespace ? store.dispatch : function (_type, _payload, _options) {
      var args = unifyObjectStyle(_type, _payload, _options);
      var payload = args.payload;
      var options = args.options;
      var type = args.type;

      if (!options || !options.root) {
        type = namespace + type;
        if ("development" !== 'production' && !store._actions[type]) {
          console.error(("[vuex] unknown local action type: " + (args.type) + ", global type: " + type));
          return
        }
      }

      return store.dispatch(type, payload)
    },

    commit: noNamespace ? store.commit : function (_type, _payload, _options) {
      var args = unifyObjectStyle(_type, _payload, _options);
      var payload = args.payload;
      var options = args.options;
      var type = args.type;

      if (!options || !options.root) {
        type = namespace + type;
        if ("development" !== 'production' && !store._mutations[type]) {
          console.error(("[vuex] unknown local mutation type: " + (args.type) + ", global type: " + type));
          return
        }
      }

      store.commit(type, payload, options);
    }
  };

  // getters and state object must be gotten lazily
  // because they will be changed by vm update
  Object.defineProperties(local, {
    getters: {
      get: noNamespace
        ? function () { return store.getters; }
        : function () { return makeLocalGetters(store, namespace); }
    },
    state: {
      get: function () { return getNestedState(store.state, path); }
    }
  });

  return local
}

function makeLocalGetters (store, namespace) {
  var gettersProxy = {};

  var splitPos = namespace.length;
  Object.keys(store.getters).forEach(function (type) {
    // skip if the target getter is not match this namespace
    if (type.slice(0, splitPos) !== namespace) { return }

    // extract local getter type
    var localType = type.slice(splitPos);

    // Add a port to the getters proxy.
    // Define as getter property because
    // we do not want to evaluate the getters in this time.
    Object.defineProperty(gettersProxy, localType, {
      get: function () { return store.getters[type]; },
      enumerable: true
    });
  });

  return gettersProxy
}

function registerMutation (store, type, handler, local) {
  var entry = store._mutations[type] || (store._mutations[type] = []);
  entry.push(function wrappedMutationHandler (payload) {
    handler.call(store, local.state, payload);
  });
}

function registerAction (store, type, handler, local) {
  var entry = store._actions[type] || (store._actions[type] = []);
  entry.push(function wrappedActionHandler (payload, cb) {
    var res = handler.call(store, {
      dispatch: local.dispatch,
      commit: local.commit,
      getters: local.getters,
      state: local.state,
      rootGetters: store.getters,
      rootState: store.state
    }, payload, cb);
    if (!isPromise(res)) {
      res = Promise.resolve(res);
    }
    if (store._devtoolHook) {
      return res.catch(function (err) {
        store._devtoolHook.emit('vuex:error', err);
        throw err
      })
    } else {
      return res
    }
  });
}

function registerGetter (store, type, rawGetter, local) {
  if (store._wrappedGetters[type]) {
    if (true) {
      console.error(("[vuex] duplicate getter key: " + type));
    }
    return
  }
  store._wrappedGetters[type] = function wrappedGetter (store) {
    return rawGetter(
      local.state, // local state
      local.getters, // local getters
      store.state, // root state
      store.getters // root getters
    )
  };
}

function enableStrictMode (store) {
  store._vm.$watch(function () { return this._data.$$state }, function () {
    if (true) {
      assert(store._committing, "do not mutate vuex store state outside mutation handlers.");
    }
  }, { deep: true, sync: true });
}

function getNestedState (state, path) {
  return path.length
    ? path.reduce(function (state, key) { return state[key]; }, state)
    : state
}

function unifyObjectStyle (type, payload, options) {
  if (isObject(type) && type.type) {
    options = payload;
    payload = type;
    type = type.type;
  }

  if (true) {
    assert(typeof type === 'string', ("expects string as the type, but found " + (typeof type) + "."));
  }

  return { type: type, payload: payload, options: options }
}

function install (_Vue) {
  if (Vue && _Vue === Vue) {
    if (true) {
      console.error(
        '[vuex] already installed. Vue.use(Vuex) should be called only once.'
      );
    }
    return
  }
  Vue = _Vue;
  applyMixin(Vue);
}

/**
 * Reduce the code which written in Vue.js for getting the state.
 * @param {String} [namespace] - Module's namespace
 * @param {Object|Array} states # Object's item can be a function which accept state and getters for param, you can do something for state and getters in it.
 * @param {Object}
 */
var mapState = normalizeNamespace(function (namespace, states) {
  var res = {};
  normalizeMap(states).forEach(function (ref) {
    var key = ref.key;
    var val = ref.val;

    res[key] = function mappedState () {
      var state = this.$store.state;
      var getters = this.$store.getters;
      if (namespace) {
        var module = getModuleByNamespace(this.$store, 'mapState', namespace);
        if (!module) {
          return
        }
        state = module.context.state;
        getters = module.context.getters;
      }
      return typeof val === 'function'
        ? val.call(this, state, getters)
        : state[val]
    };
    // mark vuex getter for devtools
    res[key].vuex = true;
  });
  return res
});

/**
 * Reduce the code which written in Vue.js for committing the mutation
 * @param {String} [namespace] - Module's namespace
 * @param {Object|Array} mutations # Object's item can be a function which accept `commit` function as the first param, it can accept anthor params. You can commit mutation and do any other things in this function. specially, You need to pass anthor params from the mapped function.
 * @return {Object}
 */
var mapMutations = normalizeNamespace(function (namespace, mutations) {
  var res = {};
  normalizeMap(mutations).forEach(function (ref) {
    var key = ref.key;
    var val = ref.val;

    res[key] = function mappedMutation () {
      var args = [], len = arguments.length;
      while ( len-- ) args[ len ] = arguments[ len ];

      // Get the commit method from store
      var commit = this.$store.commit;
      if (namespace) {
        var module = getModuleByNamespace(this.$store, 'mapMutations', namespace);
        if (!module) {
          return
        }
        commit = module.context.commit;
      }
      return typeof val === 'function'
        ? val.apply(this, [commit].concat(args))
        : commit.apply(this.$store, [val].concat(args))
    };
  });
  return res
});

/**
 * Reduce the code which written in Vue.js for getting the getters
 * @param {String} [namespace] - Module's namespace
 * @param {Object|Array} getters
 * @return {Object}
 */
var mapGetters = normalizeNamespace(function (namespace, getters) {
  var res = {};
  normalizeMap(getters).forEach(function (ref) {
    var key = ref.key;
    var val = ref.val;

    // The namespace has been mutated by normalizeNamespace
    val = namespace + val;
    res[key] = function mappedGetter () {
      if (namespace && !getModuleByNamespace(this.$store, 'mapGetters', namespace)) {
        return
      }
      if ("development" !== 'production' && !(val in this.$store.getters)) {
        console.error(("[vuex] unknown getter: " + val));
        return
      }
      return this.$store.getters[val]
    };
    // mark vuex getter for devtools
    res[key].vuex = true;
  });
  return res
});

/**
 * Reduce the code which written in Vue.js for dispatch the action
 * @param {String} [namespace] - Module's namespace
 * @param {Object|Array} actions # Object's item can be a function which accept `dispatch` function as the first param, it can accept anthor params. You can dispatch action and do any other things in this function. specially, You need to pass anthor params from the mapped function.
 * @return {Object}
 */
var mapActions = normalizeNamespace(function (namespace, actions) {
  var res = {};
  normalizeMap(actions).forEach(function (ref) {
    var key = ref.key;
    var val = ref.val;

    res[key] = function mappedAction () {
      var args = [], len = arguments.length;
      while ( len-- ) args[ len ] = arguments[ len ];

      // get dispatch function from store
      var dispatch = this.$store.dispatch;
      if (namespace) {
        var module = getModuleByNamespace(this.$store, 'mapActions', namespace);
        if (!module) {
          return
        }
        dispatch = module.context.dispatch;
      }
      return typeof val === 'function'
        ? val.apply(this, [dispatch].concat(args))
        : dispatch.apply(this.$store, [val].concat(args))
    };
  });
  return res
});

/**
 * Rebinding namespace param for mapXXX function in special scoped, and return them by simple object
 * @param {String} namespace
 * @return {Object}
 */
var createNamespacedHelpers = function (namespace) { return ({
  mapState: mapState.bind(null, namespace),
  mapGetters: mapGetters.bind(null, namespace),
  mapMutations: mapMutations.bind(null, namespace),
  mapActions: mapActions.bind(null, namespace)
}); };

/**
 * Normalize the map
 * normalizeMap([1, 2, 3]) => [ { key: 1, val: 1 }, { key: 2, val: 2 }, { key: 3, val: 3 } ]
 * normalizeMap({a: 1, b: 2, c: 3}) => [ { key: 'a', val: 1 }, { key: 'b', val: 2 }, { key: 'c', val: 3 } ]
 * @param {Array|Object} map
 * @return {Object}
 */
function normalizeMap (map) {
  return Array.isArray(map)
    ? map.map(function (key) { return ({ key: key, val: key }); })
    : Object.keys(map).map(function (key) { return ({ key: key, val: map[key] }); })
}

/**
 * Return a function expect two param contains namespace and map. it will normalize the namespace and then the param's function will handle the new namespace and the map.
 * @param {Function} fn
 * @return {Function}
 */
function normalizeNamespace (fn) {
  return function (namespace, map) {
    if (typeof namespace !== 'string') {
      map = namespace;
      namespace = '';
    } else if (namespace.charAt(namespace.length - 1) !== '/') {
      namespace += '/';
    }
    return fn(namespace, map)
  }
}

/**
 * Search a special module from store by namespace. if module not exist, print error message.
 * @param {Object} store
 * @param {String} helper
 * @param {String} namespace
 * @return {Object}
 */
function getModuleByNamespace (store, helper, namespace) {
  var module = store._modulesNamespaceMap[namespace];
  if ("development" !== 'production' && !module) {
    console.error(("[vuex] module namespace not found in " + helper + "(): " + namespace));
  }
  return module
}

var index_esm = {
  Store: Store,
  install: install,
  version: '3.1.0',
  mapState: mapState,
  mapMutations: mapMutations,
  mapGetters: mapGetters,
  mapActions: mapActions,
  createNamespacedHelpers: createNamespacedHelpers
};

/* harmony default export */ __webpack_exports__["default"] = (index_esm);



/***/ }),
/* 169 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(170)
/* template */
var __vue_template__ = __webpack_require__(171)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/PostAsComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-472931c4", Component.options)
  } else {
    hotAPI.reload("data-v-472931c4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 170 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'PostAs',

    props: ['characters', 'user'],

    created: function created() {
        if (this.characters && this.characters.length) {
            var character = this.characters.find(function (character) {
                return character.current === 1;
            });
            this.author_id = character.id;
            this.author_type = 'character';
        } else if (this.user) {
            this.author_id = "u";
            this.author_type = 'user';
        }
    },
    data: function data() {
        return {
            author_type: 'user',
            author_id: ''
        };
    },


    methods: {
        setType: function setType(type) {
            if (this.author_type !== type) {
                this.author_type = type;
            }
        },
        username: function username(character) {
            var name = character.chosen_name || character.first_name;
            return name + ' ' + character.last_name;
        }
    }

});

/***/ }),
/* 171 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "form-group row" }, [
    _c("label", { staticClass: "control-label col-sm-2" }, [
      _vm._v("Post As:")
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "col-sm-10" },
      [
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.author_type,
              expression: "author_type"
            }
          ],
          attrs: { type: "hidden", name: "author_type" },
          domProps: { value: _vm.author_type },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.author_type = $event.target.value
            }
          }
        }),
        _vm._v(" "),
        _vm.characters
          ? _vm._l(_vm.characters, function(character) {
              return _c("label", [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.author_id,
                      expression: "author_id"
                    }
                  ],
                  attrs: { type: "radio", name: "author_id" },
                  domProps: {
                    value: character.id,
                    checked: _vm._q(_vm.author_id, character.id)
                  },
                  on: {
                    change: [
                      function($event) {
                        _vm.author_id = character.id
                      },
                      function($event) {
                        _vm.setType("character")
                      }
                    ]
                  }
                }),
                _vm._v(
                  "\n                " +
                    _vm._s(_vm.username(character)) +
                    "\n            "
                )
              ])
            })
          : _vm._e(),
        _vm._v(" "),
        _vm.user
          ? _c("label", [
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.author_id,
                    expression: "author_id"
                  }
                ],
                attrs: { type: "radio", name: "author_id", value: "u" },
                domProps: { checked: _vm._q(_vm.author_id, "u") },
                on: {
                  change: [
                    function($event) {
                      _vm.author_id = "u"
                    },
                    function($event) {
                      _vm.setType("user")
                    }
                  ]
                }
              }),
              _vm._v(
                "\n            " + _vm._s(_vm.user.username) + "\n        "
              )
            ])
          : _vm._e()
      ],
      2
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-472931c4", module.exports)
  }
}

/***/ }),
/* 172 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(173)
/* template */
var __vue_template__ = __webpack_require__(174)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/DeleteButtonComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-ba2349ce", Component.options)
  } else {
    hotAPI.reload("data-v-ba2349ce", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 173 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'DeleteButton',

    props: ['forum', 'thread', 'post'],

    computed: {
        deleteType: function deleteType() {
            if (this.post) return 'post';else return 'thread';
        }
    },

    methods: {
        deleteHandler: function deleteHandler() {
            var deleteConfirm = confirm('Are you sure you want to delete this ' + this.deleteType + '?');
            if (deleteConfirm) {
                this.delete();
            }
        },
        delete: function _delete() {
            var _this = this;

            var url = void 0;
            if (this.post) {
                url = '/f/' + this.forum.id + '/t/' + this.thread.slug + '/' + this.post.id;
            } else {
                url = '/f/' + this.forum.id + '/t/' + this.thread.slug;
            }

            axios.delete(url, {}).then(function (res) {
                if (res.status === 204) {
                    window.location.href = '/f/' + _this.forum.id;
                }

                window.location.reload(true);
            }).catch(function (err) {
                var message = err.message;
                if (err.response) {
                    // The request was made and the server responded with a status code
                    // that falls out of the range of 2xx
                    message = err.response.status === 403 ? 'You do not have permission to perform this action.' : message;
                } else if (err.request) {
                    // The request was made but no response was received
                    // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                    // http.ClientRequest in node.js
                    console.log(err.request);
                } else {
                    // Something happened in setting up the request that triggered an Error
                    console.log('Error', err.message);
                }
                alert(message);
                console.log(err.config);
            });
        }
    }

});

/***/ }),
/* 174 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "button",
    {
      staticClass: "btn btn-outline-danger",
      class: {
        "btn-block mb-4 m-fancy-title text-uppercase": _vm.post,
        "m-1": !_vm.post
      },
      on: {
        click: function($event) {
          _vm.deleteHandler()
        }
      }
    },
    [_c("i", { staticClass: "fas fa-trash-alt" }), _vm._v("\n    Delete\n")]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-ba2349ce", module.exports)
  }
}

/***/ }),
/* 175 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(176)
/* template */
var __vue_template__ = __webpack_require__(177)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/CharacterTimeComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3e8a0904", Component.options)
  } else {
    hotAPI.reload("data-v-3e8a0904", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 176 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'CharacterTime',

    props: ['current', 'period', 'asof', 'character', 'old', 'years', 'ages', 'months', 'clazzes'],

    data: function data() {
        return {
            ic_birth_month: 5,
            birthMonth: 'May',
            birthDay: 31,
            birthYear: 132,
            hasAgeError: false,
            hasClazzError: false
        };
    },
    created: function created() {

        if (this.old || this.character) {

            this.ic_birth_month = this.old.ic_birth_month || this.character.ic_birth_month;

            this.birthDay = this.old.ic_birth_day || this.character.ic_birth_day;

            this.birthYear = this.old.ic_birth_year || this.character.ic_birth_year;
        }
    },


    watch: {
        asOf_age: function asOf_age(newAge) {
            this.hasAgeError = newAge < 18;
        },
        current_age: function current_age(newAge) {
            this.hasAgeError = newAge < 18;
        },
        initiationYear: function initiationYear(newClazz) {
            this.hasClazzError = newClazz > this.asof.asOfYear;
        },
        birthMonth: function birthMonth(newMonth, oldMonth) {
            if (newMonth !== oldMonth) {
                this.ic_birth_month = this._showMonthInt(newMonth);
            }
        },
        ic_birth_month: function ic_birth_month(newMonth, oldMonth) {
            if (newMonth !== oldMonth) {
                this.birthMonth = this._showMonthWord(newMonth);
            }
        }
    },

    computed: {
        days: function days() {
            var days = [];
            for (var i = 1; i <= 31; i++) {
                days.push(i);
            }
            return days;
        },
        asOfDate: function asOfDate() {
            var asOfMonth = this._showMonthWord(this.asof.asOfMonth);

            return asOfMonth + ' ' + this.asof.asOfDay + ', Year ' + this.asof.asOfYear;
        },
        currentDate: function currentDate() {
            var currentMonth = this._showMonthWord(this.current.currentMonth);

            return currentMonth + ' ' + this.current.currentDay + ', Year ' + this.current.currentYear;
        },
        periodStart: function periodStart() {
            var startMonth = this._showMonthWord(this.period.startMonth);

            return startMonth + ' ' + this.period.startDay + ', Year ' + this.period.startYear;
        },
        periodEnd: function periodEnd() {
            var endMonth = this._showMonthWord(this.period.endMonth);

            return endMonth + ' ' + this.period.endDay + ', Year ' + this.period.endYear;
        },
        current_age: function current_age() {
            return this._calcAge({
                birthYear: this.birthYear,
                birthMonth: this.ic_birth_month,
                birthDay: this.birthDay,
                year: this.current.currentYear,
                month: this.current.currentMonth,
                day: this.current.currentDay
            }) || 0;
        },
        asOf_age: function asOf_age() {
            return this._calcAge({
                birthYear: this.birthYear,
                birthMonth: this.ic_birth_month,
                birthDay: this.birthDay,
                year: this.asof.asOfYear,
                month: this.asof.asOfMonth,
                day: this.asof.asOfDay
            }) || 0;
        },
        initiationYear: function initiationYear() {
            return this._calcInitiationYear();
        }
    },

    methods: {
        _calcAge: function _calcAge(_ref) {
            var birthYear = _ref.birthYear,
                birthMonth = _ref.birthMonth,
                birthDay = _ref.birthDay,
                year = _ref.year,
                month = _ref.month,
                day = _ref.day;


            var age = year - birthYear;

            var hasHadBirthday = this._hasHadBirthday({ birthMonth: birthMonth, birthDay: birthDay, month: month, day: day });

            if (!hasHadBirthday) {
                age -= 1;
            }
            return age;
        },
        _calcInitiationYear: function _calcInitiationYear() {
            var clazz = parseInt(this.birthYear) + 18;
            if (this.months.indexOf(this.birthMonth) > this.asof.asOfMonth - 1) {
                clazz += 1;
            }

            return clazz;
        },
        _hasHadBirthday: function _hasHadBirthday(_ref2) {
            var birthMonth = _ref2.birthMonth,
                birthDay = _ref2.birthDay,
                month = _ref2.month,
                day = _ref2.day;

            if (birthMonth < month) return true;

            return birthMonth === month && birthDay <= day;
        },
        _showMonthWord: function _showMonthWord(monthInt) {
            return this.months[monthInt - 1];
        },
        _showMonthInt: function _showMonthInt(monthWord) {
            return this.months.indexOf(monthWord) + 1;
        }
    }
});

/***/ }),
/* 177 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "card-body" }, [
    _c("div", { staticClass: "row mb-5" }, [
      _c("div", { staticClass: "col" }, [
        _c(
          "h4",
          {
            staticClass:
              "m-fancy-header text-center text-uppercase neon-default"
          },
          [_vm._v("As of " + _vm._s(_vm.asOfDate))]
        ),
        _vm._v(" "),
        _c("hr", { staticClass: "glow-default" })
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "row mb-5" }, [
      _vm._m(0),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-9" }, [
        _c(
          "h6",
          { staticClass: "m-fancy-header text-uppercase neon-default" },
          [_vm._v(_vm._s(_vm.periodStart) + " - " + _vm._s(_vm.periodEnd))]
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "row mb-5" }, [
      _vm._m(1),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-9" }, [
        _c(
          "h6",
          { staticClass: "m-fancy-header text-uppercase neon-default" },
          [_vm._v(_vm._s(_vm.currentDate))]
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "row mb-5" }, [
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "form-group" }, [
          _c(
            "label",
            {
              staticClass: "control-label m-fancy-title text-uppercase",
              attrs: { for: "birth_month" }
            },
            [_vm._v("Birth Month:")]
          ),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.ic_birth_month,
                expression: "ic_birth_month"
              }
            ],
            attrs: { name: "ic_birth_month", type: "hidden" },
            domProps: { value: _vm.ic_birth_month },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.ic_birth_month = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c(
            "select",
            {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.birthMonth,
                  expression: "birthMonth"
                }
              ],
              staticClass: "form-control form-control-lg",
              attrs: { name: "birth_month", id: "birth_month" },
              on: {
                change: function($event) {
                  var $$selectedVal = Array.prototype.filter
                    .call($event.target.options, function(o) {
                      return o.selected
                    })
                    .map(function(o) {
                      var val = "_value" in o ? o._value : o.value
                      return val
                    })
                  _vm.birthMonth = $event.target.multiple
                    ? $$selectedVal
                    : $$selectedVal[0]
                }
              }
            },
            [
              _c("option", { attrs: { disabled: "", selected: "" } }, [
                _vm._v("Please Choose One")
              ]),
              _vm._v(" "),
              _vm._l(_vm.months, function(_month) {
                return _c("option", [_vm._v(" " + _vm._s(_month))])
              })
            ],
            2
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "form-group" }, [
          _c(
            "label",
            {
              staticClass: "control-label m-fancy-title text-uppercase",
              attrs: { for: "birth_day" }
            },
            [_vm._v("Birth Day:")]
          ),
          _vm._v(" "),
          _c(
            "select",
            {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.birthDay,
                  expression: "birthDay"
                }
              ],
              staticClass: "form-control form-control-lg",
              attrs: { name: "ic_birth_day", id: "birth_day" },
              on: {
                change: function($event) {
                  var $$selectedVal = Array.prototype.filter
                    .call($event.target.options, function(o) {
                      return o.selected
                    })
                    .map(function(o) {
                      var val = "_value" in o ? o._value : o.value
                      return val
                    })
                  _vm.birthDay = $event.target.multiple
                    ? $$selectedVal
                    : $$selectedVal[0]
                }
              }
            },
            [
              _c("option", { attrs: { disabled: "", selected: "" } }, [
                _vm._v("Please Choose One")
              ]),
              _vm._v(" "),
              _vm._l(_vm.days, function(_day) {
                return _c("option", [_vm._v(" " + _vm._s(_day))])
              })
            ],
            2
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "form-group" }, [
          _c(
            "label",
            {
              staticClass: "control-label m-fancy-title text-uppercase",
              attrs: { for: "birth_year" }
            },
            [_vm._v("Birth Year:")]
          ),
          _vm._v(" "),
          _c(
            "select",
            {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.birthYear,
                  expression: "birthYear"
                }
              ],
              staticClass: "form-control form-control-lg",
              attrs: { name: "ic_birth_year", id: "birth_year" },
              on: {
                change: function($event) {
                  var $$selectedVal = Array.prototype.filter
                    .call($event.target.options, function(o) {
                      return o.selected
                    })
                    .map(function(o) {
                      var val = "_value" in o ? o._value : o.value
                      return val
                    })
                  _vm.birthYear = $event.target.multiple
                    ? $$selectedVal
                    : $$selectedVal[0]
                }
              }
            },
            [
              _c("option", { attrs: { disabled: "", selected: "" } }, [
                _vm._v("Please Choose One")
              ]),
              _vm._v(" "),
              _vm._l(_vm.years, function(_year) {
                return _c("option", [_vm._v(" " + _vm._s(_year))])
              })
            ],
            2
          )
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group mb-5 h5 row" }, [
      _c("div", { staticClass: "col-md-6" }, [
        _c(
          "label",
          { staticClass: "control-label m-fancy-title text-uppercase" },
          [_vm._v("Current Age:")]
        ),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "hidden", name: "age" },
          domProps: { value: _vm.current_age }
        }),
        _vm._v(" "),
        _c("span", { class: { "text-danger": _vm.hasAgeError } }, [
          _vm._v("\n            " + _vm._s(_vm.current_age) + "\n            "),
          _c(
            "span",
            {
              staticClass: "d-none ml-2",
              class: { "d-inline-block": _vm.hasAgeError }
            },
            [_vm._v("Age not allowed")]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-6" }, [
        _c(
          "label",
          { staticClass: "control-label m-fancy-title text-uppercase" },
          [_vm._v("Age as of " + _vm._s(_vm.asOfDate) + ":")]
        ),
        _vm._v(" "),
        _c("span", { class: { "text-danger": _vm.hasAgeError } }, [
          _vm._v(
            "\n            " + _vm._s(_vm.asOf_age) + "\n                "
          ),
          _c(
            "span",
            {
              staticClass: "d-none ml-2",
              class: { "d-inline-block": _vm.hasAgeError }
            },
            [_vm._v("Age not allowed")]
          )
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group mb-5 h5" }, [
      _c(
        "label",
        {
          staticClass: "control-label m-fancy-title text-uppercase",
          attrs: { for: "initiation_year" }
        },
        [_vm._v("\n                Initiation Year:")]
      ),
      _vm._v(" "),
      _c("span", { class: { "text-danger": _vm.hasClazzError } }, [
        _vm._v("\n        " + _vm._s(_vm.initiationYear) + "\n            "),
        _c(
          "span",
          {
            staticClass: "d-none ml-2",
            class: { "d-inline-block": _vm.hasClazzError }
          },
          [_vm._v("Initiation year not allowed")]
        ),
        _vm._v(" "),
        _c("input", {
          attrs: {
            type: "hidden",
            id: "initiation_year",
            name: "initiation_year"
          },
          domProps: { value: _vm.initiationYear }
        })
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-3" }, [
      _c("h5", { staticClass: "m-fancy-title text-uppercase" }, [
        _vm._v("Current Period:")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-3" }, [
      _c("h5", { staticClass: "m-fancy-title text-uppercase" }, [
        _vm._v("Current Date:")
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-3e8a0904", module.exports)
  }
}

/***/ }),
/* 178 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(179)
/* template */
var __vue_template__ = __webpack_require__(180)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/OnlineStatusComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-672d68b1", Component.options)
  } else {
    hotAPI.reload("data-v-672d68b1", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 179 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'OnlineStatus',
    props: ['online'],
    mounted: function mounted() {
        if (this.online) {
            this.status = 'Online';
        }
    },
    data: function data() {
        return {
            status: 'Offline'
        };
    }
});

/***/ }),
/* 180 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("span", { staticClass: "m-fancy-title" }, [
    _vm._v(_vm._s(_vm.status))
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-672d68b1", module.exports)
  }
}

/***/ }),
/* 181 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(182)
/* template */
var __vue_template__ = __webpack_require__(183)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/ShowMoreComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a9c5aaf8", Component.options)
  } else {
    hotAPI.reload("data-v-a9c5aaf8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 182 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'ShowMore',
    props: ['thread', 'collapse'],
    mounted: function mounted() {
        if (!this.collapse) {
            this.status = 'Collapse';
            this.expand = true;
        }
    },
    data: function data() {
        return {
            expand: false,
            status: 'Expand',
            dataTarget: '#thread' + this.thread
        };
    },

    watch: {
        expand: function expand() {
            if (this.expand) {
                this.status = 'Expand';
            } else {
                this.status = 'Collapse';
            }
        }
    },
    methods: {
        toggleExpand: function toggleExpand() {
            this.expand = !this.expand;
        }
    }
});

/***/ }),
/* 183 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "button",
    {
      staticClass: "btn btn-outline-primary m-1",
      attrs: { "data-toggle": "collapse", "data-target": _vm.dataTarget },
      on: { click: _vm.toggleExpand }
    },
    [
      _vm.expand
        ? _c("i", {
            staticClass: "fa fa-chevron-circle-right",
            attrs: { "aria-hidden": "true" }
          })
        : _c("i", {
            staticClass: "fa fa-chevron-circle-up",
            attrs: { "aria-hidden": "true" }
          }),
      _vm._v("\n    " + _vm._s(_vm.status) + "\n")
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-a9c5aaf8", module.exports)
  }
}

/***/ }),
/* 184 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(185)
/* template */
var __vue_template__ = __webpack_require__(186)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/SwitchCharacterComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-47b6d542", Component.options)
  } else {
    hotAPI.reload("data-v-47b6d542", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 185 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'SwitchCharacter',

    props: ['characters'],

    data: function data() {
        return {
            current: ''
        };
    },


    methods: {
        handleSwitch: function handleSwitch(characterId) {
            this.current = characterId;
            this.switch();
        },
        switch: function _switch() {
            axios.put('/c/current', {
                character: this.current
            }).then(function () {
                window.location.reload();
            });
        }
    }
});

/***/ }),
/* 186 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "btn-group" }, [
    _vm._m(0),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "dropdown-menu" },
      _vm._l(_vm.characters, function(character) {
        return !character.current
          ? _c(
              "a",
              {
                staticClass: "dropdown-item",
                attrs: { href: "#" },
                on: {
                  click: function($event) {
                    _vm.handleSwitch(character.id)
                  }
                }
              },
              [
                _vm._v(
                  "\n            " + _vm._s(character.username) + "\n        "
                )
              ]
            )
          : _vm._e()
      })
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "btn-link flicker",
        attrs: {
          "data-toggle": "dropdown",
          "aria-haspopup": "true",
          "aria-expanded": "false",
          title: "Switch Character"
        }
      },
      [_c("i", { staticClass: "fas fa-exchange-alt" })]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-47b6d542", module.exports)
  }
}

/***/ }),
/* 187 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(188)
/* template */
var __vue_template__ = __webpack_require__(189)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/SubscribeButtonComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2af23df8", Component.options)
  } else {
    hotAPI.reload("data-v-2af23df8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 188 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'SubscribeButton',
    props: ['isSubscribed', 'path'],

    data: function data() {
        return {
            subscriptionStatus: 'Subscribe',
            subscribed: false
        };
    },
    mounted: function mounted() {
        if (this.isSubscribed) {
            this.toggleSubscription();
        }
    },


    watch: {
        subscribed: function subscribed() {
            if (this.subscribed) {
                this.subscriptionStatus = 'Unsubscribe';
            } else {
                this.subscriptionStatus = 'Subscribe';
            }
        }
    },

    methods: {
        subscribeHandler: function subscribeHandler() {
            if (this.subscribed) {
                this.unsubscribe().then(this.toggleSubscription());
            } else {
                this.subscribe().then(this.toggleSubscription());
            }
        },
        toggleSubscription: function toggleSubscription() {
            this.subscribed = !this.subscribed;
        },
        subscribe: function subscribe() {
            return axios.post(this.path + '/subscription', {});
        },
        unsubscribe: function unsubscribe() {
            return axios.delete(this.path + '/subscription', {});
        }
    }
});

/***/ }),
/* 189 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "button",
    {
      staticClass: "btn btn-outline-info m-fancy-title text-uppercase",
      on: {
        click: function($event) {
          _vm.subscribeHandler()
        }
      }
    },
    [
      _c("i", { staticClass: "fas fa-rss-square" }),
      _vm._v("\n    " + _vm._s(_vm.subscriptionStatus) + "\n")
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-2af23df8", module.exports)
  }
}

/***/ }),
/* 190 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(191)
/* template */
var __vue_template__ = __webpack_require__(192)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/UnreadNotificationsComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-47e4e13b", Component.options)
  } else {
    hotAPI.reload("data-v-47e4e13b", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 191 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'UnreadNotifications',
    props: ['notifications'],
    data: function data() {
        return {};
    },


    methods: {
        markAsRead: function markAsRead(notification) {
            axios.delete('/notifications/' + notification.id);
        }
    }
});

/***/ }),
/* 192 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass:
        "dropdown-menu dropdown-menu-right dropdown-menu-lg m-userbar-notifications"
    },
    [
      _c("div", { staticClass: "dropdown-header text-center" }, [
        _c("strong", [
          _vm._v(
            "You have " +
              _vm._s(_vm.notifications.length) +
              " unread notifications."
          )
        ])
      ]),
      _vm._v(" "),
      _vm._l(_vm.notifications, function(notification) {
        return [
          _c(
            "a",
            {
              staticClass: "dropdown-item",
              attrs: { href: notification.data.link },
              on: {
                click: function($event) {
                  _vm.markAsRead(notification)
                }
              }
            },
            [
              _c("div", { staticClass: "container-fluid m-0" }, [
                _c("div", { staticClass: "row" }, [
                  _c(
                    "div",
                    {
                      staticClass:
                        "col-2 d-flex align-items-center justify-content-center"
                    },
                    [
                      _c("i", {
                        staticClass: "fas",
                        class: notification.data.icon
                      })
                    ]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-10" }, [
                    _vm._v(
                      "\n                    " +
                        _vm._s(notification.data.message) +
                        "\n                "
                    )
                  ])
                ])
              ])
            ]
          )
        ]
      }),
      _vm._v(" "),
      _vm._m(0),
      _vm._v(" "),
      _vm._m(1)
    ],
    2
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "dropdown-item text-center", attrs: { href: "#" } },
      [_c("strong", [_vm._v("View all notifications")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "dropdown-item text-center", attrs: { href: "#" } },
      [_c("strong", [_vm._v("Clear all notifications")])]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-47e4e13b", module.exports)
  }
}

/***/ }),
/* 193 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(194)
/* template */
var __vue_template__ = __webpack_require__(195)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/PostHistoryComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7ff71c80", Component.options)
  } else {
    hotAPI.reload("data-v-7ff71c80", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 194 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['path'],
    data: function data() {
        return {
            historyPath: this.path + '/history',
            historyData: []
        };
    },

    methods: {
        handleClick: function handleClick() {
            var _this = this;

            if (!this.historyData.length) {
                this.fetchPostHistory().then(function (res) {
                    return res.data;
                }).then(function (data) {
                    _this.historyData = data;
                });
            }
        },
        fetchPostHistory: function fetchPostHistory() {
            return axios.get(this.historyPath);
        },
        nl2br: function nl2br(str, isXhtml) {
            var breakTag = isXhtml ? '<br />' : '<br>';
            return String(str).replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
        }
    }
});

/***/ }),
/* 195 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "button",
      {
        staticClass: "btn btn-small btn-link text-gray-300",
        attrs: { "data-toggle": "modal", "data-target": "#postHistory" },
        on: {
          click: function($event) {
            _vm.handleClick()
          }
        }
      },
      [_c("i", { staticClass: "fa fa-history" }), _vm._v("\n    History\n")]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        attrs: {
          id: "postHistory",
          tabindex: "-1",
          role: "dialog",
          "aria-labelledby": "exampleModalLongTitle",
          "aria-hidden": "true"
        }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c(
              "div",
              {
                staticClass: "modal-content m-card",
                staticStyle: { "text-transform": "none" }
              },
              [
                _vm._m(0),
                _vm._v(" "),
                _c("div", { staticClass: "modal-body" }, [
                  _c(
                    "div",
                    {
                      directives: [
                        {
                          name: "show",
                          rawName: "v-show",
                          value: !_vm.historyData.length,
                          expression: "!historyData.length"
                        }
                      ],
                      staticClass: "progress"
                    },
                    [
                      _c("div", {
                        staticClass:
                          "progress-bar progress-bar-animated progress-bar-striped bg-secondary",
                        staticStyle: { width: "100%" },
                        attrs: {
                          role: "progressbar",
                          "aria-valuenow": "100",
                          "aria-valuemin": "0",
                          "aria-valuemax": "100"
                        }
                      })
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      directives: [
                        {
                          name: "show",
                          rawName: "v-show",
                          value: _vm.historyData.length,
                          expression: "historyData.length"
                        }
                      ],
                      staticClass: "text-left"
                    },
                    _vm._l(_vm.historyData, function(post) {
                      return _c("div", { staticClass: "my-3" }, [
                        _vm._v(
                          "\n                        Edited by: " +
                            _vm._s(post.user.username)
                        ),
                        _c("br"),
                        _c("br"),
                        _vm._v("\n                        Post: "),
                        _c("span", {
                          domProps: {
                            innerHTML: _vm._s(
                              _vm.nl2br(post.old_values.body, false)
                            )
                          }
                        }),
                        _vm._v(" "),
                        _c("hr", { staticClass: "glow-default" })
                      ])
                    })
                  )
                ]),
                _vm._v(" "),
                _vm._m(1)
              ]
            )
          ]
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h5",
        { staticClass: "modal-title", attrs: { id: "exampleModalLongTitle" } },
        [_vm._v("Modal title")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "close text-white",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-label": "Close"
          }
        },
        [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-secondary",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("Close")]
      )
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7ff71c80", module.exports)
  }
}

/***/ }),
/* 196 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(197)
/* template */
var __vue_template__ = __webpack_require__(198)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/LockButtonComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6d9ae7d9", Component.options)
  } else {
    hotAPI.reload("data-v-6d9ae7d9", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 197 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['thread'],
    mounted: function mounted() {
        this.locked = this.thread.locked;
        this.path = this.thread.path + '/update';
    },
    data: function data() {
        return {
            locked: false
        };
    },

    methods: {
        handleClick: function handleClick() {
            this.toggleLock();
            axios.put(this.path, {
                'lock': this.locked
            }).then(function () {
                window.location.reload();
            });
        },
        toggleLock: function toggleLock() {
            this.locked = !this.locked;
        }
    }
});

/***/ }),
/* 198 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "button",
    {
      staticClass: "btn btn-outline-warning m-1",
      on: { click: _vm.handleClick }
    },
    [
      _c("i", {
        staticClass: "fas",
        class: _vm.locked ? "fa-lock-open" : "fa-lock",
        attrs: { "aria-hidden": "true" }
      }),
      _vm._v("\n    " + _vm._s(_vm.locked ? "Unlock" : "Lock") + "\n")
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-6d9ae7d9", module.exports)
  }
}

/***/ }),
/* 199 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(200)
/* template */
var __vue_template__ = __webpack_require__(201)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/PinButtonComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-566f49e6", Component.options)
  } else {
    hotAPI.reload("data-v-566f49e6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 200 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['thread'],
    mounted: function mounted() {
        this.pinned = this.thread.pinned;
        this.path = this.thread.path + '/update';
    },
    data: function data() {
        return {
            pinned: false,
            path: ''
        };
    },

    methods: {
        handleClick: function handleClick() {
            this.togglePin();
            axios.put(this.path, {
                'pin': this.pinned
            }).then(function () {
                window.location.reload();
            });
        },
        togglePin: function togglePin() {
            this.pinned = !this.pinned;
        }
    }
});

/***/ }),
/* 201 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "button",
    {
      staticClass: "btn btn-outline-success m-1",
      on: { click: _vm.handleClick }
    },
    [
      _c("i", {
        staticClass: "fas",
        class: _vm.pinned ? "fa-level-down-alt" : "fa-thumbtack",
        attrs: { "aria-hidden": "true" }
      }),
      _vm._v("\n    " + _vm._s(_vm.pinned ? "Unpin" : "Pin") + "\n")
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-566f49e6", module.exports)
  }
}

/***/ }),
/* 202 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(203)
/* template */
var __vue_template__ = __webpack_require__(204)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/AuthorAvatarComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-50da5f1c", Component.options)
  } else {
    hotAPI.reload("data-v-50da5f1c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 203 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['author', 'hide-small', 'use-default'],

    computed: {
        hasGraphics: function hasGraphics() {
            return this.author.graphics && this.author.graphics.avatar_url;
        },
        hideDiv: function hideDiv() {
            return !(this.hasGraphics && this.useDefault);
        }
    }
});

/***/ }),
/* 204 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "text-center",
      class: _vm.hideSmall || _vm.hideDiv ? "d-none d-md-block" : ""
    },
    [
      _vm.hasGraphics
        ? _c("img", {
            staticClass: "m-avatar img-thumbnail mb-4",
            attrs: { src: _vm.author.graphics.avatar_url, alt: "Avatar" }
          })
        : _vm._e(),
      _vm._v(" "),
      !_vm.hasGraphics && _vm.useDefault
        ? _c("img", {
            staticClass: "m-avatar img-thumbnail mb-4",
            attrs: { src: "https://via.placeholder.com/200x300", alt: "Avatar" }
          })
        : _vm._e()
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-50da5f1c", module.exports)
  }
}

/***/ }),
/* 205 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(206)
/* template */
var __vue_template__ = __webpack_require__(207)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/AuthorIconComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5438025c", Component.options)
  } else {
    hotAPI.reload("data-v-5438025c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 206 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['author', 'use-default', 'size'],

    computed: {
        hasGraphics: function hasGraphics() {
            return this.author.graphics && this.author.graphics.icon_url;
        }
    }
});

/***/ }),
/* 207 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.hasGraphics
    ? _c("img", {
        staticClass: "img-fluid img-avatar",
        attrs: { src: _vm.author.graphics.icon_url, alt: "Icon" }
      })
    : !_vm.hasGraphics && _vm.useDefault
      ? _c("img", {
          staticClass: "img-avatar",
          attrs: { src: "https://via.placeholder.com/150", alt: "Icon" }
        })
      : _vm._e()
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-5438025c", module.exports)
  }
}

/***/ }),
/* 208 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(209)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(214)
/* template */
var __vue_template__ = __webpack_require__(215)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/CharacterFilterComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e40c099a", Component.options)
  } else {
    hotAPI.reload("data-v-e40c099a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 209 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(210);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(212)("f99890b6", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-e40c099a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/sass-loader/lib/loader.js!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./CharacterFilterComponent.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-e40c099a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/sass-loader/lib/loader.js!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./CharacterFilterComponent.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 210 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(211)(false);
// imports


// module
exports.push([module.i, "\nul.filtered-list {\n  margin: 2em 0;\n}\nul.filtered-list li {\n    list-style: none;\n    margin: 1em 0;\n}\nul.filtered-list li i {\n      display: inline-block;\n      width: 2em;\n      margin-left: 0.5em;\n}\n", ""]);

// exports


/***/ }),
/* 211 */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),
/* 212 */
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__(213)

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}
var options = null
var ssrIdKey = 'data-vue-ssr-id'

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction, _options) {
  isProduction = _isProduction

  options = _options || {}

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[' + ssrIdKey + '~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }
  if (options.ssrId) {
    styleElement.setAttribute(ssrIdKey, obj.id)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ }),
/* 213 */
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ }),
/* 214 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['list'],

    data: function data() {
        return {
            query: ""
        };
    },


    computed: {
        filtered_list: function filtered_list() {
            var query = this.query.toLowerCase(),
                allList = this.list || [],
                newList = [];

            if (query && allList.length) {
                newList = allList.filter(function (item) {
                    return item.username.toLowerCase().indexOf(query) > -1;
                });
            }

            return newList;
        }
    },

    methods: {
        edit_character: function edit_character(character) {
            return "/admin/character/" + character + "/edit";
        },
        faction_class: function faction_class(faction) {
            return ("text-" + faction).toLowerCase();
        },
        faction_icon: function faction_icon(faction) {
            return "fas fa-" + faction;
        }
    }
});

/***/ }),
/* 215 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "form-group form-row" }, [
    _c(
      "label",
      {
        staticClass: "m-fancy-title text-uppercase col-form-label col-md-2",
        attrs: { for: "query" }
      },
      [_vm._v("Search For Character: ")]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "col-md-10" }, [
      _c("input", {
        directives: [
          {
            name: "model",
            rawName: "v-model",
            value: _vm.query,
            expression: "query"
          }
        ],
        staticClass: "form-control",
        attrs: { type: "text", id: "query" },
        domProps: { value: _vm.query },
        on: {
          input: function($event) {
            if ($event.target.composing) {
              return
            }
            _vm.query = $event.target.value
          }
        }
      }),
      _vm._v(" "),
      _vm.filtered_list.length
        ? _c(
            "ul",
            { staticClass: "filtered-list" },
            _vm._l(_vm.filtered_list, function(item) {
              return _c("li", { staticClass: "m-fancy-title text-uppercase" }, [
                _c("h5", [
                  _c(
                    "a",
                    {
                      class: _vm.faction_class(item.faction.name),
                      attrs: { href: _vm.edit_character(item.slug) }
                    },
                    [
                      _c("i", { class: _vm.faction_icon(item.faction.icon) }),
                      _vm._v(" " + _vm._s(item.username))
                    ]
                  )
                ])
              ])
            })
          )
        : _vm._e()
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-e40c099a", module.exports)
  }
}

/***/ }),
/* 216 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(217)
/* template */
var __vue_template__ = __webpack_require__(218)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/OccupationClaimsComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0b3f5294", Component.options)
  } else {
    hotAPI.reload("data-v-0b3f5294", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 217 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['current', 'old'],

    data: function data() {
        return {
            selected_industry: '',
            selected_job: '',
            other_job: '',
            industries: [],
            jobs: []
        };
    },
    created: function created() {
        this.fetchIndustryList().then(this.setOccupation);
    },


    methods: {
        fetchIndustryList: function fetchIndustryList() {
            var _this = this;

            var factionId = this.faction_id;
            var url = '/industry?faction=' + factionId;

            return axios.get(url).then(function (res) {
                return _this.industries = res.data;
            }).catch(function (err) {
                return console.error(err);
            });
        },
        fetchJobsList: function fetchJobsList() {
            var _this2 = this;

            var industryId = this.selected_industry;
            var url = '/industry/jobs?industry=' + industryId;

            console.log("fetching jobs");
            return axios.get(url).then(function (res) {
                return _this2.jobs = res.data;
            }).catch(function (err) {
                return console.error(err);
            });
        },
        setOccupation: function setOccupation() {
            if (this.old || this.current) {
                this.selected_industry = this.old.industry || this.current.job.industry_id;
            }
        },
        setJob: function setJob() {
            if (this.old || this.current) {
                this.selected_job = this.old.job || this.current.job.id;
                this.other_job = this.old.other_job || this.current.other;
            }
        }
    },

    watch: {
        faction_id: function faction_id() {
            this.fetchIndustryList();
        },
        selected_industry: function selected_industry() {
            this.fetchJobsList().then(this.setJob);
        },
        jobs: function jobs() {
            this.selected_job = '';
        }
    },

    computed: {
        industry_list: function industry_list() {
            return this.industries;
        },
        faction_id: function faction_id() {
            return this.$store.getters.faction;
        },
        jobs_list: function jobs_list() {
            return this.jobs;
        },
        industry_description: function industry_description() {
            var industry_id = this.selected_industry;
            var industry = this.industry_list.length && industry_id ? this.industry_list.find(function (industry) {
                return industry.id == industry_id;
            }) : { id: '', description: '' };

            return industry ? industry.description : '';
        },
        job_description: function job_description() {
            var job_id = this.selected_job;
            var job = this.jobs_list.length && job_id ? this.jobs_list.find(function (job) {
                return job.id == job_id;
            }) : { id: '', description: '' };

            return job ? job.description : '';
        },
        showOther: function showOther() {
            var job_id = this.selected_job;
            var job = this.jobs_list.length && job_id ? this.jobs_list.find(function (job) {
                return job.id == job_id;
            }) : { id: '', name: '' };

            return job ? job.name == 'Other' : '';
        }
    }

});

/***/ }),
/* 218 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container-fluid px-0" }, [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-4" }, [
        _c(
          "select",
          {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.selected_industry,
                expression: "selected_industry"
              }
            ],
            staticClass: "form-control form-control-lg",
            attrs: { name: "industry", id: "industry" },
            on: {
              change: function($event) {
                var $$selectedVal = Array.prototype.filter
                  .call($event.target.options, function(o) {
                    return o.selected
                  })
                  .map(function(o) {
                    var val = "_value" in o ? o._value : o.value
                    return val
                  })
                _vm.selected_industry = $event.target.multiple
                  ? $$selectedVal
                  : $$selectedVal[0]
              }
            }
          },
          [
            _c("option", { attrs: { value: "", disabled: "" } }, [
              _vm._v("Please Select Industry")
            ]),
            _vm._v(" "),
            _vm._l(_vm.industry_list, function(myindustry) {
              return _c("option", { domProps: { value: myindustry.id } }, [
                _vm._v(
                  "\n                " +
                    _vm._s(myindustry.name) +
                    "\n            "
                )
              ])
            })
          ],
          2
        ),
        _vm._v(" "),
        _c("p", [_vm._v(_vm._s(_vm.industry_description))])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c(
          "select",
          {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.selected_job,
                expression: "selected_job"
              }
            ],
            staticClass: "form-control form-control-lg",
            attrs: { name: "job_id", id: "industry_job" },
            on: {
              change: function($event) {
                var $$selectedVal = Array.prototype.filter
                  .call($event.target.options, function(o) {
                    return o.selected
                  })
                  .map(function(o) {
                    var val = "_value" in o ? o._value : o.value
                    return val
                  })
                _vm.selected_job = $event.target.multiple
                  ? $$selectedVal
                  : $$selectedVal[0]
              }
            }
          },
          [
            _c("option", { attrs: { value: "", disabled: "" } }, [
              _vm._v("Please Select Job")
            ]),
            _vm._v(" "),
            _vm._l(_vm.jobs_list, function(myjob) {
              return _c("option", { domProps: { value: myjob.id } }, [
                _vm._v(
                  "\n                    " +
                    _vm._s(myjob.name) +
                    "\n                "
                )
              ])
            })
          ],
          2
        ),
        _vm._v(" "),
        _c("p", [_vm._v(_vm._s(_vm.job_description))])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _vm.showOther
          ? _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.other_job,
                  expression: "other_job"
                }
              ],
              staticClass: "form-control form-control-lg",
              attrs: {
                type: "text",
                placeholder: "Enter job",
                required: "",
                name: "job_other",
                id: "other_job"
              },
              domProps: { value: _vm.other_job },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.other_job = $event.target.value
                }
              }
            })
          : _vm._e(),
        _vm._v(" "),
        _vm.showOther ? _c("p", [_vm._v("Specific Job Title")]) : _vm._e()
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-0b3f5294", module.exports)
  }
}

/***/ }),
/* 219 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(220)
/* template */
var __vue_template__ = __webpack_require__(221)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/FactionContainer.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7f6cf17c", Component.options)
  } else {
    hotAPI.reload("data-v-7f6cf17c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 220 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['factions', 'current_faction', 'origin_faction'],

    methods: {
        handleOriginFaction: function handleOriginFaction(faction_id) {
            this.$store.commit('updateOriginFaction', faction_id);
        },
        handleCurrentFaction: function handleCurrentFaction(faction_id) {
            this.$store.commit('updateFaction', faction_id);
        }
    }
});

/***/ }),
/* 221 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("span", [
    _c(
      "div",
      { staticClass: "form-group mb-5" },
      [
        _c(
          "label",
          { staticClass: "control-label", attrs: { for: "origin_faction" } },
          [_vm._v("Faction of Origin:")]
        ),
        _vm._v(" "),
        _c("faction-select", {
          attrs: {
            name: "origin_faction",
            id: "origin_faction",
            factions: _vm.factions,
            faction: _vm.origin_faction
          },
          on: { "select:faction": _vm.handleOriginFaction }
        })
      ],
      1
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "form-group mb-5" },
      [
        _c(
          "label",
          { staticClass: "control-label", attrs: { for: "faction" } },
          [_vm._v("Current Faction:")]
        ),
        _vm._v(" "),
        _c("faction-select", {
          attrs: {
            name: "faction",
            id: "faction",
            factions: _vm.factions,
            faction: _vm.current_faction
          },
          on: { "select:faction": _vm.handleCurrentFaction }
        })
      ],
      1
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7f6cf17c", module.exports)
  }
}

/***/ }),
/* 222 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(223)
/* template */
var __vue_template__ = __webpack_require__(224)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/FactionSelectComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-f6cfbbc8", Component.options)
  } else {
    hotAPI.reload("data-v-f6cfbbc8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 223 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['factions', 'faction'],

    data: function data() {
        return {
            selected_faction: ""
        };
    },
    created: function created() {
        if (this.faction) this.selected_faction = this.faction;

        this.$emit('select:faction', this.selected_faction);
    },


    methods: {
        handleChange: function handleChange() {
            this.$emit('select:faction', this.selected_faction);
        }
    }

});

/***/ }),
/* 224 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "select",
    {
      directives: [
        {
          name: "model",
          rawName: "v-model",
          value: _vm.selected_faction,
          expression: "selected_faction"
        }
      ],
      staticClass: "form-control form-control-lg",
      attrs: { required: "" },
      on: {
        change: [
          function($event) {
            var $$selectedVal = Array.prototype.filter
              .call($event.target.options, function(o) {
                return o.selected
              })
              .map(function(o) {
                var val = "_value" in o ? o._value : o.value
                return val
              })
            _vm.selected_faction = $event.target.multiple
              ? $$selectedVal
              : $$selectedVal[0]
          },
          _vm.handleChange
        ]
      }
    },
    [
      _c("option", { attrs: { disabled: "", value: "" } }, [
        _vm._v("Please Choose One")
      ]),
      _vm._v(" "),
      _vm._l(_vm.factions, function(faction) {
        return _c("option", { domProps: { value: faction.id } }, [
          _vm._v(_vm._s(faction.name))
        ])
      })
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-f6cfbbc8", module.exports)
  }
}

/***/ }),
/* 225 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(226)
/* template */
var __vue_template__ = __webpack_require__(227)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/CategoryEditComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5a6604e4", Component.options)
  } else {
    hotAPI.reload("data-v-5a6604e4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 226 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['categories'],

    data: function data() {
        return {
            category_id: '',
            default_category: {
                id: '',
                name: '',
                description: '',
                private: false
            }
        };
    },


    computed: {
        selected_category: function selected_category() {
            return this._selectCategory() || this.default_category;
        }
    },

    methods: {
        _selectCategory: function _selectCategory() {
            var _this = this;

            return this.categories.find(function (category) {
                return category.id === _this.category_id;
            });
        }
    }
});

/***/ }),
/* 227 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "card-body container-fluid" }, [
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        { staticClass: "col-sm-2 control-label", attrs: { for: "name" } },
        [_vm._v("Select Category:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "select",
          {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.category_id,
                expression: "category_id"
              }
            ],
            attrs: { name: "category" },
            on: {
              change: function($event) {
                var $$selectedVal = Array.prototype.filter
                  .call($event.target.options, function(o) {
                    return o.selected
                  })
                  .map(function(o) {
                    var val = "_value" in o ? o._value : o.value
                    return val
                  })
                _vm.category_id = $event.target.multiple
                  ? $$selectedVal
                  : $$selectedVal[0]
              }
            }
          },
          [
            _c("option", { attrs: { value: "", disabled: "" } }, [
              _vm._v("Please Select a Category")
            ]),
            _vm._v(" "),
            _vm._l(_vm.categories, function(category) {
              return _c("option", { domProps: { value: category.id } }, [
                _vm._v(_vm._s(category.name))
              ])
            })
          ],
          2
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        { staticClass: "col-sm-2 control-label", attrs: { for: "name" } },
        [_vm._v("Category Name:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.selected_category.name,
              expression: "selected_category.name"
            }
          ],
          staticClass: "form-control",
          attrs: {
            type: "text",
            name: "name",
            id: "name",
            placeholder: "Category Name"
          },
          domProps: { value: _vm.selected_category.name },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.$set(_vm.selected_category, "name", $event.target.value)
            }
          }
        })
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c("label", { staticClass: "col-sm-2 control-label" }, [
        _vm._v("Category Settings:")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c("div", { staticClass: "form-check" }, [
          _c("label", { staticClass: "form-check-label" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.selected_category.private,
                  expression: "selected_category.private"
                }
              ],
              staticClass: "form-check-input",
              attrs: { name: "private", type: "checkbox" },
              domProps: {
                checked: Array.isArray(_vm.selected_category.private)
                  ? _vm._i(_vm.selected_category.private, null) > -1
                  : _vm.selected_category.private
              },
              on: {
                change: function($event) {
                  var $$a = _vm.selected_category.private,
                    $$el = $event.target,
                    $$c = $$el.checked ? true : false
                  if (Array.isArray($$a)) {
                    var $$v = null,
                      $$i = _vm._i($$a, $$v)
                    if ($$el.checked) {
                      $$i < 0 &&
                        _vm.$set(
                          _vm.selected_category,
                          "private",
                          $$a.concat([$$v])
                        )
                    } else {
                      $$i > -1 &&
                        _vm.$set(
                          _vm.selected_category,
                          "private",
                          $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                        )
                    }
                  } else {
                    _vm.$set(_vm.selected_category, "private", $$c)
                  }
                }
              }
            }),
            _vm._v(
              "\n                        Private/Hidden\n                    "
            )
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        {
          staticClass: "col-sm-2 control-label",
          attrs: { for: "description" }
        },
        [_vm._v("Category Description:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "textarea",
          {
            staticClass: "form-control",
            attrs: {
              name: "description",
              id: "description",
              placeholder: "Category description",
              rows: "5"
            }
          },
          [_vm._v(_vm._s(_vm.selected_category.description))]
        )
      ])
    ]),
    _vm._v(" "),
    _vm._m(0)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-sm-2" }),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "button",
          { staticClass: "btn btn-primary", attrs: { type: "submit" } },
          [_vm._v("Edit Category")]
        )
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-5a6604e4", module.exports)
  }
}

/***/ }),
/* 228 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(229)
/* template */
var __vue_template__ = __webpack_require__(230)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/ForumEditComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-cc61a02e", Component.options)
  } else {
    hotAPI.reload("data-v-cc61a02e", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 229 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['categories', 'forums'],

    data: function data() {
        return {
            category_id: '',
            default_category: {
                id: '',
                name: '',
                description: '',
                private: false
            },
            forum_id: '',
            default_forum: {
                id: '',
                category_id: '',
                name: '',
                description: '',
                ic: false,
                private: false
            }
        };
    },


    computed: {
        selected_category: function selected_category() {
            return this._selectCategory() || this.default_category;
        },
        selected_forum: function selected_forum() {
            return this._selectForum() || this.default_forum;
        }
    },

    methods: {
        _selectCategory: function _selectCategory() {
            var _this = this;

            return this.categories.find(function (category) {
                return category.id === _this.selected_forum.category_id;
            });
        },
        _selectForum: function _selectForum() {
            var _this2 = this;

            return this.forums.find(function (forum) {
                return forum.id === _this2.forum_id;
            });
        }
    }
});

/***/ }),
/* 230 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "card-body container-fluid" }, [
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        { staticClass: "col-sm-2 control-label", attrs: { for: "name" } },
        [_vm._v("Select Forum:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "select",
          {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.forum_id,
                expression: "forum_id"
              }
            ],
            attrs: { name: "forum" },
            on: {
              change: function($event) {
                var $$selectedVal = Array.prototype.filter
                  .call($event.target.options, function(o) {
                    return o.selected
                  })
                  .map(function(o) {
                    var val = "_value" in o ? o._value : o.value
                    return val
                  })
                _vm.forum_id = $event.target.multiple
                  ? $$selectedVal
                  : $$selectedVal[0]
              }
            }
          },
          [
            _c("option", { attrs: { value: "", disabled: "" } }, [
              _vm._v("Please Select a Forum")
            ]),
            _vm._v(" "),
            _vm._l(_vm.forums, function(forum) {
              return _c("option", { domProps: { value: forum.id } }, [
                _vm._v(_vm._s(forum.name))
              ])
            })
          ],
          2
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        { staticClass: "col-sm-2 control-label", attrs: { for: "category" } },
        [_vm._v("Category Name:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "select",
          {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.selected_category.id,
                expression: "selected_category.id"
              }
            ],
            attrs: { name: "category" },
            on: {
              change: function($event) {
                var $$selectedVal = Array.prototype.filter
                  .call($event.target.options, function(o) {
                    return o.selected
                  })
                  .map(function(o) {
                    var val = "_value" in o ? o._value : o.value
                    return val
                  })
                _vm.$set(
                  _vm.selected_category,
                  "id",
                  $event.target.multiple ? $$selectedVal : $$selectedVal[0]
                )
              }
            }
          },
          [
            _c("option", { attrs: { value: "", disabled: "" } }, [
              _vm._v("Please Select a Category")
            ]),
            _vm._v(" "),
            _vm._l(_vm.categories, function(category) {
              return _c("option", { domProps: { value: category.id } }, [
                _vm._v(_vm._s(category.name))
              ])
            })
          ],
          2
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        { staticClass: "col-sm-2 control-label", attrs: { for: "name" } },
        [_vm._v("Forum Name:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.selected_forum.name,
              expression: "selected_forum.name"
            }
          ],
          staticClass: "form-control",
          attrs: {
            type: "text",
            name: "name",
            id: "name",
            placeholder: "Forum Name"
          },
          domProps: { value: _vm.selected_forum.name },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.$set(_vm.selected_forum, "name", $event.target.value)
            }
          }
        })
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c("label", { staticClass: "col-sm-2 control-label" }, [
        _vm._v("Forum Settings:")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c("div", { staticClass: "form-check" }, [
          _c("label", { staticClass: "form-check-label" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.selected_forum.private,
                  expression: "selected_forum.private"
                }
              ],
              staticClass: "form-check-input",
              attrs: { name: "private", type: "checkbox" },
              domProps: {
                checked: Array.isArray(_vm.selected_forum.private)
                  ? _vm._i(_vm.selected_forum.private, null) > -1
                  : _vm.selected_forum.private
              },
              on: {
                change: function($event) {
                  var $$a = _vm.selected_forum.private,
                    $$el = $event.target,
                    $$c = $$el.checked ? true : false
                  if (Array.isArray($$a)) {
                    var $$v = null,
                      $$i = _vm._i($$a, $$v)
                    if ($$el.checked) {
                      $$i < 0 &&
                        _vm.$set(
                          _vm.selected_forum,
                          "private",
                          $$a.concat([$$v])
                        )
                    } else {
                      $$i > -1 &&
                        _vm.$set(
                          _vm.selected_forum,
                          "private",
                          $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                        )
                    }
                  } else {
                    _vm.$set(_vm.selected_forum, "private", $$c)
                  }
                }
              }
            }),
            _vm._v("\n                    Private/Hidden\n                ")
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "form-check" }, [
          _c("label", { staticClass: "form-check-label" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.selected_forum.ic,
                  expression: "selected_forum.ic"
                }
              ],
              staticClass: "form-check-input",
              attrs: { name: "ic", type: "checkbox" },
              domProps: {
                checked: Array.isArray(_vm.selected_forum.ic)
                  ? _vm._i(_vm.selected_forum.ic, null) > -1
                  : _vm.selected_forum.ic
              },
              on: {
                change: function($event) {
                  var $$a = _vm.selected_forum.ic,
                    $$el = $event.target,
                    $$c = $$el.checked ? true : false
                  if (Array.isArray($$a)) {
                    var $$v = null,
                      $$i = _vm._i($$a, $$v)
                    if ($$el.checked) {
                      $$i < 0 &&
                        _vm.$set(_vm.selected_forum, "ic", $$a.concat([$$v]))
                    } else {
                      $$i > -1 &&
                        _vm.$set(
                          _vm.selected_forum,
                          "ic",
                          $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                        )
                    }
                  } else {
                    _vm.$set(_vm.selected_forum, "ic", $$c)
                  }
                }
              }
            }),
            _vm._v("\n                    In-Character\n                ")
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "form-group row" }, [
      _c(
        "label",
        {
          staticClass: "col-sm-2 control-label",
          attrs: { for: "description" }
        },
        [_vm._v("Forum Description:")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "textarea",
          {
            staticClass: "form-control",
            attrs: {
              name: "description",
              id: "description",
              placeholder: "Forum description",
              rows: "5"
            }
          },
          [_vm._v(_vm._s(_vm.selected_forum.description))]
        )
      ])
    ]),
    _vm._v(" "),
    _vm._m(0)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-sm-2" }),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-10" }, [
        _c(
          "button",
          { staticClass: "btn btn-primary", attrs: { type: "submit" } },
          [_vm._v("Edit Forum")]
        )
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-cc61a02e", module.exports)
  }
}

/***/ }),
/* 231 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(232)
/* template */
var __vue_template__ = __webpack_require__(233)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/PostICTimeComponent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-54c87caf", Component.options)
  } else {
    hotAPI.reload("data-v-54c87caf", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 232 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['old', 'period', 'current', 'asof', 'years', 'months'],

    data: function data() {
        return {
            show: true,
            ic_day: 1,
            ic_month: '',
            ic_year: '',
            monthWord: '',

            use_current: true,
            use_period: true
        };
    },


    computed: {
        days: function days() {
            var days = [];
            for (var i = 1; i <= 31; i++) {
                days.push(i);
            }
            return days;
        },
        cmpMonths: function cmpMonths() {
            var _this = this;

            var months = this.months;
            if (this.use_period) {
                months = this.months.filter(function (monthWord) {
                    return (
                        // if the month is between the start and end of period, return true
                        _this._showMonthInt(monthWord) >= _this.period.startMonth && _this._showMonthInt(monthWord) <= _this.period.endMonth
                    );
                });
            }

            return months;
        }
    },

    created: function created() {
        if (this.old) {
            this.use_current = false;
            this.use_period = false;

            this.monthWord = this._showMonthWord(this.old.ic_month);
            this.ic_day = this.old.ic_day;
            this.ic_year = this.old.ic_year;
        }
    },
    mounted: function mounted() {
        if (this.use_current) this._setTime();
    },


    watch: {
        use_current: function use_current(newVal) {
            if (newVal) {
                this._setTime();
            }
        },
        monthWord: function monthWord(newVal) {
            if (newVal) {
                this.ic_month = this._showMonthInt(newVal);
            }
        }
    },

    methods: {
        handleClick: function handleClick(evt) {
            evt.preventDefault();
            this._toggleDisplay();
        },
        _toggleDisplay: function _toggleDisplay() {
            this.show = !this.show;
        },
        _showMonthWord: function _showMonthWord(monthInt) {
            return this.months[monthInt - 1];
        },
        _showMonthInt: function _showMonthInt(monthWord) {
            return this.months.indexOf(monthWord) + 1;
        },
        _setTime: function _setTime() {
            this.monthWord = this._showMonthWord(this.current.currentMonth);
            this.ic_day = this.current.currentDay;
            this.ic_year = this.current.currentYear;
        }
    }

});

/***/ }),
/* 233 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "row" }, [
    _c("div", { staticClass: "col-md-2" }, [
      _c("label", [_vm._v("IC Time:")]),
      _vm._v(" "),
      _c(
        "a",
        {
          staticClass: "font-xs d-block mb-3",
          attrs: { href: "#" },
          on: { click: _vm.handleClick }
        },
        [_vm._v("[ " + _vm._s(_vm.show ? "Hide" : "Show") + " IC Time ]")]
      ),
      _vm._v(" "),
      _vm.show
        ? _c("div", { staticClass: "form-group" }, [
            _c(
              "label",
              {
                staticClass:
                  "switch switch-sm switch-default switch-pill switch-primary"
              },
              [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.use_current,
                      expression: "use_current"
                    }
                  ],
                  staticClass: "switch-input",
                  attrs: { type: "checkbox", id: "use_current" },
                  domProps: {
                    checked: Array.isArray(_vm.use_current)
                      ? _vm._i(_vm.use_current, null) > -1
                      : _vm.use_current
                  },
                  on: {
                    change: function($event) {
                      var $$a = _vm.use_current,
                        $$el = $event.target,
                        $$c = $$el.checked ? true : false
                      if (Array.isArray($$a)) {
                        var $$v = null,
                          $$i = _vm._i($$a, $$v)
                        if ($$el.checked) {
                          $$i < 0 && (_vm.use_current = $$a.concat([$$v]))
                        } else {
                          $$i > -1 &&
                            (_vm.use_current = $$a
                              .slice(0, $$i)
                              .concat($$a.slice($$i + 1)))
                        }
                      } else {
                        _vm.use_current = $$c
                      }
                    }
                  }
                }),
                _vm._v(" "),
                _c("span", { staticClass: "switch-label" }),
                _vm._v(" "),
                _c("span", { staticClass: "switch-handle" })
              ]
            ),
            _vm._v(" "),
            _c(
              "label",
              { staticClass: "font-xs", attrs: { for: "use_current" } },
              [_vm._v("Use Current Time")]
            )
          ])
        : _vm._e(),
      _vm._v(" "),
      _vm.show
        ? _c("div", { staticClass: "form-group" }, [
            _c(
              "label",
              {
                staticClass:
                  "switch switch-sm switch-default switch-pill switch-primary"
              },
              [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.use_period,
                      expression: "use_period"
                    }
                  ],
                  staticClass: "switch-input",
                  attrs: { type: "checkbox", id: "use_period" },
                  domProps: {
                    checked: Array.isArray(_vm.use_period)
                      ? _vm._i(_vm.use_period, null) > -1
                      : _vm.use_period
                  },
                  on: {
                    change: function($event) {
                      var $$a = _vm.use_period,
                        $$el = $event.target,
                        $$c = $$el.checked ? true : false
                      if (Array.isArray($$a)) {
                        var $$v = null,
                          $$i = _vm._i($$a, $$v)
                        if ($$el.checked) {
                          $$i < 0 && (_vm.use_period = $$a.concat([$$v]))
                        } else {
                          $$i > -1 &&
                            (_vm.use_period = $$a
                              .slice(0, $$i)
                              .concat($$a.slice($$i + 1)))
                        }
                      } else {
                        _vm.use_period = $$c
                      }
                    }
                  }
                }),
                _vm._v(" "),
                _c("span", { staticClass: "switch-label" }),
                _vm._v(" "),
                _c("span", { staticClass: "switch-handle" })
              ]
            ),
            _vm._v(" "),
            _c(
              "label",
              { staticClass: "font-xs", attrs: { for: "use_period" } },
              [_vm._v("Use Period")]
            )
          ])
        : _vm._e()
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "col-md-10" }, [
      !_vm.show
        ? _c("div", [_vm._v("Hidden")])
        : _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "form-group" }, [
                _c(
                  "label",
                  {
                    staticClass: "control-label m-fancy-title text-uppercase",
                    attrs: { for: "monthWord" }
                  },
                  [_vm._v("Month:")]
                ),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.ic_month,
                      expression: "ic_month"
                    }
                  ],
                  attrs: { name: "ic_month", type: "hidden" },
                  domProps: { value: _vm.ic_month },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.ic_month = $event.target.value
                    }
                  }
                }),
                _vm._v(" "),
                _c(
                  "select",
                  {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.monthWord,
                        expression: "monthWord"
                      }
                    ],
                    staticClass: "form-control form-control-lg",
                    attrs: { id: "monthWord" },
                    on: {
                      change: function($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function(o) {
                            return o.selected
                          })
                          .map(function(o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.monthWord = $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      }
                    }
                  },
                  [
                    _c("option", { attrs: { disabled: "", selected: "" } }, [
                      _vm._v("Please Choose One")
                    ]),
                    _vm._v(" "),
                    _vm._l(_vm.cmpMonths, function(month) {
                      return _c("option", [_vm._v(" " + _vm._s(month))])
                    })
                  ],
                  2
                )
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "form-group" }, [
                _c(
                  "label",
                  {
                    staticClass: "control-label m-fancy-title text-uppercase",
                    attrs: { for: "ic_day" }
                  },
                  [_vm._v("Day:")]
                ),
                _vm._v(" "),
                _c(
                  "select",
                  {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.ic_day,
                        expression: "ic_day"
                      }
                    ],
                    staticClass: "form-control form-control-lg",
                    attrs: { name: "ic_day", id: "ic_day" },
                    on: {
                      change: function($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function(o) {
                            return o.selected
                          })
                          .map(function(o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.ic_day = $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      }
                    }
                  },
                  [
                    _c("option", { attrs: { disabled: "", selected: "" } }, [
                      _vm._v("Please Choose One")
                    ]),
                    _vm._v(" "),
                    _vm._l(_vm.days, function(day) {
                      return _c("option", [_vm._v(" " + _vm._s(day))])
                    })
                  ],
                  2
                )
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "form-group" }, [
                _c(
                  "label",
                  {
                    staticClass: "control-label m-fancy-title text-uppercase",
                    attrs: { for: "ic_year" }
                  },
                  [_vm._v("Year:")]
                ),
                _vm._v(" "),
                _c(
                  "select",
                  {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.ic_year,
                        expression: "ic_year"
                      }
                    ],
                    staticClass: "form-control form-control-lg",
                    attrs: { name: "ic_year", id: "ic_year" },
                    on: {
                      change: function($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function(o) {
                            return o.selected
                          })
                          .map(function(o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.ic_year = $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      }
                    }
                  },
                  [
                    _c("option", { attrs: { disabled: "", selected: "" } }, [
                      _vm._v("Please Choose One")
                    ]),
                    _vm._v(" "),
                    _vm._l(_vm.years, function(_year) {
                      return _c("option", [_vm._v(" " + _vm._s(_year))])
                    })
                  ],
                  2
                )
              ])
            ])
          ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-54c87caf", module.exports)
  }
}

/***/ }),
/* 234 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
],[146]);
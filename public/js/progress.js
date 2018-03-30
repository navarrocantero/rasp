'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.loadProgressBar = loadProgressBar;

require('nprogress/nprogress.css');

var _nprogress = require('nprogress');

var _nprogress2 = _interopRequireDefault(_nprogress);

var _axios = require('axios');

var _axios2 = _interopRequireDefault(_axios);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var calculatePercentage = function calculatePercentage(loaded, total) {
    return Math.floor(loaded * 1.0) / total;
};

function loadProgressBar(config) {

    var requestsCounter = 0;

    var setupStartProgress = function setupStartProgress() {
        _axios2.default.interceptors.request.use(function (config) {
            requestsCounter++;
            _nprogress2.default.start();
            return config;
        });
    };

    var setupUpdateProgress = function setupUpdateProgress() {
        var update = function update(e) {
            return _nprogress2.default.inc(calculatePercentage(e.loaded, e.total));
        };
        _axios2.default.defaults.onDownloadProgress = update;
        _axios2.default.defaults.onUploadProgress = update;
    };

    var setupStopProgress = function setupStopProgress() {
        var responseFunc = function responseFunc(response) {
            if (--requestsCounter === 0) _nprogress2.default.done();
            return response;
        };

        var errorFunc = function errorFunc(error) {
            if (--requestsCounter === 0) _nprogress2.default.done();
            return Promise.reject(error);
        };

        _axios2.default.interceptors.response.use(responseFunc, errorFunc);
    };

    _nprogress2.default.configure(config);
    setupStartProgress();
    setupUpdateProgress();
    setupStopProgress();
}
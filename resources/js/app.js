import "./bootstrap";
import NProgress from "nprogress";
import "nprogress/nprogress.css"; // Jika pakai NProgress

// atau untuk Pace.js
import "pace-js";
import "pace-js/themes/blue/pace-theme-flash.css";

document.addEventListener("turbo:visit", function () {
    NProgress.start(); // Untuk NProgress
});

document.addEventListener("turbo:load", function () {
    NProgress.done();
});

document.addEventListener("turbo:render", function () {
    NProgress.done();
});

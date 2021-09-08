const mix = require("laravel-mix");

mix.sass("resources/sass/app.scss", "public/assets/css/app.min.css").options({
    processCssUrls: false,
});

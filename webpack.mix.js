const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");

var publicPath = "../../../public/vendor/aghaeian/isbank/assets";


mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

    mix.copy(__dirname + "/src/Resources/assets/images", publicPath + "/images/");

if (mix.inProduction()) {
    mix.version();
}

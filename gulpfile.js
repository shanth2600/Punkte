var elixir = require('laravel-elixir');

// Get Bower Directory Path (elixir.json)
var components = elixir.config.bowerDir;

// Get Bower Package Paths
var paths = {
   'bootstrap': components + '/bootstrap/dist/',
   'vue': components + '/vue/dist/',
   'jquery': components + '/jquery/dist/',
   'chart': components + '/Chart.js/dist/',
};

// Begin Elixir Project
elixir(function(mix) {

  // Add Styles to project
  mix.copy(paths.bootstrap + 'css/bootstrap.min.css', 'resources/style/bootstrap.min.css')
  	 .copy(paths.vue + 'vue.js', 'resources/scripts/vue.js')
  	 .copy(paths.jquery + 'jquery.js', 'resources/scripts/jquery.js')
  	 .copy(paths.chart + 'Chart.js', 'resources/scripts/Chart.js');


  // Merge Styles
  mix.styles([
    'bootstrap.min.css',
    'style.css'
  ],'public/css/style.css', 'resources/style/');

// Merge  my Scripts
  mix.scripts([
    'script.js'
  ],'public/js/scripts.js', 'resources/scripts/');

  // Merge  Vendor Scripts
  mix.scripts([
    'vue.js',
    'jquery.js',
    'Chart.js'
  ],'public/js/vendor.js', 'resources/scripts/');


});

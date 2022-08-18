const mix = require('laravel-mix');


 

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 
  
mix.styles([
    'node_modules/vuexy/app-assets/vendors/css/vendors.min.css',
    'node_modules/vuexy/app-assets/vendors/css/charts/apexcharts.css',
    'node_modules/vuexy/app-assets/vendors/css/extensions/toastr.min.css',
    'node_modules/vuexy/app-assets/css/bootstrap.min.css',
    'node_modules/vuexy/app-assets/css/bootstrap-extended.min.css',
    'node_modules/vuexy/app-assets/css/colors.min.css',
    'node_modules/vuexy/app-assets/css/components.min.css',
    'node_modules/vuexy/app-assets/css/themes/dark-layout.min.css',
    'node_modules/vuexy/app-assets/css/themes/bordered-layout.min.css',
    'node_modules/vuexy/app-assets/css/themes/semi-dark-layout.min.css',
    'node_modules/vuexy/app-assets/css/core/menu/menu-types/vertical-menu.min.css',
    'node_modules/vuexy/app-assets/css/pages/dashboard-ecommerce.min.css',
    'node_modules/vuexy/app-assets/css/plugins/charts/chart-apex.min.css',
    'node_modules/vuexy/app-assets/css/plugins/extensions/ext-component-toastr.min.css',
  
    //'node_modules/@mdi/font/css/materialdesignicons.css',
    'node_modules/otika/assets/bundles/datatables/datatables.min.css',
    'node_modules/otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
    'node_modules/otika/assets/bundles/bootstrap-daterangepicker/daterangepicker.css',
    'node_modules/otika/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
    'node_modules/otika/assets/bundles/jquery-selectric/selectric.css',
    'node_modules/otika/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    'node_modules/otika/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
    'node_modules/otika/assets/bundles/select2/dist/css/select2.min.css',
    'node_modules/otika/assets/bundles/lightgallery/dist/css/lightgallery.css',
    'node_modules/vuexy/app-assets/vendors/css/calendars/fullcalendar.min.css',
    'node_modules/vuexy/app-assets/vendors/css/forms/select/select2.min.css',
    'node_modules/vuexy/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css',
    'node_modules/vuexy/app-assets/css/pages/app-calendar.css',
    'node_modules/vuexy/app-assets/css/plugins/forms/form-validation.css',
    'node_modules/vuexy/app-assets/vendors/css/pickers/pickadate/pickadate.css',
    'node_modules/vuexy/app-assets/css/plugins/forms/pickers/form-pickadate.css',
    'node_modules/viho/assets/css/date-picker.css',
    'node_modules/viho/assets/css/color-1.css',
    'node_modules/viho/assets/css/responsive.css',

     'node_modules/vuexy/assets/css/style.css',

    
    ], 'public/css/app.css');


mix.scripts([

    'node_modules/vuexy/app-assets/vendors/js/vendors.min.js',
    'node_modules/vuexy/app-assets/js/core/app-menu.js',
    'node_modules/otika/assets/bundles/apexcharts/apexcharts.min.js',
    'node_modules/otika/assets/bundles/datatables/datatables.min.js',
    'node_modules/otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/dataTables.buttons.min.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/buttons.flash.min.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/jszip.min.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/pdfmake.min.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/vfs_fonts.js',
    'node_modules/otika/assets/bundles/datatables/export-tables/buttons.print.min.js',
    'node_modules/otika/assets/bundles/cleave-js/dist/cleave.min.js',
    'node_modules/otika/assets/bundles/cleave-js/dist/addons/cleave-phone.us.js',
    'node_modules/otika/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js',
    'node_modules/otika/assets/bundles/bootstrap-daterangepicker/daterangepicker.js',
    'node_modules/otika/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
    'node_modules/otika/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    'node_modules/otika/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
    'node_modules/otika/assets/bundles/select2/dist/js/select2.full.min.js',
    'node_modules/otika/assets/bundles/jquery-selectric/jquery.selectric.min.js',
    'node_modules/otika/assets/bundles/lightgallery/dist/js/lightgallery-all.js',
    'node_modules/vuexy/app-assets/vendors/js/calendar/fullcalendar.min.js',
    'node_modules/vuexy/app-assets/vendors/js/extensions/moment.min.js',
    'node_modules/vuexy/app-assets/vendors/js/forms/select/select2.full.min.js',
    'node_modules/vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/pickadate/picker.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/pickadate/picker.date.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/pickadate/picker.time.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/pickadate/legacy.js',
    'node_modules/viho/assets/js/datepicker/date-picker/datepicker.js',
    'node_modules/viho/assets/js/datepicker/date-picker/datepicker.en.js',
    'node_modules/viho/assets/js/datepicker/date-picker/datepicker.custom.js',

    'node_modules/vuexy/app-assets/js/core/app.js',



], 'public/js/app.js');








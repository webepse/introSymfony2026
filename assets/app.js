import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

// installer bootstrap avec importmap => php bin/console importmap:require bootstrap
    // ça ajoute bootstrap et @popperjs dans le dossier vendor
/* si je viens d'un projet github en plus du composer install, faire => php bin/console importmap:install (ref au fichier importmap.php */

// import ./ => je viens chercher quelque chose dans le dossier assets
// import bootstrap => je viens chercher le fichier bootstrap.js dans le dossier vendor/bootstrap
import 'bootstrap'
// importation des CSS dans le fichier app.js
    // qui est demandé dans base.html.twig
        // {% block importmap %}{{ importmap('app') }}{% endblock %}
        // {{ importmap('app') }}

import 'bootstrap/dist/css/bootstrap.min.css'
// importation de notre css perso (donc dans le dossier assets => ./)
// dans le dossier styles/app.css
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

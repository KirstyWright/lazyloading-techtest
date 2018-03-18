# lazyloading-techtest

Simple Laravel app done as a tech test.

### Tech Stack
* PHP 7
* Mysql
* Laravel 5.6
* VueJS
* Sass

### Components
* Products & Categories as Models.
* Product listing is done as VueJs Components.
* ProductFactory & Seeder for setup.


### Explanation

Wrote my own way to load via ajax. Seemed the simplest option as lazy loaders out there are more focused towards having all the content on page load and only loading images when required. This way allowed the intial load time to be short as you only have to fetch a small number of produccts.


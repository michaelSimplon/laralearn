# Cours 3

Ajout de d'un seeder et factory pour les articles

console : php artisan make:seeder ArticlesTableSeeder // créé un seeder pour remplir la bdd
console : php artisan make:factory ArticleFactory --model=Article // créé une factory pour générer des articles aléatoirement
console : php artisan db:seed // envoi les données en bdd
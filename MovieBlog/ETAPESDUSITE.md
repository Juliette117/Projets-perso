# I. BDD
1. Créer la bdd (MovieBlog)
    * MLD, MCD
2. Configurer fichier .env

# II. MVC
1. Créer des vues
    * Créer la navbar (navbar.blade.php)
    * Créer la structure globale HTML (base.blade.php)
2. Créer le controller MainController
    * Dans le terminal : 
      'php artisan make:controller MainController'
3. Créer le modèle 'article'
    * Dans le terminal: 'php artisan make:model Article -m' 
      (pour créer le mdèle et la migration qui est lié) 
    * Ajouter les champs désirés pour la table 'articles'
    * Dans le terminal: 'php artisan migrate'
      (pour migrer la table 'articles' dans la bdd)

# III. CONTENU    
4. Créer le seeder 'ArticleSeeder' 
    * Dans le terminal : 'php artisan make:seed ArticleSeeder
    * Ajouter les champs désirés pour le creer des articles
    * Dans le terminal : 
      'php artisan db:seed --class=ArticleseriesSeeder'
5. Afficher les articles
6. Paginer les résultats

    
    
    
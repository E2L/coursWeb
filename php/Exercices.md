# Exercice 1 ([fonctions](http://php.net/manual/fr/functions.user-defined.php) & [echo](http://php.net/manual/fr/function.echo.php))

 Créer une fonction qui affiche 'coucou'.

# Exercice 2

 Créer une fonction qui affiche les données passées en paramètres.


# Exercice 3 ([tableaux](http://php.net/manual/fr/language.types.array.php))

On a le tableau ['a', 'b', 'c'], afficher chaque élément avec un [for](http://php.net/manual/fr/control-structures.for.php) & un [foreach](http://php.net/manual/fr/control-structures.foreach.php). 


# Exercice 4 ([formulaires](http://php.net/manual/fr/tutorial.forms.php) & [isset](http://php.net/manual/fr/function.isset.php) & [empty](http://php.net/manual/fr/function.empty.php))

 
Vérifier si le mot de passe et l'email ne sont pas vides, le nom et le prénom peuvent être vides. 
Afficher ensuite les informations sous la forme : 

```
le nom est : 
le prénom est : 
le mot de passe est : 
l'email est : 
```

# Exercice 5

Sécuriser l'affichage des informations avec [htmlentities](http://php.net/manual/fr/function.htmlentities.php).

# Exercice 6 ([empty](http://php.net/manual/fr/function.empty.php))

Afficher un message si les champs sont vides. 


# Exercice 7 ([sessions](http://php.net/manual/fr/session.examples.basic.php))

* Enregistrer les informations du POST en session 
* Créer une deuxième page php 
* Lorsque l'enregistrement est terminé, créer une [redirection](http://php.net/manual/fr/function.header.php) vers la deuxième page 
* Sur la deuxième page, faire un [var_dump](http://php.net/manual/fr/function.var-dump.php) de la session. 


# Exercice 8 ([aide](http://php.net/manual/fr/function.file-put-contents.php))

Enregistrer le contenu de la sessions dans un fichier `test.txt`.


# Exercice 9 ([aide](http://php.net/manual/fr/function.session-destroy.php))

Créer un lien pour déconnecter l'utilisateur, tout en restant sur la même page (par exemple : `<a href="page1.php?deco=true">Déconnexion</a>`).

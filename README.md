# CineActus

Site permettant de gerer les actualités Cinematographiques.
Une application utilisant CRUD Laravel 8.

# Lancement du site

http://....................

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Lien

https://www.gekkode.com/developpement/tutoriel-laravel-8-3-la-structure-mvc/

## UML Sequence page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Admin->>Routeur : lancer la premiere page
    Routeur->>View : GET /

        activate View
    View ->>Admin : POST page "'welcome'"
    deactivate View

```

## UML Sequence Creation d'un post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Admin->>Routeur : page choix film
    Routeur->>View: GET
activate View
View ->>Controller: Read()
deactivate View
    activate Controller
    Controller->>Modele: GET
     deactivate Controller
    activate Modele
    Modele ->> Controller : POST
     deactivate Modele
     activate Controller
       Controller->> Modele : Create() create.blade.php
    deactivate Controller
    activate Modele
    Modele ->> Controller: POST
    deactivate Modele
    activate Controller
    Controller ->> View : Affichage ()
    deactivate Controller
```

## UML Sequence Read post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Admin->>Routeur : page choix film
    Routeur->>View: GET
    activate View
    View ->>Controller: Read()
    deactivate View
    activate Controller
    Controller->>Modele: GET
     deactivate Controller
    activate Modele
    Modele ->> Controller : POST show.blade.php
     deactivate Modele
     activate Controller
     Controller ->>View : Affichage()
     deactivate Controller

```

## UML Sequence Delete post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Admin->>Routeur : page choix film

    Routeur->>View: GET
    activate View
    View->> Controller: Read()
    deactivate View
    activate Controller
    Controller->>Modele: GET
     deactivate Controller
    activate Modele
    Modele ->> Controller : POST show.blade.phph

     deactivate Modele
    activate Controller
     Controller->>Modele:Delete()
     deactivate Controller
     activate Modele
     Modele ->> Controller: POST
     deactivate Modele
     activate Controller
     Controller ->> View : Affichage
      deactivate Controller


```

## UML Sequence Update post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Admin->>Routeur : page choix film
    Routeur->>View: GET
activate View
    View ->>Controller: Read()
    deactivate View
    activate Controller
    Controller->>Modele: GET
     deactivate Controller
    activate Modele
    Modele ->> Controller : POST

     deactivate Modele
     activate Controller
     Controller->>Modele:Update()
     deactivate Controller
     activate Modele
     Modele ->> Controller : POST show.blade.php
     deactivate Modele
     activate Controller
     Controller ->> View : Affichage()
     deactivate Controller


```

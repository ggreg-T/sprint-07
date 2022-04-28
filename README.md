# CineActus

Site permettant de gerer les actualités Cinematographiques.
Une application utilisant CRUD Laravel 8.

# Lancement du site

http://techer-gregory.sprint-07.sc1lgvu9627.universe.wf/

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Maquette

Cliquez sur ce lien pour visionner la maquette du site: https://www.figma.com/file/cTg7mze09exD3amUzwyvmL/maquette-Laravel

# Lien

https://www.gekkode.com/developpement/tutoriel-laravel-8-3-la-structure-mvc/

## UML Sequence page d'accueil

```mermaid
sequenceDiagram
    participant Visiteur
    participant Routeur
    participant Controller
    participant View
    participant Modele

    Visiteur->>Routeur : lancer la premiere page
    Routeur->>View : GET /

        activate View
    View ->>Visiteur : POST page "'welcome'"
    deactivate View

```

## UML Sequence Creation d'un post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant Modele
    participant View

    Admin->>Routeur : Appel page post CinemActu
    activate Routeur
    Routeur->>Controller: data :"posts/create" , Route vers "posts"
deactivate Routeur

activate Controller
       Controller->> Modele : Methode:GET create.blade.php
deactivate Controller

    activate Modele
    Modele ->> Controller: POST
    deactivate Modele
    activate Controller
    Controller ->> View : Affichage ()
    deactivate Controller
    activate View
    View ->> Admin : page Post
    deactivate View
```

## UML Sequence Read post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant Modele
     participant View

    Admin->>Routeur : page choix film
    Routeur->>Controller: GET show()
    activate Controller

    deactivate Controller
    activate Controller
    Controller->>Modele: data: posts/{post}Methode:GET
     deactivate Controller
    activate Modele
    Modele ->> Controller : POST show.blade.php
     deactivate Modele
     activate Controller
     Controller ->>View : Affichage()
     deactivate Controller
     activate View
    View ->> Admin : web
    deactivate View

```

## UML Sequence Delete post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant Modele
    participant View

    Admin->>Routeur : page choix film

    Routeur->>Controller: GET: data destroy

     Controller->>Modele: DELETE posts/{post} posts.destroy




     activate Modele
     Modele ->> Controller: renvoie
     deactivate Modele
     activate Controller
     Controller ->> View : Affichage
      deactivate Controller
      activate View
    View ->> Admin : page Post
    deactivate View


```

## UML Sequence Update post

L'utilisateur (Admin) est sur la page d'accueil

```mermaid
sequenceDiagram
    participant Admin
    participant Routeur
    participant Controller
    participant Modele
    participant View

    Admin->>Routeur : page choix film
    Routeur->>Controller:  PUT posts/{post}

     activate Controller
     Controller->>Modele:Update()
     deactivate Controller
     activate Modele
     Modele ->> Controller : posts.update
     deactivate Modele
     activate Controller
     Controller ->> View : App\Http\Middleware\Authenticate
     deactivate Controller
     activate View
     View ->> Admin : page affichage web
     deactivate View


```

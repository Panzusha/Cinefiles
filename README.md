# Bienvenue sur le projet Ciné Files
## Description
Pour ce test d'entrée CDA j'ai choisi pour thème le cinéma, étant cinéphile de longue date. On aura donc un format blog parlant de films qui m'ont marqué, avec des critiques écrites par moi.

J'ai choisi comme couleurs dominantes le rouge et le noir, étant les couleurs typiques que l'on trouve en faisant une recherche image "cinéma" sur le web.

Je sais que la couleur rouge est rarement utilisée en dominante sur les sites web car "agressive" mais je la trouve pertinente dans ce contexte particulier.

### Technologies

**Partie front** : HTML CSS. **Partie back** : PHP SQL. **Base De Données** (BDD) : phpMyAdmin. **Déploiement** : Docker (plus de détails au 3e chapitre).

Le délai entre l'arrivée de ce test et le début du stage étant court, je n'ai pas eu le temps d'apprendre à me servir d'un framework. J'ai songé a Tailwind CSS mais après renseignement il est préférable d'avoir une bonne mâitrise du CSS de base ce que je n'estime pas être mon cas en tant qu'étudiant ayant moins de 6 mois d'expérience dans le domaine du code.

### Arborescence des fichiers
Dossier CSS : Mise en forme et style des pages.

Dossier merise : Les fichiers relatifs à la BDD et sa conception : MCD, MLD, MPD, Dictionnaire de données et le fichier d'exportation qui sera utilisé dans le chapitre Déploiement.

Dossier ressources : Images, icônes et police(s) utilisées dans le projet.

Dossier templates : Modèles pour le header et footer qui sont ensuite utilisés de façon dynamique sur les pages, voir commentaires de code.

### Structure du site

La page d'accueil (index.php) regroupe les entités principales de la BDD (films) avec quelques informations et un extrait.

En haut de la page, le logo/titre avec une animation pour dynamiser ainsi que deux boutons avec animations au survol du curseur qui envoient vers des fonctionnalités CRUD (plus de détails au 2e chapitre).

Chaque bloc film possède un bouton pour lire plus de détails qui envoit vers sa propre page et un autre qui envoie vers une autre fonctionnalité CRUD.

Toutes les pages au dela de l'acceuil ont un bouton retour pour faciliter la navigation.

Si l'on rentre une adresse erronée (exemple dans mon cas : localhost:8084/mauvaisnom.php) on arrivera sur une page 404 faite maison.

### Structure de la Base De Données
![BDD](https://github.com/Panzusha/Cinefiles/assets/102243199/2812a1cc-d55c-4065-bff3-0e2b9e93e02b)

films est l'entité principale, elle possède des clés étrangères des tables realisateurs et categories (j'ai volontairement omis les accents car je ne savais pas si phpMyAdmin les acceptait).

jouentDans est la table pivot (ou table intermédiaire) qui fait le lien entre films et acteurs. acteurs est le dernier élément de la BDD.

## Fonctionnalités CRUD

**Create** : le bouton "Ajouter un film" qui envoie vers une page avec un formulaire. Une fois rempli et envoyé un film sera ajouté à la BDD

**Read** : l'affichage dynamique des films sur la page accueil, remplie directement depuis la table films de la BDD. Ainsi que la page individuelle de chaque film accessible depuis le bouton "Lire la critique".

**Update** : le bouton "Modifier" de chaque film, qui envoie vers une page avec un formulaire. Une fois rempli et envoyer, l'entité BDD sera modifiée.

**Delete** : le bouton "Supprimer un film" qui envoie vers une page avec une liste des films existants de la BDD, une fois la sélection validée l'entité BDD sera supprimée

![CreateDelete](https://github.com/Panzusha/Cinefiles/assets/102243199/201163e4-baba-461a-b122-280cc6a06230)

![ReadUpdate](https://github.com/Panzusha/Cinefiles/assets/102243199/896f8488-9013-499a-bacf-201bfcfaef0a)

## Déploiement

Faites un git clone du projet dans l'emplacement de votre choix.

Concernant la solution de serveur web local, si vous utilisez autre chose que docker je ne peux rien vous apprendre du fait de mon manque d'expérience.

Je peux en revanche vous expliquez comment utiliser docker comme je l'ai fait pour ce projet.

Téléchargement de [Docker](https://www.docker.com/get-started/)

Une fois installé, assurez vous que dans les réglages (roue crantée en haut), cette option soit activée :
![dockerOptions](https://github.com/Panzusha/Cinefiles/assets/102243199/b3a51f16-a114-4baa-9ded-4c22d170fe28)

Lancer votre terminal de commande, situez vous là ou vous avez cloné le projet avec la commande "cd"

Assurez vous d'avoir les 3 fichiers suivant dans le projet: **.docker/vhost.conf**
![vhostconf](https://github.com/Panzusha/Cinefiles/assets/102243199/7b523182-7172-4b4f-87d4-06a17dc063db)

Modifiez les 2 chemins lignes 2 et 4 en remplaçant "www" par le dossier ou vous installez vos projets

Par exemple pour moi le projet est dans www/Cinefiles mais comme vous le voyez sur la capture d'écran, seul le "www" apparait

**docker-compose.yml**
![services12dockercompose](https://github.com/Panzusha/Cinefiles/assets/102243199/c5c25c36-0d7a-4c39-9ab5-d4c48d57e710)
![services3dockercompose](https://github.com/Panzusha/Cinefiles/assets/102243199/09bf7de5-c688-4651-a933-d8f33f4beb40)

Ici vous pouvez modifier les ports selon votre convenance, il faudra les utiliser dans la barre navigateur quand tout sera prêt pour accéder au site et à la BDD.

Par exemple pour moi : site = localhost:8084/   BDD = localhost:8082/

Par défaut le nom de la BDD est cinefiles, le nom d'utilisateur phpMyAdmin est "root" et il n'y a pas de mdp.

Si vous modifier ces paramètres il faudra agir en conséquence, notamment dans le code de toutes les pages.php (sauf fonctions).

Au niveau de la ligne suivante : $pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');


**dockerfile**

![dockerfile](https://github.com/Panzusha/Cinefiles/assets/102243199/35bdb45a-3bdd-44e1-bb68-9ab6c22f7f00)

Ici vous pouvez modifier si vous utilisez une autre technologie qu'Apache cependant je ne suis pas sûr des conséquences.

Assurez-vous que le WORKDIR soit le même chemin que dans le fichier .docker/vhost.conf vu ci-dessus.


Une fois tout les paramètres corrects et les éventuels changements sauvegardés, executez la commande "docker compose up -d"

Votre docker devrait ressembler à ceci :
![conteneur](https://github.com/Panzusha/Cinefiles/assets/102243199/03d8a5e6-5170-4d4c-aa85-ae9dc7a6d7e4)

Vous pouvez normalement vous connecter à la BDD (pour moi localhost:8082/)

Identifiants par défaut "root" et pas de mdp.

Créer une nouvelle bdd avec le menu en haut à droite, nommez la "cinefiles" sans majuscule ni accent.

![bdd2](https://github.com/Panzusha/Cinefiles/assets/102243199/0aa4c841-4cc9-4226-8092-732b0ab85e89)

Une fois crée cliquez dessus puis sur "Importer" dans l'onglet en haut au milieu de l'interface.

Cliquez sur "Parcourir" et sélectionnez le fichier cinefiles.sql que vous trouverez dans le dossier "merise" du projet.

Cliquez sur "Importer" en bas de la page. La BDD devrait maintenant être remplie.

Vous pouvez vous connecter sur le site ( pour moi localhost:8084/ )

## Conclusion

A l'heure ou j'écris ces lignes, le stage a commencé et je n'ai malheureusement plus le temps de peaufiner le projet avec des ajouts "bonus"

Dans l'ensemble je suis satisfait de ce projet qui m'a permis de re-travailler mes compétences front qui avaient peu été sollicitées depuis l'apprentissage du back en janvier et février.

Il m'a également permis de mettre en pratique des connaissances back fraichement acquises. 

Je suis conscient que le résultat n'est pas parfait cependant le "coeur" CRUD est fonctionnel.

Je vous remercie pour votre attention et espère que vous apprécierez ce mini blog cinéma.

Emmanuel Walther - Apprenti Développeur - DWWM Alençon

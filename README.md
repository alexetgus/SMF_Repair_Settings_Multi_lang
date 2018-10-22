# SMF Repair Settings
**Repair settings multi languages**

Ce fichier, **Repair_settings.php**, est un fork sorti du [dépôt TOOLS de Simple Machines](https://github.com/SimpleMachines/tools).
Il n'a subi **aucune modification majeure**, si ce n'est qu'il a été modifié pour pouvoir être utilisé dans de multiples langues **comme le français** afin que les utilisateurs
ne connaissant qu'une seule langue ne soient pas plus perdus lors de la réparation de leur forum.


## USAGE
Cet outil est très pratique lors d'une migration ou de modifications importantes pour récupérer un forum fonctionnel en quelques clics.
Il peut peut-être également vous venir en aide lors de manipulations hasardeuses ayant conduit à une catastrophe...


## Utilisation

* Il n'est pas obligatoire de renommer ce fichier avant de l'utiliser, mais c'est conseillé. Cela évitera à tout un chacun de le trouver
plus ou moins par "hasard".
* Uploadez le fichier **repair_settings.php** et le fichiers de langues **languages.php** à la racine de votre forum, dans le dossier où se trouvent
les fichiers **index.php**, **Settings.php**, **SSI.php**, etc.
* Dans la mesure du possible, la langue est la même que celle de votre forum. Vous pouvez également forcer la langue de votre choix.
Pour se faire, éditez le fichier **repair_settings** à la première ligne **$lang = 'xx';** et choisissez votre langue si elle existe. Ex : **$lang = 'fr';** pour le français.
* Exécutez ce fichier en y accèdant comme n'importe quel visiteur de votre site en entrant son adresse web, par
exemple *http://example.com/repair_settings.php* .
* **Relisez attentivement chacun des paramètres avant de les valider pour appliquer les modifications !**


## ATTENTION !
**N'oubliez jamais de supprimer ce fichier lorsque son utilisation n'est plus nécessaire !**


## Pull requests et Issues
Effectuez vos modifications sur la branche "dev", puis effectuez une pull request afin que votre commit soit mergé.



***Alex***

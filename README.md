==================================================
t3_Cancon
==================================================

Extension de gabarit avec 3 colonnes. Un subnav à gauche et 2 autres colonnes. (1/3 + 2/3 + 1/3)

==================================================
Minimal Dependencies
==================================================

* TYPO3 CMS 8.7 or greater
* Bootstrap_package 8 or greater
* indexed_search 8.7 or greater

==================================================
Usage et Parametrage
==================================================

Pour cette extension, des constantes sont utilisés pour faciliter le parametrage et les modifications de contenus en fonction des besoins.
On les retrouvent au chemin suivant : t3_Cancon/Configuration/TypoScript/constants.txt


* Le bandeau : - Création d'une page Bandeau de type Carousel qui va contenir un ou plusieurs Carousel Item.
               - Après création cette page possède un ID qu'il faut retranscrire dans le fichier énoncé plus haut.
			   - Afin d'éviter les marges au dessus et en dessous, on peut utiliser le style de frame "no-frame".
Ne pas oublier dans le fichier Resources/Private/Layouts/Page/Default.html de faire appel à cette lib.

* Le logo : possibilité de définir sa position dans la zone bandeau (gauche ou superposé)

* Possibilité d'afficher ou non la localisation et le message de bienvenue

* La localisation : - Fil d'ariane dont les 2/3 des redirections ne changeront jamais. Utilisation des constantes (url/title/text) pour les 1/3 restants qui correspondent à la communauté de communes et la commune.                                                   Ne pas oublier dans le fichier Resources/Private/Layouts/Page/Default.html de faire appel à cette lib.

* Bienvenue : - Message de bienvenue personnalisable.
Ne pas oublier dans le fichier Resources/Private/Layouts/Page/Default.html de faire appel à cette lib.

* Menu du pied de page :
    * Inclure/Exclure les pages hors-menu : page.footer.notinmenu
    * Uid des dossiers contenant les pages à insérer : page.footer.navdir (ex: page.footer.navdir = 420,458)
    * Uid des pages à exclure du menu: page.footer.excludelist (ex: page.footer.excludelist = 1,2)

* Rubrique du menu principal personnalisable:
	* une variable permet de choisir si on souhaite des rubriques de couleurs ou non : menucouleur ( si oui, la feuille less personnalisation est incluse)
	* couleur du texte
	* couleur de fond
	* couleur de fond du sous-menu
	* couleur de la bordure
* Champ de recherche
	* 2 positions : dans le menu principal à droite ou dans la colonne de droite

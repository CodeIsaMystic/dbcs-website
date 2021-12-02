# CODE REVIEW

Arrivant au bout de cette première version du projet, je commence à **faire le bilan de cette expérience** qui, pour le coup, s'est avéré très enrichissante.

**La livraison est pour Septempbre 2022**, avec des objectifs pour la période Avril/Juin. Le prochain rendez-vous avec le client est prévu avant le fin de l'année afin de revoir le projet dans son ensemble, de faire le point, de s'aligner sur tout cela et d'avancer ..

Au delà des problèmes techniques rencontrés et de la revue de code, je peux dores et déjà **tirer quelques conclusions** sur les choix qui ont été fait en amont du projet, pour lesquels il faudra impérativement les prendre en considération afin de continuellement **travailler avec qualité et ainsi apprendre à résoudre des potentiels problèmes qui pourraient se dévoiler au fil du cycle de développement du projet**.

<br>
<br>

## Problèmes techniques rencontrés

### CK Editor

Le choix de cet éditeur est peut être la plus grosse erreur sur ce projet.
Ayant passé beaucoup de temps sur la documentation pour l'implémentation de celui-ci et la résolution de problème, il s'avère qu'**au final beaucoup de problématiques sont **encore** à l'ordre du jour** et je me demande si je n'ai pas fais quelque part le pire choix qui soit, car le résultat n'est pas du tout satisfaisant.

> Pour exemple, les "35 secondes" de temps de chargement du seul fichier `ck-editor.js`...

J'ai encore beaucoup de temps pour implémenter la version finale de ce projet, j'en profiterai donc pour **continuer à nourrir ces recherches et cette réflexion**...

> Je vais également inspecter de côté d'autres éditeurs comme TinyMCE et voir s'il est pertinent ou non de prendre un grand virage pour ces problèmes.

<br>
<br>

### CSS, Bundler & Front End

Ayant commencé "From Scratch" ce projet sans savoir comment travailler conjointement avec NPM et PHP (voir Composer), j'avais décidé de travailler sans Post-processeur CSS.

**J'avais décidé de simplifier le projet globalement** pour ne pas me retrouver dans des situations qui dépasseraient mes connaissances, me bloqueraient impactant ainsi mon "savoir-faire" & ma motivation...

Par contre cela a clairement compliqué la tâche quant à l'application de la BEM Méthodologie sur mon code, avec laquelle je suis pourtant très familié.

> Il est deplus maintenant assez regrettable que je ne puisse ainsi minifier mes fichiers SCSS / JS & optimiser mon code.

<br>
<br>

### Performance

Après une période de test du site internet sur des réseaux lents & rapides, selon les différentes situations, il parait clairement impossible de ne pas traiter ces problèmes étant donné que **le potentiel visiteur du site pourrait attendre jusqu'à plus de 3 minutes pour sa première connection sur le site**, avant que les "assets" ne soit mises en cache (avec une simulation de réseaux lent 3G).

Les différentes "stratégies" pensées pour pallier à ces problèmes nécessiteront plus de documentation afin d'être complètement sùr de la décision à prendre qui se résume globalement à:

- **éviter les longs temps de chargement** (images encore trop lourdes, ck editor loading, nouvelle fonctionnalité côté Back End permettant le chargement d'une plus petite image pour la page blog. Une seconde image dédié au même article de blog mais qui ne devrait pas dépasser les 20/40kB ).
- **établir une stratégie de "Loading Page"** afin de permettre le chargement des pages avant mis en cache (à voir s'il est possible et pertninant d'y ajouter une technique de lazy loading...).

<br>
<br>

### Sécurité

Encore beaucoup d'incertitudes sur ce sujet pourtant primordial. Me retrouvant parfois bloqué sur **la question de comment envoyer et stocker les donnéees (surtout concernant le Post d'article et son contenu) en sortie et comment les traiter par la suite lors de l'affichage**.

> CK Editor m'a ainsi posé beaucoup de problèmes...

Je ne sais pas encore comment gérer ce flux de données, le côté sécurité du site tout en gardant en tête de pouvoir rester propre dans mon implémentation.
**Un manque d'expérience, c'est certains**.
Je me suis beaucoup documenté sur le sujet et je manque encore d'un peu de recul sur la **question** pour prendre la bonne décision.

<br>
<br>

## Code Review

### Controllers

Les fichiers du dossier `/Controllers/` sont beaucoup trop important une reflexion doit être menée afin de les minimiser, de les rendre plus compréhensible, plus maintenable...

> Les fonctionnalités sont répétées: l'upload d'image , la logique de validation ou bien la gestion de messages d'erreurs.
> Il s'agira d'extraire ces logiques...

<br>
<br>

### Views

De nombreux éléments HTML, `<section>`, `<form>` sont ainsi utilisés à plusieurs reprises.

> Il serait tout à fait logique de les extraire tels des "Composants" réutilisables interne au projet...

<br>
<br>

### Helpers

Un peu de confusion sur le dossier `/helpers/` ou certains fichiers pourraient s'avérer être extractés en tant que principales fonctionnalités du projet:

- validation
- gestion des erreurs
- upload
- email
  ...

> Beaucoup de fichiers ont été ajoutés afin de ne pas surcharger le controller par trop de logique.
> Il est cependant évident qu'à terme des `class` seront implémenter afin d'alléger ce dossier.
> Principalement pour gérer des fonctionnalités majeures telles que la Vaidation, la Gestion des Erreurs, l'Email ou bien l'Upload...

<br>
<br>

## Conception du projet

### Scope global du projet

Pouvant compléxifier le projet afin de gagner en clareté, j'ai préféré simplifier au maximum pour deux principales raisons...

#### **La première raison est que je voulais travailler avec une certaine maitrise des tâches que je voulais réaliser**.

Je voulais y voir clair durant mon implémentation car je savais que j'allais de toute manière rencontrer des points bloquant lors de mon apprentissage. Je voulais donc simplifier le tout car je ne voulais pas être bloquer à un point ou cela affecterai ma motivation et cette sensation que je perde le controle sur la logique , sur la gestion et sur la compréhension de ce projet.

**Même s'il y a pas mal de "Refactoring", travailler plus en maitrise m'a permis de cerner le projet, d'être en confiance, de conforter ma prise en main de la documentation et me permet aujourd'hui d'y voir clair sur les points forts ET les points faibles du travail réalisé.**

Malheureusement, sur ce projet je n'aurai pas ou très peu abordé de multitudes de sujets tels que le SEO, l'accessibilité, les PWA, les requêtes API, Webpack, Npm, Composer et d'autres sujets encore qui auraient ainsi pu démontrer cette idée que même si je ne vais pas trop loin dans certains domaines, je m'efforce d'avoir une approche professionnelle, globale et complète.

#### **La deuxième raison est d'autant plus importante car elle concerne le client en lui même...**

Il s'avère que **ce projet est d'abord un projet d'étude**, je l'ai donc un peu "gonfler" en terme technique, en terme de fonctionnalités car je devais bien proposer un niveau technique assez suffisant pour le jury et j'espère ne pas m'être trompé sur ce sujet.
Le client n'a par exemple, pas exprimé avoir le réel besoin d'une fonctionnalité de blog. J'ai donc pris la décision de rajouter cette logique autour du blog, construite de zéro, sachant que je devrai peut être devoir la retirer à l'avenir.

Je me suis donc efforcé **d'essayer de rester propre, clair, organiser et simple**. Je verrai déjà d'ici la fin de l'année après le rendez-vous avec le client pour la suite.

<br>
<br>

### Conception: domaines & modèles

J'ai compris durant cette expérience que **compléxifier la conception de la gestion de nos données**, peut en fait, apporter beaucoup plus de clareté, d'organisation mais aussi aider à construire la logique tout en permettant au projet de pouvoir grandir sans être contraint des choix de sa conception originelle.

Il n'est pas question ici de la compléxité de la logique autour du Blog mais plutôt celle autour des contacts. Une conception plus complèxe autour d'un projet tel que le blog est assez courante et je trouve personnellement que la compléxité de celle ci se retrouve sur les thématiques liées à l'UI/UX alors que **le problème rencontré avec le modèle Contact a été en fait très intéressante du point de vue de la gestion technique des base de données**, de manière plus générale.

J'ai initialement réfléchi cette logique et posé ce problème me questionnant sur **les différentes entitées concrètes pour le client comme "le Contact", "le Prospect", "le Partenaire", "le Sportif"...**

J'ai pris la décision de ne pas traiter les entités "Contact & Sportif" et de **construire seulement 3 tables (+ la table utilisateur bien sur)** car le client a déjà des outils et plateformes qui assument cette gestion comme les boîtes mail, les auto-répondeurs et des logiciels pour Coach qui gèrent la gestion du client, des données sportives, de la réservation et du paiement...
En effet certains logiciels très abordables voir même gratuit pour des TPE, remplissent déjà ces tâches, j'ai donc décidé de ne pas réinventer la roue et de **miser encore une fois sur l'aspect global du projet.**

Cependant, lors de l'implémentation des formulaires côté Front, je me suis bel et bien rendu compte que par exemple **la table contact aurai pu simplifier la gestion d'état de mes données**, notamment l'input checkbox "essai gratuit". Cela aurait été plus judicieux, plus propre et cela m'a donc fait comprendre qu'il était véritablement **important de bien séparer et concevoir les domaines en toute situation.**

Je verrai donc par la suite comment faire évoluer le projet, **je créerai certainement une branche avec une nouvelle conception de la base de données**, ceci avant mise en ligne de a première version finale du projet prévu pour Septembre 2022.

<br>
<br>

### Point Final

Etant déjà très en retard sur la livraison du projet au jury, je me suis fixé un objectif d'environ 2 mois pour la réalsation de ce projet. Objectif que j'ai dépassé d'1 ou 2 semaines, mais qui globalement a été respecté.

J'ai décidé de livrer ce projet tel quel car **il est globalement au stade d'évolution que je voulais** à quelques détails prets.

M'étant contraints à rester sur une implémentation native, en terme de langage de programmation, **j'avais décidé de ne pas utiliser NPM, PostCSS ou SASS, Composer ou bien un framework de type Bootstrap, Symfony ou autre...** Cela a été contraigant par moments et même s'il faut avouer que j'ai tout de même fini par utiliser une ou deux librairies Javascript, cela a été très enrichissant...

J'ai donc essayé de respecter les délais, les contraintes et **je livre ce projet en l'état tout en sachant je vais pouvoir "facilement", avec le temps l'emmener vers un stade plus avancé**.

Il est tout à fait clair qu'il y a **encore beaucoup à faire ...**

Après réunion avec le client je serai plus apte à prendre les décisions pour la suite sachant que **j'essaye de garder toujours un temps de réfléxion** sur des sujets assez complexes et qu'aujourd'hui, par exemple j'ai décidé de livrer le projet aussi car **dans certains domaines je dois prendre le temps et la maturité nécessaire afin de faire un vrai choix et garder un peu la maitrise de ce travail**.

La rencontre courant décembre avec le client sera d'autant plus importante, qu'elle m'aidera et me guidera vers les futures décisions à prendre. Je pense dores et déjà à une liste de tâches potentielles à réaliser telles que:

- **ré-implémenter la maquette Front** avec NPM, Webpack, PostCSS afin de pouvoir réorganiser, minifier voir ajouter du "lazy loading"
- peut être utiliser BarbaJS pour **la gestion des transitions de pages et du loader**.
- revoir **le Back avec Composer et certains package** tels que
  valitron, intervention...
- **revoir mon fichier `.sql` et mes diagrammes UML** intégrant déjà la table Contact voir plus...
  **etc...**

Pour conclure, j'espère que vous aurez apprécié le travail réalisé, le projet et sa documentation. J'espère ainsi ne pas m'être trompé en certains points et je croise les doigts pour que cela passe.

😀

Cordialement...

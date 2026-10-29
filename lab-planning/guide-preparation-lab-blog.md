# Guide Méthodologique : Préparation de Labs Techniques (Cas d'un Blog)

Ce guide formalise la démarche pour concevoir, structurer et préparer des **labs techniques** à partir des exigences concrètes d'un projet de développement (ici, un système de **Blog**).

Il applique la structure obligatoire définie dans [`marp-lab-presentation/SKILL.md`](file:///c:/Lab/lab-agent/.agents/skills/marp-lab-presentation/SKILL.md) et les principes de cadrage de [`task-structuring/SKILL.md`](file:///c:/Lab/lab-agent/.agents/skills/task-structuring/SKILL.md) :

1. **Introduction**
2. **Stack / Technologies**
3. **Définition**
4. **Problématique**
5. **Solution**

---

## 1. Principes Fondamentaux : Qu'est-ce qu'un Lab Technique ?

Un **lab technique** n'est pas le développement direct de l'application finale en production. C'est un **environnement d'expérimentation unitaire et isolé (*sandbox / POC*)** qui permet de :

1. **Étudier une couche précise de la stack** (ex: driver de base de données, moteur de rendu, système de session).
2. **Évaluer et comparer des bibliothèques candidates** (ex: `marked` vs `markdown-it`, `Prisma` vs `Knex`, `Redis` vs `Memory Cache`).
3. **Valider un patron d'architecture ou de sécurité** (ex: middleware RBAC, assainissement HTML anti-XSS).
4. **Acquérir une compétence avant intégration** (*"Apprendre, tester, mesurer, puis intégrer"*).

---

## 2. Le Canevas Standard d'une Fiche de Lab

Chaque fiche de lab doit obligatoirement respecter l'ordre strict des 5 sections :

```markdown
# Lab : [Titre du Lab]

## 1. Introduction
- Contexte général du lab et rattachement au projet Blog.
- Objectif principal et résultat attendu.

## 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| [Outil ou Lib] | [Langage / Lib / BDD] | [Rôle spécifique dans le test] |

## 3. Définition
- Définition rigoureuse des concepts théoriques mis en jeu.
- Distinctions et principes d'architecture fondamentaux.

## 4. Problématique
- Situation initiale et point de départ.
- Difficulté technique précise ou risque identifié (sécurité, performance, collision).
- Conséquences en cas de non-résolution.
- Comportement attendu.

## 5. Solution
### Protocole & Étapes de Réalisation
1. Étape 1 : Initialisation de l'environnement de test unitaire.
2. Étape 2 : Implémentation du scénario nominal (POC).
3. Étape 3 : Épreuve des cas limites ou malveillants.
4. Étape 4 : Validation des résultats.

### Critères d'Acceptation (Given - When - Then)
- Given [état initial], When [action exécutée], Then [résultat vérifiable].

### Preuve de Vérification
Tableau de validation et statut de résolution.
```

---

## 3. Cartographie des Labs Techniques Dérivés du Blog

| N° | Sujet du Lab | Problématique Clé | Stack / Technologies | Livrable |
|:---:|:---|:---|:---|:---|
| **01** | **Persistance des Articles** | Fichiers Markdown ou Base de données relationnelle ? | Markdown, YAML (`gray-matter`), SQLite, MySQL, Prisma | Script d'ingestion et comparatif de requêtage |
| **02** | **Rendu de Contenu** | Comment convertir du Markdown en HTML sans faille XSS ? | Node.js, `marked`, `DOMPurify`, `Prism.js` | Pipeline sécurisé avec test d'injection de script |
| **03** | **Routage & SEO** | Comment générer des URLs sémantiques uniques (`/posts/:slug`) ? | JavaScript, `slugify`, Express Router | Routeur dynamique avec gestion 404 |
| **04** | **Contrôle d'Accès** | Comment restreindre l'édition uniquement aux auteurs ? | Cookies HttpOnly / JWT, Middleware RBAC | Middleware testé avec statuts HTTP 401 et 403 |
| **05** | **Cache & Performance** | Comment absorber les pics de lecture sans saturer le serveur ? | `lru-cache` ou Redis, En-têtes HTTP de cache | Benchmark de latence avant/après mise en cache |

---

## 4. Fiches Complètes des Labs du Blog

### Lab 01 : Modélisation et Persistance des Articles

#### 1. Introduction
* **Contexte :** Le blog doit stocker et lister les articles avec métadonnées (titre, date, statut de publication, tags).
* **Objectif :** Évaluer et comparer un stockage par fichiers plats Markdown (*Flat-file*) et une base relationnelle SQLite/MySQL avec ORM.

#### 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| **Markdown / YAML** | Format de fichier | Fichiers sources des articles et Frontmatter d'en-tête |
| **gray-matter** | Bibliothèque Node.js | Parsing du YAML et extraction du corps de texte |
| **SQLite & Prisma** | Base de données & ORM | Stockage relationnel et requêtage structuré alternatif |

#### 3. Définition
* **Flat-file CMS :** Système stockant les contenus sous forme de fichiers bruts (ex: `.md`) sans serveur de base de données. Idéal pour le versionnement Git.
* **ORM (Object-Relational Mapping) :** Couche logicielle permettant d'interagir avec une base de données en manipulant des objets typés plutôt que des requêtes SQL brutes.

#### 4. Problématique
* **Situation Initiale :** Besoin de persister des articles dès la première itération du blog.
* **Difficulté :** Une base relationnelle lourde entraîne des coûts de configuration, tandis qu'un stockage fichiers plats peut devenir inefficace pour les filtres complexes.
* **Comportement Attendu :** Identifier la volumétrie et les cas d'usage où le flat-file suffit face à l'ORM relationnel.

#### 5. Solution
1. **Étape 1 :** Créer un répertoire `/content/posts/` contenant 10 fichiers Markdown avec frontmatter YAML.
2. **Étape 2 :** Écrire un script Node.js lisant le dossier, parsant les métadonnées et filtrant les articles `published: true`.
3. **Étape 3 :** Créer le schéma Prisma équivalent sous SQLite et exécuter le même filtre.
4. **Critère de validation :**
   * *Given* 10 articles dont 3 non publiés, *When* la fonction de lecture est appelée, *Then* seuls 7 articles sont retournés, ordonnés par date antéchronologique.

---

### Lab 02 : Rendu Markdown Sécurisé et Coloration Syntaxique

#### 1. Introduction
* **Contexte :** Les articles rédigés en Markdown contiennent des titres, des images, des citations et des extraits de code.
* **Objectif :** Mettre en place un pipeline de rendu HTML sécurisé contre les failles XSS tout en assurant la coloration syntaxique.

#### 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| **marked** | Parseur JavaScript | Conversion rapide du format Markdown vers un flux HTML |
| **DOMPurify** | Bibliothèque de sécurité | Éradication des balises `<script>` et attributs malveillants |
| **Prism.js** | Bibliothèque UI | Coloration syntaxique automatique des blocs de code |

#### 3. Définition
* **Cross-Site Scripting (XSS) :** Vulnérabilité permettant à un attaquant d'injecter du code JavaScript arbitraire dans les pages consultées par d'autres utilisateurs.
* **HTML Sanitization (Assainissement) :** Processus consistant à supprimer ou désactiver les éléments HTML dangereux tout en préservant les balises de mise en page autorisées.

#### 4. Problématique
* **Situation Initiale :** Le blog convertit directement le Markdown des auteurs en HTML brut.
* **Difficulté :** Si un auteur ou un contributeur injecte `<img src=x onerror=alert(1)>`, le script s'exécute dans le navigateur de tous les visiteurs.
* **Comportement Attendu :** Le HTML produit doit être assaini sans perdre la mise en page ni les blocs de code informatique.

#### 5. Solution
1. **Étape 1 :** Installer et brancher `marked` pour transformer une chaîne Markdown en HTML.
2. **Étape 2 :** Injecter un payload d'attaque XSS et constater sa présence dans le flux de sortie.
3. **Étape 3 :** Intercaler `DOMPurify.sanitize()` et vérifier l'élimination du script malveillant.
4. **Étape 4 :** Configurer la coloration automatique avec Prism.js sur les blocs `javascript` et `bash`.
5. **Critère de validation :**
   * *Given* un texte contenant `<script>alert(1)</script>` et un bloc de code `const x = 42;`,
     *When* le pipeline traite l'entrée,
     *Then* le HTML retourné ne contient aucun script exécutable et le code comporte les classes CSS de Prism.js.

---

### Lab 03 : Routage Dynamique, Slugs SEO et Gestion des Erreurs 404

#### 1. Introduction
* **Contexte :** La navigation du blog doit être conviviale pour les utilisateurs et optimisée pour les moteurs de recherche.
* **Objectif :** Concevoir un mécanisme de génération de slugs robustes et un routeur dynamique gérant les erreurs 404.

#### 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| **slugify** | Utilitaire chaîne | Conversion de titres textuels en chaînes d'URL normalisées |
| **Express Router** | Routeur HTTP | Gestion des routes paramétrées `/posts/:slug` et des middlewares d'erreur |

#### 3. Définition
* **Slug :** Partie d'URL lisible par un humain qui identifie une ressource précise en utilisant uniquement des caractères alphanumériques minuscules et des tirets.
* **Code HTTP 404 Not Found :** Statut standard indiquant que le serveur n'a trouvé aucune ressource correspondant à l'URI demandée.

#### 4. Problématique
* **Situation Initiale :** Accès aux articles via des identifiants numériques opaques (`/post?id=14`).
* **Difficulté :** Les titres avec accents, cédilles ou espaces peuvent corrompre l'URL ou créer des doublons. Une URL inexistante peut provoquer une erreur 500 si la requête n'est pas interceptée.
* **Comportement Attendu :** Slugs normalisés et gestion propre des articles introuvables en HTTP 404.

#### 5. Solution
1. **Étape 1 :** Configurer `slugify` avec options strictes (`lower: true`, `strict: true`, `locale: 'fr'`).
2. **Étape 2 :** Mettre en place la route Express `GET /posts/:slug`.
3. **Étape 3 :** Si l'article correspondant est trouvé $\rightarrow$ renvoyer HTTP 200 avec le contenu.
4. **Étape 4 :** Si l'article est absent $\rightarrow$ renvoyer HTTP 404 avec page ou message dédié.
5. **Critère de validation :**
   * *Given* une requête `GET /posts/titre-inexistant`, *When* le serveur reçoit la requête, *Then* le statut 404 est retourné sans crash serveur.

---

### Lab 04 : Contrôle d'Accès et Protection des Routes (RBAC)

#### 1. Introduction
* **Contexte :** Le blog comprend des fonctions de lecture publique et des fonctions de gestion (création, modification, suppression).
* **Objectif :** Sécuriser les endpoints d'écriture via un middleware de contrôle d'accès basé sur les rôles (RBAC).

#### 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| **JSON Web Token (JWT) / Cookies** | Authentification | Transmission sécurisée de l'identité de l'utilisateur connecté |
| **Middleware Express** | Contrôle d'accès | Interception des requêtes et vérification des rôles et permissions |

#### 3. Définition
* **RBAC (Role-Based Access Control) :** Modèle de sécurité où les droits d'accès aux opérations sont assignés à des rôles (`LECTEUR`, `AUTEUR`, `ADMIN`) plutôt qu'à des individus.
* **HTTP 401 vs 403 :** Le code 401 indique une absence d'authentification (non connecté), tandis que le 403 indique une absence de droits (connecté, mais permission insuffisante).

#### 4. Problématique
* **Situation Initiale :** Les routes API `POST`, `PUT`, `DELETE /posts` sont ouvertes sans vérification.
* **Difficulté :** N'importe quel internaute peut supprimer un article ou modifier le contenu publié par autrui.
* **Comportement Attendu :** Seuls les utilisateurs authentifiés peuvent créer un article, et seul l'auteur d'origine ou l'administrateur peut le modifier.

#### 5. Solution
1. **Étape 1 :** Définir les niveaux de privilèges : `LECTEUR` (GET), `AUTEUR` (POST, PUT propre article), `ADMIN` (tous droits).
2. **Étape 2 :** Coder le middleware d'authentification vérifiant le token ou la session.
3. **Étape 3 :** Coder le middleware d'autorisation comparant l'identifiant de l'auteur avec la ressource.
4. **Étape 4 :** Tester les accès non autorisés et valider les retours 401 et 403.
5. **Critère de validation :**
   * *Given* un utilisateur ayant le rôle `AUTEUR`, *When* il tente d'exécuter `DELETE /posts/article-dun-autre`, *Then* l'API renvoie un code HTTP 403 Forbidden.

---

### Lab 05 : Cache et Optimisation des Performances de Lecture

#### 1. Introduction
* **Contexte :** 95% du trafic d'un blog consiste en des lectures répétées des mêmes articles vedettes.
* **Objectif :** Implémenter un cache de lecture clé-valeur avec mécanisme d'invalidation automatique lors de l'édition d'un article.

#### 2. Stack / Technologies
| Technologie | Type | Rôle dans le Lab |
|:---|:---|:---|
| **lru-cache / Redis** | Cache en mémoire | Stockage clé-valeur ultra-rapide des flux HTML assainis |
| **autocannon** | Outil de test de charge | Mesure comparative des requêtes par seconde et de la latence |

#### 3. Définition
* **Cache Hit vs Cache Miss :** Le *Cache Hit* survient lorsque la donnée demandée est déjà en mémoire rapide ; le *Cache Miss* oblige à interroger le stockage principal et à régénérer la donnée.
* **Invalidation de Cache :** Mécanisme critique garantissant qu'une donnée modifiée n'est plus servie dans son ancienne version en mémoire.

#### 4. Problématique
* **Situation Initiale :** Chaque visite sur un article déclenche une lecture disque et un parsing Markdown complet.
* **Difficulté :** Lors d'un pic de trafic, le serveur sature. Si un cache est ajouté sans invalidation, les corrections des auteurs ne s'affichent pas pour les lecteurs.
* **Comportement Attendu :** Réponse en mémoire instantanée avec purge immédiate de la clé lors d'un `PUT` sur l'article.

#### 5. Solution
1. **Étape 1 :** Établir la mesure initiale de temps de réponse sans cache (baseline).
2. **Étape 2 :** Mettre en place le cache mémoire sous la clé `post:${slug}` avec TTL de 5 minutes.
3. **Étape 3 :** Brancher un hook d'invalidation sur la route de modification pour purger `post:${slug}`.
4. **Étape 4 :** Exécuter un test de charge comparatif.
5. **Critère de validation :**
   * *Given* un article mis en cache, *When* il reçoit 1000 requêtes, *Then* la latence moyenne est divisée par au moins 3 et le stockage n'est sollicité qu'une seule fois.

---

## 5. Matrice de Validation Finale (Definition of Done)

Avant de déclarer un lab prêt pour réalisation ou présentation, vérifier les critères suivants :

- [ ] Les **5 sections obligatoires** sont présentes dans l'ordre strict : Introduction $\to$ Stack $\to$ Définition $\to$ Problématique $\to$ Solution.
- [ ] La **Stack** est restreinte aux technologies utiles au lab, sans dispersion inutile.
- [ ] La **Problématique** énonce une situation initiale, un verrou technique réel et un comportement attendu.
- [ ] La **Solution** détaille un protocole étape par étape avec au moins un critère `Given - When - Then`.
- [ ] La présentation Marp correspondante ([`lab-planning-blog.md`](file:///c:/Lab/Lab%20planning/lab-planning-blog.md)) respecte le thème, l'alternance visuelle et les balises de code explicites.

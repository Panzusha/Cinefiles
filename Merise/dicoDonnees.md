# Dictionnaire de données en amont de la modélisation

Films

Nom|Type|Taille|Description|
|-|-|-|-|
|num_film|Entier|-|Identifiant du film|
|nom|Chaîne de caractères|50|Nom du film|
|extrait|Chaîne de caractères|300|Extrait du pitch|
|pitch|Chaîne de caractères|-|pitch et critique|
|affiche|Chaîne de caractères|100|Lien image|
|année|Chaîne de caractères|10|Date de sortie|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

Réalisateurs

Nom|Type|Taille|Description|
|-|-|-|-|
|num_real|Entier|-|Identifiant du réalisateur|
|nom|Chaîne de caractères|50|Nom du réalisateur|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

Acteurs

Nom|Type|Taille|Description|
|-|-|-|-|
|num_act|Entier|-|Identifiant du commentaire|
|nom|Chaîne de caractères|50|Nom du commentaire|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

Catégories

Nom|Type|Taille|Description|
|-|-|-|-|
|num_cat|Entier|-|Identifiant de la catégorie|
|nom|Chaîne de caractères|100|Nom de la catégorie|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

# Dictionnaire de données après MPD

Films

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Identifiant du film|
|nom|VARCHAR|50|Nom du film|
|extrait|VARCHAR|300|Extrait du pitch|
|pitch|TEXT|-|pitch et critique|
|affiche|VARCHAR|150|Lien image|
|année|BIGINT|-|Date de sortie|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|

Réalisateurs

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Identifiant du réalisateur|
|nom|VARCHAR|50|Nom du réalisateur|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|

Acteurs

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Identifiant de l'acteur|
|nom|VARCHAR|50|Nom de l'acteur|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|

Categories

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Identifiant de la catégorie|
|nom|VARCHAR|50|Nom de la catégorie|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|


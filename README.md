Choix du thème: 
- Site de vente des matériaux de construction.

Exigences fonctionnelles:
- Consultation des produits: détails, description et catégorisation.
- Recherche
- Prise de commandes

Réalisation:
- Élaboration du prototype de la base de données (tables, champs et données à introduire)
- Carte du site
- Palette du site (design)
- Répartition des tâches

Structure du site:
- Partie catalogue (accessible à tous les visiteurs) permettant la consultation des produits et catégories.
- Partie client permettant la gestion d’un compte client. 
- Partie administrateur permettant la gestion de l’inventaire et des transactions.

## Schéma de la base de données:
Client(E-mail, NomClient, MdpClient, AdrClient)
Produit(CodeProduit,NomProduit, Prix, #CodeCatégorie,#CodeFabricant, DescriptionProduit)
Catégorie(CodeCatégorie,NomCatégorie)
Fabricant(CodeFabricant,NomFabricant)
Admin(Email,mot_de_passe)
Panier(ip_add,code_produit,qté,prix_unitaire)
CommandeClient(#numeroFacture,#code_produit,qté,sous-total)
Commandes(numéroFacture, codeClient, date, total, adresse,statut)
 


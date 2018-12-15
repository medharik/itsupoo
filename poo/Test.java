package poo;

public class Test {
public static void main(String[] args) {
	
	//declaration d'un  hp (objet) de type Produit (classe)

	Produit hp , dell;

	
	//instanciation 
	hp=new Produit();
	
hp.libelle="hp dv 6";
hp.prix=9000;
hp.qteStock=100;
hp.afficher();
hp.recharger(50);
hp.afficher();
double ttc=hp.vendre(100);
System.out.println("ttc est "+ttc+ " $");
hp.afficher();

dell=new Produit();
dell.libelle="dell 996";
dell.prix=10000;
dell.qteStock=60;
dell.afficher();
System.out.println(hp);
System.out.println("*************************************");
Categorie  eletro=new Categorie();
eletro.initiliser(3);
eletro.nom="Eletromenager";
eletro.ajouterProduit(hp, 0);
eletro.ajouterProduit(dell,1 );

Produit sony=new Produit();

sony.libelle="sony";
sony.prix=12000;
sony.qteStock=10;
eletro.ajouterProduit(sony, 2);
eletro.afficher();
System.out.println("la valeur du stock eletro : "+eletro.valeurStock()+" $");
}
}

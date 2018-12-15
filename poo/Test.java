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
hp.libelle="dell 996";
hp.prix=10000;
hp.qteStock=60;
hp.afficher();
}
}

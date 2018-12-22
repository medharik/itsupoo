package encapsulation;

public class Produit {
private double  prix , qteStock;
String libelle;

//construteur : methode permettant d'initialiser les attributs

//appeler par new 

//constructeur 
public Produit(String libelle, double prix , double qteStock) {
	this(libelle,prix);
	this.qteStock=qteStock;
}
public Produit(String libelle , double prix) {
	this.prix=prix;
	this.libelle=libelle;
}
public Produit() {
	
}
public void afficher(){
	
	System.out.println("------------------------------------");
	System.out.println("Libellé est "+this.libelle);
	System.out.println("prix est "+this.prix+ " dhs");
	System.out.println("quantité stock :  "+this.qteStock);
	
}

public void setPrix(double prix) throws Exception {

	if (prix < 0) {
		throw new Exception("prix non valide");
	} else {
		this.prix = prix;

	}
}

public void setQteStock(double qteStock) {
	if (qteStock<0) {
		System.out.println("erreur de qte");
	} else {
		this.qteStock = qteStock;

	}
}

public void recharger(double qteARecharger) {
	this.qteStock+=qteARecharger;
}

public void decharger(double qteADecharger) {
	this.qteStock-=qteADecharger;
}

public double vendre(double qteVendre) {
	
	if (qteVendre <= this.qteStock) {
		this.decharger(qteVendre);
		double ttc =this.prix*qteVendre;
		return ttc;
	}else {
		System.out.println("cette vente n'est possible");
	return 0;
	}
	
}


}

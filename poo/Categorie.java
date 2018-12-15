package poo;

public class Categorie {

	String nom;
	Produit  produits [];
	
	void initiliser(int nombreProduit) {
		produits=new Produit[nombreProduit];
	}
	
	 void afficher() {
		 System.out.println("Categorie : "+this.nom);
		
		 for (int i = 0; i < produits.length; i++) {
			 produits[i].afficher();
		}
	 }
	 
	  void ajouterProduit(Produit  produit,int position) {
		this.produits[position]=produit;

	}
	
	  double valeurStock() {
		  double somme=0;
		  for (int i = 0; i < produits.length; i++) {
			somme+= this.produits[i].prix*this.produits[i].qteStock;
			
		}
		  return somme;
	  }
     
	int   nombreProduit(){
		int cpt=0;
		for (int i = 0; i < produits.length; i++) {
			if(this.produits[i]!= null) cpt++;
		}
		return cpt;
	  }
	
}

package poo;

public class Produit {

	//les attributs : fields 
	
	String libelle;
	double prix;
	int qteStock;
	
	//les methodes

	 void afficher() {
		System.out.println("Libellé est : "+libelle);
		System.out.println("Prix est : "+prix);
		System.out.println("quantité en stock est : "+qteStock);
		
	}
	 @Override
	public String toString() {
		
		return "libelle :"+this.libelle+"\nPrix : "+this.prix+"\nQte en stock : "+this.qteStock;
	}
	 
	 
//	 void affichertout() {
//		System.out.println("Libellé est : "+libelle);
//		System.out.println("Prix est : "+prix);
//		System.out.println("quantité en stock est : "+qteStock);
//		
//	}
//	 
	 //recharger ds le stock
	 void recharger(int qteAAJouter){
		 if (qteAAJouter>=0) {
			 this.qteStock += qteAAJouter;
		}else {
			System.out.println("qte non valide");
		}
		
		 
	 }
	 //recharger ds le stock
	 void decharger(int qteAAJouter){
	 
		 this.qteStock -= qteAAJouter;
		
	 }
	 
	 boolean ventePossible(int qte) {
		 
		  return (qte<= this.qteStock);
	 }
	
	double  vendre(int qteAvendre){
		 if (qteAvendre> 0 && this.ventePossible(qteAvendre)) {
			double ttc =this.prix*qteAvendre;
			this.decharger(qteAvendre);
			return ttc;
		}
		
		 
		
		System.out.println("erreur , la quantité est incorrecte ");
		return 0;
		
	
	 }
	 
	 
}

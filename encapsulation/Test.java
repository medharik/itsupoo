package encapsulation;

import javax.swing.JOptionPane;

public class Test {
	
public static void main(String[] args) {
	double ttc=0;
	Produit hp =new Produit("hp sv 7", 2000, 10);//instanciation

	Produit dell =new Produit("dell",9000);
	Produit sony=new Produit();
	hp.afficher();	
	try {
		hp.setPrix(1000);
		hp.setQteStock(10); 
	 ttc = hp.vendre(8);
		hp.afficher();
		System.out.println("ttc est : "+ttc+" dhs");


	} catch (Exception e) {
	JOptionPane.showMessageDialog(null,e.getMessage());
	}
	
System.out.println("fin du progrmme");

	
 hp.afficher();
	
}

}

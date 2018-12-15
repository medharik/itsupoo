package pacMethodes;

import java.util.Scanner;

public class Methodes {

	public static void main(String[] args) {
		double note[]=new double[3];
		double somme=0 , moyenne=0 ;
		
		note= saisir();
		somme=calculerSomme(note);
		System.out.println("la somme est "+somme);
		moyenne=	 calculerMoyenne(somme);
		System.out.println("la moyenne est : "+moyenne);
		observer(moyenne);
	
	}

	
	
	
	
	
	
	
	
	
	
	private static void observer(double moyenne) {

		if (moyenne>=10) {
			System.out.println("ok");
		} else {
			System.out.println("ko");
		}
	}

	private static double calculerMoyenne(double somme) {
 
		return (somme/3);
	}


	private static double calculerSomme(double[] note) {
	double s=0;
		for (double e : note) {
			s+=e;
		}
		return s;
	}

	private static double[] saisir() {
		Scanner clavier=new Scanner(System.in);
		double note[]=new double [3];
	for (int i = 0; i < note.length; i++) {
		System.out.println("entrer la note numero "+(i+1));
		note[i]=clavier.nextDouble();
		
	}
	
	
		
		return note;
	}
}

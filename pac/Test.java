package pac;

import java.util.Scanner;

public class Test {
  public static void main(String[] args) {
	  Scanner clavier=new Scanner(System.in);
	  double note=0;
	  boolean valide=false;
	  int nombreEssai=3;
	  
	  do {
		  
	  System.out.println("entrer une note");
	  note=clavier.nextDouble();
	  
	   valide=note>=0 && note <=20;
	  
	   if (!valide) {
		   nombreEssai--;
		  
		   
		System.out.println("note non valide, il vous reste "+nombreEssai+" fois");
		if (nombreEssai==0) {
			System.out.println("arret du programme");
			return ;
		}
	   }
	  }while(!valide);
	   
	  
	  if (note>=10) {
		System.out.println("module ok");
	} else {
		System.out.println("module ko");
	}
	  
	  
	  
	  
}
}

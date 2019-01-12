package polymorphisme_examen2014;

public abstract class Technicien {
String specialite;
int numero;
public Technicien() {

	// TODO Auto-generated constructor stub
}
	
public Technicien(int numero,String specialite ) {
this.numero=numero;
this.specialite=specialite;
}
@Override
	public String toString() {
		
		return numero+ " "+specialite;
	}
public abstract double calculSalaire() ;
}


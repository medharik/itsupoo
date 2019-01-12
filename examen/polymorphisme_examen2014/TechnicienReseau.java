package polymorphisme_examen2014;

public class TechnicienReseau extends Technicien {
final double  TAUX=40;
	double nombreHeure,tarifHoraire;
	
	public TechnicienReseau() {

	}	
	public TechnicienReseau(int numero ,String specialite, double nombreHeure, double tarifHoraire) {
		super(numero, specialite);
this.nombreHeure=nombreHeure;
this.tarifHoraire=tarifHoraire;

	}	
	@Override
	public double calculSalaire() {
	
		double salaire =0;
		if(nombreHeure<=35) {
			salaire=nombreHeure*tarifHoraire;
		}else {
			salaire=35*tarifHoraire+(nombreHeure-35)*tarifHoraire*1.40;
			
		}
		return salaire*4;
	}

	
}

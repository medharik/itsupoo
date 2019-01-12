package polymorphisme_examen2014;

public class TechnicienDev extends Technicien{
	final double PRIME=25;
	double montantFixe;
	private int nombreIntervention;
	
	public int getNombreIntervention() {
		return nombreIntervention;
	}
	
	public void setNombreIntervention(int nombreIntervention) throws Exception {
	if(nombreIntervention<0) throw new Exception("Nombre intervetion invalide");
	
	else 
		this.nombreIntervention = nombreIntervention;
	}
	

	public TechnicienDev(int numero, String specialite, double montantFixe, int nombreIntervention) {
		super(numero, specialite);
		this.montantFixe = montantFixe;
		this.nombreIntervention = nombreIntervention;
	}

	public TechnicienDev() {
		super();
	}

	@Override
	public double calculSalaire() {
		
		
		return montantFixe+nombreIntervention*PRIME;
	}
}

package polymorphisme_examen2014;

public class Remun {

	public static void main(String[] args) {
		
		Technicien t[]= {new TechnicienReseau(10, "TS RESEAUX",44, 80),
				
		new TechnicienDev(11, "TS DEV", 2800, 10)
		};
		
	for (Technicien x : t) {
System.out.println(x+" touche un salaire de "+x.calculSalaire());

		
	}
	}
}

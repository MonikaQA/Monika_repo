
public class Dog extends Animal{
	 String dogcategory;

	public Dog(String AnimalType, String name, int age, String dogcategory) {
		super(AnimalType, name, age);
		this.dogcategory=dogcategory;
	}

public void dogdetails() {
	// TODO Auto-generated method stub
System.out.println( "dog category: " +this.dogcategory);
System.out.println(details(dogcategory, dogcategory, age));
}
}

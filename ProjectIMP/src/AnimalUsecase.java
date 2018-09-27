
public class AnimalUsecase {
public static void main(String[] args) {
	Animal Dogpet= new Dog("pet","hammy",1,"pug");
	Dogpet.details("wild", "tom", 2);
	((Dog) Dogpet).dogdetails();
	Dog dog2= new Dog("pamerian", "jackey", 4, "Pet");
	dog2.dogdetails();
}
}

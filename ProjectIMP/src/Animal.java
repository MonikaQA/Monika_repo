
public class Animal {
String AnimalType;
String name;
int age;
public Animal(String AnimalType, String name, int age){
this.AnimalType=AnimalType;
this.name=name;
this.age=age;
	}
public String details(String AnimalType, String name, int age){
	return this.AnimalType +" age is : " +this.age+" name is animal :"+this.name;
}
}

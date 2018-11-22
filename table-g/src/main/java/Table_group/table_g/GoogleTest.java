package Table_group.table_g;

import java.util.List;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;


public class GoogleTest {
 public  static WebDriver driver;
 public static String Path="http://www.google.com";
 public static void main(String[] args) {
	System.setProperty("webdriver.gecko.driver", "Exefile/geckodriver");
	driver = new FirefoxDriver();
	driver.get(Path);
	driver.findElement(By.name("q")).sendKeys("Monika kush");

 List <WebElement> All_sugestion=driver.findElements(By.xpath(".//div[@class='gstl_0 sbdd_a']"));
for(int i=0; i<All_sugestion.size(); i++){
String OPtionText= All_sugestion.get(i).getText();
System.out.println("option text is:" +OPtionText);}
}
}

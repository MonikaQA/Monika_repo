package Table_group.table_g;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.firefox.FirefoxOptions;
import org.openqa.selenium.firefox.FirefoxProfile;
import org.openqa.selenium.interactions.SendKeysAction;
import org.openqa.selenium.remote.DesiredCapabilities;

public class makeMyTrip {
public static WebDriver driver;
public static String path="https://www.easemytrip.com/";
public static void main(String[] args) throws InterruptedException {
	System.setProperty("webdriver.gecko.driver","Exefile/geckodriver");
	driver= new FirefoxDriver();
	driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	// finding Xpath for Enter departure place
	driver.get(path);	

		Thread.sleep(3000);
//		FirefoxProfile profile = new FirefoxProfile();
//        profile.setPreference("permissions.default.desktop-notification", 1);
//        DesiredCapabilities capabilities=DesiredCapabilities.firefox();
//        capabilities.setCapability(FirefoxDriver.PROFILE, profile);
//        driver = new FirefoxDriver(capabilities);
//        driver.get(path); 
//		FirefoxOptions options = new FirefoxOptions();
//		options.addArguments("--disable-notifications");	
//	driver =new FirefoxDriver(options);
		WebElement fromInput=driver.findElement(By.id("FromSector_show"));
		fromInput.click();
		fromInput.sendKeys("Del"+Keys.DOWN+"\n");

//	
		//Add alert  switch to disable notification - "--disable-notifications"
	java.util.List<WebElement> allOptions = driver.findElements(By.xpath(".//div[@class='tp-cit']"));
for(int i=0; i<allOptions.size(); i++){
String option= allOptions.get(i).getText();
System.out.println("here is the value: " +option);
}


//driver.findelement(by
//drivern[@id='spn12'
}
//".//div[@class="month3"]/img[2][@id='img2Nex']"; 
 
}

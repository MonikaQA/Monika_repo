package Table_group.table_g;
import java.util.List;
import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.By.ByTagName;
import org.openqa.selenium.firefox.FirefoxDriver;

public class GetTableValue {
	 static WebDriver driver;
	  public static String key="Exefile/geckodriver";
	 public static void main(String[] args) {
	
	System.setProperty("webdriver.gecko.driver", key);
	driver= new FirefoxDriver();
	driver.manage().window().maximize();
	driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
	  driver.get("https://money.rediff.com/gainers/bsc/daily/groupa");
	  WebElement myTable=driver.findElement(By.xpath(".//table"));
	  List<WebElement> table_rows=driver.findElements(By.tagName("tr"));
	  int Row_count=table_rows.size();
	  for (int row = 0; row<Row_count; row++){
		  List <WebElement> Columns_row= table_rows.get(row).findElements(By.tagName("td"));
		  int table_column=Columns_row.size();
		   System.out.println("Numberof row" +row+ ": column are: " +Columns_row);
	  for(int col=0; col<table_column; col++){
		  String cellText=Columns_row.get(col).getText();
		  System.out.println(" cell Value of row number: " +row+" and column number: " +col+" is: " +cellText);
		  
	  }
	  System.out.println("--------------------------------------------");
	  }
	  

	 }
	 
}

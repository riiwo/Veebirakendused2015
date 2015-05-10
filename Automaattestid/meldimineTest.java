package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class MeldimineTest {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new FirefoxDriver();
    baseUrl = "http://valimised.azurewebsites.net/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }

  @Test
  public void testMeldimine() throws Exception {
    driver.get(baseUrl + "/index.php");
    driver.findElement(By.cssSelector("img[alt=\"home\"]")).click();
    driver.findElement(By.linkText("Sisene")).click();
    driver.findElement(By.id("register_form")).click();
    driver.findElement(By.id("email_reg")).clear();
    driver.findElement(By.id("email_reg")).sendKeys("Kristjan@test.ee");
    driver.findElement(By.id("password_reg")).clear();
    driver.findElement(By.id("password_reg")).sendKeys("kristjan");
    driver.findElement(By.id("password_check_reg")).clear();
    driver.findElement(By.id("password_check_reg")).sendKeys("kristjan");
    driver.findElement(By.id("firstname_reg")).clear();
    driver.findElement(By.id("firstname_reg")).sendKeys("Kristjan");
    driver.findElement(By.id("lastname_reg")).clear();
    driver.findElement(By.id("lastname_reg")).sendKeys("Tsimmer");
    driver.findElement(By.id("register_user")).click();
    assertEquals("Sisestatud emailiga kasutaja on olemas", driver.findElement(By.cssSelector("span.check-register-feedback")).getText());
    driver.findElement(By.cssSelector("i.fa.fa-times")).click();
    driver.findElement(By.cssSelector("div.user_register > div.action_btns > div.one_half > a.btn.back_btn")).click();
    driver.findElement(By.cssSelector("i.fa.fa-times")).click();
    driver.findElement(By.cssSelector("img[alt=\"home\"]")).click();
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}

import unittest
from selenium import webdriver
from selenium.common.exceptions import NoSuchElementException
import selenium.webdriver.support.ui as ui

class testAddBlogPost(unittest.TestCase):

    def setUp(self):
        self.driver = webdriver.Firefox()

    def test_add_blog_post(self):


        data_provider = {
            'author': 'Testowy Autor',
            'email': 'test@wp.pl',
            'website': 'http://wp.pl',
            'comment': 'Ja uwielbiam ja, Ona tu jest, i tanczy dla mnie'
        }
    
        driver = self.driver
        wait = ui.WebDriverWait(driver,10)
        driver.get("http://blog.lc")
        read_more_element = driver.find_element_by_css_selector("h1 > a[href='/post/1']")
        read_more_element.click()

        wait.until(lambda driver: driver.find_element_by_css_selector('#author'))
        author_input = driver.find_element_by_css_selector("#author")
        author_input.send_keys(data_provider['author'])

        wait.until(lambda driver: driver.find_element_by_css_selector('#email'))
        email_input = driver.find_element_by_css_selector("#email")
        email_input.send_keys(data_provider['email'])

        wait.until(lambda driver: driver.find_element_by_css_selector('#url'))
        website_input = driver.find_element_by_css_selector("#url")
        website_input.send_keys(data_provider['website'])

        wait.until(lambda driver: driver.find_element_by_css_selector('#comment'))
        comment_input = driver.find_element_by_css_selector("#comment")
        comment_input.send_keys(data_provider['comment'])

        submit_post = driver.find_element_by_css_selector('#submit')
        submit_post.click()

        try:
            driver.find_element_by_css_selector(
                '[href="%s"]' % data_provider['website']
            )
        except NoSuchElementException:
            self.fail('Element not found')
        
    def tearDown(self):
        self.driver.close()

if __name__ == "__main__":
    unittest.main()
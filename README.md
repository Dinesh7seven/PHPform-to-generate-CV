# PHPform-to-generate-CV
Form using PHP that allows users to create a CV
The Assignment is divided into modular files for clarity :
* index.php *: Core logic for handling form submissions and displaying the CV.
* form.html *: Contains the form structure, making it reusable.
* styles.css *: Handles styling for both the form and CV template.
* script.js *: Adds dynamic functionality for appending form fields.
Use of PHP's htmlspecialchars prevents XSS attacks, ensuring security.
Code is clean, commented, and adheres to best practices.

** Form Submission and Data Collection
Users can fill in their:
         Contact Details: Name, email, phone number.
         Education: Degree, institution, completion date, and marks/percentage.
         Work Experience: Job title, company, and duration.
         Skills: A list of technical, language, or other relevant skills.
Users can dynamically add multiple entries for education and experience without refreshing the page.

**The CV displays:
                Contact Information: Presented at the top with clear alignment.
                Education Section: Lists degrees with institutions, completion dates, and marks.
                Experience Section: Highlights roles, companies, and job durations.
                Skills Section: Summarizes skills in a concise paragraph.

How to Run:

1 . Place all files in the same directory under the htdocs folder of your XAMPP or similar server.
2 . Open the browser and navigate to http://localhost/project-folder-name/.
3 . Use the form to fill in details and view the generated CV on the same page.

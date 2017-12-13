Survey Engine Website

This site is a very simple polling site. Unfortunately I was not able to get to the point of putting
multiple polls into a survey. It has a basic site structure taken from the book along with the css file. 

The user will see a greeting upon entering the page explaining the basic function of the site. This greeting is read in from a text file hmeGreet.txt which can be easily edited. They can then choose to answer one of the two questions that are active
and view the percentage results.

The administrator can access the admin page by clicking on a link in the header. 

Admin login: admin  
Password:    fu

The admin can add a question in a form that is then pushed to the database. The admin can also change the active questions, 
this page displays all questions in the database and uses text boxes to identify active questions. There is most likely a better way to do this, but for now the site writes to a text file which is then read by the question pages to identify
the active poll.

There is also a session variable to keep the same user from voting more than once in a session. This feature has been disabled in process.php by using a session destroy at the end of the page for testing purposes. 

Problems:
-If all answers have 0 votes, a division by zero error occurs on the page. 
-A user cannot go to the admin log in page, then click back to home, they must log in and return from the admin home page, or use the back button. 

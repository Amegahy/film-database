## Documentation of the process

Below I will document the process I went through on each of the key pieces of functionality for this project. 

### 1. Login functionality
- First point is to ensure the simple functionalty of the form is correct. I have only implemented a simple
POST HTML form with the web.php routes file handing the call. This function just redirects the user back to the homepage on submission. 
- Next is to save the username in as a session variable so it can be referenced elsewhere in the site. Either by its actual value or with an isset() to check if they're actually logged in. 
- Next is to handle the navigation bar changes when the user is logged in. Currently the "Login" nav item still says "Login" when it should read "Logout" if the user is logged in and visa versa. Thought that these files would be able to handle inline PHP, but requires a custom tag in order to read the session varibale and then pass that to the frontend. 



## Given more time

Below I will document the points I would have liked to improve upon given more time and resources:

### 1. Login functionality
- Improve upon the form validation. Curently the form just has basic "required" attributes attached to each of the fields. To improve upon this, I would have implemented some JS (perhaps AJAX) in order to give better user feedbackon validation. 
- Add in a call to a database with user details. This would check the users deatils in the database to see if they are actually a user. The error thrown back from the DB would have been handled with a mix of PHP and AJAX. 

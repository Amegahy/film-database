## Documentation of the process

Below I will document the process I went through on each of the key pieces of functionality for this project. 

### 1. Login functionality
- First point is to ensure the simple functionalty of the form is correct. I have only implemented a simple
POST HTML form with the web.php routes file handing the call. This function just redirects the user back to the homepage on submission. 
- Next is to save the username in as a session variable so it can be referenced elsewhere in the site. Either by its actual value or with an isset() to check if they're actually logged in. 
- Next is to handle the navigation bar changes when the user is logged in. Currently the "Login" nav item still says "Login" when it should read "Logout" if the user is logged in and visa versa. Thought that these files would be able to handle inline PHP, but requires a custom tag in order to read the session varibale and then pass that to the frontend. 

### 2. Members Only
- First thing to do here is to give the admin user control over which pages are members only. There is a toggle field which can be added to blueprints which should do it, if the value can be checked by the antler file.
- Next, will need to combine this check with the logged in check from the previous stage. This way the page will only appear if the user is logged in. 
    - Looks like there is no native AND operator for the if statements so will have to do nested ifs

### 3. Gallery
- Firstly need to setup API keys via https://www.themoviedb.org/settings/api
- Have the API keys, now need to get JSON data via PHP get call. However, could not get the call to integrate with the antler variables. For some reason the data was no being pulled through to the HTML file. Due to time restraints, I ahve added the call into the inline JS and output the list of moives that way. Not really happy with this, but it does function and this would be an area I'd like to redo. 
- Focused just on functionality in this branch as style changes can be done closer to the end of the project. 

## Given more time

Below I will document the points I would have liked to improve upon given more time and resources:

### 1. Login functionality
- Improve upon the form validation. Curently the form just has basic "required" attributes attached to each of the fields. To improve upon this, I would have implemented some JS (perhaps AJAX) in order to give better user feedbackon validation. 
- Add in a call to a database with user details. This would check the users deatils in the database to see if they are actually a user. The error thrown back from the DB would have been handled with a mix of PHP and AJAX. 

### 2. Members Only
- Would like to add a checker into the actual view for the members only pages which would do the same check as the nav loop does. Thsi way, users cant get around the check by just typeing in the url. This would probably be done with the same checker added to the nav file or the routes file, that way it will be on every page.

### 3. Gallery
- Would like to go back and remove the JS call to the API and get the call working via PHP. However, due to lack of knoweldge on Antler, was unsure on how why the data wasn't being pulled through correctly. So more practice with pulling in data and forming loops in Anterl would be needed. 
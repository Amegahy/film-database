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

### 4.1 Search
- Initial thoughts were to redo the JS and use AJAX in order to accomedate a live search and filter. However, realised it could be pretty annoying and resource intensive if we were to contantly keep updating the page each time they selected a filter or added some text in the search bar. Therefore, will just use vanilla JS and adapt the current js functionality. 
- Decided to reorganise the vanilla JS into jQuery as it is easier to work with, espeically when calling APIs and referencing HTML elements. 
- Moved the main loop for populating the movies into its own function. One, so it can be resued when it comes to do the search and filetering. Secondly, to segement it out of the main block and make it erasier to read. Also did the same for the API call so that it too can be reused. 

### 4.2 Filters
- With the filters, it is important to first check wheat actions the API can handle and build the filters around those. Rather than building filters and trying to manipulate the data coming in to fit our needs. 
- Have to rework the main API in order to make it return a call. Due to the process being Async, I was not getting the data back to populate the genres table correctly. 
- Had a weird issue with the checkboxes not being checked when they are clicked. I think this is because that whole section is being populated by jQuery. Fixed this with an onclick method toggling the attribute.
- Checked each of the checkboxes and added the ids of the checked ones to an array. This was then used in the API url to grab the movies with the relevant genres.   

### 5 Clean up
- Rearrange the gallery page in order for it to resemble the design. Currently the functionalit is complete, but CSS and structural changes are required. CSS will need to go into the gallery view as I am unable to use vite to pull in a seperate file. I have been able to use some of the exisitng classes from Tailwind in order to cut down on custom CSS. 
    - Had to use a lot of CSS in the file to override some core styles. For some reason no changes made to site.css were taking effect, which is why they are all in either the gallery view or the nav view
- Remove all console.logs which were sued for testing and are not erro catching related
- Review comments left on fucntions and flesh them out where required for better readabilty. 
- Go through each of the pages in the CMS and add dummy content to flesh them out a bit more rather than just blank pages

## Given more time

Below I will document the points I would have liked to improve upon given more time and resources:

### 1. Login functionality
- Improve upon the form validation. Curently the form just has basic "required" attributes attached to each of the fields. To improve upon this, I would have implemented some JS (perhaps AJAX) in order to give better user feedbackon validation. 
- Add in a call to a database with user details. This would check the users deatils in the database to see if they are actually a user. The error thrown back from the DB would have been handled with a mix of PHP and AJAX. 

### 2. Members Only
- Would like to add a checker into the actual view for the members only pages which would do the same check as the nav loop does. Thsi way, users cant get around the check by just typeing in the url. This would probably be done with the same checker added to the nav file or the routes file, that way it will be on every page.

### 3. Gallery
- Would like to go back and remove the JS call to the API and get the call working via PHP. However, due to lack of knoweldge on Antler, was unsure on how why the data wasn't being pulled through correctly. So more practice with pulling in data and forming loops in Anterl would be needed.
- Pagination functionality, as currently only the first page loads in. this would be done by taking the functionality in JS and adding it into a function. This function would then be called when the page loads to populate it, passing in a parameter of "page 1". Then again when the user clicks next page, which would increment the page index count. Then again if they go back a page, decreasing the count. Each time calling the function to repopulate the page. 

### 4.1 Search
- This ties into the previous stages improvements of moving the api call over to php and get the loop working that way. 

### 4.2 Filters
- Add more filters in, such as a date picker. Could do this with a standard date picker and then change the format into something which can be used with the API. Would probably use the 'year' attribute in the API to grab that. 
- Would like to combine the functionality of the serach bar and the filters so that the user can search through filtered movies. Would need to add a check to both the filter and search buttons to check the others value and add it to the API url it passes through. 
- Would be good to add a "Clear" button to the filters to remove all filters. This would just be done by looping through each of the elemtns, in the same way it is already done to check them, and setting checked to unchecked. Then run the function to repopulate the page. 

### 5 Clean up
- I'd like to move both the JS and CSS in the gallery view into their own seperate files and pull them in via vite. However, due to lack of experience with the platofrm, I am unsure on how to do this. 
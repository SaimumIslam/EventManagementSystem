<h1>Event Management System</h1>

<b>Abstract</b> 
A web application or web app is a client-server software application in which the client (or user interface) runs in a web browser. Common web applications include webmail, online management systems, online retail sales and many other functions.
Our Event Management System is a web application to manage or Host an Event. It provides effective tools to maintain the total management system.


<b>Introduction:</b>
The Event management system will look after all the tasks that are necessary to be performed within a particular Event. The system will be developed to reduce the paper work which are being performed by the various organization to manage an event . However, no system can be successful without human beings and the major task of this system will be to eliminate the processing time and produce result on time.



<b>Project Objectives:</b>
In this Event Management System:<ol>
    <li>Users are able to create a new account.</li>
    <li>Users are able to host a new event. </li>
    <li>Users are able to join in an existing event. </li>
    <li>Admins are able to update their event programs.</li>
    <li>Users are able to find the other user who will join on a particular event.</li>
    <li>Users are able to communicate with event admin. </li>
    <li>Only admin can add a new program on his/her event.</li>
    <li>Every user can able to update their profile.</li>
    <li>User can pay for an event in-order to join.</li>
    <li>User can registration in a specific date that have been provided by event creator.</li>
</ol>


<b>Required Software & Tools:</b>
    1. HTML.
    2. PHP
    3. Database: Mysql.
    4. CSS, CSS framework: Bootstrap.
    5. Web server: Apache – XAMPP.
    6. Sublime text.







Project Description:
In this management system, we built a web application from where the whole
Event Management System is controlled. There is one kind of account in general but every user can be able to create or host a new event and play a role as admin. In this system, all the information about user and event are stored.
At first users have to create a new account if he/she has no previous one.
After that a user can be able to create or host his/her new event. In this application user have full access on his profile. 




Interesting Queries:
Users can find:
    1. All event.
    2. Upcoming Events.
    3. Past Events.
    4. Event Hoster Name.
    5. All program List in a particular event.
    6. Pay for a particular program.
    7. Communicate with the event creator.
    8. All user who paid for a particular event.
    9. Their own information. 




Schema Diagram:
    • user_information: (u_id, username, email, phone, password, city)
    • event_creation: (event_id, event_title, start_registration_date, end_registration_date, event_start_date, organized_by, venue, event_length, about, user_id)
    • event_option: (option_id, option_title, fee, time, building, event_id)
    • event_comment: (comment_comment_datetime, event_id, user_id)
    • event_user_add: (organization, transaction, active, user_id, option_id)
    • message: (id,  message, datetime, user_id, even_id, hosteroruser)







Functional Dependency:

    • user_information: (u_id, username, email, phone, password, city)
		{u_id} → {username, email, phone, password, city}
		{email} → {u_id, username, email, phone, password, city}
		{u_id, email} → {username, phone, password, city}



    • event_creation: (event_id, event_title, start_reistration_date, end_registration_date, event_start_date, organized_by, venue, event_length, about, user_id)

		
	{event_id} → {event_title, start_reistration_date, end_registration_date, 	event_start_date, organized_by, venue, event_length,  about, user_id}
		
	{user_id} → {event_id, event_title, start_reistration_date, 	end_registration_date,event_start_date, organized_by, venue, 	event_length, 	about}
		
	{event_id, user_id} → {event_title, start_reistration_date, 				end_registration_date,event_start_date, organized_by, 					venue, event_length, about}



    • event_option: (option_id, option_title, fee, time, building, event_id)
		
	{option_id} → {option_title, dee, time, building, event_id}

	{event_id} → {option_id, option_title, dee, time, building}

	{option_id, event_id} → {option_title, dee, time, building}









    • event_comment: (comment, comment_datetime, event_id, user_id)
	
	{event_id} → {comment, comment_datetime, user_id}
	
	{user_id} → {comment, comment_datetime, event_id}

	{event_id, user_id} → {comment, comment_datetime}
		
    • event_user_add: (organization, transaction, active, user_id, option_id)

	{user_id} → {organization, transaction, active, option_id}

	{option_id} → {organization, transaction, active, user_id}

	{user_id, option_id} → {organization, transaction, active}



    • message: (id,  message, datetime, user_id, even_id, hosteroruser)
	
	{id} → {message, datetime, user_id, event_id, hosteroruser}
	
	{user_id} → {id, message, datetime, event_id, hosteroruser}

	{event_id} → {id, message, datetime, user_id, hosteroruser}
	
	{id, user_id} → {message, datetime, event_id, hosteroruser}

	{id, event_id} → {message, datetime, user_id, hosteroruser}
	
	{user_id, event_id} → {id, message, datetime,  hosteroruser}

	{id, user_id, event_id} → {message, datetime, hosteroruser}		













Entity Relationship Diagram: 
	




















Database Design:
























Website Layout:

* This is the home page.
* User can also view about us page. 



*Menu bar for home page





*Menu bar in after login













* User can view all event, upcoming event and past event , his profile, event he created from this page



* User can also view all event, upcoming event and past event from this page
 



*Event view, here users are able to find all information about event and communicate with the admin and also publish his feedback about event.



* Here admin can be able to add more programs on hi event.














* Here admin will be able to reply users message.




* In this section users will be able to send a message to admin of an event















*Here All user will be able to see registered user for an event.





*In this section user will be able to create new event











































*About us page














Conclusion:
The Event management system allows the user to create or host an event and also join an event which will reduce their sufferings and reduce time. In a word, the total Event Management System is digitalized in this web application.

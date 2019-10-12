<h1>Event Management System</h1>

<br><h2>Group Members:</h2>
	<ol>
	<li>Saimum Islam (160227)</li>
	<li>Md. Abdul Lotif (160212)</li>
	</ol>

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
    
    <ol>
    <li>HTML.</li>
    <li>PHP</li>
    <li>Database: Mysql.</li>
    <li>CSS, CSS framework: Bootstrap.</li>
    <li>Web server: Apache – XAMPP.</li>
    <li>Sublime text.</li>
   </ol>



<b>Project Description:</b>
In this management system, we built a web application from where the whole
Event Management System is controlled. There is one kind of account in general but every user can be able to create or host a new event and play a role as admin. In this system, all the information about user and event are stored.
At first users have to create a new account if he/she has no previous one.
After that a user can be able to create or host his/her new event. In this application user have full access on his profile. 


<b>Interesting Queries:</b>
Users can find:<ol>
    <li>All event.</li>
    <li>Upcoming Events.</li>
    <li>Past Events.</li>
    <li>Event Hoster Name.</li>
    <li>All program List in a particular event.</li>
    <li>Pay for a particular program.</li>
    <li>Communicate with the event creator.</li>
    <li>All user who paid for a particular event.</li>
    <li>Their own information.</li> 
</ol>



Schema Diagram:
    • user_information: (u_id, username, email, phone, password, city)
    • event_creation: (event_id, event_title, start_registration_date, end_registration_date, event_start_date, organized_by, 		venue, event_length, about, user_id)
    • event_option: (option_id, option_title, fee, time, building, event_id)
    • event_comment: (comment_comment_datetime, event_id, user_id)
    • event_user_add: (organization, transaction, active, user_id, option_id)
    • message: (id,  message, datetime, user_id, even_id, hosteroruser)

<b>Conclusion:</b>
The Event management system allows the user to create or host an event and also join an event which will reduce their sufferings and reduce time. In a word, the total Event Management System is digitalized in this web application.

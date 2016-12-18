# secure-session-login

<p> A secure login/logout form and database with sessions and timeouts to protect from unauthorized access.
<b>PHP</b> and <b>MySQL</b> was used to create the form and administration interface.</p>

<p>1. Clone files to localhost.</p>
<p>2. Create a new database in phpMyAdmin.</p>
<p>2. Add a new global user granted all privileges.</p>
<p>3. Connect to the database by creating a dbinfo.php file and add in your information.</p>
const DB_HOST = "localhost";			
const DB_USER = "(user)";<br>
const DB_PASS = "(generated password)";<br>
const DB_NAME = "(database name)";	

Form - index.php
Dashboard Control Panel - page01.php

User Profile - profile.php
Add Student - add_user.php
Manage Database - table_students.php

## Database Table

Add User - add_user_admin.php
Update User - update_page.php
Delete User - delete_page.php

## Security

Validations - session-authorize.php
Terminate session and prevent brute force - security-guard.php

## Process pages (Acknowledge successful operation)

process_page_adduser.php
process_page_adduser_admin.php
process_page_delete.php
process_page_update.php









<i>Extra layer of security to prevent brute force by adding mixed characters that match authorize page</i><br> 
security-guard.php<br>

<h2>Styles</h2>

table.css<br>
blue.css<br>
green.css<br>
style.css<br>

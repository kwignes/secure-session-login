# Secure Session Login

<p> A secure login/logout form with sessions to protect from unauthorized access.

<p>Licensed under <a href="https://opensource.org/licenses/MIT">MIT</a></p>

<b>PHP</b> and <b>MySQL</b> was used to create the form and administration interface. <a href="http://kwignes.htpwebdesign.ca/session_login">Secure Login</a></p>

## Setup

1. Clone files to localhost.<br>
2. Create a new database in phpMyAdmin.<br>
2. Add a new global user granted all privileges.<br>
3. Connect to the database by creating a dbinfo.php file and add in your information.

const DB_HOST = "localhost";			
const DB_USER = "(user)";<br>
const DB_PASS = "(generated password)";<br>
const DB_NAME = "(database name)";	

Form - <b>index.php</b><br>
Dashboard Control Panel - <b>page01.php</b>

User Profile - <b>profile.php</b><br>
Add Student - <b>add_user.php</b><br>
Manage Database - <b>table_students.php</b>

### Database Table

Add User - <b>add_user_admin.php</b><br>
Update User - <b>update_page.php</b><br>
Delete User - <b>delete_page.php</b>

### Security

Validations - <b>session-authorize.php</b><br>
Terminate session and prevent brute force - <b>security-guard.php</b>

### Process pages - Confirm operation

<b>process_page_adduser.php</b><br>
<b>process_page_adduser_admin.php</b><br>
<b>process_page_delete.php</b><br>
<b>process_page_update.php</b>

<h2>Styles</h2>

<b>style.css<br>
Font Awesome CDN<br>
Eric Meyer Reset
# Secure Session Login

<p> A secure login/logout form with sessions to protect from unauthorized access.

<b>PHP</b> and <b>MySQL</b> was used to create the form and administration interface.</p>

## Setup

1. Clone files to localhost.<br>
2. Create a new database in phpMyAdmin.<br>
2. Add a new global user granted all privileges.<br>
3. Connect to the database by creating a dbinfo.php file and add in your information.

const DB_HOST = "localhost";<br>			
const DB_USER = "(user)";<br>
const DB_PASS = "(generated password)";<br>
const DB_NAME = "(database name)";	

Form - index.php<br>
Dashboard Control Panel - page01.php

User Profile - profile.php<br>
Add Student - add_user.php<br>
Manage Database - table_students.php

### Database Table

Add User - add_user_admin.php<br>
Update User - update_page.php<br>
Delete User - delete_page.php

### Security

Validations - session-authorize.php<br>
Terminate session and prevent brute force - security-guard.php

### Process pages - Confirm operation

process_page_adduser.php<br>
process_page_adduser_admin.php<br>
process_page_delete.php<br>
process_page_update.php

<h2>Styles</h2>

style.css<br>
Font Awesome CDN<br>
Eric Meyer Reset
# secure-session-login

<p> A secure login/logout form with sessions and timeouts to protect database from unauthorized access.
<b>PHP</b> and <b>MySQL</b> was used to create the form and administration interface.</p>

<p>1. Download ZIP and extract to localhost.</p>
<p>2. Open <b>phpMyAdmin</b> and create a new database.</p>
<p>3. Connect to the database by creating a dbinfo.php file and add in your information.</p>
const DB_HOST	 = "";			
const DB_USER	 = "";<br>
const DB_PASS	= "";<br>
const DB_NAME = "";	

<h2>Contents</h2>

index.php<br>
add_user.php<br>
add_user_admin.php<br>
process_page_adduser.php<br>
process_page_adduser_admin.php<br>
process_page_delete.php<br>
process_page_update.php<br>
profile.php<br>
session-authorize.php<br>
session-logout.php<br>
session-timeout.php<br>
session-timeout-message.php<br>
update_page.php<br>
page01.php<br>
table_students.php<br>

<i>Extra layer of security to prevent brute force by adding mixed characters that match authorize page</i><br> 
security-guard.php<br>

<h2>Styles</h2>

table.css<br>
blue.css<br>
green.css<br>
style.css<br>

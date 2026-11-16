<?php
# phpinfo(); //function to show all info about installed php

//Basic Syntax
/* content outside the php tags is ignored
closing tags can be omitted if a file is exclusively php to avoid white space


*/

 echo "hello\n";
 print_r("Hello World\n");
 // short tags are not recommended btw<?= 'print this string' also works without other statements.

 echo "a"; echo "b"; echo "c";
#The output will be "abc" with no errors

/* -------------------------
       VARIABLE
       ----------------*/
 $age = 34 ;
 echo $age;



 /*
 ----------------------
 Types
 ------------------------
 
$boool =True;
int , float, string, array, object, resource(holds a ref to an external resource eg images)
never(shows function does not terminate) 

*/



/* 
-------------
Concatenating
------------
.  or .=
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
var_dump($b);

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"
var_dump($a);


curly brackets can also be used with double quotes
this is faster btw
 echo "qwe{$a}rty"; // qwe12345rty, using braces
 echo "qwe" . $a . "rty"; // qwe12345rty, concatenation used
Be careful so that you don't type "." instead of ";" at the end of a line.

 ?><?
echo 'a'.
$c = 'x';
echo 'b';
echo 'c';

---------
PRINTING THE VARS
----------------------------

var_dump($age)
?>

The output is "axbc", because of the dot on the first line.


isset() is used to cjeck if variable is defined.
str_word_count( counts words);
str_replace(wordtobereplaced, replacer)

----------------------------
ARRAYS
-------------------------
It allows mixed type arrays

$User =[15, "apple" , True];

Associative arrays
$User = [ 'name' => "Zura",
            'age' => 23,
            'hobbies' => ['coding', 'tenis']
        ]

----------------
FUNCTIONS
----------------

function sayhello(){
echo "Hello, World!"
}

sayHello();

--------------------------
FORMS
------------------

--------
strings
--------
Double quotes have a special feature called variable interpolation - they can include variables directly inside the string using the dollar $ sign:

<?php
$name = "Alice";
$greeting = "Hello, $name!";
echo $greeting; // Outputs: Hello, Alice!
?>
Single quotes, however, treat everything literally and don't process variables inside them. For example:

<?php
$name = "Alice";
$greeting = 'Hello, $name!';
echo $greeting; // Outputs: Hello, $name!

-------
Incude and require
-------------------
Difference between include() and include_once():

include()	include_once()
The include() function is used to include a PHP file into another irrespective of whether the file is included before or not.	The include_once() will first check whether a file is already included or not and if it is already included then it will not include it again.
This include() function is mainly used where you want to include a certain code again and again.	This include_once() function is mainly used where you want to include a certain code just for once.
The include() function will execute every time it is called in the program.	The include_once() function will not execute every time it is called (ie. It will not execute if the file to be included is included before)
Mostly include() function is used to load optional template-like files.	Mostly include_once() function is used to load optional dependencies (classes, functions, constants)


use INCLUDE when file is optional, Use require when file  is required

GET vs POST requests in PHP
GET and POST are two HTTP methods used to send data from a browser to a server.
1. GET request
A GET request sends data through the URL.

Example URL:
https://example.com/search?name=Nyari&age=25


In PHP, you access this data using $_GET:
$name = $_GET['name'];
$age = $_GET['age'];

echo $name;


Use GET when:
- Searching for something.
- Filtering or sorting results.
- Retrieving information.
- You want the URL to contain the submitted information.
2. POST request
A POST request sends data in the HTTP request body rather than displaying it in the URL.

HTML form:
<form method="POST" action="process.php">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>


PHP (process.php):
$name = $_POST['name'];

echo $name;


Use POST when:
- Submitting registration forms.
- Logging in.
- Sending contact form details.
- Creating or updating information on a server.
3. The key differences
GET	POST
Data appears in the URL	Data is sent in the request body
Uses $_GET in PHP	Uses $_POST in PHP
Best for retrieving data	Commonly used for submitting data
Can be bookmarked with its parameters	Submitted data isn't normally stored in the URL
Limited practical URL length	Supports larger request bodies

Remember this
- GET = Get information.
- POST = Send information.
One important security note: POST does not automatically make information secure. Use HTTPS to encrypt data in transit, especially passwords and personal information.
- Profile pictures.
- CV uploads.
- Document uploads.
- Image uploads.
Important: Always validate file size, file type and actual file content before accepting an upload. Don't trust the original filename.
7. $_REQUEST – Access GET, POST and COOKIE data
This is a combined array that can contain data from GET, POST and COOKIE, depending on PHP configuration.

Example:
$name = $_REQUEST['name'] ?? 'Guest';

echo $name;


If the name value is available from a configured request source, PHP can retrieve it.

Common uses:

- Accessing request data from multiple sources.

However, it's generally better to use $_GET or $_POST explicitly because you know exactly where the data is coming from.
8. $GLOBALS – Access global variables
Allows you to access variables defined in the global scope from inside functions.

Example:
$name = 'Jenny';

function greet() {
    echo $GLOBALS['name'];
}

greet();


Output:
Jenny


Common uses:
- Accessing global variables inside functions.
- Working with variables defined outside a function.
GET vs POST: Complete summary
1. GET requests
Purpose: To request or retrieve information from a server.

A GET request can carry additional information from the browser to the server through URL parameters.

Example: A customer searches for a dress.

URL:
shop.com/search.php?category=dresses


PHP:
$category = $_GET['category'] ?? '';

echo $category;


Output:
dresses


The process:
1. The user searches for dresses.
2. The browser sends a GET request.
3. The search parameter is included in the URL.
4. PHP reads the parameter using $_GET.
5. The server retrieves matching dresses and returns the results.
Common uses:
- Search functionality.
- Product filtering.
- Sorting.
- Pagination.
- Retrieving specific records.
2. POST requests
Purpose: To submit data to a server for processing.

POST sends information in the HTTP request body rather than the URL.

Example: A customer registers an account.

HTML:
<form method="POST" action="register.php">
    <input type="text" name="username">
    <input type="email" name="email">
    <button type="submit">Register</button>
</form>


PHP:
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';


The process:
1. The user enters their information.
2. The browser sends a POST request.
3. The information is sent in the request body.
4. PHP receives it using $_POST.
5. The server processes the registration and responds.
Common uses:
- Registration.
- Login forms.
- Contact forms.
- Uploading files.
- Creating or updating records.
3. Visualising the difference
GET: Requesting information
Browser

Search for dresses

GET request

URL: ?category=dresses

Server

Finds matching products

Response

Returns matching dresses


POST: Submitting information
Browser

User fills in registration form

POST request

Data sent in request body

Server

Processes registration

Response

Returns success or error message


4. Comparison table
Feature	GET	POST
Main purpose	Retrieve information	Submit information
Data location	URL parameters	Request body
PHP variable	$_GET	$_POST
Bookmarkable parameters	Yes	No, not normally
Browser history	Parameters may appear	Body data normally doesn't
Typical use	Search	Registration
Should change server data?	No	Often, yes


5. What else should you know?
There are six additional concepts worth understanding.
A. GET and POST are HTTP methods
They are not PHP-specific.

HTTP is the protocol that allows browsers and servers to communicate.

PHP simply provides superglobals that make accessing the submitted data easier.
B. GET and POST are not automatically secure
A common misconception is that POST is secure because its information isn't visible in the URL.

That's not entirely true.
- GET exposes parameters in the URL.
- POST keeps the data out of the URL, but the request body can still be intercepted without encryption.
- HTTPS encrypts information during transmission.
Always use HTTPS when handling sensitive information.
C. The name attribute matters
Consider:
<input type="text" name="username">


PHP accesses it using:
$_POST['username'];


Not:
$_POST['name'];


The name attribute determines the key PHP receives.
D. Always check whether data exists
Instead of:
$name = $_POST['username'];


Prefer:
$name = $_POST['username'] ?? '';


The ?? operator provides a fallback if the submitted value is missing or null.

You can also use isset():
if (isset($_POST['username'])) {
    echo "Username was submitted";
}


E. You can check which HTTP method was used
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "POST request received";
}


This is useful when the same PHP page displays a form and processes its submission.
F. GET and POST have different HTTP semantics
This is a little more advanced, but worth knowing:
- GET should be safe: retrieving information should not change server data.
- GET should be idempotent: repeating the same request should have the same intended effect.
- POST is not necessarily idempotent: submitting the same registration or payment twice could create duplicate actions.

Basic validation and sanitisation in PHP
These two concepts are essential whenever you're collecting information from users through forms.

Imagine you're building a registration form for Nya Digital Studio. A user enters:
- Name: Jenny
- Email: jenny@gmail
- Password: 123
Should your application accept this information?

Not necessarily. You need to validate and sanitise the input before processing it.
1. Validation: Is the information correct?
Validation checks whether the information submitted by the user meets your requirements.

For example:
- Is the name provided?
- Is the email address valid?
- Is the password long enough?
- Is the age within the accepted range?
Example:
$email = $_POST['email'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
} else {
    echo "Valid email address";
}


Here:
- filter_var() applies a filter to a value.
- FILTER_VALIDATE_EMAIL checks whether the value has a valid email format.
- The if statement determines what happens based on the result.
Notice that validation checks the input. It doesn't automatically correct it.
2. Sanitisation: Clean the information
Sanitisation modifies or cleans input to remove or encode unwanted characters.

For example, imagine someone enters their email with unnecessary spaces:
   jenny@gmail.com


You can use trim():
$email = trim($_POST['email'] ?? '');


This removes whitespace from the beginning and end.

Another example:
$email = filter_var($email, FILTER_SANITIZE_EMAIL);


This removes characters that are not permitted by the email sanitisation filter.

Important distinction: Sanitising an email does not prove that it is a valid email. You still need validation.
3. Escaping output with htmlspecialchars()
This is particularly important for security.

Imagine a user enters:
<script>alert('Hacked!')</script>


If you display user input directly as HTML, you could expose your website to a cross-site scripting (XSS) attack.

Instead:
$name = $_POST['name'] ?? '';

echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');


htmlspecialchars() converts special characters into HTML entities so the browser displays them as text rather than interpreting them as HTML code.

For example:
<script>


becomes:
&lt;script&gt;


Remember: escape output when displaying user-provided text in HTML.
4. Validation vs sanitisation vs escaping
This is the most important distinction to remember.
Concept	What it does	PHP example
Validation	Checks whether input meets requirements	filter_var()
Sanitisation	Cleans or modifies input	trim()
Escaping	Makes output safe for a particular context	htmlspecialchars()

Think of it this way:
- Validation: Is this information acceptable?
- Sanitisation: Can I clean this information?
- Escaping: How do I safely display this information?
5. Practical example: Processing a registration form
Let's combine what we've learned.

HTML:
<form method="POST" action="register.php">

    <input type="text" name="name" placeholder="Your name">

    <input type="email" name="email" placeholder="Your email">

    <button type="submit">Register</button>

</form>


PHP (register.php):
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve and sanitise input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // Validate name
    if ($name === '') {
        echo "Name is required.";
    }

    // Validate email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email.";
    }

    // Successful validation
    else {
        echo "Welcome, " .
             htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    }
}

?>


Notice the order:
1. Check whether the request is POST.
2. Retrieve the submitted information.
3. Clean the input.
4. Validate the information.
5. Process it if valid.
6. Escape it when displaying it.
6. Three additional security concepts worth knowing
Since you're learning PHP for WordPress development, understand these too.

A. SQL injection

Never insert user input directly into an SQL query.

Dangerous:
$sql = "SELECT * FROM users WHERE email = '$email'";


Instead, use prepared statements with PDO or MySQLi.
$stmt = $pdo->prepare(
    "SELECT * FROM users WHERE email = ?"
);

$stmt->execute([$email]);


Prepared statements help prevent SQL injection.

B. Password hashing

Never store passwords as plain text.

Use:
$hashedPassword = password_hash(
    $password,
    PASSWORD_DEFAULT
);


To verify a password later:
password_verify($password, $hashedPassword);


C. Client-side vs server-side validation

You can validate information using JavaScript or HTML in the browser, but users can bypass those checks.

Therefore, always perform important validation on the server using PHP.

Your PHP refresher cheat sheet
The functions you should recognise
Function	Purpose
trim()	Removes surrounding whitespace
filter_var()	Validates or sanitises values
htmlspecialchars()	Escapes HTML special characters
isset()	Checks whether a variable is set and not null
empty()	Checks whether a value is empty
password_hash()	Hashes passwords
password_verify()	Checks passwords against hashes
prepare()	Prepares parameterised SQL statements
*/
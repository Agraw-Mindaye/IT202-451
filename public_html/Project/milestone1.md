<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Agraw Mindaye (am3525)</td></tr>
<tr><td> <em>Generated: </em> 7/1/2023 3:38:39 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/am3525" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T18.55.25inavlid_email-username_mismatch-password.png.webp?alt=media&token=a537ccab-58f5-4536-9b4f-aca4fcbc9519"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing inavlid email and username, along with mismatching passwords<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T18.56.24email_taken.png.webp?alt=media&token=fe852aac-bc6f-4e3a-82e2-7a2a00c41a0b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T18.56.46username_taken.png.webp?alt=media&token=ca5eca71-8af7-48c5-8c3d-ec42c91c4189"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username not available <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T18.58.14valid_data.png.webp?alt=media&token=4ccb41f5-0e78-47f9-8a13-5ef9da1a74ee"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing valid data before submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T19.01.00users_table.png.webp?alt=media&token=e7527102-8ac6-4a40-88ea-5205dff759c4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing users table with the data from Task 1, where &quot;id&quot; is &#39;12&#39;<br>in row 5<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/14">https://github.com/Agraw-Mindaye/IT202-451/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When a user submits the form using the &quot;register&quot; button, the &#39;&quot;validate&quot; function<br>is called to perform client side validation. The &quot;validate&quot; function first checks to<br>see if an &#39;@&#39; symbol exists in the email fiedl, and if it<br>does, it checks for a valid email address using the &quot;isValidEmail&quot; function. It<br>then checks for a valid username and password before verifying if the password<br>and confirm password fields match. If there is an error, it calls the<br>&quot;flash&quot; function to display the message and does not submit the form. If<br>everything is good, the form is submitted. The server side validation works in<br>the same manner, with the exception of email sanitization using the &quot;sanitize_email&quot; function.&nbsp;<div><br></div><div>The<br>password is handled by first verifying that it consists of at least 8<br>charachters. It is then hashed by using &quot;password_hash&quot; and &quot;PASSWORD_BYCRYPT&quot;.&nbsp;<br>The DB stores user<br>registration data by first preparing a query for the data. It then stores<br>the user&#39;s email, username, and hashed password. The plan text of the password<br>is not stored for security reasons.</div><div>&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T20.52.51wrong_password.png.webp?alt=media&token=fc85a0e8-3030-4425-bd0b-3c5d880a7154"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing wrong password used during login<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T20.53.55non_exist_user.png.webp?alt=media&token=97599ac2-0fde-49c0-81ef-1a4e1f18cc05"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T20.55.47success_login.png.webp?alt=media&token=896aae00-6427-4a97-945b-670d5efce236"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a successful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/15">https://github.com/Agraw-Mindaye/IT202-451/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form collects the user data (email/username and password). It is validated on<br>the client side with the &quot;validate&quot; function that flashes a message if there<br>is an error with the data that the user is trying to submit.<br>If everything is good, the form is submitted. The same JS validation is<br>applied on this login pages as the register page, with the execption of<br>mathcing passwords. On the server side, the code checks if the required fields<br>are set using the &quot;isset&quot; function. If they are present, the PHP validation<br>code is executed and any caught errors are flashed. Again, the same steps<br>are followed to verify a valid email/username and password, with the email also<br>being sanitized once again.<br><br><div>If all the validations pass, the PHP code uses the<br>database to check if the user-provided email/username exists and matches the password. It<br>prepares a query to get the user&#39;s id, email, username, and password from<br>the &quot;Users&quot; table. If a user is found, it verifies the provided password<br>against the hashed password using the &quot;password_verify&quot; function. If the password matches, it<br>sets the user data into the session and directs them to the home<br>page.&nbsp;</div><br>&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T20.59.27success_logout.png.webp?alt=media&token=7e2cc93a-55f3-40ab-95c5-74d3181a8330"/></td></tr>
<tr><td> <em>Caption:</em> <p>SHowing successful logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.00.42login-protected.png.webp?alt=media&token=125311f4-50b4-43d3-94a3-aa336e8f75c6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user can&#39;t access a login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/18">https://github.com/Agraw-Mindaye/IT202-451/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>The PHP code uses "session_start" to start a session that stores persistent data<br>across multiple pages. In login.php, "&nbsp;$_SESSION["user"] = $user;" is used to retreive the<br>user's infromation from the DB and store it in the $_SESSION array. The<br>user's information can be accessed throughout multiple pages, as long as the session<br>is still active. In logout.php, "reset_session" is called to unset the session and<br>free all variables. It then destroys the session and initializes a new one.<br>Afterwards, a flash message is displayed telling the user that they ahve successfully<br>logged out, directing them back to the login page.</div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.07.02login-protected.png.webp?alt=media&token=72c0923c-1078-40f7-af4d-d440dc33c762"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user cannot access login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.08.44role-protected.png.webp?alt=media&token=4ebb86ae-5b3c-4f63-973c-250dd119cad4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shwoing user cannot access role-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.14.29roles_table.png.webp?alt=media&token=118d0051-a723-46cc-adcd-3bb366eac692"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.19.30usersRoles_table.png.webp?alt=media&token=549fcd57-bf2d-4a2d-aaed-04f093b93c01"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing UserRoles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/18">https://github.com/Agraw-Mindaye/IT202-451/pull/18</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/16">https://github.com/Agraw-Mindaye/IT202-451/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>In user_helpers.php, the function &quot;is_logged_in&quot; is defined to check if a user is<br>logged in by checking the session data. If the session data is not<br>set and &quot;redirect&quot; is set to true, the user is sent to the<br>destination page, which is the login page. A flash message is also displayed<br>telling the user they must be logged in to view the page they<br>were trying to access. If &quot;redirect&quot; is false or the session data is<br>set, the function simply returns the login status, which would be true.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>In user_helpers.php, the function &quot;has_role&quot; is defined to&nbsp;verify if the logged-in user has<br>the specified role. It first checks if the user is logged in by<br>calling the &quot;is_logged_in&quot; function. If the user is logged in, it checks if<br>the session data of the user&#39;s roles is set. It then uses a<br>foreach loop to iterate through each role in the array, comparing it compares<br>the role&#39;s name, $r[&quot;name&quot;],&nbsp;with the role parameter passed into the function. If the<br>name matches the specified role, the function returns true, indicating that the user<br>has the required role. If the loop finishes and a matching role isn&#39;t<br>found, the function returns false, meaning the user does not have the required<br>role.&nbsp;&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.57.16nav%26forms_styles.png.webp?alt=media&token=3960e759-1b94-4e6e-b01a-1653b980657d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing navigation and forms are styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-06-30T21.58.42data_styled.png.webp?alt=media&token=e29b17c4-e1fa-485d-9db3-9a46f6f88527"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing data output styled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/15">https://github.com/Agraw-Mindaye/IT202-451/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The styles were chosen to give the app a clean and minimal look.<br>The navigation is displayed horizontally, with spacing in between each link, such as<br>&quot;Login&quot; and &quot;Register&quot;. The background color of the links is set to change<br>when being hovered. The labels are displayed in block format with bold font<br>so that the user can easily identify the section they are looking for.<br>The input fields are also styled to be symmetrical with each other. The<br>buttons to submit a form are styled to be green for visual asthetics.<br>The data diaplyed on pages such as &quot;List Roles&quot; is also displayed in<br>a. symmetrical manner.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.12.03login-protected.png.webp?alt=media&token=0d5d4e49-bfe4-45e6-8f65-0467e92666f6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing error of user attempting to access login-protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.12.37role-protected.png.webp?alt=media&token=fc2c6e5e-dc5c-447d-ba6f-ae3184444bca"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing error of user attempting to access role-protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.13.13inavlid_email-username_mismatch-password.png.webp?alt=media&token=a5321c3c-3182-4ec8-b3a5-fb101d0b872b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user attempting to enter an invalid email and username, and using passwords<br>that do not match<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/17">https://github.com/Agraw-Mindaye/IT202-451/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Technical messages are handled using the &quot;flash&quot; function. This function stores a message<br>as session data so that the messages can be displayed as notifactions, warnings,<br>or errors. It works in combination with the&nbsp; &quot;getMessages&quot; function that retreives the<br>stores flash messages from the session. These messages are are displayed to the<br>user by the JS version of the &quot;flash&quot; function which creates a div<br>for the message, applys CSS themes, sets the content, and then adds it<br>to the DOM.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.18.12profile_page.png.webp?alt=media&token=958035b6-86b3-4059-b9ab-8ea691b6b64b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing profile page with user&#39;s email and username prefilled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/18">https://github.com/Agraw-Mindaye/IT202-451/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The code retreives the user&#39;s data by calling &quot;get_user_email&quot; and &quot;get_username&quot;. The form<br>is prefilled with these two pieces of data everytime the profile page is<br>loaded.When a change is made to the data, the DB is updated and<br>the profile page is reloaded, which allows the form to display the new<br>data, as it uses the two getter functions to prefill the form.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.28.20invalid_email-username_mismatch-password.png.webp?alt=media&token=a10d1d29-e862-4a73-8268-82b3250dfe39"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing invalid email and username, along with mismatching passwords<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.48.30email_taken_profile.png.webp?alt=media&token=5fda1b53-6f07-42f3-8f19-171e1033a145"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing email taken when trying to update profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.48.32username_taken_profile.png.webp?alt=media&token=93b86162-66eb-4882-a89d-48dbd2df2426"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username taken when trying to update profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.54.11incorrect-password.png.webp?alt=media&token=83bde0a7-1505-45f6-ac66-a7872307dd35"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing incorrect password when trying to update profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.23.53userTable_before.png.webp?alt=media&token=1a3ced29-1983-4db0-8012-284af08a37a8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Users table before the change of user &quot;usertest&quot; with &quot;id&quot; &#39;5&#39; in<br>row 3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T00.56.44userTablle_after.png.webp?alt=media&token=723d0181-c7b3-43d9-95db-8454aed36cf5"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Users table after the change, where &quot;usertest&quot; is now &quot;usertest2&quot; with &quot;id&quot;<br>5 in row 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/18">https://github.com/Agraw-Mindaye/IT202-451/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The client side validation invovles JS and the server side invovles PHP for<br>the email, username, and password. It is similar to the process invovled on<br>the register page. If there is an error with the email, username, or<br>password, a flash message is displayed to the user. If the user enters<br>an email or username already being used, there is also a flash message<br>displayed.The same logic applies for the password match, where a flash message is<br>displayed telling the user that the new and confirm passwords must match. The<br>current password is validated using &quot;password_verify&quot;, which checks if the entered password matches<br>what is in the DB. If not, the user receives a message being<br>told that they entered an incorrect password.&nbsp;<div><br>If the email/username and password are valid/correct,<br>however, the form is submitted and the code executes a query to update<br>the user&#39;s information.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T17.23.26PB-1.png.webp?alt=media&token=96820e8f-8f6c-4c83-95d7-0d727679ffce"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing full view of Project Board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-01T17.23.29PB-2.png.webp?alt=media&token=c5b671c2-5d70-456e-bfc5-e64c95cbcca5"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Project Board with the 9 Issues for all 9 features<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Agraw-Mindaye/projects/1/views/1">https://github.com/users/Agraw-Mindaye/projects/1/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://am3525-prod.herokuapp.com/Project/login.php">https://am3525-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/am3525" target="_blank">Grading</a></td></tr></table>
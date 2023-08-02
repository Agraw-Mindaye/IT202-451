<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Agraw Mindaye (am3525)</td></tr>
<tr><td> <em>Generated: </em> 8/2/2023 3:19:06 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-arcade-project/grade/am3525" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediately</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>Arcade game of Rock Paper Scissors<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <div>The player will have an option between rock, paper, and scissors. The computer<br>will randmoly choose between the three options and the&nbsp;</div><div>game will be decided based<br>on the choices made by the player and computer.&nbsp;<br><br></div><div>Each consecutive win is a<br>point for the user and the game ends when they lose, in which<br>their score is recorded.</div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.16.21game_1.png.webp?alt=media&token=36265ef9-8f35-4b3b-a8c5-1704465275de"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the game works<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/43">https://github.com/Agraw-Mindaye/IT202-451/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://am3525-prod.herokuapp.com/Project/rps.php">https://am3525-prod.herokuapp.com/Project/rps.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>The logic used in this game consists of a form submit when saving<br>a score, which prevents a flash message from staying on the screen<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table from the db with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-29T14.41.14UserScoresData.png.webp?alt=media&token=c9fd20ee-b59e-4604-9793-d3f04bbdd8f6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing several scores in the database, where different users can be seen at<br>the bottom of the picture<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the save score code logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-29T18.40.37score_code_1.png.webp?alt=media&token=84ebdc2e-b5f8-4aac-b66f-fac10ef8c466"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that if the form is submitted, the high score that the user<br>received will be inserted into the database as a new score. Additionally, their<br>new score is resetand they start at 0.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-07-29T18.42.00score_code_2.png.webp?alt=media&token=578b18aa-ef59-47d4-b9ea-816c2c1cc831"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that if the user has at least 1 win before losing, a<br>form is submitted so that the database can receive the new score<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>Choice 1 was implimented:&nbsp;<span style="background-color: transparent; font-family: Arial, sans-serif; font-size: 11pt; white-space-collapse: preserve;<br>font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; vertical-align: baseline;">&nbsp;</span><span style="background-color: transparent; font-family:<br>Arial, sans-serif; font-size: 11pt; white-space-collapse: preserve; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; vertical-align:<br>baseline;"><u>Each received score should be a new entry (scores will not be updated)</u></span><div><br></div><div>Every<br>time the user wins a game, their score increases by 1 point. If<br>they lose, and they have a score that is at least 1, a<br>hidden form is submitted. Their score from the form submission is stored in<br>a variable and is used to insert into the database for the user.<br>Lastly, the user&#39;s score is reset so that thye can try to achieve<br>a new high score.&nbsp;<br><br>***Ties do not affect the game, only wins and loses&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/46">https://github.com/Agraw-Mindaye/IT202-451/pull/46</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.29.57profile_scores.png.webp?alt=media&token=4d0b7560-abd9-453e-b2e2-96850fae3e86"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing 10 scores on profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>When the user accesses their profile page, a query is sued to request<br>infromation from the db. The information consists of the user&#39;s latest 10 scores,<br>along with their timestamps. It is displayed on the page in a list<br>fromat using a foreach loop.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/48">https://github.com/Agraw-Mindaye/IT202-451/pull/48</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://am3525-prod.herokuapp.com/Project/profile.php">https://am3525-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputting the 4 different scoreboard durations (daily, weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.57.40scoreboard_functions_1.png.webp?alt=media&token=a767f1a1-681f-4c0f-a31f-c15e82479a2c"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the daily and weekly scoreboard functions<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.57.51scoreboard_functions_2.png.webp?alt=media&token=e4b2369a-3764-441b-92ec-b45d56b9d607"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the monthly and lifetime scoreboard functions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>Each function uses a query to request information from the db. This information<br>is the username, score, and timestamp. The statement is executed and the &#39;fetchAll&#39;<br>method is used to return all the rows of the query result.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/51">https://github.com/Agraw-Mindaye/IT202-451/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.52.27homePage_1.png.webp?alt=media&token=4f789080-4527-4c42-bb87-a11b205e195f"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing home page heading with daily and weekly scoreboards<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T18.53.04homePage_2.png.webp?alt=media&token=0cbfd57f-1f06-4fe3-b59b-d1296010d1ee"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing home page with monthly and lifetime scoreboards<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>The results of the scoreboard functions are stored into variables and then displayed<br>in a list format by iterating through with a foreach loop.&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Agraw-Mindaye/IT202-451/pull/53">https://github.com/Agraw-Mindaye/IT202-451/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://am3525-prod.herokuapp.com/Project/home.php">https://am3525-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fam3525%2F2023-08-02T19.10.34M2_Issues.png.webp?alt=media&token=d93dc6e7-ba24-4580-a468-1c55b8d9beb4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the project board with completed issues for Milestone 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://am3525-prod.herokuapp.com/Project/login.php">https://am3525-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-arcade-project/grade/am3525" target="_blank">Grading</a></td></tr></table>
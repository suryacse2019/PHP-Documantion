CRUD in PHP:-
**************
Any Application in Entire world, it will use mainly one principal 
called Crud to manage Any data.

1. C : create the Any Thing in db (table,data,)
	   Insert Query.
		
2. R : Read the Data from the database.
	   Select Query.
		
3. U : Update the Data from the database.
	   Update Query.

4. D : Delete the Data from the database.
	   Delete the Query.
	   
1. Registration : create
2. Change Profile : update
3. Change Password : update
4. login : select
5. set Profile Pic : insert/Create
6. delete Account : delete
7. logout logic  
8. Book Appointment :  insert
9. Add to cart : insert
10. Remove from the cart : delete
11. Show Product : select
12. show category : select
13. show department : select
14. All Jobs : select
15. Trending Jobs : select
16. Buy Now : Insert
17. forget Password : select ---> update
18. Order-delivery status : order now ---> insert ---> update ,update, update
19. Booking Cancelled : update
20. No Record Found : Deleted

 
What are writable Query
***********************
All Query which perform some changes to the Database is called as, writable Query.
insert,update,delete

All Query which donot perform any changes but returned the set of records
all called readable Query  for example select
So the set of Records Obtained by select Query is called Result Set.

Result set : collection of Rows Obtained by select Query
Result Set count = 0 Not Record Found
Result Set Count = 1 Data is Unique
Result set Count > 1 Data is More and can be duplicate

if Result set count == 1 then use if
if Result set Count > 1 then use loops (for,foreach,while)

After Getting the Result set, Convert the Result set into Associative Array.

Wap in PHP to show, How to Handle Associative Array using Foreach
*******************************************************************

1. Introduction to Json:-
json: javascript Object Notation
Json is not type of Technology, Programming Langauge, Tools
It is just a standard data Convetion

Tags : Data ---> Html
Tags : Data ---> XML
Data : Represent ---> Key and value pairs ---> such that it is highly transpotable over a network then it is called as, JSON.

1. object : {}
Eg :-
{"name":"awnish","class":"12th","marks":50}
	|Keys  |value  |keys   |value  |key |value
	
2. Array : [Element1,Element2,Element3...]
3. Array of Object
	[
		{"name":"awnish","class":"12th","marks":50},
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
	],
	[
		{"name":"awnish","class":"12th","marks":50},
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
	],
	[
		{"name":"awnish","class":"12th","marks":50},
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
		{"name":"awnish","class":"12th","marks":50}
	]
	
	This format of data is called as, Document Data format.
	

Interview Question:-

1. difference B/w mysqli_fetch functions

1. mysqli_fetch_assoc() : Returns the result set in form of Associative array.
2. mysqli_fetch_array() : Returns the result set in form of Numerical or Indexed Array
                          by using constant MYSQLI_BOTH, Associative Array.

3. mysqli_fetch_row : Return the result set in form of row.
4. mysqli_fetch_objects : Returns the result set in form of Objects.



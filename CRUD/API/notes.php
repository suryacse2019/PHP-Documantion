what is Api:-
Api stands for Application Programming Interface.
Api is a Mechanism by using which One Type Application Can communicate with Another
Application.
In general Api is very Big Topic.

Api are used by different Application to data, from one plateform to another plateform
Worldometer.com Corona Virus Api
Any Application A,B,C,D,E,F,G can utilise the Api of Worldmeter.com to get live update
of corona.

1. InterOperability : Conversion of one type of language to some common langauge so
that data can be exchanged without directly converting the one langauge  to another language.

InterOperability refers to sharing of data, from One Application to Another Application
without changing native langauge, by means of some common Interconversion langauge.
or
Sharing of data from One App to another App without directly converting the native
langauge is called InterOperability.

for Eg:
Android ---> Json ---> Java
Python  ----> JSON ----> java
Python -----> JSON ----> PHP
php ----> JSON ---> SQL

Main Feature of Inter-Operability is Plateform Indepent Nature.

php --(serialisation/JSON Encoding)--> JSON --(Deserialisation/JSON Decode)-> SQL
serialisation/JSON Encoding : converting One Type PL. to JSON Object
Deserialisation/JSON Decode : converting JSON type to One Type of Data-type of PL.

Eg:
php ---> json_encode() ----> json (serialisation)
Associative Array ----> Json
 
Json ----> Json_decode() ---> Associative Array. (De-serialisation)
What is Web-service?
*********************

Any Type of Service Access over the Internet is termed as Web-service, it can be any type
of service and can use any protocol.

What is Web-Api?.

The Api which can be accessed only via web Interface or Internet as a medium is called 
as Web-Api

Java Application ---------> Oracle Local DB
               localDriver Api
Game Application ---------> Sound Driver
		Audio Api

Every web-api is Api but not every Api is web-api.

What is soap?.
It is type of web-api which can be used, to transport data/represent the data, in Form
SimpleObject Access Protocol which used XML Data representation.

Eg:
<xml:nmps="version/xml-document-4">
	<xml:Envelope>
		<Employee>
			<user id="1">
				<email>Awi@gmail.com</email>
				<password>1234</password>
			</user>
		</Employee>
	</Envelope>
</xml>
Used for Very Heavy Data Transmission.
Soap is highly scalable
Soap is secure, why because you have access nth node for access real data node.
Soap Architecture Can very very deep that it can be very Complex to handle

what is REST?.
REST: Stands for represtational State transfer,
it is Type of Web-Api which works under http protocol.
its representation is always, In Json Format
It will very very Light weight,
Easy to Handle, due to Organised data structure in form of Key and value pairs
REST Api works on the basis HTTP METHOD 

Request : GET
Request : POST
Request : Options
Request : PATCH
Request : PUT
Request : DELETE
Request : LOCK
Request : HEAD
...
...
...

{
"type":"GET",
"version":"1.0.1",
"status":true,
"error":false,
"code":200,
"data":[
	{"empid":1001,"name":"ravi","salary":10000},
	{"empid":1002,"name":"prabhas","salary":70000},
	{"empid":1003,"name":"vidhyut","salary":40000},
	{"empid":1004,"name":"rajni","salary":30000},
	{"empid":1005,"name":"moksh","salary":20000}
]
"keyword",[],
}


what is Postman?.


What is difference B/w REST & SOAP?.
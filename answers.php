<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Correct Answers.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<div class="container">
<div class=""><?php echo "Hello " . $_SESSION['username'] . " these are the answers to all the questions" ?></div>
<div id="answers">
<dl>
<div class = "ans">
<dt>1. Can you identify the device? </dt>
<dd> Ans: Raspberry Pi.</dd>
<dd>Explanation: The Raspberry Pi is a low cost, credit-card sized computer that 
 plugs into a computer monitor or TV, 
 and uses a standard keyboard and mouse. 
 It is a capable little device that enables people of all 
 ages to explore computing, and to learn how to program in languages like Scratch and Python.
</dd>
</div>

<div class = ans>
<dt>2. What does HTML stand for?
</dt>
<dd> Ans: HyperText Markup Language</dd>
<dd>Explanation: Short for HyperText Markup Language, the authoring language 
used to create documents on the World Wide Web. HTML is similar to SGML, 
although it is not a strict subset. 
HTML defines the structure and layout of a 
Web document by using a variety of tags and attributes.
</dd>
</div>

<div class = ans>
<dt>3.What device is this?</dt>
<dd>Ans: Monitor</dd>
<dd>Explanation: A computer monitor is an output device that 
displays information in pictorial form. 
A monitor usually comprises the display device, circuitry, casing, 
and power supply.
Older monitors used a cathode ray tube (CRT).
</dd>
</div>

<div class = ans>
<dt>4.What does CSS stand for? </dt>
<dd>Ans: Cascading Style Sheets</dd>
<dd>Explanation: It processes the document in two stages: 
The browser converts HTML and CSS into the DOM (Document Object Model). 
The DOM represents the document in the computer's memory. 
It combines the document's content with its style.
</dd>
</div>

<div class = ans>
<dt>5.What is this cable used for?
</dt>
<dd>Ans: Connecting PCs</dd>
<dd>Explanation: An Ethernet cable is the most common type of network 
cable used on a wired network whether at home or in any other business 
establishment. 
This cable connects wired devices together to the local network for 
file sharing and Internet access.
</dd>
</div>

<div class = ans>
<dt>6.What does JS stand for?
</dt>
<dd>Ans: Javascript</dd>
<dd>Explanation:Javascript is a client scripting language which is 
used for creating web pages. It is a standalone language developed in Netscape. 
It is used when a webpage is to be made dynamic and add 
special effects on pages like rollover, roll out and many types of graphics.
</dd>
</div>

<div class = ans>
<dt>7.What is IOT?
</dt>
<dd>Ans: Internet Of Things</dd>
<dd>Explanation: The internet of things, or IoT, is a system of interrelated 
computing devices, mechanical and digital machines, objects, animals 
or people that are provided with unique identifiers ( UIDs ) and 
the ability to transfer data over a 
network without requiring human-to-human or human-to-computer interaction.
</dd>
</div>

<div class = ans>
<dt>8.Who is a Hacker?
</dt>
<dd>Answer:A person who accesses computer networks illegally.
</dd>
<dd>Explanation:Computer hackers are unauthorized users who break into 
computer systems in order to steal, change or destroy information, 
often by installing dangerous malware without your knowledge or consent. 
Their clever tactics and detailed technical knowledge help them access the 
information you really don't want them to have.
</dd>
</div>

<div class = ans>
<dt>9.Who controls the Internet?
</dt>
<dd>Answer: The Internet is not centralized.</dd>
<dd>Explanation:The Internet, sometimes called simply "the Net," 
is a worldwide system of computer networks - 
a network of networks in which users at any one computer can, 
if they have permission, get information from any other computer 
(and sometimes talk directly to users at other computers).
</dd>
</div>

<div class = ans>
<dt>10.What is GitHub used for?
</dt>
<dd>Answer: Project Management</dd>
<dd>Explanation:Explanation: Git is a command-line tool, but the center 
around which all things involving Git revolve is the hub. 
GitHub.com—where developers store 
their projects and network with like minded people.
</dd>
</div>

<div class="stage2"><h1>Answers for the 2nd Stage</h1></div>


<div class = ans>
<dt>1.What is a database?</dt>
<dd>Answer: A storage area for all kinds of data.</dd>
<dd>Explanation: A database is a collection of information that is organized 
so that it can be easily accessed, managed and updated.
Computer databases typically contain aggregations of data records or files, 
such as sales transactions, product catalogs and inventories, and customer 
profiles.
</dd>
</div>

<div class = ans>
<dt>2.What is a database?</dt>
<dd>Answer: A storage area for all kinds of data.</dd>
<dd>Explanation: A database is a collection of information that is organized 
so that it can be easily accessed, managed and updated.
Computer databases typically contain aggregations of data records or files, 
such as sales transactions, product catalogs and inventories, and customer 
profiles.
</dd>
</div>






</dl>
</div>
</div>
</body>

</html>

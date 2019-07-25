<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Answers.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="answers.css"/>
</head>
<body>
<div class="container">
<img src= "img/congrats.png" alt="congrat"/>
<div class="user"><h1><?php echo "Hello " . $_SESSION['username'] . " these are the answers to the questions" ?></h1></div>
<div id="answers">
<dl>
<div class = "ans">
<dt>1. Can you identify the device? </dt>
<dd class="ans"> Ans: Raspberry Pi.</dd>
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
<dd class = "ans"> Ans: HyperText Markup Language</dd>
<dd>Explanation: Short for HyperText Markup Language, the authoring language 
used to create documents on the World Wide Web. HTML is similar to SGML, 
although it is not a strict subset. 
HTML defines the structure and layout of a 
Web document by using a variety of tags and attributes.
</dd>
</div>

<div class = ans>
<dt>3.What device is this?</dt>
<dd class="ans">Ans: Monitor</dd>
<dd>Explanation: A computer monitor is an output device that 
displays information in pictorial form. 
A monitor usually comprises the display device, circuitry, casing, 
and power supply.
Older monitors used a cathode ray tube (CRT).
</dd>
</div>

<div class = ans>
<dt>4.What does CSS stand for? </dt>
<dd class="ans">Ans: Cascading Style Sheets</dd>
<dd>Explanation: It processes the document in two stages: 
The browser converts HTML and CSS into the DOM (Document Object Model). 
The DOM represents the document in the computer's memory. 
It combines the document's content with its style.
</dd>
</div>

<div class = ans>
<dt>5.What is this cable used for?
</dt>
<dd class = "ans">Ans: Connecting PCs</dd>
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
<dd class = "ans">Ans: Javascript</dd>
<dd>Explanation:Javascript is a client scripting language which is 
used for creating web pages. It is a standalone language developed in Netscape. 
It is used when a webpage is to be made dynamic and add 
special effects on pages like rollover, roll out and many types of graphics.
</dd>
</div>

<div class = ans>
<dt>7.What is IOT?
</dt>
<dd class = "ans">Ans: Internet Of Things</dd>
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
<dd class="ans">Answer:A person who accesses computer networks illegally.
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
<dd class="ans">Answer: The Internet is not centralized.</dd>
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
<dd class="ans">Answer: Project Management</dd>
<dd>Explanation:Explanation: Git is a command-line tool, but the center 
around which all things involving Git revolve is the hub. 
GitHub.com—where developers store 
their projects and network with like minded people.
</dd>
</div>

<div class="stage2"><h1>Answers for the 2nd Stage</h1></div>


<div class = ans>
<dt>1.What is a database?</dt>
<dd class="ans">Answer: A storage area for all kinds of data.</dd>
<dd>Explanation: A database is a collection of information that is organized 
so that it can be easily accessed, managed and updated.
Computer databases typically contain aggregations of data records or files, 
such as sales transactions, product catalogs and inventories, and customer 
profiles.
</dd>
</div>

<div class = ans>
<dt>2.In the Linux OS, what is the swap area used for?</dt>
<dd class="ans">Answer:It's a space on disk, used when the amount of physical RAM is full.</dd>
<dd>Explanation:Swap is a space on a disk that is used when the 
amount of physical RAM memory is full. 
When a Linux system runs out of RAM, inactive pages are moved from the 
RAM to the swap space. 
Swap space can take the form of either a dedicated 
swap partition or a swap file
</dd>
</div>

<div class = ans>
<dt>3.What device is this?</dt>
<dd class="ans">Answer: 3D Printer</dd>
<dd>Explanation:3D printing or additive manufacturing is a process of making 
three dimensional solid objects from a digital file.
The creation of a 3D printed object is achieved using 
additive processes. 
In an additive process an object is created by laying 
down successive layers of material until the object is created.
 Each of these layers can be seen as a thinly sliced 
horizontal cross-section of the eventual object.
3D printing is the opposite of subtractive 
manufacturing which is cutting out / hollowing out a piece of 
metal or plastic with for instance a milling machine.
3D printing enables you to produce complex shapes using less
 material than traditional manufacturing methods.
</dd>
</div>

<div class = ans>
<dt>4.What is the meaning of GIGO?</dt>
<dd class="ans">Answer: Garbage In Garbage Out</dd>
<dd>Explanation: Stands for "Garbage In, Garbage Out." 
GIGO is a computer science acronym that implies bad input 
will result in bad output.
Because computers operate using strict logic, 
invalid input may produce unrecognizable output, or "garbage." 
For example, if a program asks for an integer and you enter a string, 
you may get an unexpected result. 
Similarly, if you try to open a binary file in a text editor, 
it may display unreadable conten
</dd>
</div>

<div class = ans>
<dt>5.Where does the @ symbol come from?
</dt>
<dd class="ans">Answer: from Latin</dd>
<dd>Explanation:The origin of the symbol itself, one of
 the most graceful characters on the keyboard, is something of a mystery. 
One theory is that medieval monks, looking for shortcuts while copying 
manuscripts, converted the Latin word for “toward”—ad—to “a” with the back 
part of the “d” as a tail. Or it came from the French word for “at”—à—and 
scribes, striving for efficiency, swept the nib of the pen around the top and 
side. Or the symbol evolved from an abbreviation of “each at”—the “a” being 
encased by an “e.” The first documented use was in 1536, in a letter by 
Francesco Lapi, a Florentine merchant, who used @ to denote units of wine 
called amphorae, which were shipped in large clay jars.
</dd>
</div>

<div class = ans>
<dt>6.Which I.T company has its headquarters in Silicon Valley?
</dt>
<dd class="ans">Answer: Cisco</dd>
<dd>Explanation: Cisco develops, manufactures and sells networking hardware, 
telecommunications equipment and other high-technology services and products.
</dd>
</div>

<div class = ans>
<dt>7.Which company invented the GUI?</dt>
<dd class="ans">Answer: Xerox PARC</dd>
<dd>Explanation:  Engelbart's work directly led to the advances at 
Xerox PARC. Several people went from SRI to Xerox PARC in the early 
1970s. In 1973, Xerox PARC developed the Alto personal computer. 
It had a bitmapped screen, and was the first computer to demonstrate 
the desktop metaphor and graphical user interface (GUI).
</dd>
</div>

<div class = ans>
<dt>8.When was the first CPU invented?</dt>
<dd class="ans">Answer: 1971.</dd>
<dd>Explanation: Intel's first microprocessor, the 4004, was conceived by 
Ted Hoff and Stanley Mazor. Assisted by Masatoshi Shima, 
Federico Faggin used his experience in silicon-gate MOS technology 
(1968 Milestone) to squeeze the 2300 transistors of the 4-bit MPU into a 
16-pin package in 1971.
</dd>
</div>

<div class = ans>
<dt>9.What languages is the MacOS written in?</dt>
<dd class="ans">Answer: C++, Swift, Obj-C</dd>
<dd>Explanation: macOS is a series of graphical operating systems developed and 
marketed by Apple Inc. since 2001. 
It is the primary operating system for Apple's Mac family of computers. 
Within the market of desktop, laptop and home computers, and by web usage, 
it is the second most widely used desktop OS, after Microsoft Windows.
</dd>
</div>

<div class = ans>
<dt>10.What protocol is used to access emails on the internet?</dt>
<dd class="ans">Answer: IMAP (Internet Message Access Protocol).</dd>
<dd>Explanation:IMAP (Internet Message Access Protocol) is a standard email 
protocol that 
stores email messages on a mail server, but allows the end user to 
view and manipulate the messages as though they were stored 
locally on the end user's computing device(s).

</dd>
</div>




















</dl>
</div>
</div>
</body>

</html>

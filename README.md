A Project Report Submitted in Partial Fulfilment of the

```
Requirements for the Award of the Degree of
```
##### BACHELOR OF COMPUTER APPLICATIONS

```
By
```
### Alan Reji- 220021085571

### Under the guidance of

### Ms. Leema George

### Assistant Professor

### Department of Computer Science

##### OCTOBER 2024


# CERTIFICATE

This is to certify that the report titled Note Sharing Pro is a bonafide record of work done by

## Alan Reji (220021085571), Aldrin Biju (2200210585573) of Santhigiri College of Computer

Sciences in partial fulfillment of the requirements of Fifth Semester of Bachelor of Computer

## Applications during the academic year 2024- 2025.

Prof. Dr. Fr. Jose John CMI Mr. Gibin George Ms. Leema George

Principal HOD Project Guide

Internal Examiner External Examnier


### DECLARATION

We Alan Reji, Aldrin Biju hereby declare that the project report, titled **“Note Sharing
Pro”** is a record of original work undertaken by us for the award of the degree of Bachelor
of Computer Applications. We have completed this project under the guidance of Ms.
Leema George, Assistant Professor, Department of Computer Science.

We also declare that this project has not been submitted for the award of any degree. We
hereby confirm the originality of the work.

```
Name Register Number Signature
Alan Reji 220021085571
Aldrin Biju 220021085573
```

```
IV
```
### ACKNOWLEDGEMENT

```
A project is not complete if one fails to acknowledge all who have been instrumental in the
successful completion of the project. If words were to be the symbol of undiluted feelings
and token of gratitude, then let the words play the heralding role of expressing our gratitude.
```
```
First of all, we thank the “God Almighty” for his immense grace and blessings in our life
and at each stage of this project.
We express my sincere and profound gratitude to Prof. Dr. Fr. Jose John CMI, Principal,
Santhigiri of Computer Sciences, Vazhithala for providing all the facilities during the period
of the project.
We extend my gratitude to Mr. Gibin George, Head of the Department of Computer
Science, who is a constant source of inspiration and whose advice helped us to complete
this project successfully.
We express our deep sense of gratitude to our internal project guide, Ms. Leema George,
Assistant Professor, Department of Computer Science, for her profound guidance for the
successful completion of this project.
With great enthusiasm my express my gratitude to all the faculty members of Department
of Computer Science for their timely help and support.
```
Finally, we express our deep appreciation to all our friends and family members for the moral
support and encouragement they have given to complete this project successfully.


### v

### ABSTRACT

### TITLE: NOTE SHARING PRO

```
A Web application for seamless note sharing
```
PROBLEM: The sharing, uploading, managing, and access of note and other documents
seamlessly

```
In the current system for managing and sharing educational resources, documents, and discussions,
the process often involves manual submissions, approvals, and paper-based record keeping. This
increases the paperwork and makes maintaining records tedious. Important educational materials,
such as notes and study resources, are scattered, leading to inefficiencies and a higher risk of data
loss. The main objective of the proposed Note Sharing Pro system is to reduce paperwork and
simplify record maintenance by implementing a centralized database where all documents,
resources, and discussions are stored and managed efficiently.
The proposed system automates the existing processes, reducing the reliance on paper and making
record-keeping easier. It also minimizes the risk of losing valuable data. Note Sharing Pro adapts
intelligently to the needs of educational institutions, allowing students, faculty, and administrators
to manage and share documents and resources more effectively. This project aims to develop a
comprehensive online platform that serves the needs of educational institutions by automating the
workflow of document sharing, approvals, and discussions.
The platform includes features like notifications, document verification, and report generation,
which enhance its functionality. Note Sharing Pro will significantly reduce paperwork, streamline
the sharing of educational resources, and maintain records in a more efficient and organized
manner.
```

## vi

## LIST OF TABLES


### vii

## LIST OF FIGURES

8.8 Pie Chart showing count of documents

8.9 Date wise report of coin allocated to



```
viii
```
### ABBREVIATIONS

IDE Integrated Development Environment
CPU Central Processing Unit
DBMS Data Base Management System
RDBMS Relational Data Base Management System
NF Normal Forms
PK Primary Key
FK Foreign Key
DFD Data Flow Diagram


## Table of Contents


   - 2.1 Sign off table Table Number Table Name Page Number
   - 3.1 tbl_adminlogin
   - 3.2 tbl_district
   - 3.3 tbl_location
   - 3.4 tbl_department
   - 3.5 tbl_course
   - 3.6 tbl_college
   - 3.7 tbl_college_department
   - 3.8 tbl_college_course
   - 3.9 tbl_faculty
   - 3.10 tbl_student
   - 3.11 tbl_subject
   - 3.12 tbl_document
   - 3.13 tbl_walletinfo
   - 3.14 tbl_access
   - 3.15 chatroom
   - 3.16 Chat_member
   - 3.17 chat
   - 3.18 Data Flow Diagram Symbols
- 5.1 Test Case
   - 3.1 Zeroth Level DFD for Note Sharing Pro Figure Number Figure Name Page Number
   - 3.2 First Level DFD for Note Sharing Pro
   - 3.3 Second Level DFD for User Authentication
   - 3.4 Second Level DFD for Registration
   - 3.5 Second Level DFD for Activity
   - 3.6 Second Level DFD for Report
   - 3.7 Login Page
   - 3.8 Students Registration form
   - 4.1 Faculty Registration Page
   - 5.1 Unit testing
   - 5.2 Unit testing result
   - 5.3 Integration testing
   - 5.4 Integration testing result
   - 5.5 Integration testing result
   - 5.6 College Phone Number Validation
   - 8.1 Guest page
   - 8.2 Student Registration
   - 8.3 Login Page
   - 8.4 Admin Index Page
   - 8.5 College Registration
   - 8.6 College Details
   - 8.7 College Details Edit Form
      - uploaded by students based on category
      - students
- 8.10 Excel report of students
- 8.11 Chatroom
- 8.12 Add Chatroom
- 8.13 College Index Page
- 8.14 College Faculty Registration Page
- 8.13 Faculty View Page
- 8.14 Note Verification Page
- 8.15 Note Rejection
- 8.16 Coin Allocation Page
- 8.17 Student Index Page
- 8.18 Profile Page
- 8.19 Student Profile Edit Page
- 8.20 Accessed Document Page
- 8.21 Upload Document Page
- 8.22 Document View Page
- 8.23 Chatroom
- 8.24 Chatroom Chat
- 8.25 Faculty Profile
- 8.26 Forgot Password
- 1. INTRODUCTION
   - 1.1 BACKGROUND AND MOTIVATION
   - 1.2 THE PROPOSED SYSTEM
   - 1.3 PROJECT SCOPE
      - 1.3.1 Limitations of Existing System
      - 1.3.2 Advantages of Proposed System
- 2. SYSTEM ANALYSIS
   - 2.1 INTRODUCTION
   - 2.2 STAKEHOLDERS IN THIS PROJECT
   - 2.3 SOFTWARE REQUIREMENT SPECIFICATION
   - 2.4 FEASIBILITY STUDY
- 2.5 SOFTWARE DEVELOPMENT LIFECYCLE MODEL
- 2.6 HARDWARE AND SOFTWARE REQUIREMENTS
- 3. SYSTEM DESIGN
   - 3.1 SYSTEM ARCHITECTURE
   - 3.2 MODULE DESIGN
   - 3.3 DATABASE DESIGN
   - 3.4 DATA FLOW DIAGRAM
   - 3.5 INTERFACE DESIGN
- 4. IMPLEMENTATION
   - 4.1 CODING STANDARDS
   - 4.2 SAMPLE CODE
- 5. TESTING
   - 5.1 TEST CASES
      - 5.1.1 Unit Testing
      - 5.1.2 Integration Testing
      - 5.1.5 Validation Testing
      - 5.1.6 User Acceptance Testing
   - 5.2 TEST CASE DOCUMENTS
- 6. CONCLUSION
- 7. REFERENCES
- 8. APPENDIX


## 1. INTRODUCTION

### 1.1 BACKGROUND AND MOTIVATION

Note Sharing Pro is an innovative web-based platform designed to revolutionize the
note-sharing experience. The project aims to provide users with a seamless and
convenient way to share various types of documents, PDFs, and more. This platform
addresses the growing need for accessible and organized educational resources,
facilitating a smoother exchange of knowledge and expertise.

The motivation behind Note Sharing Pro stems from the increasing demand for a
centralized system where users can share and access high-quality educational materials.
Traditional methods of sharing notes and resources, such as physical copies or scattered
digital files, are often inefficient and difficult to manage. Note Sharing Pro provides a
structured and user-friendly environment that not only simplifies document sharing but
also incorporates a unique wallet system. This system allows users to earn virtual coins
to access content, ensuring that contributors are rewarded for their efforts and users
have access to valuable resources.

Moreover, the platform's global doubt section enhances its utility by allowing users to
ask questions, seek clarifications, and engage in discussions with peers and experts.
This feature promotes an interactive learning experience, making Note Sharing Pro a
comprehensive tool for both individual study and collaborative learning.

### 1.2 THE PROPOSED SYSTEM

The Note Sharing Pro project connects users who need educational materials with those
who can provide them. The system includes two primary stakeholders: the admin, the
college and the users. The admin is responsible for managing site content, verifying
colleges, monitoring user activity, and overseeing the virtual coin system. The college
is responsible for managing faculty data, verifying documents, also monitoring user
activity and overseeing the virtual coin system. Users, on the other hand, can register,
upload documents, participate in the global doubt section, and utilize virtual coins to
access content.


The platform offers several features designed to streamline the note-sharing process.
Users can upload various document types, including question paper, hand written notes
and PDFs, which are then verified by the college to ensure quality and relevance. The
wallet system allocates free coins to new users, and additional coins can be purchased
to view premium content. The global doubt section allows users to post questions,
provide answers, and engage in meaningful discussions, fostering a collaborative
learning environment.

By integrating these features, Note Sharing Pro makes it easier for users to find and
share educational resources, enhancing the overall learning experience and promoting
knowledge exchange on a global scale.

### 1.3 PROJECT SCOPE

#### 1.3.1 Limitations of Existing System

1. Scattered and unorganized document sharing.
2. Lack of a reward system for contributors.
3. Limited interaction and discussion opportunities.
4. Inefficient verification and quality control of shared documents.
5. Difficulty in accessing diverse types of educational materials.

#### 1.3.2 Advantages of Proposed System

1. Centralized platform for organized document sharing.
2. Reward system through virtual coins to incentivize contributors.
3. Interactive global doubt section for questions and discussions.
4. Admin verification to ensure document quality and relevance.
5. Easy access to various document types, question paper and PDFs.
6. Personalized user dashboards and efficient content management.


## 2. SYSTEM ANALYSIS

### 2.1 INTRODUCTION

Software Engineering is the analysis, design, construction, verification and
management of technical or social entities. To engineer software accurately, a software
engineering process must be defined. System analysis is a detailed study of the various
operations performed by the system and their relationship within and module of the
system. It is a structured method for solving the problems related to the development
of a new system. The detailed investigation of the present system is the focal point of
system analysis. This phase involves the study of parent system and identification of
system objectives. Information has to be collected from all people who are affected by
or who use the system. During analysis, data are collected on the variable files, decision
point and transactions handled by the present system. The main aim of system is to
provide the efficient and user-friendly automation. So, the system analysis process
should be performed with extreme precision, so that an accurate picture of existing
system, its disadvantages and the requirements of the new system can be obtained.

System analysis involves gathering the necessary information and using the structured
tool for analysis. This includes the studying existing system and its drawback, designing
a new system and conducting cost benefit analysis. System analysis is a problem-
solving activity that requires intensive communication between the system users and
system developers. The system is studied to the minute detail and analyzed. The system
is viewed as a whole and the inputs to the system are identified. The outputs from the
organization are traced through various phases of processing of inputs.

There are a number of different approaches to system analysis. When a computer-based
information system is developed, systems analysis (according to the Waterfall model)
would constitute the following steps:

- The development of a feasibility study, involving determining whether a project
    is economically, technologically and operationally feasible.


- Conducting fact-finding measures, designed to ascertain the requirements of the
    system's end-users. These typically span interviews, questionnaires, or visual
    observations of work on the existing system
- Gauging how the end-users would operate the system (in terms of general
    experience in using computer hardware or software), what the system would be
    used for and so on.

Techniques such as interviews, questionnaires etc. can be used for the detailed study of
these processes. The data collected by these sources must be scrutinized to arrive at a
conclusion.

The conclusion is an understanding of how the system functions. This system is called
the Existing System. The Existing system is then subjected to close observation and the
problem areas are identified. The designer now functions as a problem solver and tries
to sort out the difficulties that the enterprise faces. The solutions are given as a proposal
which is the Proposed System. The proposal is then weighed with the existing system
analytically and the best one is selected. The proposal is then presented to the user for
an endorsement by the user. The proposal is reviewed on user request and suitable
changes are made. This is a loop that ends as soon as the user is satisfied with the
proposal.

### 2.2 STAKEHOLDERS IN THIS PROJECT

##### 2.2.1 ADMIN

The website owner has a wide range of power across Note Sharing Pro. The owner
manages the infrastructure of site content (such as templates, style sheets, and
processes). Owner privileges include the ability to make major changes to the system,
typically an operating system. The owner also manages software programs such as the
database management system. This is the first and very important module in the system.
Note Sharing Pro cannot be completed without the presence of the owner. The owner
single-handedly manages the system. There is only one owner in the system.

No system exists without any kind of problem. These problems are handled by the
owner of the system, such as when any user violates the guidelines of the system or


when managing disputes. Here, the owner will play the same role. The owner will
monitor the activity of each user. The owner has the right to add new content to the site,
delete the content of the site, and also update the site content. The owner will approve
or reject the documents uploaded by the users. They can also check the status of virtual
coin transactions.

2.2.2 COLLEGE

The college module is designed to oversee and manage the educational resources shared
on the platform. College administrators are granted extensive powers to manage and
monitor site content, ensuring it aligns with academic standards and guidelines. They
are responsible for approving or rejecting documents uploaded by users, maintaining
the quality and relevance of the shared resources. The college administrators can also
add, update, or delete content on the site, tailoring the platform to meet the institution's
needs. They handle disputes and ensure compliance with platform policies, providing a
structured and secure environment for note sharing. Additionally, college
administrators can track user activity and document usage, generating reports to gain
insights into how the platform is being utilized within their institution.

2.2.3 USER

The user module is designed to provide a seamless and engaging experience for students
and faculty members. Students can register and log into the platform, gaining access to
a personalized dashboard where they can manage their profiles and view their activity
history. They can upload various types of documents, including videos and PDFs,
which are subject to approval by the college administrators. Faculty members can
upload various types of study material, also faculty is free to access any document
without a using any coins. Users can also participate in the global doubt section, posting
questions, providing answers, and engaging in discussions with peers and experts. The
wallet system allows users to earn or purchase virtual coins to access premium content,
incentivizing the sharing of high-quality resources. Through the user module, students
and faculty members can efficiently share and access educational materials, fostering a
collaborative and resource-rich learning environment.


### 2.3 SOFTWARE REQUIREMENT SPECIFICATION

##### 2.3.1 ADMIN

1. Secure login using username and password.
2. Dashboard display upon login, showcasing system overview.
3. Document verification functionality.
4. Management of user accounts and documents.
5. Monitoring and management of user activity.
6. Coin allocation and management.
7. Feature for responding to global doubts.
8. Logout functionality.
2.3.2 COLLEGE
1. Secure login using username and password
2. Personalized dashboard upon login.
3. Add and manage college departments and courses.
4. Add and manage faculty members.
5. Review and approve or reject user-uploaded documents.
6. Add, update, or delete site content.
7. Track user activity and generate reports.
8. Handle user disputes and guideline violations.
9. Manage virtual coin distribution and monitor transactions.
10. Moderate discussions and ensure content quality.
11. Securely log out of the system.
2.3.3 USER
1. Secure login using username and password.
2. Personalized dashboard upon login.
3. Document upload and sharing capabilities.
4. Access to a variety of document types, including videos, PDFs, etc.
5. Wallet system for accessing content.
6. Global doubt section for asking questions and engaging in discussions.
7. User profile management.
8. Logout functionality.


```
Table 2.1. Sign off table
```
### 2.4 FEASIBILITY STUDY

Feasibility is defined as the practical extent to which a project can be performed
successfully. To evaluate feasibility, a feasibility study is performed, which determines
whether the solution considered to accomplish the requirements is practical and
workable in the software. Information such as resource availability, cost estimation for
software development, benefits of the software to the organization after it is developed
and cost to be incurred on its maintenance are considered during the feasibility study.
The objective of the feasibility study is to establish the reasons for developing the
software that is acceptable to users, adaptable to change and conformable to established
standards. Various other objectives of feasibility study are listed below.

- To analyze whether the software will meet organizational requirements.
- To determine whether the software can be implemented using the current
    technology and within the specified budget and schedule.
- To determine whether the software can be integrated with other existing
    software. When our project guide as well as our client Ms. Leema George told
    us regarding the mini project and about Word to the Wise for getting the desired
    product developed, it comes up with rough idea about what all functions the
    software must perform and which all features are expected from the software.

```
Sl. No. Name & Designation Date Accepted
(Yes/No)
1 Leema George
Assistant Professor
Santhigiri College of Computer Sciences
2 Alan Reji
Developer
3 Aldrin Biju
Developer
```
(^)


Referencing to this information, we do a studies and discussions about whether the
desired system and its functionality are feasible to develop and the output of this phase
is a feasibility study report that should contained adequate comments and

recommendations.

Various types of feasibility that we checked include technical feasibility, operational
feasibility, and economic feasibility.

Technical Feasibility
Technical feasibility assesses the current resources (such as hardware and software) and
technology, which are required to accomplish user requirements in the software within
the allocated time and budget. For this, the software development team ascertains
whether the current resources and technology can be upgraded or added in the software
to accomplish specified user requirements. Technical feasibility also performs the
following tasks.

- Analyses the technical skills and capabilities of the software development team
    members.
- Determines whether the relevant technology is stable and established.
- Ascertains that the technology chosen for software development has a large
    number of users so that they can be consulted when problems arise or
    improvements are required.

From our perspective there are two languages PHP, HTML and database MySQL which
are used to develop this web-based applications. PHP is used in the front end and
MySQL is used in the back end. The Word to the Wise is web based and thus can be
accessed through any browsers. As we are using these latest technologies which are
currently trending and used by a number of developers across the globe, we can say that
our project is technically feasible.

Operational Feasibility
Operational feasibility assesses the extent to which the required software performs a
series of steps to solve business problems and user requirements. This feasibility is
dependent on human resources (software development team) and involves visualizing


whether the software will operate after it is developed and be operative once it is
installed. Operational feasibility also performs the following tasks.

- Determines whether the problems anticipated in user requirements are of high
    priority.
- Determines whether the solution suggested by the software development team
    is acceptable.
- Analyses whether users will adapt to a new software.
- Determines whether the organization is satisfied by the alternative solutions
    proposed by the software development team.

We found that our project will be satisfied for the client since we were discussing every
detail about the software with the client at every step. The most important part of
operational feasibility study is the input from client. So, the software is built completely
according to the requirements of the client. We have used the current industry standards
for the software. Hence, we can say that this software is operationally feasible.

Economic Feasibility
Economic feasibility determines whether the required software is capable of generating
financial gains for an organization. It involves the cost incurred on the software
development team, estimated cost of hardware and software, cost of performing
feasibility study, and so on. For this, it is essential to consider expenses made on
purchases (such as hardware purchase) and activities required to carry out software
development. In addition, it is necessary to consider the benefits that can be achieved
by developing the software. Software is said to be economically feasible if it focuses
on the issues listed below.

- Cost incurred on software development to produce long-term gains for an
    organization.
- Cost required to conduct full software investigation (such as requirements
    elicitation and requirements analysis).
- Cost of hardware, software, development team, and training.

It is estimated that our project is economically feasible as development cost is very
minimal since the tools and technologies used are available online. It’s a group student


project so there are no personnel costs. Development time is well planned and will not
affect other operations and activities of the individuals. Once the system has been
developed, the companies purchasing the system will be providing with a manual for
training purposes. There is no need to purchase new hardware since the existing
computers can still be used to implement the new system.

## 2.5 SOFTWARE DEVELOPMENT LIFECYCLE MODEL

One of the basic notions of the software development process is SDLC models which
stand for Software Development Life Cycle models. SDLC – is a continuous process,
which starts from the moment, when it’s made a decision to launch the project and it
ends at the moment of its full remove from the exploitation. Software development
lifecycle (SDLC) is a framework that defines the steps involved in the development of
software. It covers the detailed plan for building, deploying and maintaining the
software. SDLC defines the complete cycle of development i.e. all the tasks involved
in gathering a requirement for the maintenance of a Product.

Some of the common SDLC models are Waterfall Model, V-Shaped Model, Prototype
Model, Spiral Model, Iterative Incremental Model, Big Bang Model, Agile Model. We
used Agile Model for our Project.

Agile Model
Agile Model is a combination of the Iterative and incremental model. This model
focuses more on flexibility while developing a product rather than on the requirement.
In the agile methodology after every development iteration, the client is able to see the
result and understand if he is satisfied with it or he is not. Extreme programming is one
of the practical uses of the agile model. The basis of this model consists of short
meetings where we can review our project. In Agile, a product is broken into small
incremental builds. It is not developed as a complete product in one go. At the end of
each sprint, the project guide verifies the product and after his approval, it is finalized.
Client feedback is taken for improvement and his suggestions and enhancement are
worked on in the next sprint. Testing is done in each sprint to minimize the risk of any
failures.


Advantages of Agile Model:

- It allows more flexibility to adapt to the changes.
- The new feature can be added easily.
- Customer satisfaction as the feedback and suggestions are taken
    at every stage.
- Risks are minimized thanks to the flexible change process

Disadvantages:

- Lack of documentation.
- If a customer is not clear about how exactly they want the
    product to be, then the project would fail.
- With all the corrections and changes there is possibility that the
    project will exceed expected time

## 2.6 HARDWARE AND SOFTWARE REQUIREMENTS

##### 2.6.1 SOFTWARE SPECIFICATION

```
This project is built upon the latest technology software.
Front end : HTML, JavaScript
Development tool : PHP
Database : MySQL
Web server : WAMP server
Operating System : Windows 10
```
2.6.1.1 PHP

PHP is a server-side scripting language designed for web development but also used as
a general-purpose programming language. As of January 2013, PHP was installed on
more than 240 million websites (39% of those sampled) and 2.1 million web servers.
Originally created by Rasmus Lerdorf in 1994, the reference implementation of PHP is
now produced by The PHP Group. While PHP originally stood for Personal Home
Page, it now stands for PHP: Hypertext Pre-processor, a recursive acronym.


PHP code can be simply mixed with HTML code, or it can be used in combination with
various templating engines and web frameworks.\PHP code is usually processed by a
PHP interpreter, which is usually implemented as a web server's native module or a
Common Gateway Interface (CGI) executable. After the PHP code is interpreted and
executed, the web server sends resulting output to its client, usually in form of a part of
the generated web page - for example, PHP code can generate a web pages.

HTML code, an image, or some other data. PHP has also evolved to include a command
line interface (CLI) capability and can be used in standalone graphical applications.

PHP is free software released under the PHP License. PHP has been widely ported and
can be deployed on most web servers on almost every operating system and platform,
free of charge.

2.6.1.2 MySQL

MySQL is the world's most popular open-source database software, with over 100
million copies of its software downloaded or distributed throughout its history. With its
superior speed, reliability, and ease of use, MySQL has become the preferred choice
for Web, Web 2.0, SaaS, ISV, Telecom companies and forward-thinking corporate IT
Managers because it eliminates the major problems associated with downtime,
maintenance and administration for modern, online applications.

Many of the world's largest and fastest-growing organizations use MySQL to save time
and money powering their high-volume Web sites, critical business systems, and
packaged software — including industry leaders such as Yahoo!, Alcatel-Lucent,
Google, Nokia, YouTube, Wikipedia, and Booking.com.

The flagship MySQL offering is MySQL Enterprise, a comprehensive set of
production- tested software, proactive monitoring tools, and premium support services
available in an affordable annual subscription.

MySQL is a key part of LAMP (Linux, Apache, MySQL, PHP / Perl / Python), the fast-
growing open source enterprise software stack. More and more companies are using
LAMP as an alternative to expensive proprietary software stacks because of its lower
cost and freedom from platform lock-in.


MySQL was originally founded and developed in Sweden by two Swedes and a Finn:
David Axmark, Allan Larsson and Michael "Monty" Widenius, who had worked
together since the 1980's. MySQL, the most popular Open Source SQL database
management system, is developed, distributed, and supported by Oracle Corporation.

MySQL is a database management system. A database is a structured collection of data.
It may be anything from a simple shopping list to a picture gallery or the vast amounts
of information in a corporate network. To add, access, and process data stored in a
computer database, you need a database management system such as MySQL Server.
Since computers are very good at handling large amounts of data, database management
systems play a central role in computing, as standalone utilities, or as parts of other
applications.

MySQL databases are relational. A relational database stores data in separate tables
rather than putting all the data in one big storeroom. The database structures are
organized into physical files optimized for speed. The logical model, with objects such
as databases, tables, views, rows, and columns, offers a flexible programming
environment. You set up rules governing the relationships between different data fields,
such as one-to one, one-to- many, unique, required or optional, and ―pointers‖ between
different tables. The database enforces these rules, so that with a well-designed
database, your application never sees inconsistent, duplicate, orphan, out-of-date, or
missing data.

The SQL part of ―MySQL‖ stands for ―Structured Query Language‖. SQL is the most
common standardized language used to access databases. Depending on your
programming environment, you might enter SQL directly (for example, to generate
reports), embed SQL statements into code written in another language, or use a
language- specific API that hides the SQL syntax.

SQL is defined by the ANSI/ISO SQL Standard. The SQL standard has been evolving
since 1986 and several versions exist. In this manual, ―SQL-92‖ refers to the standard
released in 1992, ―SQL:1999‖ refers to the standard released in 1999, and
―SQL:2003‖ refers to the current version of the standard.

We use the phrase ―the SQL standard‖ to mean the current version of the SQL Standard
at any time. MySQL software is Open Source. Open Source means that it is possible


for anyone to use and modify the software. Anybody can download the MySQL
software from the Internet and use it without paying anything. If you wish, you may
study the source code and change it to suit your needs.

The MySQL software use GPL (GNU General Public License),
htttp://www.fsf.org/licenses/, to define what you may and may not do with the software
in different situations. If you feel uncomfortable with the GPL need to embed MySQL
code into a commercial application, you can buy a commercially licensed version from
us.

The MySQL Database Server is very fast, reliable, scalable, and easy to use. If that is
what you are looking for, you should give it a try. MySQL Server can run comfortably
on a desktop or laptop, alongside your other applications, web servers, and so on,
requiring little or no attention. If you dedicate an entire machine to MySQL, you can
adjust the settings to take advantage of all the memory, CPU power, and I/O capacity
available. MySQL can also scale up to clusters of machines, networked together.

MySQL Server was originally developed to handle large databases much faster than
existing solutions and has been successfully used in highly demanding production
environments for several years. Although under constant development, MySQL Server
today offers a rich and useful set of functions. Its connectivity, speed, and security make
MySQL Server highly suited for accessing databases on the Internet. MySQL Server
works in client/server or embedded systems.

The MySQL Database Software is a client/server system that consists of a multi-
threaded SQL server that supports different backends, several different client programs
and libraries, administrative tools, and a wide range of application programming
interfaces (APIs). We also provide MySQL Server as an embedded multi-threaded
library that you can link into your application to get a smaller, faster, easier-to-manage
standalone product.

A large amount of contributed MySQL software is available. MySQL Server has a
practical set of features developed in close cooperation with our users. It is very likely
that your favorite application or language supports the MySQL Database Server.


##### 2.6.1.3 WAMP SERVER

WAMP Server is a Windows web development environment. It allows you to create
web applications with Apache2, PHP and a MySQL database. Alongside,
PhpMyAdmin allows you to manage easily your databases. WAMP Server refers to a
software stack for the Microsoft Windows operating system, created by Romain
Bourdon and consisting of the Apache web server, Open SSL for SSL support, MySQL
database and PHP programming language. WAMP Server is a Web development
platform on Windows that allows you to create dynamic Web applications with
Apache2, PHP, MySQL and MariaDB. WampServer automatically installs everything
you need to intuitively developed Web applications. You will be able to tune your
server without even touching its setting files. Best of all, WampServer is available for
free (under GPML license) in both 32- and 64-bit versions. WampServer is not
compatible with Windows XP, SP3, or Windows Server 2003.

WAMP Server’s functionalities are very complete and easy to use so we won’t explain
here how to use them.

With a left click on WAMP Server’s icon, you will be able to:

- manage your Apache and MySQL services
- switch online/offline (give access to everyone or only localhost)
- install and switch Apache, MySQL and PHP releases
- manage your server’s settings
- access your logs
- access your settings files
- create alias

2.6.1.4 VISUAL STUDIO

Visual Studio Code is a source-code editor that can be used with a variety of
programming languages, including C, C#, C++, FORTRAN, Go, Java, JavaScript,
Node.js, Python, Rust, and Julia. It is based on the Electron framework, which is used
to develop Node.js web applications that run on the Blink layout engine. Visual Studio
Code employs the same editor component (code named "Monaco") used in Azure
DevOps.


Out of the box, Visual Studio Code includes basic support for most common
programming languages. This basic support includes syntax highlighting, bracket
matching, code folding, and configurable snippets. Visual Studio Code also ships with
Intelligent for JavaScript, Type Script, JSON, CSS, and HTML. Support for additional
languages can be provided by freely available extensions on the VS Code Marketplace.
Instead of a project system, it allows users to open one or more directories, which can
then be saved in work spaces for future reuse. This allows it to operate as a language
agnostic code editor for any language. It supports many programming languages and a
set of features that differs per language. Unwanted files and folders can be excluded
from the project tree via the settings. Many Visual Studio Code features are not exposed
through menus or the user interface but can be accessed via the command palette.

2.6.1.5 WINDOWS 1 1

Operating System is defined as a program that manages the computer hardware. An
operating system can be viewed as a scheduler, where it has resources for which it has
charge. Resources include CPU, memory, I/O device and disk space. In another view,
the operating system is a new machine. The third view is that operating system is a
multiplexer which allows sharing of resources provides protection from interference
and provides a level of cooperation between users. This project is developed using
Windows 10 as the operating system and supports its latest versions. Windows 10 is a
series of personal computer operating systems produced by Microsoft as part of its
Windows NT family of operating systems. It is the successor to Windows 10 , and was
released to manufacturing on July 15, 201 9 , and to retail on July 29, 201 9. One of
Windows 10's most notable features is support for universal apps. Windows 10 also
introduced the Microsoft Edge web browser, a virtual desktop system, a window and
desktop management feature called Task View, support for fingerprint and face
recognition login, new security features for enterprise environments, and DirectX12.
Windows 1 1 received mostly positive reviews upon its original release in July 201 9.
Critics praised Microsoft's decision to provide a desktop-oriented interfacing line with
previous versions of Windows, contrasting the tablet-oriented approach of 8, although
Windows 1 1 's touch-oriented user interface mode was criticized for containing
regressions upon the touch-oriented interface of Windows 10. Critics also praised the
improvements to Windows 1 1 's bundled software over Windows 10 , Xbox Live


integration, as well as the functionality and capabilities of the Cortana personal assistant
and the replacement of Internet Explorer with Microsoft Edge. However, media outlets
have been critical of changes to operating system behaviors, including mandatory
update installation, privacy concerns over data collection performed by the OS for
Microsoft and its partners and the adware-like tactics used to promote the operating
system on its release.

2.6.1.6 MICROSOFT WORD

Microsoft Word (or simply Word) is a word processor developed by Microsoft. It was
first released on October 25, 1983 under the name Multi-Tool Word for Xenix systems.
Subsequent versions were later written for several other platforms including IBM PCs
running DOS (1983), Apple Macintosh running the Classic Mac OS (1985), AT&T
Unix PC (1985), Atari ST (1988), OS/2 (1989), Microsoft Windows (1989), SCO Unix
(1994), and macOS (formerly OS X; 2001).

Commercial versions of Word are licensed as a standalone product or as a component
of Microsoft Office, Windows RT or the discontinued Microsoft Works suite. Unlike
most MS-DOS programs at the time, Microsoft Word was designed to be used with a
mouse. Advertisements depicted the Microsoft Mouse, and described Word as a
WYSIWYG, windowed word processor with the ability to undo and display bold, italic,
and underlined text, although it could not render fonts. It was not initially popular, since
its user interface was different from the leading word processor at the time, WordStar.
However, Microsoft steadily improved the product, releasing versions 2.0 through 5.0
over the next six years. In 1985, Microsoft ported Word to the classic Mac OS (known
as Macintosh System Software at the time). This was made easier by Word for DOS
having been designed for use with high-resolution displays and laser printers, even
though none were yet available to the general public. Following the precedents of Lisa
Write and MacWrite, Word for Mac OS added true WYSIWYG features. It fulfilled a
need for a word processor that was more capable than MacWrite. After its release, Word
for Mac OS's sales were higher than its MS-DOS counterpart for at least four years.


##### 2.6.1.7 SMARTDRAW

SmartDraw is a diagram tool used to make flowcharts, organization charts, mind maps,
project charts, and other business visuals. SmartDraw has two versions: an online
edition and a downloadable edition for Windows desktop.

SmartDraw integrates with Microsoft Office products including Word, PowerPoint, and
Excel and G Suite applications like Google Docs and Google Sheets. SmartDraw has
apps for Atlassian's Confluence, Jira, and Trello. SmartDraw is compatible with Google
Drive, Dropbox, Box, and OneDrive.

Since 1994, the mission of SmartDraw Software has been to expand the ways in which
people communicate so that we can clearly understand each other, make informed
decisions, and work together to improve our businesses and the world. We accomplish
this by creating software and services that make it possible for people to capture and
present information as visuals, while being a pleasure to use. In 2019, we took this to
the next level by launching Visual Script, which makes it easy to visualize data in
relational formats like trees, flows, and timelines, automatically, without any human
input. Visual Script is a relationship visualization platform that empowers organizations
to visualize data across siloed ecosystems and gain critical insights in real-time. Today,
SmartDraw Software is one of the most sophisticated digital marketing organizations
in the world with over 90,000 unique visitors to our website each business day and in
excess of 3,000,000 installations of our apps each year. SmartDraw is used by more
than half of the Fortune 500 and by over 250,000 public and private enterprises of all
sizes around the world. Privately held, SmartDraw Software is headquartered in San
Diego, California.

2.6.2 HARDWARE REQUIREMENTS

The selection of hardware configuring is a very task related to the software
development, particularly inefficient RAM may affect adversely on the speed and
corresponding on the efficiency of the entire system. The processor should be powerful
to handle all the operations. The hard disk should have the sufficient to solve the
database and the application.


Hardware used for development:

```
CPU : Intel i5 Processer
Memory : 4 GB
Cache : 6 MB
Hard Disk : 1 TB
Monitor : 15.6” Monitor
Keyboard : Standard108 keys Enhanced Keyboard
Mouse : Optical Mouse
```
Minimum Hardware Required for Implementation:

```
CPU : Pentium IV Processor
Memory : 256MB Above
Cache : 512 KB Above
Hard Disk : 20 GB Above
Monitor : Any
Keyboard : Any
Mouse : Any
```

## 3. SYSTEM DESIGN

### 3.1 SYSTEM ARCHITECTURE

A system architecture or system’s architecture is the conceptual model that defines the
structure, behavior, and more views of a system. An architecture description is a formal
description and representation of a system, organized in a way that supports reasoning
about the structures of the system,

System architecture can comprise system components, the externally visible properties
of those components, the relationships (e.g. the behavior) between them. It can provide
a plan from which products can be procured, and systems developed, that will work
together to implement the overall system. There have been efforts to formalize
languages to describe system architecture; collectively these are called architecture
description languages (ADLs).

The system architecture can best be thought of as a set of representations of an existing
(or to be created) system. It is used to convey the informational content of the elements
comprising a system, the relationships among those elements, and the rules governing
those relationships. The architectural components and set of relationships between
these components that architecture describes may consist of hardware, software,
documentation, facilities, manual procedures, or roles played by organizations or
people. System architecture is primarily concerned with the internal interfaces among
the system's components or subsystems, and the interface between the system and its
external environment, especially the user.

The structural design reduces complexity, facilitates change and result in easier
implementation by encouraging parallel development of different parts of the system.
The procedural design transforms structural elements of program architecture into a
procedural description of software components. The architectural design considers
architecture as the most important functional requirement. The system is based on the
three-tier architecture.

The first level is the user interface (presentation logic), which displays controls,
receives and validates user input. The second level is the business layer (business logic)
where the application specific logic takes place. The third level is the data layer where
the application information is stored in files or database. It contains logic about to


retrieve and update data. The important feature about the three-tier design is that
information only travels from one level to an adjacent level.

### 3.2 MODULE DESIGN

Modular programming is a software design technique that emphasizes separating the
functionality of a program into independent, interchangeable modules, such that each
contains everything necessary to execute only one aspect of the desired functionality.
Conceptually, modules represent a separation of concerns, and improve maintainability
by enforcing logical boundaries between components.

Different modules of this project include.

1. User Authentication
    This module enables both administrators and users to securely log into Note
    Sharing Pro. Administrators log in using their unique username and password,
    which grants them access to all system functions and management tools.
    College log in using their unique username and password, which grants them
    access to all system functions and management tools allotted for modification
    of their college side. Faculty and Students also log in with their credentials to
    access and interact with content. This Module supports password changes and
    resets for both admins and users, ensuring they can maintain account security
    and recover access if needed.
2. Registration
    The registration module is designed to handle the entire registration process for
    all stakeholders, including administrators, college, faculty and students. This
    module ensures that only registered users can access and share content on the
    platform. During registration, Students are required to provide essential
    information such as name, email, phone number, username, and password,
    which is securely stored in the database. Administrators use this module to
    manage registrations for various content categories, ensuring that documents
    and other resources are properly categorized and easily accessible. The module
    includes several sub-modules for document registration, college registration,
    etc., providing a comprehensive and organized approach to managing user and
    content registrations on the platform


3. Activities
    The activities Module oversees the sharing of documents on the platform,
    allowing students and faculty to upload various types of files, which are then
    reviewed and approved by the college to ensure quality and relevance. This
    module also organizes documents into categories and manages access
    permissions based on user roles. Also, the Virtual Currency Module manages a
    virtual coin system, where users receive an initial allocation of coins to access
    content, and can purchase more coins through various online payment methods.
    Administrators oversee coin transactions, allocations, and usage to prevent
    abuse, providing a flexible and engaging way for users to interact with content
    while generating revenue for the platform.
4. Generating Report
    This module allows administrators to generate and review detailed reports on
    platform activity. Reports include metrics on document submissions, user
    interactions, and coin transactions. The system supports various report formats,
    such as pie charts, Excel spreadsheets, and PDFs, providing insights into usage
    patterns and content popularity. Administrators can generate reports on user
    activity, document access statistics, and financial transactions, which helps in
    managing the platform effectively and making informed decisions. The
    reporting module plays a crucial role in monitoring system performance and
    optimizing user engagement.

### 3.3 DATABASE DESIGN

A database is a collection of interrelated data stored with minimum redundancy to serve
many users quickly and efficiently. The general objective is to make information access
easy, quick, inexpensive and flexible for the users. The general theme behind a database
is to integrate all information. Database design is recognized as a standard of
management information system and is available virtually for every computer system.

In database design several specific objectives are considered:

- Ease of learning and use
- Controlled redundancy


- Data independence
- More information at low cost
- Accuracy and integrity
- Recovery from failure
- Privacy and security
- Performance

3.3.1 Normalization
Designing a database is complete task and the normalization theory is a useful aid in
the design process. The process of normalization is concerned with transformation of
conceptual schema into computer representation form. There will be need for most
databases to grow by adding new attributes and new relations. The data will be used in
new ways. Tuples will be added and deleted. Information stored may undergo updating
also. New association may also be added. In such situations the performance of a
database is entirely depend upon its design. A bad database design may lead to certain
undesirable things like:

- Repetition of information
- Inability to represent certain information
- Loss of information

To minimize these anomalies, Normalization may be used. If the database is in a
normalized form, the data can be growing without, in most cases, forcing the rewriting
application programs. This is important because of the excessive and growing cost of
maintaining an organization’s application programs and its data from the disrupting
effects of database growth. As the quality of application programs increases, the cost
of maintaining the without normalization will rise to prohibitive levels. A normalized
database can also encompass many related activities of an organization thereby
minimizing the need for rewriting the applications of programs. Thus, normalization
helps one attain a good database design and there by ensures continued efficiency of
database.

Normalization theory is built around the concept of normal forms. A relation is said to
be in normal form if it satisfies a certain specified set of constraints. For example, a
relation is said to be in first normal form (1NF) if it satisfies the constraint that it


contains atomic values only. Thus, every normalized relation is in 1NF.Numerous
normal forms have been defined. Codd defined the first three normal forms.

All normalized relations are in 1NF, some 1NF relations are also in 2NF and some 2NF
relations are also in 3NF.2NF relations are more desirable than 1Nf and 3NF are more
desirable than 2NF. That is, the database designer should prefer 3NF than 1NF or
2NF.Normalization procedure states that a relation that is in some given normal form
can be converted into a set of relations in a more desirable form. We can define this
procedure as the successive reduction of a given collection of relations to some more
desirable form. This procedure is reversible. That is, it is always possible to take the
output from the procedure and convert them back into input. In this process, no
information is lost. So, it is also called “no loss decomposition”.

First Normal Form

A relation is in first normal form (1NF) if and all its attributes are based on single
domain. The objective of normalizing a table is to remove its repeating groups and
ensure that all entries of the resulting table have at most single value.

Second Normal Form

A table is said to be second Normal Form (2NF), when it is in 1NF and every attribute
in record is functionally dependent upon the whole key, and not just a part of the key.

Third Normal Form

A table is in third Normal Form (3NF), when it is in 2NF and every non-key attribute
is functionally dependent on just the primary key.

3.3.2 Table Structure
Table is a collection of complete details about a particular subject. These data are saved
in rows and Columns. The data of each Row are different units. Hence, rows are called
RECORDS and Columns of each row are called FIELDS.

Data is stored in tables, which is available in the backend the items and data, which are
entered in the input, form id directly stored in this table using linking of database. We
can link more than one table to input forms. We can collect the details from the different
tables to display on the output.


There are mainly 11 tables in the project. They are,

1. tbl_adminlogin
2. tbl_district
3. tbl_location
4. tbl_department
5. tbl_course
6. tbl_college
7. tbl_college_department
8. tbl_college_course
9. tbl_faculty
10. tbl_student
11. tbl_subject
12. tbl_document
13. tbl_wallet
14. tbl_access
15. chatroom
16. chat_member
17. chat


1. Table: tbl_adminlogin
Description: This table is used to store admin login details.
    Table 3.1 tbl_adminlogin
Field
Name

```
Data Type Constraint Description of Field
```
login_id Int Primary
Key

This field is used to uniquely identify
login id of admin, and the values are
automatically generated.
username Varchar(20) Not Null This is field is used to store the username
of the admin
password Varchar(30) Not Null This is field is used to store the password
of the admin

2. Table: tbl_district
Description: This table is used to store the district details.

```
Table 3.2 tbl_district
Field Name Data Type Constraint Description of Field
district_id Int Primary
Key
```
```
This field is used to uniquely identify
district, and the values are
automatically generated.
district_name Varchar(20) Not Null This field stores the district name of
the district.
```

3. Table: tbl_location
Description : This table is used to store the department information.

```
Table 3. 3 tbl_location
```
Field Name Data Type Constraint Description of Field

location_id Int Primary
Key

This field is used to uniquely identify
location, and the values are
automatically generated.
district_id Int Foreign
key

This field stores the district id of the
district
location_name Varchar(20) Not Null This field stores the name of the
location under the district.

4. Table: tbl_department
Description : This table is used to store department details.
    Table 3.4 tbl_department
Field Name Data Type Constraint Description of Field
department_id Int Primary
Key

```
This field is used to uniquely
identify department, and the
values are automatically
generated.
Department_name Varchar (20) Not Null This field stores the name of
the department.
Department_logo Varchar(100) Not Null This field stores the image of
the department.
```

5. Table: tbl_course
Description : This table is used to store the course details.
    Table 3.5 tbl_course

Field Name Data Type Constraint Description of Field

course_id Int Primary
Key

This field is used to uniquely
identify courses, and the values are
automatically generated.
course_name Varchar(20) Not Null This field stores the name of the
courses.
sem_count Int Not Null This field stores the number of the
semesters in each course.
Department_id Int Foreign
key

```
This field stores the department id
of the district
```

6. Table: tbl_college
Description : This table is used to store the college details.
    Table 3. 6 tbl_college
Field Name Data Type Constraint Description of Field

College_id Int Primary
Key

This field is used to
uniquely identify college,
and the values are
automatically generated.
College_name Varchar(100) Not Null This field stores the name
of the college.
District_id Int Foreign
key

This field stores the
district id of the district
Location_id Int Foreign
key

This field stores the
location id of the district
College_phone_number Bigint Not null This field stores the phone
number of the college
College_email Varchar(30) Not null This field stores the email
of the college
Reg_date Date Not null This field stores the
registration date of the
college.
Image Varchar(100) Not Null This is field is used to
store the image of the
college.
username Varchar(20) Not null This field stores the
username of the college.
Password Varchar (30) Not null This field stores the
password of the college.


7. Table: tbl_college_department
Description : This table is used to store the department details in a college.
    Table 3. 7 tbl_college_department
Field Name Data
Type

```
Constraint Description of Field
```
```
College_department_id Int Primary
Key
```
```
This field is used to uniquely
identify department in a
college , and the values are
automatically generated.
Department_id Int Foreign
key
```
```
This field stores the
department id of the
department.
College_id Int Foreign
key
```
```
This field stores the college id
of the college.
```
8. Table: tbl_college_course
Description : This table is used to store the course details in a college.
    Table 3. 8 tbl college_course
Field Name Data
Type

```
Constrai
nt
```
```
Description of Field
```
College_course_id Int
Primary
Key

This field is used to uniquely
identify course in a college, and
the values are automatically
generated.
Course_id Int Foreign
key

This field stores the course id of
the course.
College_Department_id Int Foreign
key

```
This field stores the college
department id of the college
department.
```

9. Table: tbl_faculty
Description : This table is used to store the faculty details.
    Table 3.9 tbl_faculty
Field Name Data Type Constraint Description of Field

faculty_id Int Primary
Key

This field is used to uniquely
identify faculty, and the
values are automatically
generated.
College_id int Foreign
key

This field stores the college
id of the college
name Varchar(20) Not Null This field stores the name of
the faculty.
Phone Varchar(20) Not Null This is field stores the phone
number of the faculty.
College_department_id int Foreign
key

This field stores the college
department id of the college
department
Location_id int Foreign
key

This field stores the location
id of the location
Email Varchar(30) Not Null This is field stores the email
of the faculty.
regdate date Not null This field stores the
registration date of the
faculty
Username Varchar(20) Not Null This field stores the
username of the faculty.
Password Varchar(20) Not Null This field stores the password
of the faculty.


10. Table: tbl_subjects
Description : This table is used to store the subject details in a course.
    Table 3. 10 tbl_subject
Field Name Data Type Constraint Description of Field

Subject_id Int Primary
Key

This field is used to uniquely
identify subject in a course, and
the values are automatically
generated.
Subject_name Varchar(20) Not null This field stores the name of the
subject.
Semester Int Not null This field stores the semesters of
subject.
College_course_id Foreign key Not null This field stores the college
course id of the college course.


11. Table: tbl_student
Description : This table is used to store the student details.
    Table 3. 11 tbl_student
Field Name Data Type Constraint Description of Field

student_id Int Primary
Key

```
This field is used to
uniquely identify user, and
the values are automatically
generated.
```
College_id int Foreign
key

```
This field stores the college
id of the college.
```
Name Varchar(20) Not null This field stores the name
of the user.
Phone Varchar(20) Not Null This is field stores the
phone number of the
student.

Email Varchar(30) Not Null This is field stores the
email of the student.

Gender Varchar( 1 0) Not Null This is field stores the
gender of the student.
College_department_id int Foreign
key

```
This field stores the college
department id of the college
department
```
College_course_id int Foreign
key

This field stores the college
course id of college course
Location_id int Foreign
key

This field stores the
location id of the location
Dob date Not null This field stores the date of
birth of the student
Username Varchar(20) Not Null This field stores the email
of the user.

User_Password Varchar(20) Not Null This field stores the
password of the user.

Wallet_no Varchar(20) Not Null This field stores the wallet
no. of the user

regdate date Not null This field stores the date of
the student registration


12. Table: tbl_document
Description : This table is used to store the details about document.
    Table 3. 12 tbl_document
Field Name Data Type Constraint Description of Field

document_id Int Primary
Key

```
This field is used to uniquely
identify type of user, and the
values are automatically
generated.
```
name Varchar (20) Not null This is field is used to store the
document of the user

category Varchar (20) Not null This is field is used to store the
category of the document
Subject_id Int Foreign
key

```
This field stores the subject id
of the subject
```
documentfilename Varchar
( 100 )

```
Not null This field stores the document
file name of the document
```
status Varchar(20) Not null This field stores the status of
the document

remark Varchar(100) Null This field stores the remark of
document

coin int Not null This field stores the coin
allocated

uploaded_id int Foreign
key

This field stores the id of the
person who uploaded the
document
type Varchar(20) Not null This field stores the user of the
person who uploaded the
document


13. Table: tbl_walletinfo
Description : This table is used to store the wallet details.
    Table 3. 13 tbl_walletinfo
Field
Name

```
Data
Type
```
```
Constraint Description of Field
```
Wallet_id Int Primary
Key

This field is used to uniquely identify
wallet, and the values are automatically
generated.
Wallet_no Int Foreign
Key

```
This field stores the wallet id of the user.
```
Coin Int Not Null This field stores the coin count of the
wallet.

14. Table: tbl_access
Description: This table is used to store the access information about the document.
    Table 3. 14 tbl_access
Field Name Data
    Type

```
Constraint Description of Field
```
access_id Int Primary
Key

This field is used to uniquely identify type
of user, and the values are automatically
generated.
Document_id int Foreign
key

This field stores the document id of the
document
Access_date date Not null This field stores the access of document

Type int Foreign
key

```
This field gives details about the person
who accessed the document.
```

15. Table: chatroom
Description: This table is used to store the details of the chatroom.
    Table 3. 15 chatroom
Field Name Data Type Constraint Description of Field

chatroomid Int Primary
Key

This field is used to uniquely identify
chatroom, and the values are
automatically generated.
chat_name Varchar(60) Not null This field stores the name of the
chatroom
date_created date Not null This field stores the date of the
chatroom created.

16. Table: chat_member
Description: This table is used to store the access information about the members
in a chatroom.
    Table 3. 16 chat_member
Field Name Data Type Constraint Description of Field

Chat_memberid Int Primary
Key

This field is used to uniquely
identify user in the chat room, and
the values are automatically
generated.
chatroomid Int Foreign
key

This field stores the chatroom id of
the chatroom
userid Int Foreign
key

This field stores the userid of the
user
status Varchar(50) Not null This field gives details about the
person has access to the chatroom.


17. Table: chat
Description: This table is used to store the chat in a chatroom.
    Table 3. 17 chat
Field
Name

```
Data Type Constraint Description of Field
```
```
chatid Int Primary
Key
```
```
This field is used to uniquely identify
message sent by the user, and the
values are automatically generated.
userid Int Foreign
key
```
```
This field stores the user id of the
student
chatroomid Int Foreign
key
```
```
This field stores the chatroom id of
the chatroom
message Varchar(200) Not null This field stores the message sent by a
user
chatdate date Not null This field stores the date of the
message sent.
```
### 3.4 DATA FLOW DIAGRAM

```
3.3.3.1 Introduction to Data Flow Diagrams
Data Flow Diagram is a network that describes the flow of data and processes that
change, or transform, data throughout the system. This network is constructed by use a
set of symbols that do not imply a physical implementation. It is a graphical tool for
structured analysis of the system requirements. DFD models a system by using external
entities from which data flows to a process, which transforms the data and creates,
output-data-flows which go to other processes or external entities or files. Data in files
may also flow to processes as inputs.
There are various symbols used in a DFD. Bubbles represent the processes. Named
arrows indicate the data flow. External entities are represented by rectangles. Entities
supplying data are known as sources and those that consume data are called sinks. Data
```

are stored in a data store by a process in the system. Each component in a DFD is
labelled with a descriptive name. Process names are further identified with a number.

The Data Flow Diagram shows the logical flow of a system and defines the boundaries
of the system. For a candidate system, it describes the input (source), outputs
(destination), database (files) and procedures (data flow), all in a format that meet the
user’s requirements.

The main merit of DFD is that it can provide an overview of system requirements, what
data a system would process, what transformations of data are done, what files are used,
and where the results flow.

This network is constructed by use a set of symbols that do not imply a physical
implementation. It is a graphical tool for structured analysis of the system requirements.
DFD models a system by using external entities from which data flows to a process,
which transforms the data and creates, output-data-flows which go to other processes
or external entities or files. External entities are represented by rectangles. Entities
supplying data are known as sources and those that consume data are called sinks. Data
are stored in a data store by a process in the system. It is a graphical tool for structured
analysis of the system requirements. DFD models a system by using external entities
from which data flows to a process, which transforms the data and creates, output-data-
flows which go to other processes or external entities or files. Data in files may also
flow to processes as inputs.

Rules for constructing a Data Flow Diagram

1. Arrows should not cross each other
2. Squares, circles and files must bear names.
3. Decomposed data flow squares and circles can have same time
4. Choose meaningful names for data flow
5. Draw all data flows around the outside of the diagram


Basic Data Flow Diagram Symbols

```
Table 3.12 Data Flow Diagram Symbols
```
```
A data flow is a route, which
enables packets of data to travel
from one point to another. Data may
flow from a source to a process and
from data store or process. An arrow
line depicts the flow, with arrow
head pointing in the direction of the
flow.
Circles stands for process that
converts data in to information. A
process represents transformation
where incoming data flows are
changed into outgoing data flows.
```
```
A data store is a repository of data
that is to be stored for use by a one
or more process may be as simple as
buffer or queue or sophisticated as
relational database. They should
have clear names. If a process
merely uses the content of store and
does not alter it, the arrowhead goes
only from the store to the process. If
a process alters the details in the
store, then a double-headed arrow is
used.
A source or sink is a person or part
of an organization, which enters or
receives information from the
system, but is considered to be
outside the contest of data flow
model.
```

3.3.3.2 Data Flow Diagram
Each component in a DFD is labelled with a descriptive name. Process name is further
identified with number. Context level DFD is draw first. Then the process is
decomposed into several elementary levels and is represented in the order of
importance. A DFD describes what data flow (logical) rather than how they are
processed, so it does not depend on hardware, software, and data structure or file
organization. A DFD methodology is quite effective; especially when the required
design.

```
Fig 3.1 Zeroth level DFD for Note Sharing Pro
```
```
Fig 3.2 First Level DFD for Note Sharing Pro
```

Fig 3.3 Second Level DFD for User Authentication





Fig 3. 4 Second Level DFD for Registration


Fig 3. 5 Second Level DFD for Activities



Fig 3. 6 Second Level DFD for Reports


### 3.5 INTERFACE DESIGN

These modules can apply to hardware, software or the interface between a user and a
machine. An example of a user interface could include a GUI, a control panel for a
nuclear power plant, or even the cockpit of an aircraft. In systems engineering, all the
inputs and outputs of a system, subsystem, and its components are listed in an interface
control document often as part of the requirements of the engineering project. The
development of a user interface is a unique field.

3.4.1 User Interface Screen Design
The user interface design is very important for any application. The interface design
describes how the software communicates within itself, to system that interpreted with
it and with humans who use it. The input design is the process of converting the user-
oriented inputs into the computer-based format. The data is fed into the system using
simple inactive forms. The forms have been supplied with messages so that the user can
enter data without facing any difficulty. They data is validated wherever it requires in
the project. This ensures that only the correct data have been incorporated into system.
The goal of designing input data is to make the automation as easy and free from errors
as possible. For providing a good input design for the application easy data input and
selection features are adopted. The input design requirements such as user friendliness,
consistent format and interactive dialogue for giving the right messages and help for
the user at right are also considered for development for this project.

Input Design is a part of the overall design. The input methods can be broadly classified
into batch and online. Internal controls must be established for monitoring the number
of inputs and for ensuring that the data are valid. The basic steps involved in input
design are:

- Review input requirements.
- Decide how the input data flow will be implemented.
- Decide the source document.
- Prototype on line input screens.
- Design the input screens


The quality of the system input determines the quality of the system output. Input
specifications describe the manner in which data enter the system for processing. Input
design features can ensure the reliability of the system and produce results from
accurate data. The input design also determines whether the user can interact efficiently
with the system.

This is a sample form of login:

```
Fig 3.7 Login Form
```
The successful creation of new account and then the technician can login to our website
using the username and password. That can be get by an email. The user registration
form is very important in the project. This allows the user to enter their details and
register in the system before login in to the system. This helpful for the users to prove
their credential. Each user must have to fill the full details that are given in the form to
register into the system after log in to it. Each field have its own label that denotes the
value need to enter in that box. Also, each textbox has placeholders which helpful for
the user to decide the type of value which need to enter in the box. The form also has a
button that allows the user to pass the contents entered in the form to the database table.
The data entered in the form should be correct according to the type of that field. All
labels are arranged in the same alignment line and all boxes to enter values are also in
the same line.


These is a sample input form:

```
Fig 3. 8 Student Registration form
```
This input form is for creating a profile for a new student. It contains textboxes for
inputting Name, Email, Contact Number and Username. The form also gives a
provision for the user to select their District and Place from the select box. After
clicking the Submit button the user will get a mail which confirm the successful creation
of new account and then the user can login to our website using the username and
password. The customer registration form is very important in the project. This allows
the customer to enter their details and register in the system before login in to the
system. This helpful for the customers to prove their credential. Each customer must
have to fill the full details that are given in the form to register into the system and log
in to it. Each field have its own label that denotes the value need to enter in that box.
Also, each textbox has placeholders which helpful for the user to decide the type of
value which need to enter in the box. The form also has a button that allows the user to
pass the contents entered in the form to the database table. The data entered in the form
should be correct according to the type of that field. All labels are arranged in the same
alignment line and all boxes to enter values are also in the same line.

3.4.1 Output Design


A quality output is one, which meets the requirements of end user and presents the
information clearly. In any system result of processing are communicated to the user
and to the other system through outputs. In the output design it is determined how the
information is to be displayed for immediate need.

It is the most important and direct source information is to the user. Efficient and
intelligent output design improves the system’s relationships with the user and helps in
decision -making. The objective of the output design is to convey the information of all
the past activities, current status and to emphasis important events. The output generally
refers to the results and information that is generated from the system. Outputs from
computers are required primarily to communicate the results of processing to the users.

Output also provides a means of storage by copying the results for later reference in
consultation. There is a chance that some of the end users will not actually operate the
input data or information through workstations, but will see the output from the system.

Two phases of the output design are:

1. Output Definition
2. Output Specification
Output Definition takes into account the type of output contents, its frequency and its
volume, the appropriate output media is determined for output. Once the media is
chosen, the detail specification of output documents are carried out. The nature of
output required from the proposed system is determined during logical design stage. It
takes the outline of the output from the logical design and produces output as specified
during the logical design phase.

In a project, when designing the output, the system analyst must accomplish the
following:

- Determine the information to present.
- Decide whether to display, print, speak the information and select the output
    medium.
- Arrange the information in acceptable format.
- Decide how to distribute the output to the intended receipt.


- Thus, by following the above specifications, a high-quality output can be
    generated.

Output Specification involves detailing the Output Documents: Specifying the
format, layout, and content of reports and displays.

Ensuring Logical Design Alignment: Ensuring that the output aligns with the
specifications defined during the logical design phase.


## 4. IMPLEMENTATION

Implementation is the stage of the project when the theoretical design is turned into a
working system. The implementation stage is a systems project in its own rig ht. It
includes careful planning, investigation of current system and its constraints on
implementation, design of methods to achieve the changeover, training of the staff in
the changeover procedure and evaluation of changeover method

### 4.1 CODING STANDARDS

PHP follows few rules and maintains its style of coding. As there are many coders and
developers all over the world, so each of them can follow different coding styles and
standards but this would have raised great confusion and difficulty for a developer to
understand another developer’s code. It would have been hard to manage and store the
code for future reference. Here is where the coding standards come into play. This not
only makes a code easy to read but also makes the code very easy to refer in the future.
This makes the code understandable and clearer to decipher, just like a blueprint. This
also makes the code more formal and industry or software oriented. Below mentioned
are few guidelines that one must follow in order to maintain the standard of PHP coding.

1. PHP tags: One must use the PHP standard tags(), rather than the shorthand
tags()to delimit the PHP code.
2. Commenting: Use of standard C and C++ commenting style i.e., (//) – for
single line and (/* */) – for multi-line, is highly encouraged and use of Python or Perl
style of commenting i.e., (#), is discouraged.
3. Line length and Indentation: It is a standard recommendation to not exceed
more than 75-85 characters per line of code. One must not use tabs for indentation
instead use 4 spaces as it is the standard indenting method in most of the programming
languages.
4. Structuring the control flow statements: The control flow or conditional
statements must be written in such a way so that it could be differentiated from function
call statements. While writing if, for, while, switch and other control flow statements
there must be one space between the keyword and the opening parenthesis.


Example:

filter_none edit play_arrow brightness_4

<?php $n = 5; if ($n > 0){ echo "Positive";

} elseif ($n < 0){ echo "Negative";

} else{ echo "Zero";

}

?>

Output:

Positive

5. Function Calls: While writing a function call statement, there must be no space
between the function name and the opening parenthesis. Example:

filter_none edit play_arrow brightness_4

<?php

echo testFunc(5, 6);

function testFunc($num1, $num2) {

$val = $num1 + $num2;

return $val;

}

?>

Output:

11

6. Naming Variables: Here are few conventions that one must follow in order to
name the variables:
- Use of lower case letters to name the variables.


- Use of ‘_’ to separate the words in a variable.
- Static variable names may be started with a letter ‘s’.
- Global variable names must start a with letter ‘g’.
- Use of upper-case letters to define global constants with ‘_’ as a separator.
7. Block alignment: Every block of code and curly braces must be aligned.
8. Short Functions: All functions and methods must limit themselves to a single
page and must not be lengthy.

### 4.2 SAMPLE CODE

```
Fig 4.1 Faculty Registration Page
```
<?php

include_once("header.php");

include_once("../dboperation.php");

$obj=new dboperation();

$sqlquery="select * from tbl_district";


$sqlquery1="select * from tbl_college_department l inner join tbl_department d on
l.department_id=d.department_id ";

$result1=$obj->executequery($sqlquery1);

$result=$obj->executequery($sqlquery);

?>

<script src="../jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function()

{

// alert("ajax applied");

$("#district_id").change(function()

{

var district_id=$(this).val();

$.ajax({

type: "POST",

url: "getfacultylocation.php",

data: "district_id="+district_id,

success: function(data){

$("#divlocation").html(data);

}

});

});

});

</script>


<html>

<head>

<meta charset="utf-8">

<title>Faculty Registration Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LINEARICONS -->

<link rel="stylesheet" href="college department/fonts/linearicons/style.css">

<!-- STYLE CSS -->

<link rel="stylesheet" href="college department/faculty/css/style.css">

</head>

<br>

<div class="wrapper">

<div class="inner" style="margin-right: 393px;

margin-left: 330px;">

<img src="images/image-1.png" alt="" class="image-1">

<form action="facultyregaction.php" method="POST"
enctype="multipart/form-data" class="forms-sample">

<h3>Faculty Registration</h3>

<div class="form-holder">

Name:<input type="text" class="form-control" placeholder="Name"
name="name"required pattern="^[A-Z][a-zA-Z]*$"

title="Must start with capital letter followed by upper or lowercase letters">

</div>

<div class="form-holder">


Email:<input type="email" class="form-control" placeholder="Email"
name="email"placeholder="contact"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-
z]{2,}$" title="must enter a valid email address" value=""required>

</div>

<div class="form-holder">

Phone No.:<input type="number" class="form-control"
placeholder="Phone No." name="phnno"placeholder="contact" pattern="[0-9]{10}"
value="" required title="Must contain 10 digits" value=""required>

</div>

<div>

Department:

<select id="department_id" name="department" class="form-
control"required>

<option>Select Department</option>

<?php

while($display=mysqli_fetch_array($result1))

{

?>

<option value="<?php echo
$display["college_department_id"];?>"><?php echo
$display["department_name"];?></option>

<?php

}

?>

</select>

</div>


<div class="form-group">

<label for="exampleDistrictname">District Name</label>

<select id="district_id" name="district" class="form-
control"required>

<option>Select district</option>

<?php

while($display=mysqli_fetch_array($result))

{ ?>

<option value="<?php echo $display["district_id"];?>"><?php echo
$display["district_name"];?></option>

<?php

} ?>

</select>

</div>

<div id="divlocation">

<div class="form-group">

<label for="exampleLocationname">Location Name</label>

<select name="location" class="form-control"required>

<option>Select Location</option>

</select>

</div>

</div>

<div class="form-holder">

Username:<input type="text" class="form-control"
placeholder="username" name="username"pattern="[a-zA-Z0-9]{5,15}"


title="Must contain minimum 5 and maximum 15 characters" required>

</div>

<div class="form-holder">

Password:<input type="password" class="form-control"
placeholder="Password" name="password"pattern="(?=.\d)(?=.[a-z])(?=.*[A-
Z]).{8,}"

title="Must contain at least one number, one uppercase and lowercase letter, and
at least 8 or more characters"

required>

</br>

<button type="submit" name="Submit"class="btn btn-primary mr-
2">Submit</button>

<button type="reset" class="btn btn-white mr-2">Cancel</button>

</div>

</div>

</br>

<script src="js/jquery-3.3.1.min.js"></script>

<script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php

include_once("footer.php");

?>


## 5. TESTING

Coding conventions are a set of guidelines for a specific programming language that
recommend programming style, practices and methods for each aspect of a piece
program written in this language. These conventions usually cover file organization,
indentation, comments, declarations, statements, white space, naming conventions,
programming practices, programming principles, programming rules of thumb,
architectural best practices, etc. These are guidelines for software structural quality.
Software programmers are highly recommended to follow these guidelines to help
improve the readability of their source code and make software maintenance easier.

### 5.1 TEST CASES

The objective of system testing is to ensure that all individual programs are working as
expected, that the programs link together to meet the requirements specified and to
ensure that the computer system and the associated clerical and other procedures work
together. The initial phase of system testing is the responsibility of the analyst who
determines what conditions are to be tested, generates test data, produced a schedule of
expected results, runs the tests and compares the computer produced results with the
expected results with the expected results. The analyst may also be involved in
procedures testing. When the analyst is satisfied that the system is working properly,
he hands it over to the users for testing. The importance of system testing by the user
must be stressed. Ultimately it is the user must verify the system and give the go-ahead.

During testing, the system is used experimentally to ensure that the software does not
fail, i.e., that it will run according to its specifications and in the way users expect it to.
Special test data is input for processing (test plan) and the results are examined to locate
unexpected results. A limited number of users may also be allowed to use the system
so analysts can see whether they try to use it in unexpected ways. It is preferably to find
these surprises before the organization implements the system and depends on it. In
many organizations, testing is performed by person other than those who write the
original programs. Using persons who do not know how certain parts were designed or
programmed ensures more complete and unbiased testing and more reliable software.


Parallel running is often regarded as the final phase of system testing. Since he parallel
operation of two systems is very demanding in terms of user resources it should be
embarked on only if the user is satisfied with the results of testing -- it should not be
started if problems are known to exist. Testing is the major quality control measure
during software development. Its basic function is to detect errors in the software. Thus,
the goal of testing is to uncover requirement design and coding errors in the program.

Testing is the process of correcting a program with intends of finding an error. Different
types of testing are,

1. Unit Testing
2. Integrated Testing
3. Black Box Testing
4. White Box Testing
5. Validation Testing
6. User Acceptance Testing

#### 5.1.1 Unit Testing

In computer programming, unit testing is a method by which individual units of source
code, sets of one or more computer program modules together with associated control
data, usage procedures, and operating procedures are tested to determine if they are fit
for use. In this testing we test each module individual and integrated the overall system.
Unit testing focuses verification efforts on the smaller unit of software design in the
module. This is also known as module testing. The modules of the system are tested
separately. The testing is carried out during programming stage itself. In this testing
step each module is found to working satisfactory as regard to the expected output from
the module. There are some validation checks for verifying the data input given by the
user which both the formal and validity of the entered. It is very easy to find error debug
the system.


```
Fig 5.1 Unit testing
```
```
Fig 5.2 Unit testing result
```
We have continued Unit Testing from the starting of the coding phase itself. Whenever
we completed one small sub module, some amount of testing was done based on the
requirements to see if the functionality is aligned to the gathered requirements.


#### 5.1.2 Integration Testing

Integration testing (sometimes called integration and testing, abbreviated I&T) is the
phase in software testing in which individual software modules are combined and tested
as a group. Software components may be integrated in an iterative way or all together
("big bang"). Normally the former is considered a better practice since it allows
interface issues to be located more quickly and fixed. Data can be lost across an
interface; one module can have an adverse effort on the other sub functions when
combined by, may not produce the desired major functions. Integrated testing is the
systematic testing for constructing the uncover errors within the interface. This testing
was done with sample data. The developed system has run success full for this sample
data. The need for integrated test is to find the overall system performance.

Integration testing is a logical extension of unit testing. In its simplest form, two units
that have already been tested are combined into a component and the interface between
them is tested. A component, in this sense, refers to an integrated aggregate of more
than one unit. Integration testing identifies problems that occur when units are
combined. By using a test plan that requires you to test each unit and ensure the viability
of each before combining units, you know that any errors discovered when combining
units are likely related to the interface between units. This method reduces the number
of possibilities to a far simpler level of analysis. Progressively larger groups of tested
software components corresponding to elements of the architectural design are
integrated and tested until the software works as a system.


```
Fig 5.3 Integration testing
```
Fig 5.4 Integration testing result


```
Fig 5.5 Integration testing result
```
We have performed integration testing whenever we have combined two modules
together. When two modules are combined we have checked whether the functionality
works correctly or not through integration testing.

#### 5.1.5 Validation Testing

At the culmination of Black Box testing, software is completely assembled as a
package, interface errors have been uncovered and corrected and final series of software
tests, Validation tests begins. Validation testing can be defined many was but a simple
definition is that validation succeeds when the software functions in a manner that can
be reasonably accepted by the customer. After validation test has been conducted one
of the two possible conditions exists.

1. The function or performance characteristics confirm to specification and are
accepted.
2. A derivation from specification uncovered and a deficiency list is created.


```
Fig 5.6 College Phone Number Validation
```
We have given various validations in our forms so that there will be a neat format for
the data’s that are entered on to the website. We have also given an already existing
validation so that the data redundancy is reduced; same data is not entered twice.

#### 5.1.6 User Acceptance Testing

Acceptance Testing is a level of the software testing process where a system is tested
for acceptability. User Acceptance testing is the software testing process where system
tested for acceptability & validates the end to end business flow. Such type of testing
executed by client in separate environment & confirms whether system meets the
requirements as per requirement specification or not.

UAT is performed after System Testing is done and all or most of the major defects
have been fixed. This testing is to be conducted in the final stage of Software
Development Life Cycle (SDLC) prior to system being delivered to a live environment.
UAT users or end users are concentrating on end to end scenarios & typically involves
running a suite of tests on the completed system.

User Acceptance testing also known as Customer Acceptance testing (CAT), if the
system is being built or developed by an external supplier. The CAT or UAT are the
final confirmation from the client before the system is ready for production. The


business customers are the primary owners of these UAT tests. These tests are created
by business customers and articulated in business domain languages. So ideally it is
collaboration between business customers, business analysts, testers and developers. It
consists of test suites which involve multiple test cases & each test case contains input
data (if required) as well as the expected output. The result of test case is either a pass
or fail.

### 5.2 TEST CASE DOCUMENTS

A test case is a set of conditions or variables under which a tester will determine whether
a system under test satisfies requirements or works correctly. The process of developing
test cases can also help find problems in the requirements or design an application. A
sample of test case document format is given below.

```
Table 5.1 Test Case
TC
NO.
```
```
Test Steps Expected Result Actual Result Status Comment
```
##### 1.

```
Run
application
and
navigate to
Add
Location
```
```
Location
registration screen
is displayed. A field
for enter location
name and a field for
selecting district
and a button submit
should be present
```
```
Location
registration screen
is displayed. A field
for enter location
name and a field for
selecting District
from drop down
and a button submit
is present
```
```
Pass
```
##### 2.

```
Enter the
save button
without
enter no
name to the
Location
name field
```
```
A message should
be displayed stating
that ‘Please fill out
this field’ beside of
Location Name
field.
```
```
A message has
been displayed
stating that ‘Please
fill out this field’ in
beside of Location
Name field.
```
```
Pass
```

##### 3.

```
Enter the
save button
after enter
on name to
the Location
name field
and without
selecting an
district
name.
```
```
A message should
be displayed stating
that ‘select district.
```
```
A message have
been displayed
stating that ‘select
district’.
Pass
```
##### 4.

```
Enter the
save button
after
entering
valid
location
name and a
valid district
```
```
A message should
be displayed stating
that Location
Registered
successfully
```
```
A message should
be displayed stating
that Location
Registered
successfully
```
```
Pass
```
##### 5.

```
After
Registration
navigate to
view
registered
Location
screen
```
```
Location details is
displayed.
Registered location
is displayed in a
table contain fields
SL.NO, Name, edit
and delete.
```
```
Location details is
displayed.
Registered location
is displayed in a
table contain fields
SL.NO, Name, edit
and delete.
```
```
Pass
```

## 6. CONCLUSION

The purpose of Note Sharing Pro is to modernize and automate the traditional methods
of sharing educational resources through the use of advanced web-based technology.
By leveraging sophisticated software and hardware, the system aims to efficiently
manage and store educational materials, ensuring easy access and manipulation of
valuable data. The required tools and technologies are readily available and user-
friendly, allowing for streamlined management without redundant entries. This means
that users can access relevant information without distractions, making the system both
efficient and effective. The project is designed to provide a comprehensive solution for
organizing and sharing educational resources, promoting a more structured and
collaborative learning environment. The system is user-friendly, requiring no formal
training to operate, which makes it accessible to a wide range of users. The result is a
reliable, secure, and fast management system that supports effective resource utilization
and minimizes the need for manual record-keeping.

Note Sharing Pro offers numerous benefits, including the ability for users to register
online, upload various types of educational documents, and access content through a
virtual coin system. Additionally, users can engage with the global doubt section to
seek help and discuss topics with peers and experts. The system also allows for easy
tracking of user activity and contributions, and administrators can efficiently manage
and verify content. User details are securely stored, ensuring confidentiality while
providing a personalized experience.

By integrating these features, Note Sharing Pro not only simplifies the process of
sharing educational resources but also fosters a collaborative and interactive learning
community. The project has been completed successfully within the allotted timeframe,
with all modules tested both individually and together using real data. The system has
proven to meet all defined objectives, enhancing the overall educational experience and
supporting effective knowledge exchange.

The implementation of Note Sharing Pro represents a significant advancement in
educational resource management, combining convenience, efficiency, and a strong
focus on user experience.


## 7. REFERENCES

[1] K K Aggarwal, Yogesh Singh – Software Engineering Third Edition
[2] Ramus Lerdorf and Kevin Tatore, Programming PHP
[3] Beginning PHP,Dave W Mercer,Allan Kent,Steven D Nowicki,David
[4] Mercer,Dan Squier,Wankyu Choi,Wiley Publishing,Inc
[5] Roger S Presssman-Software Engineering:A Practitioner’s Approach,Sixth
[6] Edition,MCGraw-Hill Higher Education
[7] Pamkaj Jalote-An Integerated approach to Software Engineerin,Second
Edition,Narosa publishing Company
[8] https://www.stackoverflow.com
[9] https://www.sqlsolutions.com
[10] [http://ecomputernotes.com/software-engineering/feasibilitystudy](http://ecomputernotes.com/software-engineering/feasibilitystudy)
[11] https://en.wikipedia.org/wiki/Third_normal_form
[12] https://www.w3resourse.com
[13] https://www.guru99.com/user-acceptance-testing.html
[14] https://www.tutorialspoint.com/system_analysis_and_design.html
[15] [http://softwaretestingfundamentals.com/test-case/](http://softwaretestingfundamentals.com/test-case/)
[16] [http://softwaretestingfundamentals.com/black-box-testing/](http://softwaretestingfundamentals.com/black-box-testing/)
[17] https://www.geeksforgeeks.org/php-coding-standards/
[18] https://www.geeksforgeeks.org/software-engineering-sdlc-v-model/
[19] https://www.tutorialspoint.com/sdlc/sdlc_quick_guide.htm
[20] [http://www.coddletech.com/php](http://www.coddletech.com/php)
[21] [http://www.datatreesystems.in/technologies/mysql/](http://www.datatreesystems.in/technologies/mysql/)
[22] [http://www.wampserver.com/en/](http://www.wampserver.com/en/)
[23] https://en.wikipedia.org/wiki/Adobe_Dreamweaver
[24] https://en.wikipedia.org/wiki/Microsoft_Word
[25] https://en.wikipedia.org/wiki/SmartDraw


## 8. APPENDIX

##### 8.1 SCREENSHOTS

```
Fig 8.1 Guest Page
```
```
Fig 8.2 Student Registration Page
```

```
Fig 8.3 Login Page
```
Fig 8.4 Admin Index Page


Fig 8.5 College Registration

```
Fig 8.6 College Details
```

```
Fig 8.7 College Details Edit Form
```
Fig 8.8 Pie Chart showing count documents uploaded by students based on
category


Fig 8.9 Date wise Report of Coin allocated to students

```
Fig 8.10 Excel report of students
```

```
Fig 8.11 Chatroom
```
Fig 8.1 2 Add chatroom


```
Fig 8. 13 College Index Page
```
Fig 8. 14 College Faculty Registration Page


```
Fig 8.13 Faculty View Page
```
Fig 8.14 Note Verification Page


```
Fig 8.15 Note Rejection
```
Fig 8.16 Coin Allocation Page


Fig 8.17 Student Index Page

```
Fig 8. 18 Profile Page
```

```
Fig 8.19 Student Profile Edit Page
```
Fig 8. 20 Accessed Document Page


Fig 8.2 1 Upload Document Page

```
Fig 8.2 2 Document View Page
```

```
Fig 8.23 Chatroom
```
Fig 8.24 Chatroom chat


```
Fig 8.2 5 Faculty profile
```
Fig 8.26 Forgot password



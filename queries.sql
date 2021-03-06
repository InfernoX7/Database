/*3. Select all details of each member. (2 marks)*/
SELECT * FROM member;

/*4. List each memberís names and age together with the name of their trainer, no IDs to be
displayed. (3 marks)*/

SELECT firstName, lastName, age, trainerName FROM member, trainer
WHERE member.trainerID = trainer.trainerID;

/*5. Insert a trainer. (3 marks)*/

INSERT INTO trainer (trainerID, trainerName) VALUES (NULL, "trainerName");

/*6. Delete a trainer. (3 marks)*/

DELETE FROM trainer
WHERE trainerName = trainerName;

/*7. Update a memberís last name given their first and last names. (4 marks)*/

UPDATE member SET lastName ="Last Name"
WHERE firstName = "First Name"
AND lastName = "Last Name";


/*8. Enrol a member in a class given the member ID and the class ID. (4 marks)*/

INSERT INTO enrolment (enrolmentID, memberID, classID) VALUES (NULL, "memberID", "classID")


/*9. List each memberís names and the classes that each member is enrolled on together with
the class trainerís name. (4 marks)*/ 

SELECT firstName, lastName, className, trainerName FROM member, _class, trainer, enrolment 
WHERE enrolment.memberID = member.memberID 
AND enrolment.classID = _class.classID 
AND _class.trainerID = trainer.trainerID; 


/*10. Show payment details for a member given their name. Both first name and last name
together with all payment details should be included, no IDs to be included, ordered by last
name then first name. (5 marks)*/

SELECT firstName, lastName, amount, _month FROM member, payment 
WHERE firstName = "First Name"
AND lastName = "Last Name"
AND member.memberID = payment.memberID;



/*11. Enrol a member in a class given the memberís names and the class name. (6 marks)*/

INSERT INTO enrolment (enrolmentID, memberID, classID) VALUES (NULL, 
(SELECT memberID FROM member WHERE firstName ="First Name" AND lastName ="Last Name"),
(SELECT classID FROM _class WHERE className ="Class Name"));


/*12. Given a trainerís name list all classes that s/he takes, together with the names of members
in those classes ordered by last name and then by first name of the member. (6 marks)*/

SELECT className, firstName, lastName FROM trainer, member, _class
WHERE trainerName = "Trainer Name"
AND trainer.trainerID = _class.trainerID
ORDER BY lastName, firstName; 





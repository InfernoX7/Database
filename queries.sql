/*3. Select all details of each member. (2 marks)*/
SELECT * FROM member;

/*List each member’s names and age together with the name of their trainer, no IDs to be
displayed. (3 marks)*/
SELECT firstName, lastName, age, trainerName FROM member, trainer
WHERE member.trainerID = trainer.trainerID;

/*5. Insert a trainer. (3 marks)*/
INSERT INTO trainer (trainerName, trainerID);

// INSERT INTO trainer (trainerID, trainerName) VALUES (NULL, "trainerName");

/*6. Delete a trainer. (3 marks)*/
DELETE FROM trainer
WHERE trainerName = trainerName;

/*7. Update a member’s last name given their first and last names. (4 marks)*/
UPDATE member SET lastName ="something"
WHERE firstName = , lastName = ; 
????????????????????

8. Enrol a member in a class given the member ID and the class ID. (4 marks)


/*9. List each member’s names and the classes that each member is enrolled on together with
the class trainer’s name. (4 marks)*/ 
SELECT firstName, lastName, className, trainerName FROM member, _class, trainer
WHERE enrolment.memberID = enrolment.classID
AND something to do with trainer ID here 

10. Show payment details for a member given their name. Both first name and last name
together with all payment details should be included, no IDs to be included, ordered by last
name then first name. (5 marks)

SELECT amount, _month, firstName, lastName FROM payment, member
WHERE payment.memberID = member.memberID 
ORDER BY lastName, firstName;

// "SELECT firstName, lastName, amount, _month FROM member, payment 
				WHERE firstName = "First Name"
				AND lastName = "Last Name"
				AND member.memberID = payment.memberID";



11. Enrol a member in a class given the member’s names and the class name. (6 marks)
12. Given a trainer’s name list all classes that s/he takes, together with the names of members
in those classes ordered by last name and then by first name of the member. (6 marks)

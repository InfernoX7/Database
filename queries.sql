/*3. Select all details of each member. (2 marks)*/
SELECT * FROM member;

/*List each member’s names and age together with the name of their trainer, no IDs to be
displayed. (3 marks)*/
SELECT firstName, lastName, age FROM member
WHERE member.trainerID = trainer.trainerID;

/*5. Insert a trainer. (3 marks)*/

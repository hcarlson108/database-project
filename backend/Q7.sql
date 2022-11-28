Use NewLibrary;
GO
SELECT fname, lname, ssn
FROM EMPLOYEE AS E
WHERE enum IN 
		(SELECT enum
		 FROM CHECKOUT AS C
         WHERE E.enum = C.enum AND MovieName = 'The Dark Knight');
 GO

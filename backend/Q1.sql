Use NewLibrary;
GO
SELECT MovieName, Mnum
FROM Posses 
WHERE MovieName != 'NULL';
GO
SELECT BookName, Mnum
FROM Book JOIN Posses on Book.ISBN = Posses.ISBN;
GO
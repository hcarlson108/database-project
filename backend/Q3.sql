Use NewLibrary;
Go
SELECT Mnum,COUNT(posses.Mnum) AS NumberOfItemsOut
FROM Posses
GROUP BY Mnum
Order By NumberOfItemsOut DESC;
GO

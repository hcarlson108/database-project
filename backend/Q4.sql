USe NewLibrary;
Go
SELECT DISTINCT BookName, COUNT(Book.isbn) AS NumberOfCheckouts
FROM Book Join Checkout on Book.ISBN = Checkout.ISBN
GROUP BY BookName
ORDER BY NumberOfCheckouts DESC;
GO

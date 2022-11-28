Use NewLibrary;
GO
SELECT MovieName
FROM MOVIE
WHERE Genre = 'Crime' AND Year < '2000';
GO
Use NewLibrary;
GO
SELECT DISTINCT MovieName
FROM MOVIE AS M
WHERE MovieName IN 
		         (SELECT MovieName
		          FROM CHECKOUT AS C
		          WHERE enum = 2 AND M.MovieName = C.MovieName);
GO
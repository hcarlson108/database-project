SELECT DISTINCT Mnum
FROM Posses
WHERE MediaType = 0 AND 
        Mnum IN(Select DISTINCT Mnum
                from Posses 
                where MediaType = 1);
                        

                        
                        


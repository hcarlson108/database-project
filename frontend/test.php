<?php include "../dbinfo.inc"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>RL Public Library</title>
</head>
<body>
    <?php
        $conn = new mysqli("database-2.c1pwygv6gurd.us-east-2.rds.amazonaws.com",
                           "admin", 
                           "Pword1234",
                           "RaymondLutherPublicLibrary");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <div class="top">
        <h1 class="rlpl">Raymond Luther Public Library</h1>
        <div class="loginsignup">
            <button class="login">Login</button>
            <button class="signup">Signup</button>
        </div>
        <nav class="navbar">
        <ol>
            <li class="navbutton"><a href="home.html">Home</a></li>
            <li class="navbutton"><a href="books.html">Books</a></li>
            <li class="navbutton"><a href="movies.html">Movies</a></li>
            <li class="navbutton"><a href="more.html">More</a></li>
        </ol>
        </nav>
    </div>
    <h1></h1>
    <h2 style="text-align: center ;">Welcome to the Raymond Luther book catalog!</h2>
    <h2>Search for a book</h2>
    <form action="books.html" method="get">
        <input type="text" name="search" placeholder="Type here">
        <input type="submit" value="Search">
    </form>
    <br> 
    <p><i>Showing 10 Results</i></p>
    <br> 
    <hr>
    <br>

    <table cellpadding="4" cellspacing="4" >
        <tr>
            <td>Enum</td>
            <td>Mnum</td>
            <td>DoC</td>
            <td>DoR</td>
            <td>MovieName</td>
            <td>ISBN</td>
            <td>MediaType</td>
        </tr>
        <?php
            $sql = "SELECT * FROM Checkout";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while($query_data = mysqli_fetch_row($result)){
                    echo "<tr>";
                    echo   "<td>",$query_data[0], "</td>",
                           "<td>",$query_data[1], "</td>",
                           "<td>",$query_data[2], "</td>",
                           "<td>",$query_data[3], "</td>",
                           "<td>",$query_data[4], "</td>",
                           "<td>",$query_data[5], "</td>",
                           "<td>",$query_data[6], "</td>";
                   echo "</tr>";
            }
            } else{
                echo "0 results";
            }
        ?>

    </table>

    <p style="float: left;">
        <a href="images/gatsby.jpg" target="_self" title ="The Great Gatsby">
        <img src="images/gatsby.jpg" height="300" border="1px" ></a>
    </p>
    <h2><i><ins>The Great Gatsby</ins></i></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: F. Scott Fitzgerald

Genre: Fiction

Year: 1925

Book Description:
The story takes place in 1922, during the Roaring Twenties, a time of prosperity in the United States. The novel chronicles the summer that Nick Carraway, a Midwesterner recently arrived in New York City, spends with his cousin Daisy Buchanan and her husband, Tom, a wealthy Midwesterner. Nick is drawn into the world of the Buchanans, a world of lavish parties on Long Island's North Shore. He is attracted to Jordan Baker, a beautiful young golfer, and becomes enmeshed in a plot to bring down her philandering lover, Tom. The novel is notable for its vivid description of life in the 1920s, and for its portrayal of the decay of the American Dream.
    </textarea>
</div>

    <br>
    <hr>
    <br>

    <p style="float: left;">
        <a href="images/chekhov.jpg" target="_self" title ="The Stories of Anton Chekhov">
        <img src="images/chekhov.jpg" height="300" border="1px" ></a>
    </p>
    <h2><ins><i>The Stories of Anton Chekhov</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Anton Chekhov

Genre: Fiction

Year: 1892

Book Description:
The Stories of Anton Chekhov is a collection of short stories by Anton Chekhov. It was first published in 1892 in Russia. The stories were translated into English by Constance Garnett and published in 1904 in the United States.
    </textarea>
</div>
    
    <br>
    <hr>
    <br>

    <p style="float: left;">
        <a href="hamlet.jpg" target="_self" title ="Hamlet">
        <img src="hamlet.jpg" height="300" border="1px" ></a>
    </p>
    <h2><ins><i>Hamlet</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: William Shakespeare

Genre: Drama

Year: 1599

Book Description:
The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet (/ˈhæmlɪt/), is a tragedy written by William Shakespeare sometime between 1599 and 1601. It is Shakespeare's longest play, with 29,551 words. Set in Denmark, the play depicts Prince Hamlet and his revenge against his uncle, Claudius, who has murdered Hamlet's father in order to seize his throne and marry Hamlet's mother.
    </textarea>
</div>
    <br>
    <hr>
    <br>
   
    <p style="float: left;">
        <a href="images/anna.jpg" target="_self" title ="Anna Karenina">
        <img src="images/anna.jpg" height="300" border="1px" ></a>
    </p>
    <h2><ins><i>Anna Karenina</ins></i></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Leo Tolstoy

Genre: Fiction

Year: 1877

Book Description:
Anna Karenina is a novel by the Russian writer Leo Tolstoy, published in serial installments from 1873 to 1877 in the periodical The Russian Messenger. Tolstoy clashed with editor Mikhail Katkov over political issues that arose in the final installment; the novel's publication was then delayed until 1877. Tolstoy was unhappy with the serial publication of Anna Karenina, and he is said to have remarked that he would have written a shorter book if he had known that it would be published in installments. The novel is divided into 59 chapters, with a prologue and an epilogue. The first 53 chapters are set in the 1870s, in St. Petersburg and Moscow, and cover the affairs of the Levin family and the Oblonskys, and the love affair between Anna Karenina and Count Vronsky. The last six chapters take place in 1879 and 1880, and describe events that take place after Anna's departure from Moscow.
    </textarea>
</div>

    <br>
    <hr>
    <br>
        
    <p style="float: left;">
        <a href="images/huckleberry.jpg" target="_self" title ="The Adventures of Huckleberry Finn">
        <img src="images/huckleberry.jpg" height="300" border="1px" ></a>
    </p>
    <h2><ins><i>The Adventures of Huckleberry Finn</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Mark Twain 

Genre: Adventure Fiction

Year: 1884

Book Description:
The Adventures of Huckleberry Finn is a novel by Mark Twain, first published in the United Kingdom in December 1884 and in the United States in February 1885. Commonly named among the Great American Novels, the work is among the first in major American literature to be written throughout in vernacular English, characterized by local color regionalism. It is told in the first person by Huckleberry "Huck" Finn, the narrator of two other Twain novels (Tom Sawyer Abroad and Tom Sawyer, Detective) and a friend of Tom Sawyer. It is a direct sequel to The Adventures of Tom Sawyer.
    </textarea>
</div>

    <br>
    <hr>
    <br>
        
    <p style="float: left;">
        <a href="images/lolita.jpg" target="_self" title ="Lolita">
        <img src="images/lolita.jpg" height="300" border="1px" ></a>
    </p>
    <h2><ins><i>Lolita</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Vladimir Nabokov

Genre: Fiction

Year: 1955

Book Description:
Lolita is a 1955 novel written by Russian-American novelist Vladimir Nabokov. The novel is notable for its controversial subject: the protagonist and unreliable narrator, a middle-aged literature professor under the pseudonym Humbert Humbert, is obsessed with a 12-year-old girl, Dolores Haze, whom he kidnaps and sexually abuses after becoming her stepfather. "Lolita", the Spanish nickname for Dolores, is what he calls her privately. The novel was originally written in English and first published in Paris in 1955 by Olympia Press.
    </textarea>
</div>

    <br>
    <hr>
    <br>
         
        <p style="float: left;">
            <a href="images/war.jpg" target="_self" title ="War and Peace">
            <img src="images/war.jpg" height ="300" border="1px"></a>
        </p>
        <h2><ins><i>War and Peace</i></ins></h2>
        <br>
        <textarea name="message" rows="16" cols="80"
        >
Author: Leo Tolstoy

Genre: Historical Novel
        
Year: 1869
        
Book Description:
The novel chronicles the French invasion of Russia and the impact of the Napoleonic era on Tsarist society through the stories of five Russian aristocratic families. Portions of an earlier version, titled The Year 1805, were serialized in The Russian Messenger from 1865 to 1867 before the novel was published in its entirety in 1869.
        </textarea>
    </div>
    
    <br>
    <hr>
    <br>

    <p style="float: left;">
        <a href="images/Madame Bovary.jpg" target="_self" title ="Madame Bovary">
        <img src="images/Madame Bovary.jpg" height ="300" border="1px"></a>
    </p>
    <h2><ins><i>Madame Bovary</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Gustave Flaubert

Genre: Fiction
    
Year: 1857
    
Book Description:
Madame Bovary is a novel by Gustave Flaubert, published in 1857. The story takes place in France and Normandy in the 1840s and revolves around a doctor's wife, Emma Bovary, who has adulterous affairs and lives beyond her means in order to escape the banalities and emptiness of provincial life.
    </textarea>
</textarea>
</div>
            
    <br>
    <hr>
    <br>
            
    <p style="float: left;">
        <a href="images/MiddleMarch.jpg" target="_self" title ="Middlemarch">
        <img src="images/MiddleMarch.jpg" height ="300" border="1px"></a>
    </p>
    <h2><ins><i>Middlemarch</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: George Eliot

Genre: Historical Fiction
    
Year: 1871
    
Book Description:
Set in Middlemarch, a fictional English Midland town, in 1829 to 1832, it follows distinct, intersecting stories with many characters.[1] Issues include the status of women, the nature of marriage, idealism, self-interest, religion, hypocrisy, political reform, and education. Despite comic elements, Middlemarch uses realism to encompass historical events: the 1832 Reform Act, early railways, and the accession of King William IV. 
    </textarea>
</div>

    <br> 
    <hr>
    <br>
            
    <p style="float: left;">
        <a href="images/marcel.jpg" target="_self" title ="In Search of Lost Time">
        <img src="images/marcel.jpg" height ="300" border="1px"></a>
    </p>
    <h2><ins><i>In Search Of Lost Time</i></ins></h2>
    <br>
    <textarea name="message" rows="16" cols="80"
    >
Author: Marcel Proust

Genre: Modern Literature
    
Year: 1913
    
Book Description:
In Search of Lost Time (French: À la recherche du temps perdu), also translated as Remembrance of Things Past, is a novel by Marcel Proust. It is his most prominent work, known both for its length and its theme of involuntary memory, the most famous example being the "episode of the madeleine". The novel was first published in serial form between 1913 and 1927 in the French literary journal La Revue de Paris. It was later published in its entirety in 7 volumes between 1927 and 1931. The novel is considered by critics to be one of the most important works of 20th-century fiction.
    </textarea>
</div> 

    <br>
    <hr>
    <br>

    <br>

<script src="./js/home.js"></script>
</body>
</html>
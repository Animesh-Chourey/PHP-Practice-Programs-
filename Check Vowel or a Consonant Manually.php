<html>
<head>
<style> div.cd{background:teal;} a{text-decoration:none; color:white;} p{font-size:20;text-align:justify;} th:hover{background-color:black;} th{font-size: 20}
</style>
</head>
<body bgcolor="">
   <div class="cd" style="color:white;font-size:50;width:100%;top:0;left:0;position:sticky;border: 1px solid black"> 
        
       <table  >
       <tr> <td><img src="logo.png" width="100" height="100" style="padding-left:50" alt="loading.."></td>
            <td> <font color="white" size="33" face="cooper" >  Fast  &  Furious  Logics </font> </td>
            <form method="post" action="<?php $_PHP_SELF ?>">
              <td align="right" style="padding-left:350;font-size:25">
               <font color="white"  face="cooper" >   search <input type="text" name="search">
               </font>
             </td>
               </form>
             
       </tr>
     </table>
   </div>
   <table >
    <tr >
      <td height="100%" valign="top">
   <iframe src="links.php"  height="520" style="overflow:scroll;top:0"></iframe>
      </td>
      <td valign="top"  style="font-size: 20;font-family: cursive;" width="750">
       <div style="overflow: scroll ; height:550;">  
<h1>
Check Vowel or a Consonant Manually
</h1>


The five alphabets A, E, I, O and U are called vowels. All other alphabets except these 5 vowel letters are called consonants.

This program assumes that the user will always enter an alphabet character.
<pre>
 Program to Check Vowel or consonant
#include <stdio.h>
int main()
{
    char c;
    int isLowercaseVowel, isUppercaseVowel;

    printf("Enter an alphabet: ");
    scanf("%c",&c);

    // evaluates to 1 (true) if c is a lowercase vowel
    isLowercaseVowel = (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u');

    // evaluates to 1 (true) if c is an uppercase vowel
    isUppercaseVowel = (c == 'A' || c == 'E' || c == 'I' || c == 'O' || c == 'U');

    // evaluates to 1 (true) if either isLowercaseVowel or isUppercaseVowel is true
    if (isLowercaseVowel || isUppercaseVowel)
        printf("%c is a vowel.", c);
    else
        printf("%c is a consonant.", c);
    return 0;
}
Output

Enter an alphabet: G
G is a consonant.
</pre>
The character entered by the user is stored in variable c.

The isLowerCaseVowel evaluates to 1 (true) if c is a lowercase vowel and 0 (false) for any other character.

Similarly, isUpperCaseVowel evaluates to 1(true) if c is an uppercase vowel and 0 (false) for any other character.

If both isLowercaseVowel and isUppercaseVowel is equal to 0, 
the test expression evaluates to 0 (false) and the entered character is a consonant.

However, if either isLowercaseVowel or isUppercaseVowel is 1 (true),
 the test expression evaluates to 1 (true) and the entered character is a vowel.

The program above assumes that the user always enters an alphabet. If the user enters any other 
character other than an alphabet, the program will not work as intended.


</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
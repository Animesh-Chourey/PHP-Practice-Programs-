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
Program to Check Armstrong Number
</h1>


A positive integer is called an Armstrong number if the sum of cubes of individual digit is equal to that number itself. For example:
<pre>
153 = 1 * 1 * 1 + 5 * 5 * 5 + 3 * 3 * 3 
 // 153 is an Armstrong number.
12 is not equal to 1 * 1 * 1 + 2 * 2 * 2 
 // 12 is not an Armstrong number.

int main()
{
    int number, originalNumber, remainder, result = 0;

    printf("Enter a three digit integer: ");
    scanf("%d", &number);

    originalNumber = number;

    while (originalNumber != 0)
    {
        remainder = originalNumber%10;
        result += remainder*remainder*remainder;
        originalNumber /= 10;
    }

    if(result == number)
        printf("%d is an Armstrong number.",number);
    else
        printf("%d is not an Armstrong number.",number);

    return 0;
}

Output
Enter a positive integer: 371
371 is an Armstrong number.
</pre>
In the above program, a positive integer is asked to enter by the user which is stored in the variable origNum.
Then, the number is copied to another variable num. This is done because we need to check the origNum at the end.
Inside the while loop, last digit is separated from num by the operation digit = num % 10;. This digit is cubed and added to the variable sum.
Now, the last digit is discarded using the statement num /= 10;.
In the next cycle of while loop, second last digit is separated, cubed and added to sum.
This continues until no digits are left in num. Now, the total sum sum is compared to the original number origNum.
If the numbers are equal, the entered number is an Armstrong number. If not, the number isn't an Armstrong number.
</div>

</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
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
 Palindrome Number
</h1>

This program takes an integer from user and that integer is reversed.
If the reversed integer is equal to the integer entered by user then, that number is a palindrome if not that number is not a palindrome.
<pre>
int main()
{
    int n, reversedInteger = 0, remainder, originalInteger;

    printf("Enter an integer: ");
    scanf("%d", &n);

    originalInteger = n;

    // reversed integer is stored in variable 
    while( n!=0 )
    {
        remainder = n%10;
        reversedInteger = reversedInteger*10 + remainder;
        n /= 10;
    }

    // palindrome if orignalInteger and reversedInteger are equal
    if (originalInteger == reversedInteger)
        printf("%d is a palindrome.", originalInteger);
    else
        printf("%d is not a palindrome.", originalInteger);
    
    return 0;
}


Output
Enter a positive number: 12321
The reverse of the number is: 12321
The number is a palindrome.

Enter a positive number: 12331
The reverse of the number is: 13321
The number is not a palindrome.
</pre>
In the above program, use is asked to enter a positive number which is stored in the variable num.
The number is then saved into another variable n to check it when the original number has been reversed.
Inside the do...while loop, last digit of the number is separated using the code digit = num % 10;. This digit is then added to the rev variable.
Before adding the digit to rev, we first need to multiply the current data in the revvariable by 10 in order to add the digit to the nth place in the number.
For example: in the number 123, 3 is in the zeroth place, 2 in the oneth place and 1 in the hundredth place.
So, to add another number 4 after 123, we need to shift the current numbers to the left, so now 1 is in the thousandth place, 2 in the oneth place, 3 is in the onethplace and 4 in the zeroth place.
This is done easily by multiplying 123 by 10 which gives 1230 and adding the number 4, which gives 1234. The same is done in the code above.
When the do while loop finally ends, we have a reversed number in rev. This number is then compared to the original number n.
If the numbers are equal, the original number is a palindrome, otherwise it's not.
</body>


</div>

</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
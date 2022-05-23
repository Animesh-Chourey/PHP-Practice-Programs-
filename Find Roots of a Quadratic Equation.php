
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
Find Roots of a Quadratic Equation
</h1>

C Programming Operators
C if...else Statement
The standard form of a quadratic equation is:

ax2 + bx + c = 0, where
a, b and c are real numbers and
a ≠ 0
The term b2-4ac is known as the discriminant of a quadratic equation. The discriminant tells the nature of the roots.

If discriminant is greater than 0, the roots are real and different.
If discriminant is equal to 0, the roots are real and equal.
If discriminant is less than 0, the roots are complex and different.
Discriminant of quadratic equation
<pre>
int main()
{
    double a, b, c, discriminant, root1, root2, realPart, imaginaryPart;

    printf("Enter coefficients a, b and c: ");
    scanf("%lf %lf %lf",&a, &b, &c);

    discriminant = b*b-4*a*c;

    // condition for real and different roots
    if (discriminant > 0)
    {
    // sqrt() function returns square root
        root1 = (-b+sqrt(discriminant))/(2*a);
        root2 = (-b-sqrt(discriminant))/(2*a);

        printf("root1 = %.2lf and root2 = %.2lf",root1 , root2);
    }

    //condition for real and equal roots
    else if (discriminant == 0)
    {
        root1 = root2 = -b/(2*a);

        printf("root1 = root2 = %.2lf;", root1);
    }

    // if roots are not real 
    else
    {
        realPart = -b/(2*a);
        imaginaryPart = sqrt(-discriminant)/(2*a);
        printf("root1 = %.2lf+%.2lfi and root2 = %.2f-%.2fi", realPart, imaginaryPart, realPart, imaginaryPart);
    }

    return 0;
}   

Output 

Enter coefficients a, b and c: 2.3
4
5.6
Roots are: -0.87+1.30i and -0.87-1.30i
</pre>
In this program, library function sqrt() is used to find the square root of a number. To learn more, visit:  sqrt() function.
}


</div>

</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
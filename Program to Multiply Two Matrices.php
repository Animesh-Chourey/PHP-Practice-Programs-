
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
Program to Multiply Two Matrices
</h1>

To multiply two matrices, the number of columns of first matrix should be equal to the number of rows to second matrix. This program displays the error until the number of columns of first matrix is equal to the number of rows of second matrix.
<pre>
 
int main()
{
    int a[10][10], b[10][10], result[10][10], r1, c1, r2, c2, i, j, k;

    printf("Enter rows and column for first matrix: ");
    scanf("%d %d", &r1, &c1);

    printf("Enter rows and column for second matrix: ");
    scanf("%d %d",&r2, &c2);

    // Column of first matrix should be equal to column of second matrix and
    while (c1 != r2)
    {
        printf("Error! column of first matrix not equal to row of second.\n\n");
        printf("Enter rows and column for first matrix: ");
        scanf("%d %d", &r1, &c1);
        printf("Enter rows and column for second matrix: ");
        scanf("%d %d",&r2, &c2);
    }

    // Storing elements of first matrix.
    printf("\nEnter elements of matrix 1:\n");
    for(i=0; i<r1; ++i)
        for(j=0; j<c1; ++j)
        {
            printf("Enter elements a%d%d: ",i+1, j+1);
            scanf("%d", &a[i][j]);
        }

    // Storing elements of second matrix.
    printf("\nEnter elements of matrix 2:\n");
    for(i=0; i<r2; ++i)
        for(j=0; j<c2; ++j)
        {
            printf("Enter elements b%d%d: ",i+1, j+1);
            scanf("%d",&b[i][j]);
        }

    // Initializing all elements of result matrix to 0
    for(i=0; i<r1; ++i)
        for(j=0; j<c2; ++j)
        {
            result[i][j] = 0;
        }

    // Multiplying matrices a and b and
    // storing result in result matrix
    for(i=0; i<r1; ++i)
        for(j=0; j<c2; ++j)
            for(k=0; k<c1; ++k)
            {
                result[i][j]+=a[i][k]*b[k][j];
            }

    // Displaying the result
    printf("\nOutput Matrix:\n");
    for(i=0; i<r1; ++i)
        for(j=0; j<c2; ++j)
        {
            printf("%d  ", result[i][j]);
            if(j == c2-1)
                printf("\n\n");
        }
    return 0;
}
Output

Enter rows and column for first matrix: 3
2
Enter rows and column for second matrix: 3
2
Error! column of first matrix not equal to row of second.

Enter rows and column for first matrix: 2
3
Enter rows and column for second matrix: 3
2

Enter elements of matrix 1:
Enter elements a11: 3
Enter elements a12: -2
Enter elements a13: 5
Enter elements a21: 3
Enter elements a22: 0
Enter elements a23: 4

Enter elements of matrix 2:
Enter elements b11: 2
Enter elements b12: 3
Enter elements b21: -9
Enter elements b22: 0
Enter elements b31: 0
Enter elements b32: 4

Output Matrix:
24  29

6  25
</pre>
It is better to solve this program by passing it to a function. Visit this page to learn how you can multiplying matrices by passing arrays to a function.



</div>

</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
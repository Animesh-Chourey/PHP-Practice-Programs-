
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
Program to Add Two Matrices
</h1>
<pre>
In this program, user is asked to entered the number of rows r and columns c. 
The value of r and c should be less than 100 in this program.
The user is asked to enter elements of two matrices (of order r*c).
Then, the program adds these two matrices, saves it in another
matrix (two-dimensional array) and displays it on the screen.


int main(){
    int r, c, a[100][100], b[100][100], sum[100][100], i, j;

    printf("Enter number of rows (between 1 and 100): ");
    scanf("%d", &r);
    printf("Enter number of columns (between 1 and 100): ");
    scanf("%d", &c);

    printf("\nEnter elements of 1st matrix:\n");

    for(i=0; i<r; ++i)
        for(j=0; j<c; ++j)
        {
            printf("Enter element a%d%d: ",i+1,j+1);
            scanf("%d",&a[i][j]);
        }

    printf("Enter elements of 2nd matrix:\n");
    for(i=0; i<r; ++i)
        for(j=0; j<c; ++j)
        {
            printf("Enter element a%d%d: ",i+1, j+1);
            scanf("%d", &b[i][j]);
        }

    for(i=0;i<r;++i)
        for(j=0;j<c;++j)
        {
            sum[i][j]=a[i][j]+b[i][j];
        }
     
    printf("\nSum of two matrix is: \n\n");

    for(i=0;i<r;++i)
        for(j=0;j<c;++j)
        {

            printf("%d   ",sum[i][j]);

            if(j==c-1)
            {
                printf("\n\n");
            }
        }
    
    return 0;
}
Output

Enter number of rows (between 1 and 100): 2
Enter number of columns (between 1 and 100): 3

Enter elements of 1st matrix:
Enter element a11: 2
Enter element a12: 3
Enter element a13: 4
Enter element a21: 5
Enter element a22: 2
Enter element a23: 3
Enter elements of 2nd matrix:
Enter element a11: -4
Enter element a12: 5
Enter element a13: 3
Enter element a21: 5
Enter element a22: 6
Enter element a23: 3

Sum of two matrix is: 

-2   8   7   

10   8   6  
</pre>

</div>

</td>
<td valign="top">
       <iframe src="comment.php" height="520"></iframe>
     </td>
   </tr>
   </table>
</body>
</html>
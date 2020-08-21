var i;
var j;
for(i=1;i<=10;i++)
{
    document.write("<div class=\"col-md-2\" style=\"margin: 1%;\"><table class=\"table text-center\"><th>"+i+" Table </th>");
    for(j=1;j<=10;j++)
    {
        document.write("<tr><td>"+i+"&times;"+j+"="+(i*j)+"</td></tr>");
    }
    document.write("</table></div>")
}

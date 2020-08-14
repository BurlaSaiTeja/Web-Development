function display(x)
{
    document.getElementById("tt").value+=x;
}
function compute()
{
    var x = document.getElementById("tt").value;
    document.getElementById("tt").value = eval(x);
}

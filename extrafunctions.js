function makeTbl(obj){

    var table = document.createElement("table");

    var headRow = document.createElement("tr");
    table.appendChild(headRow);

    var th1 = document.createElement("th");
    th1.innerHTML = Object.keys(obj)[0];

    var th2 = document.createElement("th");
    th2.innerHTML = Object.keys(obj)[1];

    headRow.appendChild(th1);
    headRow.appendChild(th2);

    var tableData = "";

    for( var i=0; i<obj[Object.keys(obj)[0]].length; i++){
        tableData += "<tr><td>";
        tableData += obj[Object.keys(obj)[0]][i];
        tableData += "</td><td>";
        tableData += obj[Object.keys(obj)[1]][i];
        tableData += "</td></tr>";
    }


    table.innerHTML += tableData;

    return table;
}
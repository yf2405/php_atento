/*
function IntervalOfTime() {
  const queryJsButton = document.getElementById('query_js');
  if (queryJsButton) { // Asegurarse de que el elemento exista
    queryJsButton.addEventListener("submit", function(event){
      
      
    });
  }
}

 */

setTimeout(function() {
  var myAlert = document.getElementById('myalert');
  if (myAlert != null) {
    myAlert.style.display = "none";
  }
}, 3000); //  

/*
fetch('./db.php')
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error(error));


function updateTable() {
  const table = document.getElementById("myTable");
  const rows = table.getElementsByTagName("tr");
  for (let i = 0; i < rows.length; i++) {
    const cells = rows[i].getElementsByTagName("td");
    for (let j = 0; j < cells.length; j++) {
      const cellValue = Math.floor(Math.random() * 100);
      cells[j].innerHTML = cellValue;
    }
  }
}

// Actualiza la tabla cada 4 segundos
setInterval(updateTable, 4000);*/ 
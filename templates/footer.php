<script>
  window.onload = () => {


    // var rootStock = document.getElementById("root-stock");
    // rootStock.insertAdjacentHTML("beforeend", htmlString);
    // var disabled = document.querySelectorAll(".disabled");

    // console.log(disabled);
    // disabled.style.backgroundColor = "black";

    var table = document.getElementById("root-stock");
    let result = 0;

    for (var i = 0; i < table.rows.length; i++) {
      let price = parseInt(table.rows[i].cells[4].innerHTML);
      let quantity = parseInt(table.rows[i].cells[5].innerHTML);

      result = result + price * quantity;
    }
    document.getElementById("result").innerHTML = result;
    console.log(result);
  }

  function confirmDelete() {
    return confirm('Do you really want to Delete this row?');
  }




  /**
   * Sorts a HTML table.
   *
   * @param {HTMLTableElement} table The table to sort
   * @param {number} column The index of the column to sort
   * @param {boolean} asc Determines if the sorting will be in ascending
   */
  function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
      let aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
      let bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();

      if (!isNaN(parseFloat(aColText)) && !isNaN(parseFloat(bColText))) {
        aColText = parseFloat(aColText);
        bColText = parseFloat(bColText);
      }

      return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
      tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
  }

  document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
      const tableElement = headerCell.parentElement.parentElement.parentElement;
      const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
      const currentIsAscending = headerCell.classList.contains("th-sort-asc");

      sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
  });
</script>
</body>

</html>
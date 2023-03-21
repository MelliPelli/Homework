function deleteRow(id) {
  if (confirm("Are you sure you want to delete this row?")) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // The row was deleted successfully, remove it from the table
          var row = document.querySelector("[data-id='" + id + "']");
          row.parentNode.removeChild(row);
        } else {
          alert("Error deleting row: " + xhr.statusText);
        }
      }
    };
    xhr.open("POST", "delete.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id=" + encodeURIComponent(id));
  }
}

function editRow(id) {
    // get the selected row's values using AJAX
    $.ajax({
      url: "index.php",
      type: "GET",
      data: { id: id },
      success: function (data) {
        // populate the form fields with the selected record's values
        $('#nazev').val(data.nazev);
        $('#velikost').val(data.velikost);
        $('#vek').val(data.vek);
        
        // change the form action to the update script
        $('#popup form').attr('action', 'edit.php');
        
        // add a hidden input for the record's ID
        $('#popup form').append('<input type="hidden" name="id" value="' + id + '">');
        
        // display the popup form
        $('#popup').show();
      },
      error: function () {
        alert("An error occurred while fetching the record.");
      },
    });
  }
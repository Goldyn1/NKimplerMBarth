<!
     GEMS Group Project: - CSCI  467 Section ??
                         - Prof: Rush
                         - TA:   ????
     Names:
           Nathanael Kimpler  - Z1813114
           Micahel Barth      - Z1780089

     Purpose:

     GEMS-HOME.php:
>


<html>

  <head>
    <link rel="stylesheet" type="text/css" href="GEMS-style.css">
  </head>
<body>

<style>
body {
    font-family: "Lato", sans-serif;
    background-color: white;
}
</style>

<div class="header">
  <h1 align="center">GLOBAL ENTERTAINMENT MANAGEMENT SYSTEM</h1>
</div>

<div class="pagecontents">
  <table border=1 width=100%>
    <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>

 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>

 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Help</td>
    </tr>
 <tr>
      <td>Help</td>
      <td>Help</td>
      <td>Me</td>
    </tr>
  </table>

<p>This is lame</p>
</div>

<div class="sidenav">
  <a href="#about">Home</a>
  <button class="dropdown-btn">Agents
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Artists
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Bands
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Vendors
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Events
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Event</a>
  </div>
  <a href="#report">Reports</a>
  <a href="#contact">Logout</a>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>

</body>
</html>


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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<body>

<div class="header">
  <h1 align="center">&#9835  GLOBAL ENTERTAINMENT MANAGEMENT SYSTEM  &#9835</h1>
</div>

<div class="pagecontents">
  <table border=1 width=100% height=80%>
    <tr>
      <td align=center height=10%><div class="pagetitle">G.E.M System Homepage</div><hr class="style-one"></td>
    </tr>
    <tr>
      <td align=center height=20%><div class="pagebody">Welcome %NAME%, to the Global Entertainment Management System.</div></td>
    </tr>
    <tr>
      <td height=70%></td>
  </table>
</div>

<div class="sidenav">
  <br/>
  <br/>
  <a href="#about">Home</a>
  <button class="dropdown-btn">Agent
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Artist
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Band
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Vendor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Create</a>
    <a href="#">Update</a>
  </div>
 <button class="dropdown-btn">Event
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


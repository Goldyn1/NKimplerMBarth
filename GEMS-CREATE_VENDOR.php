<!
     GEMS Group Project: - CSCI  467 Section ??
                         - Prof: Rush
                         - TA:   ????
     Names:
           Nathanael Kimpler  - Z1813114
           Michael Barth      - Z1780089

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
      <td align=center height=10% colspan=3><div class="pagetitle">Create A New Vendor</div><hr class="style-one"></td>
    </tr>
    <tr>
      <td align=center height=20% colspan=3>
        <div id="form", style="width:350px;">
          <fieldset>
            <legend style="color:black;font-weight:bold;">General Information</legend>
              <table>
                <tr>
                  <td><span style="text-decoration:underline">C</span>hange Password To:</td>
                  <td><input type="text"/></td>
                </tr>
                <tr>
                  <td><span style="text-decoration:underline">C</span>onfirm Password:</td>
                  <td><input type="text"/></td>
                </tr>
              </table>
          </fieldset>
        </div>
      </td>
    </tr>
    <tr>
<td align=center height=40 colspan=3>
<table>
      <td align=right height=40%>
        <div id="form", style="width:350px;">
          <fieldset>
            <legend style="color:black;font-weight:bold;">General Information</legend>
              <table>
                <tr>
                  <td><span style="text-decoration:underline">C</span>hange Password To:</td>
                  <td><input type="text"/></td>
                </tr>
                <tr>
                  <td><span style="text-decoration:underline">C</span>onfirm Password:</td>
                  <td><input type="text"/></td>
                </tr>
              </table>
          </fieldset>
        </div>
       </td>
      <td width=5%> </td>
       <td align=left height=40%>
        <div id="form", style="width:350px;">
          <fieldset>
            <legend style="color:black;font-weight:bold;">General Information</legend>
              <table>
                <tr>
                  <td><span style="text-decoration:underline">C</span>hange Password To:</td>
                  <td><input type="text"/></td>
                </tr>
                <tr>
                  <td><span style="text-decoration:underline">C</span>onfirm Password:</td>
                  <td><input type="text"/></td>
                </tr>
              </table>
          </fieldset>
        </div>
      </td>
</table>
</td>
    </tr>

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


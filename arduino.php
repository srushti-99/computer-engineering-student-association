<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>Ardunio Worksop</h1>
<hr>

<h2>Photos</h2>
<p> </p>

<!-- Portfolio Gallery Grid -->
<div class="content">
  <img src="G1.jpg" alt="Bear" style="width:100%">
  <h3>CO6G 2018-2019</h3>
  <p>Group</p>
  <p>Photo</p>
</div>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="images/3.jpg" alt="Mountains" style="width:100%">
      <h3>Group 1</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/b5.jpeg" alt="Lights" style="width:100%">
      <h3>Group 2</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
      <h3>Group 3</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
      <h3>Group 4</h3>
      <p></p>
    </div>
  </div>
  -
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>

</body>
</html>

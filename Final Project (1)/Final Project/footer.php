<html>
<head>
  </head>
  <body>



<div class="col-12  text-black text-center ">

<div id="demo">
<button  type="button" class="btn btn-outline-light text-success" onclick="loadDoc()">About Us</button>
</div>
<div class="container">
 
<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajex.txt");
  xhttp.send();
}
</script>
</div>



<div class="col-12 text-muted text-center">

<P>Browse Alphabetically: Gmaing WebPage | Country Search | Manufacturers | Admin | Promotion | Paid Game</P>
<P>Paid Game Listing Policy - Intellectual Property Policy and Infringement Claims - Privacy Policy - Terms of Use</P>
<P>© 2022 ProsGuid Session.com. All rights reserved.</P>
</div>


</div>
</body>
</html>


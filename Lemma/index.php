<!DOCTYPE html>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto; /* 15% from the top and centered */
  padding: 20px;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<html>

<head>
  <title>Lemma</title>
</head>

<body >

<img src='lemma.jpg' width='800px' height="auto" usemap='#basket' />


<map name='basket'>
    <area shape='rect' id=myBtn href="javascript:;" coords='70 90 85 120' alt='basket_icon'/>
</map>

<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
<span class="close">&times;</span>
<p>flower game:
1a
"Johann Wolfgang von Goethe"
walk = arrow keys
pick flower = 'e'
confirm = 'enter'
</p>
<iframe frameborder="0" src="https://itch.io/embed-upload/3611493?color=333333" allowfullscreen="" width="1280" height="740" style="transform:scale(0.8);-moz-transform-scaleL:(0.5);"><a href="https://rousseauslemma.itch.io/uncoupdedes">Play un coup de dés jamais, jamais, jamais n'abolira le hasard on itch.io</a></iframe>
</div>

</div>
</body>§
</html>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

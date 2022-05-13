<?php
$dom = new DOMDocument;
$dom->loadHTMLFile("cm.html");
$h2 = $dom->getElementsByTagName('h2');
$i=0;
$p = $dom->getElementsByTagName('p');
?>

<!DOCTYPE html>
<html>
<head>
   <title>My Website</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light static">
  <div class="container-fluid">
      <form class="d-flex" style="width:100%;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()">
      </form>
  </div>
</nav>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("button")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
  

<div class="accordion" id="accordionExample">
  <ul id="myUL" style="list-style-type:none;padding: 0;margin: 0;">
  <?php for ($v = 0; $v < $h2->length; $v++) { ?>
  <li>                                        
  <div class="accordion-item">
    <h2 class="accordion-header" id="<?php echo "heading".$i; ?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo "#collapse".$i; ?>" aria-expanded="false" aria-controls="<?php echo "collapse".$i; ?>">
        <?php echo $h2->item($v)->nodeValue; ?>
      </button>
    </h2>
    <div id="<?php echo "collapse".$i; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading".$i; ?> " data-bs-parent="#accordionExample">
      <?php $i++; ?>
      <div class="accordion-body">
        <?php echo $p->item($v)->nodeValue; ?>
      </div>
    </div>
  </div></li>
  <?php } ?>
  </ul>
</div>
@extends('layouts.app')

@section('css')
<style>
* {
  box-sizing: border-box;
}

.autocomplete-items {
  border: 1px solid #d4d4d4;
  
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
@media only screen and (max-width: 600px) {
    .hide-button-desktop{
        display: none;
    }
}

    @media only screen and (min-width: 600px) {
    .hide-button-mobile{
        display: none;
    }
}
</style>
@endsection

@section('content')
<div class="container">
  @if (Auth::user()->role == 'admin')
    <div class="row mt-3">
      <div class="col-md-3">
        <div class="card shadow" style="border-radius: 20px;">
            <div class="card-body py-5 px-4">
              <h6 class="mb-4">Hello {{ Auth::User()->name }}, <span class="text-danger">Good Morning!</span></h6>
              <hr>
              <p><a href="#" class="text-decoration-none text-dark"><i class="bi bi-arrow-right"></i> Subscriber</a></p>
              <p><a href="#" class="text-decoration-none text-dark"><i class="bi bi-arrow-right"></i> Report</a></p>
              <a href="{{ url('admin/list-headline') }}" class="text-decoration-none text-dark"><i class="bi bi-arrow-right"></i> List Headline</a>
            </div>
        </div>
      </div>
      <div class="col-md-9">
          <div class="card shadow" style="border-radius: 20px;">
              <div class="card-body py-5 px-4">
                <form autocomplete="off" action="{{ url('headline/fill-in/next') }}" method="POST" class="needs-validation" novalidate>
                  @csrf
                  <div class="row">
                      <div class="col-md-12">
                          <h4>Headline Generator</h4>
                          <p>Search your business category below and system will generate for you.</p>
                      </div>
                      <div class="col-md-12">
                          <div class="mb-3 autocomplete">
                              <input id="myInput" type="text" class="form-control" name="business_category" placeholder="Business Category" required>
                          </div>
                          <button type="submit" class="btn btn-baby-blue float-end hide-button-desktop">Find Now <i class="bi bi-arrow-right"></i></button>
                          <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-baby-blue float-end hide-button-mobile">Find Now <i class="bi bi-arrow-right"></i></button>
                          </div>
                      </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
        <div class="col-md-12 text-center mt-5">
          <small class="text-center text-muted">All Right Reserved © {{ date('Y') }} Momentum Internet Sdn Bhd</small>
        </div>
    </div>
  @else
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h6>Hello {{ Auth::User()->name }}, <span class="text-danger">Good Morning!</span></h6>
      </div>
    </div>
    <form autocomplete="off" action="{{ url('headline/fill-in/next') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <div class="card shadow" style="border-radius: 20px;">
                    <div class="card-body py-5 px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Headline Generator</h4>
                                <p>Search your business category below and system will generate for you.</p>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 autocomplete">
                                    <input id="myInput" type="text" class="form-control" name="business_category" placeholder="Business Category" required>
                                </div>
                                <button type="submit" class="btn btn-baby-blue float-end hide-button-desktop">Find Now <i class="bi bi-arrow-right"></i></button>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-baby-blue float-end hide-button-mobile">Find Now <i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class="text-center text-muted mt-5">All Right Reserved © {{ date('Y') }} Momentum Internet Sdn Bhd</small>
        </div>
    </form>
  @endif
</div>
@endsection

@section('js')
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["servis","makanan","kecantikkan","kesihatan","fashion"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script> 
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection

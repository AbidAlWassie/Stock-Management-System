</body>
<script>
  window.onload = () => {

    var item = document.querySelectorAll(".value.num.item");
    var times = document.querySelectorAll(".value.num.times");

    a = item[0].textContent;
    b = times[0].textContent;

    c = item[1].textContent;
    d = times[1].textContent;

    e = item[2].textContent;
    f = times[2].textContent;

    console.log(a);
    console.log(b);

    console.log(c);
    console.log(d);

    console.log(e);
    console.log(f);

    console.log(a * b);
    console.log(c * d);
    console.log(e * f);
  }
</script>

</html>
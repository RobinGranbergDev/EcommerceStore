
<!--Footer-->
<footer id="footer">
	<div class="container-fluid pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul>
						<h3>Contact</h3>
						<li>Email: robin.granberg@hotmail.com</li>
						<li>Phone: 070-392 84 57</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {

        var scrollLink = $('.scroll');

        scrollLink.click(function(e) {
            e.preventDefault();
            $('body,html').animate({
            scrollTop: $(this.hash).offset().top
            }, 1000 );
        });
	});
</script>

</body>
</html>
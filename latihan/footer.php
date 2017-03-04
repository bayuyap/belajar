 </div>
        </div>
        </div>
        <div style="clear:both"></div>
		<div class="footer">
        <div class="text-footer">
        <a href="javascript:void(0);" id="jwpopupLink">Klik</a></div>
        </div>
        <div id="jwpopupBox" class="jwpopup">
	<div class="jwpopup-content">
		<div class="jwpopup-head">
			<span class="close">X</span>
			<h2>[Popup Header] Popup dengan Javascript dan CSS</h2>
		</div>
		<div class="jwpopup-main">
			<p>[Popup Content] ini popup.</p>
		</div>
		<div class="jwpopup-foot">
			<p>[Popup Footer] Creating popup using Javascript and CSS</p>
		</div>
	</div>
</div>
<script>
var box=document.getElementsByClassName('frame_gambar');
		function modal() {
			box[0].style.display = "block";
		}
window.onclick = function(event) {
    if (event.target == box) {
        box.style.display = "none" ;
    }
}

	
// untuk mendapatkan jwpopup
var jwpopup = document.getElementById('jwpopupBox');

// untuk mendapatkan link untuk membuka jwpopup
var mpLink = document.getElementById("jwpopupLink");

// untuk mendapatkan aksi elemen close
var close = document.getElementsByClassName("close")[0];

// membuka jwpopup ketika link di klik
mpLink.onclick = function() {
    jwpopup.style.display = "block";
}

// membuka jwpopup ketika elemen di klik
close.onclick = function() {
    jwpopup.style.display = "none";
}

// membuka jwpopup ketika user melakukan klik diluar area popup
window.onclick = function(event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}

</script>
</body>
</html>
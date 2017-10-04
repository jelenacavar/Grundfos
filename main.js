			var modal = document.getElementById("filesModal");
			var modal2 = document.getElementById("videoModal");

			var btn = document.getElementById("firstBtn");
			var btn2 = document.getElementById("secondBtn");

			var span = document.getElementsByClassName("close")[0];
			var span2 = document.getElementsByClassName("close")[1];

			btn.addEventListener("click", function() {
			    modal.style.display = "block";
			    document.getElementById("modal-content").className = "modal-content animated zoomIn";
			});

			btn2.addEventListener("click", function() {
			    modal2.style.display = "block";
			    document.getElementById("modal-content2").className = "modal-content animated zoomIn";
			});

			span.onclick = function() {
			    document.getElementById("modal-content").className = "modal-content animated zoomOut";
			    window.setTimeout(function() {
			        modal.style.display = "none";
			    }, 300);
			};

			span2.onclick = function() {
			    document.getElementById("modal-content2").className = "modal-content animated zoomOut";
			    window.setTimeout(function() {
			        modal2.style.display = "none";
			    }, 300);
			};

			window.onclick = function(event) {
			    if (event.target === modal) {
			        document.getElementById("modal-content").className = "modal-content animated zoomOut";
			        window.setTimeout(function() {
			            modal.style.display = "none";
			        }, 300);
			    }
			};

			window2.onclick = function(event) {
			    if (event.target === modal2) {
			        document.getElementById("modal-content2").className = "modal-content animated zoomOut";
			        window.setTimeout(function() {
			            modal2.style.display = "none";
			        }, 300);
			    }
			};
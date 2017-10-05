			var modal = document.getElementById("filesModal");
			var modal2 = document.getElementById("videoModal");
            var modal3 = document.getElementById("myModal3");
            var modal4 = document.getElementById("myModal4");

			var btn = document.getElementById("firstBtn");
			var btn2 = document.getElementById("secondBtn");
            var btn3 = document.getElementById("thirdBtn");
            var btn4 = document.getElementById("fourthBtn");

			var span = document.getElementsByClassName("close")[0];
			var span2 = document.getElementsByClassName("close")[1];
            var span3 = document.getElementsByClassName("close")[2];
            var span4 = document.getElementsByClassName("close")[3];

			btn.addEventListener("click", function() {
			    modal.style.display = "block";
			    document.getElementById("modal-content").className = "modal-content animated zoomIn";
			});

			btn2.addEventListener("click", function() {
			    modal2.style.display = "block";
			    document.getElementById("modal-content2").className = "modal-content animated zoomIn";
			});


            btn3.addEventListener("click", function() {
                modal3.style.display = "block";
                document.getElementById("modal-content3").className = "modal-content animated zoomIn";
            });

            btn4.addEventListener("click", function() {
                modal4.style.display = "block";
                document.getElementById("modal-content4").className = "modal-content animated zoomIn";
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

            span3.onclick = function() {
                document.getElementById("modal-content3").className = "modal-content animated zoomOut";
                window.setTimeout(function() {
                    modal3.style.display = "none";
                }, 300);
            };

            span4.onclick = function() {
                document.getElementById("modal-content4").className = "modal-content animated zoomOut";
                window.setTimeout(function() {
                    modal4.style.display = "none";
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

			window.onclick = function(event) {
			    if (event.target === modal2) {
			        document.getElementById("modal-content2").className = "modal-content animated zoomOut";
			        window.setTimeout(function() {
			            modal2.style.display = "none";
			        }, 300);
			    }
			};

            window.onclick = function(event) {
                if (event.target === modal3) {
                    document.getElementById("modal-content3").className = "modal-content animated zoomOut";
                    window.setTimeout(function() {
                        modal3.style.display = "none";
                    }, 300);
                }
            };

            window.onclick = function(event) {
                if (event.target === modal4) {
                    document.getElementById("modal-content4").className = "modal-content animated zoomOut";
                    window.setTimeout(function() {
                        modal4.style.display = "none";
                    }, 300);
                }
            };
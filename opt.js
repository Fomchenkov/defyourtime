document.getElementById("opt")
	.onchange = function () {
	    var b = {
	        1: "wowprogers",
	        2: "reid_score"
	    }, c = this.value,
	        a;
	    for (a in b) document.getElementById(b[a])
	        .style.display = 0 == c || c == a ? "block" : "none"
	};
document.getElementById("antor")
	.onchange = function(){
		var d = {
			1: "mihic",
			2: "heroic",
			3: "normal"
		}, f = this.value,
			j;
		for (j in d) document.getElementById(d[j])
			.style.display = 0 == f || f == j ? "block" : "none"
	};